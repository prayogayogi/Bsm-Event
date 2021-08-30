<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="main-content container-fluid">
	<div class="page-title">
		<div class="row">
			<?= $this->session->flashdata('status');  ?>
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Galery</h3>
				<p class="text-subtitle text-muted">Galery ini berisi berbagai jenis galery yang kami sediakan.</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class='breadcrumb-header'>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Galery</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="card">
			<div class="card-header">
				<a href="#" class="btn btn-outline-primary block" data-toggle="modal" data-backdrop="false" data-target="#tambahDataGalery">Tambah Data</a>
			</div>
			<div class="card-body">
				<table class='table table-striped' id="table1">
					<thead>
						<tr>
							<th>Jenis Galery</th>
							<th>Foto</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($index as $indexs) : ?>
							<tr>
								<td><?= $indexs['jenis_id']; ?></td>
								<td>
									<a href="#" data-toggle="modal" data-backdrop="false" data-target="#detailFoto<?= $indexs['id'] ?>"> <img src="<?= base_url('public/image/galery/') . $indexs['foto']; ?>" class="img-thumbnail" alt="galery" width="50px"></a>
								</td>
								<td>
									<div calass="btn-group">
										<div class="dropdown">
											<button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
												Aksi
											</button>
											<div class="dropdown-menu">
												<a href="<?= base_url('Admin/Galery/edit/') . $indexs['id']; ?>" class="dropdown-item text-success">
													Edit
												</a>
												<a href="<?= base_url('Admin/Galery/destroy/') . $indexs['id']; ?>" class="dropdown-item text-danger" onclick="return confirm('Apakah anda yakin ingin menghapus.?')">
													Hapus
												</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>

<!-- Modal store data galery -->
<div class="col-md-6 col-12">
	<div class="modal fade text-left modal-borderles" id="tambahDataGalery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel4">Tambah Data Galery</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i data-feather="x"></i>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('Admin/Galery/store') ?>" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col col-lg-12 col-md-6">

								<div class="form-group">
									<label for="jenis">Jenis Galery</label>
									<select class="form-control" name="jenis" id="inputGroupSelect02">
										<option>-- Pilih jenis layanan --</option>
										<?php foreach ($service as $services) : ?>
											<option value="<?= $services['jenis'] ?>"><?= $services['jenis'] ?></option>
										<?php endforeach; ?>
									</select>
									<?= form_error('jenis', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

								<div class="form-group">
									<label for="foto">Foto</label>
									<input type="file" name="foto" id="foto" class="form-control">
									<p><small class="text-muted">File type: jpg, png dan ukuran foto 800px x 800px</small></p>
									<?= form_error('foto', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

							</div>
							<div class="modal-footer mt-3">
								<button type="reset" class="btn btn-secondary" data-dismiss="modal">
									<i class="bx bx-x d-block d-sm-none"></i>
									<span class="d-none d-sm-block">Close</span>
								</button>
								<button type="submit" class="btn btn-primary ml-1">
									<i class="bx bx-check d-block d-sm-none"></i>
									<span class="d-none d-sm-block">Save</span>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Akhir modal store data galery -->

<!-- Modal Detail foto galery -->
<?php foreach ($index as $indexs) : ?>
	<div class="col-md-6 col-12">
		<div class="modal fade text-left" id="detailFoto<?= $indexs['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel4">Detail foto Galery</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i data-feather="x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<img src="<?= base_url('public/image/galery/') . $indexs['foto']; ?>" class="mt-4 mb-3 ml-3 img-thumbnail" alt="galery">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">
							<i class="bx bx-x d-block d-sm-none"></i>
							<span class="d-none d-sm-block">Close</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
<!-- Akhir detail foto galery -->

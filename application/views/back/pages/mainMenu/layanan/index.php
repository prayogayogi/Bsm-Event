<div class="main-content container-fluid">
	<div class="page-title">
		<div class="row">
			<?= $this->session->flashdata('status');  ?>
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Layanan</h3>
				<p class="text-subtitle text-muted">Layanan ini berisi berbagai jenis layanan yang kami sediakan.</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class='breadcrumb-header'>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Layanan</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="card">
			<div class="card-header">
				<a href="#" class="btn btn-outline-primary block" data-toggle="modal" data-backdrop="false" data-target="#tambahDataLayanan">Tambah Data</a>
			</div>
			<div class="card-body">
				<table class='table table-striped' id="table1">
					<thead>
						<tr>
							<th>Layanan</th>
							<th>Foto</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($index as $indexs) : ?>
							<tr>
								<td><?= $indexs['jenis']; ?></td>
								<td>
									<a href="#" data-toggle="modal" data-backdrop="false" data-target="#detailFoto<?= $indexs['slug'] ?>"> <img src="<?= base_url('public/image/layanan/') . $indexs['foto']; ?>" class="img-thumbnail" alt="layanan" width="70px"></a>
								</td>
								<td>
									<div calass="btn-group">
										<div class="dropdown">
											<button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
												Aksi
											</button>
											<div class="dropdown-menu">
												<a href="<?= base_url('Admin/Layanan/edit/') . $indexs['slug']; ?>" class="dropdown-item text-success">
													Edit
												</a>
												<a href="<?= base_url('Admin/Layanan/destroy/') . $indexs['slug']; ?>" class="dropdown-item text-danger" onclick="return confirm('Apakah anda yakin ingin menghapus.?')">
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

<!-- Modal store data layanan -->
<div class="col-md-6 col-12">
	<div class="modal fade text-left modal-borderles" id="tambahDataLayanan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel4">Tambah Data Layanan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i data-feather="x"></i>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('Admin/Layanan/store') ?>" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col col-lg-12 col-md-6">

								<div class="form-group">
									<label for="jenis">Jenis Layanan</label>
									<input type="text" name="jenis" class="form-control" id="jenis" placeholder="Jenis Layanan" value="<?= set_value('jenis'); ?>" autocomplete="off" autofocus>
									<?= form_error('jenis', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

								<div class="form-group">
									<label for="price">price Layanan</label>
									<input type="text" name="price" class="form-control" id="price" placeholder="Harga Layanan" value="<?= set_value('price'); ?>" autocomplete="off" autofocus>
									<?= form_error('price', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

								<div class="form-group">
									<label for="foto">Foto</label>
									<input type="file" name="foto" id="foto" class="form-control">
									<?= form_error('foto', '<small class="text-danger ml-2">', '</small>') ?>
									<p><small class="text-muted">File type: jpg, png dan ukuran foto 800px x 800px</small></p>
								</div>

								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<textarea name="deskripsi" id="snow" cols="10" rows="7" class="form-control"><?= set_value('deskripsi'); ?></textarea>
									<?= form_error('deskripsi', '<small class="text-danger ml-2">', '</small>') ?>
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
<!-- Akhir modal store data layanan -->

<!-- Modal Detail foto layanan -->
<?php foreach ($index as $indexs) : ?>
	<div class="col-md-6 col-12">
		<div class="modal fade text-left" id="detailFoto<?= $indexs['slug'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel4">Detail foto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i data-feather="x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<img src="<?= base_url('public/image/layanan/') . $indexs['foto']; ?>" class="mt-4 mb-3 ml-3 img-thumbnail" alt="layanan">
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
<!-- Akhir detail foto layanan -->

<script>
	CKEDITOR.replace('deskripsi');
</script>

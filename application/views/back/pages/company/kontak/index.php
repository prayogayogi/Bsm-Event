<div class="main-content container-fluid">
	<div class="page-title">
		<div class="row">
			<?= $this->session->flashdata('status');  ?>
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Kontak</h3>
				<p class="text-subtitle text-muted">Tabel Kontak ini berisi kontak perusahaan.</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class='breadcrumb-header'>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Kontak</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="card">
			<?php if (!$getKontak) : ?>
				<div class="card-header">
					<a href="#" class="btn btn-outline-primary block" data-toggle="modal" data-backdrop="false" data-target="#tambahDataKontak">Tambah Data</a>
				</div>
			<?php endif; ?>
			<div class="card-body">
				<table class='table table-striped' id="table1">
					<thead>
						<tr>
							<th>Alamat</th>
							<th>No Hp</th>
							<th>Email</th>
							<th>Instagram</th>
							<th>Facebook</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($getKontak as $indexs) : ?>
							<tr>
								<td><?= $indexs['alamat']; ?></td>
								<td><?= $indexs['no_hp']; ?></td>
								<td><?= $indexs['email']; ?></td>
								<td><?= $indexs['instagram']; ?></td>
								<td><?= $indexs['facebook']; ?></td>
								<td>
									<div calass="btn-group">
										<div class="dropdown">
											<button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
												Aksi
											</button>
											<div class="dropdown-menu">
												<a href="<?= base_url('Admin/Profile/editKontak/') . $indexs['id']; ?>" class="dropdown-item text-success">
													Edit
												</a>
												<a href="<?= base_url('Admin/Profile/destroyKontak/') . $indexs['id']; ?>" class="dropdown-item text-danger" onclick="return confirm('Apakah anda yakin ingin menghapus.?')">
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

<!-- Modal store data kontak -->
<div class="col-md-6 col-12">
	<div class="modal fade text-left modal-borderles" id="tambahDataKontak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel4">Tambah Data Kontak</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i data-feather="x"></i>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('Admin/Profile/storeK') ?>" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col col-lg-12 col-md-6">

								<div class="form-group">
									<label for="jenis">Alamat</label>
									<textarea name="alamat" id="jenis" cols="10" rows="7" class="form-control"></textarea>
									<?= form_error('alamat', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

								<div class="form-group">
									<label for="no_hp">No Hp</label>
									<input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukan no hp">
									<?= form_error('no_hp', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email">
									<?= form_error('email', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

								<div class="form-group">
									<label for="instagram">Instagram</label>
									<input type="text" name="instagram" id="instagram" class="form-control" placeholder="Masukan link instagram">
									<?= form_error('instagram', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

								<div class="form-group">
									<label for="facebook">Facebook</label>
									<input type="text" name="facebook" id="facebook" class="form-control" placeholder="Masukan link facebook">
									<?= form_error('facebook', '<small class="text-danger ml-2">', '</small>') ?>
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
<!-- Akhir modal store data kontak -->


<script>
	CKEDITOR.replace('alamat');
</script>

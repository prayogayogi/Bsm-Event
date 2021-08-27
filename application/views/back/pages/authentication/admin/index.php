<div class="main-content container-fluid">
	<div class="page-title">
		<div class="row">
			<?= $this->session->flashdata('status');  ?>
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>UserApp</h3>
				<p class="text-subtitle text-muted">UserApp ini berisi userapp pengunan aplikasi.</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class='breadcrumb-header'>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">UserApp</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="card">
			<div class="card-header">
				<a href="#" class="btn btn-outline-primary block" data-toggle="modal" data-backdrop="false" data-target="#tambahDataUserApp">Tambah Data</a>
			</div>
			<div class="card-body">
				<table class='table table-striped' id="table1">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Email</th>
							<th>Foto</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($index as $indexs) : ?>
							<tr>
								<td><?= $indexs['nama']; ?></td>
								<td><?= $indexs['email']; ?></td>
								<td>
									<a href="#" data-toggle="modal" data-backdrop="false" data-target="#detailFoto<?= $indexs['id'] ?>"> <img src="<?= base_url('public/image/userApp/') . $indexs['foto']; ?>" class="img-thumbnail" alt="userapp" width="70px"></a>
								</td>
								<td>
									<div calass="btn-group">
										<div class="dropdown">
											<button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
												Aksi
											</button>
											<div class="dropdown-menu">
												<a href="<?= base_url('Admin/UserApp/show/') . $indexs['slug']; ?>" class="dropdown-item text-info">
													Detail
												</a>
												<a href="<?= base_url('Admin/UserApp/edit/') . $indexs['slug']; ?>" class="dropdown-item text-success">
													Edit
												</a>
												<a href="<?= base_url('Admin/UserApp/destroy/') . $indexs['slug']; ?>" class="dropdown-item text-danger" onclick="return confirm('Apakah anda yakin ingin menghapus.?')">
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

<!-- Modal store data userapp -->
<div class="col-md-6 col-12">
	<div class="modal fade text-left modal-borderles" id="tambahDataUserApp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel4">Tambah Data UserApp</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i data-feather="x"></i>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('Admin/UserApp/store') ?>" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col col-lg-12 col-md-6">

								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama UserApp" value="<?= set_value('nama'); ?>" autocomplete="off" autofocus>
									<?= form_error('nama', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" placeholder="Email UserApp" value="<?= set_value('email'); ?>" autocomplete="off">
									<?= form_error('email', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat UserApp" value="<?= set_value('alamat'); ?>" autocomplete="off">
									<?= form_error('alamat', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

								<div class="form-group">
									<label for="no_hp">No hp</label>
									<input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No Hp UserApp" value="<?= set_value('no_hp'); ?>" autocomplete="off">
									<?= form_error('no_hp', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

								<div class="form-group">
									<label for="foto">Foto</label>
									<input type="file" name="foto" id="foto" class="form-control">
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" class="form-control" id="password" placeholder="Password UserApp" value="<?= set_value('password'); ?>">
									<?= form_error('password', '<small class="text-danger ml-2">', '</small>') ?>
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
<!-- Akhir modal store data userapp -->

<!-- Modal Detail foto userapp -->
<?php foreach ($index as $indexs) : ?>
	<div class="col-md-6 col-12">
		<div class="modal fade text-left" id="detailFoto<?= $indexs['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
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
								<img src="<?= base_url('public/image/userApp/') . $indexs['foto']; ?>" class="mt-4 mb-3 ml-3 img-thumbnail" alt="userapp">
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
<!-- Akhir detail foto userapp -->

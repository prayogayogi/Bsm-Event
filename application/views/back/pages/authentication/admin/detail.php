<div class="main-content container-fluid">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Detail User App</h3>
				<p class="text-subtitle text-muted">Detail User App ini untuk mengupdate User App.</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class='breadcrumb-header'>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Detail User App</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col text-center mb-4">
						<img src="<?= base_url('/public/image/userApp/') . $index['foto'] ?>" width="120px" alt="" class="img-thumbnail">
					</div>
				</div>
				<dl class="row justify-content-center">
					<dt class="col-sm-3">Nama</dt>
					<dd class="col-sm-3">: <?= $index['nama'] ?></dd>
					<dt class="col-sm-3">Email</dt>
					<dd class="col-sm-3">: <?= $index['email'] ?></dd>
					<dt class="col-sm-3">Alamat</dt>
					<dd class="col-sm-3">: <?= $index['alamat'] ?></dd>
					<dt class="col-sm-3">No Hp</dt>
					<dd class="col-sm-3">: <?= $index['no_hp'] ?></dd>
				</dl>
				<div class="modal-footer pt-3 d-flex justify-content-center">
					<a href="<?= base_url('Admin/UserApp') ?>" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Back</a>
				</div>
			</div>
	</section>
</div>


<!-- Modal Unutk Detail data Admin -->
<!-- <?php foreach ($getGuru as $data) : ?>
	<div class="modal fade" id="staticBackdrop<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Detail Data Guru</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="card-body">
						<div class="row">
							<div class="col text-center mb-4">
								<img src="<?= base_url('/assets/assetGambar/guru/') . $data['foto'] ?>" width="120px" alt="" class="img-thumbnail">
							</div>
						</div>
						<dl class="row justify-content-center">
							<dt class="col-sm-6">Nama</dt>
							<dd class="col-sm-6">: <?= $data['nama']; ?></dd>
							<dt class="col-sm-6">Jabatan</dt>
							<dd class="col-sm-6">: <?= $data['jabatan']; ?></dd>
							<dt class="col-sm-6">Mengajar</dt>
							<dd class="col-sm-6">: <?= $data['mengajar']; ?></dd>
							<dt class="col-sm-6">Isi Informasi</dt>
							<dd class="col-sm-6">:</dd>
							<textarea name="isi" id="" class="form-control" disabled rows="4"> <?= $data['deskripsi']; ?></textarea>
						</dl>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?> -->

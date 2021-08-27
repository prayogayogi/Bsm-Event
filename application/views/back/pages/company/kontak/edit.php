<div class="main-content container-fluid">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Edit Kontak</h3>
				<p class="text-subtitle text-muted">Edit kontak ini untuk mengupdate kontak.</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class='breadcrumb-header'>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Edit Kontak</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="card">
			<div class="modal-body">
				<form action="<?= base_url('Admin/Profile/updateKontak/') . $index['id'];  ?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col col-lg-12 col-md-6">

							<div class="form-group">
								<label for="jenis">Alamat</label>
								<textarea name="alamat" id="jenis" class="form-control"><?= $index['alamat'] ?></textarea>
								<?= form_error('alamat', '<small class="text-danger ml-2">', '</small>') ?>
							</div>

							<div class="form-group">
								<label for="no_hp">No Hp</label>
								<input type="text" name="no_hp" id="no_hp" class="form-control" value="<?= $index['no_hp'] ?>">
								<?= form_error('no_hp', '<small class="text-danger ml-2">', '</small>') ?>
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" class="form-control" value="<?= $index['email'] ?>">
								<?= form_error('email', '<small class="text-danger ml-2">', '</small>') ?>
							</div>

							<div class="form-group">
								<label for="instagram">Instagram</label>
								<input type="text" name="instagram" id="instagram" class="form-control" value="<?= $index['instagram'] ?>">
								<?= form_error('instagram', '<small class="text-danger ml-2">', '</small>') ?>
							</div>

							<div class="form-group">
								<label for="facebook">Facebook</label>
								<input type="text" name="facebook" id="facebook" class="form-control" value="<?= $index['facebook'] ?>">
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
	</section>
</div>


<script>
	CKEDITOR.replace('alamat');
</script>

<div class="main-content container-fluid">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Edit Layanan</h3>
				<p class="text-subtitle text-muted">Edit layanan ini untuk mengupdate layanan.</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class='breadcrumb-header'>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Edit Layanan</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="card">
			<div class="modal-body">
				<form action="<?= base_url('Admin/Layanan/update/') . $index['slug'];  ?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col col-lg-12">

							<div class="form-group">
								<label for="jenis">Jenis Layanan</label>
								<input type="text" name="jenis" class="form-control" id="jenis" value="<?= $index['jenis'] ?>">
								<!-- <p><small class="text-muted">Find helper text here for given textbox.</small></p> -->
							</div>

							<div class="row">
								<div class="col col-4">
									<div class="form-group">
										<label for="foto">Foto</label>
										<input type="file" name="foto" id="foto" class="form-control">
									</div>
								</div>
								<div class="col">
									<img src="<?= base_url('public/image/layanan/') . $index['foto']; ?>" class="mt-4 mb-3 ml-3 img-thumbnail" alt="layanan" width="70px">
								</div>
							</div>
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<textarea name="deskripsi" id="snow" cols="10" rows="7" class="form-control"><?= $index['deskripsi'] ?></textarea>
							</div>
						</div>
						<div class="modal-footer mt-3">
							<a href="<?= base_url('Admin/Layanan') ?>" class="btn btn-secondary">
								<i class="bx bx-x d-block d-sm-none"></i>
								<span class="d-none d-sm-block">Back</span>
							</a>
							<button type="submit" class="btn btn-success ml-1">
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
	CKEDITOR.replace('deskripsi');
</script>

<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="main-content container-fluid">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Edit Cilent</h3>
				<p class="text-subtitle text-muted">Edit cilent ini untuk mengupdate cilent.</p>
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class='breadcrumb-header'>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('Admin/Dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Edit Cilent</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<section class="section">
		<div class="card">
			<div class="modal-body">
				<form action="<?= base_url('Admin/Cilent/update/') . $index['id'];  ?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col col-lg-12">

							<div class="row">
								<div class="col col-4">
									<div class="form-group">
										<label for="foto">Foto</label>
										<input type="file" name="foto" id="foto" class="form-control">
									</div>
								</div>
								<div class="col">
									<a href="http://" data-toggle="modal" data-backdrop="false" data-target="#detailFotoUpdate"><img src="<?= base_url('public/image/cilent/') . $index['foto']; ?>" class="mt-4 mb-3 ml-3 img-thumbnail" alt="cilent" width="70px"></a>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis">Nama Cilent</label>
								<input type="text" name="namaCilent" class="form-control" id="jenis" value="<?= $index['nama_cilent']; ?>" autocomplete="off">
								<?= form_error('namaCilent', '<small class="text-danger ml-2">', '</small>') ?>
							</div>

						</div>
						<div class="modal-footer mt-3 pt-3">
							<a href="<?= base_url('Admin/Cilent') ?>" class="btn btn-secondary">
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


<!-- Modal Detail foto cilent -->
<div class="col-md-6 col-12">
	<div class="modal fade text-left" id="detailFotoUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel4">Detail foto Cilent</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i data-feather="x"></i>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<img src="<?= base_url('public/image/cilent/') . $index['foto']; ?>" class="mt-4 mb-3 ml-3 img-thumbnail" alt="cilent">
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
<!-- Akhir detail foto cilent -->

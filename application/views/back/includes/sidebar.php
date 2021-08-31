<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BSM Admin | <?= $title; ?></title>

	<link rel="stylesheet" href="<?= base_url('public/assetAdmin/') ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('public/assetAdmin/') ?>assets/vendors/simple-datatables/style.css">
	<link rel="stylesheet" href="<?= base_url('public/assetAdmin/') ?>assets/vendors/chartjs/Chart.min.css">

	<link rel="stylesheet" href="<?= base_url('public/assetAdmin/') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?= base_url('public/assetAdmin/') ?>assets/css/app.css">
	<link rel="shortcut icon" href="<?= base_url('public/assetFrontEnd/') ?>images/fevicon/fevicon.png" type="image/x-icon">
	<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>

<body>
	<div id="app">
		<div id="sidebar" class='active'>
			<div class="sidebar-wrapper active">
				<div class="sidebar-header">
					<a href="<?= base_url('Admin/Dashboard') ?>">
						<img src="<?= base_url('public/assetFrontEnd/') ?>images/logos/1logo.png" alt="" srcset="">
					</a>
				</div>
				<div class="sidebar-menu">
					<ul class="menu">


						<li class='sidebar-title'>Main Menu</li>



						<li class="sidebar-item <?= (current_url() == base_url('Admin/Dashboard')) ? 'active' : '' ?>">
							<a href="<?= base_url('Admin/Dashboard') ?>" class='sidebar-link'>
								<i data-feather="home" width="20"></i>
								<span>Dashboard</span>
							</a>

						</li>


						<li class="sidebar-item <?= (current_url() == base_url('Admin/Layanan')) ? 'active' : '' ?>">
							<a href="<?= base_url('Admin/Layanan') ?>" class='sidebar-link'>
								<i data-feather="triangle" width="20"></i>
								<span>Layanan</span>
							</a>
						</li>


						<li class='sidebar-title'>App</li>



						<li class="sidebar-item <?= (current_url() == base_url('Admin/Galery')) ? 'active' : '' ?>">
							<a href="<?= base_url('Admin/Galery') ?>" class='sidebar-link'>
								<i data-feather="image" width="20"></i>
								<span>Galery</span>
							</a>
						</li>

						<!-- <li class="sidebar-item <?= (current_url() == base_url('Admin/Testimonial')) ? 'active' : '' ?>">
							<a href="<?= base_url('Admin/Testimonial') ?>" class='sidebar-link'>
								<i data-feather="database" width="20"></i>
								<span>Testimonial</span>
							</a>
						</li> -->

						<li class="sidebar-item  <?= (current_url() == base_url('Admin/Cilent')) ? 'active' : '' ?>">
							<a href="<?= base_url('Admin/Cilent') ?>" class='sidebar-link'>
								<i data-feather="hard-drive" width="20"></i>
								<span>Cilent</span>
							</a>
						</li>


						<li class='sidebar-title'>Company</li>



						<li class="sidebar-item <?= (current_url() == base_url('Admin/Profile/company')) || (current_url() == base_url('Admin/Profile/kontak')) ? 'active' : '' ?>  has-sub">
							<a href="#" class='sidebar-link'>
								<i data-feather="layers" width="20"></i>
								<span>Profile</span>
							</a>

							<ul class="submenu <?= (current_url() == base_url('Admin/Profile/company')) || (current_url() == base_url('Admin/Profile/kontak')) ? 'active' : '' ?>">

								<!-- <li>
									<a href="<?= base_url('Admin/Profile/company') ?>">Company Profile</a>
								</li> -->

								<li>
									<a href="<?= base_url('Admin/Profile/kontak') ?>">Kontak</a>
								</li>

							</ul>

						</li>


						<li class='sidebar-title'>Authentication</li>

						<li class="sidebar-item <?= (current_url() == base_url('Admin/UserApp')) ? 'active' : '' ?>">
							<a href="<?= base_url('Admin/UserApp') ?>" class='sidebar-link'>
								<i data-feather="users" width="20"></i>
								<span>Admin</span>
							</a>
						</li>

						<li class="sidebar-item" data-toggle="modal" data-target="#ubahPassword">
							<a href="#" class='sidebar-link'>
								<i data-feather="user" width="20"></i>
								<span> Ubah Password</span>
							</a>
						</li>


						<li class="sidebar-item">
							<a href="<?= base_url('Logout') ?>" onclick="return confirm('Yakin Ingin keluar..?')" class='sidebar-link'>
								<i data-feather="log-out" width="20"></i>
								<span>Logout</span>
							</a>
						</li>

					</ul>
				</div>
				<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
			</div>
		</div>


		<!-- Modal Ubah Password -->
		<div class="modal fade" id="ubahPassword" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Ubah Password</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url('Admin/UserApp/ubahPassword/') . $userLogin['id'] ?>" method="post">
							<div class="row mb-3">
								<div class="col">
									<div class="form-group">
										<label for="password">Password Lama</label>
										<input type="password" name="passwordLama" class="form-control" autocomplete="off" id="password" placeholder="Masukan Password Lama" autocomplete="off">
									</div>
									<div class="form-group">
										<label for="password2">Password Baru</label>
										<input type="password" name="passwordBaru" class="form-control" autocomplete="off" id="password2" placeholder="Masukan Password Baru" autocomplete="off">
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Simpan</button>
							<button type="resset" class="btn btn-dark px-4 ml-2" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- akhir modal ubah password -->

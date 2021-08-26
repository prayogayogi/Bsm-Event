<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin | <?= $title; ?></title>

	<link rel="stylesheet" href="<?= base_url('public/assetAdmin/') ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('public/assetAdmin/') ?>assets/vendors/simple-datatables/style.css">
	<link rel="stylesheet" href="<?= base_url('public/assetAdmin/') ?>assets/vendors/chartjs/Chart.min.css">

	<link rel="stylesheet" href="<?= base_url('public/assetAdmin/') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?= base_url('public/assetAdmin/') ?>assets/css/app.css">
	<link rel="shortcut icon" href="<?= base_url('public/assetAdmin/') ?>assets/images/favicon.svg" type="image/x-icon">
	<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>

<body>
	<div id="app">
		<div id="sidebar" class='active'>
			<div class="sidebar-wrapper active">
				<div class="sidebar-header">
					<img src="<?= base_url('public/assetAdmin/') ?>assets/images/logo.svg" alt="" srcset="">
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

						<li class="sidebar-item <?= (current_url() == base_url('Admin/Testimonial')) ? 'active' : '' ?>">
							<a href="<?= base_url('Admin/Testimonial') ?>" class='sidebar-link'>
								<i data-feather="database" width="20"></i>
								<span>Testimonial</span>
							</a>
						</li>

						<li class="sidebar-item">
							<a href="#" class='sidebar-link'>
								<i data-feather="hard-drive" width="20"></i>
								<span>Cilent</span>
							</a>
						</li>


						<li class='sidebar-title'>Company</li>



						<li class="sidebar-item  has-sub">
							<a href="#" class='sidebar-link'>
								<i data-feather="layers" width="20"></i>
								<span>Profile</span>
							</a>

							<ul class="submenu ">

								<li>
									<a href="ui-chatbox.html">Company Profile</a>
								</li>

								<li>
									<a href="ui-pricing.html">Kontak</a>
								</li>

							</ul>

						</li>




						<li class="sidebar-item">
							<a href="#" class='sidebar-link'>
								<i data-feather="users" width="20"></i>
								<span>Admin</span>
							</a>

						</li>




						<li class='sidebar-title'>Authentication</li>

						<li class="sidebar-item">
							<a href="#" class='sidebar-link'>
								<i data-feather="log-out" width="20"></i>
								<span>Logout</span>
							</a>
						</li>

					</ul>
				</div>
				<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
			</div>
		</div>

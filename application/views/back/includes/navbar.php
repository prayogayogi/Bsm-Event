<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div id="main">
	<nav class="navbar navbar-header navbar-expand navbar-light">
		<a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
		<button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
				<li class="dropdown nav-icon">
					<a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
						<div class="d-lg-inline-block">
							<i data-feather="bell"></i>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
						<h6 class='py-2 px-4'>Profile</h6>
						<ul class="list-group rounded-none">
							<li class="list-group-item border-0 align-items-start">
								<div class="avatar bg-success mr-3">
									<span class="avatar-content"> <img src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/badge.png" alt="" srcset=""></span>
								</div>
								<div>
									<h6 class='text-bold'><?= $userLogin['nama']; ?></h6>
									<p class='text-xs'>
										<?= $userLogin['email']; ?> <br>
										<?= $userLogin['alamat']; ?><br>
										<?= $userLogin['no_hp']; ?>
									</p>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
						<div class="avatar mr-1">
							<img src="<?= base_url('public/image/userApp/') . $userLogin['foto'] ?>" alt="" srcset="">
						</div>
						<div class="d-none d-md-block d-lg-inline-block">Hallo, <?= $userLogin['nama']; ?></div>
					</a>
				</li>
			</ul>
		</div>
	</nav>

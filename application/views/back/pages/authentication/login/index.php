<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?></title>
	<link rel="stylesheet" href="<?= base_url('public/assetAdmin/') ?>assets/css/bootstrap.css">

	<link rel="shortcut icon" href="<?= base_url('public/assetAdmin/') ?>assets/images/favicon.svg" type="image/x-icon">
	<link rel="stylesheet" href="<?= base_url('public/assetAdmin/') ?>assets/css/app.css">
</head>

<body>
	<div id="auth">

		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12 mx-auto">
					<div class="card pt-4">
						<div class="card-body">
							<div class="text-center mb-5">
								<h3>Sign In</h3>
								<!-- <a href="<?= site_url('register') ?>"><img src="<?= base_url() ?>assets/logo resud.png" alt="logo" style="width: 80px; height:80px; margin-right:25px;" class="mb-3"></a> -->
								<p>Please Sign To App.</p>
							</div>
							<form action="<?= base_url('Login/action') ?>" method="POST">
								<div class="form-group position-relative has-icon-left">
									<label for="email">Email</label>
									<div class="position-relative">
										<input type="text" class="form-control" autofocus id="email" name="email" value="<?= set_value('email') ?>" autocomplete="off" placeholder="Masukan Email">
										<div class="form-control-icon">
											<i data-feather="user"></i>
										</div>
									</div>
									<?= form_error('email', '<small class="text-danger ml-2">', '</small>') ?>
								</div>
								<div class="form-group position-relative has-icon-left">
									<div class="clearfix">
										<label for="password">Password</label>
									</div>
									<div class="position-relative">
										<input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
										<div class="form-control-icon">
											<i data-feather="lock"></i>
										</div>
									</div>
									<?= form_error('password', '<small class="text-danger ml-2">', '</small>') ?>
								</div>

								<div class='form-check clearfix my-4'>
									<div class="float-right">
										<!-- <a href="<?php echo base_url('register/registration') ?>">Don't have an account?</a> -->
									</div>
								</div>
								<div class="clearfix">
									<button class="btn btn-primary float-right" type="submit" name="submit">Submit</button>
								</div>
								<div class="divider">
									<div class="divider-text">APP DASHBOARD BSM</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?= base_url('public/assetAdmin/') ?>assets/js/feather-icons/feather.min.js"></script>
	<script src="<?= base_url('public/assetAdmin/') ?>assets/js/app.js"></script>

	<script src="<?= base_url('public/assetAdmin/') ?>assets/js/main.js"></script>
</body>

</html>

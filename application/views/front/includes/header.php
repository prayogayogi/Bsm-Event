<!DOCTYPE html>
<html lang="en">

<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title><?= $title; ?></title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- site icons -->
	<link rel="icon" href="<?= base_url('public/assetFrontEnd/') ?>images/fevicon/fevicon.png" type="image/gif" />
	<!-- bootstrap css -->
	<link rel="stylesheet" href="<?= base_url('public/assetFrontEnd/') ?>css/bootstrap.min.css" />
	<!-- Site css -->
	<link rel="stylesheet" href="<?= base_url('public/assetFrontEnd/') ?>css/style.css" />
	<!-- responsive css -->
	<link rel="stylesheet" href="<?= base_url('public/assetFrontEnd/') ?>css/responsive.css" />
	<!-- colors css -->
	<link rel="stylesheet" href="<?= base_url('public/assetFrontEnd/') ?>css/colors1.css" />
	<!-- custom css -->
	<link rel="stylesheet" href="<?= base_url('public/assetFrontEnd/') ?>css/custom.css" />
	<!-- wow Animation css -->
	<link rel="stylesheet" href="<?= base_url('public/assetFrontEnd/') ?>css/animate.css" />

	<!-- zoom effect -->
	<link rel='stylesheet' href='<?= base_url('public/assetFrontEnd/') ?>css/hizoom.css'>
	<!-- end zoom effect -->
	<!-- revolution slider css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/assetFrontEnd/') ?>revolution/css/settings.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/assetFrontEnd/') ?>revolution/css/layers.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/assetFrontEnd/') ?>revolution/css/navigation.css" />
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="default_theme" class="it_service">
	<!-- loader -->
	<div class="bg_load"> <img class="loader_animation" src="<?= base_url('public/assetFrontEnd/') ?>images/loaders/loader_1.png" alt="#" /> </div>
	<!-- end loader -->
	<!-- header -->
	<header id="default_header" class="header_style_1">
		<!-- header top -->
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="full">
							<div class="topbar-left">
								<ul class="list-inline">
									<li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">Villa mas indah blok C9 no,8 RT.002/RW.8, Kota Bks, Jawa Barat 17123a</span> </li>
									<li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:jasaweb@gmail.com">jasaweb@gmail.com</a></span> </li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 right_section_header_top">
						<div class="float-left">
							<div class="social_icon">
								<ul class="list-inline">
									<li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
									<li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
									<li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
									<li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
									<li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end header top -->
		<!-- header bottom -->
		<div class="header_bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
						<!-- logo start -->
						<div class="logo"> <a href="<?= base_url('Home') ?>"><img src="<?= base_url('public/assetFrontEnd/') ?>images/logos/logo.png" alt="logo" /></a> </div>
						<!-- logo end -->
					</div>
					<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
						<!-- menu start -->
						<div class="menu_side">
							<div id="navbar_menu">
								<ul class="first-ul">
									<li> <a class=" <?= (in_array(current_url(), [base_url('Home'), base_url('/')])) ? 'active' : '' ?>" href="<?= base_url('Home') ?>">Home</a>
									</li>
									<li> <a class=" <?= (in_array(current_url(), [base_url('Layanan'), base_url('/')])) ? 'active' : '' ?>" href="<?= base_url('Layanan') ?>">Layanan</a>
										<ul>
											<li><a href="<?= base_url('Layanan/videotron') ?>">Videotron</a></li>
											<li><a href="<?= base_url('Layanan/ledTvTouchscreen') ?>">LED TV Touchscreen</a></li>
											<li><a href="<?= base_url('Layanan/ledDisplay') ?>">LED Display Stand Touchscreen</a></li>
											<li><a href="<?= base_url('Layanan/projektor') ?>">Projector</a></li>
										</ul>
									</li>
									<li> <a class=" <?= (in_array(current_url(), [base_url('Galery'), base_url('/')])) ? 'active' : '' ?>" href="<?= base_url('Galery') ?>">Galery</a>
									</li>
									<li> <a class=" <?= (in_array(current_url(), [base_url('Contact'), base_url('/')])) || (in_array(current_url(), [base_url('Faq'), base_url('/')])) ? 'active' : '' ?>" href="#">Tentang Kami</a>
										<ul>
											<li><a href="<?= base_url('Contact') ?>">Kontak Kami</a></li>
											<li><a href="<?= base_url('Faq') ?>">Faq</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="search_icon">
								<ul>
									<li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
		<!-- header bottom end -->
	</header>
	<!-- end header -->

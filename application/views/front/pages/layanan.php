<div id="inner_banner" class="section inner_banner_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="full">
					<div class="title-holder">
						<div class="title-holder-cell text-left">
							<h1 class="page-title">Layanan</h1>
							<ol class="breadcrumb">
								<li><a href="<?= base_url('Home') ?>">Home</a></li>
								<li class="active">Layanan</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1 light_silver gross_layout">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="full">
					<div class="main_heading text_align_left">
						<h2>Layanan</h2>
						<p class="large">Adapun unit yang kami sediakan diantaranya..</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-4">
						<div class="full">
							<div class="service_blog_inner">
								<div class="icon text_align_left"><img src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/si1.png" alt="#" /></div>
								<a href="<?= base_url('Layanan/videotron') ?>">
									<h4 class="service-heading">LED Videotron Indoor</h4>
								</a>
								<p>Sewa LED Videotron Indoor Mulai dari harga 4jtaan.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="full">
							<div class="service_blog_inner">
								<div class="icon text_align_left"><img src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/si2.png" alt="#" /></div>
								<a href="<?= base_url('Layanan/videotron') ?>">
									<h4 class="service-heading">LED Videotron Outdoor</h4>
								</a>
								<p>Sewa LED Videotron Outdoor mulai dari harga 500.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="full">
							<div class="service_blog_inner">
								<div class="icon text_align_left"><img src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/si3.png" alt="#" /></div>
								<a href="<?= base_url('Layanan/ledTvTouchscreen') ?>">
									<h4 class="service-heading">LED TV Touchscreen</h4>
								</a>
								<p>Sewa LED / LCD TV murah mulai dari harga 600K.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="full">
							<div class="service_blog_inner">
								<div class="icon text_align_left"><img src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/si4.png" alt="#" /></div>
								<a href="<?= base_url('Layanan/ledDisplay') ?>">
									<h4 class="service-heading">LED Display Stand Touchscreen</h4>
								</a>
								<p>Sewa LED Stand Smart TV Touch screen mulai dari Rp. 1,4Jt.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="full">
							<div class="service_blog_inner">
								<div class="icon text_align_left"><img src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/si5.png" alt="#" /></div>
								<a href="<?= base_url('Layanan/projektor') ?>">
									<h4 class="service-heading">Projector & Screen</h4>
								</a>
								<p>Sewa Projector dan Screen mulai dari harga Rp. 800K.</p>
							</div>
						</div>
					</div>
					<!-- <div class="col-md-4">
						<div class="full">
							<div class="service_blog_inner">
								<div class="icon text_align_left"><img src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/si6.png" alt="#" /></div>
								<h4 class="service-heading">Multimedia Lainnya</h4>
								<p>Anda butuh sewa alat multimedia lainnya seperti laptop dan komputer?.</p>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- section -->
<div class="section padding_layout_1 light_silver service_list">
	<div class="container">
		<div class="row">
			<?php foreach ($index as $indexs) : ?>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
					<div class="product_list">
						<div class="product_img"> <img class="img-responsive" src="<?= base_url('public/image/layanan/') . $indexs['foto'] ?>" alt=""> </div>
						<div class="product_detail_btm">
							<div class="center">
								<h4><a href="<?= base_url('Details/index/') . $indexs['slug']  ?>"><?= $indexs['jenis'] ?></a></h4>
							</div>
							<div class="starratin">
								<div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
							</div>
							<div class="product_price">
								<p>Rp <span class="new_price"><?= rupiah($indexs['price']); ?></span></p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!-- end section -->
<!-- <div class="section padding_layout_1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="full">
					<div class="main_heading text_align_left">
						<h2>STAF BERPENGALAMAN</h2>
						<p class="large">Pakar kami telah ditampilkan dan di akui oleh beberapa kali cilent.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="full team_blog_colum">
					<div class="it_team_img"> <img class="img-responsive" src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/team-member-1.jpg" alt="#"> </div>
					<div class="team_feature_head">
						<h4>Dean Michael</h4>
					</div>
					<div class="team_feature_social">
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
			<div class="col-md-3">
				<div class="full team_blog_colum">
					<div class="it_team_img"> <img class="img-responsive" src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/team-member-2.jpg" alt="#"> </div>
					<div class="team_feature_head">
						<h4>Ruby Jake</h4>
					</div>
					<div class="team_feature_social">
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
			<div class="col-md-3">
				<div class="full team_blog_colum">
					<div class="it_team_img"> <img class="img-responsive" src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/team-member-3.jpg" alt="#"> </div>
					<div class="team_feature_head">
						<h4>David Hussay</h4>
					</div>
					<div class="team_feature_social">
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
			<div class="col-md-3">
				<div class="full team_blog_colum">
					<div class="it_team_img"> <img class="img-responsive" src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/team-member-1.jpg" alt="#"> </div>
					<div class="team_feature_head">
						<h4>Dean Michael</h4>
					</div>
					<div class="team_feature_social">
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
</div> -->

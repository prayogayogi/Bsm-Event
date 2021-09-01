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
					<?php foreach ($index as $indexs) : ?>
						<div class="col-md-4">
							<div class="full">
								<div class="service_blog_inner">
									<div class="icon text_align_left"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-analytics" width="72" height="72" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<rect x="3" y="4" width="18" height="12" rx="1" />
											<line x1="7" y1="20" x2="17" y2="20" />
											<line x1="9" y1="16" x2="9" y2="20" />
											<line x1="15" y1="16" x2="15" y2="20" />
											<path d="M8 12l3 -3l2 2l3 -3" />
										</svg></div>
									<a href="<?= base_url('Layanan/master/') . $indexs['slug']; ?>">
										<h4 class="service-heading"><?= $indexs['jenis']; ?></h4>
									</a>
									<p><?= $indexs['jenis']; ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
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

<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="full">
					<div class="title-holder">
						<div class="title-holder-cell text-left">
							<h1 class="page-title">Detail Product</h1>
							<ol class="breadcrumb">
								<li><a href="<?= base_url('Home') ?>">Home</a></li>
								<li class="active">Detail Product</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 product_detail">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12 service_blog margin_bottom_50">
						<div class="full">
							<div class="service_img"> <img class="img-responsive" src="<?= base_url('public/image/galery/') . $getDetail['foto'] ?>" alt="#" /> </div>
							<div class="service_cont">
								<h3 class="service_head"><?= $getDetail['jenis_id']; ?></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="full">
							<div class="main_heading text_align_left" style="margin-bottom: 35px;">
								<h3>Photo-photo product terkait</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<?php foreach ($getJoin as $getJoins) : ?>
						<div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
							<div class="product_list">
								<div class="product_img"> <img class="img-responsive" src="<?= base_url('public/image/galery/') . $getJoins['foto'] ?>" alt=""> </div>
								<div class="product_detail_btm">
									<div class="center">
										<h4><a href="<?= base_url('Details/detailGalery/') . $getJoins['slug'] ?>/<?= $getJoins['foto'] ?>"><?= $getJoins['jenis'] ?></a></h4>
									</div>
									<div class="starratin">
										<div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="side_bar">
					<div class="side_bar_blog">
						<h4>DAPATKAN PENAWARAN</h4>
						<p>Dapatkan penawaran yang menarik tentang jasa yang kami sediakan dan dapatkan dengan harga terbaik.</p>
						<a class="btn sqaure_bt" href="<?= base_url('Layanan') ?>">Lihat Layanan</a>
					</div>
					<div class="side_bar_blog">
						<h4>LAYANAN KAMI</h4>
						<div class="categary">
							<ul>
								<li><a href="<?= base_url('Layanan/videotron') ?>"><i class="fa fa-angle-right"></i> Videotron Indoor</a></li>
								<li><a href="<?= base_url('Layanan/ledTvTouchscreen') ?>"><i class="fa fa-angle-right"></i> LED TV Touchscreen</a></li>
								<li><a href="<?= base_url('Layanan/ledDisplay') ?>"><i class="fa fa-angle-right"></i> LED Display Stand Touchscreen</a></li>
								<li><a href="<?= base_url('Layanan/projektor') ?>"><i class="fa fa-angle-right"></i> Projector</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end section -->

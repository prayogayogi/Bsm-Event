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
					<div class="col-xl-6 col-lg-12 col-md-12">
						<div class="product_detail_feature_img hizoom hi2">
							<div class='hizoom hi2'> <img src="<?= base_url('public/image/layanan/') . $getDetail['foto'] ?>" alt="#" /> </div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
						<div class="product-heading">
							<h2><?= $getDetail['jenis']; ?></h2>
						</div>
						<div class="product-detail-side"><span class="new-price">Rp <?= rupiah($getDetail['price']); ?></span> <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> </div>
						<div class="detail-contant">
							<a href="https://wa.me/<?= $getkontak['no_hp'] ?>?text=Halo%2C%20saya%20tertarik%20untuk%20order%20beberapa%20equipment%20di%20BSM.%20Bisa%20dibantu%3F" target="blank" class="btn sqaure_bt">Pesan Sekarang</a>

						</div>
						<div class="share-post"> <a href="#" class="share-text">Share</a>
							<ul class="social_icons">
								<li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="full">
							<div class="tab_bar_section">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div id="description" class="tab-pane active">
										<div class="product_desc">
											<?= $getDetail['deskripsi']; ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="full">
							<div class="main_heading text_align_left" style="margin-bottom: 35px;">
								<h3>Photo-Photo Product Terkait</h3>
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
										<h4><?= $getJoins['jenis'] ?></h4>
									</div>
									<div class="starratin">
										<div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
									</div>
									<div class="product_price">
										<p><span class="new_price">Rp <?= rupiah($getDetail['price']); ?></span></p>
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
								<?php foreach ($index as $indexs) : ?>
									<li><a href="<?= base_url('Layanan/master/') . $indexs['slug']; ?>"><i class="fa fa-angle-right"></i><?= $indexs['jenis']; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end section -->

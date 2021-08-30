<!-- inner page banner -->
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
								<li class="active">Led Display</li>
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
<div class="section padding_layout_1 service_list">
	<div class="container">
		<div class="row">
			<?php foreach ($getLedDisplay as $getLedDisplays) : ?>
				<div class="col-md-4 service_blog margin_bottom_50">
					<div class="full">
						<div class="service_img"> <img class="img-responsive" src="<?= base_url('public/image/galery/') . $getLedDisplays['foto'] ?>" alt="#" /> </div>
						<div class="service_cont">
							<h3 class="service_head"><?= $getLedDisplays['jenis_id']; ?></h3>
							<div class="bt_cont"> <a class="btn sqaure_bt" href="<?= base_url('Details/detailGalery/') . $getLedDisplays['slug'] ?>/<?= $getLedDisplays['foto'] ?>">View Product</a> </div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!-- end section -->

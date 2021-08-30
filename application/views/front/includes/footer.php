<!-- section -->
<div class="section padding_layout_1 testmonial_section white_fonts">
	<div class="container" style="display: none;">
		<div class="row">
			<div class="col-md-12">
				<div class="full">
					<div class="main_heading text_align_left">
						<h2 style="text-transform: none;">Apa Kata Klien?</h2>
						<p class="large">Berikut adalah testimoni dari klien.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-7">
				<div class="full">
					<div id="testimonial_slider" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ul class="carousel-indicators">
							<li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
							<li data-target="#testimonial_slider" data-slide-to="1"></li>
							<li data-target="#testimonial_slider" data-slide-to="2"></li>
						</ul>
						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="testimonial-container">
									<div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.
										I am really satisfied with my first laptop service. </div>
									<div class="testimonial-photo"> <img src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/client1.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
									<div class="testimonial-meta">
										<h4>Maria Anderson</h4>
										<span class="testimonial-position">CFO, Tech NY</span>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testimonial-container">
									<div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.
										I am really satisfied with my first laptop service. </div>
									<div class="testimonial-photo"> <img src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/client2.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
									<div class="testimonial-meta">
										<h4>Maria Anderson</h4>
										<span class="testimonial-position">CFO, Tech NY</span>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testimonial-container">
									<div class="testimonial-content"> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first.
										I am really satisfied with my first laptop service. </div>
									<div class="testimonial-photo"> <img src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/client3.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
									<div class="testimonial-meta">
										<h4>Maria Anderson</h4>
										<span class="testimonial-position">CFO, Tech NY</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="full"> </div>
			</div>
		</div>
	</div>
</div>
<!-- end section -->
<!-- section -->
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="full">
					<div class="contact_us_section">
						<div class="call_icon"> <img src="<?= base_url('public/assetFrontEnd/') ?>images/it_service/phone_icon.png" alt="#" /> </div>
						<div class="inner_cont">
							<h2>MINTA PENAWARAN GRATIS</h2>
							<p>Dapatkan jawaban dan saran dari orang yang Anda inginkan.</p>
						</div>
						<div class="button_Section_cont"> <a class="btn dark_gray_bt" href="https://wa.me/<?= $getkontak['no_hp'] ?>?text=Saya%20mau%20order%21" target="blank">Kontak kami</a> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="main_heading text_align_center">
					<h2>mitra service kami </h2>
				</div>
				<div class="full">
					<ul class="brand_list">
						<?php foreach ($getCilent as $getCilents) : ?>
							<li><img src="<?= base_url('public/image/cilent/') . $getCilents['foto'] ?>" width="200px" alt="#" /></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
						<div class="navbar-search">
							<form action="#" method="get" id="search-global-form" class="search-global">
								<input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
								<button class="search-global__btn"><i class="fa fa-search"></i></button>
								<div class="search-global__note">Begin typing your search above and press return to search.</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Model search bar -->
<!-- footer -->
<footer class="footer_style_2">
	<div class="container-fuild">
		<div class="row">
			<!-- <div class="map_section">
				<div id="map"></div>
			</div> -->
			<div class="footer_blog">
				<div class="row">
					<div class="col-md-4">
						<div class="main-heading left_text">
							<h2>BSM Compro 2020</h2>
						</div>
						<p>Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.</p>
						<ul class="social_icons">
							<li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						</ul>
					</div>

					<div class="col-md-4">
						<div class="main-heading left_text">
							<h2>Layanan</h2>
						</div>
						<ul class="footer-menu">
							<li><a href="<?= base_url('Layanan/videotron') ?>"><i class="fa fa-angle-right"></i> Videotron Indoor</a></li>
							<li><a href="<?= base_url('Layanan/ledTvTouchscreen') ?>"><i class="fa fa-angle-right"></i> LED TV Touchscreen</a></li>
							<li><a href="<?= base_url('Layanan/ledDisplay') ?>"><i class="fa fa-angle-right"></i> LED Display Stand Touchscreen</a></li>
							<li><a href="<?= base_url('Layanan/projektor') ?>"><i class="fa fa-angle-right"></i> Projector</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<div class="main-heading left_text">
							<h2>HUBUNGI KAMI</h2>
						</div>
						<p><?= $getkontak['alamat']; ?><br><br>
							<span style="font-size:18px;"><a href="tel:<?= $getkontak['no_hp']; ?>"><?= $getkontak['no_hp']; ?></a></span>
						</p>
						<div class="footer_mail-section">
							<form>
								<fieldset>
									<div class="field">
										<input placeholder="Email" type="text">
										<button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="cprt d-flex justify-content-cente">
				<p>BSM Compro 2020 © Copyrights <?= date('Y'); ?></p>
			</div>
		</div>
	</div>
	<a class="wafixed" href="https://wa.me/<?= $getkontak['no_hp'] ?>?text=Saya%20mau%20order%21" style="position: fixed;
    right: 30px;
    bottom: 30px;
    z-index: 999;" target="_blank"><span class="fa-stack fa-lg">
			<i class="fa fa-circle fa-stack-2x text-success"></i>
			<i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
		</span></a>
</footer>
<!-- end footer -->
<!-- js section -->
<script src="<?= base_url('public/assetFrontEnd/') ?>js/jquery.min.js"></script>
<!-- <script src="<?= base_url('public/assetFrontEnd/') ?>js/bootstrap.min.js"></script> -->
<!-- menu js -->
<script src="<?= base_url('public/assetFrontEnd/') ?>js/menumaker.js"></script>
<!-- wow animation -->
<script src="<?= base_url('public/assetFrontEnd/') ?>js/wow.js"></script>
<!-- custom js -->
<script src="<?= base_url('public/assetFrontEnd/') ?>js/custom.js"></script>
<!-- revolution js files -->
<script src="<?= base_url('public/assetFrontEnd/') ?>revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url('public/assetFrontEnd/') ?>revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= base_url('public/assetFrontEnd/') ?>revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?= base_url('public/assetFrontEnd/') ?>revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?= base_url('public/assetFrontEnd/') ?>revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?= base_url('public/assetFrontEnd/') ?>revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?= base_url('public/assetFrontEnd/') ?>revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?= base_url('public/assetFrontEnd/') ?>revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?= base_url('public/assetFrontEnd/') ?>revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?= base_url('public/assetFrontEnd/') ?>revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?= base_url('public/assetFrontEnd/') ?>revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- map js -->
<!-- <script>
	// This example adds a marker to indicate the position of Bondi Beach in Sydney,
	// Australia.
	function initMap() {
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 11,
			center: {
				lat: 40.645037,
				lng: -73.880224
			},
			styles: [{
					elementType: 'geometry',
					stylers: [{
						color: '#fefefe'
					}]
				},
				{
					elementType: 'labels.icon',
					stylers: [{
						visibility: 'off'
					}]
				},
				{
					elementType: 'labels.text.fill',
					stylers: [{
						color: '#616161'
					}]
				},
				{
					elementType: 'labels.text.stroke',
					stylers: [{
						color: '#f5f5f5'
					}]
				},
				{
					featureType: 'administrative.land_parcel',
					elementType: 'labels.text.fill',
					stylers: [{
						color: '#bdbdbd'
					}]
				},
				{
					featureType: 'poi',
					elementType: 'geometry',
					stylers: [{
						color: '#eeeeee'
					}]
				},
				{
					featureType: 'poi',
					elementType: 'labels.text.fill',
					stylers: [{
						color: '#757575'
					}]
				},
				{
					featureType: 'poi.park',
					elementType: 'geometry',
					stylers: [{
						color: '#e5e5e5'
					}]
				},
				{
					featureType: 'poi.park',
					elementType: 'labels.text.fill',
					stylers: [{
						color: '#9e9e9e'
					}]
				},
				{
					featureType: 'road',
					elementType: 'geometry',
					stylers: [{
						color: '#eee'
					}]
				},
				{
					featureType: 'road.arterial',
					elementType: 'labels.text.fill',
					stylers: [{
						color: '#3d3523'
					}]
				},
				{
					featureType: 'road.highway',
					elementType: 'geometry',
					stylers: [{
						color: '#eee'
					}]
				},
				{
					featureType: 'road.highway',
					elementType: 'labels.text.fill',
					stylers: [{
						color: '#616161'
					}]
				},
				{
					featureType: 'road.local',
					elementType: 'labels.text.fill',
					stylers: [{
						color: '#9e9e9e'
					}]
				},
				{
					featureType: 'transit.line',
					elementType: 'geometry',
					stylers: [{
						color: '#e5e5e5'
					}]
				},
				{
					featureType: 'transit.station',
					elementType: 'geometry',
					stylers: [{
						color: '#000'
					}]
				},
				{
					featureType: 'water',
					elementType: 'geometry',
					stylers: [{
						color: '#c8d7d4'
					}]
				},
				{
					featureType: 'water',
					elementType: 'labels.text.fill',
					stylers: [{
						color: '#b1a481'
					}]
				}
			]
		});

		var image = '<?= base_url('public/assetFrontEnd/') ?>images/it_service/location_icon_map_cont.png';
		var beachMarker = new google.maps.Marker({
			position: {
				lat: 40.645037,
				lng: -73.880224
			},
			map: map,
			icon: image
		});
	}
</script> -->
<!-- google map js -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script> -->
<!-- end google map js -->
<!-- zoom effect -->
<script src='<?= base_url('public/assetFrontEnd/') ?>js/hizoom.js'></script>
<script>
	$('.hi1').hiZoom({
		width: 300,
		position: 'right'
	});
	$('.hi2').hiZoom({
		width: 400,
		position: 'right'
	});
</script>
</body>

</html>

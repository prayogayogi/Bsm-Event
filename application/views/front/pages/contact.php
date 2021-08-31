<div id="inner_banner" class="section inner_banner_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="full">
					<div class="title-holder">
						<div class="title-holder-cell text-left">
							<h1 class="page-title">Kontak</h1>
							<ol class="breadcrumb">
								<li><a href="<?= base_url('Home') ?>">Home</a></li>
								<li class="active">Kontak</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1">
	<div class="container">
		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
			<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="full">
						<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 adress_cont margin_bottom_30">
							<h4>Alamat</h4>
							<p>Berikut alamat perusahaan kami.</p>
							<div class="information_bottom left-side margin_bottom_20_all">
								<div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
								<div class="info_cont">
									<h4><?= $getkontak['alamat']; ?></h4>
									<p>Jakarta, Indonesai</p>
								</div>
							</div>
							<div class="information_bottom left-side margin_bottom_20_all">
								<div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
								<div class="info_cont">
									<h4>+<?= $getkontak['no_hp']; ?></h4>
									<p>Senin-Jumat 08:30-18:30</p>
								</div>
							</div>
							<div class="information_bottom left-side">
								<div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
								<div class="info_cont">
									<h4><?= $getkontak['email']; ?></h4>
									<p>Dukungan online 24/7</p>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
							<h4>Tanyaan apa yang anda butuhkan</h4>
							<p>Kirim perminataan pesanan anda dengan mengirimkan form di bawah ini</p>
							<div class="form_section">
								<form class="form_contant" action="#">
									<fieldset>
										<div class="row">
											<div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<input class="field_custom" placeholder="Websire URL" type="text" required />
											</div>
											<div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<input class="field_custom" placeholder="Your name" type="text" required />
											</div>
											<div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<input class="field_custom" placeholder="Email adress" type="email" required />
											</div>
											<div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<input class="field_custom" placeholder="Phone number" type="text" required />
											</div>
											<div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<textarea class="field_custom" placeholder="Messager" required></textarea>
											</div>
											<div class="center"><a class="btn main_bt" href="https://wa.me/<?= $getkontak['no_hp'] ?>?text=Halo%2C%20saya%20tertarik%20untuk%20order%20beberapa%20equipment%20di%20BSM.%20Bisa%20dibantu%3F" target="blank">SUBMIT NOW</a></div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

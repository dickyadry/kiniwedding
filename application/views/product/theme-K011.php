<!doctype html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Arlin - Responsive HTML5 Wedding Template">
		<meta name="author" content="regediter.com">
			
		<title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
	    <meta name="description" content="">
	    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/owlcarousel/css/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/owlcarousel/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/animate_css/animate.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/magnific-popup/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/vegas/dist/vegas.min.css">

		<!-- Fonts CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/font-awesome/css/font-awesome.min.css">
		<link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/https://fonts.googleapis.com/css?family=Raleway:200,300,400,500" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css">

		<link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
	    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

	</head>
	<body>
		<!-- Page Loader Animation -->
		<div id="loader">
			<div class="container loader-img-holder text-center">
				<img class="img-fluid" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/loader.svg" alt="">
			</div>
		</div>		
		<!-- Page Loader Animation End-->

		<!-- slider Section -->
		<section id="slider" class="paling-atas">
			<div class="holder-caption">
				<div class="container relative-z">
					<div class="row">
						<div class="col col-lg-12 align-self-center">
							<h1><span class="custom-color">W</span>edding</h1>
							<div class="slider-text-holder">
								<h2><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
								<p><?php echo tanggal_resepsi($tanggal_resepsi); ?></p>
								<div class="slider-img-holder"></div>
	                            <span id="date_deadline" hidden><?php echo date("d M Y H:i:s", strtotime($tanggal_resepsi)); ?></span>
							</div>

							<div class="justify-content-lg-center counter">
								<div id="countdown"></div>
							</div>

						</div>
					</div>
				</div>
				<div class="slider-scroll">
					<a class="scroll-link" href="#about">
						<i class="fa fa-angle-down fade-down"></i>
					</a>
				</div>
				<div class="img-overlay"></div>
			</div>
		</section>
		<!-- slider Section End -->

		<!-- Sticky Menu -->
		<header id="nav-holder">
			<nav id="primary-navbar" class="navbar navbar-expand-lg navbar-light bg-white">
				<div class="container">
					<a class="navbar-brand" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#">
						<?php echo $nama_panggilan_pengantin_pria; ?><span class="custom-color">&</span><?php echo $nama_panggilan_pengantin_wanita; ?>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto menu-right">
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" onclick="goTo('paling-atas')">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" onclick="goTo('pasangan')">About Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" onclick="goTo('kisah-kita')">Story</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" onclick="goTo('galeri')">Gallery</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" onclick="goTo('tanggal-event')">Event</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" onclick="goTo('buku-tamu')">RSVP</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- Sticky Menu End -->

		<!-- About Section -->
		<section id="about" class="pasangan">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="big-head-wrap">
							<img class="headline-hearth" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/headline_hearth.svg" alt="wedding-head-image">
						</div>
						<h2 class="big-heading mt-0 mt-0">About <span class="custom-color">Us</span></h2>
						<img class="headline_1" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/headline_simple.svg" alt="">
						<p class="sub-heading col-lg-8 offset-lg-2 margin-b-5">Pasangan yang Berbahagia</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 text-center margin-xs-b-2 margin-sm-b-2">
						<figure>
							<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/bride_338x338.jpg" alt="bride" class="img-fluid rounded-circle">
						</figure>
						<div class="about-content col-sm-8 offset-sm-2">
							<h4><span class="custom-color">Mempelai Wanita</span></h4>
							<h4><?php echo $nama_pengantin_wanita; ?></h4>
							<p>Anak ke-<?php echo $pengantin_wanita_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_wanita . ' & Ibu ' . $nama_ibu_pengantin_wanita ; ?></p>
						</div>
					</div>
					<div class="col-lg-6 text-center">
						<figure>
							<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/groom_338x338.jpg" alt="groom" class="img-fluid rounded-circle">
						</figure>
						<div class="about-content col-sm-8 offset-sm-2">
							<h4><span class="custom-color">Mempelai Pria</span></h4>
							<h4><?php echo $nama_pengantin_pria; ?></h4>
							<p>Anak ke-<?php echo $pengantin_pria_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_pria . ' & Ibu ' . $nama_ibu_pengantin_pria ; ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About Section End -->

		<!-- Comment Section -->
		<section id="comment">
			<div class="container relative-z">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div id="comment-carousel" class="owl-carousel owl-theme">
							<div class="item">
								<h3 class="heading text-center" style="color: #000;"><?php echo $kata_mutiara; ?></h3>
							</div>
							<div class="item">
								<h3 class="heading text-center" style="color: #000;"><?php echo $kata_mutiara; ?></h3>
							</div>
							<div class="item">
								<h3 class="heading text-center" style="color: #000;"><?php echo $kata_mutiara; ?></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="img-overlay"></div>
		</section>
		<!-- Comment Section End -->

		<!-- Story Section -->
		<section id="story" class="kisah-kita">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="big-head-wrap">
							<img class="headline-hearth" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/headline_hearth.svg" alt="">
						</div>
						<h2 class="big-heading mt-0 mt-0">
							<span class="custom-color">Our</span> Love Story
						</h2>
						<img class="headline_1" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/headline_simple.svg" alt="">
						<p class="sub-heading col-lg-8 offset-lg-2 margin-b-5">Sekilas moment-moment penting disaat pertama kali kita bertemu sampai akhirnya kita akan menuju moment puncak dari kisah ini</p>
					</div>
				</div>

				<div class="timeline">
					<div class="row">
						<div class="col-sm-12 col-md-6 pr-70 text-center">
							<div class="tline-thumbnail story-img-1">
								<div class="img-date-left">
									<div class="day"><?php echo date('d',strtotime($tanggal_pertemuan_pertama)); ?></div>
									<div class="month"><?php echo date('M',strtotime($tanggal_pertemuan_pertama)); ?></div>
									<div class="day"><?php echo date('Y',strtotime($tanggal_pertemuan_pertama)); ?></div>
								</div>
							</div>
						</div>
						<div class="tline-right-side col-sm-12 col-md-6 pl-70 text-left date-circle margin-b-2">
							<div class="tline-arrow"></div>							
							<h4 class="tline-title font-weight-light">Pertemuan Pertama</h4>
							<p><?php echo $resume_pertemuan_pertama; ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 pl-70 text-center order-2 main-order-xs-1 main-order-sm-1">
							<div class="tline-thumbnail story-img-2">
								<div class="img-date-right">
									<div class="day"><?php echo date('d',strtotime($tanggal_kencan_pertama)); ?></div>
									<div class="month"><?php echo date('M',strtotime($tanggal_kencan_pertama)); ?></div>
									<div class="day"><?php echo date('Y',strtotime($tanggal_kencan_pertama)); ?></div>
								</div>
							</div>
						</div>
						<div class="tline-left-side pr-70 col-md-6 text-right date-circle order-1 main-order-xs-2 main-order-sm-2 margin-b-2">
							<div class="tline-arrow"></div>
							<h4 class="tline-title font-weight-light">Kencan Pertama</h4>
							<p><?php echo $resume_kencan_pertama; ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6 pr-70 text-center">
							<div class="tline-thumbnail story-img-3">
								<div class="img-date-left">
									<div class="day"><?php echo date('d',strtotime($tanggal_lamaran)); ?></div>
									<div class="month"><?php echo date('M',strtotime($tanggal_lamaran)); ?></div>
									<div class="day"><?php echo date('Y',strtotime($tanggal_lamaran)); ?></div>
								</div>
							</div>
						</div>
						<div class="tline-right-side col-md-6 pl-70 text-left date-circle margin-b-2">
							<div class="tline-arrow"></div>
							<h4 class="tline-title font-weight-light">Lamaran</h4>
							<p><?php echo $resemu_lamaran; ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6 pl-70 text-center order-2 main-order-xs-1 main-order-sm-1">
							<div class="tline-thumbnail story-img-4">
								<div class="img-date-right">
									<div class="day"><?php echo date('d',strtotime($tanggal_akad_story)); ?></div>
									<div class="month"><?php echo date('M',strtotime($tanggal_akad_story)); ?></div>
									<div class="day"><?php echo date('Y',strtotime($tanggal_akad_story)); ?></div>
								</div>
							</div>
						</div>
						<div class="tline-left-side col-md-6 pr-70 text-right date-circle order-1 main-order-xs-2 main-order-sm-2 margin-b-2">
							<div class="tline-arrow"></div>
							<h4 class="tline-title font-weight-light">Hari yang Berbahagia Bagi Kami</h4>
							<p><?php echo $resume_akad; ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Story Section  End -->

		<!-- Portfolio Section -->
		<section id="portfolio" class="galeri">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="big-head-wrap">
							<img class="headline-hearth" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/headline_hearth.svg" alt="">
						</div>
						<h2 class="big-heading mt-0 mt-0">
							<span class="custom-color">Our</span> Gallery
						</h2>
						<img class="headline_1" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/headline_simple.svg" alt="">
						<p class="sub-heading col-lg-8 offset-lg-2 margin-b-5">Sekilas moment-moment penting disaat pertama kali kita bertemu sampai akhirnya kita akan menuju moment puncak dari kisah ini</p>
					</div>
				</div>
			</div>

			<!-- Portfolio Nav-->
			<div class="container-fluid">
				<!-- Portfolio Images -->
				<div class="row grid">
					<div class="grid-item popup-gallery col-lg-3 col-md-6 col-sm-12 transition" data-category="transition">
						<div class="item">
							<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_1.jpg">
								<div class="thumbnail-overlay">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_1.jpg" alt="">
									<span class="thumbnail-title">
										<i class="fa fa-search-plus"></i>
									</span>
								</div>
							</a>
						</div>
					</div>
					<div class="grid-item popup-gallery col-lg-3 col-md-6 col-sm-12 transition" data-category="transition">
						<div class="item">
							<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_2.jpg">
								<div class="thumbnail-overlay">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_2.jpg" alt="">
									<span class="thumbnail-title">
										<i class="fa fa-search-plus"></i>
									</span>
								</div>
							</a>
						</div>
					</div>
					<div class="grid-item popup-gallery col-lg-3 col-md-6 col-sm-12 transition" data-category="transition">
						<div class="item">
							<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_3.jpg">
								<div class="thumbnail-overlay">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_3.jpg" alt="">
									<span class="thumbnail-title">
										<i class="fa fa-search-plus"></i>
									</span>
								</div>
							</a>
						</div>
					</div>
					<div class="grid-item popup-gallery col-lg-3 col-md-6 col-sm-12 transition" data-category="transition">
						<div class="item">
							<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_4.jpg">
								<div class="thumbnail-overlay">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_4.jpg" alt="">
									<span class="thumbnail-title">
										<i class="fa fa-search-plus"></i>
									</span>
								</div>
							</a>
						</div>
					</div>
					<div class="grid-item popup-gallery col-lg-3 col-md-6 col-sm-12 transition" data-category="transition">
						<div class="item">
							<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_5.jpg">
								<div class="thumbnail-overlay">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_5.jpg" alt="">
									<span class="thumbnail-title">
										<i class="fa fa-search-plus"></i>
									</span>
								</div>
							</a>
						</div>
					</div>
					<div class="grid-item popup-gallery col-lg-3 col-md-6 col-sm-12 transition" data-category="transition">
						<div class="item">
							<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_6.jpg">
								<div class="thumbnail-overlay">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_6.jpg" alt="">
									<span class="thumbnail-title">
										<i class="fa fa-search-plus"></i>
									</span>
								</div>
							</a>
						</div>
					</div>
					<div class="grid-item popup-gallery col-lg-3 col-md-6 col-sm-12 transition" data-category="transition">
						<div class="item">
							<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_7.jpg">
								<div class="thumbnail-overlay">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_7.jpg" alt="">
									<span class="thumbnail-title">
										<i class="fa fa-search-plus"></i>
									</span>
								</div>
							</a>
						</div>
					</div>
					<div class="grid-item col-lg-3 col-md-6 col-sm-12 transition" data-category="transition">
						<div class="item">
							<a class="popup-youtube" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/https://www.youtube.com/watch?v=v_g-awMAm_4">
								<div class="thumbnail-overlay">
									<img class="img-fluid" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/portfolio_8.jpg" alt="">
									<span class="thumbnail-title">
										<i class="fa fa-youtube-play"></i>
									</span>
								</div>
							</a>
						</div>
					</div><!-- Portfolio Images End -->
				</div>
			</div>
		</section>
		<!-- Portfolio Section End -->

		<!-- Event Section -->
		<section id="event" class="tanggal-event">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="big-head-wrap">
							<img class="headline-hearth" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/headline_hearth.svg" alt="">
						</div>
						<h2 class="big-heading mt-0 mt-0">
							&nbsp;&nbsp;&nbsp; Akad <span class="custom-color">&</span> Resepsi
						</h2>
						<img class="headline_1" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/headline_simple.svg" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 pl-70 order-2 main-order-xs-1 main-order-sm-1 margin-sm-b-2">
						<div class="panel-group line" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default active">
								<a class="panel-link" data-toggle="collapse" data-parent="#accordion" href="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
									<div class="panel-heading" id="headingOne">
										<div class="panel-number">1</div>
										<h5 class="panel-title">Akad Nikah</h5>
									</div>
								</a>
								<div id="collapse_1" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<p><b><?php echo hari($tanggal_akad); ?> <?php echo tanggal_resepsi($tanggal_akad); ?> pukul <?php echo pukul($tanggal_akad); ?> WIB</b> <br><?php echo $tempat_akad; ?></p>
										<a class="link popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.672778464467!2d89.55846281543346!3d22.814585729793365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901c9481c799%3A0x92f932dd6112f8ff!2sHotel+Sheraton+Buliding%2C+29+Khan+Jahan+Ali+Rd%2C+Khulna!5e0!3m2!1sen!2sbd!4v1558933503904!5m2!1sen!2sbd">
											<span class="custom-color">
												<i class="fa fa-map-marker"></i>
											</span>Show Map
										</a>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<a class="panel-link" data-toggle="collapse" data-parent="#accordion" href="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
									<div class="panel-heading" id="headingTwo">
										<div class="panel-number">2</div>
										<h5 class="panel-title">Resepsi Pernikahan</h5>
									</div>
								</a>
								<div id="collapse_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<p><b><?php echo hari($tanggal_resepsi); ?> <?php echo tanggal_resepsi($tanggal_resepsi); ?> pukul <?php echo pukul($tanggal_resepsi); ?> WIB</b> <br><?php echo $tempat_resepsi; ?></p>
										<a class="link popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.672778464467!2d89.55846281543346!3d22.814585729793365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901c9481c799%3A0x92f932dd6112f8ff!2sHotel+Sheraton+Buliding%2C+29+Khan+Jahan+Ali+Rd%2C+Khulna!5e0!3m2!1sen!2sbd!4v1558933503904!5m2!1sen!2sbd">
											<span class="custom-color">
												<i class="fa fa-map-marker"></i>
											</span>Show Map
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Event Section End -->

		<!-- Footer RSVP -->
		<footer id="footer" class="relative-z buku-tamu">
			<div id="rsvp" class="container relative-z">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="big-head-wrap">
							<img class="headline-hearth op-03" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/headline_hearth.svg" alt="">
						</div>
						<h2 class="big-heading mt-0 mt-0">
							<span class="custom-color">R</span>SVP
						</h2>
						<img class="headline_1" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/headline_simple.svg" alt="">
						<p class="sub-heading col-lg-8 offset-lg-2 margin-b-5" style="color: #DF4E7F;">Apakah Kamu Akan Hadir?</p>
					</div>
				</div>
				<div class="col-md-10 offset-md-1 text-left">
					<form>
						<div class="row">
							<div class="form-group col-md-12">
								<input type="text" name="nama" placeholder="Nama*" id="nama" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12">
								<select name="status" class="form-control" id="status">
                                    <option value="" disabled selected>Apakah Kamu akan Hadir?</option>
                                    <option>Ya, Saya Akan hadir</option>
                                    <option>Ya, Mungkin Saya akan hadir</option>
                                    <option>Maaf Seperti Saya Belum bisa hadir</option>
                                </select>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12 margin-b-2">
								<textarea class="form-control" name="pesan" rows="5" placeholder="Silahkan ucapkan sesuatu*" id="pesan"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12 text-center">
								<button type="button" onclick="buku_tamu()" class="button-medium btn btn-default fill-btn">I am attending
									<img class="loader" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/Loader_to_form_white.gif" alt=""/>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="img-overlay"></div>
		</footer>
		<!-- Footer RSVP End -->

		<!-- Footer Bottom -->
		<div id="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 justify-content-center">
						<p><a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a> &copy; Copyright 2021, All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Bottom End -->
		
		<!-- Scroll Up -->
		<div class="scrollup">
			<i class="fa fa-angle-up" aria-hidden="true"></i>
		</div>
		<!-- Scroll Up End -->

		<!-- Frameworks -->
		<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<!-- Plugins -->
		<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/vegas/dist/vegas.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery-validation/js/jquery.validate.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/waypoint/js/jquery.waypoints.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/isotope/js/isotope.pkgd.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/owlcarousel/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/countup/js/countUp.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery.scrollTo/jquery.scrollTo.min.js"></script>

		<!-- Theme Sett -->
		<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/main.js"></script>

        <?php echo $js; ?>
	</body>
</html>

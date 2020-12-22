<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8" />
	<title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description"  content="Wedding"/>
	<meta name="keywords" content="Wedding, Marriage, Event, party, function" />
	<meta name="author"  content=""/>
	<meta name="MobileOptimized" content="320" />
	<!--style -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.theme.default.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/fonts.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css"/>
	<!-- favicon links -->
    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">
<script src='http://www.webstrot.com/google_analytics_auto.js'></script></head>
<body>
	<!-- preloader Start -->
	<div id="preloader">
		<div id="status"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/header/preloader.gif" id="preloader_image" alt="loader">
		</div>
	</div>
	<!-- Header Wrapper Start -->
	<div section-scroll='0' class="wd_scroll_wrap">
		<div class="wd_slider_wrapper ">
			<div id="snow"></div>
			<div class="wd_header_wrapper wd_single_index_menu">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="wd_logo">
						<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/header/logo.png" alt="Logo" title="Logo" class="img-responsive">
						<button class="wd_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="wd_mainmenu_wrapper">
						<div class="wd_main_menu_wrapper">
							<div class="wd_main_menu wd_single_index_menu">
								<ul>
									<li><a href="javascript:void(0);" onclick="goTo('paling-atas')">Home</a></li>
									<li><a href="javascript:void(0);" onclick="goTo('pasangan')">About Us</a></li>
									<li><a href="javascript:void(0);" onclick="goTo('kisah-kita')">Love Story</a></li>
									<li><a href="javascript:void(0);" onclick="goTo('tanggal-event')">Events</a></li>
									<li><a href="javascript:void(0);" onclick="goTo('galeri')">Gallery</a></li>
									<li><a href="javascript:void(0);" onclick="goTo('buku-tamu')">Rsvp</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="wd_slider_textinfo paling-atas">
				<!-- <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/header/name.png" alt="Slider Image" class="img-responsive"> -->
				<h3><?php echo tanggal_resepsi($tanggal_resepsi); ?></h3>
				<h1>Save The Date</h1>
				<div class="clearfix"></div>
				<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/heading.png" alt="Heading" class="img-responsive">
			</div>
			<div class="wd_single_index_menu_down">
				<ul>
					<li><a href="#" onclick="goTo('pasangan')" id="headbottom"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Header Wrapper End -->
	<!-- About Wrapper Start -->
	<div section-scroll='1' class="wd_scroll_wrap pasangan" id="down">
		<div class="wd_about_wrapper wd_toppadder90 wd_bottompadder70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
								<h4>are getting married!</h4>
								<h1>Groom and Bride</h1>
								<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/heading.png" alt="Heading" class="img-responsive">
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="wd_about_infobox wd_toppadder20">
								<div class="wd_about_infobox_img">
									<span><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/line.png" alt="Line" class="img-responsive"></span>
									<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/groom.png" alt="Groom" class="img-responsive">
								</div>
								<h2><?php echo $nama_pengantin_pria; ?></h2>
								<p>(Anak ke-<?php echo $pengantin_pria_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_pria . ' & Ibu ' . $nama_ibu_pengantin_pria ; ?>)</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-21 col-xs-12 col-lg-push-4 col-md-push-4 col-sm-push-0">
							<div class="wd_about_infobox wd_toppadder20">
								<div class="wd_about_infobox_img">
									<span><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/line.png" alt="Line" class="img-responsive"></span>
									<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/bride.png" alt="Groom" class="img-responsive">
								</div>
								<h2><?php echo $nama_pengantin_wanita; ?></h2>
								<p>(Anak ke-<?php echo $pengantin_wanita_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_wanita . ' & Ibu ' . $nama_ibu_pengantin_wanita ; ?>)</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-pull-4 col-md-pull-4 col-sm-pull-0">
							<div class="wd_about_infobox">
								<h1>Invitation</h1>
								<div class="wd_about_infobox_date">
									<p>We inviting you and your family on</p>
									<h3><?php echo hari($tanggal_resepsi); ?></h3>
									<h2><?php echo tanggal_resepsi($tanggal_resepsi); ?></h2>
									<p><?php echo $tempat_resepsi; ?></p>
								</div>
								<div class="wd_btn wd_single_index_menu_rsvp">
									<a href="#" onclick="goTo('buku-tamu')">rsvp</a>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="wd_timer_wrapper">
								<div class="wd_center_words">
									<h4>Don't miss it!</h4>
								</div>
								<div id="clockdiv">
									<span id="date_deadline" hidden><?php echo date("F j Y H:i:s", strtotime($tanggal_resepsi)) . " GMT+0700"; ?></span>
									<div><span class="days"></span><div class="smalltext">Days</div></div>
									<div><span class="hours"></span><div class="smalltext">Hours</div></div>
									<div><span class="minutes"></span><div class="smalltext">Minutes</div></div>
									<div><span class="seconds"></span><div class="smalltext">Seconds</div></div>
								</div>
								<div class="wd_center_words">
									<h4>until we get married!</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Wrapper End -->
	<!-- Story Wrapper Start -->
	<div section-scroll='2' class="wd_scroll_wrap kisah-kita">
		<div class="wd_story_wrapper wd_toppadder90 wd_bottompadder90">
			<div class="wd_overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
							<h4><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h4>
							<h1>Our true love story</h1>
							<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/heading.png" alt="Heading" class="img-responsive">
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="wd_story_covers">
							<div class="wd_story_line"></div>
							<div class="wd_story_covers_box_left">
								<div class="wd_story_dot"><span></span></div>
								<div class="wd_story_covers_box_img">
									<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/story_1.jpg" alt="Story">
								</div>
								<div class="wd_story_covers_box_datails">
									<span><?php echo tanggal_resepsi($tanggal_pertemuan_pertama); ?></span>
									<h1>Pertemuan Pertama</h1>
									<p><?php echo $resume_pertemuan_pertama; ?></p>
								</div>
							</div>
							<div class="wd_story_covers_box_right">
								<div class="wd_story_dot"><span></span></div>
								<div class="wd_story_covers_box_datails">
									<span><?php echo tanggal_resepsi($tanggal_kencan_pertama); ?></span>
									<h1>Kencan Pertama Kita</h1>
									<p><?php echo $resume_kencan_pertama; ?></p>
								</div>
								<div class="wd_story_covers_box_img">
									<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/story_2.jpg" alt="Story">
								</div>
							</div>
							<div class="wd_story_covers_box_left">
								<div class="wd_story_dot"><span></span></div>
								<div class="wd_story_covers_box_img">
									<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/story_3.jpg" alt="Story">
								</div>
								<div class="wd_story_covers_box_datails">
									<span><?php echo tanggal_resepsi($tanggal_lamaran); ?></span>
									<h1>Lamaran</h1>
									<p><?php echo $resemu_lamaran; ?></p>
								</div>
							</div>
							<div class="wd_story_covers_box_right">
								<div class="wd_story_dot"><span></span></div>
								<div class="wd_story_covers_box_datails">
									<span><?php echo tanggal_resepsi($tanggal_akad_story); ?></span>
									<h1>Hari yang Berbahagia Bagi Kami</h1>
									<p><?php echo $resume_akad; ?></p>
								</div>
								<div class="wd_story_covers_box_img">
									<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/story_4.jpg" alt="Story">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Story Wrapper End -->
	<!-- Event Wrapper Start -->
	<div section-scroll='3' class="wd_scroll_wrap tanggal-event">
		<div class="wd_event_wrapper wd_toppadder90 wd_bottompadder50">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
							<h4>Akad & Resepsi</h4>
							<h1>Hari yang Berbahagia</h1>
							<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/heading.png" alt="Heading" class="img-responsive">
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="wd_event_infobox">
							<h2>Akad Nikah</h2>
							<h1><?php echo hari($tanggal_akad); ?> <?php echo tanggal_resepsi($tanggal_akad); ?> pukul <?php echo pukul($tanggal_akad); ?> WIB</h1>
							<span><?php echo $tempat_akad; ?></span>
							<div class="clearfix"></div>
							<a href="#"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/map.png" alt="Map" class="img-responsive"></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-push-4 col-md-push-4 col-sm-push-0">
						<div class="wd_event_infobox">
							<h2>Resepsi Pernikahan</h2>
							<h1><?php echo hari($tanggal_resepsi); ?> <?php echo tanggal_resepsi($tanggal_resepsi); ?> pukul <?php echo pukul($tanggal_resepsi); ?> WIB</h1>
							<span><?php echo $tempat_resepsi; ?></span>
							<div class="clearfix"></div>
							<a href="#"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/map.png" alt="Map" class="img-responsive"></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-pull-4 col-md-pull-4 col-sm-pull-0">
						<div class="wd_event_infobox">
							<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/event_img.gif" alt="Event Image">
							<div class="wd_btn wd_single_index_menu_rsvp">
								<a href="#" onclick="goTo('buku-tamu')">rsvp</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Event Wrapper End -->
	<!-- Gallery Wrapper Start -->
	<div section-scroll='6' class="wd_scroll_wrap galeri">
		<div class="wd_gallery_wrapper wd_toppadder90 wd_bottompadder90">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
							<h4>Jenny & Mark</h4>
							<h1>memorable photo gallery</h1>
							<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/heading.png" alt="Heading" class="img-responsive">
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="wd_gallery_slider popup-gallery">
							<div class="owl-carousel owl-theme">
								<div class="item">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_1.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_1_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_1.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_1_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_2.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_2_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_2.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_2_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_3.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_3_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_4.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_4_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_3.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_3_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_5.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_5_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_6.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_6_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_1.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_1_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_1.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_1_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_2.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_2_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_2.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_2_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_3.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_3_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="wd_gallery_slide">
											<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_4.jpg" alt="Wedding">
											<div class="ast_glr_overlay">
												<p>Making A Love</p>
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/image_small_4_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Gallery Wrapper End -->
	<!-- Guest Wrapper Start -->
	<div section-scroll='4' class="wd_scroll_wrap buku-tamu" id="wd_contect_wrapper">
		<div class="wd_guest_wrapper wd_toppadder90">
			<div class="wd_overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
							<h4>Rsvp</h4>
							<h1>Be our guest!</h1>
							<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/heading.png" alt="Heading" class="img-responsive">
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="wd_guest_formbox">
							<span>Apakah kamu akan hadir?</span>
							<h4>Besar harapan kami, kamu bisa datang ke acara pernikankan kami untuk sekedar memberikan upacapan selamat dan do'a.</h4>
							<div class="wd_guest_form">
								<div class="row">
								<form>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<label>Nama :</label>
	                                    <input type="text" name="nama" placeholder="Nama*" id="nama" class="require form-control">
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<select name="status" class="form-control">
											<option value="">Apakah Kamu akan Hadir?</option>
	                                        <option>Ya, Saya Akan hadir</option>
	                                        <option>Ya, Mungkin Saya akan hadir</option>
	                                        <option>Maaf Seperti Saya Belum bisa hadir</option>
										</select>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                                    <textarea class="require form-control" name="pesan" placeholder="Silahkan ucapkan sesuatu*" id="pesan"></textarea>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="response"></div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="wd_btn">
											<button type="button" class="submitForm" form-type="inquiry" onclick="buku_tamu()">Send a Message</button>
										</div>
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonial Wrapper Start -->
		<div class="wd_testimonial_wrapper wd_toppadder70 wd_bottompadder70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="wd_testimonial_slider">
							<div class="owl-carousel owl-theme">
								<div class="item">
									<div class="wd_testimo_box">
										<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/content/heart.png" alt="Testimonial">
										<h4><?php echo $kata_mutiara; ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonial Wrapper End -->
	</div>
	<!-- Guest Wrapper End -->
	<!-- Footer Wrapper Start -->
	<div class="wd_footer_bottom_wrapper wd_toppadder50 wd_bottompadder50">
		<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
		<div class="col-md-12">
			<div class="wd_footer_section">
				<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/header/flogo.png" alt="Logo" class="img-responsive">
				<p>@ Copyright 2021 All Rights Reserved. By <a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a></p>
			</div>
		</div>
	</div>
	<!-- Footer Wrapper End -->
<!--main js file start--> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/wow.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/custom.js?v=15"></script>
<?php echo $js; ?>
<script>
$(window).on("load", function() {
		var wow = new WOW({
			boxClass: 'wow',
			animateClass: 'animated',
			offset: 0,
			mobile: true,
			live: true
		});
		wow.init();
	});
</script>
</body>
</html>
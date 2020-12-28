<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
	<meta name="description" content="">
    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/custom.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/responsive.css">

	<!-- Favicon and Touch Icons -->
	<link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
</head>
<body>
	<div class="wrapper">

		<!-- start preloader -->
        <div id="preloader">
            <div id="box-preloader">
                <img src="<?php echo base_url(); ?>assets/img/preloader.gif" id="preloader_image" alt="loader">
            </div>
        </div>
        <!-- end preloader --> 

        <!-- Content -->
	    <section onclick="playAudio()" type="button" id="over-lay">
	        <div class="gla_invitation_container">
	            <div class="gla_invitation_i gla_invitation_ii gla_image_bck" style='background-image: url("<?php echo base_url(); ?>public/starter_images/flower-ping.png")'>
	                <p><img src="<?php echo base_url(); ?>public/starter_images/save_the_date_bl.gif" alt=""></p>
	                <br><br>
	                <h2><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
	                <h4><?php echo tanggal_resepsi($tanggal_resepsi); ?></h4><br>
	                <h4><?php echo $tempat_resepsi; ?></h4>
	                <br>
	                <div class="box-start">
	                    <a href='#' class="text-start">Masuk</a>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- Content End -->

	    <div class="box-stop-scrolling">
	        <a href='#' class="stop-scrolling" onclick="stopScrolling()">Berhenti Menggulir Halaman</a>
	    </div>

	    <a href='#' class="musik play" onclick="togleAudio()"><i class="ti-music"></i></a>
	    <a href='#' class="musik pause" onclick="togleAudio()"><i class="ti-control-pause"></i></a>

	    <audio loop id="myAudio">
	        <source src="<?php echo base_url(); ?>assets/audio/<?php echo $lagu; ?>" type="audio/mpeg">
	    </audio>

		<!-- Header Styles -->
		<header class="header-nav transparent">
			<div class="container">
			    <!-- Start Navigation -->
			    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
			        <div class="container">
			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand ulockd-main-logo2" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#brand">
			                    <img src="<?php echo ASSETS . "img/general-logo.png";?>" class="logo logo-display hidden-md" alt="header-logo.png">
			                    <img src="<?php echo ASSETS . "img/general-logo.png";?>" class="logo logo-scrolled" alt="">
			                </a>
			            </div>
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-center ulockd-pad9100 pull-right" data-in="flipInX">
			                    <li><a href="javascript:void(0);" onclick="goTo('paling-atas')">Home</a></li>
			                    <li><a href="javascript:void(0);" onclick="goTo('pasangan')">About Us</a></li>
                                <li><a href="javascript:void(0);" onclick="goTo('kisah-kita')">Love Story </a></li>
                                <li><a href="javascript:void(0);" onclick="goTo('galeri')">Gallery</a></li>
                                <li><a href="javascript:void(0);" onclick="goTo('tanggal-event')">Events</a></li>
                                <li><a href="javascript:void(0);" onclick="goTo('buku-tamu')">RSVP</a></li>
			                </ul>
			            </div><!-- /.navbar-collapse -->
			        </div>
			    </nav>
			    <!-- End Navigation -->
			</div>
		</header>

		<!-- Home Design -->
		<div class="ulockd-home-slider snow_fall">
			<div class="container-fluid">
				<div class="row">
					<div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel" data-slide-to="0" class="active"></li>
							<li data-target="#carousel" data-slide-to="1" class=""></li>
							<li data-target="#carousel" data-slide-to="2" class=""></li>
						</ol>
						<!-- Carousel items -->
						<div class="carousel-inner carousel-zoom">
							<div class="item active"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/h1.jpg" alt="h1.jpg">
								<div class="carousel-caption">
									<h2 data-animation="animated bounceInDown">WE ARE GETTING MARRIED</h2>
									<h1 data-animation="animated zoomInLeft" class="cap-txt"><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h1>
									<p data-animation="animated zoomInRight"><?php echo tanggal_resepsi($tanggal_resepsi); ?></p>
									<a data-animation="animated bounceInUp" href="javascript:void(0);" onclick="goTo('buku-tamu')" class="btn btn-lg ulockd-btn-thm2 hidden-xs bdrs20" title="CLick On It">RSVP NOW</a>
								</div>
							</div>
						    <div class="item"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/h2.jpg" alt="h2.jpg">
								<div class="carousel-caption style2">
									<h1 data-animation="animated zoomInLeft" class="cap-txt xxss">Akad Nikah</h1>
									<h2 data-animation="animated bounceInDown"><?php echo tanggal_resepsi($tanggal_akad); ?><br> <?php echo pukul($tanggal_akad); ?> WIB <br>Save The Date</h2>
								</div>
							</div>
							<div class="item"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/h3.jpg" alt="h3.jpg">
								<div class="carousel-caption animated slideInLeft style3">
									<h1 data-animation="animated zoomInLeft" class="cap-txt">Resepsi</h1>
									<p data-animation="animated zoomInRight"><?php echo tanggal_resepsi($tanggal_resepsi); ?><br> <?php echo pukul($tanggal_akad); ?> WIB</p>
									<h2 data-animation="animated bounceInUp">Save The Date</h2>
								</div>
							</div>
							<!-- Carousel nav -->
							<a class="carousel-control left" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#sg-carousel" data-slide="prev">‹</a>
							<a class="carousel-control right" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#sg-carousel" data-slide="next">›</a>
						</div> 
					</div>
				</div>
			</div>
		</div>

		<!-- Our About -->
		<section class="ulockd-about bgc-overlay-white8 ulockd_bgp3 pasangan">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<div class="ulockd-main-title">
							<h2 class="text-thm2">Pasangan yang Berbahagia</h2>
							<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/title-bottom.png" alt="title-bottom.png">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-sm-6 ulockd-pad340">
								<div class="about-box">
									<div class="about-details text-right tac-xsd">
										<h2 class="text-thm2">Mempelai Wanita</h2>
										<h4><?php echo $nama_pengantin_wanita; ?></h4>
										<p class="fz16">Anak ke-<?php echo $pengantin_wanita_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_wanita . ' & Ibu ' . $nama_ibu_pengantin_wanita ; ?></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 ulockd-pad940">
								<div class="about-box">
									<div class="about-thumb tac-xsd">
										<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/bride.jpg" alt="bride.jpg">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row ulockd-mrgn1240">
					<div class="col-md-12">
						<div class="couple-img">
							<img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/couple-heart.png" alt="couple-heart.png">
						</div>
					</div>
				</div>
				<div class="row ulockd-mrgn1240">
					<div class="col-md-12">
						<div class="row">
							<div class="col-sm-6 ulockd-pad340">
								<div class="about-box">
									<div class="about-thumb tac-xsd">
										<img class="fn-xsd pull-right" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/groom.jpg" alt="groom.jpg">
									</div>
								</div>
							</div>
							<div class="col-sm-6 ulockd-pad940">
								<div class="about-box tac-xsd">
									<div class="about-details">
										<h2 class="text-thm2">Mempelai Pria</h2>
										<h4><?php echo $nama_pengantin_pria; ?></h4>
										<p class="fz16">Anak ke-<?php echo $pengantin_pria_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_pria . ' & Ibu ' . $nama_ibu_pengantin_pria ; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Our First Divider -->
		<section class="testimonial parallax ulockd_bgi1 overlay-tc8" data-stellar-background-ratio="0.3">
			<div class="container">
				<div class="row ulockd-mrgn1240">
					<div class="col-md-4 p0-mdd">
						<div class="wedding-invitation tac-xsd">
							<h2>Left The Event</h2>
							<h3 class="ff-alex"><?php echo tanggal_resepsi($tanggal_resepsi); ?></h3>
							<?php
								$tanggal = strtotime($tanggal_resepsi);
								$sekarang = time();

								$sisa = $tanggal - $sekarang;
							?>
                            <span id="date_deadline" hidden><?php echo $sisa; ?></span>

						</div>
					</div>
					<div class="col-md-8 text-center p0-mdd">
						<div class="upcoming-wedding-event ulockd-flip-clock">
							<div class="clock"></div>
							<div class="message"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Our Story -->
		<section class="ulockd-about bgc-overlay-white9 ulockd_bgp3 kisah-kita">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<div class="ulockd-main-title">
							<h2 class="text-thm2">Our Love Story</h2>
							<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/title-bottom.png" alt="title-bottom.png">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">					
					    <ul class="our-story timeline">
					        <li>
					        	<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
					        	<div class="timeline-panel left">
						            <div class="timeline-body w50prcnt pull-left ulockd-pdng15">
						            	<h3 class="timeline-title text-thm2">Pertemuan Pertama</h3>
						            	<p><small class="text-muted badge ulockd-bgthm"><span class="text-thm2"></span> <?php echo tanggal_resepsi($tanggal_pertemuan_pertama); ?></small></p>
				            			<p><?php echo $resume_pertemuan_pertama; ?></p>
						            </div>
						            <div class="timeline-body w50prcnt pull-right">
						            	<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/s1.jpg" alt="1.png">
						            </div>
					        	</div>
					        </li>
					        <li class="timeline-inverted">
					        	<div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
					        	<div class="timeline-panel right">
						            <div class="timeline-body w50prcnt pull-left">
						            	<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/s2.jpg" alt="s2.jpg">
						            </div>
						            <div class="timeline-body w50prcnt pull-right ulockd-pdng15">
						            	<h3 class="timeline-title text-thm2">Kencan Pertama</h3>
						            	<p><small class="text-muted badge ulockd-bgthm"><span class="text-thm2"></span> <?php echo tanggal_resepsi($tanggal_kencan_pertama); ?></small></p>
				            			<p><?php echo $resume_kencan_pertama; ?></p>
						            </div>
					        	</div>
					        </li>
					        <li>
					        	<div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
					        	<div class="timeline-panel left">
						            <div class="timeline-body w50prcnt pull-left ulockd-pdng15">
						            	<h3 class="timeline-title text-thm2">Lamaran</h3>
						            	<p><small class="text-muted badge ulockd-bgthm"><span class="text-thm2"></span> <?php echo tanggal_resepsi($tanggal_lamaran); ?></small></p>
				            			<p><?php echo $resemu_lamaran; ?></p>
						            </div>
						            <div class="timeline-body w50prcnt pull-right">
						            	<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/s3.jpg" alt="s3.jpg">
						            </div>
					        	</div>
					        </li>
					        <li class="timeline-inverted">
					        	<div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
					        	<div class="timeline-panel right">
						            <div class="timeline-body w50prcnt pull-left">
						            	<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/s7.jpg" alt="s7.jpg">
						            </div>
						            <div class="timeline-body w50prcnt pull-right ulockd-pdng15">
						            	<h3 class="timeline-title text-thm2">Hari yang Berbahagia Bagi Kami</h3>
						            	<p><small class="text-muted badge ulockd-bgthm"><span class="text-thm2"></span> <?php echo tanggal_resepsi($tanggal_akad_story); ?></small></p>
				            			<p><?php echo $resume_akad; ?></p>
						            </div>
					        	</div>
					        </li>
					    </ul>
					</div>
				</div>
			</div>
		</section>

		<!-- Our Gallery-->
		<section id="photostack-3" class="photostack ulockd-bgthm galeri">
			<div>
				<figure>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg" alt="1.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">The Wedding</h2>
						<div class="photostack-back">
							<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
						</div>
					</figcaption>
				</figure>
				<figure>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg" alt="1.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">The Wedding</h2>
						<div class="photostack-back">
							<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
						</div>
					</figcaption>
				</figure>
				<figure>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg" alt="1.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">The Wedding</h2>
						<div class="photostack-back">
							<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
						</div>
					</figcaption>
				</figure>
				<figure>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1a.jpg" alt="1a.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Happy Days</h2>
						<div class="photostack-back">
							<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
						</div>
					</figcaption>
				</figure>
				<figure>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2.jpg" alt="2.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Beautywood</h2>
						<div class="photostack-back">
							<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
						</div>
					</figcaption>
				</figure>
				<figure>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2a.jpg" alt="2a.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Serenity Beach</h2>
						<div class="photostack-back">
							<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
						</div>
					</figcaption>
				</figure>
				<figure>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg" alt="3.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Heaven of time</h2>
						<div class="photostack-back">
							<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
						</div>
					</figcaption>
				</figure>
				<figure>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3a.jpg" alt="3a.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Forever this</h2>
						<div class="photostack-back">
							<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
						</div>
					</figcaption>
				</figure>
				<figure data-dummy>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg" alt="4.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Lovely Green</h2>
					</figcaption>
				</figure>
				<figure data-dummy>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4a.jpg" alt="4a.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Wonderful</h2>
					</figcaption>
				</figure>
				<figure data-dummy>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg" alt="5.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Love Addict</h2>
					</figcaption>
				</figure>
				<figure data-dummy>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5a.jpg" alt="5a.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Friendship</h2>
					</figcaption>
				</figure>
				<figure data-dummy>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg" alt="6.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">White Nights</h2>
					</figcaption>
				</figure>
				<figure data-dummy>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6a.jpg" alt="6a.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Serendipity</h2>
					</figcaption>
				</figure>
				<figure data-dummy>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg" alt="7.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Pure Soul</h2>
					</figcaption>
				</figure>
				<figure data-dummy>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7a.jpg" alt="7a.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Winds of Peace</h2>
					</figcaption>
				</figure>
				<figure data-dummy>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg" alt="8.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Shades of blue</h2>
					</figcaption>
				</figure>
				<figure data-dummy>
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8a.jpg" alt="8a.jpg"/></a>
					<figcaption>
						<h2 class="photostack-title">Lightness</h2>
					</figcaption>
				</figure>
			</div>
		</section>

		<!-- Our Event -->
		<section class="events bgc-overlay-white7 ulockd_bgp3 tanggal-event">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<div class="ulockd-main-title">
							<h2 class="text-thm2">Akad & Resepsi</h2>
							<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/title-bottom.png" alt="title-bottom.png">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-1 ulockd-pdng5"></div>
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 ulockd-pdng5">
						<div class="event-box">
							<div class="thumb">
								<img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/event/2.jpg" alt="2.jpg">
							</div>
							<div class="details">
								<h3>Akad Nikah</h3>
								<ul class="list-unstyled">
									<li><a href="javascript:void(0);"><i class="fa fa-calendar text-thm2"></i> <?php echo hari($tanggal_akad); ?>, <?php echo tanggal_resepsi($tanggal_akad); ?></a></li>
									<li><a href="javascript:void(0);"><i class="fa fa-clock-o text-thm2"></i> <?php echo pukul($tanggal_akad); ?> WIB</a></li>
									<li><a href="javascript:void(0);"><i class="fa fa-map-marker text-thm2"></i> <?php echo $tempat_akad; ?></a></li>
								</ul>
								<p>Our Chosen Place, You And Your Family Are Invited, <strong class="text-thm2"> Thanks</strong></p>
							</div>
						</div>				
					</div>
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-2 ulockd-pdng5"></div>
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 ulockd-pdng5">
						<div class="event-box">
							<div class="thumb">
								<img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/event/4.jpg" alt="4.jpg">
							</div>
							<div class="details">
								<h3>Resepsi Pernikahan</h3>
								<ul class="list-unstyled">
									<li><a href="javascript:void(0);"><i class="fa fa-calendar text-thm2"></i> <?php echo hari($tanggal_resepsi); ?>, <?php echo tanggal_resepsi($tanggal_resepsi); ?></a></li>
									<li><a href="javascript:void(0);"><i class="fa fa-clock-o text-thm2"></i> <?php echo pukul($tanggal_resepsi); ?> WIB</a></li>
									<li><a href="javascript:void(0);"><i class="fa fa-map-marker text-thm2"></i> <?php echo $tempat_resepsi; ?></a></li>
								</ul>
								<p>Our Chosen Place, You And Your Family Are Invited, <strong class="text-thm2"> Thanks</strong></p>
							</div>
						</div>
					</div>
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-1 ulockd-pdng5"></div>
				</div>
				<div class="row ulockd-mrgn1240">
					<div class="col-md-12 text-center">
						<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#rsvp_forms" data-toggle="modal" class="btn btn-lg ulockd-btn-thm2 bdrs20" title="CLick On It">RSVP NOW</a>
						<!-- Product Popup View Start-->
						<div class="modal fade rsvp_forms" id="rsvp_forms">
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header text-center">
						                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
						                <h3 class="modal-title">RSVP Form. </h3>
						            </div>
						            <div class="modal-body">
						                <div class="row">
						                    <div class="col-md-10 col-md-offset-1">
												<!-- RSVP Form Starts -->
							                    <form id="rsvp_form" name="rsvp_form" class="rsvp_form text-left" method="post" novalidate="novalidate">
							                        <div class="messages"></div>
							                        <div class="row">
							                            <div class="col-xs-12 col-sm-12 col-md-12 text-center clearfix">
												        	<h1 class="text-thm2 ff-engnmt"><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?> Wedding RSVP</h1>
												        	<h5>You're Invited To <?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?> Wedding Reception On 15 November 2018.</h5>
							                            </div>
							                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
							                                <div class="form-group">
							                                    <label for="form_name">Full Name <small>*</small></label>
							                                    <input id="form_name" name="form_name" class="form-control" placeholder="Enter a name">
							                                </div>
							                            </div>
							                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
							                                <div class="form-group">
															    <label for="FormControlSelect1">Are You Attending?</label>
															    <select class="form-control" id="FormControlSelect1">
															    	<option>Select an option</option>
															    	<option>All event</option>
															    	<option>Wedding</option>
															    	<option>Reception</option>
															    	<option>No</option>
															    	<option>Other</option>
															    </select>
															</div>
							                            </div>
							                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
							                                <div class="form-group">
															    <label for="FormControlSelect2">Your Meal Selection</label>
															    <select class="form-control" id="FormControlSelect2">
															    	<option>Select an option</option>
															    	<option>Chicken</option>
															    	<option>Beef</option>
															    	<option>vegetarian</option>
															    	<option>Other</option>
															    </select>
															</div>
							                            </div>
							                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
							                                <div class="form-group">
															    <label for="FormControlSelect3">Are You Bringing a guest?</label>
															    <select class="form-control" id="FormControlSelect3">
															    	<option>Select an option</option>
															    	<option>1</option>
															    	<option>2</option>
															    	<option>3</option>
															    	<option>More..</option>
															    </select>
															</div>
							                            </div>
							                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
							                                <div class="form-group">
							                                    <label for="form_name2">Guest Name</label>
							                                    <input id="form_name2" name="form_name2" class="form-control" placeholder="Enter a name">
							                                </div>
							                            </div>
							                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
							                                <div class="form-group">
															    <label for="FormControlSelect4">Meal Selection</label>
															    <select class="form-control" id="FormControlSelect4">
															    	<option>Select an option</option>
															    	<option>Chicken</option>
															    	<option>Beef</option>
															    	<option>vegetarian</option>
															    	<option>Other</option>
															    </select>
															</div>
							                            </div>
							                        </div>
							                        <div class="form-group text-center">
							                            <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
							                            <button type="submit" class="btn btn-lg ulockd-btn-thm2 bdrs20">Send Us</button>
							                        </div>
									            </form>
						                    </div>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
						<!-- Product Popup View End-->
					</div>
				</div>
			</div>
		</section>

		<!-- Our RSVP -->
		<section class="ulockd-rsvp ulockd_bgi3 parallax buku-tamu" data-stellar-background-ratio="0.3">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
	                    <form>
	                        <div class="row">
	                            <div class="col-xs-12 col-sm-12 col-md-12 text-center clearfix">
						        	<h1 class="text-thm2 ff-engnmt"><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?> Wedding RSVP</h1>
						        	<p>You're Invited To <?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?> Wedding Reception On 15 November 2018.</p>
	                            </div>
	                            <div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 clearfix">
	                                <div class="form-group">
										<input type="text" name="nama" placeholder="Nama*" id="nama" class="form-control">
	                                </div>
	                            </div>
	                            <div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 clearfix">
	                                <div class="form-group">
									    <select name="status" class="form-control" id="status">
		                                    <option value="" disabled selected>Apakah Kamu akan Hadir?</option>
		                                    <option>Ya, Saya Akan hadir</option>
		                                    <option>Ya, Mungkin Saya akan hadir</option>
		                                    <option>Maaf Seperti Saya Belum bisa hadir</option>
		                                </select>
									</div>
	                            </div>
	                            <div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 clearfix">
	                                <div class="form-group">
									    <textarea class="form-control" name="pesan" rows="5" placeholder="Silahkan ucapkan sesuatu*" id="pesan"></textarea>
									</div>
	                            </div>
	                            <div class="col-xs-12 col-sm-2 col-md-12 clearfix">
			                        <div class="form-group text-center">
			                            <button type="button" class="btn btn-lg ulockd-btn-thm2 bdrs20" onclick="buku_tamu()">Send Us</button>
			                        </div>
	                            </div>
	                        </div>
			            </form>
					</div>
				</div>
			</div>
		</section>

		<!-- Our Footer -->
		<section class="ulockd-footers bgc-overlay-white8 ulockd_bgi4 finish">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="footer-box text-center">
							<h2 class="text-thm2"><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
							<h1 class="text-thm2">Are Getting Married</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<p class="color-black"><a href="https://kiniwedding.com" target="_blank" style="color: #000;">kiniwedding.com</a> &copy; Copyright 2021, All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
	<!-- Wrapper End -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootsnav.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/parallax.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/scrollto.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-scrolltofixed-min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.counterup.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/gallery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/wow.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/slider.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/video-player.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jflickrfeed.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.barfiller.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/timepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/tweetie.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/script.js"></script>

    <?php echo $js; ?>

	<script type='text/javascript'>
	// [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );
	new Photostack( document.getElementById( 'photostack-3' ), {
	    callback : function( item ) {
	        //console.log(item)
	    }
	});
	</script>
</body>

</html>
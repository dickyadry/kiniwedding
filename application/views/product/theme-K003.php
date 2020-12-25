<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">
		<!-- Bootstrap -->
		<link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<!-- Main CSS -->

		<!-- Favicon and Touch Icons -->
    	<link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">

		<link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    	<script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

		<link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.carousel.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.theme.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.transitions.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/custom.css" rel="stylesheet">

	</head>
<body>
	
	<!-- .preloader -->
    <div class="preloader"></div> 
    <!-- /.preloader -->
<!-- 
    <div onclick="playAudio()" type="button" id="over-lay">
        <div style="margin:0 auto;">
            <div class="tapfp">TAP TO CONTINUE</div>
            <div style="text-align:center">Use Chrome browser to make your website look perfect</div>
        </div>
    </div> -->

    <!-- Content -->
    <section onclick="playAudio()" type="button" id="over-lay" style='background-image: url("<?php echo base_url(); ?>assets/K004/images/wedding_m/sweet-ice-cream-photography-87191.jpg")'>

        <div class="gla_invitation_container">
            <div class="gla_invitation_i gla_invitation_ii gla_image_bck" style='background-image: url("<?php echo base_url(); ?>assets/K004/images/invitations/inv_i/back4.jpg")'>
                
                <p><img src="<?php echo base_url(); ?>assets/K004/images/invitations/inv_i/save_the_date_red.gif" alt="" height="240" width="250"></p>
                <br><br>
                <h2><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                <h4><?php echo hari($tanggal_resepsi); ?> <?php echo tanggal_resepsi($tanggal_resepsi); ?></h4><br>
                <h4><?php echo $tempat_resepsi; ?></p></h4>
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

	<!-- header -->
	<header id="header">
		<div class="container">
			<div class="row">
				<!-- #logo -->
				<div id="logo" class="col-lg-12 animated fadeInUp">
					<a href="#">
						<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/logo/logo.png" alt="Logo Image">
					</a>
					<br><br>
					<div class="section_header_title_wrap">
						<h1 class="section_header_title">
							<span><?php echo $nama_panggilan_pengantin_pria; ?> <b>&hearts;</b> <?php echo $nama_panggilan_pengantin_wanita; ?></span>
						</h1>
					</div>
				</div> 
				
				<button class="nav-collapser">
					<i class="fa fa-bars"></i>
				</button>

				<!-- #main_navigation -->
				<nav id="main_navigation" class="col-lg-12 main_navigation">
					<ul>
						<li class="scroll active"><a href="#slider">Home</a></li>
						<li class="scroll"><a href="#groom_bride">Pasangan</a></li>
						<li class="scroll"><a href="#love_story">Kisah Kita</a></li>
						<li class="scroll"><a href="#rsvp">Buku Tamu</a></li>
						<li class="scroll"><a href="#gallery">Galeri</a></li>
						<li class="scroll"><a href="#our_location">Akad & Resepsi</a></li>
					</ul>
				</nav> <!-- /#main_navigation -->
			</div>
		</div>
	</header> <!-- /header -->

	<!-- #slider -->
	<section id="slider">
		<div class="overlay">

			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="wow fadeIn"  data-wow-duration="2000">We are Invite all <br> to Celebrate Our Wedding</h1>
						
						<ul class="time_counter clearfix" id="countdowncontainer">
							<!-- dynamically count down wil added by js -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- /#slider -->



	<!-- #groom_bride -->
	<section id="groom_bride">

		<!-- .curv -->
		<div class="curv-gray">

		</div> <!-- /.curv -->


		<div class="container">

			<!-- .section_title_wrap -->
			<div class="section_title_wrap">
				<h1 class="section_title">
					<span>Groom <b>&</b> Bride</span>
				</h1>
			</div> <!-- /.section_title_wrap -->

			<div class="row">

				<!-- .single_groom -->
				<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 single_groom col-lg-push-1 col-md-push-1 wow slideInLeft" data-animation-duration="3s" data-animation-delay="1s">
					<?php if(isset($pengantin[0]->image)){?>
                    <img src="<?php echo str_replace('thumbs/', '',$pengantin[0]->image); ?>" alt="Groom image">
                    <?php } ?>

					<div class="info-box">
						<h2><?php echo $nama_pengantin_pria; ?></h2>
						<span>Groom</span>
						<p><?php echo $resume_pengantin_pria; ?></p>
					</div>
				</div> <!-- /.single_groom -->

				<!-- .single_bride -->
				<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 single_bride col-lg-offset-1 col-md-offset-1 wow slideInRight"  data-animation-duration="3s" data-animation-delay="2s">
					<?php if(isset($pengantin[1]->image)){?>
                    <img src="<?php echo str_replace('thumbs/', '',$pengantin[1]->image); ?>" alt="Bride image">
                    <?php } ?>
					<div class="info-box">
						<h2><?php echo $nama_pengantin_wanita; ?></h2>
						<span>Bride</span>
						<p><?php echo $resume_pengantin_wanita; ?></p>
					</div>
				</div> <!-- /.single_bride -->

			</div>
		</div>
	</section> <!-- /#groom_bride -->

	<!-- #qoute -->
	<?php $background_qoute = isset($background[0]->image)?$background[0]->image:''; ?>
	<section id="qoute" style='background: url("<?php echo str_replace('thumbs/', '',$background_qoute); ?>") center center no-repeat;'>
		<div class="overlay">
			<div class="container">
				<div class="row wow slideInLeft">
					<h2><?php echo $kata_mutiara; ?></h2>
				</div>
			</div>
		</div>
	</section> <!-- /#qoute -->

	<!-- #love_story -->
	<section id="love_story">
		<div class="container">

			<!-- .section_title_wrap -->
			<div class="section_title_wrap">
				<h1 class="section_title">
					<span>Kisah <b>Kita</b></span>
				</h1>
				<p>Sekilas moment-moment penting disaat pertama kali kita bertemu sampai akhirnya kita akan menuju moment puncak dari kisah ini</p>
				<br><br><br>
				<div class="row">
					<ul>
						<li class="clearfix">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 details wow slideInRight">
								<div class="details_content">
									<h2>Pertemuan Pertama</h2>
									<p><?php echo $resume_pertemuan_pertama; ?></p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 date wow slideInLeft">
								<?php echo tanggal_resepsi($tanggal_pertemuan_pertama); ?>
							</div>
						</li>
						<li class="clearfix">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 date wow slideInRight">
								<?php echo tanggal_resepsi($tanggal_kencan_pertama); ?>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 details wow slideInLeft">
								<div class="details_content">
									<h2>Kencan Pertama</h2>
									<p><?php echo $resume_kencan_pertama; ?></p>
								</div>
							</div>
						</li>
						<li class="clearfix">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 details  wow slideInRight">
								<div class="details_content">
									<h2>Lamaran</h2>
									<p><?php echo $resemu_lamaran; ?></p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 date wow slideInLeft">
								<?php echo tanggal_resepsi($tanggal_lamaran); ?>
							</div>
						</li>
						<li class="clearfix">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 date wow slideInRight">
								<?php echo tanggal_resepsi($tanggal_akad_story); ?>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 details wow slideInLeft">
								<div class="details_content">
									<h2>Keterikatan</h2>
									<p><?php echo $resume_akad; ?></p>
								</div>
							</div>
						</li>
					</ul>
				</div>

		</div>
	</section> <!-- /#love_story -->

	<!-- #rsvp -->
	<?php $background_rsvp = isset($background[1]->image)?$background[1]->image:''; ?>
	<section id="rsvp" style='background: url("<?php echo str_replace('thumbs/', '',$background_rsvp); ?>") center center no-repeat;'>
		<div class="overlay">
			<div class="container">
				<div class="row">
					<h1>WILL YOU ATTEND?</h1>
					<div class="rsvp_wrap">
						<h2>SIGN YOUR RSVP</h2>
						<form class="contact-form" method="post" action="#">
							<p><input type="text" class="form-control" name="nama" placeholder="Nama*" id="nama" required></p>
							<select class="form-control" name="status" id="status">
                                <option value="">Apakah Kamu akan Hadir?</option>
                                <option>Ya, Saya Akan hadir</option>
                                <option>Ya, Mungkin Saya akan hadir</option>
                                <option>Maaf Seperti Saya Belum bisa hadir</option>
                            </select>
                            <input name="pesan" class="form-control" placeholder="Silahkan ucapkan sesuatu*" id="pesan">
							<button type="button" onclick="buku_tamu()">Send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- /#rsvp -->

	<!-- .section_title_wrap -->
	<div class="section_title_wrap">
		<h1 class="section_title">
			<span>Buku <b>Tamu</b></span>
		</h1>
		<p>Sekilas moment-moment penting disaat pertama kali kita bertemu sampai akhirnya kita akan menuju moment puncak dari kisah ini</p>
		<br><br><br>
		<!-- start testimonials-section -->
	    <section class="testimonials-section section-padding">
	        <div class="container">
	            <div class="row">
	                <div class="col col-xs-12">
	                    <div class="testimoni-carousel">
	                        <?php foreach ($buku_tamu as $key => $value) { ?>
	                        <div class="grid">
	                            <div class="quote">
	                                <p><?php echo $value->pesan; ?></p>
	                            </div>
	                            <div class="client-info">
	                                <div class="img-holder">
	                                    <div style="padding:14px 0px; width: 53px; text-align: center; background: #FFF; border:2px solid #A2BECA;  border-radius: 50%;"><?php echo initial($value->nama); ?></div>
	                                </div>
	                                <div class="details">
	                                    <h5><?php echo $value->nama; ?></h5>
	                                    <p><?php echo $value->status; ?></p>
	                                </div>
	                            </div>
	                            <br>
	                            <br>
	                        </div>

	                        <?php } ?>
	                    </div>
	                </div>
	            </div>
	        </div> 
	    </section>
	</div>
	<!-- end testimonials-section -->


	<!-- #gallery -->
	<section id="gallery">
		<div class="container-fluid">

			<!-- .section_title_wrap -->
			<div class="section_title_wrap">
				<h1 class="section_title">
					<span>Lovely <b>Moment</b></span>
				</h1>
			</div> <!-- /.section_title_wrap -->

			<div class="row-fluid">
				<ul class="clearfix">
					<?php foreach ($galeri as $key => $value) { ?>
					<li><a data-gal="prettyPhoto" href="<?php echo str_replace('thumbs/', '',$value->image); ?>">
						<img src="<?php echo str_replace('thumbs/', '',$value->image); ?>" alt="kiniwedding">
						<span class="overlay"></span>
					</a></li>	
					<?php } ?>				
									
				</ul>
			</div>
		</div>		
	</section> <!-- /#gallery -->

	<!-- #location -->
	<section id="our_location">

		<!-- .curv -->
		<div class="curv-gray">

		</div> <!-- /.curv -->


		<div class="container">

			<!-- .section_title_wrap -->
			<div class="section_title_wrap">
				<h1 class="section_title">
					<span>Our <b>Wedding</b> Location</span>
				</h1>
			</div> <!-- /.section_title_wrap -->

			<div class="row">

				<!-- .single_groom -->
				<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 single_groom col-lg-push-1 col-md-push-1 wow slideInLeft" data-animation-duration="3s" data-animation-delay="1s">
					<?php if(isset($lainnya[0]->image)){?>
                    <img src="<?php echo str_replace('thumbs/', '',$lainnya[0]->image); ?>" alt="Lokasi Akad Nikah">
                    <?php } ?>

					<div class="info-box">
						<h2>Akad Nikah</h2>
						<span><?php echo hari($tanggal_akad); ?> <?php echo tanggal_resepsi($tanggal_akad); ?> pukul <?php echo pukul($tanggal_akad); ?> WIB</span>
						<p><?php echo $tempat_akad ?></p>
					</div>
				</div> <!-- /.single_groom -->

				<!-- .single_bride -->
				<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 single_bride col-lg-offset-1 col-md-offset-1 wow slideInRight"  data-animation-duration="3s" data-animation-delay="2s">
					<?php if(isset($lainnya[1]->image)){?>
                    <img src="<?php echo str_replace('thumbs/', '',$lainnya[1]->image); ?>" alt="Lokasi Resepsi">
                    <?php } ?>
					<div class="info-box">
						<h2>Resepsi</h2>
						<span><?php echo hari($tanggal_resepsi); ?> <?php echo tanggal_resepsi($tanggal_resepsi); ?> pukul <?php echo pukul($tanggal_resepsi); ?> WIB</span>
						<p><?php echo $tempat_resepsi; ?></p>
					</div>
				</div> <!-- /.single_bride -->

			</div>
		</div>
	</section> <!-- /#groom_bride -->

	<!-- #gmap -->
	<div id="gmap">

	</div> <!-- /#gmap -->

	<!-- footer -->
	<footer>
		
		<!-- .footer_top -->
		<div class="footer_top">
			<div class="section_footer_title_wrap">
				<h1 class="section_footer_title">
					<span><?php echo $nama_panggilan_pengantin_pria; ?> <b>&hearts;</b> <?php echo $nama_panggilan_pengantin_wanita; ?></span>
				</h1>
			</div>
		</div> <!-- /.footer_top -->

		<!-- .footer_bottom -->
		<div class="footer_bottom finish">
			<p>&copy; Copyright 2021, Made with love by <a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a></p>
		</div> <!-- /.footer_bottom -->
	</footer> <!-- /footer -->


	<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-2.1.3.min.js"></script> <!-- jquery -->
	<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.min.js"></script> <!-- bootstrap -->
	<script src="<?php echo base_url(); ?>assets/K002/js/jquery-plugin-collection.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script><!-- Map Api -->
	<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/gmaps.js"></script>  <!-- Gmap JS -->
	<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/countdown.js"></script>  <!-- Countdown JS -->
	<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.prettyPhoto.js"></script> <!-- Pretty Photo js -->
	<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/wow.min.js"></script> <!-- WOW js -->
	<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/custom.js"></script> <!-- custom -->
	<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/custom-home.js"></script> <!-- custom home js -->

	<?php echo $js; ?>

</body>
</html>
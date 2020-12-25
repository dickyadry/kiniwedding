<!DOCTYPE html>
<html lang="en-CA">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="<?php echo $product->code; ?>/http://gmpg.org/xfn/11">
  
  <title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
  <meta name="description" content="">
   <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/foundation.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/app.css" />
	<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/vendor/jqueryb8ff.js?ver=1.12.4"></script>
  <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
  <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
</head>
<body class="home">
  <div id="page" class="site">
  	<a class="skip-link screen-reader-text" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#content">Skip to content</a>
    <header id="masthead" class="site-header" style="background: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/couple-hero-img.jpg') center top no-repeat; background-size: cover;">
  		<nav id="site-navigation" class="main-navigation">
        <ul class="menu-main">
          <li class="scroll-to"><a href="#couple">The Couple</a></li>
          <li class="scroll-to"><a href="#couple-gallery">Gallery</a></li>
          <li class="scroll-to"><a href="#rsvp">RSVP &amp; Schedule</a></li>
        </ul>
  		</nav><!-- #site-navigation -->
  		<div class="site-branding">
        <h1 class="site-title"><?php echo $nama_panggilan_pengantin_pria; ?> <em>&amp;</em> <?php echo $nama_panggilan_pengantin_wanita; ?></h1>
        <p class="site-description"><?php echo tanggal_resepsi($tanggal_resepsi); ?></p>
  		</div><!-- .site-branding -->
  	</header><!-- #masthead -->

    <header class="fixed-header">
  		<nav>
        <ul class="menu-main">
          <li class="scroll-to"><a href="#couple">The Couple</a></li>
          <li class="scroll-to"><a href="#couple-gallery">Gallery</a></li>
          <li class="scroll-to"><a href="#rsvp">RSVP &amp; Schedule</a></li>
        </ul>
  		</nav>
  	</header>

    <!-- Mobile navigation -->
  	<nav class="mobile-nav-menu">
  		<a class="mobile-logo" href="#">Matrimony</a>
  		<a class="mobile-menu-btn" href="#"><span></span></a>
  		<div class="mobile-menu-container">
        <ul class="menu-main">
          <li class="scroll-to"><a href="#couple">The Couple</a></li>
          <li class="scroll-to"><a href="#couple-gallery">Gallery</a></li>
          <li class="scroll-to"><a href="#rsvp">RSVP &amp; Schedule</a></li>
        </ul>
  		</div>
  	</nav><!-- End .mobile-nav-menu -->

  	<div id="content" class="site-content">
      <div id="primary" class="content-area">
    		<main id="main" class="site-main">

          <section id="couple" class="section-row grid-x grid-padding-x couple-section" style="background: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/couple-bg.jpg') center top no-repeat; background-size: cover;">
          	<div class="grid-x grid-padding-x large-12">
          		<div class="cell large-4 medium-4 small-12">
          			<span class="headshot groom">
          				<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/headshot-groom.png" alt="groom headshot" width="233">
          			</span>
          			<h3><?php echo $nama_pengantin_pria; ?></h3>
          			<p class="desc groom">
          				Anak ke-<?php echo $pengantin_pria_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_pria . ' & Ibu ' . $nama_ibu_pengantin_pria ; ?>
          			</p>
          		</div><!-- End .large-4 -->
          		<div class="cell large-4 medium-4 hide-for-small-only">
          			<p class="giant-ampersand">&amp;</p>
          		</div><!-- End .large-4 -->
          		<div class="cell large-4 medium-4 small-12">
          			<span class="headshot bride">
          				<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/headshot-bride.png" alt="bride headshot" width="233">
          			</span>
          			<h3><?php echo $nama_pengantin_wanita; ?></h3>
          			<p class="desc bride">
                  Anak ke-<?php echo $pengantin_wanita_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_wanita . ' & Ibu ' . $nama_ibu_pengantin_wanita ; ?>
          			</p>
          		</div><!-- End .large-4 -->
          	</div><!-- End .large-12 -->
          	<div class="blocking"></div>
          </section><!-- End #couple -->

          <!-- Countdown section -->
          <section id="countdown" class="section-row countdown-wrap" style="background: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/countdown-bg.jpg') center top no-repeat; background-size: cover;">
          	<h2>Countdown to our Wedding</h2>
            <span id="tanggal" hidden><?php echo date("d", strtotime($tanggal_resepsi)); ?></span>
            <span id="bulan" hidden><?php echo date("n", strtotime($tanggal_resepsi)); ?></span>
            <span id="tahun" hidden><?php echo date("Y", strtotime($tanggal_resepsi)); ?></span>
          	<div id="default-countdown"></div>
          	<div class="blocking"></div>
          </section><!-- End #countdown -->

          <!-- Couple gallery section -->
          <section id="couple-gallery" class="section-row couple-gallery" style="background: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-bg.jpg') center top no-repeat; background-size: cover;">
          	<h2>Gallery</h2>
          	<div class="il-scattered-gallery">

          		<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery/img1.jpg" alt=""></a>
          		<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery/img2.jpg" alt=""></a>
          		<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery/img3.jpg" alt=""></a>
          		<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery/img4.jpg" alt=""></a>
          		<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery/img5.jpg" alt=""></a>
          		<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery/img1.jpg" alt=""></a>
          		<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery/img2.jpg" alt=""></a>

          	</div><!-- End .il-scattered-gallery -->
          	<div class="couple-slideshow-wrap">
          		<ul id="couple-slideshow"></ul>
          		<ul class="couple-thumbs"></ul>
          	</div><!-- End .couple-slideshow-wrap -->
          	<div class="mobile-slider-wrap couple-mobile-slider-wrap"><div class="couple-mobile-slider"></div></div>
          	<div class="blocking" title="Click to close"></div>
          </section><!-- End #couple-gallery -->

          <!-- RSVP section -->
          <section id="rsvp" class="section-row rsvp-section grid-x grid-padding-x" style="background: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/rsvp-bg.jpg') center top no-repeat; background-size: cover;">
          	<div class="rsvp-form-wrap">
          			<h2>RSVP</h2>
          			<p class="rsvp-desc">Besar harapan kami, kamu bisa datang ke acara pernikankan kami untuk sekedar memberikan upacapan selamat dan do'a.</p>
          			<form>
          				<div class="grid-x grid-padding-x">
          				<div class="cell">
                    <input type="text" name="nama" placeholder="Nama*" id="nama" class="form-control">
          				</div><!-- End .large-12 -->
          				<div class="cell">
                    <select name="status" class="form-control" id="status">
                      <option value="" disabled selected>Apakah Kamu akan Hadir?</option>
                      <option>Ya, Saya Akan hadir</option>
                      <option>Ya, Mungkin Saya akan hadir</option>
                      <option>Maaf Seperti Saya Belum bisa hadir</option>
                    </select>
          				</div><!-- End .large-12 -->
                  <div class="cell">
                    <textarea class="form-control" name="pesan" rows="5" placeholder="Silahkan ucapkan sesuatu*" id="pesan"></textarea>
                  </div><!-- End .large-12 -->
          				<div class="cell">
          					<input id="rsvp-submit" class="button" type="button" value="Submit" name="rsvp_submit" onclick="buku_tamu()">
          				</div><!-- End .large-12 -->
          				</div>
          			</form>
          	</div><!-- End .rsvp-form-wrap -->
          	<div class="blocking"></div>
          </section><!-- End #rsvp -->

          <!-- Schedule section -->
          <section id="schedule" class="section-row schedule-section" style="background: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/schedule-bg.jpg') center top no-repeat; background-size: cover;">
          		<div class="schedule-content-wrap">
          		<h2>Akad dan Resepsi</h2>
          		<div class="grid-x grid-padding-x">
          			<div class="cell large-6">
          				<strong>Akad Nikah</strong>
          				<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/ceremony-img.png" alt="" width="175">
          				<div class="event-details">
          					<p>
          						<?php echo tanggal_resepsi($tanggal_akad); ?> pukul <?php echo pukul($tanggal_akad); ?> WIB<br>
          						<em><?php echo $tempat_akad; ?></em>
          					</p>
          					<p></p>
          				</div><!-- End .event-details -->
          			</div><!-- End .cell.large-6 -->
          			<div class="cell large-6">
          				<strong>Resepsi Pernikahan</strong>
          				<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/party-img.png" alt="" width="175">
          				<div class="event-details">
          					<p>
          						<?php echo tanggal_resepsi($tanggal_resepsi); ?> pukul <?php echo pukul($tanggal_resepsi); ?> WIB<br>
                      <em><?php echo $tempat_resepsi; ?></em>
          					</p>
          					<p></p>
          				</div><!-- End .event-details -->
          			</div><!-- End .cell.large-6 -->
          		</div><!-- End .row -->
          	</div><!-- End .schedule-content-wrap -->
          	<div class="blocking"></div>
          </section><!-- End #schedule -->

    		</main><!-- #main -->
    	</div><!-- #primary -->
    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
  		<div class="site-info">
  			<a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a> &copy; Copyright 2021, All Rights Reserved.
  		</div><!-- .site-info -->
  	</footer><!-- #colophon -->

  </div><!-- #page -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/vendor/what-input.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/vendor/foundation.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/vendor/modernizr.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/plugins.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/app.js"></script>

  <?php echo $js; ?>

</body>
</html>

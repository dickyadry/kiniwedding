<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
    <meta name="description" content="">
   <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">

    <!-- >> CSS
============================================================================== -->
    <!-- Bootstrap styles -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- /Bootstrap Styles -->
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">    
    <!-- /google web fonts -->
    <!-- owl carousel -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <!-- /owl carousel -->
    <!-- fancybox.css -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/animate.css" rel="stylesheet">
    <!-- /fancybox.css -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/font-awesome/css/font-awesome.min.css">
    <!-- /Font Awesome -->
    <!-- Simple Lightbox -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/simplelightbox/dist/simplelightbox.min.css">    
    <!-- /Simple Lightbox -->
    <!-- Main Styles -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/styles.css" rel="stylesheet">
    <!-- /Main Styles -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
</head>

<body>
<!-- Page Loader
========================================================= -->
<div class="loader" id="page-loader"> 
  <div class="loading-wrapper">
    <div class="loader-heart loader-heart1"></div>
    <div class="loader-heart loader-heart2"></div>
    <div class="loader-heart loader-heart3"></div>
  </div>   
</div>
<!-- /End of Page loader
========================================================= -->
<!-- Header
================================================== -->
<header id="masthead" class="site-header" >    
    <!-- Main header -->
    <div class="container">     
        <!-- Navbar Header -->
        <div class="row">

            <!-- Main Navigation -->
            <div class="col-xs-12">

            <nav class="navbar navbar-default" > 

                    <!-- Brand and toggle get grouped for better mobile display --> 
                    <div class="navbar-header"> 
                        <!-- Mobile Menu Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                            <span class="sr-only">Toggle navigation</span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                        </button> 
                        <!-- /Mobile Menu Button -->

                        <!-- Logo -->
                        <div class="header-logo">
                            <p class="site-title">
                                <a href="#slideshow" rel="home"><?php echo $nama_panggilan_pengantin_pria; ?> &amp; <?php echo $nama_panggilan_pengantin_wanita; ?></a>
                            </p>                                
                        </div> 
                        <!-- /logo -->
                    </div> 
                    <!-- / Brand and toggle --> 

                    <!-- Navigation --> 
                    <div class="collapse navbar-collapse"> 
                        <ul class="nav navbar-nav navbar-right">
                            <li><a title="Story" href="#wedding-bio">About Us</a></li>
                            <li><a title="Story" href="#story">Story</a></li>
                            <li><a title="Story" href="#special-events">Ceremony</a></li>
                            <li><a title="Story" href="#gallery">Gallery</a></li>
                            <li><a title="Story" href="#rsvp">RSVP</a></li>
                        </ul>                           
                    </div>                      
                    <!-- /navigation -->
                </nav>
            </div>
            <!-- Main Navigation -->    

        </div> 
        <!-- /Navbar Header -->  
    </div>
    <!-- /Main header -->
</header>
<!-- / Header
================================================== -->

<!-- Main Content
================================================== -->
<div id="content" class="site-content">
    <div id="primary" class="">

        <!-- SECTION: Slideshow -->
        <div class="section-slideshow pal" id="slideshow">
            <div class="owl-carousel main-carousel owl-theme">
                <!-- Slide -->
                <div class="featured-slide slide bg-cover viewport" style="background-image: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/home-banner-slide1.jpg');">
                    <div class="slide-inner">
                        <div class="slide-icon active"></div>
                        <h1 class="slide-title active"><?php echo $nama_panggilan_pengantin_pria; ?> &amp; <?php echo $nama_panggilan_pengantin_wanita; ?></h1>
                        <p class="slide-text active">Akan Menikah dalam:</p>
                        <span id="date_deadline" hidden><?php echo date("Y/m/d H:i:s", strtotime($tanggal_resepsi)); ?></span>
                        <div class="slide-extra">
                            <!-- countdown (edit date on main.js file)-->
                            <div class="bearr-countdown-wrapper">
                                <div id="bearr-countdown-item" class="bearr-countdown-item"></div>
                            </div>
                            <!-- /countdown -->
                        </div>
                    </div>
                </div>
                <!-- /Slide -->
            </div>
        </div>       
        <!-- /SECTION: Slideshow -->

        <!-- SECTION: Wedding Bio -->
        <div class="section section-wedding-bio" id="wedding-bio">
            <div class="container">
                <!-- Section Title -->
                <div class="title-section-wrapper">
                    <!-- Title -->
                    <h2 class="title-section">Kami yang Berbahagia</h2>
                    <!-- /title -->
                    <!-- Text -->
                    <p class="text-section">Mempelai Wanita & Pria</p>
                    <!-- /text -->
                </div>
                <!-- /Section Title -->

                <!-- Wedding Bio -->
                <div class="row wedding-bio-wrapper">
                    <!-- Wedding Bio Item -->
                    <div class="col-sm-6">
                        <div class="wedding-bio-item wedding-bio-item-bride">
                            <!-- Picture -->
                            <figure class="wedding-bio-image"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/about-item-img.jpg" alt="" class="responsive-image"></figure>
                            <!-- / Picture -->
                            <div class="wedding-bio-content">
                                <h3>MEMPELAI WANITA</h3>
                                <h2 class="heading wedding-bio-title"><span><?php echo $nama_pengantin_wanita; ?></span></h2>
                                <!-- Description -->
                                <div class="wedding-bio-text">
                                    <p>Anak ke-<?php echo $pengantin_wanita_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_wanita . ' & Ibu ' . $nama_ibu_pengantin_wanita ; ?></p>
                                </div>
                                <!-- /Description -->
                            </div>
                        </div>
                    </div>
                    <!-- / Wedding Bio Item -->
                    <!-- Wedding Bio Item -->
                    <div class="col-sm-6">
                        <div class="wedding-bio-item wedding-bio-item-groom">
                            <figure class="wedding-bio-image"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/about-item-img2.jpg" alt="" class="responsive-image"></figure>
                            <div class="wedding-bio-content">
                                <h3>MEMPELAI PRIA</h3>
                                <h2 class="heading wedding-bio-title"><span><?php echo $nama_pengantin_pria; ?></span></h2>
                                <div class="wedding-bio-text">
                                    <p>Anak ke-<?php echo $pengantin_pria_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_pria . ' & Ibu ' . $nama_ibu_pengantin_pria ; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Wedding Bio Item -->
                </div>
                <!-- /Wedding Bio -->
            </div>
        </div>
        <!-- /SECTION: Wedding Bio -->

        <!-- SECTION: Testimonials -->
        <div class="section section-testimonials-wrapper" style="background-image: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/testimonials-bg.jpg');">
            <div class="container">
                <!-- Testimonials Carousel -->
                <div class="section-testimonials text-light">
                    <div class="owl-carousel testimonial-carousel common-carousel owl-theme">
                        <!-- Testimonial Item -->
                        <div class="slide">
                            <div class="testimonial-item">
                                <blockquote>
                                    <!-- Testimonial Author -->
                                    <footer><cite><?php echo $kata_mutiara; ?></cite></footer>
                                    <!-- /Testimonial Author -->
                                </blockquote>
                            </div>
                        </div>
                        <!-- / Testimonial Item -->   
                        <!-- Testimonial Item -->
                        <div class="slide">
                            <div class="testimonial-item">
                                <blockquote>
                                    <!-- Testimonial Author -->
                                    <footer><cite><?php echo $kata_mutiara; ?></cite></footer>
                                    <!-- /Testimonial Author -->
                                </blockquote>
                            </div>
                        </div>
                        <!-- / Testimonial Item -->               
                    </div>
                </div>
                <!-- /Testimonials Carousel -->
            </div>
        </div>
        <!-- /SECTION: Testimonials -->

        <!-- SECTION: Our Story -->
        <div class="section section-our-story" id="story">
            <div class="container">
                <!-- Section Title -->
                <div class="title-section-wrapper">
                    <!-- Title -->
                    <h2 class="title-section">Our Story</h2>
                    <!-- /title -->
                    <!-- Text -->
                    <p class="text-section">Sekilas moment-moment penting disaat pertama kali kita bertemu sampai akhirnya kita akan menuju moment puncak dari kisah ini</p>
                    <!-- /text -->
                </div>
                <!-- /Section Title -->

                <!-- Timeline item -->
                <div class="row story-wrap ">
                    <!-- Item description -->
                    <div class="col-sm-6 " data-match-height="StoryItem">                        
                        <div class="story-item">
                            <!-- Image -->
                            <div class="story-item-img">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img1.jpg" alt="" class="responsive-image">
                            </div>
                            <!-- /image -->
                            <!-- content -->
                            <div class="story-item-content">
                                <h2 class="story-item-title">Pertemuan Pertama</h2>
                                <div class="story-text">
                                    <p><?php echo $resume_pertemuan_pertama; ?></p>
                                </div>
                            </div>
                            <!-- /content -->
                        </div>
                    </div>
                    <!-- / Item description -->
                    <!-- Item Date -->
                    <div class="col-sm-6 story-date-wrap" data-match-height="StoryItem">
                        <div class="story-date">
                            <div class="story-time"><?php echo tanggal_resepsi($tanggal_pertemuan_pertama); ?></div>
                        </div>
                    </div>
                    <!-- /item date -->
                </div>
                <!-- /Timeline item -->

                <!-- Timeline Item -->
                <div class="row story-wrap ">
                    <!-- /Item description -->
                    <div class="col-sm-6 col-sm-push-6 " data-match-height="StoryItem">
                        <div class="story-item story-item-alt  ">
                            <!-- Item Image -->
                            <div class="story-item-img">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img2.jpg" alt="" class="responsive-image">
                            </div>
                            <!-- /Item image -->
                            <!-- Item Content -->
                            <div class="story-item-content">
                                <h2 class="story-item-title">Kencan Pertama Kita</h2>
                                <div class="story-text">
                                    <p><?php echo $resume_kencan_pertama; ?></p>
                                </div>
                            </div>
                            <!-- /Item Content -->
                        </div>
                    </div>
                    <!-- /Item description -->
                    <!-- item date -->
                    <div class="col-sm-6 story-date-wrap story-date-wrap-alt col-sm-pull-6 " data-match-height="StoryItem">
                        <div class="story-date">
                            <div class="story-time"><?php echo tanggal_resepsi($tanggal_kencan_pertama); ?></div>
                        </div>
                    </div>
                    <!-- /item date -->
                </div>
                <!-- /Timeline Item -->

                <!-- Timeline item -->
                <div class="row story-wrap ">
                    <!-- Item description -->
                    <div class="col-sm-6 " data-match-height="StoryItem">                        
                        <div class="story-item">
                            <!-- Image -->
                            <div class="story-item-img">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img3.jpg" alt="" class="responsive-image">
                            </div>
                            <!-- /image -->
                            <!-- content -->
                            <div class="story-item-content">
                                <h2 class="story-item-title">Lamaran</h2>
                                <div class="story-text">
                                    <p><?php echo $resemu_lamaran; ?></p>
                                </div>
                            </div>
                            <!-- /content -->
                        </div>
                    </div>
                    <!-- / Item description -->
                    <!-- Item Date -->
                    <div class="col-sm-6 story-date-wrap" data-match-height="StoryItem">
                        <div class="story-date">
                            <div class="story-time"><?php echo tanggal_resepsi($tanggal_lamaran); ?></div>
                        </div>
                    </div>
                    <!-- /item date -->
                </div>
                <!-- /Timeline item -->

                <!-- Timeline Item -->
                <div class="row story-wrap ">
                    <!-- /Item description -->
                    <div class="col-sm-6 col-sm-push-6 " data-match-height="StoryItem">
                        <div class="story-item story-item-alt  ">
                            <!-- Item Image -->
                            <div class="story-item-img">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img2.jpg" alt="" class="responsive-image">
                            </div>
                            <!-- /Item image -->
                            <!-- Item Content -->
                            <div class="story-item-content">
                                <h2 class="story-item-title">Hari yang Berbahagia Bagi Kami</h2>
                                <div class="story-text">
                                    <p><?php echo $resume_akad; ?></p>
                                </div>
                            </div>
                            <!-- /Item Content -->
                        </div>
                    </div>
                    <!-- /Item description -->
                    <!-- item date -->
                    <div class="col-sm-6 story-date-wrap story-date-wrap-alt col-sm-pull-6 " data-match-height="StoryItem">
                        <div class="story-date">
                            <div class="story-time"><?php echo tanggal_resepsi($tanggal_akad_story); ?></div>
                        </div>
                    </div>
                    <!-- /item date -->
                </div>
                <!-- /Timeline Item -->
            </div>
        </div>
        <!-- /SECTION: Our Story -->

        <!-- SECTION: Events -->
        <div class="section with-dark-bg section-events" id="special-events" style="background-image: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/special-event-bg.jpg');">
            <div class="container">
                <!-- Section Title -->
                <div class="title-section-wrapper">
                    <h2 class="title-section">AKAD & RESEPSI</h2>
                </div>
                <!-- /Section Title -->
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-sm-6">
                        <!-- Event Item -->
                        <div class="events-reminder-item">
                            <header>
                                <h3 class="events-item-heading">AKAD NIKAH</h3>
                            </header>
                            <div class="events-item-content">
                                <ul>
                                    <li>
                                        <span class="events-reminder-item-icon events-reminder-item-icon-time"></span><span class="events-reminder-time-content"><?php echo pukul($tanggal_akad); ?> WIB</span>
                                    </li>
                                    <li>
                                        <span class="events-reminder-item-icon events-reminder-item-icon-date"></span><span class="events-reminder-date-content"><?php echo hari($tanggal_akad); ?>, <?php echo tanggal_resepsi($tanggal_akad); ?></span>
                                    </li>
                                    <li>
                                        <span class="events-reminder-item-icon events-reminder-item-icon-address"></span><span class="events-reminder-date-address"><?php echo $tempat_akad; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Event Item -->
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-sm-6">
                        <!-- Event Item -->
                        <div class="events-reminder-item">
                            <header>
                                <h3 class="events-item-heading">RESEPSI PERNIKAHAN</h3>
                            </header>
                            <div class="events-item-content">
                                <ul>
                                    <li>
                                        <span class="events-reminder-item-icon events-reminder-item-icon-time"></span><span class="events-reminder-time-content"><?php echo pukul($tanggal_resepsi); ?> WIB</span>
                                    </li>
                                    <li>
                                        <span class="events-reminder-item-icon events-reminder-item-icon-date"></span><span class="events-reminder-date-content"><?php echo hari($tanggal_resepsi); ?>, <?php echo tanggal_resepsi($tanggal_resepsi); ?></span>
                                    </li>
                                    <li>
                                        <span class="events-reminder-item-icon events-reminder-item-icon-address"></span><span class="events-reminder-date-address"><?php echo $tempat_resepsi; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Event Item -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- / SECTION: Events -->

        <!-- Gallery -->
        <div class="section section-gallery" id="gallery">
            <!-- Section Title -->
            <div class="title-section-wrapper">
                <!-- Title -->
                <h2 class="title-section">Gallery</h2>
                <!-- /title -->
                <!-- Text -->
                <p class="text-section">Sekilas moment-moment penting disaat pertama kali kita bertemu sampai akhirnya kita akan menuju moment puncak dari kisah ini</p>
                <!-- /text -->
            </div>
            <!-- /Section Title -->

            <!-- Gallery Images -->
            <div class="gallery-images row">
                <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                    <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img2.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img2.jpg" alt="Gallery Image"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                    <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img5.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img5.jpg" alt="Gallery Image"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                    <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img8.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img8.jpg" alt="Gallery Image"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                    <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img7.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img7.jpg" alt="Gallery Image"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                    <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img1.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img1.jpg" alt="Gallery Image"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                    <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img7.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img7.jpg" alt="Gallery Image"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                    <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img2.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img2.jpg" alt="Gallery Image"></a></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                    <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img8.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img8.jpg" alt="Gallery Image"></a></div>
                </div>
            </div>
            <!-- /Gallery Images -->
        </div>
        <!-- /Gallery -->
 
        <!-- RSVP -->
        <div class="section section-contact bg-cover with-dark-bg" id="rsvp" style="background-image: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/contact-bg.jpg');">
            <div class="container">
                <!-- Section Title -->
                <div class="title-section-wrapper">
                    <!-- Title -->
                    <h2 class="title-section">Apakah Kamu Akan Hadir?</h2>
                    <!-- /title -->
                    <!-- Text -->
                    <p class="text-section">Besar harapan kami, kamu bisa datang ke acara pernikankan kami untuk sekedar memberikan upacapan selamat dan do'a.</p>
                    <!-- /text -->
                </div>
                <!-- /Section Title -->

                <!-- Form -->
                <form class="form row rsvp">
                    <!-- Form Group -->
                    <div class="col-sm-12 form-group">
                        <input type="text" name="nama" placeholder="Nama*" id="nama" class="form-control">
                    </div>
                    <!-- Form Group -->

                    <!-- Form Group -->
                    <div class="col-sm-12 form-group">
                        <select name="status" class="form-control" id="status">
                            <option value="" disabled selected>Apakah Kamu akan Hadir?</option>
                            <option>Ya, Saya Akan hadir</option>
                            <option>Ya, Mungkin Saya akan hadir</option>
                            <option>Maaf Seperti Saya Belum bisa hadir</option>
                        </select>
                    </div>
                    <!-- Form Group -->

                    <!-- Form Group -->
                    <div class="col-sm-12 form-group">
                        <textarea class="form-control" name="pesan" placeholder="Silahkan ucapkan sesuatu*" id="pesan"></textarea>
                    </div>
                    <!-- Form Group -->

                    <!-- Form Group -->
                    <div class="col-sm-12 form-group">
                        <button type="button" onclick="buku_tamu()" class="primary-btn with-bg">SUBMIT!</button>
                    </div>
                    <!-- Form Group -->
                </form>
                <!-- /Form -->
            </div>
        </div>
        <!-- /RSVP -->       
    </div>
</div>
<!-- /Main Content    
================================================== -->

<!-- Footer
================================================== -->
<footer id="colophon" class="site-footer">              
    <!-- footer bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-sm-8">
                    <!-- Site Info -->
                    <div class="site-quote">
                        <p><a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a> &copy; Copyright 2021, All Rights Reserved.</p>
                    </div>
                    <!-- /Site info -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->               
        </div>
    </div>
    <!-- /footer bottom -->     
</footer>
<!-- /Footer    
================================================== -->

<!-- Back to Top Button -->
<div id="back-to-top" class="back-to-top back-to-top-hide"><i class="fa fa-angle-up"></i></div>
<!-- /Back to Top Button -->

<!-- >> JS
============================================================================== -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery-1.12.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/validate.js"></script>
<!-- CountDown -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery.countdown.min.js"></script>
<!-- ImagesLoaded -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/imagesloaded.pkgd.min.js"></script>
<!-- Waypoints-->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/waypoints.min.js"></script>
<!-- /Waypoints-->
<!-- Owl Caroulsel -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<!-- Cross-browser -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/cross-browser.js"></script>
<!-- Simple Lightbox -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/simplelightbox/dist/simple-lightbox.min.js"></script>
<!-- Match Height Plugin to add height on elements -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery.matchHeight-min.js"></script>
<!-- Main Scripts -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/main.js"></script>
<?php echo $js; ?>
</body>
</html>
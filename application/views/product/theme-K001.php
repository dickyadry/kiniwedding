<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title> <?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?> </title>
    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">

    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/flaticon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/slick.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/slick-theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/swiper.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/custom.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

</head>

<body>


    <!-- Content -->
    <section onclick="playAudio()" type="button" id="over-lay">
        <div class="gla_invitation_container">
            <div class="gla_invitation_i gla_invitation_ii gla_image_bck" style='background-image: url("<?php echo base_url(); ?>public/starter_images/flower-K001.png")'>
                <p><img src="<?php echo base_url(); ?>public/starter_images/save_the_date_bl.gif" alt=""></p>
                <br><br>
                <h2><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                <h4><?php echo tanggal_resepsi($tanggal_resepsi); ?></h4><br>
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

    <!-- start page-wrapper -->
    <div class="page-wrapper flower-fixed-body">

        <!-- start preloader -->
        <div id="preloader">
            <div id="box-preloader">
                <img src="<?php echo base_url(); ?>assets/img/preloader.gif" id="preloader_image" alt="loader">
            </div>
        </div>
        <!-- end preloader --> 

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <div class="site-logo">
                                <a href="index.html">
                                    <h1><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h1>
                                    <span>Just Married</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end topbar -->
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="#">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#" onclick="goTo('tanggal-event')">Tanggal</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#" onclick="goTo('pasangan')">Pasangan</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#" onclick="goTo('kisah-kita')">Kisah Kita</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#" onclick="goTo('galeri')">Galeri</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#" onclick="goTo('buku-tamu')">Buku Tamu</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#" onclick="goTo('akad')">Akad & Resepsi</a>
                            </li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start of hero -->
        <section class="hero-slider hero-style-1 slider">
            <div class="swiper-container">
                <div class="slide-main-text">
                    <div class="container">
                        <div class="slide-title">
                            <h2><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                        </div>
                        <div class="wedding-date">
                            <span><?php echo tanggal_resepsi($tanggal_resepsi); ?></span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="count-down-clock">
                            <div id="clock"></div>
                        </div>
                    </div>
                    <div class="pattern">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="swiper-wrapper">

                    <?php foreach ($slider as $key => $value) { ?>
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="<?php echo show_images($value->image); ?>"></div> 
                    </div> 
                    <?php } ?>
                </div>

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start invitation-section -->
        <section class="invitation-section section-padding tanggal-event">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="invitation-box">
                            <div class="left-vec"></div>
                            <div class="right-vec"></div>
                            <div class="inner">
                                <h2>Save the Date</h2>
                                <span>For the wedding of</span>
                                <h3><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h3>
                                <p><?php echo hari($tanggal_resepsi); ?>, <?php echo tanggal_resepsi($tanggal_resepsi); ?> pukul <?php echo pukul($tanggal_resepsi); ?> s/d selesai, <?php echo $tempat_resepsi; ?></p>
                                <a href="#rsvp" class="theme-btn" id="scroll">RSVP now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end invitation-section -->


        <!-- start couple-section -->
        <section class="couple-section section-padding p-t-0 pasangan">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Pasangan Bahahagia</h2>
                            <?php echo $kata_mutiara; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="couple-area">
                            <div class="couple-row clearfix">
                                <div class="img-holder">
                                    <?php if(isset($pengantin[0]->image)){?>
                                    <img src="<?php echo show_images($pengantin[0]->image); ?>" alt>
                                    <?php } ?>
                                </div>
                                <div class="details">
                                    <div class="inner">
                                        <h2><?php echo $nama_pengantin_pria; ?></h2>
                                        <h4>Hi Sayang, Aku <?php echo $nama_pengantin_pria; ?>.</h4>
                                        <p><?php echo $resume_pengantin_pria; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="couple-row last-row clearfix">
                                <div class="details">
                                    <div class="inner">
                                        <h2><?php echo $nama_pengantin_wanita; ?></h2>
                                        <h4>Hi Sayang, Aku <?php echo $nama_pengantin_wanita; ?>.</h4>
                                        <p><?php echo $resume_pengantin_wanita; ?></p>
                                    </div>
                                </div>
                                <div class="img-holder">
                                    <?php if(isset($pengantin[0]->image)){?>
                                    <img src="<?php echo show_images($pengantin[1]->image); ?>" alt>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end couple-section -->


        <!-- start story-section -->
        <section class="story-section section-padding p-t-0 kisah-kita">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Kisah Kita</h2>
                            <p>Sekilas moment-moment penting disaat pertama kali kita bertemu sampai akhirnya kita akan menuju moment puncak dari kisah ini</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="story-block">
                            <ul>
                                <li>
                                    <div class="details">
                                        <h3>Pertemuan Pertama</h3>
                                        <span class="date"><?php echo tanggal_resepsi($tanggal_pertemuan_pertama); ?></span>
                                        <p><?php echo $resume_pertemuan_pertama; ?></p>
                                    </div>
                                    <div class="img-holder">
                                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/story/img-1.png" alt>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/story/img-2.png" alt>
                                    </div>
                                    <div class="details">
                                        <h3>Kencan Pertama</h3>
                                        <span class="date"><?php echo tanggal_resepsi($tanggal_kencan_pertama); ?></span>
                                        <p><?php echo $resume_kencan_pertama; ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="details">
                                        <h3>Lamaran</h3>
                                        <span class="date"><?php echo tanggal_resepsi($tanggal_lamaran); ?></span>
                                        <p><?php echo $resemu_lamaran; ?></p>
                                    </div>
                                    <div class="img-holder">
                                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/story/img-3.png" alt>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/story/img-4.png" alt>
                                    </div>
                                    <div class="details">
                                        <h3>Keterikatan</h3>
                                        <span class="date"><?php echo tanggal_resepsi($tanggal_akad_story); ?></span>
                                        <p><?php echo $resume_akad; ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end story-section -->


        <!-- start gallery-section -->
        <section class="gallery-section section-padding p-t-0 galeri">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Galeri</h2>
                            <p>Foto-foto ini menggambarkan moment kebersamaan kita berdua, semoga kebahagian ini akan terus tercipta</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="gallery-container gallery-fancybox masonry-gallery">
                            <div class="grid grid-item">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-1.png" class="fancybox" data-fancybox-group="gall-1">

                                    <?php if(isset($galeri[0]->image)){?>
                                    <img src="<?php echo show_images($galeri[0]->image); ?>" alt class="img img-responsive">
                                    <?php } ?>

                                </a>
                            </div>
                            <div class="grid grid-item">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-2.png" class="fancybox" data-fancybox-group="gall-1">
                                    <?php if(isset($galeri[1]->image)){?>
                                    <img src="<?php echo show_images($galeri[1]->image); ?>" alt class="img img-responsive">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="grid grid-item">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-3.png" class="fancybox" data-fancybox-group="gall-1">
                                    <?php if(isset($galeri[2]->image)){?>
                                    <img src="<?php echo show_images($galeri[2]->image); ?>" alt class="img img-responsive">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="grid grid-item">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-4.png" class="fancybox" data-fancybox-group="gall-1">
                                    <?php if(isset($galeri[3]->image)){?>
                                    <img src="<?php echo show_images($galeri[3]->image); ?>" alt class="img img-responsive">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="grid grid-item width2">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-5.png" class="fancybox" data-fancybox-group="gall-1">
                                    <?php if(isset($galeri[4]->image)){?>
                                    <img src="<?php echo show_images($galeri[4]->image); ?>" alt class="img img-responsive">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="grid grid-item width2">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-6.png" class="fancybox" data-fancybox-group="gall-1">
                                    <?php if(isset($galeri[5]->image)){?>
                                    <img src="<?php echo show_images($galeri[5]->image); ?>" alt class="img img-responsive">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="grid grid-item width2">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-7.png" class="fancybox" data-fancybox-group="gall-1">
                                    <?php if(isset($galeri[6]->image)){?>
                                    <img src="<?php echo show_images($galeri[6]->image); ?>" alt class="img img-responsive">
                                    <?php } ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

            </div> <!-- end container -->
        </section>
        <!-- end gallery-section -->


        <!-- start contact-section -->
        <section class="contact-section section-padding p-t-0 buku-tamu" id="rsvp">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Apakah kamu akan hadir?</h2>
                            <p>Besar harapan kami, kamu bisa datang ke acara pernikankan kami untuk sekedar memberikan upacapan selamat dan do'a.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="contact-form">
                            <form id="rsvp-form" class="form validate-rsvp-form row" method="post">
                                <div class="col col-sm-12">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama*" id="nama">
                                </div>
                                <div class="col col-sm-12">
                                    <select class="form-control" name="status" id="status">
                                        <option value="">Apakah Kamu akan Hadir?</option>
                                        <option>Ya, Saya Akan hadir</option>
                                        <option>Ya, Mungkin Saya akan hadir</option>
                                        <option>Maaf Seperti Saya Belum bisa hadir</option>
                                    </select>
                                </div>
                                <div class="col col-sm-12">
                                    <textarea class="form-control" name="pesan" placeholder="Silahkan ucapkan sesuatu*" id="pesan"></textarea>
                                </div>
                                <div class="col col-sm-12 submit-btn">
                                    <button type="button" class="theme-btn" onclick="buku_tamu()">Send</button>
                                    <div id="loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="col col-md-12 success-error-message">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-section -->


        <!-- start event-section -->
        <section class="event-section section-padding p-t-0 akad">
            <?php $background = isset($background[0]->image)?$background[0]->image:''; ?>
            <div class="top-area" style="background: url('<?php echo show_images($background); ?>') center center/cover no-repeat local;">
                <h2>Perayaan Cinta Kita</h2>
                <p class="date"><?php echo hari($tanggal_akad); ?>, <?php echo tanggal_resepsi($tanggal_akad); ?></p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="event-grids clearfix">
                            <div class="grid">
                                <h3>Akad Nikah</h3>
                                <p><b><?php echo hari($tanggal_akad); ?> <?php echo tanggal_resepsi($tanggal_akad); ?> pukul <?php echo pukul($tanggal_akad); ?> WIB</b> <br><?php echo $tempat_akad; ?></p>
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.672778464467!2d89.55846281543346!3d22.814585729793365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901c9481c799%3A0x92f932dd6112f8ff!2sHotel+Sheraton+Buliding%2C+29+Khan+Jahan+Ali+Rd%2C+Khulna!5e0!3m2!1sen!2sbd!4v1558933503904!5m2!1sen!2sbd" class="location popup-gmaps">See location</a>
                            </div>
                            <div class="grid">
                                <h3>Resepsi Pernikahan</h3>
                                <p><b><?php echo hari($tanggal_resepsi); ?> <?php echo tanggal_resepsi($tanggal_resepsi); ?> pukul <?php echo pukul($tanggal_resepsi); ?> WIB</b> <br><?php echo $tempat_resepsi; ?></p>
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.672778464467!2d89.55846281543346!3d22.814585729793365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901c9481c799%3A0x92f932dd6112f8ff!2sHotel+Sheraton+Buliding%2C+29+Khan+Jahan+Ali+Rd%2C+Khulna!5e0!3m2!1sen!2sbd!4v1558933503904!5m2!1sen!2sbd" class="location popup-gmaps">See location</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end event-section -->

        <!-- start testimonials-section -->
        <section class="testimonials-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title">
                            <h2>Clients openion</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat</p>
                        </div>
                    </div>
                </div>
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
                                        <div style="padding:14px 0px; width: 55px; text-align: center; background: #FFF; border:2px solid #A2BECA;  border-radius: 50%;"><?php echo initial($value->nama); ?></div>
                                    </div>
                                    <div class="details">
                                        <h5><?php echo $value->nama; ?></h5>
                                        <p><?php echo $value->status; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end testimonials-section -->

        <!-- start site-footer -->
        <footer class="site-footer footer-style-1 finish">
            <div class="inner">
                <div class="couple-pic">
                    <?php if(isset($lainnya[0]->image)){ ?>
                        <img src="<?php echo show_images($lainnya[0]->image); ?>" alt>
                    <?php } ?>
                </div>
                <h2>Terimakasih</h2>
                <ul class="social-links">
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                </ul>
                <p>&copy; Copyright 2021, Made with love by <a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a></p>
            </div>
        </footer>
        <!-- end site-footer -->


    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.min.js"></script>

    </script>
    <!-- Plugins for this template -->
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-plugin-collection.js"></script>

    <?php echo $js; ?>
    
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/script.js"></script>


</body>
</html>

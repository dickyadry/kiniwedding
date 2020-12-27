<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">

    <!-- Icon fonts -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/flaticon.css" rel="stylesheet">

    <!-- Favicon and Touch Icons -->
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/slick.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/slick-theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/custom.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

</head>

<body id="home">

    <!-- Content -->
    <section onclick="playAudio()" type="button" id="over-lay">
        <div class="gla_invitation_container">
            <div class="gla_invitation_i gla_invitation_ii gla_image_bck" style='background-image: url("<?php echo base_url(); ?>public/starter_images/flower-K005.png")'>
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
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="inner">
                <img src="<?php echo base_url(); ?>assets/img/preloader.gif" id="preloader_image" alt="loader">
            </div>
        </div>



        <!-- start of hero -->
        <section class="hero">
            <div class="hero-slider hero-slider-s1">
                <?php foreach ($slider as $key => $value) { ?>
                <div class="slide-item">
                    <img src="<?php echo show_images( $value->image); ?>" alt class="slider-bg">
                </div>
                <?php } ?>
            </div>
            <div class="wedding-announcement">
                <div class="couple-name-merried-text">
                    <h2 class="wow slideInUp" data-wow-duration="1s"><?php echo $nama_panggilan_pengantin_pria; ?> &amp; <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                    <div class="married-text wow fadeIn" data-wow-delay="1s">
                        <h4 class="">
                        <span class=" wow fadeInUp" data-wow-delay="1.05s">W</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.10s">e</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.15s">'</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.20s">r</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.25s">e</span>
                        <span>&nbsp;</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.30s">g</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.35s">e</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.40s">t</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.45s">t</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.50s">i</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.55s">n</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.60s">g</span>
                        <span>&nbsp;</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.65s">m</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.70s">a</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.75s">r</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.80s">r</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.85s">i</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.90s">e</span>
                        <span class=" wow fadeInUp" data-wow-delay="1.95s">d</span>

                        </h4>
                    </div>
                    <!-- <i class="fa fa-heart"></i> -->
                </div>

                <div class="save-the-date">
                    <h4>Save the date</h4>
                    <span class="date"><?php echo tanggal_resepsi($tanggal_resepsi); ?></span>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="couple-logo">
                            <h1><a href="#home"><?php echo substr($nama_panggilan_pengantin_pria, 0,1) ; ?> <i class="fi flaticon-shape-1"></i> <?php echo substr($nama_panggilan_pengantin_wanita, 0,1) ; ?></a></h1>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#couple">Pasangan</a></li>
                            <li><a href="#story">Kisah Kita</a></li>
                            <li><a href="#events">Tanggal Dan Lokasi</a></li>
                            <li><a href="#gallery">Galeri</a></li>
                            <li><a href="#rsvp">Buku Tamu</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start wedding-couple-section -->
        <section class="wedding-couple-section section-padding" id="couple">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="gb groom">
                            <div class="img-holder wow fadeInLeftSlow">
                                <?php if(isset($pengantin[0]->image)){?>
                                <img src="<?php echo show_images($pengantin[0]->image); ?>" alt>
                                <?php } ?>
                            </div>
                            <div class="details">
                                <div class="details-inner">
                                    <h3>The groom</h3>
                                    <p><?php echo $resume_pengantin_pria; ?></p>
                                    <span class="signature"><?php echo $nama_pengantin_pria; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="gb bride">
                            <div class="details">
                                <div class="details-inner">
                                    <h3>The Bride</h3>
                                    <p><?php echo $resume_pengantin_wanita; ?></p>
                                    <span class="signature">><?php echo $nama_pengantin_wanita; ?></span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="img-holder wow fadeInRightSlow">
                                <?php if(isset($pengantin[1]->image)){?>
                                <img src="<?php echo show_images($pengantin[1]->image); ?>" alt>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end wedding-couple-section -->


        <!-- start count-down-section -->
        <section class="count-down-section section-padding parallax" data-bg-image="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/countdown-bg.jpg" data-speed="7">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <h2><span>We are waiting for.....</span> The adventure</h2>
                    </div>
                    <div class="col col-md-7 col-md-offset-1">
                        <div class="count-down-clock">
                            <div id="clock">

                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end count-down-section -->


        <!-- start story-section -->
        <section class="story-section section-padding" id="story">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Our love story</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="story-timeline">
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="story-text right-align-text">
                                        <h3>Pertemuan Pertama</h3>
                                        <span class="date"><?php echo tanggal_resepsi($tanggal_pertemuan_pertama); ?></span>
                                        <p><?php echo $resume_pertemuan_pertama; ?></p>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="img-holder">
                                        <?php if(isset($lainnya[0]->image)){?>
                                            <img src="<?php echo show_images($lainnya[0]->image); ?>" alt class="img img-responsive">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="img-holder right-align-text">
                                        <?php if(isset($lainnya[1]->image)){?>
                                            <img src="<?php echo show_images($lainnya[1]->image); ?>" alt class="img img-responsive">
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col col-md-6 text-holder">
                                    <span class="heart">
                                        <i class="fa fa-heart"></i>
                                    </span>
                                    <div class="story-text">
                                        <h3>Kencan Pertama</h3>
                                        <span class="date"><?php echo tanggal_resepsi($tanggal_kencan_pertama); ?></span>
                                        <p><?php echo $resume_kencan_pertama; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-6 text-holder right-heart">
                                    <span class="heart">
                                        <i class="fa fa-heart"></i>
                                    </span>
                                    <div class="story-text right-align-text">
                                        <h3>Lamaran</h3>
                                        <span class="date"><?php echo tanggal_resepsi($tanggal_lamaran); ?></span>
                                        <p><?php echo $resemu_lamaran; ?></p>
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="img-holder right-align-text">
                                        <?php if(isset($lainnya[2]->image)){?>
                                            <img src="<?php echo show_images($lainnya[2]->image); ?>" alt class="img img-responsive">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="img-holder video-holder">
                                        <?php if(isset($lainnya[3]->image)){?>
                                            <img src="<?php echo show_images($lainnya[3]->image); ?>" alt class="img img-responsive">
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col col-md-6 text-holder">
                                    <span class="heart">
                                        <i class="fa fa-heart"></i>
                                    </span>
                                    <div class="story-text">
                                        <h3>Keterikatan</h3>
                                        <span class="date"><?php echo tanggal_resepsi($tanggal_akad_story); ?></span>
                                        <p><?php echo $resume_akad; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end story-section -->


        <!-- start cta -->
        <section class="cta section-padding parallax" data-bg-image="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/cta-bg.jpg" data-speed="7">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2><span>We are going to...</span> Celebrate Our Love</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end cta -->



        <!-- start events-section -->
        <section class="events-section section-padding" id="events">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Tanggal dan Lokasi Acara</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="event">
                            <div class="img-holder">
                                <?php if(isset($lainnya[4]->image)){?>
                                    <img src="<?php echo show_images($lainnya[4]->image); ?>" alt class="img img-responsive">
                                <?php } ?>
                            </div>
                            <div class="details">
                                <h3>Akad NIkah</h3>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> <?php echo $tempat_akad; ?></li>
                                    <li><i class="fa fa-clock-o"></i> <?php echo hari($tanggal_akad); ?> <?php echo tanggal_resepsi($tanggal_akad); ?> pukul <?php echo pukul($tanggal_akad); ?> WIB</b> <br><?php echo $tempat_akad; ?></li>
                                </ul>
                                <p>Besar harapan kami bapak/ibu.saudara/i biha hadir keacara kami</p>
                                <a class="see-location-btn popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25211.21212385712!2d144.95275648773628!3d-37.82748510398018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2zTWVsYm91cm5lIFZJQyAzMDA0LCDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gpq_gprzgpr4!5e0!3m2!1sbn!2sbd!4v1503742051881">
                                    See location <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="event">
                            <div class="img-holder">
                                <?php if(isset($lainnya[5]->image)){?>
                                    <img src="<?php echo show_images($lainnya[5]->image); ?>" alt class="img img-responsive">
                                <?php } ?>
                            </div>
                            <div class="details">
                                <h3>Wedding party</h3>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i><?php echo $tempat_resepsi; ?></li>
                                    <li><i class="fa fa-clock-o"></i> <?php echo hari($tanggal_resepsi); ?> <?php echo tanggal_resepsi($tanggal_resepsi); ?> pukul <?php echo pukul($tanggal_resepsi); ?> WIB</li>
                                </ul>
                                <p>Besar harapan kami bapak/ibu.saudara/i biha hadir keacara kami</p>
                                <a class="see-location-btn popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.0160484383277!2d144.99053291585201!3d-37.81309307975254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642ef89a7e023%3A0xb1353055e38c1ab8!2sNew+York+Tomato+Cafe!5e0!3m2!1sbn!2sbd!4v1503743893919">
                                    See location <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end events-section -->

        <!-- start gallery-section -->
        <section class="gallery-section section-padding" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Our gallery</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-container gallery-fancybox masonry-gallery">
                            <?php foreach ($galeri as $key => $value) { ?>
                            <div class="grid wedding">
                                <a href="<?php echo show_images($value->image); ?>" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="<?php echo show_images($value->image); ?>" alt class="img img-responsive">
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end gallery-section -->



        <!-- start rsvp-section -->
        <section class="rsvp-section section-padding parallax" data-bg-image="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/rsvp-bg.jpg" data-speed="7" id="rsvp">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title-white">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Join our party</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <p>Please reserve before December 16th, 2017.</p>
                        <form id="rsvp-form" class="form validate-rsvp-form row" method="post">
                            <div class="col col-sm-12">
                                <input type="text" name="nama" placeholder="Nama*" id="nama" required class="form-control">
                            </div>
                            <div class="col col-sm-12">
                                <select class="form-control" name="status"  id="status">
                                    <option value="" disabled selected>Apakah kamu akan hadir?</option>
                                    <option>Ya, Saya Akan hadir</option>
                                    <option>Ya, Mungkin Saya akan hadir</option>
                                    <option>Maaf Seperti Saya Belum bisa hadir</option>
                                </select>
                            </div>
                            <div class="col col-sm-12">
                                <textarea name="pesan" class="form-control" placeholder="Silahkan ucapkan sesuatu*" id="pesan" class="form-control"></textarea>
                            </div>
                            <div class="col col-sm-12 submit-btn">
                                <button type="button" class="submit" onclick="buku_tamu()">Send</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end rsvp-section -->


        <!-- start getting-there-section -->
        <section class="getting-there-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title-white">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Getting there</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <section class="testimonials-section section-padding">
                        <div class="container">
                            <div class="testimoni-carousel">
                                <?php foreach ($buku_tamu as $key => $value) { ?>
                                <div class="grid">
                                    <div class="quote">
                                        <p><?php echo $value->pesan; ?></p>
                                    </div>
                                    <div class="client-info">
                                        <div class="img-holder">
                                            <div style="padding:14px 0px; width: 57px; text-align: center; background: #FFF; border:2px solid #A2BECA;  border-radius: 50%; text-transform: uppercase;"><?php echo initial($value->nama); ?></div>
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
                    </section>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end getting-there-section -->


        <!-- start footer -->
        <footer class="site-footer finish">
            <div class="back-to-top">
                <a href="#" class="back-to-top-btn"><span><i class="fi flaticon-cupid"></i></span></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Forever and Always Our Love</h2>
                        <span><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></span>

                        <br><br><br>
                        <div class="footer_bottom">
                            <p>&copy; Copyright 2021, Made with love by <a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a></p>
                        </div>

                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer>
        <!-- end footer -->

    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/script.js"></script>

    <?php echo $js; ?>

</body>

</html>

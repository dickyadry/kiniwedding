<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pair - Weeding HTML5 Template">
    <meta name="keywords" content="wedding, pair, love, event, marriage, engagement">
    <meta name="author" content="webguru071">

    <title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">

    <!-- Favicon and Touch Icons -->
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/wedding-icon-font/flaticon.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playball&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/venobox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/fakeLoader.min.css">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/custom.css">

</head>

<body>

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
            <div class="gla_invitation_i gla_invitation_ii gla_image_bck" style='background-image: url("<?php echo base_url(); ?>public/starter_images/flower-K003.png")'>
                <p><img src="<?php echo base_url(); ?>public/starter_images/save_the_date_red.gif" alt=""></p>
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

    <!--Main Menu/ Mobile Menu Section-->
    <section class="menu-section-area">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg  fixed-top d-none d-sm-none d-md-block d-lg-block d-xl-block" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="javascript:void(0);" onclick="goTo('paling-atas')"><img src="<?php echo ASSETS . "img/general-logo.png";?>" alt="logo"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);" onclick="goTo('paling-atas')">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);" onclick="goTo('pasangan')">Bride & Groom</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);" onclick="goTo('tanggal-event')">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);" onclick="goTo('kisah-kita')">Story</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);" onclick="goTo('galeri')">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);" onclick="goTo('buku-tamu')">RSVP</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navigation -->

        <!-- Mobile Menu Start -->
        <nav class="mobile_menu hidden d-none">
            <a href="javascript:void(0);" onclick="goTo('paling-atas')"><img class="mobile-logo" src="<?php echo ASSETS . "img/general-logo.png";?>" alt="Wedding"></a>
            <ul class="nav navbar-nav navbar-right menu">
                <li class="nav-item active"><a class="nav-link" href="javascript:void(0);" onclick="goTo('paling-atas')">>Home</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0);" onclick="goTo('pasangan')">Bride & Groom</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0);" onclick="goTo('tanggal-event')">Events</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0);" onclick="goTo('kisah-kita')">Story</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0);" onclick="goTo('galeri')">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0);" onclick="goTo('buku-tamu')">RSVP</a></li>
            </ul>
        </nav>
        <!-- Mobile Menu End -->
    </section>
    <!--Main Menu/ Mobile Menu Section-->

    <!-- Header Start -->
    <header class="home-banner-area paling-atas">
        <section class="hero-area zoom-burns position-relative">
            <div class="hero-content-wrap zoom-burns-background"></div>
            <div class="container">
                <!--  Header Caption Start-->

                <div class="header-caption text-left position-relative">

                    <!-- Header Content Start -->
                    <div class="header-content">
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/header-love-bg.png" alt="Love Img" class="header-content-float-img position-absolute">
                        <div class="header-inner-text">
                            <h3 class="text-capitalize font-playball color-dark">We’re getting Married</h3>
                            <h1 class="header-caption-heading font-playball color-pink text-capitalize"><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h1>
                            <p class="text-capitalize font-playball color-dark"><?php echo tanggal_resepsi($tanggal_resepsi); ?></p>
                            <span id="tanggal" hidden><?php echo date("d", strtotime($tanggal_resepsi)); ?></span>
                            <span id="bulan" hidden><?php echo date("n", strtotime($tanggal_resepsi)); ?></span>
                            <span id="tahun" hidden><?php echo date("Y", strtotime($tanggal_resepsi)); ?></span>
                            <span id="jam" hidden><?php echo date("H", strtotime($tanggal_resepsi)); ?></span>
                            <span id="menit" hidden><?php echo date("i", strtotime($tanggal_resepsi)); ?></span>
                            <span id="detik" hidden><?php echo date("s", strtotime($tanggal_resepsi)); ?></span>
                        </div>
                    </div>
                    <!-- Header Content End -->

                    <!-- Countdown Start -->
                    <div id="event-count">

                        <div class="event-count-box">
                            <div class="dash days_dash">
                                <div class="digit">0</div>
                                <div class="digit">0</div>
                            </div>
                            <span class="dash_title d-block text-center text-capitalize color-pink">days</span>
                        </div>

                        <div class="event-count-box">
                            <div class="dash hours_dash">
                                <div class="digit">0</div>
                                <div class="digit">0</div>
                            </div>
                            <span class="dash_title d-block text-center text-capitalize color-pink">hours</span>
                        </div>

                        <div class="event-count-box">
                            <div class="dash minutes_dash">
                                <div class="digit">0</div>
                                <div class="digit">0</div>
                            </div>
                            <span class="dash_title d-block text-center text-capitalize color-pink">minutes</span>
                        </div>

                        <div class="event-count-box">
                            <div class="dash seconds_dash">
                                <div class="digit">0</div>
                                <div class="digit">0</div>
                            </div>
                            <span class="dash_title d-block text-center text-capitalize color-pink">seconds</span>
                        </div>

                    </div>
                    <!-- Countdown End -->

                </div>
                <!-- Header Caption End-->
            </div>

        </section>
    </header>
    <!-- Header End -->

    <!-- Bride and Groom Area Start -->
    <section class="bride-groom-area pasangan">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section-heading">Mempelai Pria & Wanita</h2>
                    <img class="heading-divider" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/divider.png" alt="divider">
                    <h3 class="section-subheading">Pasangan yang Berbahagia </h3>
                </div>
            </div>
            <div class="row">

                <!-- Bride Groom Box start-->
                <div class="col-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="bride-groom-box">
                        <div class="bride-groom-photo position-relative">
                            <div class="bride-photo-box position-relative"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/bride-photo.jpg" alt="Bride"></div>
                            <div class="bride-border-box">
                                <span class="bride-groom-border"></span>
                                <span class="bride-groom-border"></span>
                                <span class="bride-groom-border"></span>
                                <span class="bride-groom-border"></span>
                            </div>
                        </div>
                        <div class="bride-groom-content">
                            <a href="javascript:void(0);"><h3><?php echo $nama_pengantin_wanita; ?></h3></a>
                            <p>Anak ke-<?php echo $pengantin_wanita_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_wanita . ' & Ibu ' . $nama_ibu_pengantin_wanita ; ?></p>
                        </div>
                    </div>
                </div>
                <!-- Bride Groom Box end-->

                <!-- Bride Groom Divider start-->
                <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                    <div class="bride-groom-divider">
                        <div class="bride-divider-img">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/bride-groom-divider-love.png" alt="Love">
                        </div>
                    </div>
                </div>
                <!-- Bride Groom Divider end-->

                <!-- Bride Groom Box start-->
                <div class="col-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="bride-groom-box">
                        <div class="bride-groom-photo position-relative">
                            <div class="bride-photo-box position-relative"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/groom-photo.jpg" alt="Groom"></div>
                            <div class="bride-border-box">
                                <span class="bride-groom-border"></span>
                                <span class="bride-groom-border"></span>
                                <span class="bride-groom-border"></span>
                                <span class="bride-groom-border"></span>
                            </div>
                        </div>
                        <div class="bride-groom-content">
                            <a href="javascript:void(0);"><h3><?php echo $nama_pengantin_pria; ?></h3></a>
                            <p>Anak ke-<?php echo $pengantin_pria_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_pria . ' & Ibu ' . $nama_ibu_pengantin_pria ; ?></p>
                        </div>
                    </div>
                </div>
                <!-- Bride Groom Box end-->

            </div>
        </div>
    </section>
    <!-- Bride and Groom Area End -->

    <!-- Wedding Events Area Start -->
    <section class="wedding-events-area padding-zero tanggal-event">
        <div class="wedding-events-wrapper">
            <div class="section-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="section-heading">Akad & Resepsi</h2>
                            <img class="heading-divider" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/white-divider.png" alt="divider">
                            <h3 class="section-subheading"></h3>
                        </div>
                    </div>
                    <div class="row position-relative">
                        <div class="wedding-events-slider owl-carousel owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transition: all 1s ease 0s; width: 3420px; transform: translate3d(-1140px, 0px, 0px);">
                                    <div class="owl-item cloned" style="width: 380px;">
                                        <div class="item">
                                            <div class="events-box">
                                                <figure class="story-photo-box events-photo-box position-relative">
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/bride-groom-page-img/events1.jpg" alt="events schedule">
                                                    <figcaption>
                                                        <div class="events-content">
                                                            <i class="flaticon-newlyweds"></i>
                                                            <h4>Akad Nikah</h4>
                                                            <h6><?php echo hari($tanggal_akad); ?>, <?php echo tanggal_resepsi($tanggal_akad); ?></h6>
                                                            <h6><?php echo pukul($tanggal_akad); ?></h6>
                                                            <a href="javascript:void(0);" onclick="goTo('lokasi')"><p><?php echo $tempat_akad; ?></p></a>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 380px;">
                                        <div class="item">
                                            <div class="events-box">
                                                <figure class="story-photo-box events-photo-box position-relative">
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/bride-groom-page-img/events2.jpg" alt="events schedule">
                                                    <figcaption>
                                                        <div class="events-content">
                                                            <i class="flaticon-toast"></i>
                                                            <h4>Resepsi Pernikahan</h4>
                                                            <h6><?php echo hari($tanggal_resepsi); ?>, <?php echo tanggal_resepsi($tanggal_resepsi); ?></h6>
                                                            <h6><?php echo pukul($tanggal_resepsi); ?></h6>
                                                            <a href="javascript:void(0);" onclick="goTo('lokasi')"><p><?php echo $tempat_resepsi ?></p></a>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active center" style="width: 380px;">
                                        <div class="item">
                                            <div class="events-box">
                                                <figure class="story-photo-box events-photo-box position-relative">
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/bride-groom-page-img/events1.jpg" alt="events schedule">
                                                    <figcaption>
                                                        <div class="events-content">
                                                            <i class="flaticon-newlyweds"></i>
                                                            <h4>Akad Nikah</h4>
                                                            <h6><?php echo hari($tanggal_akad); ?>, <?php echo tanggal_resepsi($tanggal_akad); ?></h6>
                                                            <h6><?php echo pukul($tanggal_akad); ?></h6>
                                                            <a href="javascript:void(0);" onclick="goTo('lokasi')"><p><?php echo $tempat_akad; ?></p></a>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 380px;">
                                        <div class="item">
                                            <div class="events-box">
                                                <figure class="story-photo-box events-photo-box position-relative">
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/bride-groom-page-img/events2.jpg" alt="events schedule">
                                                    <figcaption>
                                                        <div class="events-content">
                                                            <i class="flaticon-toast"></i>
                                                            <h4>Resepsi Pernikahan</h4>
                                                            <h6><?php echo hari($tanggal_resepsi); ?>, <?php echo tanggal_resepsi($tanggal_resepsi); ?></h6>
                                                            <h6><?php echo pukul($tanggal_resepsi); ?></h6>
                                                            <a href="javascript:void(0);" onclick="goTo('lokasi')"><p><?php echo $tempat_resepsi ?></p></a>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev">
                                    <span aria-label="Previous">‹</span>
                                </button>
                                <button type="button" role="presentation" class="owl-next">
                                    <span aria-label="Next">›</span>
                                </button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                        <!-- Next/Preview Button Start-->
                        <div class="wedding_slide_nav">
                            <span class="testi_prev">
                                <i class="flaticon-angle-pointing-to-left"></i>
                            </span>
                                <span class="testi_next">
                                <i class="flaticon-angle-arrow-pointing-to-right"></i>
                            </span>
                        </div>
                        <!-- Next/Preview Button End-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Wedding Events Area End -->

    <!--Love Story Area Start-->
    <section class="love-story-area kisah-kita">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section-heading">Love Story</h2>
                    <img class="heading-divider" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/divider.png" alt="divider">
                    <h3 class="section-subheading">Sekilas moment-moment penting disaat pertama kali kita bertemu sampai akhirnya kita akan menuju moment puncak dari kisah ini </h3>
                </div>
            </div>

            <!--Single Story Row Start-->
            <div class="row">
                <!-- Timeline Box-->
                <div class="col-12 col-sm-5 col-md-5 col-lg-5">
                    <div class="story-box story-left">
                        <div class="story-content-wrap">
                            <figure class="story-photo-box position-relative">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img/1.jpg" alt="story">
                            </figure>
                            <div class="story-text text-right">
                                <h4>Pertemuan Pertama <span>01</span></h4>
                                <h5><?php echo tanggal_resepsi($tanggal_pertemuan_pertama); ?></h5>
                                <p><?php echo $resume_pertemuan_pertama; ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Timeline Box-->

                <!-- Love Story Box Divider-->
                <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                    <div class="story-divider-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img/story-divider.png" alt="divider"></div>
                </div>
                <!-- Love Story Box Divider-->

                <!-- Timeline Box-->
                <div class="col-12 col-sm-5 col-md-5 col-lg-5">
                    <div class="story-box story-right">
                        <div class="story-content-wrap">

                            <!-- Figure Image For Mobile Device Start-->
                            <figure class="story-photo-box position-relative show-mobile-device">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img/2.jpg" alt="story">
                            </figure>
                            <!-- Figure Image For Mobile Device End-->

                            <div class="story-text text-left">
                                <h4>Kencan Pertama Kita <span>02</span></h4>
                                <h5><?php echo tanggal_resepsi($tanggal_kencan_pertama); ?></h5>
                                <p><?php echo $resume_kencan_pertama; ?></p>
                            </div>

                            <!-- Figure Image For Large Device Start-->
                            <figure class="story-photo-box position-relative show-large-device">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img/2.jpg" alt="story">
                            </figure>
                            <!-- Figure Image For Large Device End-->

                        </div>
                    </div>
                </div>
                <!-- Timeline Box-->
            </div>
            <!--Single Story Row End-->

            <!--Single Story Row Start-->
            <div class="row">
                <!-- Timeline Box-->
                <div class="col-12 col-sm-5 col-md-5 col-lg-5">
                    <div class="story-box story-left">
                        <div class="story-content-wrap">

                            <figure class="story-photo-box position-relative">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img/3.jpg" alt="story">
                            </figure>
                            <div class="story-text text-right">
                                <h4>Lamaran <span>03</span></h4>
                                <h5><?php echo tanggal_resepsi($tanggal_lamaran); ?></h5>
                                <p><?php echo $resemu_lamaran; ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Timeline Box-->

                <!-- Love Story Box Divider-->
                <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                    <div class="story-divider-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img/story-divider.png" alt="divider"></div>
                </div>
                <!-- Love Story Box Divider-->

                <!-- Timeline Box-->
                <div class="col-12 col-sm-5 col-md-5 col-lg-5">
                    <div class="story-box story-right">
                        <div class="story-content-wrap">

                            <!-- Figure Image For Mobile Device Start-->
                            <figure class="story-photo-box position-relative show-mobile-device">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img/4.jpg" alt="story">
                            </figure>
                            <!-- Figure Image For Mobile Device End-->

                            <div class="story-text text-left">
                                <h4>Hari yang Berbahagia Bagi Kami <span>04</span></h4>
                                <h5><?php echo tanggal_resepsi($tanggal_akad_story); ?></h5>
                                <p><?php echo $resume_akad; ?> </p>
                            </div>

                            <!-- Figure Image For Large Device Start-->
                            <figure class="story-photo-box position-relative show-large-device">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img/4.jpg" alt="story">
                            </figure>
                            <!-- Figure Image For Large Device End-->
                        </div>
                    </div>
                </div>
                <!-- Timeline Box-->
            </div>
            <!--Single Story Row End-->

        </div>
    </section>
    <!-- Love Story Area End -->

    <!--Our Gallery Area Start-->
    <section class="our-gallery-area galeri">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section-heading">Our Gallery</h2>
                    <img class="heading-divider" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/divider.png" alt="divider">
                    <h3 class="section-subheading">Sekilas moment-moment penting disaat pertama kali kita bertemu sampai akhirnya kita akan menuju moment puncak dari kisah ini. </h3>
                </div>
            </div>

            <!--Our Gallery image Start-->
            <div class="row shuffle-wrapper">
                <div class="col-lg-4 col-6 bottom-margin shuffle-item">
                    <div class="gallery-box position-relative hover-wrapper">
                        <figure class="story-photo-box position-relative">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/5.jpg" alt="gallery" class="img-fluid w-100 d-block">
                            <figcaption>
                                <a class="btn btn-sm venobox" data-gall="myGallery" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/gallery-large-img/5.jpg">
                                    <i class="flaticon-plus-symbol"></i>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-6 bottom-margin shuffle-item">
                    <div class="gallery-box position-relative rounded hover-wrapper">
                        <figure class="story-photo-box position-relative">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/6.jpg" alt="gallery" class="img-fluid w-100 d-block">
                            <figcaption>
                                <a class="btn btn-sm venobox" data-gall="myGallery" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/gallery-large-img/6.jpg">
                                    <i class="flaticon-plus-symbol"></i>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-6 bottom-margin shuffle-item">
                    <div class="gallery-box position-relative rounded hover-wrapper">
                        <figure class="story-photo-box position-relative">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/7.jpg" alt="gallery" class="img-fluid w-100 d-block">
                            <figcaption>
                                <a class="btn btn-sm venobox" data-gall="myGallery" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/gallery-large-img/7.jpg">
                                    <i class="flaticon-plus-symbol"></i>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-6 bottom-margin shuffle-item">
                    <div class="gallery-box position-relative rounded hover-wrapper">
                        <figure class="story-photo-box position-relative">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/8.jpg" alt="gallery" class="img-fluid w-100 d-block">
                            <figcaption>
                                <a class="btn btn-sm venobox" data-gall="myGallery" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/gallery-large-img/8.jpg">
                                    <i class="flaticon-plus-symbol"></i>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-6 bottom-margin shuffle-item">
                    <div class="gallery-box position-relative rounded hover-wrapper">
                        <figure class="story-photo-box position-relative">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/2.jpg" alt="gallery" class="img-fluid w-100 d-block">
                            <figcaption>
                                <a class="btn btn-sm venobox" data-gall="myGallery" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/gallery-large-img/2.jpg">
                                    <i class="flaticon-plus-symbol"></i>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 col-6 bottom-margin shuffle-item">
                    <div class="gallery-box position-relative rounded hover-wrapper">
                        <figure class="story-photo-box position-relative">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/3.jpg" alt="gallery" class="img-fluid w-100 d-block">
                            <figcaption>
                                <a class="btn btn-sm venobox" data-gall="myGallery" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/gallery-large-img/3.jpg">
                                    <i class="flaticon-plus-symbol"></i>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-6 bottom-margin shuffle-item">
                    <div class="gallery-box position-relative rounded hover-wrapper">
                        <figure class="story-photo-box position-relative">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/1.jpg" alt="gallery" class="img-fluid w-100 d-block">
                            <figcaption>
                                <a class="btn btn-sm venobox" data-gall="myGallery" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/gallery-large-img/1.jpg">
                                    <i class="flaticon-plus-symbol"></i>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 col-6 bottom-margin shuffle-item">
                    <div class="gallery-box position-relative rounded hover-wrapper">
                        <figure class="story-photo-box position-relative">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/9.jpg" alt="gallery" class="img-fluid w-100 d-block">
                            <figcaption>
                                <a class="btn btn-sm venobox" data-gall="myGallery" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/gallery-large-img/9.jpg">
                                    <i class="flaticon-plus-symbol"></i>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-lg-4 col-6 bottom-margin shuffle-item">
                    <div class="gallery-box position-relative rounded hover-wrapper">
                        <figure class="story-photo-box position-relative">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/10.jpg" alt="gallery" class="img-fluid w-100 d-block">
                            <figcaption>
                                <a class="btn btn-sm venobox" data-gall="myGallery" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img/gallery-large-img/10.jpg">
                                    <i class="flaticon-plus-symbol"></i>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <!--Our Gallery image End-->
        </div>
    </section>
    <!--Our Gallery Area End-->

    <!-- RSVP Area Start -->
    <section class="rsvp-area buku-tamu">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section-heading">RSVP</h2>
                    <img class="heading-divider" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/divider.png" alt="divider">
                    <h3 class="section-subheading">Besar harapan kami, kamu bisa datang ke acara pernikankan kami untuk sekedar memberikan upacapan selamat dan do'a. </h3>
                </div>
            </div>
            <div class="row">
                <!-- RSVP Area Start -->
                <div class="rsvp-form-area">
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="nama" placeholder="Nama*" id="nama" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select name="status" class="form-control" id="status">
                                        <option value="" disabled selected>Apakah Kamu akan Hadir?</option>
                                        <option>Ya, Saya Akan hadir</option>
                                        <option>Ya, Mungkin Saya akan hadir</option>
                                        <option>Maaf Seperti Saya Belum bisa hadir</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group nessage-text">
                                    <textarea class="form-control" name="pesan" rows="5" placeholder="Silahkan ucapkan sesuatu*" id="pesan"></textarea>
                                </div>
                                <div class="rsvp-submit-button text-center">
                                    <button type="button" class="btn section-button text-uppercase" onclick="buku_tamu()">RSVP</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- RSVP Area End -->
            </div>
        </div>
    </section>
    <!-- RSVP Area End -->

    <!-- MAP Area Start -->
    <section class="locations-page-area lokasi">
        <div class="container">
            <div class="location-address-part">
                <div class="row">
                    <div class="col-6">
                        <span class="text-center"><a href="javascript:void(0);"><h3>Akad Nikah</h3></a></span>
                        <!--Map Part Start-->
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.672778464467!2d89.55846281543346!3d22.814585729793365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901c9481c799%3A0x92f932dd6112f8ff!2sHotel+Sheraton+Buliding%2C+29+Khan+Jahan+Ali+Rd%2C+Khulna!5e0!3m2!1sen!2sbd!4v1558933503904!5m2!1sen!2sbd" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-6">
                        <span class="text-center"><a href="javascript:void(0);"><h3>Resepsi</h3></a></span>
                        <!--Map Part Start-->
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.672778464467!2d89.55846281543346!3d22.814585729793365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901c9481c799%3A0x92f932dd6112f8ff!2sHotel+Sheraton+Buliding%2C+29+Khan+Jahan+Ali+Rd%2C+Khulna!5e0!3m2!1sen!2sbd!4v1558933503904!5m2!1sen!2sbd" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MAP Area End -->

    <!-- Footer Start -->
    <footer class="footer finish">
        <!-- Footer Bottom Area Start-->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-bottom-part">
                            <div class="copyright">
                                <a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a> &copy; 2021. All Rights Reserved
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Footer Bottom Area End-->
    </footer>
    <!-- Footer End -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.lwtCountdown-1.0.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/venobox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/shuffle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/shuffle-custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.meanmenu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/fakeLoader.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/custom.js"></script>

    <?php echo $js; ?>

</body>
</html>
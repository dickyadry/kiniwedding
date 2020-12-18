<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title> <?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?> </title>
    
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

    <style type="text/css">
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .fixed {
            bottom: 0;
            position: fixed;
            left: 0;
            z-index: 999999999999999999999999999999999999999999999;
            width: 100%;
            height: 62px;
            background: rgba(25, 25, 25, 0.2);
            cursor: pointer;
        }

        .fixed-music {
            cursor: pointer;
            position: fixed;
            background: #ff847e;
            height: 40px;
            width: 40px;
            z-index: 999999999999999999999999999999999999999999999;
            bottom: 67px;
            right: 22px;
            border-radius: 26px;
            text-align: center;
            color: white;
            padding: 10px;

        }

        @media screen and (max-width: 768px) {
            .bismi {
                font-size: 36px !important;
            }

            #qbootstrap-couple span {
                font-size: 12px !important;
                letter-spacing: 3px;
            }

            .bg-image {
                background-position:  !important;
                /*background-size: 249%;*/
            }
            .bg-image2{
                background-position: !important;
            }
            .bg-image3{
                background-position: !important;
            }
        }

        #over-lay {
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.75);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 16px;
            margin: 0px;
            cursor: pointer;
            z-index: 999999999999999999999999999999999999999999999;
            /* display: none; */
            padding-top: 352px;
        }

        .tapfp {
            text-align: center;
            font-size: 40px;
            line-height: 45px;
        }

        @media screen and (max-width: 769px) {
            #over-lay {
                display: -webkit-flex;
                /* Safari */
                -webkit-align-items: center;
                /* Safari 7.0+ */
                display: flex;
                align-items: center;
                padding-top: 0px;
            }
        }
    </style>

</head>

<body>

    <div onclick="playAudio()" type="button" id="over-lay">
        <div style="margin:0 auto;">
            <div class="tapfp">TAP TO CONTINUE</div>
            <div style="text-align:center">Use Chrome browser to make your website look perfect</div>
        </div>
    </div>

    <a href='#' class="stop-scrolling" onclick="stopScrolling()">Berhenti Menggulir Halaman</a>
    <a href='#' class="musik play" onclick="togleAudio()"><i class="ti-music"></i></a>
    <a href='#' class="musik pause" onclick="togleAudio()"><i class="ti-control-pause"></i></a>

    <audio loop id="myAudio">
        <source src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/audio/lagu.mp3" type="audio/mpeg">
    </audio>

    <!-- start page-wrapper -->
    <div class="page-wrapper flower-fixed-body">

        <!-- start preloader -->
        <div class="preloader">
            <div class="middle">
                <i class="fi flaticon-favorite-heart-button"></i>
                <i class="fi flaticon-favorite-heart-button"></i>
                <i class="fi flaticon-favorite-heart-button"></i>
                <i class="fi flaticon-favorite-heart-button"></i>
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
                        <div class="slide-inner slide-bg-image" data-background="<?php echo str_replace('thumbs/', '', $value->sample_image); ?>"></div> 
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
                                    <?php if(isset($pengantin[0]->sample_image)){?>
                                    <img src="<?php echo str_replace('thumbs/', '',$pengantin[0]->sample_image); ?>" alt>
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
                                    <?php if(isset($pengantin[0]->sample_image)){?>
                                    <img src="<?php echo str_replace('thumbs/', '',$pengantin[1]->sample_image); ?>" alt>
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
                                        <span class="date"><?php echo tanggal_resepsi($tanggal_akad); ?></span>
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

                                    <?php if(isset($galeri[0]->sample_image)){?>
                                    <img src="<?php echo str_replace('thumbs/', '',$galeri[0]->sample_image); ?>" alt class="img img-responsive">
                                    <?php } ?>

                                </a>
                            </div>
                            <div class="grid grid-item">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-2.png" class="fancybox" data-fancybox-group="gall-1">
                                    <?php if(isset($galeri[1]->sample_image)){?>
                                    <img src="<?php echo str_replace('thumbs/', '',$galeri[1]->sample_image); ?>" alt class="img img-responsive">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="grid grid-item">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-3.png" class="fancybox" data-fancybox-group="gall-1">
                                    <?php if(isset($galeri[2]->sample_image)){?>
                                    <img src="<?php echo str_replace('thumbs/', '',$galeri[2]->sample_image); ?>" alt class="img img-responsive">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="grid grid-item">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-4.png" class="fancybox" data-fancybox-group="gall-1">
                                    <?php if(isset($galeri[3]->sample_image)){?>
                                    <img src="<?php echo str_replace('thumbs/', '',$galeri[3]->sample_image); ?>" alt class="img img-responsive">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="grid grid-item width2">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-5.png" class="fancybox" data-fancybox-group="gall-1">
                                    <?php if(isset($galeri[4]->sample_image)){?>
                                    <img src="<?php echo str_replace('thumbs/', '',$galeri[4]->sample_image); ?>" alt class="img img-responsive">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="grid grid-item width2">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-6.png" class="fancybox" data-fancybox-group="gall-1">
                                    <?php if(isset($galeri[5]->sample_image)){?>
                                    <img src="<?php echo str_replace('thumbs/', '',$galeri[5]->sample_image); ?>" alt class="img img-responsive">
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="grid grid-item width2">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/img-7.png" class="fancybox" data-fancybox-group="gall-1">
                                    <?php if(isset($galeri[6]->sample_image)){?>
                                    <img src="<?php echo str_replace('thumbs/', '',$galeri[6]->sample_image); ?>" alt class="img img-responsive">
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
                                    <input type="text" name="name" class="form-control" placeholder="Nama*">
                                </div>
                                <div class="col col-sm-12">
                                    <textarea class="form-control" name="notes" placeholder="Pesan*"></textarea>
                                </div>
                                <div class="col col-sm-12 submit-btn">
                                    <button type="submit" class="theme-btn">Send</button>
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
            <div class="top-area" style="background: url('<?php echo str_replace('thumbs/', '',$background[0]->sample_image); ?>') center center/cover no-repeat local;">
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
                            <div class="grid">
                                <div class="quote">
                                    <p>Seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dre</p>
                                </div>
                                <div class="client-info">
                                    <div class="img-holder">
                                        <div style="padding:14px 16px; background: #FFF; border:2px solid #A2BECA;  border-radius: 50%;">ES</div>
                                    </div>
                                    <div class="details">
                                        <h5>Work Fela</h5>
                                        <p>Bride vender wedding</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="quote">
                                    <p>Seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dre</p>
                                </div>
                                <div class="client-info">
                                    <div class="img-holder">
                                        <!-- <img src="assets/images/testimonials/img-2.jpg" alt> -->
                                        <div style="padding:14px 16px; background: #FFF; border:2px solid #A2BECA;  border-radius: 50%;">ES</div>
                                    </div>
                                    <div class="details">
                                        <h5>Sweet Taz</h5>
                                        <p>Beauty Bride</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="quote">
                                    <p>Seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dre</p>
                                </div>
                                <div class="client-info">
                                    <div class="img-holder">
                                        <div style="padding:14px 16px; background: #FFF; border:2px solid #A2BECA;  border-radius: 50%;">ES</div>
                                    </div>
                                    <div class="details">
                                        <h5>Norial Dico</h5>
                                        <p>Bride vender wedding</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end testimonials-section -->

        <!-- start site-footer -->
        <footer class="site-footer footer-style-1 terimakasih">
            <div class="inner">
                <div class="couple-pic">
                    <img src="<?php echo str_replace('thumbs/', '',$lainnya[0]->sample_image); ?>" alt>
                </div>
                <h2>Terimakasih</h2>
                <ul class="social-links">
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                </ul>
                <p>Copyright 2020, Made with love by <a href="https://eventstack.id">kiniwedding.com</a></p>
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

    <script type="text/javascript">

        var x = document.getElementById("myAudio");
        var audio = 1;
        var xAudio = 1;

        function playAudio() {
            x.play();
            audio = 1
        }

        function togleAudio() {
            if (audio == 1) {
                x.pause()
                $(".play").show();
                $(".pause").hide();
                audio = 2
            } else {
                x.play()
                $(".pause").show();
                $(".play").hide();
                audio = 1
            }

        }

        $(document).ready(function() {
            $("#over-lay").click(function() {
                $("#over-lay").fadeOut(650);
                 $("html, body").delay(2000).animate({scrollTop: parseInt($('.terimakasih').offset().top)+1000 }, 400000);
            });
        });

        function goTo(param) {
            $("html,body").animate({
                scrollTop: parseInt($('.'+param).offset().top)
            }, 700);
            return false;
        }

        function stopScrolling(){
            $('html, body').stop();
            $('html, body').animate({scrollTop: 0}, 1000);
            $('.stop-scrolling').fadeOut("slow")
        }

        function testimoni_carousel() {
            var owl = $(".testimoni-carousel");
            owl.owlCarousel({
                loop: true,
                navigation: false,
                items: 2,
                smartSpeed: 1000,
                dots: false,
                autoplay: true,
                autoplayHoverPause: true,
                stagePadding: 40,
                margin:10,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 2
                    },
                    760: {
                        items: 3
                    },
                    992: {
                        items: 3
                    },
                }
            });
        }
        testimoni_carousel();

    </script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/script.js"></script>


</body>
</html>

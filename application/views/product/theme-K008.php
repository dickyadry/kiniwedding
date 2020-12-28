<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Theme Title-->
    <title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/allplugins.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/custom.css">
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src='http://www.webstrot.com/google_analytics_auto.js'></script>

    <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <!-- Favicon and Touch Icons -->
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">

    <style type="text/css">
        .rspv-area .rspv-con:after{
            background: none;
        }
    </style>
</head>
    <body>

        <!-- Content -->
        <section onclick="playAudio()" type="button" id="over-lay">
            <div class="gla_invitation_container">
                <div class="gla_invitation_i gla_invitation_ii gla_image_bck" style='background-image: url("<?php echo base_url(); ?>public/starter_images/flower-K003.png")'>
                    <p><img src="<?php echo base_url(); ?>public/starter_images/save_the_date_red.gif" alt=""></p>
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

        <div id="preloader">
            <div id="status">
                <img src="<?php echo base_url(); ?>assets/img/preloader.gif" id="preloader_image" alt="loader">
            </div>
        </div>

        <!--Header area start here-->
        <header id="sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-9">
                        <div class="logo-area">
                            <a href="javascript:void(0);" onclick="goTo('paling-atas')"><img src="<?php echo ASSETS . "img/general-logo.png";?>" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12 hidden-xs">
                        <div class="main-menu menu_scroll">
                            <nav>
                                <ul>
                                    <li><a href="javascript:void(0);" onclick="goTo('paling-atas')">Home</a></li>
                                    <li><a href="javascript:void(0);" onclick="goTo('pasangan')">About Us</a></li>
                                    <li><a href="javascript:void(0);" onclick="goTo('kisah-kita')">Love Story</a></li>
                                    <li><a href="javascript:void(0);" onclick="goTo('tanggal-event')">Events</a></li>
                                    <li><a href="javascript:void(0);" onclick="goTo('galeri')">Gallery</a></li>
                                    <li><a href="javascript:void(0);" onclick="goTo('buku-tamu')" class="btn1">Rsvp</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
			<!--Responsive Menu area--> 
            <div class="mobilemenu">
                <div class="mobile-menu menu_scroll visible-xs">
                    <nav>
                        <ul>
                            <li><a href="javascript:void(0);" onclick="goTo('paling-atas')">Home</a></li>
                            <li><a href="javascript:void(0);" onclick="goTo('pasangan')">About Us</a></li>
                            <li><a href="javascript:void(0);" onclick="goTo('kisah-kita')">Love Story</a></li>
                            <li><a href="javascript:void(0);" onclick="goTo('tanggal-event')">Events</a></li>
                            <li><a href="javascript:void(0);" onclick="goTo('galeri')">Gallery</a></li>
                            <li><a href="javascript:void(0);" onclick="goTo('buku-tamu')">Rsvp</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--Responsive Menu area End-->
        </header>
        <!--Header area end here-->
        <!--Slider area start here-->
        <section section-scroll="0" class="slider-area paling-atas">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 pd-0">
                        <div class="slider_home">
                            <div class="item one">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="content">
                                                <p class="wow animated fadeInDown" data-wow-duration="1.3s">We Hope to See You Soon</p>
                                                <h2 class="wow animated fadeInDown" data-wow-duration="1s"><?php echo $nama_panggilan_pengantin_pria; ?> <span>&</span> <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                                                <h3 class="wow animated fadeInUp" data-wow-duration="1s"><?php echo tanggal_resepsi($tanggal_resepsi); ?></h3><br>
                                                <span class="date wow animated fadeInUp" data-wow-duration="1.3s">Save the date</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item two">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="content">
                                                <p class="wow animated fadeInDown" data-wow-duration="1.3s">We Hope to See You Soon</p>
                                                <h2 class="wow animated fadeInDown" data-wow-duration="1s"><?php echo $nama_panggilan_pengantin_pria; ?> <span>&</span> <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                                                <h3 class="wow animated fadeInUp" data-wow-duration="1s"><?php echo tanggal_resepsi($tanggal_resepsi); ?></h3><br>
                                                <span class="date wow animated fadeInUp" data-wow-duration="1.3s">Save the date</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item three">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="content">
                                                <p class="wow animated fadeInDown" data-wow-duration="1.3s">We Hope to See You Soon</p>
                                                <h2 class="wow animated fadeInDown" data-wow-duration="1s"><?php echo $nama_panggilan_pengantin_pria; ?> <span>&</span> <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                                                <h3 class="wow animated fadeInUp" data-wow-duration="1s"><?php echo tanggal_resepsi($tanggal_resepsi); ?></h3><br>
                                                <span class="date wow animated fadeInUp" data-wow-duration="1.3s">Save the date</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!--Slider area End here-->
        <!--Counter area start here-->
        <section class="counter-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="content">
                            <p>Missing Days to</p>
                            <h2>Our Wedding</h2>
                            <span id="date_deadline" hidden><?php echo date("m/d/Y H:i:s", strtotime($tanggal_resepsi)); ?></span>
                            <span><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/icons/1.png" alt=""/></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="counter-list">
                            <ul>
                                <li><div class="count-con"><span class="days"></span><p>Days</p></div></li>
                                <li><div class="count-con"><span class="hours"></span><p>hours</p></div></li>
                                <li><div class="count-con"><span class="minutes"></span><p>minutes</p></div></li>
                                <li><div class="count-con"><span class="seconds"></span><p>seconds</p></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter area End here-->
        <!--persons area start here-->
        <section section-scroll="1" class="persons-area section pasangan">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section_heading">
                            <p>PASANGAN YANG BERBAHAGIA</p>
                            <h2>Mempelai Pria & Wanita</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-sm-4">
                        <div class="persons">
                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/1.jpg" alt=""/></figure>
                            <div class="content">
                                <h2><?php echo $nama_pengantin_pria; ?></h2>
                                <h4>( Anak ke-<?php echo $pengantin_pria_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_pria . ' & Ibu ' . $nama_ibu_pengantin_pria ; ?> )</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 pd-0">
                        <div class="persons-con">
                            <h1>Invitation</h1>
                            <span class="ico"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/icons/2.png" alt=""/></span>
                            <span class="day"><?php echo hari($tanggal_resepsi); ?></span>
                            <strong><?php echo tanggal_resepsi($tanggal_resepsi); ?></strong>
                            <p><?php echo $tempat_resepsi; ?></p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-4">
                        <div class="persons">
                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/2.jpg" alt=""/></figure>
                            <div class="content">
                                <h2><?php echo $nama_pengantin_wanita; ?></h2>
                                <h4>( Anak ke-<?php echo $pengantin_wanita_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_wanita . ' & Ibu ' . $nama_ibu_pengantin_wanita ; ?> )</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--persons area End here-->
        <!--Love story area start here-->
        <section section-scroll="2" class="love-story section kisah-kita">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section_heading">
                            <p><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></p>
                            <h2>Our True love story</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="love-storys">
                            <div class="story-list">
                                <div class="col-md-6 col-sm-12 pd-0">
                                    <div class="story lefts">
                                        <div class="storys">
                                            <div class="top-fig">
                                                <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/story/1.jpg" alt=""/></figure>
                                                <div class="con">
                                                    <p><?php echo tanggal_resepsi($tanggal_pertemuan_pertama); ?></p>
                                                    <h2>Pertemuan Pertama</h2>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p><?php echo $resume_pertemuan_pertama; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="story lefts">
                                        <div class="storys">
                                            <div class="top-fig">
                                                <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/story/5.jpg" alt=""/></figure>
                                                <div class="con">
                                                    <p><?php echo tanggal_resepsi($tanggal_lamaran); ?></p>
                                                    <h2>Lamaran</h2>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p><?php echo $resemu_lamaran; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 pd-0">
                                    <div class="story rights first">
                                        <div class="storys">
                                            <div class="top-fig">
                                                <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/story/3.jpg" alt=""/></figure>
                                                <div class="con">
                                                    <p><?php echo tanggal_resepsi($tanggal_kencan_pertama); ?></p>
                                                    <h2>Kencan Pertama Kita</h2>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p><?php echo $resume_kencan_pertama; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="story rights">
                                        <div class="storys">
                                            <div class="top-fig">
                                                <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/story/4.jpg" alt=""/></figure>
                                                <div class="con">
                                                    <p><?php echo tanggal_resepsi($tanggal_akad_story); ?></p>
                                                    <h2>Hari yang Berbahagia Bagi Kami</h2>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p><?php echo $resume_akad; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Love story area End here-->
        <!--Event area start here-->
        <section section-scroll="3" class="event-area section2 tanggal-event">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section_heading">
                            <p>Hari yang Berbahagia</p>
                            <h2>Akad & Resepsi</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-4">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="events line">
                            <h2>Akad Nikah</h2>
                            <div class="con">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i><span><?php echo hari($tanggal_akad); ?>, <?php echo tanggal_resepsi($tanggal_akad); ?></span></li>
                                    <li><i class="fas fa-clock"></i><span> <?php echo pukul($tanggal_akad); ?> WIB</span></li>
                                    <li><i class="fas fa-map-marker-alt"></i><span><?php echo $tempat_akad; ?></span></li>
                                </ul>
                            </div>
                            <a href="javascript:void(0);"><span><i class="fas fa-map-marker-alt"></i>Open Map</span></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="events">
                            <h2>Resepsi Pernikahan</h2>
                            <div class="con">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i><span><?php echo hari($tanggal_resepsi); ?>, <?php echo tanggal_resepsi($tanggal_resepsi); ?></span></li>
                                    <li><i class="fas fa-clock"></i><span> <?php echo pukul($tanggal_resepsi); ?> WIB</span></li>
                                    <li><i class="fas fa-map-marker-alt"></i><span><?php echo $tempat_resepsi; ?></span></li>
                                </ul>
                            </div>
                            <a href="javascript:void(0);"><span><i class="fas fa-map-marker-alt"></i>Open Map</span></a>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-4">
                    </div>
                </div>
            </div>
        </section>
        <!--Event area End here-->
        <!--Gallery wrapper start here-->
        <section section-scroll="4" class="gallery-area section bg-img jarallax af galeri">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-col-sm-12">
                        <div class="section_heading">
                            <p><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></p>
                            <h2>memorable photo gallery</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 pd-0">
                        <div class="gallery-slider">
                            <div class="col-sm-12">
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                                <div class="glist">
                                    <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg" alt=""/><span><i class="fas fa-search"></i></span></a></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Gallery wrapper End here-->
        <!--Registery area start here-->
        <section class="registery-area section bg-img af jarallax rspv-area buku-tamu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section_heading">
                            <p>rsvp</p>
                            <h2>Be our Guest</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="reg-img">
                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/banner/1.jpg" alt=""/></figure>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="rspv-form">
                            
                            <form>
                                <div class="col-sm-9 pd-0">
                                    <div class="col-sm-12">
                                        <fieldset>
                                            <input type="text" name="nama" placeholder="Nama*" id="nama" class="form-control">
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-12">
                                        <fieldset>
                                            <select name="status" class="form-control" id="status_hadir">
                                                <option value="">Apakah Kamu akan Hadir?</option>
                                                <option>Ya, Saya Akan hadir</option>
                                                <option>Ya, Mungkin Saya akan hadir</option>
                                                <option>Maaf Seperti Saya Belum bisa hadir</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-12">
                                        <fieldset>
                                            <textarea class="form-control" name="pesan" placeholder="Silahkan ucapkan sesuatu*" id="pesan"></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="response"></div>
                                </div>
                                <div class="col-sm-3">
                                    <button type="button" class="submitForm" form-type="inquiry" onclick="buku_tamu()">I Am Attending</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Registery area End here-->
        <!--Testimonial area start here-->
        <section class="testimonial-area bg-img jarallax af">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="testimonial">
                            <div class="lists">
                                <p><?php echo $kata_mutiara; ?></p>
                            </div>
                            <div class="lists">
                                <p><?php echo $kata_mutiara; ?></p>
                            </div>
                            <div class="lists">
                                <p><?php echo $kata_mutiara; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial area End here-->
        <!--Footer wrapper start here-->
        <footer>
            <div class="container finish">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="foo-logo">
                            <a href="javascript:void(0);" onclick="goTo('paling-atas')"><img src="<?php echo ASSETS . "img/general-logo.png";?>" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="copyright">
                            <p>@ Copyright 2020-21 All Rights Reserved. By <a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer wrapper end here-->


		<!-- All JavaScript Here -->

		<!-- jQuery latest version -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/vendor/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.min.js"></script>
        <!-- Owl.carousel JavaScript -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/owl.carousel.min.js"></script>
        <!-- Bxslider JavaScript -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.bxslider.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.magnific-popup.min.js"></script>
		<!-- meanmenu JavaScript -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.meanmenu.js"></script>
        <!-- jarallax JavaScript -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jarallax.min.js"></script>
		<!-- jQuery-ui JavaScript -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-ui.min.js"></script>
        <!-- masonry JavaScript -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/masonry.pkgd.min.js"></script>
        <!-- downCount JavaScript -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.downCount.js"></script>
		<!-- wow JavaScript -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/wow.min.js"></script>
		<!-- Plugins JavaScript -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/plugins.js"></script>
		<!-- Init JavaScript -->
        <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/main.js?v=2"></script>

        <?php echo $js; ?>


    </body>
</html>
<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/allplugins.css">
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/custom-2.css">

    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src='http://www.webstrot.com/google_analytics_auto.js'></script>

    <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

</head>

<body>

    <div onclick="playAudio()" type="button" id="over-lay">
        <div style="margin:0 auto;">
            <div class="tapfp">TAP TO CONTINUE</div>
            <div style="text-align:center">Use Chrome browser to make your website look perfect</div>
        </div>
    </div>

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
            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/preloader.gif" id="preloader_image" alt="loader">
		</div>
	</div>

    <!--Header area start here-->
    <header id="sticky" class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="main-menus">
                        <div class="col-md-3 col-sm-3 col-xs-12 pd-0">
                            <div class="logo">
                                <span class="btn-logo"><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></span>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 pd-0 hidden-xs">
                            <div class="menus menu_scroll">
                                <nav>
                                    <ul>
                                        <li><a href="#" onclick="goTo('home')">Home</a></li>
                                        <li><a href="#" onclick="goTo('pasangan')">Pasangan</a></li>
                                        <li><a href="#" onclick="goTo('kisah-kita')">Kisah Kita</a></li>
                                        <li><a href="#" onclick="goTo('tanggal-dan-lokasi')">Tanggal & Lokasi</a></li>
                                        <li><a href="#" onclick="goTo('galeri')">Galeri</a></li>
                                        <li><a href="#" onclick="goTo('rsvp')">Rsvp</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Responsive Menu area--> 
            <div class="mobilemenu">
                <div class="mobile-menu menu_scroll visible-xs">
                    <nav>
                        <ul>
                            <li><a href="#" onclick="goTo('home')">Home</a></li>
                            <li><a href="#" onclick="goTo('pasangan')">Pasangan</a></li>
                            <li><a href="#" onclick="goTo('kisah-kita')">Kisah Kita</a></li>
                            <li><a href="#" onclick="goTo('tanggal-dan-lokasi')">Tanggal & Lokasi</a></li>
                            <li><a href="#" onclick="goTo('galeri')">Galeri</a></li>
                            <li><a href="#" onclick="goTo('rsvp')">Rsvp</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--Responsive Menu area End-->
        </div>
    </header>
    <!--Header area end here-->

    <!--Slider araea start here-->
    <section section-scroll='0' class="slider-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 pd-0">
                    <div class="sliders">
                        <div class="slider-list">
                            <div class="slider-img">
                                <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/sliders/1.jpg" alt=""/></figure>
                            </div>
                            <div class="slider-con">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="content">
                                                <h2 class="wow animated fadeInDown" data-wow-duration="1s"><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                                                <p class="wow animated zoomIn" data-wow-duration="1.5s">Are Getting Merrid</p>
                                                <br>
                                                <div class="date wow animated zoomIn" data-wow-duration="1.5s" >
                                                    <span class="wow animated fadeInUp" data-wow-duration="2s">Save the Date</span>
                                                    <em class="wow animated fadeInUp" data-wow-duration="2.5s"><?php echo tanggal_resepsi($tanggal_resepsi); ?></em>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-list slid_two">
                            <div class="slider-img">
                                <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/sliders/2.jpg" alt=""/></figure>
                            </div>
                            <div class="slider-con">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="content">
                                                <h2 class="wow animated fadeInDown" data-wow-duration="1s"><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                                                <p class="wow animated zoomIn" data-wow-duration="1.5s">Are Getting Merrid</p>
                                                <br>
                                                <div class="date wow animated zoomIn" data-wow-duration="1.5s" >
                                                    <span class="wow animated fadeInUp" data-wow-duration="2s">Save the Date</span>
                                                    <em class="wow animated fadeInUp" data-wow-duration="2.5s"><?php echo tanggal_resepsi($tanggal_resepsi); ?></em>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-list slid_three">
                            <div class="slider-img">
                                <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/sliders/3.jpg" alt=""/></figure>
                            </div>
                            <div class="slider-con">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="content">
                                                <h2 class="wow animated fadeInDown" data-wow-duration="1s"><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                                                <p class="wow animated zoomIn" data-wow-duration="1.5s">Are Getting Merrid</p>
                                                <br>
                                                <div class="date wow animated zoomIn" data-wow-duration="1.5s" >
                                                    <span class="wow animated fadeInUp" data-wow-duration="2s">Save the Date</span>
                                                    <em class="wow animated fadeInUp" data-wow-duration="2.5s"><?php echo tanggal_resepsi($tanggal_resepsi); ?></em>
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
    </section>
    <!--Slider araea End here-->

    <!--About area start here-->
    <section section-scroll='1' class="about_area_2 section pasangan">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-heading">
                        <h2><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                        <p>Are Getting Merrid</p>
                        <div class="date">
                            <span>Save the Date</span>
                            <em><?php echo date('Y/m/d',strtotime($tanggal_resepsi)) ?></em>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="person">
                        <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/1.jpg" alt=""/></figure>
                        <div class="content">
                            <h2><?php echo $nama_pengantin_pria; ?></h2>
                            <div class="con">
                                <div class="text-con">
                                    <span>( S/o Mrs <?php echo $nama_ibu_pengantin_pria; ?> & Mr. <?php echo $nama_ayah_pengantin_pria; ?> )</span>
                                    <p><?php echo $resume_pengantin_pria; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="about-con">
                        <h1>Invitation</h1>
                        <div class="con">
                            <h2>Monday</h2>
                            <span><?php echo tanggal_resepsi($tanggal_resepsi); ?></span>
                            <p class="midd"><?php echo $tempat_resepsi; ?></p>
                            <a href="#" class="btn1">rspv</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="person rigth">
                        <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/2.jpg" alt=""/></figure>
                        <div class="content">
                            <h2><?php echo $nama_pengantin_wanita; ?></h2>
                            <div class="con">
                                <div class="text-con">
                                    <span>( S/o Mrs <?php echo $nama_ibu_pengantin_wanita; ?> & Mr. <?php echo $nama_ayah_pengantin_wanita; ?> )</span>
                                    <p><?php echo $resume_pengantin_wanita; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About area End here-->

    <!--Counter area start here-->
    <section class="counter_area_2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-sm-12 pd-0">
                    <div class="count-con">
                        <h2>Salam Pembuka</h2>
                        <p><?php echo $kata_mutiara; ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-md-offset-1">
                    <div class="count-number">
                        <ul>
                            <li><div class="con"><span class="days">00</span><p>Days</p></div></li>
                            <li><div class="con"><span class="hours">00</span><p>hours</p></div></li>
                            <li><div class="con"><span class="minutes">00</span><p>minutes</p></div></li>
                            <li><div class="con"><span class="seconds">00</span><p>seconds</p></div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter area end here-->

    <!--Family area start here-->
<!--     <section class="family_area_2 section bg-img jarallax af">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-heading">
                        <p>most imp. persons</p>
                        <h2>Lovable Family</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="family-tabbox">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#groom" aria-controls="groom" role="tab" data-toggle="tab"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/family/sm-1.jpg" alt="Groom"></a></li>
                            <li role="presentation"><a href="#bride" aria-controls="bride" role="tab" data-toggle="tab"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/family/sm-2.jpg" alt="Bride"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="groom">
                                <div class="familyslider">
                                    <div class="item">
                                        <div class="familyinfo">
                                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/family/1.jpg" alt=""/></figure>
                                            <div class="content">
                                                <h2>Mr. Abilash D’suza</h2>
                                                <p>(Johan’s Father)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="familyinfo">
                                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/family/2.jpg" alt=""/></figure>
                                            <div class="content">
                                                <h2>Mr. Husbain malik</h2>
                                                <p>(Hussain’s Father)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="familyinfo">
                                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/family/3.jpg" alt=""/></figure>
                                            <div class="content">
                                                <h2>Mr. Husbain malik</h2>
                                                <p>(Hussain’s Father)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="familyinfo">
                                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/family/4.jpg" alt=""/></figure>
                                            <div class="content">
                                                <h2>Mr. Husbain malik</h2>
                                                <p>(Hussain’s Father)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="familyinfo">
                                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/family/1.jpg" alt=""/></figure>
                                            <div class="content">
                                                <h2>Mr. Husbain malik</h2>
                                                <p>(Hussain’s Father)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="bride">
                                <div class="familyslider">
                                    <div class="item">
                                        <div class="familyinfo">
                                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/family/1.jpg" alt=""/></figure>
                                            <div class="content">
                                                <h2>Mr. Husbain malik</h2>
                                                <p>(Hussain’s Father)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="familyinfo">
                                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/family/2.jpg" alt=""/></figure>
                                            <div class="content">
                                                <h2>Mr. Husbain malik</h2>
                                                <p>(Hussain’s Father)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="familyinfo">
                                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/family/3.jpg" alt=""/></figure>
                                            <div class="content">
                                                <h2>Mr. Husbain malik</h2>
                                                <p>(Hussain’s Father)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="familyinfo">
                                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/family/4.jpg" alt=""/></figure>
                                            <div class="content">
                                                <h2>Mr. Husbain malik</h2>
                                                <p>(Hussain’s Father)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="familyinfo">
                                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/family/1.jpg" alt=""/></figure>
                                            <div class="content">
                                                <h2>Mr. Husbain malik</h2>
                                                <p>(Hussain’s Father)</p>
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
    </section> -->
    <!--Family area end here-->

    <!--Love story area start here-->
    <section  section-scroll='2' class="love_sory_2 section kisah-kita">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-heading">
                        <p><?php echo $nama_panggilan_pengantin_pria; ?> &amp; <?php echo $nama_panggilan_pengantin_wanita; ?></p>
                        <h2>Our true love story</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="story-left">
                        <div class="story">
                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/story/1.jpg" alt=""/></figure>
                            <div class="date"><strong><?php echo date('d',strtotime($tanggal_pertemuan_pertama)); ?></strong><span><?php echo date('M',strtotime($tanggal_pertemuan_pertama)); ?></span></div>
                            <div class="content">
                                <h2>Pertemuan Pertama</h2>
                                <h4><?php echo tanggal_resepsi($tanggal_pertemuan_pertama); ?></h4>
                                <p><?php echo $resume_pertemuan_pertama; ?></p>
                            </div>
                            <span class="dot"></span>
                        </div>
                        <div class="story">
                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/story/1.jpg" alt=""/></figure>
                            <div class="date"><strong><?php echo date('d',strtotime($tanggal_lamaran)); ?></strong><span><?php echo date('M',strtotime($tanggal_lamaran)); ?></span></div>
                            <div class="content">
                                <h2>Lamaran</h2>
                                <h4><?php echo tanggal_resepsi($tanggal_lamaran); ?></h4>
                                <p><?php echo $resemu_lamaran; ?></p>
                            </div>
                            <span class="dot"></span>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="story-right">
                        <div class="story">
                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/story/2.jpg" alt=""/></figure>
                            <div class="date"><strong><?php echo date('d',strtotime($tanggal_kencan_pertama)); ?></strong><span><?php echo date('M',strtotime($tanggal_kencan_pertama)); ?></span></div>
                            <div class="content">
                                <h2>Kencan Pertama</h2>
                                <h4><?php echo tanggal_resepsi($tanggal_kencan_pertama); ?></h4>
                                <p><?php echo $resume_kencan_pertama; ?></p>
                            </div>
                            <span class="dot"></span>
                        </div>
                        <div class="story-end">
                            <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/story/2.jpg" alt=""/></figure>
                            <div class="date"><strong><?php echo date('d',strtotime($tanggal_akad_story)); ?></strong><span><?php echo date('M',strtotime($tanggal_akad_story)); ?></span></div>
                            <div class="content">
                                <h2>Keterikatan</h2>
                                <h4><?php echo tanggal_resepsi($tanggal_akad_story); ?></h4>
                                <p><?php echo $resume_akad; ?></p>
                            </div>
                            <span class="dot"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Love story area end here-->

    <!--Event area start here-->
    <section section-scroll='3' class="event_area_2 section bg-img jarallax af tanggal-dan-lokasi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-heading">
                        <p>Awaited moment of our life</p>
                        <h2>The Wedding Events</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 pd-0">
                    <div class="event-slider">
                        <div class="col-sm-12">
                            <div class="event-list">
                                <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/event/1.jpg" alt=""/></figure>
                                <div class="date"><strong><?php echo date('d',strtotime($tanggal_akad)); ?></strong><span><?php echo date('M',strtotime($tanggal_akad)); ?></span></div>
                                <div class="content">
                                    <h2>Akad Nikah</h2>
                                    <h4><?php echo hari($tanggal_akad); ?>, <?php echo tanggal_resepsi($tanggal_akad); ?> <br>pukul <?php echo pukul($tanggal_akad); ?> s/d selesai</h4>
                                    <p><?php echo $tempat_akad; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="event-list">
                                <figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/event/2.jpg" alt=""/></figure>
                                <div class="date"><strong><?php echo date('d',strtotime($tanggal_resepsi)); ?></strong><span><?php echo date('M',strtotime($tanggal_resepsi)); ?></span></div>
                                <div class="content">
                                    <h2>Resepsi</h2>
                                    <h4> <?php echo hari($tanggal_resepsi); ?>, <?php echo tanggal_resepsi($tanggal_resepsi); ?> <br>pukul <?php echo pukul($tanggal_resepsi); ?> s/d selesai</h4>
                                    <p><?php echo $tempat_resepsi; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Event area End here-->

    <!--gallery area start here-->
    <section section-scroll='4' class="gallery_area_2 section galeri">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-heading">
                        <p>ARE GETTING MARRIED!</p>
                        <h2>memorable photo gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="gallery">
                        <div class="col-md-4 col-sm-12 pd-0">
                            <div class="col-md-12 col-sm-6 col-xs-12 pd-0">
                                <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg"><span><i class="fas fa-search"></i></span><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg" alt=""/></a></figure>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12 pd-0">
                                <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg"><span><i class="fas fa-search"></i></span><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg" alt=""/></a></figure>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12 pd-0">
                                <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/9.jpg"><span><i class="fas fa-search"></i></span><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/9.jpg" alt=""/></a></figure>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 pd-0">
                            <div class="col-md-12 col-sm-6 col-xs-12 pd-0">
                                <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg"><span><i class="fas fa-search"></i></span><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg" alt=""/></a></figure>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12 pd-0">
                                <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2.jpg"><span><i class="fas fa-search"></i></span><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2.jpg" alt=""/></a></figure>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12 pd-0">
                                <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg"><span><i class="fas fa-search"></i></span><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg" alt=""/></a></figure>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 pd-0">
                            <div class="col-md-12 col-sm-6 col-xs-12 pd-0">
                                <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg"><span><i class="fas fa-search"></i></span><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg" alt=""/></a></figure>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12 pd-0">
                                <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg"><span><i class="fas fa-search"></i></span><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg" alt=""/></a></figure>
                            </div>
                            <div class="col-md-12 col-sm-6 col-xs-12 pd-0">
                                <figure><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg"><span><i class="fas fa-search"></i></span><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg" alt=""/></a></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--gallery area End here-->

    <!--Rspv area start here-->
    <section  section-scroll='7' class="rspv_area_2 section bg-img jarallax af rsvp">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="rspv-forms">
                        <div class="header">
                            <h2>Are You Attending?<span>Rspv here!</span></h2>
                        </div>
                        <form>
                            <fieldset><input type="text" name="nama" class="form-control" placeholder="Nama*" id="nama"></fieldset>
                            <fieldset>
                                <select name="event_name" id="type" class="require">
                                    <option value="">Apakah Kamu akan Hadir?</option>
                                    <option>Ya, Saya Akan hadir</option>
                                    <option>Ya, Mungkin Saya akan hadir</option>
                                    <option>Maaf Seperti Saya Belum bisa hadir</option>
                                </select>
                            </fieldset>
                            <fieldset><input type="text" name="pesan" class="form-control" placeholder="Silahkan ucapkan sesuatu*" id="pesan"></fieldset>
							<button type="button" class="submitForm btn1" form-type="inquiry" onclick="buku_tamu()">Send</button>
                        </form>
                    </div>
                    <br><br>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="testimonial">
                        <?php foreach ($buku_tamu as $key => $value) { ?>
                        <div class="listoftesti">
                            <h3>“ <?php echo $value->pesan; ?> ”</h3>
                            <p>~ <?php echo $value->nama; ?> ~</p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Rspv area end here-->

    <!--Google map area Start-->
    <div class="maps">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 pd-0">
                    <div id="map_wrapper">
                        <div id="map_canvas" style="width:100%; height:650px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Google map area End-->

    <!--Contact area start here-->
    <section section-scroll='6' class="contact_area_2 bg-img af jarallax section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-heading">
                        <p><?php echo $nama_panggilan_pengantin_pria; ?> &amp; <?php echo $nama_panggilan_pengantin_wanita; ?></p>
                        <h2>Thanks You</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact area end here-->

    <!--Footer area start here-->
    <footer class="home_2 finish">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="copyright">
                        <p>&copy; Copyright 2021, Made with love by <a href="https://kiniwedding.com" target="_blank">kiniwedding.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer area end here-->

	<!-- All JavaScript Here -->
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.meanmenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jarallax.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.downCount.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <?php echo $js; ?>

    <script>

        function initialize() {

                var map;
                var bounds = new google.maps.LatLngBounds();
                var mapOptions = {
                    mapTypeId: 'roadmap',
                    styles: [
                        {"featureType":"water","elementType":"geometry","stylers":[
                                {"color":"#d1d1d1"},
                                {"lightness":17}
                            ]
                        },
                        {"featureType":"landscape","elementType":"geometry","stylers":[
                                {"color":"#e1e1e1"},
                                {"lightness":20}
                            ]
                        },
                        {"featureType":"road.highway","elementType":"geometry.fill","stylers":[
                                {"color":"#fff"},
                                {"lightness":17}
                            ]
                        },
                        {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[
                                {"color":"#fff"},
                                {"lightness":29},
                                {"weight":0.2}
                            ]
                        },
                        {"featureType":"road.arterial","elementType":"geometry","stylers":[
                                {"color":"#fff"},
                                {"lightness":18}
                            ]
                        },
                        {"featureType":"road.local","elementType":"geometry","stylers":[
                                {"color":"#ffffff"},
                                {"lightness":16}
                            ]
                        },
                        {"featureType":"poi","elementType":"geometry","stylers":[
                                {"color":"#d6e9b9"},
                                {"lightness":21}
                            ]
                        },
                        {"featureType":"poi.park","elementType":"geometry","stylers":[
                                {"color":"#d6e9b9"},
                                {"lightness":21}
                            ]
                        },
                        {"elementType":"labels.text.fill","stylers":[
                                {"saturation":36},
                                {"color":"#333333"},
                                {"lightness":40}
                            ]
                        },
                        {"elementType":"labels.icon","stylers":[
                                {"visibility":"off"}
                            ]
                        },
                        {"featureType":"transit","elementType":"geometry","stylers":[
                                {"color":"#f2f2f2"},
                                {"lightness":19}
                            ]
                        },
                        {"featureType":"administrative","elementType":"geometry.fill","stylers":[
                                {"color":"#d6e9b9"},
                                {"lightness":20}
                            ]
                        },
                        {"featureType":"administrative","elementType":"geometry.stroke","stylers":[
                                {"color":"#d6e9b9"},
                                {"lightness":17},
                                {"weight":1.2}
                            ]
                        }
                    ]
                };


                // Display a map on the page
                map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                map.setTilt(45);

                // Multiple Markers
                var markers = [
                    ['Bagerhat, Bangladesh', 22.612416, 89.628240],
                    ['West Bengal, India', 22.519984, 87.777172],
                ];
                                    

                // Info Window Content
                var infoWindowContent = [
                    ['<div class="info_content">' +
                    '<h3>Wedding party</h3>' +
                    '<p>Dinner party</p>' +
                    '<span>06:00 pm to 12:00 am</span>'+
                     '</div>'],
                    ['<div class="info_content">' +
                    '<h3>The Church</h3>' +
                    '<p>Cerimony</p>' +
                    '<span>10:00 Am to 12:00 pm</span>'+
                     '</div>']
                ];

                // Display multiple markers on a map
                var infoWindow = new google.maps.InfoWindow(), marker, i;
                var map = new google.maps.Map(document.getElementById('map_canvas'),mapOptions);
                var image = '<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/icons/map-marker.png';

                // Loop through our array of markers & place each one on the map  
                for( i = 0; i < markers.length; i++ ) {
                    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                    bounds.extend(position);
                    marker = new google.maps.Marker({
                        position: position,
                        map: map,
                        icon: image,
                        title: markers[i][0]
                    });

                    // Allow each marker to have an info window    
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infoWindow.setContent(infoWindowContent[i][0]);
                            infoWindow.open(map, marker);
                        }
                    })(marker, i));

                    // Automatically center the map fitting all markers on the screen
                    map.fitBounds(bounds);
                }

                // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
                var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                    this.setZoom(10);
                    google.maps.event.removeListener(boundsListener);

                });
          }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>

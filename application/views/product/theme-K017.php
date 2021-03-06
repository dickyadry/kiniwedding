<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WXZ8CKX');</script>
    <!-- End Google Tag Manager -->

    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="kiniwedding, Undangan, Undangan Webiste, Undangan Web, Undangan Modern, Undangan Kekinian, Webiste, Undangan online">
    <meta name="keywords" content="kiniwedding, Undangan, Undangan Webiste, Undangan Web, Undangan Modern, Undangan Kekinian, Webiste, Undangan online">
    <meta name="author" content="kiniwedding.com">
    <meta name="google-signin-client_id" content="1023361726892-jscjefkqf2ktg5fgv11d68qbdpbv445e.apps.googleusercontent.com"> <!-- PROD -->

    <meta name="thumbnailUrl" content="<?php echo ASSETS . "img/logo.png";?>" itemprop="thumbnailUrl" />
    <meta content="<?php echo base_url(); ?>product/demo/<?php echo encrypt_decrypt('encrypt',$sales_order_id); ?>" itemprop="url" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#71C2EA">
    <meta name="apple-mobile-web-app-title" content="kiniwedding">

    <link rel="apple-touch-icon" href="<?php echo ASSETS; ?>img/logo-share.png" sizes="152x152">
    <meta name="msapplication-TitleImage" content="<?php echo ASSETS; ?>img/logo-share.png">
    <meta name="msapplication-TitleColor" content="#000">
    <meta name="theme-color" content="#71C2EA">
    <link rel="amphtml" href="https://kiniwedding.com">
    <meta name="adx:sections" content="read" /> 

    <meta property="og:type" content="product" />
    <meta property="fb:app_id" content="387871355645473" />
    <meta property="og:site_name" content="kiniwedding" />
    <meta name="ROBOTS" content="NOODP, NOYDIR" />
    <meta property="og:title" content="Design Wedding Invitation <?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?>" />
    <meta property="og:url" content="<?php echo base_url(); ?>product/demo/<?php echo encrypt_decrypt('encrypt',$sales_order_id); ?>" />
    <meta property="og:image" content="<?php echo ASSETS; ?>img/logo-share.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <meta property="og:type" content="webminar" />
    <meta property="og:description" content="Undangan Digital KiniWedding, Desain Responsive, Trendi dan Modern. Undangan Website, Undangan Tanpa Kertas" />

    <meta itemprop="image" content="<?php echo ASSETS; ?>img/logo-share.png" />
    <meta name="twitter:image:src" content="<?php echo ASSETS; ?>img/logo-share.png" />
    <meta itemprop="dateModified" content="<?php echo date('Y-m-d H:i:s'); ?>" />
    <meta itemprop="datePublished" content="<?php echo date('Y-m-d H:i:s'); ?>" />
    <meta itemprop="articleSection" content="Webinar" />

    <meta name="twitter:site" content="@kiniwedding.com" />
    <meta name="twitter:creator" content="@kiniwedding.com" />
    <meta name="twitter:title" content="Design Wedding Invitation <?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?>" />
    <meta name="twitter:description" content="Undangan Digital KiniWedding, Desain Responsive, Trendi dan Modern. Undangan Website, Undangan Tanpa Kertas" />
    <!-- END META DATA -->

    <title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">
    
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/revolution-slider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/flipclock.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bootstrap-margin-padding.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/custom.css">
</head>

<body>
    <div class="page-wrapper">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXZ8CKX"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

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
                <div class="gla_invitation_i gla_invitation_ii gla_image_bck" style='background-image: url("<?php echo base_url(); ?>public/starter_images/flower-pink.png")'>
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
    
        <header class="main-header" id="main-header">
            <div class="header-lower">
            	<div class="auto-container clearfix">
                    <div class="outer-box">
                        <div class="logo">
                            <a href="javascript:void(0);" onclick="goTo('paling-atas')"><img class="img-responsive" src="<?php echo ASSETS . "img/general-logo.png";?>" alt="garnen-help" height="50px;"></a>
                        </div>
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation">
                                    <li class="current"><a href="javascript:void(0);" onclick="goTo('paling-atas')">Home</a></li>
                                    <li><a href="javascript:void(0);" onclick="goTo('pasangan')">About Us</a></li>
                                    <li><a href="javascript:void(0);" onclick="goTo('kisah-kita')">Love Story</a></li>
                                    <li><a href="javascript:void(0);" onclick="goTo('tanggal-event')">Events</a></li>
                                    <li><a href="javascript:void(0);" onclick="goTo('buku-tamu')" class="btn1">Rsvp</a></li>
                                    <li><a href="javascript:void(0);" onclick="goTo('galeri')">Gallery</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        
        <section class="main-slider pt-0 pb-0 paling-atas">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/1.jpg"  data-saveperformance="off"  data-title="">
                            <img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/main-slider/1.jpg"  alt=""  data-bgposition="center 50%" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption lfl tp-resizeme"
                                data-x="center" data-hoffset="0"
                                data-y="center" data-voffset="-80"
                                data-speed="1500"
                                data-start="500"
                                data-easing="easeOutExpo"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.3"
                                data-endspeed="1200"
                                data-endeasing="Power4.easeIn"
                                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                            </div>
                            <div class="tp-caption lfr tp-resizeme"
                                data-x="center" data-hoffset="0"
                                data-y="center" data-voffset="-20"
                                data-speed="1500"
                                data-start="500"
                                data-easing="easeOutExpo"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.3"
                                data-endspeed="1200"
                                data-endeasing="Power4.easeIn"
                                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>ARE GETTING <span class="text-thm"> MARRIED</span></h2>
                            </div>
                        </li>
                        <li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/2.jpg"  data-saveperformance="off"  data-title="">
                            <img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/main-slider/2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                            <div class="tp-caption lfl tp-resizeme"
                                data-x="right" data-hoffset="0"
                                data-y="center" data-voffset="-110"
                                data-speed="1500"
                                data-start="500"
                                data-easing="easeOutExpo"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.3"
                                data-endspeed="1200"
                                data-endeasing="Power4.easeIn"
                                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>AKAD NIKAH</h2>
                            </div>
                            <div class="tp-caption lfr tp-resizeme"
                                data-x="right" data-hoffset="0"
                                data-y="center" data-voffset="-50"
                                data-speed="1500"
                                data-start="500"
                                data-easing="easeOutExpo"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.3"
                                data-endspeed="1200"
                                data-endeasing="Power4.easeIn"
                                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2><?php echo tanggal_resepsi($tanggal_akad); ?> <?php echo pukul($tanggal_akad); ?> WIB</h2>
                            </div>
                        </li>
                        <li data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/3.jpg"  data-saveperformance="off"  data-title="">
                            <img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/main-slider/3.jpg"  alt=""  data-bgposition="center 35%" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                            <div class="tp-caption lfl tp-resizeme"
                                data-x="center" data-hoffset="0"
                                data-y="center" data-voffset="-80"
                                data-speed="1500"
                                data-start="500"
                                data-easing="easeOutExpo"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.3"
                                data-endspeed="1200"
                                data-endeasing="Power4.easeIn"
                                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>RESPSI</h2>
                            </div>
                            <div class="tp-caption lfr tp-resizeme"
                                data-x="center" data-hoffset="0"
                                data-y="center" data-voffset="-20"
                                data-speed="1500"
                                data-start="500"
                                data-easing="easeOutExpo"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.3"
                                data-endspeed="1200"
                                data-endeasing="Power4.easeIn"
                                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2><?php echo tanggal_resepsi($tanggal_resepsi); ?> <?php echo pukul($tanggal_resepsi); ?> WIB</h2>
                            </div>
                        </li>
                    </ul>
                	<div class="tp-bannertimer"></div>
                </div>
            </div>
        </section>
        
        <section class="featured-three-column pb-50 pasangan">
        	<div class="container-fluid">
                <div class="sec-title text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h1 class="font-sacramento text-thm">Pasangan yang Berbahagia</h1>
                            <div class="mb-30 mt-15"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/title-bottom.png" alt=""></div>                    
                        </div>                    
                    </div>
                </div>
                <div class="row clearfix position-relative">
                    <div class="col-xs-12 col-sm-5 col-md-5 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <article class="inner-box pull-right sm-pull-none xs-pull-none">
                            <figure class="image">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/groom.jpg" alt=""></a>
                                <div class="overlay"><span class="left-curve"></span><span class="right-curve"></span><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="overlay-link"></a></div>
                            </figure>
                            <div class="content pl-80 pr-80">
                                <h3><?php echo $nama_pengantin_pria; ?></h3>
                                <div class="text text-white">
                                    <p>Anak ke-<?php echo $pengantin_pria_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_pria . ' & Ibu ' . $nama_ibu_pengantin_pria ; ?></p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2 column text-thm wow fadeIn p-0 m-0">
                        <div class="couple-bird mt-40"><img class="img-responsive img-fullwidth" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/lovebird.png" alt="lovebird"></div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 column wow fadeInRight mt-xs-50" data-wow-delay="700ms" data-wow-duration="1500ms">
                        <article class="inner-box pull-left sm-pull-none xs-pull-none">
                            <figure class="image">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/bride.jpg" alt=""></a>
                                <div class="overlay"><span class="left-curve"></span><span class="right-curve"></span><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="overlay-link"></a></div>
                            </figure>
                            <div class="content pl-80 pr-80">
                                <h3><?php echo $nama_pengantin_pria; ?></h3>
                                <div class="text text-white">
                                    <p>Anak ke-<?php echo $pengantin_wanita_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_wanita . ' & Ibu ' . $nama_ibu_pengantin_wanita ; ?></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        
        
        <section class="layer-overlay overlay-theme bg-parallax bg-img-cover2 pt-150 pb-150" data-bg-img="images/background/1.jpg">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="time-counter"><div class="time-countdown clearfix" data-countdown="<?php echo date("Y/m/d H:i:s", strtotime($tanggal_resepsi)); ?>"></div></div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="stories-section kisah-kita">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h1 class="text-capitalize">Our Love Story</h1>
                            <h3><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h3>
                            <div class="mb-30 mt-20"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/title-bottom.png" alt=""></div>                    
                        </div>                    
                    </div>
                </div>
                <div class="columns-outer">
                    <div class="vertical-line">
                        <div class="icon-box top"><span class="fa fa-heart-o"></span></div>
                        <div class="icon-box bottom"><span class="fa fa-heart-o"></span></div>
                    </div>
                    <div class="row clearfix">
                        <div class="left-column col-md-6 col-sm-6 col-xs-12">
                            <div class="default-story-box clearfix">
                                <div class="inner-box wow fadeInLeft bg-thm-transparent pl-xs-60 bdrs-10 p-15" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-box bottom"><span class="fa fa-heart-o"></span></div>
                                    <div class="post-date"><?php echo tanggal_resepsi($tanggal_pertemuan_pertama); ?></div>
                                    <h3 class="post-title text-thm font-weight-600">Pertemuan Pertama</h3>
                                    <figure class="image-box"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/featured-image-1.jpg" alt=""></a></figure>
                                    <div class="text"><?php echo $resume_pertemuan_pertama; ?></div>
                                </div>
                            </div>
                            <div class="default-story-box clearfix">
                                <div class="inner-box wow fadeInLeft bg-thm-transparent pl-xs-60 bdrs-10 p-15" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-box bottom"><span class="fa fa-heart-o"></span></div>
                                    <div class="post-date"><?php echo tanggal_resepsi($tanggal_kencan_pertama); ?></div>
                                    <h3 class="post-title text-thm font-weight-600">Kencan Pertama Kita</h3>
                                    <figure class="image-box"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/featured-image-2.jpg" alt=""></a></figure>
                                    <div class="text"><?php echo $resume_kencan_pertama; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="right-column col-md-6 col-sm-6 col-xs-12">
                            <div class="default-story-box clearfix">
                                <div class="inner-box wow fadeInRight pr-xs-60 bg-thm-transparent bdrs-10 p-15" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-box bottom"><span class="fa fa-heart-o"></span></div>
                                    <div class="post-date"><?php echo tanggal_resepsi($tanggal_lamaran); ?></div>
                                    <h3 class="post-title text-thm font-weight-600">Lamaran</h3>
                                    <figure class="image-box"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/featured-image-3.jpg" alt=""></a></figure>
                                    <div class="text"><?php echo $resemu_lamaran; ?></div>
                                </div>
                            </div>
                            <div class="default-story-box clearfix">
                                <div class="inner-box wow fadeInRight bg-thm-transparent pr-xs-60 bdrs-10 p-15" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-box bottom"><span class="fa fa-heart-o"></span></div>
                                    <div class="post-date"><?php echo tanggal_resepsi($tanggal_akad_story); ?></div>
                                    <h3 class="post-title text-thm font-weight-600">Hari yang Berbahagia Bagi Kami</h3>
                                    <figure class="image-box"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/featured-image-13.jpg" alt=""></a></figure>
                                    <div class="text"><?php echo $resume_akad; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="parallax-section overflow-hidden parallax tanggal-event" data-bg-img="images/background/3.jpg">
            <div class="container p-0">
                <div class="sec-title text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h1 class="text-capitalize pb-10 text-white">Akad & Resepsi</h1>
                            <h3 class="mb-20"></h3>
                            <div class="mb-30 mt-20"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/title-bottom.png" alt=""></div>
                        </div>                    
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-6 wow slideInLeft text-center" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="event-item">
                            <div class="event-thumb">
                                <img class="img-responsive img-fullwidth" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/event.jpg" alt="">
                            </div>
                            <div class="event-details bg-white p-20">
                                <h2 class="text-thm pb-5">Akad Nikah</h2>
                                <div class="event-day text-dark font-16 pb-5 font-weight-300">
                                    <i class="fa fa-calendar text-thm"></i><span class="pl-5 pr-10"><?php echo hari($tanggal_akad); ?> <?php echo tanggal_resepsi($tanggal_akad); ?></span>
                                    <i class="fa fa-clock-o text-thm"></i><span class="pl-5"><?php echo pukul($tanggal_akad); ?> WIB</span>
                                </div>
                                <address class="text-dark font-16 mb-10">
                                    <i class="fa fa-map-marker text-thm"></i><span class="pl-12"> <?php echo $tempat_akad; ?></span>
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 wow slideInRight text-center p-sm-20" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="event-item">
                            <div class="event-thumb">
                                <img class="img-responsive img-fullwidth" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/accomod.jpg" alt="">
                            </div>
                            <div class="event-details bg-white p-20">
                                <h2 class="text-thm pb-5">Resepsi Pernikahan</h2>
                                <div class="event-day text-dark font-16 pb-5 font-weight-300">
                                    <i class="fa fa-calendar text-thm"></i><span class="pl-5 pr-10"><?php echo hari($tanggal_resepsi); ?> <?php echo tanggal_resepsi($tanggal_resepsi); ?></span>
                                    <i class="fa fa-clock-o text-thm"></i><span class="pl-5"><?php echo pukul($tanggal_resepsi); ?> WIB</span>
                                </div>
                                <address class="text-dark font-16 mb-10">
                                    <i class="fa fa-map-marker text-thm"></i><span class="pl-12"> <?php echo $tempat_resepsi; ?></span>
                                </address>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="get-quote buku-tamu">
        	<div class="container p-0">
            	<div class="row clearfix">
                    <div class="col-md-6 col-sm-12 col-xs-12 wow slideInLeft p-0" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/image-forlift.png" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 wow slideInRight p-sm-20">
                    	<br>
                    	<div class="sec-title style-three text-center">
                            <h2>Apakah Kamu Akan Hadir?</h2>
                            <h3>Besar harapan kami, kamu bisa datang ke acara pernikankan kami untuk sekedar memberikan upacapan selamat dan do'a.</h3>
                            <div class="line-center"></div>
                        </div>
                        <div class="form wow fadeInRight mt-60" data-wow-delay="0ms" data-wow-duration="1500ms">
                        	<form>
                            	<div class="row clearfix">
                            		<div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <input type="text" name="nama" placeholder="Nama*" id="nama">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <select name="status" id="status2">
                                            <option value="" disabled selected>Apakah Kamu akan Hadir?</option>
                                            <option>Ya, Saya Akan hadir</option>
                                            <option>Ya, Mungkin Saya akan hadir</option>
                                            <option>Maaf Seperti Saya Belum bisa hadir</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <textarea name="pesan" placeholder="Silahkan ucapkan sesuatu*" id="pesan"></textarea>
                                    </div>
                                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 form-group text-center">
                                    	<button type="button" onclick="buku_tamu()" class="theme-btn normal-btn">I AM ATTENDING</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="gallery-section parallax galeri" data-bg-img="images/parallax/image-1.jpg">
            <div class="container-fluid">
                <div class="sec-title style-two">
                    <h2 class="text-thm"><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                    <h3 class="text-thm">OUR PHOTO GALLERY</h3>
                    <div class="line"></div>
                </div>
                <div class="sec-content mt-50">
                    <div class="row clearfix">
                        <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="image mr-5">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-1.jpg" class="lightbox-image"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-1.jpg" alt=""></a>
                                <div class="overlay-box"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-1.jpg" class="link lightbox-image" title="Gallery Photos"><span class="txt font-30"><i class="fa fa-camera"></i></span></a></div>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <figure class="image mr-5">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-2.jpg" class="lightbox-image"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-2.jpg" alt=""></a>
                                <div class="overlay-box"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-2.jpg" class="link lightbox-image" title="Gallery Photos"><span class="txt font-30"><i class="fa fa-camera"></i></span></a></div>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <figure class="image mr-5">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-3.jpg" class="lightbox-image"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-3.jpg" alt=""></a>
                                <div class="overlay-box"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-3.jpg" class="link lightbox-image" title="Gallery Photos"><span class="txt font-30"><i class="fa fa-camera"></i></span></a></div>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <figure class="image mr-5">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-4.jpg" class="lightbox-image"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-4.jpg" alt=""></a>
                                <div class="overlay-box"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-4.jpg" class="link lightbox-image" title="Gallery Photos"><span class="txt font-30"><i class="fa fa-camera"></i></span></a></div>
                            </figure>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="image mr-5">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-1.jpg" class="lightbox-image"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-1.jpg" alt=""></a>
                                <div class="overlay-box"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-1.jpg" class="link lightbox-image" title="Gallery Photos"><span class="txt font-30"><i class="fa fa-camera"></i></span></a></div>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <figure class="image mr-5">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-2.jpg" class="lightbox-image"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-2.jpg" alt=""></a>
                                <div class="overlay-box"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-2.jpg" class="link lightbox-image" title="Gallery Photos"><span class="txt font-30"><i class="fa fa-camera"></i></span></a></div>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <figure class="image mr-5">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-3.jpg" class="lightbox-image"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-3.jpg" alt=""></a>
                                <div class="overlay-box"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-3.jpg" class="link lightbox-image" title="Gallery Photos"><span class="txt font-30"><i class="fa fa-camera"></i></span></a></div>
                            </figure>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <figure class="image mr-5">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-4.jpg" class="lightbox-image"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-4.jpg" alt=""></a>
                                <div class="overlay-box"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/gallery-image-4.jpg" class="link lightbox-image" title="Gallery Photos"><span class="txt font-30"><i class="fa fa-camera"></i></span></a></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="main-footer finish" style="padding: 0px;">
        	<div class="footer-bottom">
                <div class="go-up">
                	<div class="curve scroll-to-target" data-target="#main-header"><span class="icon fa fa-arrow-up"></span></div>
                </div>
                <div class="auto-container">
                    <div class="copyright">2021 &copy; <a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a> All Rights Reserved.</div>
                </div>
            </div>        
        </footer>
    </div>


    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/revolution.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/js-collection.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/flipclock.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/script.js"></script>

    <?php echo $js; ?>

</body>
</html>

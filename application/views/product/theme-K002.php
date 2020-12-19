<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sweetheart - Responsive Wedding Template">
    <meta name="keywords" content="wedding,events,ceremony,couple,pear,love">
    <meta name="author" content="AStheme">

    <!-- Page Title -->
    <title> <?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?> </title>

    <!-- Favicon and Touch Icons -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/jquery.fancybox.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css" rel="stylesheet">

</head>

<body id="home">

    <!-- start page-wrapper -->
    <div class="page-wrapper">


        <!-- Preloader -->
        <div class="preloader">
            <div class="middle">
                <i class="fa fa-heart"></i>
                <i class="fa fa-heart"></i>
                <i class="fa fa-heart"></i>
                <i class="fa fa-heart"></i>
            </div>
        </div>
        <!-- end preloader --> 


        <!-- Start header -->
        <header id="header">
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><?php echo $nama_panggilan_pengantin_pria; ?> &amp; <?php echo $nama_panggilan_pengantin_wanita; ?></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="mobile-menu-logo"><?php echo $nama_panggilan_pengantin_pria; ?> <i class="fa fa-heart"></i> <?php echo $nama_panggilan_pengantin_wanita; ?></li>
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#couple">Couple</a></li>
                            <li><a href="#story">Story</a></li>
                            <li><a href="#events">Events</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#gift">Gift</a></li>
                            <li><a href="#rsvp">Rsvp</a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="mob-icon"><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                </div><!-- end of container -->
            </nav>

            <div class="logo-bottom-shape-wrapper container">
                <div class="logo-bottom-shape wow fadeInDown" data-wow-delay="4s">
                    <span><?php echo substr($nama_panggilan_pengantin_pria, 0,1); ?> <i class="fa fa-heart"></i> <?php echo substr($nama_panggilan_pengantin_wanita, 0,1); ?></span>
                </div>
            </div>
        </header>
        <!-- end of header -->


        <!-- start of hero -->   
        <section class="hero hero-slider-wrapper">
            <div class="hero-slider">
                <?php foreach ($slider as $key => $value) { ?>
                <div class="slide"><img src="<?php echo str_replace('thumbs/', '', $value->image); ?>" alt></div>
                <?php } ?>
            </div>

            <div class="announcement-wrapper">
                <div class="announcement">
                    <span class="married-text">
                        <span class=" wow fadeInUp" data-wow-delay="0.05s">W</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.10s">e</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.15s">'</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.20s">r</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.25s">e</span>
                        <span>&nbsp;</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.30s">g</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.35s">e</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.40s">t</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.45s">i</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.50s">n</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.55s">g</span>
                        <span>&nbsp;</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.60s">m</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.65s">a</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.70s">r</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.75s">r</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.80s">i</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.85s">e</span>
                        <span class=" wow fadeInUp" data-wow-delay="0.90s">d</span>
                    </span>

                    <div class="couple-name wow fadeInUp" data-wow-delay="2s">
                        <h1><?php echo $nama_panggilan_pengantin_pria; ?> &amp; <?php echo $nama_panggilan_pengantin_wanita; ?></h1>
                    </div>
                    <span class="date wow fadeInUp" data-wow-delay="3s"><?php echo date('d.m.Y',strtotime($tanggal_resepsi)); ?></span>
                    <span class="vector wow fadeInUp" data-wow-delay="3.5s"></span>
                </div>
            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start count-down -->
        <section class="count-down">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4 hidden-sm hidden-xs">
                        <h2>Our Big Day</h2>
                    </div>
                    <div class="col col-md-8">
                        <div id="clock"></div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- end of count-down -->


        <!-- start couple -->
        <section class="couple section-padding parallax-flower" data-bg-image-top="images/big-flower.png"  data-bg-image-bottom="images/big-flower-bt.png" id="couple">
            <div class="container">
                <div class="row section-title">
                    <div class="title-box">
                        <div class="double-line double-line-top">
                            <i class="fi flaticon-social"></i>
                            <i class="fi flaticon-social"></i>
                        </div>
                        <h2>Happy couple</h2>
                        <div class="double-line double-line-bottom"></div>
                    </div>
                </div>

                <div class="row groom">
                    <div class="col col-md-4 col-sm-5 wow fadeInLeftSlow" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="pic">
                            <?php if(isset($pengantin[0]->image)){?>
                                <img src="<?php echo str_replace('thumbs/', '',$pengantin[0]->image); ?>" class="img img-responsive" alt>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col col-md-8 col-sm-7 wow fadeInLeftSlow" data-wow-duration="2s">
                        <div class="details">
                            <span>The groom</span>
                            <h4><?php echo $nama_pengantin_pria; ?></h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <colgroup>
                                        <col class="first-col">
                                        <col class="sec-col">
                                    </colgroup>
                                    <tr>
                                        <td>Name</td>
                                        <td><?php echo $nama_panggilan_pengantin_pria; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Father</td>
                                        <td><?php echo $nama_ayah_pengantin_pria; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mother</td>
                                        <td><?php echo $nama_ibu_pengantin_pria; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <p><?php echo $resume_pengantin_pria; ?></p>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end of groom -->

                <div class="row bride">
                    <div class="col col-md-4 col-md-push-8 col-sm-5 col-sm-push-7 wow fadeInRightSlow" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="pic">
                            <?php if(isset($pengantin[1]->image)){?>
                                <img src="<?php echo str_replace('thumbs/', '',$pengantin[1]->image); ?>" class="img img-responsive" alt>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col col-md-8 col-md-pull-4 col-sm-7 col-sm-pull-5">
                        <div class="details wow fadeInRightSlow" data-wow-duration="2s">
                            <span>The bride</span>
                            <h4>Nevela wilson</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <colgroup>
                                        <col class="first-col">
                                        <col class="sec-col">
                                    </colgroup>
                                    <tr>
                                        <td>Name</td>
                                        <td><?php echo $nama_panggilan_pengantin_wanita; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Father</td>
                                        <td><?php echo $nama_ayah_pengantin_wanita; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mother</td>
                                        <td><?php echo $nama_ibu_pengantin_wanita; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <p><?php echo $resume_pengantin_pria; ?></p>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end of bride -->
            </div> <!-- end of container -->
        </section>
        <!-- end of couple -->


        <!-- start of story -->
        <section class="story section-padding" id="story">
            <div class="container">
                <div class="row section-title">
                    <div class="title-box">
                        <div class="double-line double-line-top">
                            <i class="fi flaticon-social"></i>
                            <i class="fi flaticon-social"></i>
                        </div>
                        <h2>Sweet love story</h2>
                        <div class="double-line double-line-bottom"></div>
                    </div>
                </div> <!-- end of section-title -->

                <div class="row story-box-wrapper">
                    <div class="col col-lg-8">
                        <div class="story-box">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#first-meet" aria-controls="first-meet" role="tab" data-toggle="tab">
                                        <i class="fi flaticon-clothes-1"></i>
                                        Pertemuan Pertama</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#first-date" aria-controls="first-date" role="tab" data-toggle="tab">
                                        <i class="fi flaticon-calendar-2"></i>
                                        Kencan Pertama</a>
                                        </li>
                                    <li role="presentation">
                                        <a href="#proposal" aria-controls="proposal" role="tab" data-toggle="tab">
                                        <i class="fi flaticon-heart-rate-monitor"></i>
                                        Lamaran</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#engagement" aria-controls="engagement" role="tab" data-toggle="tab">
                                        <i class="fi flaticon-ring"></i>
                                        Hari Perayaan</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="row tab-pane fade in active" id="first-meet">
                                        <div class="col col-lg-6 col-md-4 col-sm-5">
                                            <?php if(isset($lainnya[0]->image)){?>
                                            <img src="<?php echo str_replace('thumbs/', '',$lainnya[0]->image); ?>" class="img img-responsive" alt>
                                            <?php } ?>
                                        </div>
                                        <div class="col col-lg-6 col-md-8 col-sm-7 story-details">
                                            <h3>Pertemuan Pertama Kitat</h3>
                                            <span class="date"><?php echo tanggal_resepsi($tanggal_pertemuan_pertama); ?></span>
                                            <p><?php echo $resume_pertemuan_pertama; ?></p>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="row tab-pane fade" id="first-date">
                                        <div class="col col-lg-6 col-md-4 col-sm-5">
                                            <?php if(isset($lainnya[1]->image)){?>
                                            <img src="<?php echo str_replace('thumbs/', '',$lainnya[1]->image); ?>" class="img img-responsive" alt>
                                            <?php } ?>
                                        </div>
                                        <div class="col col-lg-6 col-md-8 col-sm-7 story-details">
                                            <h3>Kencan Pertama Kita</h3>
                                            <span class="date"><?php echo tanggal_resepsi($tanggal_kencan_pertama); ?></span>
                                            <p><?php echo $resume_kencan_pertama; ?></p>
                                        </div>                                        
                                    </div>

                                    <div role="tabpanel" class="row tab-pane fade" id="proposal">
                                        <div class="col col-lg-6 col-md-4 col-sm-5">
                                            <?php if(isset($lainnya[2]->image)){?>
                                            <img src="<?php echo str_replace('thumbs/', '',$lainnya[2]->image); ?>" class="img img-responsive" alt>
                                            <?php } ?>
                                        </div>
                                        <div class="col col-lg-6 col-md-8 col-sm-7 story-details">
                                            <h3>Hari Lamaran</h3>
                                            <span class="date"><?php echo tanggal_resepsi($tanggal_lamaran); ?></span>
                                            <p><?php echo $resemu_lamaran; ?></p>
                                        </div>                                        
                                    </div>

                                    <div role="tabpanel" class="row tab-pane fade" id="engagement">
                                        <div class="col col-lg-6 col-md-4 col-sm-5">
                                            <?php if(isset($lainnya[3]->image)){?>
                                            <img src="<?php echo str_replace('thumbs/', '',$lainnya[3]->image); ?>" class="img img-responsive" alt>
                                            <?php } ?>
                                        </div>
                                        <div class="col col-lg-6 col-md-8 col-sm-7 story-details">
                                            <h3>Hari Perayaan</h3>
                                            <span class="date"><?php echo tanggal_resepsi($tanggal_akad); ?></span>
                                            <p><?php echo $resume_akad; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of story-box -->
                    </div> <!-- end of col -->

                    <div class="col col-lg-4">
                        <div class="pic-holder">
                            <?php if(isset($lainnya[4]->image)){?>
                                <img src="<?php echo str_replace('thumbs/', '',$lainnya[4]->image); ?>" class="img img-responsive" alt>
                            <?php } ?>
                            <h3>And, We’re Getting Married</h3>
                        </div>
                    </div>
                </div>

            </div> <!-- end of container -->
        </section>
        <!-- end of story -->


        <!-- start events -->
        <section class="events section-padding" id="events">
            <div class="container">
                <div class="row section-title">
                    <div class="title-box">
                        <div class="double-line double-line-top">
                            <i class="fi flaticon-social"></i>
                            <i class="fi flaticon-social"></i>
                        </div>
                        <h2>The wedding</h2>
                        <div class="double-line double-line-bottom"></div>
                    </div>
                </div> <!-- end of section-title -->

                <div class="row content">
                    <div class="col col-md-6">
                        <div class="event-boxes">
                            <div class="left-half"></div>
                            <div class="right-half"></div>
                            <div class="clip"><i class="fi flaticon-clip-1"></i></div>
                            <div class="event-box-inner">
                                <div class="main-ceromony">
                                    <h3>Akad Nikah</h3>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> <?php echo hari($tanggal_akad); ?> <?php echo tanggal_resepsi($tanggal_akad); ?> pukul <?php echo pukul($tanggal_akad); ?> WIB/li>
                                        <li><i class="fa fa-location-arrow"></i> <?php echo $tempat_akad; ?></li>
                                    </ul>
                                </div>
                                <div class="reception">
                                    <h3>Resepsi Pernikahan</h3>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> <?php echo hari($tanggal_resepsi); ?> <?php echo tanggal_resepsi($tanggal_resepsi); ?> pukul <?php echo pukul($tanggal_resepsi); ?> WIB</li>
                                        <li><i class="fa fa-location-arrow"></i> <?php echo $tempat_resepsi; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-6">
                        <div id="map" class="map"></div>
                    </div>
                </div>
            </div> <!-- end of container -->
        </section>
        <!-- end of events -->


        <!-- start of bquotes -->
        <section class="bquotes">
            <h2 class="hidden">Wishes</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2">
                        <div class="bquotes-slider">
                            <div class="item">
                                <div class="text">
                                    <p>The good time and treasure of the present become golden memories of tomorrow. Wish your love continue to grow.</p>
                                </div>
                                <div class="footer">
                                    <p>Muche dul <span>Friend</span></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="text">
                                    <p>The good time and treasure of the present become golden memories of tomorrow. Wish your love continue to grow.</p>
                                </div>
                                <div class="footer">
                                    <p>Muche dul <span>Friend</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end of container -->
        </section>
        <!-- end of bquotes -->


        <!-- start gallery -->
        <section class="gallery section-padding parallax-flower" data-bg-image-top="images/big-flower.png"  data-bg-image-bottom="images/big-flower-bt.png" id="gallery">
            <div class="container">
                <div class="row section-title">
                    <div class="title-box">
                        <div class="double-line double-line-top">
                            <i class="fi flaticon-social"></i>
                            <i class="fi flaticon-social"></i>
                        </div>
                        <h2>Photo gallery</h2>
                        <div class="double-line double-line-bottom"></div>
                    </div>
                </div> <!-- end of section-title -->

                <div class="row gallery-boxes">
                    <?php foreach ($galeri as $key => $value) { ?>
                    <div class="col col-md-3 col-xs-6 wow fadeIn">
                        <div class="box">
                            <a href="<?php echo str_replace('thumbs/', '',$value->image); ?>" class="fancybox" data-fancybox-group="gallery">
                                <img src="<?php echo $value->image; ?>" class="img img-responsive" alt>
                                <div class="fade-icon">
                                    <span class="icon"><i class="fa fa-search"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div> <!-- end of container -->
        </section>
        <!-- end of gallery -->


        <!-- start gift-registry -->
        <section class="gift-registry section-padding" id="gift">
            <div class="container">
                <div class="row section-title">
                    <div class="title-box">
                        <div class="double-line double-line-top">
                            <i class="fi flaticon-social"></i>
                            <i class="fi flaticon-social"></i>
                        </div>
                        <h2>Gift registry</h2>
                        <div class="double-line double-line-bottom"></div>
                    </div>
                </div> <!-- end of section-title -->

                <div class="row text">
                    <div class="col col-md-6 col-md-offset-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, cupiditate, repudiandae. A ab sit laboriosam quis distinctio dignissimos, nemo cum sed hic, deleniti maiores rem iste labore commodi perferendis cumque.</p>
                    </div>
                </div>
            
                <div class="row">
                    <div class="clearfix">
                        <div class="col col-sm-3 col-xs-6">
                            <div>
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gift-registry/img-1.jpg" class="img img-responsive" alt>
                            </div>
                        </div>
                        <div class="col col-sm-3 col-xs-6">
                            <div>
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gift-registry/img-2.jpg" class="img img-responsive" alt>
                            </div>
                        </div>
                        <div class="col col-sm-3 col-xs-6">
                            <div>
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gift-registry/img-3.jpg" class="img img-responsive" alt>
                            </div>
                        </div>
                        <div class="col col-sm-3 col-xs-6">
                            <div>
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gift-registry/img-4.jpg" class="img img-responsive" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end of container -->
        </section>
        <!-- end of gift-registry -->


        <!-- start rsvp -->
        <section class="rsvp section-padding parallax" data-bg-image="images/rsvp-bg.jpg" id="rsvp">
            <div class="container">
                <div class="row section-title">
                    <div class="title-box">
                        <div class="double-line double-line-top">
                            <i class="fi flaticon-social"></i>
                            <i class="fi flaticon-social"></i>
                        </div>
                        <h2>Are you comming</h2>
                        <div class="double-line double-line-bottom"></div>
                    </div>
                </div> <!-- end of section-title -->

                <div class="row content">
                    <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="rsvp-form-wrapper">
                            <div class="border-box">
                                <i class="fi flaticon-clip-1 top-clip"></i>
                                <i class="fi flaticon-clip-1 bottom-clip"></i>
                                <div></div>
                            </div>
                            <h4>Please reserve <br>before December 16th, 2016</h4>
                            <form id="rsvp-form" class="form form-inline" method="post">
                                <div class="row">
                                    <div class="form-group col col-sm-6">
                                        <input type="text" class="form-control"  name="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group col col-sm-6">
                                        <input type="email" class="form-control"  name="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="form-group col col-sm-6">
                                        <select name="guest" class="form-control">
                                            <option disabled="disabled" selected>Number of Guest</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="form-group col col-sm-6">
                                        <select name="events" class="form-control">
                                            <option disabled="disabled" selected>I am attending</option>
                                            <option>Al events</option>
                                            <option>Wedding ceremony</option>
                                            <option>Reception party</option>
                                        </select>
                                    </div>      

                                    <div class="form-group col col-sm-12">
                                        <textarea name="notes" class="form-control" placeholder="Your Message" ></textarea>
                                    </div>      

                                    <div class="form-group col col-sm-12">
                                        <button type="submit" class="btn btn-default theme-btn">Send invitation</button>
                                        <span id="loader"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/rsvp-ajax-loader.gif" alt="Loader"></span>
                                    </div>      
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Try again later. </div>
                                </div>
                            </form> <!-- end of form -->
                        </div>
                    </div>
                </div>
            </div> <!-- end of container -->
        </section>
        <!-- end of rsvp -->


        <!-- start journal -->
        <section class="journal section-padding flower-pattern">
            <div class="container">
                <div class="row section-title">
                    <div class="title-box">
                        <div class="double-line double-line-top">
                            <i class="fi flaticon-social"></i>
                            <i class="fi flaticon-social"></i>
                        </div>
                        <h2>From our journal</h2>
                        <div class="double-line double-line-bottom"></div>
                    </div>
                </div> <!-- end of section-title -->


                <div class="row">
                    <div class="col col-md-10 col-md-offset-1">
                        <div class="row journal-content">
                            <div class="col col-xs-6">
                                <a href="#" data-toggle="modal" data-target="#modal-1">
                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/journal/img-1.jpg" class="img img-responsive" alt>
                                </a>
                                <h4><a href="#" data-toggle="modal" data-target="#modal-1">Forever our love!</a></h4>
                                <span>29 Nov 2016</span>

                                <div class="modal fade bs-example-modal-lg" id="modal-1">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title">Forever our love! Never stop</h4>
                                            </div>

                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/journal/img-1.jpg" class="img img-responsive" alt>
                                                <span>29 Nov 2016</span>
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
                                                <p> When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-xs-6">
                                <a href="#" data-toggle="modal" data-target="#modal-2">
                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/journal/img-2.jpg" class="img img-responsive" alt>
                                </a>
                                <h4><a href="#" data-toggle="modal" data-target="#modal-2">Plan For Honeymoon Trip.</a></h4>
                                <span>05 Dec 2016</span>

                                <div class="modal fade bs-example-modal-lg" id="modal-2">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title">Plan for honeymoon trip</h4>
                                            </div>

                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/journal/img-2.jpg" class="img img-responsive" alt>
                                                <span>05 Dec 2016</span>
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
                                                <p> When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-xs-6">
                                <a href="#" data-toggle="modal" data-target="#modal-3">
                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/journal/img-3.jpg" class="img img-responsive" alt>
                                </a>
                                <h4><a href="#" data-toggle="modal" data-target="#modal-3">Wedding day tour plan.</a></h4>
                                <span>10 Dec 2016</span>

                                <div class="modal fade bs-example-modal-lg" id="modal-3">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title">Wedding day tour plan.</h4>
                                            </div>

                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/journal/img-3.jpg" class="img img-responsive" alt>
                                                <span>10 Dec 2016</span>
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
                                                <p> When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-xs-6">
                                <a href="#" data-toggle="modal" data-target="#modal-4">
                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/journal/img-4.jpg" class="img img-responsive" alt>
                                </a>
                                <h4><a href="#" data-toggle="modal" data-target="#modal-4">Bachelor Party!</a></h4>
                                <span>11 dec 2016</span>

                                <div class="modal fade bs-example-modal-lg" id="modal-4">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title">Bachelor Party!</h4>
                                            </div>

                                            <div class="modal-body">
                                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/journal/img-4.jpg" class="img img-responsive" alt>
                                                <span>11 dec 2016</span>
                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
                                                <p> When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- end of journal -->


        <!-- start footer -->
        <footer class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-xs-10 col-md-offset-2 col-xs-offset-1">
                        <div class="box">
                            <!-- frame -->
                            <div class="left-top-border"></div> 
                            <div class="right-top-border"></div> 
                            <div class="bottom-right-border"></div> 
                            <div class="bottom-left-border"></div> 
                            <!-- frame -->

                            <div class="love-birds wow fadeInSlow"><i class="fi flaticon-birds-in-love"></i></div>
                            <h2 class="wow fadeInSlow">We are getting married</h2>
                            <p class="wow fadeInSlow">Michel &amp; Nevela</p>
                            <span class="wow fadeInSlow">30 Jun 2017</span>
                        </div>
                        <p class="copyright">&copy; Copyright 2016. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-plugin-collection.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1cZtqidvg0m-f8Hd3S6RHx1mY-omuLS4"></script>

    <!-- Custom script for this template -->
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/script.js"></script>
</body>

<!-- Mirrored from astheme.ourdreamit.com/sweetheart/p-s-t/grid-gallery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 11:36:43 GMT -->
</html>

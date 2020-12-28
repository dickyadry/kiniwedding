<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">

    <!-- Favicon and Touch Icons -->
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style-thema-1.css">
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/modernizr-2.6.2.min.js"></script>

    <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/custom.css">

</head>

<body>

    <div class="forscroll">
        
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

        <header role="banner" id="qbootstrap-header">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <a href="#" class="js-qbootstrap-nav-toggle qbootstrap-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                        <a class="navbar-brand" href="#" data-nav-section="home">Wedding</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
                            <li><a href="#" data-nav-section="salam"><span>Salam Pembuka</span></a></li>
                            <li><a href="#" data-nav-section="tanggal"><span>Tanggal</span></a></li>
                            <li><a href="#" data-nav-section="when-where"><span>Akad &amp; Resepsi</span></a></li>
                            <li><a href="#" data-nav-section="greetings"><span>Ucapan</span></a></li>
                            <li><a href="#" data-nav-section="gallery"><span>Gallery</span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>


        <div class="qbootstrap-hero" data-section="home">
            <div class="qbootstrap-overlay"></div>
            <div class="qbootstrap-cover text-center bg-image" data-stellar-background-ratio="0" style="background-image: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/slide-2.jpg');">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="animate-box svg-sm colored">
                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/flaticon/svg/004-nature.svg" class="svg" alt="">
                                    <h1 class="holder"><span>The Wedding of</span></h1>
                                    <h2><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                                    <p><?php echo tanggal_resepsi($tanggal_resepsi); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-section="salam" id="qbootstrap-couple" class="qbootstrap-section-gray">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 animate-box">
                        <div class="col-md-12 text-center section-heading svg-sm colored">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/flaticon/svg/005-two.svg" class="svg" alt="">
                            <h2 class="bismi">Bismillahirrrahmanirrahim</h2>
                            <p><?php echo $kata_mutiara; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/bridesmaid-4.jpg" class="img-responsive" alt="">
                            <h3><?php echo $nama_pengantin_wanita; ?></h3>
                            <span>Mempelai Wanita</span>
                            <p>Anak ke-<?php echo $pengantin_wanita_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_wanita . ' & Ibu ' . $nama_ibu_pengantin_wanita ; ?></p>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 nopadding">
                            <h2 class="amp-center"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/flaticon/svg/003-luxury.svg" class="svg img-responsive" alt=""></h2>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/groom-men-1.jpg" class="img-responsive" alt="">
                            <h3><?php echo $nama_pengantin_wanita; ?></h3>
                            <span>Mempelai Pria</span>
                            <p>Anak ke-<?php echo $pengantin_pria_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_pria . ' & Ibu ' . $nama_ibu_pengantin_pria ; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-section="tanggal" id="qbootstrap-countdown" data-stellar-background-ratio="0.5" class="bg-image2" style="background-image: url(<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg);" data-section="wedding-day">
            <div class="overlay"></div>
            <div class="display-over">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-12 section-heading text-center svg-sm colored">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg" class="svg" alt="">
                            <h2 class="">The Wedding Day</h2>
                            <span class="datewed"><?php echo tanggal_resepsi($tanggal_resepsi); ?></span>
                            <span id="date_deadline" hidden><?php echo date("m d, Y H:i:s", strtotime($tanggal_resepsi)); ?></span>
                        </div>
                    </div>
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <p class="countdown">
                                <span id="days"></span>
                                <span id="hours"></span>
                                <span id="minutes"></span>
                                <span id="seconds"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="qbootstrap-when-where" data-section="when-where">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-12 text-center section-heading svg-sm colored">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/flaticon/svg/005-two.svg" class="svg" alt="">
                            <h2>Akad Nikah &amp; Resepsi</h2>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 subtext">
                                    <h3>Turut mengundang teman-teman, sahabat dan keluarga menyaksikan pengesahan kisah cinta Kami yang begitu indah dalam resepsi pernikahan Kami</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-bottom-padded-md">
                    <div class="col-md-6 text-center animate-box">
                        <div class="wedding-events">
                            <div class="ceremony-bg" style="background-image: url(<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/wed-ceremony.jpg);">
                            </div>
                            <div class="desc">
                                <h3>Akad Nikah</h3>
                                <div class="row">
                                    <div class="col-md-2 col-md-push-5">
                                        <div class="icon-tip">
                                            <span class="icon"><i class="icon-heart-o"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-md-pull-1">
                                        <div class="date">
                                            <i class="icon-calendar"></i>
                                            <span><?php echo hari($tanggal_akad); ?></span>
                                            <span><?php echo tanggal_resepsi($tanggal_akad); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-md-pull-1">
                                        <div class="date">
                                            <i class="icon-clock2"></i>
                                            <span><?php echo pukul($tanggal_akad); ?> WIB</span>
                                            <span>Selesai</span>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo $tempat_akad; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center animate-box">
                        <div class="wedding-events">
                            <div class="ceremony-bg" style="background-image: url(<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/venue.jpg);">
                            </div>
                            <div class="desc">
                                <h3>Resepsi Pernikahan</h3>
                                <div class="row">
                                    <div class="col-md-2 col-md-push-5">
                                        <div class="icon-tip">
                                            <span class="icon"><i class="icon-heart-o"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-md-pull-1">
                                        <div class="date">
                                            <i class="icon-calendar"></i>
                                            <span><?php echo hari($tanggal_resepsi); ?></span>
                                            <span><?php echo tanggal_resepsi($tanggal_resepsi); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-md-pull-1">
                                        <div class="date">
                                            <i class="icon-clock2"></i>
                                            <span><?php echo pukul($tanggal_resepsi); ?> WIB</span>
                                            <span>Selesai</span>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo $tempat_resepsi; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="qbootstrap-when-where">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-12 text-center section-heading svg-sm colored">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/flaticon/svg/005-two.svg" class="svg" alt="">
                            <h2>Lokasi Akad &amp; Resepsi</h2>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 subtext">
                                    <h3><?php echo $tempat_resepsi; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-bottom-padded-md">
                    <div class="col-md-12 text-center animate-box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.672778464467!2d89.55846281543346!3d22.814585729793365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901c9481c799%3A0x92f932dd6112f8ff!2sHotel+Sheraton+Buliding%2C+29+Khan+Jahan+Ali+Rd%2C+Khulna!5e0!3m2!1sen!2sbd!4v1558933503904!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div id="qbootstrap-testimonials" class="qbootstrap-greetings bg-image3" data-section="greetings" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-12 section-heading text-center svg-sm colored">
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg" class="svg" alt="">
                        <h2 class="">RSVP</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="box-testimony">
                            <form>
                                <div class="row">
                                    <div class="form-group col col-sm-3">
                                    </div>
                                    <div class="form-group col col-sm-6">
                                        <div class="row">
                                            <div class="form-group col col-sm-12">
                                                <input type="text" name="nama" placeholder="Nama*" id="nama" class="form-control" style="width: 100%; margin: 10px; background: #FFF;">
                                            </div>
                                            <div class="form-group col col-sm-12">
                                                <select class="form-control" name="status2" id="status2" style="width: 100%;  margin: 10px; background: #FFF;">
                                                    <option value="" disabled selected>Apakah Kamu akan Hadir?</option>
                                                    <option>Ya, Saya Akan hadir</option>
                                                    <option>Ya, Mungkin Saya akan hadir</option>
                                                    <option>Maaf Seperti Saya Belum bisa hadir</option>
                                                </select>
                                            </div>      
                                            <div class="form-group col col-sm-12">
                                                <textarea class="form-control" name="pesan" placeholder="Silahkan ucapkan sesuatu*" id="pesan" style="width: 100%;  margin: 10px; background: #FFF;"></textarea>
                                            </div>      
                                            <div class="form-group col col-sm-12">
                                                <button style="margin: 10px; width: 100%; background: #FF847C;" type="button" class="btn btn-default theme-btn" onclick="buku_tamu()">Send</button>
                                            </div> 
                                        </div>
                                    </div>   
                                    <div class="form-group col col-sm-3">
                                    </div>    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-12 section-heading text-center svg-sm colored">
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg" class="svg" alt="">
                        <h2 class="">Sweet Messages</h2>
                    </div>
                </div>
                <div class="row">
                    <?php
                        if (!empty($buku_tamu)) {
                            $i = 0;
                            foreach ($buku_tamu as $key => $value) {
                                if ($i <= 2) {
                                
                    ?>
                    <div class="col-md-4 animate-box">
                        <div class="box-testimony ">
                            <blockquote>
                                <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                                <p>&ldquo; <?php echo $value->pesan; ?> &rdquo;</p>
                            </blockquote>
                            <p class="author"><?php echo $value->nama; ?>; <?php echo $value->status; ?></p>
                        </div>
                    </div>
                    <?php
                                    $i++;
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <div id="qbootstrap-gallery" data-section="gallery">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-12 text-center section-heading svg-sm colored">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/flaticon/svg/005-two.svg" class="svg" alt="">
                            <h2><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 subtext">
                                    <h3>Momen Kebahagian Kami yang Sempat Kami Abadikan</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="gallery animate-box">
                            <a class="gallery-img image-popup image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg" class="img-responsive" alt=""></a>
                            <a class="gallery-img image-popup image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="gallery animate-box">
                            <a class="gallery-img image-popup image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg" class="img-responsive" alt=""></a>
                            <a class="gallery-img image-popup image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="gallery animate-box">
                            <a class="gallery-img image-popup image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg" class="img-responsive" alt=""></a>
                            <a class="gallery-img image-popup image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/9.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/9.jpg" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="gallery animate-box">
                            <a class="gallery-img image-popup image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/10.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/10.jpg" class="img-responsive" alt=""></a>
                            <a class="gallery-img image-popup image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/11.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/11.jpg" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer" role="contentinfo">
            <div class="container finish">
                <div class="row row-bottom-padded-sm">
                    <div class="col-md-12">
                        <p class="copyright text-center"><a href="https://kiniwedding.com" target="_blank" style="color: #000;">kiniwedding.com</a> &copy; Copyright 2021, All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.flexslider-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.stellar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/magnific-popup-options.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/main-theme-1.js"></script>

    <?php echo $js; ?>

    
</body>

</html>
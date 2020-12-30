<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WXZ8CKX');</script>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">

    <!-- Favicon and Touch Icons -->
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">

    <!-- Library CSS -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/glanz_library.css" rel="stylesheet">

    <!-- Icons CSS -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/fonts/themify-icons.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/glanz_style.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,600,700%7COpen+Sans:300,400,700%7CPlayfair+Display:400,400i,700,700i" rel="stylesheet">

    <!-- Other Fonts -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/fonts/marsha/stylesheet.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/custom.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

</head>


<body class="gla_middle_titles">

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
            <div class="gla_invitation_i gla_invitation_ii gla_image_bck" style='background-image: url("<?php echo base_url(); ?>public/starter_images/flower-K004.png")'>
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

<div class="gla_page" id="gla_page">
    

    <div class="gla_music_icon_cont">
        <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/47701713&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
    </div>
    
    <!-- Header -->
    <header>       
    
        <nav class="gla_light_nav gla_transp_nav">
            <div class="container">
                <div class="gla_logo_container clearfix">
                    <div class="gla_logo_txt">
                        <!-- Logo -->
                        <a href="https://kiniwedding.com" class="gla_logo"><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></a>
                        <!-- Text Logo -->
                        <div class="gla_logo_und"><?php echo tanggal_resepsi($tanggal_resepsi); ?></div>
                    </div>
                </div>

                <!-- Menu -->
                <div class="gla_main_menu gla_main_menu_mobile">
                    
                    <div class="gla_main_menu_icon">
                        <i></i><i></i><i></i><i></i>
                        <b>Menu</b>
                        <b class="gla_main_menu_icon_b">Back</b>
                    </div>
                </div>
                
                <!-- Menu Content -->
                <div class="gla_main_menu_content gla_image_bck" data-color="rgba(0,0,0,0.9)" data-image="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/wedding/ian_kelsey/14795026036_19a656e3f6_k.jpg">
                    <!-- Over -->
                    <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
                </div>

                <div class="gla_main_menu_content_menu gla_wht_txt text-right">
                    <div class="container">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#" onclick="goTo('pasangan')">Pasangan</a></li>
                            <li><a href="#" onclick="goTo('hari-perayaan')">Hari Perayaan</a></li>
                            <li><a href="#" onclick="goTo('akad-resepsi')">Akad & Resepsi</a></li>
                            <li><a href="#" onclick="goTo('buku-tamu')">Buku Tamu</a></li>
                            <li><a href="#" onclick="goTo('galeri')">Galeri</a></li>
                        </ul>
                    </div>
                    <!-- container end -->
                </div>
                <!-- menu content end -->

                <!-- Top Menu -->
                <div class="gla_default_menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#" onclick="goTo('pasangn')">Pasangan</a></li>
                        <li><a href="#" onclick="goTo('hari-perayaan')">Hari Perayaan</a></li>
                        <li><a href="#" onclick="goTo('akad-resepsi')">Akad & Resepsi</a></li>
                        <li><a href="#" onclick="goTo('buku-tamu')">Buku Tamu</a></li>
                        <li><a href="#" onclick="goTo('galeri')">Galeri</a></li>
                    </ul>
                </div>
                <!-- Top Menu End -->
               
            </div>
            <!-- container end -->
        </nav>
        
    </header>
    <!-- Header End -->


    <!-- Slider -->
    <?php $background_slide = isset($background[0]->image)?$background[0]->image:''; ?>
    <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed"  data-image="<?php echo show_images($background_slide); ?>" data-stellar-background-ratio="0.2">
        <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
        <div class="container">
            <!-- Slider Texts -->
            <div class="gla_slide_txt gla_slide_center_middle text-center">
                <p><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/animations/ourwedding_gold.gif" alt="" height="330"></p>
                <div class="gla_slide_subtitle"><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?> <br><?php echo tanggal_resepsi($tanggal_resepsi); ?></div>
            </div>
        </div>
        <a class="gla_scroll_down gla_go" href="#gla_content">
            <b></b>
            Scroll
        </a>
    </div>

    <!-- Content -->
    <section id="gla_content" class="gla_content">
        <!-- section -->
        <section class="gla_section gla_image_bck" data-color="#">
            <div class="container text-center">
                <h2>Kata Mutiara</h2>
                <p><?php echo $kata_mutiara; ?></p>
            </div>
            <!-- container end -->
        </section>
        <!-- section end -->

        <!-- section -->
        <?php $background_pengantin = isset($background[1]->image)?$background[1]->image:''; ?>
        <section class="gla_section gla_image_bck gla_fixed pasangn" data-stellar-background-ratio="0.2" data-image="<?php echo show_images($background_pengantin); ?>">
            <div class="container">
                <div class="row gla_auto_height">
                    <div class="col-md-6 col-md-push-6 gla_image_bck" data-color="#eee">
                        <div class="gla_simple_block">
                            <h2><?php echo $nama_pengantin_pria; ?></h2>
                            <p><?php echo $resume_pengantin_pria; ?></p>
                        </div>
                    </div>
                    <?php if(isset($pengantin[0]->image)){?>
                    <div class="col-md-6 col-md-pull-6 gla_image_bck" data-image="<?php echo show_images($pengantin[0]->image); ?>">
                    <?php } ?>
                    </div>
                    <div class="col-md-6 gla_image_bck" data-color="#eee">
                        <div class="gla_simple_block">
                            <h2><?php echo $nama_pengantin_wanita; ?></h2>
                            <p><?php echo $resume_pengantin_wanita; ?></p>
                        </div>
                        
                    </div>
                    <?php if(isset($pengantin[1]->image)){?>
                    <div class="col-md-6 gla_image_bck" data-image="<?php echo show_images($pengantin[1]->image); ?>">
                    <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section -->
        <?php $background_date = isset($background[2]->image)?$background[2]->image:''; ?>
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt hari-perayaan" data-stellar-background-ratio="0.2" data-image="<?php echo show_images($background_date); ?>">
            <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
            <div class="container text-center">
                <p><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/animations/save_gold.gif" height="280" alt=""></p>
                <h2><?php echo tanggal_resepsi($tanggal_resepsi); ?></h2>
                <h3><?php echo $tempat_resepsi; ?>.</h3>
                <div class="gla_countdown_gold" data-year="<?php echo date('Y',strtotime($tanggal_resepsi)); ?>" data-month="<?php echo date('m',strtotime($tanggal_resepsi)); ?>" data-day="<?php echo date('d',strtotime($tanggal_resepsi)); ?>"></div>
            </div>
        </section>
        <!-- section end -->

        <!-- section -->
        <section class="gla_section akad-resepsi">
            <div class="container text-center">
                <p><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/animations/ourwedding_gold_wh.gif" height="200" alt=""></p>
                <h3>Tanggal dan Lokasi Acara</h3>
                <div class="row text-center">
                    <div class="col-md-6 gla_round_block">
                        <?php if(isset($lainnya[0]->image)){?>
                        <div class="gla_round_im gla_image_bck" data-image="<?php echo show_images($lainnya[0]->image); ?>"></div>
                        <?php } ?>
                        <h3>Akad Nikah</h3>
                        <p><?php echo hari($tanggal_akad); ?> <?php echo tanggal_resepsi($tanggal_akad); ?> pukul <?php echo pukul($tanggal_akad); ?> WIB</span><br>
                        <?php echo $tempat_akad ?><br><br>
                        <a href="#" class="btn">View Map</a>
                    </div>
                    <div class="col-md-6 gla_round_block">
                        <?php if(isset($lainnya[1]->image)){?>
                        <div class="gla_round_im gla_image_bck" data-image="<?php echo show_images($lainnya[1]->image); ?>"></div>
                        <?php } ?>
                        <h3>Resepsi</h3>
                        <p><?php echo hari($tanggal_resepsi); ?> <?php echo tanggal_resepsi($tanggal_resepsi); ?> pukul <?php echo pukul($tanggal_resepsi); ?> WIB</span><br>
                        <?php echo $tempat_resepsi ?><br><br>
                        <a href="#" class="btn">View Map</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section -->
        <?php $background_rsvp = isset($background[3]->image)?$background[3]->image:''; ?>
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt buku-tamu" data-stellar-background-ratio="0.2" data-image="<?php echo show_images($background_rsvp); ?>">
            <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
            <div class="container text-center">
                <p><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/animations/rsvp_gold.gif" height="200" alt=""></p>
                <div class="row">
                    <div class="col-md-8 col-md-push-2">
                        <form action="https://formspree.io/your@mail.com" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Nama*</label>
                                    <input type="text" name="nama" placeholder="Nama*" id="nama" required class="form-control form-opacity">
                                </div>
                                <div class="col-md-12">
                                    <label>Apakah kamu akan hadir?</label>
                                    <select class="form-control form-opacity" name="status" id="status">
                                        <option value="">Apakah Kamu akan Hadir?</option>
                                        <option>Ya, Saya Akan hadir</option>
                                        <option>Ya, Mungkin Saya akan hadir</option>
                                        <option>Maaf Seperti Saya Belum bisa hadir</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label>Silahkan ucapakan Sesuatu</label>
                                    <textarea name="pesan" class="form-control" placeholder="Silahkan ucapkan sesuatu*" id="pesan" class="form-control form-opacity"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input type="button" class="btn submit" value="Send" onclick="buku_tamu()">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section -->
        <?php $background_4 = isset($background[4]->image)?$background[4]->image:''; ?>
        <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.2" data-image="<?php echo show_images($background_4); ?>">

            <!-- Over -->
            <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
            
            <div class="container text-center">

                <p><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/animations/thanks_gold.gif" height="140" alt=""></p>
                <h2>Ucapan Manis</h2>
                    <!-- icon boxes -->
                <div class="gla_icon_boxes gla_partners row">
                    <!-- item -->
                    <?php foreach ($buku_tamu as $key => $value) { ?>
                    <div class="gla_partner_box">
                        <div class="quote">
                            <p><?php echo $value->pesan; ?></p>
                        </div>
                        <div class="details">
                            <h5><?php echo $value->nama; ?></h5>
                            <p><?php echo $value->status; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- icon boxes end -->
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

        <!-- section -->
        <section class="gla_section gla_image_bck galeri">
            <div class="container text-center">
                <h2>Galeri</h2>
                <div class="gla_portfolio_no_padding grid">
                    <?php foreach ($galeri as $key => $value) { ?>
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="<?php echo show_images($value->image); ?>" class="lightbox">
                                <img src="<?php echo show_images($value->image); ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <?php } ?>  
                 </div>
            </div>
        </section>
        <!-- section end -->

        <!-- section -->
        <?php $background_5 = isset($background[5]->image)?$background[5]->image:''; ?>
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt finish" data-stellar-background-ratio="0.8" data-image="<?php echo show_images($background_5); ?>">
            <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
            <div class="container text-center">
                <p><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/animations/thanks_gold.gif" height="143" alt=""></p>
                <div class="footer_bottom">
                    <p>&copy; Copyright 2021, Made with love by <a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a></p>
                </div>
            </div>
        </section>
        <!-- section end -->

    </section>
    <!-- Content End -->
    

</div>
<!-- Page End -->



<!-- JQuery -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-1.12.4.min.js"></script> 
<!-- Library JS -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/glanz_library.js"></script> 

<!-- Theme JS -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/glanz_script.js"></script>

<?php echo $js; ?>

</body>

</html>
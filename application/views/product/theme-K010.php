<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lovus is responsive wedding html website template">
    <meta name="keywords" content="wedding,couple,ceremony,reception,rsvp,gallery,event,countdown">
    <meta name="author" content="">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/jquery.countdown.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/animsition.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bg.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/color.css" type="text/css" id="colors">

    <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index.html">
                                <h2><?php echo $nama_panggilan_pengantin_pria; ?><span>&amp;</span><?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <span class="btn-rsvp">RSVP</span>

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="#" onclick="goTo('paling-atas')">Home</a></li>
                                <li><a href="#" onclick="goTo('pasangan')">About</a></li>
                                <li><a href="#" onclick="goTo('kisah-kita')">Story</a></li>
                                <li><a href="#" onclick="goTo('tanggal-event')">Events</a></li>
                                <li><a href="#" onclick="goTo('galeri')">Gallery</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <!-- rsvp popup begin -->
            <div id="popup-box" class="full-height">
                <span class="btn-close">
					<i class="icon_close"></i>
				</span>

                <div class="container center-y">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>Kami Mengundang Kalian</span></h2>
                            <h2 data-wow-delay=".2s"><?php echo hari($tanggal_resepsi); ?>, <?php echo tanggal_resepsi($tanggal_resepsi); ?></h2>
                        </div>

                        <div class="spacer-double"></div>

                        <div class="col-md-5 col-md-offset-1 text-right">
                            <h3>Akad Nikah</h3>
                            <?php echo hari($tanggal_akad); ?>, <?php echo tanggal_resepsi($tanggal_akad); ?><br> <?php echo pukul($tanggal_akad); ?> WIB<br> <?php echo $tempat_akad; ?><br>
                        </div>

                        <div class="col-md-5">
                            <h3>Resepsi Pernikahan</h3>
                            <?php echo hari($tanggal_resepsi); ?>, <?php echo tanggal_resepsi($tanggal_resepsi); ?><br> <?php echo pukul($tanggal_resepsi); ?> WIB<br> <?php echo $tempat_resepsi; ?><br>
                        </div>

                        <div class="spacer-double"></div>

                        <form>
                            <div class="col-md-4">
                                <input type="text" name="nama" placeholder="Nama*" id="nama" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <select name="status" class="form-control" id="status">
                                    <option value="" disabled selected>Apakah Kamu akan Hadir?</option>
                                    <option>Ya, Saya Akan hadir</option>
                                    <option>Ya, Mungkin Saya akan hadir</option>
                                    <option>Maaf Seperti Saya Belum bisa hadir</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <textarea class="form-control" name="pesan" placeholder="Silahkan ucapkan sesuatu*" id="pesan"></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="spacer-single"></div>
                                <input type='button' value='Submit' class="btn btn-custom" onclick="buku_tamu()">
								<div id='mail_success' class='success'>Your message has been sent successfully.</div>
								<div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                            </div>

                        </form>

                        <div class="spacer-single"></div>
                    </div>
                </div>
            </div>
            <!-- rsvp popup close -->

            <!-- section begin -->
            <section id="section-hero" class="full-height relative z1 owl-slide-wrapper no-top no-bottom text-light paling-atas" data-stellar-background-ratio=".2">
                <div class="owl-slider-nav">
                    <div class="next"></div>
                    <div class="prev"></div>
                </div>

                <div class="center-y fadeScroll relative" data-scroll-speed="4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="row">
                                    <div class="spacer-single"></div>
                                    <div class="col-md-5 text-right text-center-sm relative">
                                        <h2 class="name"><?php echo $nama_panggilan_pengantin_pria; ?></h2>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <span class="deco-big" data-scroll-speed="2">&amp;</span>
                                    </div>
                                    <div class="col-md-5 text-left text-center-sm relative">
                                        <h2 class="name"><?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="custom-owl-slider" class="owl-slide" data-scroll-speed="2">
                    <div class="item">
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/slider/1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/slider/2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/slider/3.jpg" alt="">
                    </div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="section-couple" class="no-top pasangan">
                <div class="container relative mt-60 z-index">
                    <div class="row">

                        <div class="col-md-5 col-md-offset-1 text-center">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/misc/1.jpg" alt="" class="img-responsive img-rounded wow fadeInLeft" data-wow-delay=".2s" />
                            <div class="padding40">
                                <h2><?php echo $nama_pengantin_wanita; ?></h2>
                                <p>( Anak ke-<?php echo $pengantin_wanita_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_wanita . ' & Ibu ' . $nama_ibu_pengantin_wanita ; ?> )</p>
                            </div>
                        </div>

                        <div class="col-md-5 text-center">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/misc/2.jpg" alt="" class="img-responsive img-rounded wow fadeInRight" data-wow-delay=".2s" />
                            <div class="padding40">
                                <h2><?php echo $nama_pengantin_pria; ?></h2>
                                <p>( Anak ke-<?php echo $pengantin_pria_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_pria . ' & Ibu ' . $nama_ibu_pengantin_pria ; ?> )</p>
                            </div>
                        </div>

                        <div class="col-md-2 col-md-offset-5 text-center absolute">
                            <span class="circle wow zoomIn" data-wow-delay=".8s">
								<i class="fa fa-heart"></i>
							</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-quote" aria-label="section-quote-1" class="text-light" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row wow fadeInUp">
                        <div class="col-md-8 col-md-offset-2">
                            <blockquote class="very-big text-light wow fadeIn">
                                <span><?php echo $kata_mutiara; ?></span>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section aria-label="section" class="no-bottom tanggal-event">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>You Are Invited</span></h2>
                            <h2 data-wow-delay=".2s"><?php echo hari($tanggal_resepsi); ?>, <?php echo tanggal_resepsi($tanggal_resepsi); ?></h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-event">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/misc/3.jpg" alt="" class="img-responsive img-rounded wow fadeInLeft">
                        </div>

                        <div class="col-md-5 col-md-offset-1 pt40 pb40 wow fadeIn" data-wow-delay=".5s">
                            <h3>Akad Nikah</h3>
                            <?php echo hari($tanggal_akad); ?>, <?php echo tanggal_resepsi($tanggal_akad); ?><br> <?php echo pukul($tanggal_akad); ?> WIB<br> <?php echo $tempat_akad; ?><br>
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.672778464467!2d89.55846281543346!3d22.814585729793365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901c9481c799%3A0x92f932dd6112f8ff!2sHotel+Sheraton+Buliding%2C+29+Khan+Jahan+Ali+Rd%2C+Khulna!5e0!3m2!1sen!2sbd!4v1558933503904!5m2!1sen!2sbd"
                                class="btn btn-custom mt30 popup-gmaps">View on map</a>
                        </div>
                    </div>

                    <div class="spacer-double"></div>

                    <div class="row">
                        <div class="col-md-5 pt40 pb40 text-right wow fadeIn" data-wow-delay=".5s">
                            <h3>Resepsi Pernikahan</h3>
                            <?php echo hari($tanggal_resepsi); ?>, <?php echo tanggal_resepsi($tanggal_resepsi); ?><br> <?php echo pukul($tanggal_resepsi); ?> WIB<br> <?php echo $tempat_resepsi; ?><br>
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.672778464467!2d89.55846281543346!3d22.814585729793365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901c9481c799%3A0x92f932dd6112f8ff!2sHotel+Sheraton+Buliding%2C+29+Khan+Jahan+Ali+Rd%2C+Khulna!5e0!3m2!1sen!2sbd!4v1558933503904!5m2!1sen!2sbd"
                                class="btn btn-custom mt30 popup-gmaps">View on map</a>
                        </div>

                        <div class="col-md-6 col-md-offset-1">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/misc/4.jpg" alt="" class="img-responsive img-rounded wow fadeInRight">
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-guestbook" class="text-light" data-stellar-background-ratio=".2">
                <div class="container relative">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Buku Tamu</h2>
                            <div class="spacer-single"></div>
                        </div>


                        <div id="testimonial-carousel" class="de_carousel" data-wow-delay=".3s">
                            <?php
                                if (!empty($buku_tamu)) {
                                    foreach ($buku_tamu as $key => $value) {
                            ?>
                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p><?php echo $value->pesan; ?></p>
                                        <div class="de_testi_by">
                                            <?php echo $value->nama; ?>, <?php echo $value->status; ?>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <?php
                                    }
                                }
                            ?>
                        </div>


                    </div>
                </div>
            </section>
            <!-- section close -->

            <section id="section-gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Our Gallery</h2>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12">
                            <div class="de_tab tab_style_3 text-center">
                                <ul class="de_nav">
                                    <li class="active" data-link="#section-services-tab"><span>The Wedding</span></li>
                                </ul>

                                <div class="de_tab_content">
                                    <div id="tab1" class="tab_single_content">
                                        <div class="row">

                                            <div class="col-md-4 text-center mb10">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-1/1.jpg">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-1/1.jpg" class="img-responsive img-rounded" alt="">
                                                </figure>
                                            </div>

                                            <div class="col-md-4 text-center mb10">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-1/2.jpg">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-1/2.jpg" class="img-responsive img-rounded" alt="">
                                                </figure>
                                            </div>

                                            <div class="col-md-4 text-center mb10">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-1/3.jpg">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-1/3.jpg" class="img-responsive img-rounded" alt="">
                                                </figure>
                                            </div>

                                            <div class="col-md-4 text-center mb10">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-1/4.jpg">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-1/4.jpg" class="img-responsive img-rounded" alt="">
                                                </figure>
                                            </div>

                                            <div class="col-md-4 text-center mb10">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-1/5.jpg">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-1/5.jpg" class="img-responsive img-rounded" alt="">
                                                </figure>
                                            </div>

                                            <div class="col-md-4 text-center mb10">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-1/6.jpg">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-1/6.jpg" class="img-responsive img-rounded" alt="">
                                                </figure>
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>
            <div class="container text-center text-light">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="hs1 wow fadeInUp"><?php echo $nama_panggilan_pengantin_pria; ?><span>&amp;</span><?php echo $nama_panggilan_pengantin_wanita; ?></h2>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            &copy; Copyright 2021 by <a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" id="back-to-top"></a>
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>
	
	<audio loop="loop" autoplay="autoplay">
		<source src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/music/Feels%20Like%20a%20Wedding%20Day.mp3" type="audio/mpeg" />
	</audio>

    <!-- Javascript Files
    ================================================== -->
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/easing.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.countTo.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/validation-rsvp.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/enquire.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.stellar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.plugin.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.countdown.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/countdown-custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/animsition.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/designesia.js"></script>

    <?php echo $js; ?>

</body>


<!-- Mirrored from www.designesia.com/themes/lovus/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 06:25:28 GMT -->
</html>
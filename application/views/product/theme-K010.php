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
                                <h2>Laurie<span>&amp;</span>Briant</h2>
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
                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index.html">Home</a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index.html">Wedding 1</a></li>
                                        <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/01_index_2.html">Wedding 2</a></li>
                                        <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/01_index_3.html">Wedding 3</a></li>
                                        <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/02_index.html">Wedding Planner 1</a></li>
                                        <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/02_index_2.html">Wedding Planner 2</a></li>
                                        <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/02_index_3.html">Wedding Planner 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#">About</a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/01_about-her.html">About Her</a></li>
                                        <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/01_about-him.html">About Him</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/01_story.html">Story</a></li>
                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/01_events.html">Events</a></li>
                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/01_people.html">People</a></li>
                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/01_gallery.html">Gallery</a></li>
                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/01_journal.html">Journal</a></li>
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
                            <h2 class="deco id-color"><span>We Invite You</span></h2>
                            <h2 data-wow-delay=".2s">Saturday, 25 November 2019</h2>
                        </div>

                        <div class="spacer-double"></div>

                        <div class="col-md-5 col-md-offset-1 text-right">
                            <h3>Wedding Ceremony</h3>
                            13:00 PM - 14:00 PM<br> 100 Mainstreet Center, Sydney<br>
                        </div>

                        <div class="col-md-5">
                            <h3>Wedding Reception</h3>
                            14:00 PM - 16:00 PM<br> 100 Mainstreet Center, Sydney<br>
                        </div>

                        <div class="spacer-double"></div>

                        <form name="rsvp" id='rsvp' class="form-underline" method="post" action="https://www.designesia.com/themes/lovus/rsvp.php">

                            <div class="col-md-3">
                                <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                            </div>

                            <div class="col-md-3">
                                <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                            </div>

                            <div class="col-md-3">
                                <select id="guest" name="guest" size="1" class="form-control">
								  <option value="" disabled selected>Guests</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								</select>
                            </div>

                            <div class="col-md-3">
                                <select id="attend" name="attend" size="1" class="form-control">
								  <option value="" disabled selected>Are you attending?</option>
								  <option>yes</option>
								  <option>no</option>
								</select>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="spacer-single"></div>
                                <input type='submit' id='submit' value='Submit' class="btn btn-custom">
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
            <section id="section-hero" class="full-height relative z1 owl-slide-wrapper no-top no-bottom text-light" data-stellar-background-ratio=".2">
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
                                        <h2 class="name">Laurie</h2>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <span class="deco-big" data-scroll-speed="2">&amp;</span>
                                    </div>
                                    <div class="col-md-5 text-left text-center-sm relative">
                                        <h2 class="name">Briant</h2>
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
            <section id="section-couple" class="no-top">
                <div class="container relative mt-60 z-index">
                    <div class="row">

                        <div class="col-md-5 col-md-offset-1 text-center">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/misc/1.jpg" alt="" class="img-responsive img-rounded wow fadeInLeft" data-wow-delay=".2s" />
                            <div class="padding40">
                                <h2>Laurie</h2>
                                <p>Singer, writter, chef. Love music, reading and cooking. "Love isn't something you find. Love
                                    is something that finds you."</p>
                                <!-- social icons -->
                                <div class="social-icons-sm">
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-rss"></i></a>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-google-plus"></i></a>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-envelope-o"></i></a>
                                </div>
                                <!-- social icons close -->
                            </div>
                        </div>

                        <div class="col-md-5 text-center">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/misc/2.jpg" alt="" class="img-responsive img-rounded wow fadeInRight" data-wow-delay=".2s" />
                            <div class="padding40">
                                <h2>Briant</h2>
                                <p>Hipster, designer, ilustrator. Love music and adventure. "There is only one happiness in
                                    this life, to love and be loved."</p>
                                <!-- social icons -->
                                <div class="social-icons-sm">
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-rss"></i></a>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-google-plus"></i></a>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-envelope-o"></i></a>
                                </div>
                                <!-- social icons close -->
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
                                "Love recognizes no barriers. It jumps hurdles, leaps fences, penetrates walls to arrive at its destination full of hope."
                                <span>Maya Angelou</span>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section aria-label="section" class="no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>You Are Invited</span></h2>
                            <h2 data-wow-delay=".2s">Saturday, 25 November 2019</h2>
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
                            <h3>Wedding Ceremony</h3>
                            Saturday, 25 November 2019<br> 13:00 PM - 14:00 PM<br> 100 Mainstreet Center, Sydney<br>
                            <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                class="btn btn-custom mt30 popup-gmaps">View on map</a>
                        </div>
                    </div>

                    <div class="spacer-double"></div>

                    <div class="row">
                        <div class="col-md-5 pt40 pb40 text-right wow fadeIn" data-wow-delay=".5s">
                            <h3>Wedding Reception</h3>
                            Saturday, 25 November 2019<br> 14:00 PM - 16:00 PM<br> 100 Mainstreet Center, Sydney<br>
                            <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
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
                            <h2>Guest Book</h2>
                            <div class="spacer-single"></div>
                        </div>


                        <div id="testimonial-carousel" class="de_carousel" data-wow-delay=".3s">

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>To a special couple who show that love can be true and forever. May your lives continue
                                            to grow in love and happiness together!</p>
                                        <div class="de_testi_by">
                                            John, Friend
                                        </div>
                                    </blockquote>

                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Wedding wishes for my dear friends. I hope your life together will be filled with
                                            joy, happiness and lots of love!</p>
                                        <div class="de_testi_by">
                                            Sarah, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Hope you will have a long and happy life together. Always treat each other better
                                            than you want to be treated.</p>
                                        <div class="de_testi_by">
                                            Michael, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>I wish you a wonderful life together as you head down the road to married happiness.
                                            So happy for you!</p>
                                        <div class="de_testi_by">
                                            Jenny, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
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
                                    <li data-link="#section-services-tab"><span>Our Best Friends</span></li>
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

                                    <div id="tab2" class="tab_single_content">
                                        <div class="row">

                                            <div class="col-md-4 text-center mb10">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-3/1.jpg">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-3/1.jpg" class="img-responsive img-rounded" alt="">
                                                </figure>
                                            </div>

                                            <div class="col-md-4 text-center mb10">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-3/2.jpg">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-3/2.jpg" class="img-responsive img-rounded" alt="">
                                                </figure>
                                            </div>

                                            <div class="col-md-4 text-center mb10">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-3/3.jpg">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-3/3.jpg" class="img-responsive img-rounded" alt="">
                                                </figure>
                                            </div>

                                            <div class="col-md-4 text-center mb10">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-3/4.jpg">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-3/4.jpg" class="img-responsive img-rounded" alt="">
                                                </figure>
                                            </div>

                                            <div class="col-md-4 text-center mb10">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-3/5.jpg">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-3/5.jpg" class="img-responsive img-rounded" alt="">
                                                </figure>
                                            </div>

                                            <div class="col-md-4 text-center mb10">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-3/6.jpg">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/category-3/6.jpg" class="img-responsive img-rounded" alt="">
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
                        <h2 class="hs1 wow fadeInUp">Laurie<span>&amp;</span>Briant</h2>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            &copy; Copyright 2019 - Lovus by Designesia
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

</body>


<!-- Mirrored from www.designesia.com/themes/lovus/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 06:25:28 GMT -->
</html>
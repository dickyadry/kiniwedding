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

    <!--=======================================
      All Css Style link
    ===========================================-->

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for this template -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Flat Icon for this template -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/wedding-icon-font/flaticon.css" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playball&amp;display=swap" rel="stylesheet">

    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.theme.default.min.css">

    <!-- Veno Box Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/venobox.css" type="text/css" media="screen" />

    <!-- Animate Css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/animate.min.css">

    <!-- Mean Menu/Mobile Menu Css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/meanmenu.min.css">

    <!-- Preloader Css-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/fakeLoader.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css" rel="stylesheet">

</head>

<body>

<!-- Preloader -->
    <div class="fakeLoader"></div>
<!-- Preloader -->

<!--Main Menu/ Mobile Menu Section-->
<section class="menu-section-area">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  fixed-top d-none d-sm-none d-md-block d-lg-block d-xl-block" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/logo.png" alt="logo"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bride-groom.html">Bride & Groom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="story.html">story</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown">Gallery<i class="fas fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery.html">Masonary Gallery Page</a></li>
                            <li><a href="gallery-classic.html">Classic Gallery Page</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rsvp.html">RSVP</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown">Friends<i class="fas fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="friends.html">Friends Style 1</a></li>
                            <li><a href="friends-2.html">Friends Style 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown">Pages<i class="fas fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery-classic.html">Classic Gallery Page</a></li>
                            <li><a href="single-blog.html">Single Blog Page</a></li>
                            <li><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown">Blog<i class="fas fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="single-blog.html">Single Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="location.html">LOcation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- Mobile Menu Start -->
    <nav class="mobile_menu hidden d-none">
        <a href="index.html"><img class="mobile-logo" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/logo.png" alt="Wedding"></a>
        <ul class="nav navbar-nav navbar-right menu">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bride-groom.html">Bride & Groom</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="story.html">story</a>
            </li>
            <li class="dropdown">
                <a>Gallery</a>
                <ul class="sub_menu">
                    <li><a href="gallery.html">Gallery Page</a></li>
                    <li><a href="gallery-classic.html">Classic Gallery Page</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rsvp.html">RSVP</a>
            </li>
            <li class="dropdown">
                <a>Friends</a>
                <ul class="sub_menu">
                    <li><a href="friends.html">Friends Style 1</a></li>
                    <li><a href="friends-2.html">Friends Style 2</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a>Pages</a>
                <ul class="sub_menu">
                    <li><a href="gallery-classic.html">Classic Gallery Page</a></li>
                    <li><a href="single-blog.html">Single Blog Page</a></li>
                    <li><a href="404.html">404 Page</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a>Blog</a>
                <ul class="sub_menu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="single-blog.html">Single Blog</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="location.html">Location</a>
            </li>
        </ul>
    </nav>
    <!-- Mobile Menu End -->
</section>
<!--Main Menu/ Mobile Menu Section-->

<!-- Header Start -->
<header class="home-banner-area">
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
                        <h1 class="header-caption-heading font-playball color-pink text-capitalize">Mark & Alice</h1>
                        <p class="text-capitalize font-playball color-dark">February 15, 2028</p>
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
<section class="bride-groom-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading">Bride & Groom</h2>
                <img class="heading-divider" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/divider.png" alt="divider">
                <h3 class="section-subheading">Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. </h3>
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
                        <a href="bride-groom.html"><h3>Alice</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio arcu, aliquet quis sem nec, tristique varius purus. Nulla facilisi. Integer pretium tortor nec purus sollicitudin condimentum.</p>
                        <div class="bride-groom-social text-center">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
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
                        <a href="bride-groom.html"><h3>Mark</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio arcu, aliquet quis sem nec, tristique varius purus. Nulla facilisi. Integer pretium tortor nec purus sollicitudin condimentum.</p>
                        <div class="bride-groom-social text-center">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bride Groom Box end-->

        </div>
    </div>
</section>
<!-- Bride and Groom Area End -->

<!--Love Story Area Start-->
<section class="love-story-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading">Love Story</h2>
                <img class="heading-divider" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/divider.png" alt="divider">
                <h3 class="section-subheading">Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. </h3>
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
                            <h4>Our First Proposed <span>01</span></h4>
                            <h5>21 sept 2019</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio arcu, aliquet quis sem nec, tristique varius purus. Nulla facilisi. </p>
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
                            <h4>Our First Meet <span>02</span></h4>
                            <h5>20 sept 2019</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio arcu, aliquet quis sem nec, tristique varius purus. Nulla facilisi. </p>
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
                            <h4>Living Together <span>03</span></h4>
                            <h5>23 october 2019</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio arcu, aliquet quis sem nec, tristique varius purus. Nulla facilisi. </p>
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
                            <h4>First “I Love You” <span>04</span></h4>
                            <h5>22 sept 2019</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio arcu, aliquet quis sem nec, tristique varius purus. Nulla facilisi. </p>
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
<section class="our-gallery-area">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading">Our Gallery</h2>
                <img class="heading-divider" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/divider.png" alt="divider">
                <h3 class="section-subheading">Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. </h3>
            </div>
        </div>

        <!--Our Gallery Button Start-->
        <div class="row mb-5">
            <div class="col-12">
                <div class="gallery-filter-btn btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
                    <label class="btn btn-sm position-relative active">
                        <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
                    </label>
                    <label class="btn btn-sm position-relative">
                        <input type="radio" name="shuffle-filter" value="bride" />Bride
                    </label>
                    <label class="btn btn-sm position-relative">
                        <input type="radio" name="shuffle-filter" value="groom" />Groom
                    </label>
                    <label class="btn btn-sm position-relative">
                        <input type="radio" name="shuffle-filter" value="story" />Love Story
                    </label>
                    <label class="btn btn-sm position-relative">
                        <input type="radio" name="shuffle-filter" value="friends" />Friends
                    </label>
                    <label class="btn btn-sm position-relative">
                        <input type="radio" name="shuffle-filter" value="party" />Party
                    </label>
                </div>
            </div>
        </div>
        <!--Our Gallery Button End-->

        <!--Our Gallery image Start-->
        <div class="row shuffle-wrapper">
            <div class="col-lg-4 col-6 bottom-margin shuffle-item" data-groups="[&quot;bride&quot;,&quot;groom&quot;]">
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
            <div class="col-lg-4 col-6 bottom-margin shuffle-item" data-groups="[&quot;story&quot;]">
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
            <div class="col-lg-4 col-6 bottom-margin shuffle-item" data-groups="[&quot;friends&quot;]">
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
            <div class="col-lg-4 col-6 bottom-margin shuffle-item" data-groups="[&quot;party&quot;,&quot;bride&quot;]">
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
            <div class="col-lg-4 col-6 bottom-margin shuffle-item" data-groups="[&quot;story&quot;]">
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

            <div class="col-lg-4 col-6 bottom-margin shuffle-item" data-groups="[&quot;groom&quot;]">
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
            <div class="col-lg-4 col-6 bottom-margin shuffle-item" data-groups="[&quot;party&quot;]">
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

            <div class="col-lg-4 col-6 bottom-margin shuffle-item" data-groups="[&quot;bride&quot;,&quot;groom&quot;,&quot;story&quot;]">
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

            <div class="col-lg-4 col-6 bottom-margin shuffle-item" data-groups="[&quot;bride&quot;,&quot;groom&quot;,&quot;story&quot;]">
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
<section class="rsvp-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading">RSVP</h2>
                <img class="heading-divider" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/divider.png" alt="divider">
                <h3 class="section-subheading">Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. </h3>
            </div>
        </div>
        <div class="row">
            <!-- RSVP Area Start -->
            <div class="rsvp-form-area">
                <form action="#">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" id="name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email" id="user-email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Guest" id="guest">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Ceremony & Party" id="ceremony">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group nessage-text">
                                <textarea name="message" rows="5" class="form-control" placeholder="Share Something..." id="message"></textarea>
                            </div>
                            <div class="rsvp-submit-button text-center">
                                <button  type="button" class="btn section-button text-uppercase">RSVP</button>
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

<!-- Our Best Friends Area Start -->
<section class="our-best-friends-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading">Our Best Friends</h2>
                <img class="heading-divider" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/divider.png" alt="divider">
                <h3 class="section-subheading">Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. </h3>
            </div>
        </div>
        <div class="row">

            <!-- single friends start-->
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-friend">
                    <div class="friend-box">
                        <figure class="friend-photo-box position-relative">
                            <div class="friend-p-wrap"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/our-best-friends-img/1.png" alt="story"></div>
                        </figure>
                    </div>
                    <div class="friend-content text-center">
                        <h3 class="friend-name">Mary</h3>
                        <p class="friend-identity">Groomman</p>
                        <div class="friend-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single friends end-->

            <!-- single friends start-->
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-friend">
                    <div class="friend-box">
                        <figure class="friend-photo-box position-relative">
                            <div class="friend-p-wrap"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/our-best-friends-img/2.png" alt="story"></div>
                        </figure>
                    </div>
                    <div class="friend-content text-center">
                        <h3 class="friend-name">Jack</h3>
                        <p class="friend-identity">Brideman</p>
                        <div class="friend-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single friends end-->

            <!-- single friends start-->
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-friend">
                    <div class="friend-box">
                        <figure class="friend-photo-box position-relative">
                            <div class="friend-p-wrap"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/our-best-friends-img/3.png" alt="story"></div>
                        </figure>
                    </div>
                    <div class="friend-content text-center">
                        <h3 class="friend-name">Charlotte</h3>
                        <p class="friend-identity">Groomman</p>
                        <div class="friend-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single friends end-->

            <!-- single friends start-->
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="single-friend">
                    <div class="friend-box">
                        <figure class="friend-photo-box position-relative">
                            <div class="friend-p-wrap"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/our-best-friends-img/4.png" alt="story"></div>
                        </figure>
                    </div>
                    <div class="friend-content text-center">
                        <h3 class="friend-name">David</h3>
                        <p class="friend-identity">Brideman</p>
                        <div class="friend-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single friends end-->

        </div>
    </div>
</section>
<!-- Our Best Friends Area End -->

<!-- Friends Says Area Start -->
<section class="friends-says-area padding-zero">
    <div class="section-overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section-heading">Friends Says</h2>
                    <img class="heading-divider" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/white-divider.png" alt="divider">
                </div>
            </div>
            <div class="row">
                <div class="friends-says-slider owl-carousel">

                    <!-- single trainer start-->
                    <div class="item">
                        <div class="single-friend-slide-box">
                            <div class="friend-says-img">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/friends-says-slider/1.jpg" alt="friends says img">
                                <span>
                                    <i class="flaticon-left-quote-1"></i>
                                </span>
                            </div>
                            <div class="friend-says-content text-center">
                                <h2>Zoey</h2>
                                <h5 class="color-white">“Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum.”</h5>
                            </div>

                        </div>
                    </div>
                    <!-- single trainer end-->

                    <!-- single trainer start-->
                    <div class="item">
                        <div class="single-friend-slide-box">
                            <div class="friend-says-img">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/friends-says-slider/2.jpg" alt="friends says img">
                                <span>
                                    <i class="flaticon-left-quote-1"></i>
                                </span>
                            </div>
                            <div class="friend-says-content text-center">
                                <h2>Jolly</h2>
                                <h5 class="color-white">“Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum.”</h5>
                            </div>

                        </div>
                    </div>
                    <!-- single trainer end-->

                    <!-- single trainer start-->
                    <div class="item">
                        <div class="single-friend-slide-box">
                            <div class="friend-says-img">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/friends-says-slider/1.jpg" alt="friends says img">
                                <span>
                                    <i class="flaticon-left-quote-1"></i>
                                </span>
                            </div>
                            <div class="friend-says-content text-center">
                                <h2>Zoey</h2>
                                <h5 class="color-white">“Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum.”</h5>
                            </div>

                        </div>
                    </div>
                    <!-- single trainer end-->

                </div>

                <!-- Next/Preview Button Start-->
                <div class="friends_slide_nav">
                    <span class="testi_prev">
                        <i class="flaticon-left-arrow"></i>
                    </span>
                    <span class="testi_next">
                        <i class="flaticon-right-arrow"></i>
                    </span>
                </div>
                <!-- Next/Preview Button End-->

            </div>
        </div>
    </div>
</section>
<!-- Friends Says Area End -->

<!-- planners Area Start -->
<section class="planners-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section-heading">Planners</h2>
                <img class="heading-divider" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/divider.png" alt="divider">
                <h3 class="section-subheading">Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum. </h3>
            </div>
        </div>
        <div class="row">

            <div class="planners-slider owl-carousel">

                <!-- Single Planners Logo start-->
                <div class="item">
                    <div class="single-partner-logo-box">
                        <a href="#" target="_blank"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/planners-img/1.jpg" alt="planners Logo img"></figure></a>
                    </div>
                </div>
                <!-- Single Partner Logo end-->

                <!-- Single Planners Logo start-->
                <div class="item">
                    <div class="single-partner-logo-box">
                        <a href="#" target="_blank"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/planners-img/2.jpg" alt="planners Logo img"></figure></a>
                    </div>
                </div>
                <!-- Single Partner Logo end-->

                <!-- Single Planners Logo start-->
                <div class="item">
                    <div class="single-partner-logo-box">
                        <a href="#" target="_blank"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/planners-img/3.jpg" alt="planners Logo img"></figure></a>
                    </div>
                </div>
                <!-- Single Partner Logo end-->

                <!-- Single Planners Logo start-->
                <div class="item">
                    <div class="single-partner-logo-box">
                        <a href="#" target="_blank"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/planners-img/4.jpg" alt="planners Logo img"></figure></a>
                    </div>
                </div>
                <!-- Single Partner Logo end-->

                <!-- Single Planners Logo start-->
                <div class="item">
                    <div class="single-partner-logo-box">
                        <a href="#" target="_blank"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/planners-img/5.jpg" alt="planners Logo img"></figure></a>
                    </div>
                </div>
                <!-- Single Partner Logo end-->

                <!-- Single Planners Logo start-->
                <div class="item">
                    <div class="single-partner-logo-box">
                        <a href="#" target="_blank"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/planners-img/6.jpg" alt="planners Logo img"></figure></a>
                    </div>
                </div>
                <!-- Single Partner Logo end-->

                <!-- Single Planners Logo start-->
                <div class="item">
                    <div class="single-partner-logo-box">
                        <a href="#" target="_blank"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/planners-img/2.jpg" alt="planners Logo img"></figure></a>
                    </div>
                </div>
                <!-- Single Partner Logo end-->

            </div>

        </div>
    </div>
</section>
<!-- planners Area End -->

<!-- Footer Start -->
<footer class="footer">
    <!-- Footer Upper Area Start-->
    <div class="footer-upper-area">
        <div class="container">
            <!-- Row Start-->
            <div class="row">

                <!-- Column Start-->
                <div class="col-12 col-sm-8 col-md-8 col-lg-4">
                    <div class="footer-about">
                        <a href="index.html"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/logo.png" alt="logo"></a>
                        <p>Pellentesque convallis, diam et feugiat volutpat, tellus ligula consequat augue, quis malesuada nisi ante nec metus. Sed id pretium nunc. Mauris vitae porttitor tortor. Fusce aliquet ac metus eget egestas. </p>
                        <form class="form-inline">
                            <input type="email" class="form-control" id="newsletter_email" placeholder="Enter your email">
                            <button type="submit" class="btn">
                                <i class="flaticon-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Column End-->

                <!-- Column Start-->
                <div class="col-12 col-sm-4 col-md-4 col-lg-2">
                    <div class="footer-widget quick-links">
                        <h4 class="text-uppercase">Quick Links</h4>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="bride-groom.html">Bride & Groom</a></li>
                            <li><a href="location.html">Locations</a></li>
                            <li><a href="rsvp.html">RSVP</a></li>
                            <li><a href="story.html">Our Story</a></li>
                            <li><a href="index.html">Events</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Column End-->

                <!-- Column Start-->
                <div class="col-12 col-sm-8 col-md-8 col-lg-4">
                    <div class="footer-widget footer-recent-posts">
                        <h4 class="text-uppercase">Recent Post</h4>
                        <ul>
                            <li><a href="single-blog.html"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/footer-img/recent-post1.jpg" alt="recent"></figure><p>Pellentesque convallis, diam et feugiat volutpat, tellus<span>Sep 09, 2019</span></p></a></li>
                            <li><a href="single-blog.html"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/footer-img/recent-post2.jpg" alt="recent"></figure><p>Praesent vehicula odio ut erat posuere, nec malesuada dolor<span>Sep 06, 2019</span></p></a></li>
                            <li><a href="single-blog.html"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/footer-img/recent-post3.jpg" alt="recent"></figure><p>Nulla rhoncus condimentum ante, molestie mattis lorem<span>Sep 02, 2019</span></p></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Column End-->

                <!-- Column Start-->
                <div class="col-12 col-sm-4 col-md-4 col-lg-2">
                    <div class="footer-widget footer-gallery">
                        <h4 class="text-uppercase">Our Gallery</h4>
                        <ul>
                            <li><a href="gallery.html"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/footer-img/gallery1.jpg" alt="gallery"></figure></a></li>
                            <li><a href="gallery.html"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/footer-img/gallery2.jpg" alt="gallery"></figure></a></li>
                            <li><a href="gallery.html"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/footer-img/gallery3.jpg" alt="gallery"></figure></a></li>
                            <li><a href="gallery.html"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/footer-img/gallery4.jpg" alt="gallery"></figure></a></li>
                            <li><a href="gallery.html"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/footer-img/gallery5.jpg" alt="gallery"></figure></a></li>
                            <li><a href="gallery.html"><figure><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/footer-img/gallery6.jpg" alt="gallery"></figure></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Column End-->

            </div>
            <!-- Row End-->
        </div>
    </div>
    <!--  Footer Upper Area End-->

    <!-- Footer Bottom Area Start-->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footer-bottom-part">
                        <div class="copyright"><a href="https://anditthemes.com/">And IT Themes</a> &copy; 2019. All Rights Reserved</div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Footer Bottom Area End-->

</footer>
<!-- Footer End -->

<!--=======================================
    All Jquery Script link
===========================================-->

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- ==== Plugin JavaScript ==== -->

<!-- jQuery owl carousel -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/owl.carousel.min.js"></script>

<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!--  Counter Down JavaScript-->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.lwtCountdown-1.0.js"></script>

<!--VenoBox Script-->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/venobox.min.js"></script>

<!-- Include Shuffle Plugins -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/shuffle.min.js"></script>

<!-- Shuffle Custom JS -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/shuffle-custom.js"></script>

<!--WOW JS Script-->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/wow.min.js"></script>

<!--Mean Menu/Mobile Menu Script-->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.meanmenu.min.js"></script>

<!-- Preloader -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/fakeLoader.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/custom.js"></script>

</body>


<!-- Mirrored from andit.co/projects/html/pair/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 07:54:54 GMT -->
</html>
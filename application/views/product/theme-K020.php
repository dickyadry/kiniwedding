<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
    <meta name="description" content="">
   <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">

    <!-- >> CSS
============================================================================== -->
    <!-- Bootstrap styles -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- /Bootstrap Styles -->
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">    
    <!-- /google web fonts -->
    <!-- owl carousel -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <!-- /owl carousel -->
    <!-- fancybox.css -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/animate.css" rel="stylesheet">
    <!-- /fancybox.css -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/font-awesome/css/font-awesome.min.css">
    <!-- /Font Awesome -->
    <!-- Simple Lightbox -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/simplelightbox/dist/simplelightbox.min.css">    
    <!-- /Simple Lightbox -->
    <!-- Main Styles -->
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/styles.css" rel="stylesheet">
    <!-- /Main Styles -->
    <!-- >> /CSS
============================================================================== -->
</head>

<body>
<!-- Page Loader
========================================================= -->
<div class="loader" id="page-loader"> 
  <div class="loading-wrapper">
    <div class="loader-heart loader-heart1"></div>
    <div class="loader-heart loader-heart2"></div>
    <div class="loader-heart loader-heart3"></div>
  </div>   
</div>
<!-- /End of Page loader
========================================================= -->
<!-- Header
================================================== -->
<header id="masthead" class="site-header" >    
        <!-- Main header -->
        <div class="container">     
            <!-- Navbar Header -->
            <div class="row">

                <!-- Main Navigation -->
                <div class="col-xs-12">

                <nav class="navbar navbar-default" > 

                        <!-- Brand and toggle get grouped for better mobile display --> 
                        <div class="navbar-header"> 
                            <!-- Mobile Menu Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                                <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button> 
                            <!-- /Mobile Menu Button -->

                            <!-- Logo -->
                            <div class="header-logo">
                                <p class="site-title">
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index.html" rel="home">Anna &amp; James</a>
                                </p>                                
                            </div> 
                            <!-- /logo -->
                        </div> 
                        <!-- / Brand and toggle --> 

                        <!-- Navigation --> 
                        <div class="collapse navbar-collapse"> 
                            <ul class="nav navbar-nav navbar-right">
                                <li><a title="Story" href="#wedding-bio">About Us</a></li>
                                <li><a title="Story" href="#story">Story</a></li>
                                <li><a title="Story" href="#special-events">Ceremony</a></li>
                                <li><a title="Story" href="#gallery">Gallery</a></li>
                                <li><a title="Story" href="#gifts">Gifts</a></li>
                                <li><a title="Story" href="#rsvp">RSVP</a></li>
                            </ul>                           
                        </div>                      
                        <!-- /navigation -->
                    </nav>
                </div>
                <!-- Main Navigation -->    

            </div> 
            <!-- /Navbar Header -->  
        </div>
        <!-- /Main header -->
    </header>
<!-- / Header
================================================== -->

<!-- Main Content
================================================== -->
<div id="content" class="site-content">
    <div id="primary" class="">

        <!-- SECTION: Slideshow -->
        <div class="section-slideshow" id="slideshow">
             <div class="owl-carousel main-carousel owl-theme">
                <!-- Slide -->
                <div class="featured-slide slide bg-cover viewport" style="background-image: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/home-banner-slide1.jpg');">
                    <div class="slide-inner">
                        <div class="slide-icon active"></div>
                        <h1 class="slide-title active">Anna &amp; James</h1>
                        <p class="slide-text active">Will be the happiest couple in the world in:</p>
                        <div class="slide-extra">
                            <!-- countdown (edit date on main.js file)-->
                            <div class="bearr-countdown-wrapper">
                                <div id="bearr-countdown-item" class="bearr-countdown-item"></div>
                            </div>
                            <!-- /countdown -->
                        </div>
                    </div>
                </div>
                <!-- /Slide -->
            </div>
        </div>       
        <!-- /SECTION: Slideshow -->

        <!-- SECTION: Wedding Bio -->
        <div class="section section-wedding-bio" id="wedding-bio">
            <div class="container">
                <!-- Section Title -->
                <div class="title-section-wrapper">
                    <!-- Title -->
                    <h2 class="title-section">She and He</h2>
                    <!-- /title -->
                    <!-- Text -->
                    <p class="text-section">Consectetur adipiscing elit. Inteiro odio urna, vestíbulo elementum magna vel erat sagittis</p>
                    <!-- /text -->
                </div>
                <!-- /Section Title -->

                <!-- Wedding Bio -->
                <div class="row wedding-bio-wrapper">
                    <!-- Wedding Bio Item -->
                    <div class="col-sm-6">
                        <div class="wedding-bio-item wedding-bio-item-bride">
                            <!-- Picture -->
                            <figure class="wedding-bio-image"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/about-item-img.jpg" alt="" class="responsive-image"></figure>
                            <!-- / Picture -->
                            <div class="wedding-bio-content">
                                <!-- name -->
                                <h2 class="heading wedding-bio-title"><span>ANNA</span>BRAVERICK</h2>
                                <!-- /Name -->
                                <!-- Description -->
                                <div class="wedding-bio-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer odio urna, maximus bibendum pulvinar eu, molestie eu arcu. Vestibulum elementum magna vel erat sagittis egestas. Vestibulum aliquam, ex eu vulputate porta.</p>
                                </div>
                                <!-- /Description -->
                            </div>
                        </div>
                    </div>
                    <!-- / Wedding Bio Item -->
                    <!-- Wedding Bio Item -->
                    <div class="col-sm-6">
                        <div class="wedding-bio-item wedding-bio-item-groom">
                            <figure class="wedding-bio-image"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/about-item-img2.jpg" alt="" class="responsive-image"></figure>
                            <div class="wedding-bio-content">
                                <h2 class="heading wedding-bio-title"><span>JAMES</span>MCFILTH</h2>
                                <div class="wedding-bio-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer odio urna, maximus bibendum pulvinar eu, molestie eu arcu. Vestibulum elementum magna vel erat sagittis egestas. Vestibulum aliquam, ex eu vulputate porta.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Wedding Bio Item -->
                </div>
                <!-- /Wedding Bio -->
            </div>
            
        </div>
        <!-- /SECTION: Wedding Bio -->

        <!-- SECTION: Testimonials -->
        <div class="section section-testimonials-wrapper" style="background-image: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/testimonials-bg.jpg');">
            <div class="container">
                <!-- Testimonials Carousel -->
                <div class="section-testimonials text-light">
                    <div class="owl-carousel testimonial-carousel common-carousel owl-theme">
                        <!-- Testimonial Item -->
                        <div class="slide">
                            <div class="testimonial-item">
                                <blockquote>
                                    <!-- TEstimonial Text -->
                                    <p>Lorem ipsum dolor sit amet, consectetur elit.Nullam scelerisque sodales nisi, turpis.</p>
                                    <!-- /Testimonial Text -->
                                    <!-- Testimonial Author -->
                                    <footer><cite>Lauren Yotta</cite></footer>
                                    <!-- /Testimonial Author -->
                                </blockquote>
                            </div>
                        </div>
                        <!-- / Testimonial Item -->   
                        <!-- Testimonial Item -->
                        <div class="slide">
                            <div class="testimonial-item">
                                <blockquote>
                                    <!-- TEstimonial Text -->
                                    <p>Lorem ipsum dolor sit amet, consectetur elit.Nullam scelerisque sodales nisi, turpis.</p>
                                    <!-- /Testimonial Text -->
                                    <!-- Testimonial Author -->
                                    <footer><cite>Karen Aiello</cite></footer>
                                    <!-- /Testimonial Author -->
                                </blockquote>
                            </div>
                        </div>
                        <!-- / Testimonial Item -->               
                    </div>
                </div>
                <!-- /Testimonials Carousel -->
            </div>
        </div>
        <!-- /SECTION: Testimonials -->

        <!-- SECTION: Our Story -->
        <div class="section section-our-story" id="story">
            <div class="container">

                <!-- Section Title -->
                <div class="title-section-wrapper">
                    <!-- Title -->
                    <h2 class="title-section">Our Story</h2>
                    <!-- /title -->
                    <!-- Text -->
                    <p class="text-section">Consectetur adipiscing elit. Inteiro odio urna, vestíbulo elementum magna vel erat sagittis</p>
                    <!-- /text -->
                </div>
                <!-- /Section Title -->

                <!-- Timeline item -->
                <div class="row story-wrap ">
                    <!-- Item description -->
                    <div class="col-sm-6 " data-match-height="StoryItem">                        
                        <div class="story-item">
                            <!-- Image -->
                            <div class="story-item-img">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img1.jpg" alt="" class="responsive-image">
                            </div>
                            <!-- /image -->
                            <!-- content -->
                            <div class="story-item-content">
                                <h2 class="story-item-title">HE MADE THE FIRST STEP!</h2>
                                <div class="story-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus convallis diam at iaculis pharetra. Nulla facilisi. Sed aliquet aliquam dolor ut ultricies. Cras elit orci, egestas sit amet nisi sed, euismod efficitur lacus. Proin dictum enim nunc, sit amet rhoncus nisl accumsan sit amet. Suspendisse potenti. Donec erat augue, scelerisque ac justo dictum, viverra aliquam est.</p>
                                </div>
                            </div>
                            <!-- /content -->
                        </div>
                    </div>
                    <!-- / Item description -->
                    <!-- Item Date -->
                    <div class="col-sm-6 story-date-wrap" data-match-height="StoryItem">
                        <div class="story-date">
                            <div class="story-time">May 19, 2014</div>
                        </div>
                    </div>
                    <!-- /item date -->
                </div>
                <!-- /Timeline item -->

                <!-- Timeline Item -->
                <div class="row story-wrap ">
                    <!-- /Item description -->
                    <div class="col-sm-6 col-sm-push-6 " data-match-height="StoryItem">
                        <div class="story-item story-item-alt  ">
                            <!-- Item Image -->
                            <div class="story-item-img">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img2.jpg" alt="" class="responsive-image">
                            </div>
                            <!-- /Item image -->
                            <!-- Item Content -->
                            <div class="story-item-content">
                                <h2 class="story-item-title">PLANNING OUR TRIP</h2>
                                <div class="story-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus convallis diam at iaculis pharetra. Nulla facilisi. Sed aliquet aliquam dolor ut ultricies. Cras elit orci, egestas sit amet nisi sed, euismod efficitur lacus. Proin dictum enim nunc, sit amet rhoncus nisl accumsan sit amet. Suspendisse potenti. Donec erat augue, scelerisque ac justo dictum, viverra aliquam est.</p>
                                </div>
                            </div>
                            <!-- /Item Content -->
                        </div>
                    </div>
                    <!-- /Item description -->
                    <!-- item date -->
                    <div class="col-sm-6 story-date-wrap story-date-wrap-alt col-sm-pull-6 " data-match-height="StoryItem">
                        <div class="story-date">
                            <div class="story-time">February 02, 2015</div>
                        </div>
                    </div>
                    <!-- /item date -->
                </div>
                <!-- /Timeline Item -->

                <!-- Timeline item -->
                <div class="row story-wrap ">
                    <!-- Item description -->
                    <div class="col-sm-6 " data-match-height="StoryItem">                        
                        <div class="story-item">
                            <!-- Image -->
                            <div class="story-item-img">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/story-img3.jpg" alt="" class="responsive-image">
                            </div>
                            <!-- /image -->
                            <!-- content -->
                            <div class="story-item-content">
                                <h2 class="story-item-title">OUR BEAUTIFUL BRIDESMAIDS</h2>
                                <div class="story-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus convallis diam at iaculis pharetra. Nulla facilisi. Sed aliquet aliquam dolor ut ultricies. Cras elit orci, egestas sit amet nisi sed, euismod efficitur lacus. Proin dictum enim nunc, sit amet rhoncus nisl accumsan sit amet. Suspendisse potenti. Donec erat augue, scelerisque ac justo dictum, viverra aliquam est.</p>
                                </div>
                            </div>
                            <!-- /content -->
                        </div>
                    </div>
                    <!-- / Item description -->
                    <!-- Item Date -->
                    <div class="col-sm-6 story-date-wrap" data-match-height="StoryItem">
                        <div class="story-date">
                            <div class="story-time">August 30, 2016</div>
                        </div>
                    </div>
                    <!-- /item date -->
                </div>
                <!-- /Timeline item -->               

            </div>
        </div>
        <!-- /SECTION: Our Story -->

        <!-- SECTION: Events -->
        <div class="section with-dark-bg section-events" id="special-events" style="background-image: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/special-event-bg.jpg');">
            <div class="container">

                <!-- Section Title -->
                <div class="title-section-wrapper">
                    <!-- Title -->
                    <h2 class="title-section">OUR SPECIAL EVENTS</h2>
                    <!-- /title -->
                    <!-- Text -->
                    <p class="text-section">Consectetur adipiscing elit. Inteiro odio urna, vestíbulo elementum magna vel erat sagittis</p>
                    <!-- /text -->
                </div>
                <!-- /Section Title -->

                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-sm-6">
                        <!-- Event Item -->
                        <div class="events-reminder-item">
                            <header>
                                <h3 class="events-item-heading">MAIN CEREMONY</h3>
                            </header>
                            <div class="events-item-content">
                                <ul>
                                    <li>
                                        <span class="events-reminder-item-icon events-reminder-item-icon-time"></span><span class="events-reminder-time-content">16:00 PM</span>
                                    </li>
                                    <li>
                                        <span class="events-reminder-item-icon events-reminder-item-icon-date"></span><span class="events-reminder-date-content">Saturday 12 - July 2016</span>
                                    </li>
                                    <li>
                                        <span class="events-reminder-item-icon events-reminder-item-icon-address"></span><span class="events-reminder-date-address">Amentel Avenue 343 - NY</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Event Item -->
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-sm-6">
                        <!-- Event Item -->
                        <div class="events-reminder-item">
                            <header>
                                <h3 class="events-item-heading">WEDDING PARTY</h3>
                            </header>
                            <div class="events-item-content">
                                <ul>
                                    <li>
                                        <span class="events-reminder-item-icon events-reminder-item-icon-time"></span><span class="events-reminder-time-content">16:00 PM</span>
                                    </li>
                                    <li>
                                        <span class="events-reminder-item-icon events-reminder-item-icon-date"></span><span class="events-reminder-date-content">Saturday 12 - July 2016</span>
                                    </li>
                                    <li>
                                        <span class="events-reminder-item-icon events-reminder-item-icon-address"></span><span class="events-reminder-date-address">Amentel Avenue 343 - NY</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Event Item -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->


            </div>
           
        </div>
        <!-- / SECTION: Events -->

        <!-- Gallery -->
        <div class="section section-gallery" id="gallery">
            
            <!-- Section Title -->
            <div class="title-section-wrapper">
                <!-- Title -->
                <h2 class="title-section">Gallery</h2>
                <!-- /title -->
                <!-- Text -->
                <p class="text-section">Consectetur adipiscing elit. Inteiro odio urna, vestíbulo elementum magna vel erat sagittis</p>
                <!-- /text -->
            </div>
            <!-- /Section Title -->

            <!-- Gallery Images -->
            <div class="gallery-images row">
            <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img2.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img2.jpg" alt="Gallery Image"></a></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img5.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img5.jpg" alt="Gallery Image"></a></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img8.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img8.jpg" alt="Gallery Image"></a></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img7.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img7.jpg" alt="Gallery Image"></a></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img1.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img1.jpg" alt="Gallery Image"></a></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img7.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img7.jpg" alt="Gallery Image"></a></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img2.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img2.jpg" alt="Gallery Image"></a></div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 no-space">
                <div class="bearr-gallery-item"><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img8.jpg"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/gallery-img8.jpg" alt="Gallery Image"></a></div>
            </div>            
        </div>
            <!-- /Gallery Images -->
        </div>
        <!-- /Gallery -->

        <!-- Gift List -->
        <div class="section section-gift-list" id="gifts">
            
            <div class="container">
                
                <!-- Section Title -->
                <div class="title-section-wrapper">
                    <!-- Title -->
                    <h2 class="title-section">Gift List</h2>
                    <!-- /title -->
                    <!-- Text -->
                    <p class="text-section">Consectetur adipiscing elit. Inteiro odio urna, vestíbulo elementum magna vel erat sagittis</p>
                    <!-- /text -->
                </div>
                <!-- /Section Title -->

                <!-- Gift list -->
                <div class="owl-carousel-wrapper clients-carousel-wrapper">
                    <div class="owl-carousel clients-carousel common-carousel special-carousel owl-theme owl-loaded">
                        <!-- item -->
                        <div class="slide">
                            <div class="client-item text-center">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" target="_blank"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/client1.png" alt="Client Logo"></a>
                            </div>
                        </div>
                        <!-- /item -->
                        
                        <!-- item -->
                        <div class="slide">
                            <div class="client-item text-center">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/http://themebear.co/" target="_blank"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/client2.png" alt="Client Logo"></a>
                            </div>
                        </div>
                        <!-- /item -->
                        
                        <!-- item -->
                        <div class="slide">
                            <div class="client-item text-center">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" target="_blank"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/client3.png" alt="Client Logo"></a>
                            </div>
                        </div>
                        <!-- /item -->
                  
                        <!-- item -->
                        <div class="slide">
                            <div class="client-item text-center">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" target="_blank"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/client4.png" alt="Client Logo"></a>
                            </div>
                        </div>
                        <!-- /item -->

                        <!-- item -->
                        <div class="slide">
                            <div class="client-item text-center">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" target="_blank"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/client1.png" alt="Client Logo"></a>
                            </div>
                        </div>
                        <!-- /item -->
                        
                        <!-- item -->
                        <div class="slide">
                            <div class="client-item text-center">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/http://themebear.co/" target="_blank"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/client2.png" alt="Client Logo"></a>
                            </div>
                        </div>
                        <!-- /item -->
                        
                        <!-- item -->
                        <div class="slide">
                            <div class="client-item text-center">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" target="_blank"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/client3.png" alt="Client Logo"></a>
                            </div>
                        </div>
                        <!-- /item -->
                  
                        <!-- item -->
                        <div class="slide">
                            <div class="client-item text-center">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" target="_blank"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/client4.png" alt="Client Logo"></a>
                            </div>
                        </div>
                        <!-- /item -->
                                
                    </div>
                </div>
                <!-- /Gift list -->

            </div>

        </div>
        <!-- /Gift List -->

        <!-- Blog -->
        <div class="section section-blog with-bg" id="blog">
            <div class="container">

                <!-- Section Title -->
                <div class="title-section-wrapper">
                    <!-- Title -->
                    <h2 class="title-section">Our Blog</h2>
                    <!-- /title -->
                </div>
                <!-- /Section Title -->

                <!-- Blogroll  -->
                <div class="owl-carousel-wrapper blogroll-carousel-wrapper">
                    <div class="owl-carousel blogroll-carousel owl-theme owl-loaded">
                        <!-- item -->
                        <div class="blog-item">
                            <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html">
                                <figure class="blog-item-img blog-item-img-cover" style=" background-image: url(img/img1-3.jpg)"></figure>
                            </a>
                            <div class="blog-content">
                                <article class="post">
                                    <h3 class="heading">Getting nervous each day, can’t wait for the big day</h3>
                                    <p>Shabby chic try-hard kombucha intelligentsia, typewriter microdosing +1 iPhone ennui farm-to-table dreamcatcher authentic. Kogi pabst mumblecore, VHS thundercats heirloom poutine yuccie skateboard photo booth food truck readymade microdosing. Ethical slow-carb keffiyeh mlkshk waistcoat 3 wolf moon. Leggings beard photo booth, normcore asymmetrical yr slow-carb cold-pressed. Plaid flexitarian squid, affogato chillwave post-ironic vice. Retro taxidermy cardigan, […]</p>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html" class="primary-btn">See More</a>
                                </article>
                            </div>
                        </div>
                        <!-- /item -->

                        <!-- item -->
                        <div class="blog-item">
                            <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html">
                                <figure class="blog-item-img blog-item-img-cover" style=" background-image: url(img/img2.jpg)"></figure>
                            </a>
                            <div class="blog-content">
                                <article class="post">
                                    <h3 class="heading">He popped the question</h3>
                                    <p>Williamsburg keytar +1, taxidermy dreamcatcher scenester chillwave aesthetic meditation cardigan godard. Four loko farm-to-table vegan, vinyl direct trade craft beer synth actually letterpress fingerstache four dollar toast shabby chic hella wayfarers squid. Shabby chic YOLO microdosing brooklyn retro, before they sold out chartreuse quinoa beard forage truffaut sartorial wolf cred. Slow-carb mustache try-hard kitsch small […]</p>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html" class="primary-btn">See More</a>
                                </article>
                            </div>
                        </div>
                        <!-- /item -->
        
                        <!-- item -->                                
                        <div class="blog-item">
                            <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html">
                                <figure class="blog-item-img"></figure>
                            </a>
                            <div class="blog-content">
                                <article class="post">
                                    <h3 class="heading">Big day is almost here</h3>
                                    <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag.&nbsp;Selfies iPhone Kickstarter, drinking vinegar jean shorts fixie consequat flexitarian four loko. Meh synth Schlitz, tempor duis […]</p>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html" class="primary-btn">See More</a>
                                </article>
                            </div>
                        </div>
                        <!-- /item --> 

                        <!-- item -->
                        <div class="blog-item">
                            <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html">
                                <figure class="blog-item-img blog-item-img-cover" style=" background-image: url(img/img7.jpg)"></figure>
                            </a>
                            <div class="blog-content">
                                <article class="post">
                                    <h3 class="heading">Planning our trip</h3>
                                    <p>Photo shoot in Paris 2015 (image post format).</p>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html" class="primary-btn">See More</a>
                                </article>
                            </div>
                        </div>
                        <!-- /item -->

                        <!-- Item -->                                
                        <div class="blog-item">
                            <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html">
                                <figure class="blog-item-img"></figure>
                            </a>
                            <div class="blog-content">
                                <article class="post">
                                    <h3 class="heading">Post Format: Quote</h3>
                                    <p>It always seems impossible until its done.</p>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html" class="primary-btn">See More</a>
                                </article>
                            </div>
                        </div>
                        <!-- /item -->

                        <!-- Item -->                                
                        <div class="blog-item">
                            <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html">
                                <figure class="blog-item-img blog-item-img-cover" style=" background-image: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/img8.jpg')"></figure>
                            </a>
                            <div class="blog-content">
                                <article class="post">
                                    <h3 class="heading">He made the first step!</h3>
                                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies […]</p>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html" class="primary-btn">See More</a>
                                </article>
                            </div>
                        </div>
                        <!-- /item -->

                        <!-- item -->                                
                        <div class="blog-item">
                            <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html">
                                <figure class="blog-item-img"></figure>
                            </a>
                            <div class="blog-content">
                                <article class="post">
                                    <h3 class="heading">Tips for your wedding photos [Vídeo Post Format]</h3>
                                    <p>ousled truffaut ugh, cornhole meh lumbersexual williamsburg. Gluten-free yr neutra chicharrones sustainable, messenger bag cornhole artisan deep v pour-over wolf microdosing tofu mustache banh mi. Knausgaard ramps drinking vinegar, schlitz roof party pork belly yuccie fap. Ramps intelligentsia small batch bespoke viral bicycle rights. Fingerstache neutra disrupt, banjo scenester art party tofu XOXO etsy.</p>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html" class="primary-btn">See More</a>
                                </article>
                            </div>
                        </div>
                        <!-- /item -->

                        <!-- item -->                                
                        <div class="blog-item">
                            <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html">
                                <figure class="blog-item-img blog-item-img-cover" style=" background-image: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/img9.jpg')"></figure>
                            </a>
                            <div class="blog-content">
                                <article class="post">
                                    <h3 class="heading">Wedding photos from the beach</h3>
                                    <p>8-bit asymmetrical wolf, squid street art vinyl tofu shoreditch iPhone shabby chic. Shoreditch knausgaard sartorial bushwick twee. Keytar biodiesel migas narwhal, artisan fixie swag microdosing. Try-hard DIY vice, post-ironic church-key poutine cornhole art party flannel swag. Sartorial venmo tofu, salvia etsy mlkshk small batch helvetica. Sustainable flexitarian you probably haven’t heard of them chillwave post-ironic, […]</p>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html" class="primary-btn">See More</a>
                                </article>
                            </div>
                        </div>
                        <!-- /item -->

                        <!-- item -->                                
                        <div class="blog-item">
                            <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html">
                                <figure class="blog-item-img blog-item-img-cover" style=" background-image: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/img10.jpg')"></figure>
                            </a>
                            <div class="blog-content">
                                <article class="post">
                                    <h3 class="heading">The Beauty of the Childhood</h3>
                                    <p>DIY banjo cardigan farm-to-table. DIY quinoa keffiyeh, meditation craft beer hoodie roof party synth locavore church-key heirloom gentrify. Lo-fi blue bottle everyday carry +1 cardigan, single-origin coffee crucifix four loko swag tacos locavore paleo mumblecore readymade. Ennui blue bottle VHS pickled kogi poutine, everyday carry venmo retro butcher migas kickstarter try-hard hella. Crucifix put a […]</p>
                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/single.html" class="primary-btn">See More</a>
                                </article>
                            </div>
                        </div>
                        <!-- /item -->

                    </div>
                </div>
                <!-- /Blogroll -->

            </div>
        </div>
        <!-- /Blog -->
 
        <!-- RSVP -->
        <div class="section section-contact bg-cover with-dark-bg" id="rsvp" style="background-image: url('<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/img/contact-bg.jpg');">
            <div class="container">
                
                <!-- Section Title -->
                <div class="title-section-wrapper">
                    <!-- Title -->
                    <h2 class="title-section">Come and Celebrate With Us</h2>
                    <!-- /title -->
                    <!-- Text -->
                    <p class="text-section">Come and celebrate with us! Please complete the form below and confirm your presence</p>
                    <!-- /text -->
                </div>
                <!-- /Section Title -->

                <!-- Form -->
                <form class="form row rsvp" id="contactForm">
                    <!-- Form Group -->
                    <div class="col-sm-6 form-group">
                       <label>Name</label>
                        <input type="text" class="form-control required" id="name" name="name" required/>
                        <!-- Form Group -->
                    </div>
                    <!-- Form Group -->

                    <!-- Form Group -->
                    <div class="col-sm-6 form-group">
                        <label>Email</label>
                        <input type="email" class="form-control required" id="email" name="email" required />
                    </div>
                    <!-- Form Group -->

                    <!-- Form Group -->
                    <div class="col-sm-6 form-group">
                       <label>Which events are you attending?</label>
                        <input type="text" class="form-control required" name="events" id="events" required/>
                    </div>
                    <!-- Form Group -->
                    
                    <!-- Form Group -->
                    <div class="col-sm-6 form-group">
                       <label>How many guests are you bringing?</label>
                        <input type="text" class="form-control required" id="guests" name="guests" required/>
                    </div>
                    <!-- Form Group -->

                    <!-- Form Group -->
                    <div class="col-sm-12 form-group">
                       <label>Additional Information</label>
                        <textarea class="form-control required" id="message" name="message" required></textarea>
                    </div>
                    <!-- Form Group -->

                    <!-- Form Group -->
                    <div class="col-sm-12 form-group">
                        <button type="submit" class="primary-btn with-bg">SUBMIT!</button>
                    </div>
                    <!-- Form Group -->
                </form>
                <!-- /Form -->
            </div>
        </div>
        <!-- /RSVP -->       
    </div>
</div>
<!-- /Main Content    
================================================== -->

<!-- Footer
================================================== -->
<footer id="colophon" class="site-footer">              
    <!-- footer bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-sm-8">
                    <!-- Site Info -->
                    <div class="site-quote">
                        <p>“Ideas are the beginning points of all fortunes” - <small>Napoleon Hill</small></p>
                    </div>
                    <!-- /Site info -->
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-sm-4">
                    <!-- social icons -->
                    <div class="social-icons footer-social-icons">
                        <ul class="social-icons-list text-right">
                            <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social icons -->    
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->               
        </div>
    </div>
    <!-- /footer bottom -->     
</footer>
<!-- /Footer    
================================================== -->

<!-- Back to Top Button -->
<div id="back-to-top" class="back-to-top back-to-top-hide"><i class="fa fa-angle-up"></i></div>
<!-- /Back to Top Button -->

<!-- Contact Form - Ajax Messages
========================================================= -->
<!-- Form Sucess -->
<div class="form-result modal-wrap" id="contactSuccess">
  <div class="modal-bg"></div>
  <div class="modal-content">
    <h4 class="modal-title"><i class="fa fa-check-circle"></i> Success!</h4>
    <p>Your message has been sent to us.</p>
  </div>
</div>
<!-- /Form Sucess -->
<!-- form-error -->
<div class="form-result modal-wrap" id="contactError">
  <div class="modal-bg"></div>
  <div class="modal-content">
    <h4 class="modal-title"><i class="fa fa-times"></i> Error</h4>
    <p>There was an error sending your message.</p>
  </div>
</div>
<!-- /form-error -->
<!-- form-sending -->
<div class="form-result modal-wrap" id="contactWait">
  <div class="modal-bg"></div>
  <div class="modal-content">  
    <div class="modal-loader"></div> 
    <p>Sending Message, please wait...</p>
  </div>
</div>
<!-- /form-sending -->
<!-- / Contact Form - Ajax Messages
========================================================= -->


<!-- >> JS
============================================================================== -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery-1.12.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/validate.js"></script>
<!-- CountDown -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery.countdown.min.js"></script>
<!-- ImagesLoaded -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/imagesloaded.pkgd.min.js"></script>
<!-- Waypoints-->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/waypoints.min.js"></script>
<!-- /Waypoints-->
<!-- Owl Caroulsel -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<!-- Cross-browser -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/cross-browser.js"></script>
<!-- Simple Lightbox -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/simplelightbox/dist/simple-lightbox.min.js"></script>
<!-- Match Height Plugin to add height on elements -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/jquery.matchHeight-min.js"></script>
<!-- Main Scripts -->
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/main.js"></script>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/html5shiv.js"></script>
<script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/vendor/respond.min.js"></script>
<![endif]-->
<!-- >> /JS
============================================================================= -->
</body>


<!-- Mirrored from themes.themebear.co/html-templates/amore/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 08:23:28 GMT -->
</html>
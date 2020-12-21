<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/responsive.css">
<title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
<meta name="description" content="">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/<?php echo ASSETS . "img/logo-only-hitam.png";?>">
</head>
<body>
<div class="wrapper">
	<div id="preloader" class="preloader">
		<div id="pre" class="preloader_container"><div class="preloader_disabler btn btn-default">Disable Preloader</div></div>
	</div>
	<!-- Header Styles -->
	<header class="header-nav transparent">
		<div class="container">
		    <!-- Start Navigation -->
		    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
		        <div class="container">
		            <!-- Start Header Navigation -->
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
		                    <i class="fa fa-bars"></i>
		                </button>
		                <a class="navbar-brand ulockd-main-logo2" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#brand">
		                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/header-logo.png" class="logo logo-display hidden-md" alt="header-logo.png">
		                    <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/header-logo2.png" class="logo logo-scrolled" alt="">
		                </a>
		            </div>
		            <!-- End Header Navigation -->

		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse" id="navbar-menu">
		                <ul class="nav navbar-nav navbar-center ulockd-pad9100 pull-right" data-in="flipInX">
		                    <li class="dropdown">
		                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle active" data-toggle="dropdown">Home</a>
		                        <ul class="dropdown-menu">
									<li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Multipage Page</a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-multipage.html">Multipage One</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-multipage2.html">Multipage Two</a></li>
				                        </ul>
				                    </li>
									<li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Single Page</a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-singlepage.html">Single page One</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-singlepage2.html">Single page Two</a></li>
				                        </ul>
				                    </li>
									<li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Boxed Layout</a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-multipage-boxed.html">Multipage Boxed One</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-multipage2-boxed.html">Multipage Boxed Two</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-singlepage-boxed.html">Singlepage Boxed One</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-singlepage2-boxed.html">Singlepage Boxed Two</a></li>
				                        </ul>
				                    </li>
									<li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">RTL Layout</a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-multipage-rtl.html">Multipage RTL One</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-multipage2-rtl.html">Multipage RTL Two</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-singlepage-rtl.html">Singlepage RTL One</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-singlepage2-rtl.html">Singlepage RTL Two</a></li>
				                        </ul>
				                    </li>
									<li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Dark Layout</a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-multipage-dark.html">Multipage Dark One</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-multipage2-dark.html">Multipage Dark Two</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-singlepage-dark.html">Singlepage Dark One</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/index-singlepage2-dark.html">Singlepage Dark Two</a></li>
				                        </ul>
				                    </li>
									<li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Unlock BG <span class="badge ulockd-bgthm">New</span></a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-background-parallax-home.html">BG Parallax</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-background-particles-home.html">BG Particles</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-background-particles-home2.html">BG Particles Two</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-background-video-home.html">BG Video</a></li>
				                        </ul>
				                    </li>
									<li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Xtreme Layout <span class="badge ulockd-bgthm">New</span></a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-slider-split.html">Split</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-fullpage-slider.html">FullScreen</a></li>
				                        </ul>
				                    </li>
									<li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Extra Font <span class="badge ulockd-bgthm">New</span></a>
				                        <ul class="dropdown-menu">
												<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-elegant-icon-font.html">Elegant Icon</a></li>
												<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-pe-icon-7-stroke.html">Stroke Icon</a></li>
												<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-icon-moon.html">Icon Moon</a></li>
				                        </ul>
				                    </li>
									<li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Slider Style <span class="badge ulockd-bgthm">New</span></a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-pslider.html">PG Slider Styles</a></li>
				                        </ul>
				                    </li>
		                        </ul>
		                    </li>
		                    <li class="dropdown">
		                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Features</a>
		                        <ul class="dropdown-menu">
									<li class="dropdown">
										<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-grid-one.html" class="dropdown-toggle" data-toggle="dropdown">Header Style <span class="badge ulockd-bgthm">New</span></a>
                                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-menu-standard-left.html">Navbar Left</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-menu-standard-center.html">Navbar Center</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-menu-standard.html">Navbar Left</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-menu-standard-right.html">Navbar Right</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-navbar-center-brand.html">Navbar Center Brand</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-menu-fullscreen.html">FullScreen Menu</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-menu-left-side.html">Left Side Menu</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-sticky-header.html">Sticky Header</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-navbar-transparent.html">Navbar Transparent</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-navbar-fixed.html">Navbar Fixed</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-bs-megamenu.html">Beautiful Megamenu</a></li>
                                        </ul>
									</li>
									<li class="dropdown">
										<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-grid-one.html" class="dropdown-toggle" data-toggle="dropdown">Footer Style <span class="badge ulockd-bgthm">New</span></a>
                                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-footer-style1.html">Footer One</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-footer-style2.html">Footer Two</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-footer-style3.html">Footer Three</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-footer-style4.html">Footer Four</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-footer-style5.html">Footer Five</a></li>
                                        </ul>
									</li>
									<li class="dropdown">
										<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-grid-one.html" class="dropdown-toggle" data-toggle="dropdown">RSVP Form <span class="badge ulockd-bgthm">New</span></a>
	                                        <ul class="dropdown-menu">
												<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-booking-form2-rsvp.html">RSVP One</a></li>
												<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-booking-form2-rsvp2.html">RSVP Two</a></li>
												<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-booking-form2-rsvp3.html">RSVP Three</a></li>
												<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-booking-form2-rsvp4.html">RSVP Four</a></li>
	                                        </ul>
									</li>
		                        </ul>
		                    </li>
		                    <li class="dropdown">
		                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
		                        <ul class="dropdown-menu">
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-about.html">About</a></li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-about2.html">About Two</a></li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-about-her.html">About Her</a></li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-about-him.html">About Him</a></li>
		                        </ul>
		                    </li>
		                    <li class="dropdown">
		                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Team</a>
		                        <ul class="dropdown-menu">
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-team.html">Team One</a></li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-team2.html">Team Two</a></li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-team-details.html">Team Details</a></li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-team-registration.html">Join Us</a></li>
		                        </ul>
		                    </li>
                            <li class="dropdown">
                                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu">
									<li class="dropdown">
										<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-grid-one.html" class="dropdown-toggle" data-toggle="dropdown">Blog Grid </a>
                                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-grid-one.html">Blog Grid One </a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-grid-two.html">Blog Grid Two </a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-grid-three.html">Blog Grid Three </a></li>
                                        </ul>
									</li>
									<li class="dropdown">
										<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Blog Single </a>
                                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-signle-left-sidebar.html">Sidebar left</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-signle-right-sidebar.html">Sidebar Right</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-signle-sidebar-less.html">Sidebar Less</a></li>
                                        </ul>
									</li>
									<li class="dropdown">
										<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Blog Classic</a>
                                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-left-sidebar.html">Sidebar left</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-right-sidebar.html">Sidebar Right</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-sidebar-less.html">Sidebar Less</a></li>
                                        </ul>
									</li>
                                </ul>
                            </li>
		                    <li class="dropdown">
		                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
		                        <ul class="dropdown-menu">
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-appointment.html">Appointment</a></li>
				                    <li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Coming Soon</a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-coming-soon.html">Coming Soon</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-coming-soon2.html">Coming Soon Two</a></li>
				                        </ul>
				                    </li>
				                    <li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-contact.html">Contact Us</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-contact2.html">Contact Us Two</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-contact3.html">Contact Us Three</a></li>
				                        </ul>
				                    </li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-divider.html">Divider</a></li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-error.html">Error</a></li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-faq.html">Faq</a></li>
				                    <li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Feature Service</a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-feature-service.html">Feature Service</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-feature-service2.html">Feature Service Two</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-feature-service-details.html">Feature Service Details</a></li>
				                        </ul>
				                    </li>
				                    <li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Feature</a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-carrer.html">Carrer</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-job-details.html">Carrer Details</a></li>
				                        </ul>
				                    </li>
				                    <li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Google Calendar</a>
				                        <ul class="dropdown-menu">
												<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-fullcalendar.html">Monthly Event</a></li>
												<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-fullcalendar2.html">Weekly Event</a></li>
												<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-fullcalendar3.html">Monthly Event Two</a></li>
				                        </ul>
				                    </li>
	                                <li class="dropdown">
	                                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
	                                    <ul class="dropdown-menu">
											<li class="dropdown">
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-grid-one.html" class="dropdown-toggle" data-toggle="dropdown">Fancybox </a>
		                                        <ul class="dropdown-menu">
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-gallery-fancybox.html">Fancybox</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-gallery-fancybox-wide.html">Fancybox Wide</a></li>
		                                        </ul>
											</li>
											<li class="dropdown">
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Isotop 1 col </a>
		                                        <ul class="dropdown-menu">
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-1.html">Space Less</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-1-space.html">Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-1-wide.html">Wide</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-1-wide-space.html">Wide Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-1-wide-space-title.html">Wide Space Title</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-1-wide-space-detail.html">Wide Space Details</a></li>
		                                        </ul>
											</li>
											<li class="dropdown">
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Isotop 2 col </a>
		                                        <ul class="dropdown-menu">
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-2.html">Space Less</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-2-space.html">Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-2-wide.html">Wide</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-2-wide-space.html">Wide Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-2-wide-space-title.html">Wide Space Title</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-2-wide-space-detail.html">Wide Space Details</a></li>
		                                        </ul>
											</li>
											<li class="dropdown">
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Isotop 3 col </a>
		                                        <ul class="dropdown-menu">
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-3.html">Space Less</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-3-space.html">Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-3-wide.html">Wide</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-3-wide-space.html">Wide Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-3-wide-space-title.html">Wide Space Title</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-3-wide-space-detail.html">Wide Space Details</a></li>
		                                        </ul>
											</li>
											<li class="dropdown">
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Isotop 4 col </a>
		                                        <ul class="dropdown-menu">
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-4.html">Space Less</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-4-space.html">Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-4-space-title.html">Space Title</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-4-space-details.html">Space Details</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-4-wide.html">Wide</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-4-wide-space.html">Wide Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-isotop-4.html">Isotop Wide Less</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-isotop-4-wide.html">Isotop Wide</a></li>
		                                        </ul>
											</li>
											<li class="dropdown">
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Isotop 5 col</a>
		                                        <ul class="dropdown-menu">
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-5.html">Space Less</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-5-space.html">Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-5-space-title.html">Space Title</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-5-space-details.html">Space Details</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-5-wide.html">Wide</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-5-wide-space.html">Wide Space</a></li>
		                                        </ul>
											</li>
											<li class="dropdown">
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Isotop 6 col</a>
		                                        <ul class="dropdown-menu">
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-6.html">Space Less</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-6-space.html">Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-6-space-title.html">Space Title</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-6-space-details.html">Space Details</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-6-wide.html">Wide</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-6-wide-space.html">Wide Space</a></li>
		                                        </ul>
											</li>
											<li class="dropdown">
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Isotop 7 col</a>
		                                        <ul class="dropdown-menu">
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-7.html">Space Less</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-7-space.html">Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-7-space-title.html">Space Title</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-7-space-detail.html">Space Details</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-7-wide.html">Wide</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-7-wide-space.html">Wide Space</a></li>
		                                        </ul>
											</li>
											<li class="dropdown">
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Isotop 8 col</a>
		                                        <ul class="dropdown-menu">
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-8.html">Space Less</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-8-space.html">Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-8-space-title.html">Space Title</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-8-space-detail.html">Space Details</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-8-wide.html">Wide</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-8-wide-space.html">Wide Space</a></li>
		                                        </ul>
											</li>
											<li class="dropdown">
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Isotop 9 col</a>
		                                        <ul class="dropdown-menu">
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-9-wide.html">Wide</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-9-wide-space.html">Wide Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-9-wide-space-title.html">Wide Space Title</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-9-wide-space-detail.html">Wide Space Detail</a></li>
		                                        </ul>
											</li>
											<li class="dropdown">
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Isotop 10 col</a>
		                                        <ul class="dropdown-menu">
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-10-wide.html">Wide</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-10-wide-space.html">Wide Space</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-10-wide-space-title.html">Wide Space Title</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-10-wide-space-detail.html">Wide Details</a></li>
		                                        </ul>
											</li>
	                                    </ul>
	                                </li>
				                    <li class="dropdown">
				                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Pricing</a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-pricing.html">Pricing One</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-pricing2.html">Pricing Two</a></li>
				                        </ul>
				                    </li>
				                    <li class="dropdown">
				                    	<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
				                        <ul class="dropdown-menu">
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-shop.html">Our Shop</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-product-details.html">Product Details</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-shoping-cart.html">Shopping Cart</a></li>
											<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-shoping-checkout.html">Shopping Checkout</a></li>
											<li class="dropdown">
												<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">My Account</a>
												<ul class="dropdown-menu">
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-shop-account.html">My Dashboard </a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-shop-order.html">My Order </a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-shop-acc-info.html">Account Information </a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-shop-address.html">Shopping Address </a></li>
												</ul>
											</li>
				                        </ul>
				                    </li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-sitemap.html">Sitemap</a></li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/shortcode.html">Shortcode</a></li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/shortcode-buttons.html">3D Buttons</a></li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-icon-box.html">Icon Box</a></li>
									<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-under-construction.html">Under Construction</a></li>
			                    </ul>
		                    </li>
		                    <li class="dropdown megamenu-fw">
		                        <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" class="dropdown-toggle" data-toggle="dropdown">Megamenu</a>
		                        <ul class="dropdown-menu megamenu-content" role="menu">
		                            <li>
		                                <div class="row">
		                                    <div class="col-menu col-md-3">
		                                        <h4 class="title">Blog Classic/Single</h4>
		                                        <div class="content">
		                                            <ul class="menu-col">
		                                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-signle-left-sidebar.html">Blog Single Sidebar left</a></li>
		                                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-left-sidebar.html">Blog Sidebar left</a></li>
		                                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-right-sidebar.html">Blog Sidebar Right</a></li>
		                                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/blog-sidebar-less.html">Blog Sidebar Less</a></li>
		                                            </ul>
		                                        </div>
		                                    </div><!-- end col-3 -->
		                                    <div class="col-menu col-md-3">
		                                        <h4 class="title">Shop Page</h4>
		                                        <div class="content">
		                                            <ul class="menu-col">
		                                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-shop.html">Our Shop</a></li>
		                                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-product-details.html">Product Details</a></li>
		                                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-shoping-cart.html">Shopping Cart</a></li>
		                                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-shoping-checkout.html">Shopping Checkout</a></li>
		                                            </ul>
		                                        </div>
		                                    </div><!-- end col-3 -->
		                                    <div class="col-menu col-md-3">
		                                        <h4 class="title">Our Gallery</h4>
	                                            <ul class="menu-col">
	                                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-4.html" target="_blank">Gallery One</a></li>
	                                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/portfolio-masonry-4-wide.html" target="_blank">Gallery Two</a></li>
	                                                <li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/page-gallery-fancybox.html" target="_blank">Gallery Three</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/shortcode-buttons.html">3D Buttons</a></li>
													<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/ulockd-icon-box.html">Icon Box</a></li>
	                                            </ul>
		                                    </div>
		                                    <div class="col-menu col-md-3">
		                                        <h4 class="title">Video Demo</h4>
		                                        <div class="content">
		                                            <ul class="menu-col">
		                                                <li>
															<div class="ulockd-project-sm-thumb">
																<iframe src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/https://player.vimeo.com/video/176916362?title=0&amp;byline=0&amp;portrait=0&amp;color=f2f2ea" allowfullscreen></iframe>
															</div>
		                                                </li>
		                                            </ul>
		                                        </div>
		                                    </div><!-- end col-3 -->
		                                </div><!-- end row -->
		                            </li>
				                </ul>
		                    </li>
		                </ul>
		            </div><!-- /.navbar-collapse -->
		        </div>
		    </nav>
		    <!-- End Navigation -->
		</div>
	</header>

	<!-- Home Design -->
	<div class="ulockd-home-slider snow_fall">
		<div class="container-fluid">
			<div class="row">
				<div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"></li>
						<li data-target="#carousel" data-slide-to="1" class=""></li>
						<li data-target="#carousel" data-slide-to="2" class=""></li>
					</ol>
					<!-- Carousel items -->
					<div class="carousel-inner carousel-zoom">
						<div class="item active"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/h1.jpg" alt="h1.jpg">
							<div class="carousel-caption">
								<h2 data-animation="animated bounceInDown">WE ARE GETTING MARRIED</h2>
								<h1 data-animation="animated zoomInLeft" class="cap-txt">Jessica & William</h1>
								<p data-animation="animated zoomInRight">15 November 2018</p>
								<a data-animation="animated bounceInUp" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#rsvp_forms" data-toggle="modal" class="btn btn-lg ulockd-btn-thm2 hidden-xs bdrs20" title="CLick On It">RSVP NOW</a>
							</div>
						</div>
					    <div class="item"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/h2.jpg" alt="h2.jpg">
							<div class="carousel-caption style2">
								<h1 data-animation="animated zoomInLeft" class="cap-txt xxss">The Wedding Day</h1>
								<h2 data-animation="animated bounceInDown">15 November 2018 <br>Save The Date</h2>
							</div>
						</div>
						<div class="item"><img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/h3.jpg" alt="h3.jpg">
							<div class="carousel-caption animated slideInLeft style3">
								<h1 data-animation="animated zoomInLeft" class="cap-txt">The Wedding Day</h1>
								<p data-animation="animated zoomInRight">15 November 2018</p>
								<h2 data-animation="animated bounceInUp">Save The Date</h2>
							</div>
						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#sg-carousel" data-slide="prev">‹</a>
						<a class="carousel-control right" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#sg-carousel" data-slide="next">›</a>
					</div> 
				</div>
			</div>
		</div>
	</div>

	<!-- Our About -->
	<section class="ulockd-about bgc-overlay-white8 ulockd_bgp3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="text-thm2">The Couple</h2>
						<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/title-bottom.png" alt="title-bottom.png">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-6 ulockd-pad340">
							<div class="about-box">
								<div class="about-details text-right tac-xsd">
									<h2 class="text-thm2">Bride</h2>
									<h4>Jessica Rothe</h4>
									<p class="fz16">Hi, it's jessica rothe Nostrum similique quae vel libero inventore et magni provident quaerat obcaecati commodi aliquam, nisi voluptate, consectetur ipsum ipsam ad sequi sit excepturi.</p>
									<img alt="signeture.png" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/bride-signeture.png">
			  						<ul class="icon-font-thm list-inline ulockd-mrgn1225">
			  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-facebook"></i></a></li>
			  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-rss"></i></a></li>
			  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-google"></i></a></li>
			  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-pinterest"></i></a></li>
			  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-instagram"></i></a></li>
			  						</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-6 ulockd-pad940">
							<div class="about-box">
								<div class="about-thumb tac-xsd">
									<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/bride.jpg" alt="bride.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row ulockd-mrgn1240">
				<div class="col-md-12">
					<div class="couple-img">
						<img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/couple-heart.png" alt="couple-heart.png">
					</div>
				</div>
			</div>
			<div class="row ulockd-mrgn1240">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-6 ulockd-pad340">
							<div class="about-box">
								<div class="about-thumb tac-xsd">
									<img class="fn-xsd pull-right" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/groom.jpg" alt="groom.jpg">
								</div>
							</div>
						</div>
						<div class="col-sm-6 ulockd-pad940">
							<div class="about-box tac-xsd">
								<div class="about-details">
									<h2 class="text-thm2">Groom</h2>
									<h4>William Moseley</h4>
									<p class="fz16">Hi, it's william moseley Nostrum similique quae vel libero inventore et magni provident quaerat obcaecati commodi aliquam, nisi voluptate, consectetur ipsum ipsam ad sequi sit excepturi.</p>
									<img alt="signeture.png" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/groom-signeture.png">
			  						<ul class="icon-font-thm list-inline ulockd-mrgn1225">
			  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-facebook"></i></a></li>
			  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-rss"></i></a></li>
			  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-google"></i></a></li>
			  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-pinterest"></i></a></li>
			  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-instagram"></i></a></li>
			  						</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our First Divider -->
	<section class="testimonial parallax ulockd_bgi1 overlay-tc8" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row ulockd-mrgn1240">
				<div class="col-md-4 p0-mdd">
					<div class="wedding-invitation tac-xsd">
						<h2>Left The Event</h2>
						<h3 class="ff-alex">15 November 2018.</h3>
					</div>
				</div>
				<div class="col-md-8 text-center p0-mdd">
					<div class="upcoming-wedding-event ulockd-flip-clock">
						<div class="clock"></div>
						<div class="message"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Story -->
	<section class="ulockd-about bgc-overlay-white9 ulockd_bgp3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="text-thm2">Our Love Story</h2>
						<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/title-bottom.png" alt="title-bottom.png">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">					
				    <ul class="our-story timeline">
				        <li>
				        	<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
				        	<div class="timeline-panel left">
					            <div class="timeline-body w50prcnt pull-left ulockd-pdng15">
					            	<h3 class="timeline-title text-thm2">OUR FIRST MEET</h3>
					            	<h5>FEEL CHANGED THE LIFE</h5>
					            	<p><small class="text-muted badge ulockd-bgthm"><span class="text-thm2"></span> 31 Oct 2015</small></p>
			            			<p>Amet consectetur adipisicing elit. Voluptatem, <span class="hiden414"> at placeat fugit magnam. Quam, temporibus, doloremque. Excepturi iusto perferendis ad esse!</span></p>
					            </div>
					            <div class="timeline-body w50prcnt pull-right">
					            	<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/s1.jpg" alt="1.png">
					            </div>
				        	</div>
				        </li>
				        <li class="timeline-inverted">
				        	<div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
				        	<div class="timeline-panel right">
					            <div class="timeline-body w50prcnt pull-left">
					            	<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/s2.jpg" alt="s2.jpg">
					            </div>
					            <div class="timeline-body w50prcnt pull-right ulockd-pdng15">
					            	<h3 class="timeline-title text-thm2">OUR FIRST DATE</h3>
					            	<h5>SPENDING BEAUTIFUL DAY</h5>
					            	<p><small class="text-muted badge ulockd-bgthm"><span class="text-thm2"></span> 31 Oct 2015</small></p>
			            			<p>Amet consectetur adipisicing elit. Voluptatem, <span class="hiden414"> at placeat fugit magnam. Quam, temporibus, doloremque. Excepturi iusto perferendis ad esse!</span></p>
					            </div>
				        	</div>
				        </li>
				        <li>
				        	<div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
				        	<div class="timeline-panel left">
					            <div class="timeline-body w50prcnt pull-left ulockd-pdng15">
					            	<h3 class="timeline-title text-thm2">LOVE PROPOSAL</h3>
					            	<h5>THAT WAS AWESOME</h5>
					            	<p><small class="text-muted badge ulockd-bgthm"><span class="text-thm2"></span> 31 Oct 2015</small></p>
			            			<p>Amet consectetur adipisicing elit. Voluptatem, <span class="hiden414"> at placeat fugit magnam. Quam, temporibus, doloremque. Excepturi iusto perferendis ad esse!</span></p>
					            </div>
					            <div class="timeline-body w50prcnt pull-right">
					            	<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/s3.jpg" alt="s3.jpg">
					            </div>
				        	</div>
				        </li>
				        <li class="timeline-inverted">
				        	<div class="timeline-panel right">
					            <div class="timeline-body w50prcnt pull-left">
					            	<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/s4.jpg" alt="s4.jpg">
					            </div>
					            <div class="timeline-body w50prcnt pull-right ulockd-pdng15">
					            	<h3 class="timeline-title text-thm2">OUR FIRST KISS</h3>
					            	<h5>FEELING WAS AWESOME</h5>
					            	<p><small class="text-muted badge ulockd-bgthm"><span class="text-thm2"></span> 31 Oct 2015</small></p>
			            			<p>Amet consectetur adipisicing elit. Voluptatem, <span class="hiden414"> at placeat fugit magnam. Quam, temporibus, doloremque. Excepturi iusto perferendis ad esse!</span></p>
					            </div>
				        	</div>
				        </li>
				        <li>
				        	<div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
				        	<div class="timeline-panel left">
					            <div class="timeline-body w50prcnt pull-left ulockd-pdng15">
					            	<h3 class="timeline-title text-thm2">WE TOGETHER NOW</h3>
					            	<h5>LOVELY TIME SPENDING</h5>
					            	<p><small class="text-muted badge ulockd-bgthm"><span class="text-thm2"></span> 31 Oct 2015</small></p>
			            			<p>Amet consectetur adipisicing elit. Voluptatem, <span class="hiden414"> at placeat fugit magnam. Quam, temporibus, doloremque. Excepturi iusto perferendis ad esse!</span></p>
					            </div>
					            <div class="timeline-body w50prcnt pull-right">
					            	<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/s5.jpg" alt="s5.jpg">
					            </div>
				        	</div>
				        </li>
				        <li>
				        	<div class="timeline-panel left">
					            <div class="timeline-body w50prcnt pull-left ulockd-pdng15">
					            	<h3 class="timeline-title text-thm2">WEDDING PROPOSAL</h3>
					            	<h5>INSPIRATION OF LIFE</h5>
					            	<p><small class="text-muted badge ulockd-bgthm"><span class="text-thm2"></span> 31 Oct 2015</small></p>
			            			<p>Amet consectetur adipisicing elit. Voluptatem, <span class="hiden414"> at placeat fugit magnam. Quam, doloremque.</span></p>
					            </div>
					            <div class="timeline-body w50prcnt pull-right">
					            	<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/s6.jpg" alt="s6.jpg">
					            </div>
				        	</div>
				        </li>
				        <li class="timeline-inverted">
				        	<div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
				        	<div class="timeline-panel right">
					            <div class="timeline-body w50prcnt pull-left">
					            	<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/about/s7.jpg" alt="s7.jpg">
					            </div>
					            <div class="timeline-body w50prcnt pull-right ulockd-pdng15">
					            	<h3 class="timeline-title text-thm2">ACCEPT PROPOSAL</h3>
					            	<h5>FEEL CHANGED THE LIFE</h5>
					            	<p><small class="text-muted badge ulockd-bgthm"><span class="text-thm2"></span> 31 Oct 2015</small></p>
			            			<p>Amet consectetur adipisicing elit. Voluptatem, <span class="hiden414"> at placeat fugit magnam. Quam, doloremque.</span></p>
					            </div>
				        	</div>
				        </li>
				    </ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Gallery-->
	<section id="photostack-3" class="photostack ulockd-bgthm">
		<div>
			<figure>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1.jpg" alt="1.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">The Wedding</h2>
					<div class="photostack-back">
						<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
					</div>
				</figcaption>
			</figure>
			<figure>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/1a.jpg" alt="1a.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Happy Days</h2>
					<div class="photostack-back">
						<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
					</div>
				</figcaption>
			</figure>
			<figure>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2.jpg" alt="2.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Beautywood</h2>
					<div class="photostack-back">
						<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
					</div>
				</figcaption>
			</figure>
			<figure>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/2a.jpg" alt="2a.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Serenity Beach</h2>
					<div class="photostack-back">
						<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
					</div>
				</figcaption>
			</figure>
			<figure>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3.jpg" alt="3.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Heaven of time</h2>
					<div class="photostack-back">
						<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
					</div>
				</figcaption>
			</figure>
			<figure>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/3a.jpg" alt="3a.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Forever this</h2>
					<div class="photostack-back">
						<p>Iorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat a fugit nostrum officia corporis quos sed suscipit laudantium dolore! Reprehenderit praesentium nam odio perferendis perspiciatis, voluptatem? </p>
					</div>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4.jpg" alt="4.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Lovely Green</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/4a.jpg" alt="4a.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Wonderful</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5.jpg" alt="5.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Love Addict</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/5a.jpg" alt="5a.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Friendship</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6.jpg" alt="6.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">White Nights</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/6a.jpg" alt="6a.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Serendipity</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7.jpg" alt="7.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Pure Soul</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/7a.jpg" alt="7a.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Winds of Peace</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8.jpg" alt="8.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Shades of blue</h2>
				</figcaption>
			</figure>
			<figure data-dummy>
				<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8a.jpg" class="photostack-img popup-img"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/gallery/8a.jpg" alt="8a.jpg"/></a>
				<figcaption>
					<h2 class="photostack-title">Lightness</h2>
				</figcaption>
			</figure>
		</div>
	</section>

	<!-- Our Event -->
	<section class="events bgc-overlay-white7 ulockd_bgp3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="text-thm2">Our Events</h2>
						<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/title-bottom.png" alt="title-bottom.png">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pdng5">
					<div class="event-box">
						<div class="thumb">
							<img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/event/1.jpg" alt="1.jpg">
						</div>
						<div class="details">
							<h3>Event Location</h3>
							<ul class="list-unstyled">
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-calendar text-thm2"></i> Friday, 15 November 2018</a></li>
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-clock-o text-thm2"></i> 2:30 PM - 5:30 PM</a></li>
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-home text-thm2"></i> City Hall Park, </a></li>
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-map-marker text-thm2"></i> New York, NY 10007</a></li>
							</ul>
							<p>Our Chosen Place, You And Your Family Are Invited, <strong class="text-thm2"> Thanks</strong></p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pdng5">
					<div class="event-box">
						<div class="thumb">
							<img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/event/2.jpg" alt="2.jpg">
						</div>
						<div class="details">
							<h3>The Wedding</h3>
							<ul class="list-unstyled">
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-calendar text-thm2"></i> Friday, 15 November 2018</a></li>
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-clock-o text-thm2"></i> 2:30 PM - 5:30 PM</a></li>
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-home text-thm2"></i> City Hall Park, </a></li>
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-map-marker text-thm2"></i> New York, NY 10007</a></li>
							</ul>
							<p>Our Chosen Place, You And Your Family Are Invited, <strong class="text-thm2"> Thanks</strong></p>
						</div>
					</div>				
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pdng5">
					<div class="event-box">
						<div class="thumb">
							<img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/event/3.jpg" alt="3.jpg">
						</div>
						<div class="details">
							<h3>Gift Registry</h3>
							<ul class="list-unstyled">
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-calendar text-thm2"></i> Friday, 15 November 2018</a></li>
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-clock-o text-thm2"></i> 2:30 PM - 5:30 PM</a></li>
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-home text-thm2"></i> City Hall Park, </a></li>
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-map-marker text-thm2"></i> New York, NY 10007</a></li>
							</ul>
							<p>Our Chosen Place, You And Your Family Are Invited, <strong class="text-thm2"> Thanks</strong></p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pdng5">
					<div class="event-box">
						<div class="thumb">
							<img class="img-responsive" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/event/4.jpg" alt="4.jpg">
						</div>
						<div class="details">
							<h3>Reception/Party</h3>
							<ul class="list-unstyled">
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-calendar text-thm2"></i> Friday, 15 November 2018</a></li>
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-clock-o text-thm2"></i> 2:30 PM - 5:30 PM</a></li>
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-home text-thm2"></i> City Hall Park, </a></li>
								<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-map-marker text-thm2"></i> New York, NY 10007</a></li>
							</ul>
							<p>Our Chosen Place, You And Your Family Are Invited, <strong class="text-thm2"> Thanks</strong></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row ulockd-mrgn1240">
				<div class="col-md-12 text-center">
					<a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#rsvp_forms" data-toggle="modal" class="btn btn-lg ulockd-btn-thm2 bdrs20" title="CLick On It">RSVP NOW</a>
					<!-- Product Popup View Start-->
					<div class="modal fade rsvp_forms" id="rsvp_forms">
					    <div class="modal-dialog">
					        <div class="modal-content">
					            <div class="modal-header text-center">
					                <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
					                <h3 class="modal-title">RSVP Form. </h3>
					            </div>
					            <div class="modal-body">
					                <div class="row">
					                    <div class="col-md-10 col-md-offset-1">
											<!-- RSVP Form Starts -->
						                    <form id="rsvp_form" name="rsvp_form" class="rsvp_form text-left" method="post" novalidate="novalidate">
						                        <div class="messages"></div>
						                        <div class="row">
						                            <div class="col-xs-12 col-sm-12 col-md-12 text-center clearfix">
											        	<h1 class="text-thm2 ff-engnmt">Jessica & William Wedding RSVP</h1>
											        	<h5>You're Invited To Jessica & William Wedding Reception On 15 November 2018.</h5>
						                            </div>
						                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
						                                <div class="form-group">
						                                    <label for="form_name">Full Name <small>*</small></label>
						                                    <input id="form_name" name="form_name" class="form-control" placeholder="Enter a name">
						                                </div>
						                            </div>
						                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
						                                <div class="form-group">
														    <label for="FormControlSelect1">Are You Attending?</label>
														    <select class="form-control" id="FormControlSelect1">
														    	<option>Select an option</option>
														    	<option>All event</option>
														    	<option>Wedding</option>
														    	<option>Reception</option>
														    	<option>No</option>
														    	<option>Other</option>
														    </select>
														</div>
						                            </div>
						                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
						                                <div class="form-group">
														    <label for="FormControlSelect2">Your Meal Selection</label>
														    <select class="form-control" id="FormControlSelect2">
														    	<option>Select an option</option>
														    	<option>Chicken</option>
														    	<option>Beef</option>
														    	<option>vegetarian</option>
														    	<option>Other</option>
														    </select>
														</div>
						                            </div>
						                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
						                                <div class="form-group">
														    <label for="FormControlSelect3">Are You Bringing a guest?</label>
														    <select class="form-control" id="FormControlSelect3">
														    	<option>Select an option</option>
														    	<option>1</option>
														    	<option>2</option>
														    	<option>3</option>
														    	<option>More..</option>
														    </select>
														</div>
						                            </div>
						                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
						                                <div class="form-group">
						                                    <label for="form_name2">Guest Name</label>
						                                    <input id="form_name2" name="form_name2" class="form-control" placeholder="Enter a name">
						                                </div>
						                            </div>
						                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
						                                <div class="form-group">
														    <label for="FormControlSelect4">Meal Selection</label>
														    <select class="form-control" id="FormControlSelect4">
														    	<option>Select an option</option>
														    	<option>Chicken</option>
														    	<option>Beef</option>
														    	<option>vegetarian</option>
														    	<option>Other</option>
														    </select>
														</div>
						                            </div>
						                        </div>
						                        <div class="form-group text-center">
						                            <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
						                            <button type="submit" class="btn btn-lg ulockd-btn-thm2 bdrs20">Send Us</button>
						                        </div>
								            </form>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
					<!-- Product Popup View End-->
				</div>
			</div>
		</div>
	</section>

	<!-- Our Divider -->
	<section class="ulockd-video parallax ulockd_bgi2 overlay-tc75" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="video-button text-center">
						<a class="mfp-iframe mfp-youtube color-white fz60" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/https://www.youtube.com/watch?time_continue=18&amp;v=teLhLLlhfzc" title="About Our Company"><span class="flaticon-play-button"></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Our BridesMaids -->
	<section class="our-team bgc-overlay-white8 ulockd_bgp3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="text-thm2">BridesMaids</h2>
						<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/title-bottom.png" alt="title-bottom.png">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pdng5">
					<div class="team-one text-center">
						<div class="team-thumb">
							<img class="img-responsive img-whp" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/team/1.jpg" alt="1.jpg">
							<div class="small-layer">
		  						<ul class="icon-font-thm list-inline ulockd-mrgn1225">
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-facebook"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-rss"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-google"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-pinterest"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-instagram"></i></a></li>
		  						</ul>
							</div>
						</div>
						<div class="team-details">
							<h3 class="member-name">Madeleine</h3>
							<h5 class="member-post">BrideMaids</h5>
							<p>Beautiful Comment From <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#">her..</a></p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pdng5">
					<div class="team-one text-center">
						<div class="team-thumb">
							<img class="img-responsive img-whp" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/team/2.jpg" alt="2.jpg">
							<div class="small-layer">
		  						<ul class="icon-font-thm list-inline ulockd-mrgn1225">
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-facebook"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-rss"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-google"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-pinterest"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-instagram"></i></a></li>
		  						</ul>
							</div>
						</div>
						<div class="team-details">
							<h3 class="member-name">Mackenzie</h3>
							<h5 class="member-post">BrideMaids</h5>
							<p>Beautiful Comment From <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#">her..</a></p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pdng5">
					<div class="team-one text-center">
						<div class="team-thumb">
							<img class="img-responsive img-whp" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/team/3.jpg" alt="3.jpg">
							<div class="small-layer">
		  						<ul class="icon-font-thm list-inline ulockd-mrgn1225">
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-facebook"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-rss"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-google"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-pinterest"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-instagram"></i></a></li>
		  						</ul>
							</div>
						</div>
						<div class="team-details">
							<h3 class="member-name">Savannah</h3>
							<h5 class="member-post">BrideMaids</h5>
							<p>Beautiful Comment From <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#">her..</a></p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pdng5">
					<div class="team-one text-center">
						<div class="team-thumb">
							<img class="img-responsive img-whp" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/team/4.jpg" alt="4.jpg">
							<div class="small-layer">
		  						<ul class="icon-font-thm list-inline ulockd-mrgn1225">
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-facebook"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-rss"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-google"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-pinterest"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-instagram"></i></a></li>
		  						</ul>
							</div>
						</div>
						<div class="team-details">
							<h3 class="member-name">Isabella</h3>
							<h5 class="member-post">BrideMaids</h5>
							<p>Beautiful Comment From <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#">her..</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row ulockd-mrgn1230">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="text-thm2">GroomsMen</h2>
						<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/title-bottom.png" alt="title-bottom.png">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pdng5">
					<div class="team-one text-center">
						<div class="team-thumb">
							<img class="img-responsive img-whp" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/team/5.jpg" alt="5.jpg">
							<div class="small-layer">
		  						<ul class="icon-font-thm list-inline ulockd-mrgn1225">
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-facebook"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-rss"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-google"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-pinterest"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-instagram"></i></a></li>
		  						</ul>
							</div>
						</div>
						<div class="team-details">
							<h3 class="member-name">Andrew Garfield</h3>
							<h5 class="member-post">GroomsMen</h5>
							<p>Beautiful Comment From <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#">Him..</a></p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pdng5">
					<div class="team-one text-center">
						<div class="team-thumb">
							<img class="img-responsive img-whp" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/team/6.jpg" alt="6.jpg">
							<div class="small-layer">
		  						<ul class="icon-font-thm list-inline ulockd-mrgn1225">
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-facebook"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-rss"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-google"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-pinterest"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-instagram"></i></a></li>
		  						</ul>
							</div>
						</div>
						<div class="team-details">
							<h3 class="member-name">Chris Evans</h3>
							<h5 class="member-post">GroomsMen</h5>
							<p>Beautiful Comment From <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#">Him..</a></p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pdng5">
					<div class="team-one text-center">
						<div class="team-thumb">
							<img class="img-responsive img-whp" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/team/7.jpg" alt="7.jpg">
							<div class="small-layer">
		  						<ul class="icon-font-thm list-inline ulockd-mrgn1225">
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-facebook"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-rss"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-google"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-pinterest"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-instagram"></i></a></li>
		  						</ul>
							</div>
						</div>
						<div class="team-details">
							<h3 class="member-name">Tobey Maguire</h3>
							<h5 class="member-post">GroomsMen</h5>
							<p>Beautiful Comment From <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#">Him..</a></p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pdng5">
					<div class="team-one text-center">
						<div class="team-thumb">
							<img class="img-responsive img-whp" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/team/8.jpg" alt="8.jpg">
							<div class="small-layer">
		  						<ul class="icon-font-thm list-inline ulockd-mrgn1225">
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-facebook"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-rss"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-google"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-pinterest"></i></a></li>
		  							<li><a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-instagram"></i></a></li>
		  						</ul>
							</div>
						</div>
						<div class="team-details">
							<h3 class="member-name">Ben Affleck</h3>
							<h5 class="member-post">GroomsMen</h5>
							<p>Beautiful Comment From <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#">Him..</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our RSVP -->
	<section class="ulockd-rsvp ulockd_bgi3 parallax" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
                    <form id="rsvp_form3" name="rsvp_form3" class="rsvp_form3 bgc-overlay-white7" method="post" novalidate="novalidate">
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center clearfix">
					        	<h1 class="text-thm2 ff-engnmt">Jessica & William Wedding RSVP</h1>
					        	<p>You're Invited To Jessica & William Wedding Reception On 15 November 2018.</p>
                            </div>
                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
                                <div class="form-group">
                                    <label for="form_name3">Full Name <small>*</small></label>
                                    <input id="form_name3" name="form_name3" class="form-control" placeholder="Enter a name">
                                </div>
                            </div>
                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
                                <div class="form-group">
								    <label for="FormControlSelect5">Are You Attending?</label>
								    <select class="form-control" id="FormControlSelect5">
								    	<option>Select an option</option>
								    	<option>All event</option>
								    	<option>Wedding</option>
								    	<option>Reception</option>
								    	<option>No</option>
								    	<option>Other</option>
								    </select>
								</div>
                            </div>
                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
                                <div class="form-group">
								    <label for="FormControlSelect6">Your Meal Selection</label>
								    <select class="form-control" id="FormControlSelect6">
								    	<option>Select an option</option>
								    	<option>Chicken</option>
								    	<option>Beef</option>
								    	<option>vegetarian</option>
								    	<option>Other</option>
								    </select>
								</div>
                            </div>
                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
                                <div class="form-group">
								    <label for="FormControlSelect7">Are You Bringing a guest?</label>
								    <select class="form-control" id="FormControlSelect7">
								    	<option>Select an option</option>
								    	<option>1</option>
								    	<option>2</option>
								    	<option>3</option>
								    	<option>More..</option>
								    </select>
								</div>
                            </div>
                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
                                <div class="form-group">
                                    <label for="form_name4">Guest Name</label>
                                    <input id="form_name4" name="form_name4" class="form-control" placeholder="Enter a name">
                                </div>
                            </div>
                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 clearfix">
                                <div class="form-group">
								    <label for="FormControlSelect8">Meal Selection</label>
								    <select class="form-control" id="FormControlSelect8">
								    	<option>Select an option</option>
								    	<option>Chicken</option>
								    	<option>Beef</option>
								    	<option>vegetarian</option>
								    	<option>Other</option>
								    </select>
								</div>
                            </div>
                            <div class="col-xs-12 col-sm-2 col-md-12 clearfix">
		                        <div class="form-group text-center">
		                            <input id="form_botcheck2" name="form_botcheck2" class="form-control" value="" type="hidden">
		                            <button type="submit" class="btn btn-lg ulockd-btn-thm2 bdrs20">Send Us</button>
		                        </div>
                            </div>
                        </div>
		            </form>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Blog -->
	<section class="ulockd-blog bgc-overlay-white8 ulockd_bgp3">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2><span class="text-thm2">Our Blog</span></h2>
						<img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/resource/title-bottom.png" alt="title-bottom.png">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="blog-post text-center wow fadeInUp" data-wow-duration="1s">
						<div class="thumb">
							<img class="img-responsive img-whp" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/blog/1.jpg" alt="1.jpg">
						</div>
						<div class="details">
							<h4 class="eventdate text-center ulockd-bgthm">Let's Move With Our Blog</h4>
							<h5>Our Beautiful Events</h5>
							<h3 class="post-title tdu-hvr">Tue 15 May 2018</h3>
							<p>Uorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nostrum hic quae ab nihil fuga? Maiores.</p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="blog-post text-center wow fadeInUp" data-wow-duration="1.3s">
						<div class="thumb">
							<img class="img-responsive img-whp" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/blog/2.jpg" alt="2.jpg">
						</div>
						<div class="details">
							<h4 class="eventdate text-center ulockd-bgthm">Let's Move With Our Blog</h4>
							<h5>Our Beautiful Events</h5>
							<h3 class="post-title tdu-hvr">Tue 15 May 2018</h3>
							<p>Uorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nostrum hic quae ab nihil fuga? Maiores.</p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="blog-post text-center wow fadeInUp" data-wow-duration="1.6s">
						<div class="thumb">
							<img class="img-responsive img-whp" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/blog/3.jpg" alt="3.jpg">
						</div>
						<div class="details">
							<h4 class="eventdate text-center ulockd-bgthm">Let's Move With Our Blog</h4>
							<h5>Our Beautiful Events</h5>
							<h3 class="post-title tdu-hvr">Tue 15 May 2018</h3>
							<p>Uorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nostrum hic quae ab nihil fuga? Maiores.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Partner -->
	<section class="ulockd-partner">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/partners/partner1.png" alt="partner1.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/partners/partner2.png" alt="partner2.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/partners/partner3.png" alt="partner3.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/partners/partner4.png" alt="partner4.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/partners/partner5.png" alt="partner5.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-partner-thumb text-center"><img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/partners/partner6.png" alt="partner6.png"></div></div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<section class="ulockd-footers bgc-overlay-white8 ulockd_bgi4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="footer-box text-center">
						<h2 class="text-thm2">Jessica & William</h2>
						<h1 class="text-thm2">Are Getting Married</h1>
					</div>
				</div>
			</div>
			<div class="row ulockd-mrgn1250">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="about-box2 text-center wow fadeInUp" data-wow-duration="1s">
						<div class="ab-thumb">
							<div class="about-icon2 text-center"><i class="flaticon-map-marker"></i></div>
						</div>
						<div class="ab-details">
							<h3>Location</h3>
							<p>Government buildings with lawns, benches & a fountain. 43 Park Row, New York, NY 10038.</p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="about-box2 text-center wow fadeInUp" data-wow-duration="1.3s">
						<div class="ab-thumb">
							<div class="about-icon2 text-center"><i class="flaticon-black-back-closed-envelope-shape"></i></div>
						</div>
						<div class="ab-details">
							<h3>Mail Us</h3>
							<p>coupleheart@mail.com <br> heartcouple@info.com </p>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="about-box2 text-center wow fadeInUp" data-wow-duration="1.6s">
						<div class="ab-thumb">
							<div class="about-icon2 text-center"><i class="flaticon-telephone-1"></i></div>
						</div>
						<div class="ab-details">
							<h3>Call Us</h3>
							<p>+99 55 66 88 526 <br> +55 99 66 88 526</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our CopyRight Section -->
	<section class="ulockd-copy-right">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="color-white">Couple Heart Copyright© 2017. <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/https://goo.gl/8HdP67" target="_blank">UnlockDesign</a> All right reserved.</p>
				</div>
			</div>
		</div>
	</section>

<a class="scrollToHome ulockd-bgthm" href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/#"><i class="fa fa-home"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootsnav.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/parallax.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/scrollto.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.counterup.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/gallery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/slider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/video-player.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.barfiller.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/timepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/tweetie.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/color-switcher.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/script.js"></script>
<script type='text/javascript'>
// [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );
new Photostack( document.getElementById( 'photostack-3' ), {
    callback : function( item ) {
        //console.log(item)
    }
});
</script>
</body>

</html>
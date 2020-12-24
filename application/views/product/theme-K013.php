<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="True-Love-Bootstrap Wedding Template">
    <meta name="keyword" content="your keyword goes to here">
    <meta name="author" content="themexriver">
    <title><?php echo $nama_panggilan_pengantin_pria; ?> & <?php echo $nama_panggilan_pengantin_wanita; ?></title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/nivo-lightbox.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/nivo-default.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/css/responsive.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/http://maps.googleapis.com/maps/api/js"></script>

    <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
</head>

<body>
    <div class="site-loder">
        <div class="heart"></div>
    </div> <!-- end of site-loder -->

    <header id="home" class="paling-atas">
        <nav class="navbar" id="nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="javascript:void(0);" onclick="goTo('paling-atas')"><?php echo $nama_panggilan_pengantin_pria; ?> <i class="fa fa-heart"></i> <?php echo $nama_panggilan_pengantin_wanita; ?></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="javascript:void(0);" onclick="goTo('paling-atas')">Home</a></li>
                        <li><a href="javascript:void(0);" onclick="goTo('pasangan')">Couple</a></li>
                        <li><a href="javascript:void(0);" onclick="goTo('kisah-kita')">Story</a></li>
                        <li class="theme-logo hidden-xs">
                            <a href="javascript:void(0);" onclick="goTo('paling-atas')">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/logo.png" alt="Logo" class="hidden-sm logo-rotating">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/logo-sm.png" alt="Logo" class="hidden-md hidden-lg logo-rotating">
                                <div>
                                    <div>
                                        <span><?php echo $nama_panggilan_pengantin_pria; ?></span>
                                        <span><?php echo $nama_panggilan_pengantin_wanita; ?></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><a href="javascript:void(0);" onclick="goTo('tanggal-event')">Events</a></li>
                        <li><a href="javascript:void(0);" onclick="goTo('galeri')">Gallery</a></li>
                        <li><a href="javascript:void(0);" onclick="goTo('buku-tamu')">RSVP</a></li>
                    </ul>
                </div>
            </div>
        </nav> <!-- end of nav -->

        <div class="title-bg">
            <div class="title">
                <h1>We are getting</h1>
                <h2>Married</h2>
                <p class="date"><?php echo tanggal_resepsi($tanggal_resepsi); ?></p>
            </div>
        </div>

        <div class="slider">
            <div class="slide-item slide-img-1">
                <div class="overlay"></div>
            </div>

            <div class="slide-item slide-img-2">
                <div class="overlay"></div>
            </div>
        </div> <!-- end of slider -->
    </header>  <!-- end of header -->

    <section class="wedding-announcement section-padding pasangan" id="couple" class="pasangan">
        <div class="heart heart-animation"></div>
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Pasangan yang Berbahagia</h2>
                    <p>Mempelai Pria & Wanita</p>
                </div>
            </div>

            <div class="row content">
                <div class="col col-sm-6 left-col">
                    <div class="col col-xs-6 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="frame">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/announcement/img-frame.png" alt="Frame" class="img img-responsive img-circle">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/announcement/romeo.jpg" alt="Groom" class="img img-responsive img-circle">
                        </div>
                        <h3><?php echo $nama_panggilan_pengantin_pria; ?></h3>
                        <h4>Mempelai Pria</h4>
                        <p>Anak ke-<?php echo $pengantin_pria_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_pria . ' & Ibu ' . $nama_ibu_pengantin_pria ; ?></p>
                    </div>
                </div>
                <div class="col col-sm-6 right-col">
                    <div class="col col-xs-6 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="frame">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/announcement/img-frame.png" alt="Frame" class="img img-responsive img-circle">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/announcement/juli.jpg" alt="Bride" class="img img-responsive img-circle">
                        </div>
                        <h3><?php echo $nama_panggilan_pengantin_wanita; ?></h3>
                        <h4>Mempelai Wanita</h4>
                        <p>Anak ke-<?php echo $pengantin_wanita_anank_ke; ?> dari <?php echo "Bapak " . $nama_ayah_pengantin_wanita . ' & Ibu ' . $nama_ibu_pengantin_wanita ; ?></p>
                    </div>
                </div>
            </div> <!-- end of content -->
        </div>  <!-- end of container -->
    </section> <!-- end of wedding-announcement -->

    <section class="love-story section-padding kisah-kita" id="story" class="kisah-kita">
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Our Love Story</h2>
                    <p>Sekilas moment-moment penting disaat pertama kali kita bertemu sampai akhirnya kita akan menuju moment puncak dari kisah ini</p>
                </div>
            </div>

            <div class="row content">
                <div class="row">
                    <div class="col col-xs-12 col-md-10 col-md-offset-1 col-sm-12 col-lg-8 col-lg-offset-2">
                        <div class="col col-xs-8 col-sm-8">
                            <h3><?php echo tanggal_resepsi($tanggal_pertemuan_pertama); ?></h3>
                            <h4>Pertemuan Pertama</h4>
                            <p><?php echo $resume_pertemuan_pertama; ?></p>
                        </div>
                        <div class="col col-xs-4 col-sm-4">
                            <div class="frame">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/love-story/img-frame-right.png" alt="Frame">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/love-story/img-1.jpg" alt="Love picture">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row middle-row">
                    <div class="col col-xs-12 col-md-10 col-md-offset-1 col-sm-12 col-lg-8 col-lg-offset-2 middle">
                        <div class="col col-xs-4 col-sm-4">
                            <div class="frame padding-left">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/love-story/img-frame-left.png" alt="Frame">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/love-story/img-2.jpg" alt="Love picture">
                            </div>
                        </div>
                        <div class="col col-xs-8 col-sm-8">
                            <h3><?php echo tanggal_resepsi($tanggal_kencan_pertama); ?></h3>
                            <h4>Kencan Pertama</h4>
                            <p><?php echo $resume_kencan_pertama; ?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-xs-12 col-md-10 col-md-offset-1 col-sm-12 col-lg-8 col-lg-offset-2">
                        <div class="col col-xs-8 col-sm-8">
                            <h3><?php echo tanggal_resepsi($tanggal_lamaran); ?></h3>
                            <h4>Lamaran</h4>
                            <p><?php echo $resemu_lamaran; ?></p>
                        </div>
                        <div class="col col-xs-4 col-sm-4">
                            <div class="frame">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/love-story/img-frame-right.png" alt="Frame">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/love-story/img-3.jpg" alt="Love picture">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row middle-row">
                    <div class="col col-xs-12 col-md-10 col-md-offset-1 col-sm-12 col-lg-8 col-lg-offset-2 middle">
                        <div class="col col-xs-4 col-sm-4">
                            <div class="frame padding-left">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/love-story/img-frame-left.png" alt="Frame">
                                <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/love-story/img-2.jpg" alt="Love picture">
                            </div>
                        </div>
                        <div class="col col-xs-8 col-sm-8">
                            <h3><?php echo tanggal_resepsi($tanggal_akad_story); ?></h3>
                            <h4>Hari yang Berbahagia Bagi Kami</h4>
                            <p><?php echo $resume_akad; ?></p>
                        </div>
                    </div>
                </div>
            </div> <!-- end of content -->
        </div> <!-- end of container -->
    </section> <!-- end of love-story --> 

    <section class="event section-padding" id="event" class="tanggal-event">
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Hari yang Berbahagia</h2>
                    <p>Akad & Resepsi</p>
                </div>
            </div>

            <div class="content">
                <div class="row" id="first-row">
                    <div class="col col-md-4">
                        <div class="event-frame">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/event/frame.png" alt="Event Frame" class="">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/event/img-1.jpg" alt="Event Picture" class="">
                        </div>
                    </div>
                    <div class="col col-md-8">
                        <h3>Akad Nikah</h3>
                        <p><span><i class="fa fa-calendar"></i><?php echo tanggal_resepsi($tanggal_akad); ?></span> <span><i class="fa fa-clock-o"></i><?php echo pukul($tanggal_akad); ?> WIB </span> <span><i class="fa fa-map-marker"></i><?php echo $tempat_akad; ?></span></p>
                    </div>
                </div>

                <div class="row middle" id="second-row">
                    <div class="col col-md-4 hidden-lg hidden-md">
                        <div class="event-frame">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/event/frame.png" alt="Event Frame" class="">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/event/img-2.jpg" alt="Event Picture" class="">
                        </div>
                    </div>
                    <div class="col col-md-8">
                        <h3>Resepsi Pernikahan</h3>
                        <p><span><i class="fa fa-calendar"></i><?php echo tanggal_resepsi($tanggal_resepsi); ?></span> <span><i class="fa fa-clock-o"></i><?php echo pukul($tanggal_resepsi); ?> WIB </span> <span><i class="fa fa-map-marker"></i><?php echo $tempat_resepsi; ?></span></p>
                    </div>
                    <div class="col col-md-4 hidden-sm hidden-xs">
                        <div class="event-frame">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/event/frame.png" alt="Event Frame" class="">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/event/img-2.jpg" alt="Event Picture" class="">
                        </div>
                    </div>
                </div>
            </div> <!-- end of content -->
        </div> <!-- end of container -->
    </section> <!-- end of event--> 

    <section class="gallery section-padding" id="gallery" class="galeri">
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Photo Album</h2>
                    <p>Sekilas moment-moment penting disaat pertama kali kita bertemu sampai akhirnya kita akan menuju moment puncak dari kisah ini</p>
                </div>
            </div>
        </div> <!-- end of container -->

        <div class="row content">
            <div class="row" id="shuffle-wrapper">
                <div class="col col-xs-6 col-sm-3 item">
                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-1.jpg" data-lightbox-gallery="gallery1">
                        <div class="overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-1.jpg" alt="Gallery image" class="img img-responsive">
                    </a>
                </div>
                <div class="col col-xs-6 col-sm-3 item">
                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-2.jpg" data-lightbox-gallery="gallery1">
                        <div class="overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-2.jpg" alt="Gallery image" class="img img-responsive">
                    </a>
                </div>
                <div class="col col-xs-6 col-sm-3 item">
                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-3.jpg" data-lightbox-gallery="gallery1">
                        <div class="overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-3.jpg" alt="Gallery image" class="img img-responsive">
                    </a>
                </div>
                <div class="col col-xs-6 col-sm-3 item">
                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-4.jpg" data-lightbox-gallery="gallery1">
                        <div class="overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-4.jpg" alt="Gallery image" class="img img-responsive">
                    </a>
                </div>
                <div class="col col-xs-6 col-sm-3 item">
                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-5.jpg" data-lightbox-gallery="gallery1">
                        <div class="overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-5.jpg" alt="Gallery image" class="img img-responsive">
                    </a>
                </div>
                <div class="col col-xs-6 col-sm-3 item">
                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-6.jpg" data-lightbox-gallery="gallery1">
                        <div class="overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-6.jpg" alt="Gallery image" class="img img-responsive">
                    </a>
                </div>
                <div class="col col-xs-6 col-sm-3 item">
                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-7.jpg" data-lightbox-gallery="gallery1">
                        <div class="overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-7.jpg" alt="Gallery image" class="img img-responsive">
                    </a>
                </div>
                <div class="col col-xs-6 col-sm-3 item">
                    <a href="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-8.jpg" data-lightbox-gallery="gallery1">
                        <div class="overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/images/home/gallery/img-8.jpg" alt="Gallery image" class="img img-responsive">
                    </a>
                </div>
            </div>
        </div> <!-- end of content -->
    </section> <!-- end of gallery--> 

    <section class="rsvp section-padding" id="rsvp" class="buku-tamu">
        <div class="overlay"></div>
        <div class="container">
            <div class="row section-heading">
                <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Submit Your Rsvp</h2>
                    <p>Apakah Kamu Akan Hadir?</p>
                </div>
            </div>

            <div class="row content">
                <div class="from-wrapper col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <form class="form-inline">
                        <div class="form-group col col-sm-12">
                            <input type="text" name="nama" placeholder="Nama*" id="nama" class="form-control">
                        </div>
                        <div class="form-group col col-sm-12">
                            <select name="status" class="form-control" id="status">
                                <option value="" disabled selected>Apakah Kamu akan Hadir?</option>
                                <option>Ya, Saya Akan hadir</option>
                                <option>Ya, Mungkin Saya akan hadir</option>
                                <option>Maaf Seperti Saya Belum bisa hadir</option>
                            </select>
                        </div>
                        <div class="form-group col col-sm-12">
                            <textarea id="pesan" placeholder="Silahkan ucapkan sesuatu*"></textarea>
                        </div>
                        <div class="form-group submit col-sm-12">
                            <input class="btn btn-default" type="button" value="Submit" onclick="buku_tamu()">
                        </div>
                    </form>
                </div>
            </div> <!-- end of content -->
        </div> <!-- end of container -->
    </section> <!-- end of rsvp -->

    <footer>
        <div class="row">
            <h2><?php echo $nama_panggilan_pengantin_pria; ?> &amp; <?php echo $nama_panggilan_pengantin_wanita; ?></h2>
            <span class="date"><?php echo tanggal_resepsi($tanggal_resepsi); ?> </span>
        </div>

        <div class="row">
            <div class="container">
                <div class="col col-sm-6">
                    <p>Copyright &copy; 2021 <a href="https://kiniwedding.com" target="_blank">kiniwedding.com</a> All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer> <!-- end of footer -->

    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.appear.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/jquery.shuffle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/classie.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/nivo-lightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/common-script.js"></script>
    <script src="<?php echo base_url(); ?>assets/<?php echo $product->code; ?>/js/index-script.js"></script>

    <?php echo $js; ?>

</body>
</html>

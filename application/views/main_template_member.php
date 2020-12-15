<!DOCTYPE html>
<html lang="en">
	<head>
	
	<!-- Google Tag Manager -->
<!--     <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MDT222X');</script> -->
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="event stack, eventstack, event, webinar, kegiatan, event online, workshop online">
    <meta name="keywords" content="event stack, eventstack, event, webinar, kegiatan, event online, workshop online">
    <meta name="author" content="eventstack.id">

    <?php if(isset($detail)){ ?>
      <?php if($type=="detail"){ ?>

    <meta name="thumbnailUrl" content="<?php echo ASSETS . "img/logo.png";?>" itemprop="thumbnailUrl" />
    <meta content="http//www.eventstack.id/" itemprop="url" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#71C2EA">
    <meta name="apple-mobile-web-app-title" content="eventstack">

    <link rel="apple-touch-icon" href="<?php echo str_replace("medium", "small", $detail->cover); ?>" sizes="152x152">
    <meta name="msapplication-TitleImage" content="<?php echo str_replace("medium", "small", $detail->cover); ?>">
    <meta name="msapplication-TitleColor" content="#000">
    <meta name="theme-color" content="#71C2EA">
    <link rel="amphtml" href="<?php echo base_url(); ?>event/<?php echo $detail->code; ?>/<?php echo $detail->slug; ?>">
    <meta name="adx:sections" content="read" /> 

    <meta property="og:type" content="event" />
    <meta property="og:site_name" content="EVENT STACK" />
    <meta name="ROBOTS" content="NOODP, NOYDIR" />
    <meta property="og:title" content="<?php echo $detail->title; ?>" />
    <meta property="og:url" content="<?php echo base_url(); ?>event/<?php echo $detail->code; ?>/<?php echo $detail->slug; ?>" />
    <meta property="og:image" content="<?php echo $detail->cover; ?>" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <meta property="og:type" content="webminar" />
    <meta property="og:description" content="<?php echo strip_tags($detail->description); ?>" />

    <meta itemprop="image" content="<?php echo $detail->cover; ?>" />
    <meta name="twitter:image:src" content="<?php echo $detail->cover; ?>" />
    <meta itemprop="dateModified" content="<?php echo date('Y-m-d H:i:s'); ?>" />
    <meta itemprop="datePublished" content="<?php echo date('Y-m-d H:i:s'); ?>" />
    <meta itemprop="articleSection" content="Webinar" />

    <meta name="twitter:site" content="@eventstack.id" />
    <meta name="twitter:creator" content="@eventstack.id" />
    <meta name="twitter:title" content="<?php echo $detail->title; ?>" />
    <meta name="twitter:description" content="<?php echo strip_tags($detail->description); ?>" />
    <meta name="twitter:card" content="summary_large_image" />

    <?php }} ?>
    
    <title><?php echo $title ?></title>
    <?php if(isset($detail) && $type=="detail"){ ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Event",
      "name": "<?php echo $detail->title; ?>",
      "startDate": "<?php echo date('Y-m-d',strtotime($detail->start_date)).'T'.date('H:i+07:00',strtotime($detail->start_date)); ?>",
      "endDate": "<?php echo date('Y-m-d',strtotime($detail->end_date)).'T'.date('H:i+07:00',strtotime($detail->end_date)); ?>",
      "eventAttendanceMode": "https://schema.org/MixedEventAttendanceMode",
      "eventStatus": "https://schema.org/EventScheduled",
      "location": [{
        "@type": "VirtualLocation",
        "url": "<?php echo base_url(); ?>event/<?php echo $detail->code; ?>/<?php echo $detail->slug; ?>"
      }],
      "image": [
        "<?php echo $detail->cover; ?>"
       ],
      "description": "<?php echo strip_tags($detail->description); ?>",
      "offers": {
        "@type": "Offer",
        "url": "<?php echo base_url(); ?>event/<?php echo $detail->code; ?>/<?php echo $detail->slug; ?>",
        "price": "<?php echo $detail->price; ?>",
        "priceCurrency": "IDR",
        "availability": "https://schema.org/InStock",
        "validFrom": "<?php echo date('Y-m-d'); ?>"
      },
      "performer": {
        "@type": "PerformingGroup",
        "name": "<?php echo $detail->speaker; ?>"
      },
      "organizer": {
        "@type": "Organization",
        "name": "Event Stack",
        "url": "https://eventstack.id"
      }
    }
    </script>
    <?php } ?>
	<link rel="icon" href="<?php echo base_url(); ?>assets_member/images/icon.png" type="images/png" />

	<link href="<?php echo base_url('assets_member/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets_member/'); ?>css/londinium-theme.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets_member/'); ?>css/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets_member/'); ?>css/icons.css" rel="stylesheet" type="text/css">
<!-- 	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
 -->
	<link href="<?php echo base_url('assets_member/'); ?>css/app.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets_member/'); ?>css/cropper.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets_member/'); ?>css/video-js.css" rel="stylesheet" type="text/css">
	
	<!-- <script src="https://kit.fontawesome.com/84e4b9961c.js" crossorigin="anonymous"></script> -->

	<script type="text/javascript">
		var waitingDialog = null;
        var confirmationDialog = null;
	</script>

	<link rel="stylesheet" href="<?php echo base_url('assets_member/'); ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
	<script src="<?php echo base_url('assets_member/'); ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

	<style type="text/css">
		.full-loader{
			position: fixed; 
			z-index:999999999999; 
			background:rgba(255,255,255,0.8); 
			display: flex; 
			flex-direction: row; 
			justify-content: center; 
			align-items: center; 
			width: 100%; 
			height: 100%;
		}
	</style>

	<script data-ad-client="ca-pub-9219118163808816" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	</head>
	<body>

		<div class="full-loader hidden">
			<div class="loader" style="margin: auto;"></div> 
		</div>
		<!-- Google Tag Manager (noscript) -->
<!-- 	    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDT222X"
	    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
	    <!-- End Google Tag Manager (noscript) -->
	    <!-- TOP MENU START -->
	    
		<!-- Navbar -->
		<div class="navbar navbar-inverse" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>">
					<img src="<?php echo ASSETS; ?>img/dashboard-logo.png" alt="" style="max-width: 195px; margin-top: -5px;">
					<a></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
						<span class="sr-only">Toggle navbar</span>
						<i class="icon-grid3"></i>
					</button>
					<button type="button" class="navbar-toggle offcanvas">
						<span class="sr-only">Toggle navigation</span>
						<i class="icon-paragraph-justify2"></i>
					</button>
				</a>
			</div>

			<?php $userData = $this->session->userdata("userpubliclog"); ?>
			<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
				<li class="user dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<?php if($userData['icon']!=null){ ?>
							<img src="<?php echo $userData['icon'];?>" alt="organization-icon" style="border-radius: 50%;" >
						<?php }else{ ?>
							<img src="http://placehold.it/300" alt="" style="border-radius: 50%;">
						<?php } ?>
						<span><?php echo $userData['name']; ?></span>
						
						<i class="caret"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-right icons-right">
						<li><a href="<?php echo base_url('member/profile'); ?>"><i class="icon-user"></i> Profile</a></li>
						<li><a href="<?php echo base_url('member/ubah-password'); ?>"><i class="icon-key"></i> Ganti Password</a></li>
						<li><a href="<?php echo base_url('logout'); ?>"><i class="icon-exit"></i> Logout</a></li>
					</ul>
				</li>
			</ul>

		</div>
		<!-- /navbar -->

		<div class="page-container">
			<!-- SIDEBAR -->
			<?php echo $sidebar; ?>
			<!-- /SIDEBAR -->

			<!-- PAGE CONTENT -->
			<div class="page-content">
				<?php echo $page_header; ?>
				<?php echo $page_content; ?>
				<?php echo $footer; ?>
			</div>
			<!-- /PAGE CONTENT -->
		</div>

		<?php if($this->session->flashdata('error')){ ?>
	    <script language='JavaScript'>
	        Swal({
	          type: 'error',
	          title: 'Oops...',
	          text: "<?php echo $this->session->flashdata('error'); ?>",
	        });
	    </script>
	    <?php }else if($this->session->flashdata('success')){ ?>
	    <script language='JavaScript'>
	        Swal({
	          type: 'success',
	          title: 'Success',
	          text: "<?php echo $this->session->flashdata('success'); ?>",
	        });
	    </script>
	    <?php } ?>

		
	</body>

</html>
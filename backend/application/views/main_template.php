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

    <title>CMS - KiniWedding</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/icon.png" type="images/png" />

	<link href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/'); ?>css/londinium-theme.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/'); ?>css/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/'); ?>css/icons.css" rel="stylesheet" type="text/css">
<!-- 	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
 -->
	<link href="<?php echo base_url('assets/'); ?>css/app.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/'); ?>css/cropper.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/'); ?>css/video-js.css" rel="stylesheet" type="text/css">
	
	<!-- <script src="https://kit.fontawesome.com/84e4b9961c.js" crossorigin="anonymous"></script> -->

	<script type="text/javascript">
		var waitingDialog = null;
        var confirmationDialog = null;
	</script>

	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
	<script src="<?php echo base_url('assets/'); ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

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
					<img src="<?php echo base_url(); ?>assets/images/dashboard-logo.png" alt="" style="max-width: 160px; margin-top: -5px;">
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

			<?php $userData = $this->session->userdata("adminData"); ?>
			<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
				<li class="user dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<?php if($userData['images']!=null){ ?>
							<img src="<?php echo $userData['images'];?>" alt="organization-icon" style="border-radius: 50%;" >
						<?php }else{ ?>
							<img src="http://placehold.it/300" alt="" style="border-radius: 50%;">
						<?php } ?>
						<span><?php echo $userData['name']; ?></span>
						
						<i class="caret"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-right icons-right">
						<!-- <li><a href="<?php echo base_url('member/profile'); ?>"><i class="icon-user"></i> Profile</a></li> -->
						<!-- <li><a href="<?php echo base_url('member/ubah-password'); ?>"><i class="icon-key"></i> Ganti Password</a></li> -->
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
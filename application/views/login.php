<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>KIMIA FARMA - CMS</title>

<link href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/'); ?>css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/'); ?>css/styles.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/'); ?>css/icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/charts/sparkline.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/switch.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/uploader/plupload.queue.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/wysihtml5/toolbar.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/timepicker.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/application.js"></script>

</head>

<body class="full-width page-condensed">
 
	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-right">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<a class="navbar-brand" href="#"><img src="<?php echo base_url('assets-web/'); ?>/images/logokimiafarma-old.png" style="height:30px;" alt="Londinium"></a>
		</div>


	</div>
	<!-- /navbar -->


	<!-- Login wrapper -->
	<div class="login-wrapper">
    	<form method="POST" action="<?php echo base_url('authentication'); ?>">
			<div class="popup-header">
				<span class="text-semibold">User Login</span>
			</div>

			<?php if(form_error('username')){ ?>
	            <div class="alert alert-danger" role="alert">
	                <?php echo form_error('username'); ?>
	            </div>
            <?php } else if(form_error('password')){ ?>
	            <div class="alert alert-danger" role="alert">
	                <?php echo form_error('password'); ?>
	            </div>
            <?php } ?>
            <?php 
                $message = $this->session->flashdata('message');
                if(isset($message)){
            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $message; ?>
            </div>
            <?php } ?>

			<div class="well">
				<div class="form-group has-feedback">
					<label>Email</label>
					<input name="username" type="text" class="form-control" placeholder="Username">
					<i class="icon-users form-control-feedback"></i>
				</div>

				<div class="form-group has-feedback">
					<label>Password</label>
					<input name="password" type="password" class="form-control" placeholder="Password">
					<i class="icon-lock form-control-feedback"></i>
				</div>

				<div class="row form-actions">
	
					<div class="col-xs-6"></div>
					<div class="col-xs-6">
						<button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Sign in</button>
					</div>
				</div>
			</div>
    	</form>
	</div>  
	<!-- /login wrapper -->



</body>
</html>
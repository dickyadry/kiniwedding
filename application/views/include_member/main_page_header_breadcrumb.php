<div class="page-header">
	<div class="page-title">
		<h3><?php echo $title; ?><small><?php echo $title_small; ?></small></h3>
	</div>
</div>


<!-- Breadcrumbs line -->
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="#">Home</a></li>

		<?php 
			$segment1 = ucwords(str_replace("-", " ",$this->uri->segment(1))); 
			$segment2 = ucwords(str_replace("-", " ",$this->uri->segment(2))); 
			$segment3 = ucwords(str_replace("-", " ",$this->uri->segment(3))); 
			$segment4 = ucwords(str_replace("-", " ",$this->uri->segment(4))); 
			$segment5 = ucwords(str_replace("-", " ",$this->uri->segment(5))); 
		?>

		<?php if($segment2!='' && $segment3!='' && $segment4!=''){ ?>
			<li><a href="<?php echo base_url(); ?>member/<?php echo $this->uri->segment(2); ?>"><?php echo $segment2; ?></a></li>
		<?php }else{ ?>
			<li class="active"><?php echo $segment2; ?></li>
		<?php } ?>

		<?php if($segment3!='' && $segment4!='' && $segment5!=''){ ?>
			<li><a href="<?php echo base_url(); ?><?php echo $segment3; ?>"><?php echo $segment3; ?></a></li>
		<?php }else{ ?>
			<li class="active"><?php echo $segment3; ?></li>
		<?php } ?>


<!-- 		
		<?php if($this->uri->segment(1)!='' && $this->uri->segment(2)!=''){ ?>
			<li><a href="<?php echo base_url($this->uri->segment(1)); ?>"><?php echo ucwords(str_replace("_", " ",$this->uri->segment(1))); ?></a></li>
		<?php }else{ ?>
			<li class="active"><?php echo ucwords(str_replace("_", " ",$this->uri->segment(1))); ?></li>
		<?php } ?>

		<?php if($this->uri->segment(2)!=''){ ?>
		<li class="active"><?php echo ucwords(str_replace("_", " ",$this->uri->segment(2))); ?></li>
		<?php } ?>
 -->
	</ul>

</div>
<!-- /breadcrumbs line -->


<div class="page-header">
	<div class="page-title">
		<!-- <h3>Welcome NAMA USER <small>Summary of your tasks</small></h3> -->
		<br><br>
	</div>
</div>


<!-- Breadcrumbs line -->
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li><a href="#">Home</a></li>

		<?php if($this->uri->segment(1)!='' && $this->uri->segment(2)!=''){ ?>
			<li><a href="<?php echo base_url($this->uri->segment(1)); ?>"><?php echo ucwords(str_replace("_", " ",$this->uri->segment(1))); ?></a></li>
		<?php }else{ ?>
			<li class="active"><?php echo ucwords(str_replace("_", " ",$this->uri->segment(1))); ?></li>
		<?php } ?>

		<?php if($this->uri->segment(2)!=''){ ?>
		<li class="active"><?php echo ucwords(str_replace("_", " ",$this->uri->segment(2))); ?></li>
		<?php } ?>

	</ul>

</div>
<!-- /breadcrumbs line -->
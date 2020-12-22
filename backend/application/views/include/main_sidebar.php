<?php 
$userData = $this->session->userdata("adminData"); 
?>
<div class="sidebar">
	<div class="sidebar-content">
		<div class="user-menu dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background: none;">
				<?php if($userData['images']!=null){ ?>
					<img src="<?php echo $userData['images'];?>" alt="">
				<?php }else{ ?>
					<img src="http://placehold.it/300" alt="">
				<?php } ?>
				<div class="user-info">
					<?php echo $userData['name']; ?><span></span>
				</div>
			</a>
		</div>

		<!-- NAV -->
		<ul class="navigation">
			<li <?php if($this->uri->segment(1)=='dashboard'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>dashboard"><span>Dashboard</span> <i class="icon-dashboard"></i></a></li>
<!-- 			<li>
				<a href="#"><span>Event</span> <i class="icon-star3"></i></a>
				<ul>
					<li <?php if($this->uri->segment(1)=='event'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url('event') ?>">List Event</a></li>
					<li <?php if($this->uri->segment(1)=='event-selection'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url('event-selection') ?>">Event Selection</a></li>
					<li <?php if($this->uri->segment(1)=='reschedule-event'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url('reschedule-event') ?>">Reschedule Event</a></li>
					<li <?php if($this->uri->segment(1)=='cancel-event'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url('cancel-event') ?>">Cancel Event</a></li>
					<li <?php if($this->uri->segment(1)=='closed-event'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url('closed-event') ?>">Closed Event</a></li>
				</ul>
			</li>
			<li <?php if($this->uri->segment(1)=='balance'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>balance"><span>Balance</span> <i class="icon-coin"></i></a>
			</li>
			<li <?php if($this->uri->segment(1)=='legal'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>legal"><span>Legal</span> <i class="icon-file6"></i></a>
			</li> -->
			<li <?php if($this->uri->segment(1)=='contact'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>contact"><span>Contact</span> <i class="icon-bubble-dots2"></i></a>
			</li>
			<li <?php if($this->uri->segment(1)=='category'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>category"><span>Category</span> <i class="icon-archive"></i></a>
			<li <?php if($this->uri->segment(1)=='product' || $this->uri->segment(1)=='product-images'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>product"><span>Product</span> <i class="icon-archive"></i></a>
			<li <?php if($this->uri->segment(1)=='sales-order'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>sales-order"><span>Sales Order</span> <i class="icon-cart"></i></a>
			<li <?php if($this->uri->segment(1)=='member'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member"><span>Member</span> <i class="icon-users"></i></a>
			<li <?php if($this->uri->segment(1)=='user'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>user"><span>Manage User</span> <i class="icon-user"></i></a></li>
		</ul>

	</div>
</div>

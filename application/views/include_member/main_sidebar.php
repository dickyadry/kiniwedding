<?php 
$userData = $this->session->userdata("userpubliclog"); 
?>
<div class="sidebar">
	<div class="sidebar-content">
		<div class="user-menu dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background: none;">
				<?php if($userData['icon']!=null){ ?>
					<img src="<?php echo $userData['icon'];?>" alt="organization-icon" style="border-radius: 5px;">
				<?php }else{ ?>
					<img src="http://placehold.it/300" alt="">
				<?php } ?>
				<div class="user-info">
					<?php echo $userData['name']; ?><span><?php echo $userData['organization']; ?></span>
				</div>
			</a>
		</div>

		<!-- NAV -->
		<ul class="navigation">
			<label style="color: #FF9D00; font-size: 14px; padding: 10px; ">DASHBOARD</label>
			<li <?php if($this->uri->segment(2)=='dashboard'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/dashboard"><span>Home</span> <i class="icon-dashboard"></i></a></li>
			<li <?php if($this->uri->segment(2)=='tiket' || $this->uri->segment(2)=='tiket-aktif' || $this->uri->segment(2)=='tiket-lalu'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/tiket"><span>Tiket Saya</span> <i class="icon-ticket"></i></a></li>
			<li <?php if($this->uri->segment(2)=='event' || $this->uri->segment(2)=='event-draf' || $this->uri->segment(2)=='event-aktif' || $this->uri->segment(2)=='event-lalu'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event"><span>Event Saya</span> <i class="icon-trophy"></i></a></li>
			<li <?php if($this->uri->segment(2)=='pesanan-kamu' || $this->uri->segment(2)=='pesanan-pending'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/pesanan-kamu"><span>Pesanan Kamu</span> <i class="icon-trophy"></i></a></li>
			<li <?php if($this->uri->segment(2)=='sales-order'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/sales-order"><span>Sales Order</span> <i class="icon-cart"></i></a></li>
			<li <?php if($this->uri->segment(2)=='esertifikat'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/esertifikat"><span>E-Sertifikat</span> <i class="icon-file3"></i></a></li>
			<li <?php if($this->uri->segment(2)=='materi'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/materi"><span>Materi</span> <i class="icon-file"></i></a></li>

			<label style="color: #FF9D00; font-size: 14px; padding: 10px; ">PORFIL</label>
			<li <?php if($this->uri->segment(2)=='profile'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/profile"><span>Profil Kamu</span> <i class="icon-user"></i></a></li>
			<li <?php if($this->uri->segment(2)=='ubah-password'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/ubah-password"><span>Ubah Password</span> <i class="icon-lock"></i></a></li>
<!-- 			<li <?php if($this->uri->segment(2)=='legal'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/legal"><span>Legal</span> <i class="icon-file6"></i></a></li> -->
			<li <?php if($this->uri->segment(2)=='rekening'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/rekening"><span>Rekening</span> <i class="icon-file4"></i></a></li>
		<!-- 	<li <?php if($this->uri->segment(2)=='saldo'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/saldo"><span>Saldo</span> <i class="icon-coin"></i></a></li> -->
		</ul>

	</div>
</div>

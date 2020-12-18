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
					<?php echo $userData['name']; ?></span>
				</div>
			</a>
		</div>

		<!-- NAV -->
		<ul class="navigation">
			<label style="color: #FF9D00; font-size: 14px; padding: 10px; ">DASHBOARD</label>
			<li <?php if($this->uri->segment(2)=='dashboard'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/dashboard"><span>Home</span> <i class="icon-dashboard"></i></a></li>
			<li <?php if($this->uri->segment(2)=='pesanan-saya'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/pesanan-saya"><span>Pesanan Saya</span> <i class="icon-trophy"></i></a></li>


			<label style="color: #FF9D00; font-size: 14px; padding: 10px; ">PORFIL</label>
			<li <?php if($this->uri->segment(2)=='profile'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/profile"><span>Profil Kamu</span> <i class="icon-user"></i></a></li>
			<li <?php if($this->uri->segment(2)=='ubah-password'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/ubah-password"><span>Ubah Password</span> <i class="icon-lock"></i></a></li>
<!-- 			<li <?php if($this->uri->segment(2)=='legal'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/legal"><span>Legal</span> <i class="icon-file6"></i></a></li> -->
<!-- 			<li <?php if($this->uri->segment(2)=='rekening'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/rekening"><span>Rekening</span> <i class="icon-file4"></i></a></li>
 -->		<!-- 	<li <?php if($this->uri->segment(2)=='saldo'){ ?>  class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/saldo"><span>Saldo</span> <i class="icon-coin"></i></a></li> -->
		</ul>

	</div>
</div>

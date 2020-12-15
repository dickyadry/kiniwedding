<!-- <div class="dash__menu js-dash-sticky">
    <ul class="dash__menu__wrap">
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'profile'?'active':''; ?>">
            <a href="<?php echo base_url(); ?>member/profile" class="dash__menu__link">Profil Saya</a>
        </li>
        <li class="dash__menu__item <?php echo ($this->uri->segment(2) == 'myorder' || $this->uri->segment(2) == 'confirmorder')?'active':''; ?>">
            <a href="<?php echo base_url(); ?>member/myorder" class="dash__menu__link">Status Pemesanan</a>
        </li>
        <li class="dash__menu__item <?php echo ($this->uri->segment(2) == 'myevent' || $this->uri->segment(2) == 'create-event' || $this->uri->segment(2) == 'edit-event' || $this->uri->segment(2) == 'list-peserta')?'active':''; ?>">
            <a href="<?php echo base_url(); ?>member/myevent" class="dash__menu__link">My Event</a>
        </li>
        <li class="dash__menu__item <?php echo ($this->uri->segment(2) == 'saldo' || $this->uri->segment(2) == 'form-saldo' ||  $this->uri->segment(2) == 'account'  || $this->uri->segment(2) == 'form-account' || $this->uri->segment(2) == 'edit-account')?'active':''; ?>">
            <a href="<?php echo base_url(); ?>member/saldo" class="dash__menu__link">Saldo</a>
        </li>
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'setting'?'active':''; ?>">
            <a href="<?php echo base_url(); ?>member/setting" class="dash__menu__link">Ubah Password</a>
        </li>
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'konfirmasi'?'active':''; ?>" style="display: none;">
            <a href="<?php echo base_url(); ?>member/konfirmasi" class="dash__menu__link">Konfirmasi Pembayaran</a>
        </li>
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'langganan'?'active':''; ?>" style="display: none;">
            <a href="<?php echo base_url(); ?>member/langganan" class="dash__menu__link">Langganan Saya</a>
        </li>
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'riwayat'?'active':''; ?>" style="display: none;">
            <a href="<?php echo base_url(); ?>member/riwayat" class="dash__menu__link">Riwayat Pembelian</a>
        </li>
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'logout'?'active':''; ?>">
            <a href="<?php echo base_url(); ?>logout" class="dash__menu__link">Logout</a>
        </li>
    </ul>
</div> -->

<div class="dash__menu js-dash-sticky">
    <ul class="dash__menu__wrap">
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'dashboard'?'active':''; ?>">
            <a href="<?php echo base_url(); ?>member/dashboard" class="dash__menu__link">Dashboard</a>
        </li>
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'profile'?'active':''; ?>">
            <a href="<?php echo base_url(); ?>member/profile" class="dash__menu__link">Tiket Saya</a>
        </li>
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'profile'?'active':''; ?>">
            <a href="<?php echo base_url(); ?>member/profile" class="dash__menu__link">Event Saya</a>
        </li>
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'profile'?'active':''; ?>">
            <a href="<?php echo base_url(); ?>member/profile" class="dash__menu__link">Informasi Dasar</a>
        </li>
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'profile'?'active':''; ?>">
            <a href="<?php echo base_url(); ?>member/profile" class="dash__menu__link">Ubah Password</a>
        </li>
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'profile'?'active':''; ?>">
            <a href="<?php echo base_url(); ?>member/profile" class="dash__menu__link">Informasi Legal</a>
        </li>
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'profile'?'active':''; ?>">
            <a href="<?php echo base_url(); ?>member/profile" class="dash__menu__link">Rekening Kamu</a>
        </li>
        <li class="dash__menu__item <?php echo $this->uri->segment(2) == 'logout'?'active':''; ?>">
            <a href="<?php echo base_url(); ?>logout" class="dash__menu__link">Logout</a>
        </li>
    </ul>
</div>
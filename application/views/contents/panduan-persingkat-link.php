<style type="text/css">
	.tnc__box img{
		border: 1px solid #333;
		margin-top: 5px;
		margin-bottom: 5px;
	}
	.tnc__box p,ol li{
		color: #aaa;
	}
	.tnc__box b{
		color: #FFF;
	}
	.button-panduan{
		border: 1px solid #F79801;
		padding: 5px 10px;
		border-radius: 50px;
		line-height: 40px;	
	}
	.button-panduan a{
		font-size: 14px;
	}
	.active-panduan{
		background: #f79801;
		color:#FFF
	}
</style>
<br><br>
<div>
    <div class="content text-center">
        <div class="sb-content-box">
            <h2 class="title animated">PANDUAN</h2>
        </div>
    </div>
</div>
<br>

<div class="container" style="max-width: 800px;">

<div style="text-align: center;">
	<span class="button-panduan <?php if($this->uri->segment(2)=='registrasi' || $this->uri->segment(2)==''){ ?>active-panduan<?php } ?>"><a href="<?php echo base_url();?>panduan/registrasi">Registrasi</a></span>
	<span class="button-panduan <?php if($this->uri->segment(2)=='buat-event'){ ?>active-panduan<?php } ?>"><a href="<?php echo base_url();?>panduan/buat-event">Buat Event</a></span>
	<span class="button-panduan <?php if($this->uri->segment(2)=='formulir-data-tambahan'){ ?>active-panduan<?php } ?>"><a href="<?php echo base_url();?>panduan/formulir-data-tambahan">Formulir Data Tambahan</a></span>
	<span class="button-panduan <?php if($this->uri->segment(2)=='persingkat-link'){ ?>active-panduan<?php } ?>"><a href="<?php echo base_url();?>panduan/persingkat-link">Persingkat Link</a></span>
	<span class="button-panduan <?php if($this->uri->segment(2)=='multiple-form'){ ?>active-panduan<?php } ?>"><a href="<?php echo base_url();?>panduan/multiple-form">Multiple Form</a></span><br/>
	<span class="button-panduan <?php if($this->uri->segment(2)=='data-peserta'){ ?>active-panduan<?php } ?>"><a href="<?php echo base_url();?>panduan/data-peserta">Data Peserta</a></span>
	<span class="button-panduan <?php if($this->uri->segment(2)=='esertifikat'){ ?>active-panduan<?php } ?>"><a href="<?php echo base_url();?>panduan/esertifikat">Buat & Kirim E-Sertifikat</a></span>
	<span class="button-panduan <?php if($this->uri->segment(2)=='pesan-tiket'){ ?>active-panduan<?php } ?>"><a href="<?php echo base_url();?>panduan/pesan-tiket">Pesan Tiket</a></span>
</div>

<div class="tnc__box">

<h3 style="text-align: justify;"><strong>4.&nbsp;</strong><strong>PERSINGKAT LINK</strong></h3>
<img src="<?php echo base_url(); ?>assets/panduan/persingkat-link/persingkat-link-1.png" alt="Panduan Formulir Data Tambahan">
<p>Jika posisi kamu berada di halaman utama <b>Event Stack</b> dan kamu ingin mengubah link event, kamu bisa tekan tombol <b>EVENT SAYA</b> agar diarahakan ke halaman kumpulan event yang telah kamu buat.</p>

<img src="<?php echo base_url(); ?>assets/panduan/persingkat-link/persingkat-link-2.png" alt="Panduan Formulir Data Tambahan">
<p>Temukan event yang sudah kamu publikasikan dengan memilih tab <b>Event Aktif</b> Namun jika event mu belum dipublikasikan, maka pilih tab <b>Event Draf</b>, kemudian klik poster event.</p>

<img src="<?php echo base_url(); ?>assets/panduan/persingkat-link/persingkat-link-3.png" alt="Panduan Formulir Data Tambahan">
<p>Setelah klik poster event, kamu bisa langsung memilih tab <b>Detail Event</b>, pada halaman <b>Detail Event</b> kamu bisa mengubah link event kamu seperti https://eventstack.id/r/RYJA9CRLZ8 menjadi https://eventstack.id/r/webinar2020 kamu juga bisa langsung mengcopy bahkan membagikan link event ke media sosial seperti Facebook, Twitter, Line dan Whatsapp.</p>



</div>
</div>
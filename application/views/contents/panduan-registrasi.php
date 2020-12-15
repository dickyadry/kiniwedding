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

<h3 style="text-align: justify;"><strong>1.&nbsp;</strong><strong>REGISTRASI</strong></h3>
<img src="<?php echo base_url(); ?>assets/panduan/registrasi/register-1.png" alt="Panduan Registrasi">
<p>Untuk mulai menggunakan platform <b>Event Stack</b> langkah awal yang harus dilakukan adalah login sebagai member <b>Event Stack</b>. Kamu dapat login menggunakan akun Google atau Facebook, bisa juga dengan mengisi form registrasi di halaman registrasi <b>Event Stack</b> https://eventstack.id/register  atau mengikuti langkah-langkah seperti gambar di atas, jika kamu memilih untuk mengisi form registrasi maka kamu akan diarahkan ke halaman berikut :</p>

<img src="<?php echo base_url(); ?>assets/panduan/registrasi/register-2.png" alt="Panduan Registrasi">
<p>Pertama kamu diharuskan mengisi data seperti nama lengkap, username, password, email dan nomor handphone. Kemudian kamu harus centang checkbox untuk menyetujui syarat dan ketentuan <b>Event Stack</b>. Selanjutnya centang i’m not a robot, kemudian klik tombol daftar. Setelah klik tombol daftar, maka <b>Event Stack</b> akan mengirimkan email verifikasi ke alamat email kamu.</p>

<img src="<?php echo base_url(); ?>assets/panduan/registrasi/register-3.png" alt="Panduan Registrasi">
<p>Berikut adalah isi dari email <b>AKTIVASI</b> yang dikirimkan <b>Event Stack</b>, kamu tinggal klik tombol <b>AKTIVASI</b>, setelah kamu kilik tombol <b>AKTIVASI</b>, maka kamu sudah dapat login dan menggunakan fitur-fitur <b>Event Stack</b>.</p>

</div>
</div>
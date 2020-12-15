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

<h3 style="text-align: justify;"><strong>7.&nbsp;</strong><strong>BUAT & KIRIM E-SERTIFIKAT</strong></h3>
<img src="<?php echo base_url(); ?>assets/panduan/esertifikat/esertifikat-1.png" alt="Panduan E-Sertifikat">
<p>Untuk membuat dan mengirimkan <b>e-sertifkat</b> kepada peserta, kamu bisa masuk ke halaman <p>Data Peserta</p> dan tekan tombol <b>Buat Sertifikat.</b></p>

<img src="<?php echo base_url(); ?>assets/panduan/esertifikat/esertifikat-2.png" alt="Panduan E-Sertifikat">
<p>Setelah menakan tombol <b>Buat Sertifikat</b> maka akan muncul form seperti gambar di atas. Untuk memulai membuat dan mengirim <b>e-sertifkat</b> kamu bisa lakukan langkah-langkah berikut:</p>

<ol>
	<li>Upload template sertifikat kamu yang belum berisikan nama peserta.</li>
	<li>Template yang kamu upload akan muncul pada tahap ini.</b></li>
	<li>Kemudian kamu bisa menambahkan Nama Peserta, QRCode, Kode Sertifikat di dalam template <b>e-sertifikat</b> yang kamu upload dengan cara mencentang checkbox yang tersedia kemudian drag and drop objek ke tempat yang kamu inginkan.</li>
	<li>Untuk mempreview <b>e-sertifkat</b> dalam bentuk pdf kamu bisa tekan tombol <b>Preview E-Sertifikat</b> dan hasilnya dapat dilihat seperti gambar berikut.<br> <img src="<?php echo base_url(); ?>assets/panduan/esertifikat/esertifikat-3.png" alt="Panduan E-Sertifikat"></li>
	<li>Untuk menyimpan <b>e-sertifikat</b> yang sudah kamu buat kamu bisa tekan tombol Simpan.</li>
	<li>Sebelum kamu mengirimkan <b>e-sertifikat</b> yang sudah kamu buat ke peserta, kamu bisa tentukan jenis tiket penerima sertifikat & syarat penerima sertifikat</li>
	<li>Setelah kamu melakukan langkah-langkah di atas kamu bisa langsung menekan tombol Kirim untuk mengirim <b>e-sertifikat</b> yang sudah kamu buat.</li>
</ol>

<img src="<?php echo base_url(); ?>assets/panduan/esertifikat/esertifikat-4.png" alt="Panduan E-Sertifikat">
<p>Peserta dapat mendowload <b>e-sertifikat dengan</b> cara login ke platform <b>Event Stack</b> menggunakan email yang digunakan pada saat registrasi event kemudian masuk ke menu <b>e-sertifikat</b> kemudian klik <b>e-sertifikat</b> kamu untuk mulai mendownload.</p>

</div>
</div>
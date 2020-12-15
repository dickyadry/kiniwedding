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

<h3 style="text-align: justify;"><strong>8.&nbsp;</strong><strong>PESAN TIKET</strong></h3>
<img src="<?php echo base_url(); ?>assets/panduan/pesan-tiket/pesan-tiket-1.png" alt="Panduan Pesan Tiket">
<p>Untuk mulai memesan tiket melalui <b>Event Stack</b> pertama kunjungi www.eventstack.id maka kamu akan di arahkan ke halaman utama <b>Event Stack</b>. Pada halaman utama <b>Event Stack</b> kamu bisa meilihat berbagai event dan dikelompokan berdasarkan <b>Event Terbaru</b>, <b>Event Pilihan</b> dan <b>Event Terdekat</b>. Jika kamu ingin melihat lebih banyak event kamu bisa klik tombol <b>LIHAT LEBIHLLANJUT</b> atau klik menu <b>Event.</b></p>

<img src="<?php echo base_url(); ?>assets/panduan/pesan-tiket/pesan-tiket-2.png" alt="Panduan Pesan Tiket">
<p>Pada halaman <b>Event</b> kamu bisa melihat lebih banyak event yang bisa kamu ikuti kamu juga bisa mengurutkannya berdasar event terupdate atau event terdekat dan kamu juga bisa melakukan pencarian berdasarkan kategori event dan kata kunci yang kamu masukan di kolom pencarian. Setelah kamu menemukan event yang kamu ingin ikuti klik poster event setelah itu kamu akan diarahkan kehalaman Detail Event.</p>

<img src="<?php echo base_url(); ?>assets/panduan/pesan-tiket/pesan-tiket-3.png" alt="Panduan Pesan Tiket">
<p>Pada halaman <b>Detail Event</b> kamu bisa melihat informasi lebih rinci terkait event yang akan diikuti, setelah membaca seluruh informasi kamu bisa langsung menentukan jumlah tiket  yang akan dipesan lalu tekan tombol <b>Register.</b></p>

<img src="<?php echo base_url(); ?>assets/panduan/pesan-tiket/pesan-tiket-4.png" alt="Panduan Pesan Tiket">
<p>Jika kamu belum login ke platform <b>Event Stack</b> maka kamu akan diarahkan terlebih dahulu kehalaman <b>Login</b> seperti pada gambar di atas.</p>

<img src="<?php echo base_url(); ?>assets/panduan/pesan-tiket/pesan-tiket-5.png" alt="Panduan Pesan Tiket">
<p>Namun jika kamu sudah dalam posisi login maka kamu akan langsung diarahakan kehalaman <b>Formulir Pendaftaran Event</b>. Pada halaman ini lengkapi semua data sesuai ketentuan yang diberlakukan oleh Stack Creator, setelah melengkapi semua data kamu bisa langsung menekan tombol <b>BAYAR TIKET.</b></p>

<img src="<?php echo base_url(); ?>assets/panduan/pesan-tiket/pesan-tiket-6.png" alt="Panduan Pesan Tiket">
<p>Setelah menekan tombol <b>BAYAR TIKET</b> maka kamu akan diarahkan ke halaman <b>Complete Order</b> jika event yang kamu ikuti adalah event <b>berbayar</b> kamu harus menunggu Stack Creator memverifikasi pembayaran kamu namun jika kamu mengikuti event <b>Free/Gratis</b> maka kamu akan langsung mendapatkan <b>E-Ticket</b> yang di kirim melalui email. berikut adalah contoh <b>E-Ticket</b> yang akan kamu terima</p>
<img src="<?php echo base_url(); ?>assets/panduan/pesan-tiket/pesan-tiket-7.png" alt="Panduan Pesan Tiket">

</div>
</div>
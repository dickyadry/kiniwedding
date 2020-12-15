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

<h3 style="text-align: justify;"><strong>3.&nbsp;</strong><strong><b>Formulir Data Tambahan</b></strong></h3>
<img src="<?php echo base_url(); ?>assets/panduan/formulir-data-tambahan/formulir-data-tambahan-1.png" alt="Panduan <b>Formulir Data Tambahan</b>">
<p>Jika posisi kamu berada di halaman utama <b>Event Stack</b> dan kamu ingin membuat <b>Formulir Data Tambahan</b>, kamu bisa tekan tombol <b>EVENT SAYA</b> agar diarahakan ke halaman kumpulan event yang telah kamu buat.</p>

<img src="<?php echo base_url(); ?>assets/panduan/formulir-data-tambahan/formulir-data-tambahan-2.png" alt="Panduan <b>Formulir Data Tambahan</b>">
<p>Temukan event yang sudah kamu publikasikan dengan memilih tab <b>Event Aktif</b>, namun jika event mu belum dipublikasikan, maka pilih tab <b>Event Draf</b>, kemudian klik poster event.</p>

<img src="<?php echo base_url(); ?>assets/panduan/formulir-data-tambahan/formulir-data-tambahan-3.png" alt="Panduan <b>Formulir Data Tambahan</b>">
<p>Setelah klik poster event, kamu bisa langsung memilih tab <b>Formulir Data Tambahan</b>, <b>Formulir Data Tambahan</b> ini dapat digunakan untuk membuat formulir registrasi peserta disesuaikan dengan kebutuhan event, secara default ketika registrasi peserta diwajibkan mengisi nama lengkap, email, dan nomor handphone namun ketika Stack Creator perlu menambahakan informasi tambahan seperti (Usia, Profesi, Hobi dll) maka Stack Creator dapat menambahkannya melalu <b>Formulir Data Tambahan</b>. Untuk membuat <b>Formulir Data Tambahan</b>, kamu bisa mumulai dengan menentukan posisi pengisian <b>Formulir Data Tambahan</b>, kemudian klik tombol <b><b>Tambah Pertanyaan</b>.</b>
       </p>

<img src="<?php echo base_url(); ?>assets/panduan/formulir-data-tambahan/formulir-data-tambahan-4.png" alt="Panduan <b>Formulir Data Tambahan</b>">
<p>Setelah menekan tombol <b>Tambah Pertanyaan</b>, maka akan muncul form seperti gambar di atas :</p>
<ol>
	<li>Tentunkan apakah pertanyaan yang kamu tambahkan wajib untuk diisi atau optional.</li>
	<li>Masukan pertanyaan tambahan kamu.</b></li>
	<li>Pilih tipe form.</li>
	<li>Jika kamu memilih tipe form checkbox atau radiobox, maka akan muncul tombol <b>Tambah Jawaban</b>.</li>
	<li>Dengan menekan tombol <b>Tambah Jawaban</b>, kamu dapat mengisi jawaban dari pertanyaan yang kamu buat.</li>
	<li>Klik simpan untuk menyelesaikan <b>Formulir Data Tambahan</b> yang kamu buat.</li>
</ol>

<img src="<?php echo base_url(); ?>assets/panduan/formulir-data-tambahan/formulir-data-tambahan-5.png" alt="Panduan <b>Formulir Data Tambahan</b>">
<p>Setelah klik tombol simpan, maka kamu dapat melihat formulir yang kamu buat. Jika ingin menambah pertanyaan berikutnya, kamu bisa mengulangi langkah sebelumnya kamu juga bisa mengedit dan menghapus jika terjadi kesalahan.</p>

<img src="<?php echo base_url(); ?>assets/panduan/formulir-data-tambahan/formulir-data-tambahan-6.png" alt="Panduan <b>Formulir Data Tambahan</b>">
<p>Jika diawal kamu memilih posisi pengisian <b>Formulir Data Tambahan</b> pada opsi <b>event page</b>, maka pengisian data akan dilakukan pada saat pemesanan tiket/registrasi peserta seperti gambar di atas.</p>

<img src="<?php echo base_url(); ?>assets/panduan/formulir-data-tambahan/formulir-data-tambahan-7.png" alt="Panduan <b>Formulir Data Tambahan</b>">
<p>Jika memilih opsi <b>Mail Customer</b>, maka pengisian data akan dilakukan setelah pemesanan tiket/registrasi peserta. Link <b>Formulir Data Tambahan</b> akan tertera pada <b>E-Ticket.</b></p>

</div>
</div>
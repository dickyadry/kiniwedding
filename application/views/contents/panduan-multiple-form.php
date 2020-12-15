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

<h3 style="text-align: justify;"><strong>5.&nbsp;</strong><strong>MULTIPLE FORM</strong></h3>
<img src="<?php echo base_url(); ?>assets/panduan/multiple-form/multiple-form-1.png" alt="Panduan Multiple Form">
<p>Pada halaman <b>Detail Event</b> terdapat <b>Multiple Form</b>, <b>Multiple Form</b> dapat digunakan untuk kebutuhan seperti Quiz, Absensi, Kuesioner, Post Test, Pre Test, dan lain-lain. Untuk membuat <b>Multiple Form</b> ,kamu dapat menekan tombol <b>MULTIPLE FORM.</b></p>

<img src="<?php echo base_url(); ?>assets/panduan/multiple-form/multiple-form-2.png" alt="Panduan Multiple Form">
<p>Setelah klik tombol <b>MULTIPLE FORM</b>, kamu harus mengisi nama formulir dan deskripsi formulir seperti dicontohkan pada gambar di atas, kemudian klik Save. Maka kamu akan diarahakan ke halaman <b>Multiple Form.</b></p>

<img src="<?php echo base_url(); ?>assets/panduan/multiple-form/multiple-form-3.png" alt="Panduan Multiple Form">
<p>klik tombol <b>Tambah Pertanyaan</b>, setelah itu masukan pertanyaan dan pilih tipe form, kemudian klik <b>Save</b> untuk menyimpan pertanyaan.</p>

<img src="<?php echo base_url(); ?>assets/panduan/multiple-form/multiple-form-4.png" alt="Panduan Multiple Form">
<p>Setelah klik <b>Save</b> maka hasilnya bisa dilihat seperti gambar di atas. Jika ingin menambah pertanyaan berikutnya kamu bisa mengulangi langkah sebelumnya kamu juga bisa mengedit dan menghapus jika terjadi kesalahan.</p>

<img src="<?php echo base_url(); ?>assets/panduan/multiple-form/multiple-form-5.png" alt="Panduan Multiple Form">
<p>Pada halaman <b>Detail Event</b> kamu bisa melihat list <b>Multiple Form</b> yang sudah kamu buat, kamu juga bisa melihat total responden dan data hasil pengisian form, edit multiple form, copy link, dan hapus form.</p>

<img src="<?php echo base_url(); ?>assets/panduan/multiple-form/multiple-form-6.png" alt="Panduan Multiple Form">
<p>Jika kamu klik tombol <b>Total Responden</b> di halaman <b>Detail Event</b>, maka kamu akan melihat detail data seperti pada gambar di atas, kamu juga bisa melakukan pencarian berdasarkan nama, email dan nomor hp peserta, kamu juga bisa mengexport ke dalam bentuk excel.</p>

</div>
</div>
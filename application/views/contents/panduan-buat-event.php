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

		<h3 style="text-align: justify;"><strong>2.&nbsp;</strong><strong>BUAT EVENT</strong></h3>
		<img src="<?php echo base_url(); ?>assets/panduan/buat-event/buat-event-1.png" alt="Panduan Buat Event">
		<p>Untuk mulai membuat event di <b>Event Stack</b>, pastikan kamu sudah login terlebih dahulu. Kemudian klik tombol <b>BUAT EVENT</b> di pojok kiri atas. Setelah klik tombol <b>BUAT EVENT</b>, maka kamu akan diarahkan kehalaman form pembuatan event.</p>

		<img src="<?php echo base_url(); ?>assets/panduan/buat-event/buat-event-2.png" alt="Panduan Buat Event"/>
		<p>Setelah masuk ke halaman pembuatan event, kamu harus menyiapkan data event yang akan kamu publikasikan, berikut adalah langkah-langkah dan data apa saja yang harus disiapkan :</p>

		<ol>
			<li><b>Upload Poster</b>. Kamu harus menyiapkan poster event maksimal 500 KB dan disaranakan untuk mengupload poster berbentuk persegi.</li>
			<li><b>Isi nama penyelenggara event (Stack Creator) dan upload icon/logo penyelenggara event (Stack Creator) bila ada.</b></li>
			<li><b>Isi Nama Event dan Pemateri/Pengisi Acara.</b> Kamu boleh memasukan lebih dari satu pengisi acara dengan tidak melebihi maksimal karakter yaitu 255 karakter. Jika melebihi batas maksimal, maka karakter akan terpotong.</li>
			<li><b>Mengisi jam dan tanggal event.</b> Untuk pengisian jam dan tanggal event harap di perhatikan baik-baik karena setelah kamu mempublikasikan event, kamu tidak dapat lagi mengedit tanggal event, kamu bisa mengedit tanggal event dengan cara mengisi form pengajuan pergantian tanggal event terlebih dahulu.</li>
			<li><b>Pemilihan jenis tiket.</b> Ditahap ini kamu bisa menentukan apakah tiket event kamu berbayar atau free, kamu juga bisa menggunakan keduanya jika terdapat dua atau lebih jenis tiket event dengan ketentuan berbeda dalam satu event. <br><img src="<?php echo base_url(); ?>assets/panduan/buat-event/buat-event-3.png" alt="Panduan Buat Event"> </li>
			<li><b>Menentukan jenis event.</b> Kamu bisa pilih jenis event kamu apakah public atau private. Jika public, maka event kamu dapat dilihat oleh semua orang dan ditemukan di halaman pencarian <b>Event Stack.</b> Namun jika private, event kamu tidak akan ditemukan di halaman pencarian, event kamu hanya dapat ditemukan dengan cara membagikan link event.</li>
			<li><b>Menentukan tipe event.</b> Ditahap ini kamu bisa tentukan tipe event mu, jika kamu memilih tipe event online, harap perhatikan aturan yang diberlakukan. Setelah itu isi platfrom yang digunakan untuk event seperti (Zoom, Google Meet, Youtube, Whatsapp dll) dan masukan juga link event. Namun jika kamu memilih event offline, maka kamu diwajibkan mengisi nama tempat dan lokasi event. <br><img src="<?php echo base_url(); ?>assets/panduan/buat-event/buat-event-4.png" alt="Panduan Buat Event"></li>
			<li><b>Kategori event.</b> Pilih kategori yang sesuai dengan tema event mu agar peserta lebih mudah menemukannya berdasarkan pencarian kategori event.</li>
			<li><b>Pengaturan tambahan.</b> Kamu bisa mengatur ulang pengaturan tambahan dan sesuaikan dengan ketentuan event mu.</li>
			<li><b>Masukan deskripsi dan syarat dan ketentuan event.</b></li>
			<li><b>Simpan ke draf atau publish event</b>. Jika kamu tidak ingin langsung mempublikasikan event mu, atau ingin menambahkan formulir data tambahan terlebih dahulu, tekan tombol <b>SIMPAN KE DRAF</b> dan melanjutkan membuat formulir data tambahan, namun jika kamu ingin langsung mempublikasikan event mu bisa langsung menekan tombol <b>PUBLISH EVENT.</b></li>
		</ol>
		<br>
		<p>Setelah kamu menekan tombol <b>PUBSLIH EVENT</b> maka event kamu akan muncul di halaman utama dan halaman event pada paltform <b>Event Stack</b> seperti terlihat  pada gambar berikut.</p>

		<img src="<?php echo base_url(); ?>assets/panduan/buat-event/buat-event-5.png" alt="Panduan Buat Event">
		<img src="<?php echo base_url(); ?>assets/panduan/buat-event/buat-event-6.png" alt="Panduan Buat Event">

	</div>
</div>
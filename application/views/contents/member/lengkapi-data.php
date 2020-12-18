<!-- Profile grid -->
<form role="form" method="POST" id="target" action="<?php echo base_url(); ?>member/pesanan-saya/save-lengkapi-data/<?php echo $sales_order_id; ?>">
<div class="row">
    
    <div class="container" style="max-width: 800px;  padding-top:0">
        <div class="col-lg-12">  
            <div class="tabbable page-tabs text-center">

                <h1>FORM LENGKAPI DATA<br><br></h1>

                <div class="tab-content text-left">
                    <h2>Data Pengantin Pria<br></h2>
                    <div class="block">
                        <div class="tabbable">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a></a></li>
                            </ul>

                            <div class="tab-content with-padding">
                                <div class="tab-pane fade in active" id="justified-tab1">

                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group" id="group-nama_pengantin_pria">
                                                <label>Nama Lengkap Pengantin Pria<span class="label_danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php echo isset($data->nama_pengantin_pria)?$data->nama_pengantin_pria:''; ?>" name="nama_pengantin_pria" id="nama_pengantin_pria" onkeyup="cekForm('nama_pengantin_pria')">
                                                <i id="alert-nama_pengantin_pria" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group" id="group-nama_panggilan_pengantin_pria">
                                                <label>Nama Panggilan Pengantin Pria<span class="label_danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php echo isset($data->nama_panggilan_pengantin_pria)?$data->nama_panggilan_pengantin_pria:''; ?>" name="nama_panggilan_pengantin_pria" id="nama_panggilan_pengantin_pria" onkeyup="cekForm('nama_panggilan_pengantin_pria')">
                                                <i id="alert-nama_panggilan_pengantin_pria" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group" id="group-pengantin_pria_anank_ke">
                                                <label>Anak Ke<span class="label_danger">*</span></label>
                                                <input type="number" class="form-control" value="<?php echo isset($data->pengantin_pria_anank_ke)?$data->pengantin_pria_anank_ke:1; ?>" name="pengantin_pria_anank_ke" id="pengantin_pria_anank_ke" onkeyup="cekForm('pengantin_pria_anank_ke')">
                                                <i id="alert-pengantin_pria_anank_ke" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group" id="group-nama_ibu_pengantin_pria">
                                                <label>Nama Ibu Pengantin Pria <span class="label_danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php echo isset($data->nama_ibu_pengantin_pria)?$data->nama_ibu_pengantin_pria:''; ?>" name="nama_ibu_pengantin_pria" id="nama_ibu_pengantin_pria" onkeyup="cekForm('nama_ibu_pengantin_pria')">
                                                <i id="alert-nama_ibu_pengantin_pria" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group" id="group-nama_ayah_pengantin_pria">
                                                <label>Nama Ayah Pengantin Pria <span class="label_danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php echo isset($data->nama_ayah_pengantin_pria)?$data->nama_ayah_pengantin_pria:''; ?>" name="nama_ayah_pengantin_pria" id="nama_ayah_pengantin_pria" onkeyup="cekForm('nama_ayah_pengantin_pria')">
                                                <i id="alert-nama_ayah_pengantin_pria" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group" id="group-resume_pengantin_pria">
                                        <label>Resume</label>
                                        <textarea class="form-control" name="resume_pengantin_pria" id="resume_pengantin_pria"><?php echo isset($data->resume_pengantin_pria)?$data->resume_pengantin_pria:''; ?></textarea>
                                        <i><b>Contoh:</b> Aku hanya laki-laki biasa, yang ingin menjadi luar biasa mengalahkan segala ketakutan ditemani wanita sehabat dirimu yang mampu membuat ku tak lagi ragu dengan masa depan.</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content text-left">
                    <h2>Data Pengantin Wanita<br></h2>
                    <div class="block">
                        <div class="tabbable">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a></a></li>
                            </ul>

                            <div class="tab-content with-padding">
                                <div class="tab-pane fade in active" id="justified-tab1">

                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group" id="group-nama_pengantin_wanita">
                                                <label>Nama Lengkap Pengantin Wanita<span class="label_danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php echo isset($data->nama_pengantin_wanita)?$data->nama_pengantin_wanita:''; ?>" name="nama_pengantin_wanita" id="nama_pengantin_wanita" onkeyup="cekForm('nama_pengantin_wanita')">
                                                <i id="alert-nama_pengantin_wanita" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group" id="group-nama_panggilan_pengantin_wanita">
                                                <label>Nama Panggilan Pengantin Wanita<span class="label_danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php echo isset($data->nama_panggilan_pengantin_wanita)?$data->nama_panggilan_pengantin_wanita:''; ?>" name="nama_panggilan_pengantin_wanita" id="nama_panggilan_pengantin_wanita" onkeyup="cekForm('nama_panggilan_pengantin_wanita')">
                                                <i id="alert-nama_panggilan_pengantin_wanita" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group" id="group-pengantin_wanita_anank_ke">
                                                <label>Anak Ke<span class="label_danger">*</span></label>
                                                <input type="number" class="form-control" value="<?php echo isset($data->pengantin_wanita_anank_ke)?$data->pengantin_wanita_anank_ke:1; ?>" name="pengantin_wanita_anank_ke" id="pengantin_wanita_anank_ke" onkeyup="cekForm('pengantin_wanita_anank_ke')">
                                                <i id="alert-pengantin_wanita_anank_ke" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group" id="group-nama_ibu_pengantin_wanita">
                                                <label>Nama Ibu Pengantin Wanita <span class="label_danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php echo isset($data->nama_ibu_pengantin_wanita)?$data->nama_ibu_pengantin_wanita:''; ?>" name="nama_ibu_pengantin_wanita" id="nama_ibu_pengantin_wanita" onkeyup="cekForm('nama_ibu_pengantin_wanita')">
                                                <i id="alert-nama_ibu_pengantin_wanita" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group" id="group-nama_ayah_pengantin_wanita">
                                                <label>Nama Ayah Pengantin Wanita <span class="label_danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php echo isset($data->nama_ayah_pengantin_wanita)?$data->nama_ayah_pengantin_wanita:''; ?>" name="nama_ayah_pengantin_wanita" id="nama_ayah_pengantin_wanita" onkeyup="cekForm('nama_ayah_pengantin_wanita')">
                                                <i id="alert-nama_ayah_pengantin_wanita" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group" id="group-resume_pengantin_wanita">
                                        <label>Resume</label>
                                        <textarea class="form-control" name="resume_pengantin_wanita" id="resume_pengantin_wanita"><?php echo isset($data->resume_pengantin_wanita)?$data->resume_pengantin_wanita:''; ?></textarea>
                                        <i><b>Contoh:</b> Aku tak akan pernah menjadi wanita sempuran tanpa kehadiran seorang lelaki yang mampu membingbingku menuju masa depan.</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="tab-content text-left">
                    <h2>Moment<br></h2>
                    <div class="block">
                        <div class="tabbable">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a></a></li>
                            </ul>

                            <div class="tab-content with-padding">
                                <div class="tab-pane fade in active" id="justified-tab1">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group" id="group-tanggal_pertemuan_pertama">
                                                <label>Tanggal Pertemuan Pertama</label>
                                                <input type="text" class="datetime-tanggal_pertemuan_pertama form-control" value="<?php echo isset($data->tanggal_pertemuan_pertama)?$data->tanggal_pertemuan_pertama:''; ?>" name="tanggal_pertemuan_pertama" id="tanggal_pertemuan_pertama" onkeyup="cekForm('tanggal_pertemuan_pertama')">
                                                <i id="alert-tanggal_pertemuan_pertama" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group" id="group-resume_pertemuan_pertama">
                                        <label>Resume Pertemuan Pertama</label>
                                        <textarea class="form-control" value="<?php echo isset($data->resume_pertemuan_pertama)?$data->resume_pertemuan_pertama:''; ?>" name="resume_pertemuan_pertama" id="resume_pertemuan_pertama"><?php echo isset($data->resume_pertemuan_pertama)?$data->resume_pertemuan_pertama:''; ?></textarea>
                                        <i><b>Contoh:</b> Aku hanya laki-laki biasa, yang ingin menjadi luar biasa mengalahkan segala ketakutan ditemani wanita sehabat dirimu yang mampu membuat ku tak lagi ragu dengan masa depan.</i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group" id="group-tanggal_kencan_pertama">
                                                <label>Tanggal Kencan Pertama</label>
                                                <input type="text" class="datetime-tanggal_kencan_pertama form-control" value="<?php echo isset($data->tanggal_kencan_pertama)?$data->tanggal_kencan_pertama:''; ?>" name="tanggal_kencan_pertama" id="tanggal_kencan_pertama" onkeyup="cekForm('tanggal_kencan_pertama')">
                                                <i id="alert-tanggal_kencan_pertama" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group" id="group-resume_kencan_pertama">
                                        <label>Resume Kencan Pertama</label>
                                        <textarea class="form-control" value="<?php echo isset($data->resume_pengantin_wanita)?$data->resume_pengantin_wanita:''; ?>" name="resume_kencan_pertama" id="resume_pengantin_wanita"><?php echo isset($data->resume_kencan_pertama)?$data->resume_kencan_pertama:''; ?></textarea>
                                        <i><b>Contoh:</b> Aku ajak Dia makan diluar sambil, sambil nonton setelah itu aku ungkapkan keseriusan ku dalam hubungan ini dan ternyata Ricka mempunya keseriusan yang sama </i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group" id="group-tanggal_lamaran">
                                                <label>Tanggal Lamaran</label>
                                                <input type="text" class="datetime-tanggal_lamaran form-control" value="<?php echo isset($data->tanggal_lamaran)?$data->tanggal_lamaran:''; ?>" name="tanggal_lamaran" id="tanggal_lamaran" onkeyup="cekForm('tanggal_lamaran')">
                                                <i id="alert-tanggal_lamaran" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group" id="group-resemu_lamaran">
                                        <label>Resume Lamaran</label>
                                        <textarea class="form-control" value="<?php echo isset($data->resemu_lamaran)?$data->resemu_lamaran:''; ?>" name="resemu_lamaran" id="resemu_lamaran"><?php echo isset($data->resemu_lamaran)?$data->resemu_lamaran:''; ?></textarea>
                                        <i><b>Contoh:</b> Sampailah pada langkah yang lebih serius Aku mendatangi rumah Ricka bersama dengan keluarga ku untuk dengan tujuan untuk melamarnya.</i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group" id="group-tanggal_akad_story">
                                                <label>Tanggal Akad Nikah</label>
                                                <input type="text" class="datetime-tanggal_akad_story form-control" value="<?php echo isset($data->tanggal_akad_story)?$data->tanggal_akad_story:''; ?>" name="tanggal_akad_story" id="tanggal_akad_story" onkeyup="cekForm('tanggal_akad_story')">
                                                <i id="alert-tanggal_akad_story" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group" id="group-resume_akad">
                                        <label>Resume Akad Nikah</label>
                                        <textarea class="form-control" value="<?php echo isset($data->resume_akad)?$data->resume_akad:''; ?>" name="resume_akad" id="resume_akad"><?php echo isset($data->resume_akad)?$data->resume_akad:''; ?></textarea>
                                        <i><b>Contoh:</b> Dan pada akhirnya kita telah menentukan tanggal yang sakral yang akan mengikat kita dalam sebuah hubungan yang dinamakan pernikahan.</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>

                <div class="tab-content text-left">
                    <h2>Tanggal & Lokasi Acara<br></h2>
                    <div class="block">
                        <div class="tabbable">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a></a></li>
                            </ul>

                            <div class="tab-content with-padding">
                                <div class="tab-pane fade in active" id="justified-tab1">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group" id="group-tanggal_akad">
                                                <label>Tanggal Akad Nikah<span class="label_danger">*</span></label>
                                                <input type="text" class="datetime-tanggal_akad form-control" value="<?php echo isset($data->tanggal_akad)?$data->tanggal_akad:''; ?>" name="tanggal_akad" id="tanggal_pertemuan_pertama" onkeyup="cekForm('tanggal_akad')">
                                                <i id="alert-tanggal_akad" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group" id="group-tempat_akad">
                                        <label>Lokasi Akad Nikah<span class="label_danger">*</span></label>
                                        <textarea class="form-control" value="<?php echo isset($data->tempat_akad)?$data->tempat_akad:''; ?>" name="tempat_akad" id="tempat_akad" onkeyup="cekForm('tempat_akad')"><?php echo isset($data->resume_pertemuan_pertama)?$data->tempat_akad:''; ?></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group" id="group-tanggal_resepsi">
                                                <label>Tanggal Resepsi<span class="label_danger">*</span></label>
                                                <input type="text" class="datetime-tanggal_resepsi form-control" value="<?php echo isset($data->tanggal_resepsi)?$data->tanggal_resepsi:''; ?>" name="tanggal_resepsi" id="tanggal_resepsi" onkeyup="cekForm('tanggal_resepsi')">
                                                <i id="alert-tanggal_resepsi" class="icon icon-warning form-control-feedback hidden"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="group-tempat_resepsi">
                                        <label>Lokasi Resepsi<span class="label_danger">*</span></label>
                                        <textarea class="form-control" value="<?php echo isset($data->tempat_resepsi)?$data->tempat_resepsi:''; ?>" name="tempat_resepsi" id="tempat_resepsi" onkeyup="cekForm('tempat_resepsi')"><?php echo isset($data->tempat_resepsi)?$data->tempat_resepsi:''; ?></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <br>
                    </div>
                </div>

                <div class="tab-content text-left">
                    <h2>Data Lainnya<br></h2>
                    <div class="block">
                        <div class="tabbable">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a></a></li>
                            </ul>

                            <div class="tab-content with-padding">
                                <div class="tab-pane fade in active" id="justified-tab1">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12">
                                            <div class="form-group" id="group-nama_panggilan_pengantin_pria">
                                                <label>Link Undangan Website<span class="label_danger">*</span></label>
                                                <input type="text" class="form-control" value="https://kiniwedding.com/inv/" readonly style="background: #FFF !important; border-bottom: 0px;">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-xs-12">
                                            <div class="form-group" id="group-link_web">
                                                <label>&nbsp;</label>
                                                <input type="text" class="form-control" value="<?php echo isset($data->link_web)?$data->link_web:''; ?>" name="link_web" id="link_web" onkeyup="cekForm('link_web')">
                                                <b>Contoh:</b> https://kiniwedding.com/inv/ricka-dan-dicky <i>(link ini akan disebar ke setiap orang yang akan kamu undang)</i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group" id="group-link_google_drive">
                                                <label>Link Google Drive<span class="label_danger">*</span></label>
                                                <input type="text" class="form-control" value="<?php echo isset($data->link_google_drive)?$data->link_google_drive:''; ?>" name="link_google_drive" id="link_google_drive" onkeyup="cekForm('link_google_drive')">
                                                <b>Contoh:</b> Upload file kamu ke google drive dan masukan link google drive kamu pada form di atas<br>
                                                Total Gambar yang di perlukan berjumalah <?php echo count($product_images); ?> terdiri dari:
                                                <ul>
                                                    <?php foreach ($product_images as $key => $value) { ?>
                                                        <li><?php echo $value->total; ?> Foto Untuk <?php echo $value->type; ?></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" id="group-kata_mutiara">
                                        <label>Kata Mutiara</label>
                                        <textarea class="form-control" value="<?php echo isset($data->kata_mutiara)?$data->kata_mutiara:''; ?>" name="kata_mutiara" id="kata_mutiara"><?php echo isset($data->kata_mutiara)?$data->kata_mutiara:''; ?></textarea>
                                        <i><b>Contoh:</b>Dan diantara tanda-tanda kekuasaanNya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikanNya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berpikir (QS. Ar. Ruum — (30):21)
                                    </div>

                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-right-icon btn-warning btn-lg" type="button" onclick="validateForm()"><i class="icon-disk"></i> Simpan</button>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

</form>

<!-- /form modal crop -->
<div id="crop_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-upload"></i>Form Upload</h4>
            </div>

            <div class="modal-body with-padding">

                <button type="button" class="btn btn-warning" onclick="document.getElementById('cover_file').click();">UPLOAD BANNER</button>
                <br><br>
                
                <form method="post" action="" enctype="multipart/form-data" id="myform">
                    <div class="col-md-12">
                        <input type="file" id="cover_file" name="cover_file" onchange="uploadCropper(this);" style="display: none" class="form-control" accept="image/*">
                    </div>
                    <!-- Crop and preview -->   
                    <div class="col-md-12">
                        <div class="row">
                            <div class="avatar-wrapper" style="margin-bottom: 20px; height: 400px;"></div>
                        </div>
                    </div> 
                    <div class="avatar-upload">
                        <input type="hidden" class="avatar-data" name="avatar_data">
                    </div>                                                 
                </form>

            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="submitCrop();">Crop & Save</button>
            </div>
        </div>
    </div>
</div>
<!-- /form modal crop-->

<!-- /form modal icon -->
<div id="crop_icon_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-upload"></i>Form Upload</h4>
            </div>

            <div class="modal-body with-padding">

                <button type="button" class="btn btn-warning" onclick="document.getElementById('icon_file').click();">UPLOAD ICON</button>
                <br><br>
                
                <form method="post" action="" enctype="multipart/form-data" id="myform">
                    <div class="col-md-12">
                        <input type="file" id="icon_file" name="icon_file" onchange="uploadIconCropper(this);" style="display: none" class="form-control" accept="image/*">
                    </div>
                    <!-- Crop and preview -->   
                    <div class="col-md-12">
                        <div class="row">
                            <div class="avatar-wrapper-icon" style="margin-bottom: 20px; height: 400px;"></div>
                        </div>
                    </div> 
                    <div class="avatar-upload">
                        <input type="hidden" class="avatar-data-icon" name="avatar_data_icon">
                    </div>                                                 
                </form>

            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="submitIconCrop();">Crop & Save</button>
            </div>
        </div>
    </div>
</div>
<!-- /form modal  icon-->

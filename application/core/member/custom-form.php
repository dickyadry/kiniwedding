<style type="text/css">
    .bootstrap-datetimepicker-widget{
        width: 275px !important;
    }
    .multiselect-container.dropdown-menu{
        width: 250px;
    }
</style>

<!-- Profile grid -->
<div class="row">
    
    <?php $segment = $this->uri->segment(3); ?>
    <div class="col-lg-12">
        <div class="tabbable page-tabs">
            <ul class="nav nav-pills nav-justified">
                <li <?php if($segment=='detail-event'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/detail-event/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"><i class="icon-trophy"></i> Detail Event</a></li>
                <li <?php if($segment=='data-peserta'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/data-peserta/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"><i class="icon-barcode"></i> Data Peserta</a></li>
                <li <?php if($segment=='laporan-penjualan'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/laporan-penjualan/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"><i class="icon-stats2"></i> Laporan Penjualan</a></li>
                <li <?php if($segment=='checkin-pengunjung' || $segment=='laporan-checkin'){?> class="active" <?php } ?>>
                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-barcode"></i> Check-in</a>
                        <ul class="dropdown-menu icons-right">
                            <li><a href="<?php echo base_url(); ?>member/event/checkin-pengunjung/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"><i class="icon-qrcode"></i> Check-in Pengunjung</a></li>
                            <li><a href="<?php echo base_url(); ?>member/event/laporan-checkin/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"><i class="icon-file2"></i> Laporan Check-in</a></li>
                        </ul>
                </li>
                <li <?php if($segment=='formulir-data-tambahan'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/formulir-data-tambahan/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"><i class="icon-file6"></i> Formulir Data Tambahan</a></li>
            </ul>
        </div>
    </div>

    <div class="container" style="max-width: 800px; margin-top: 100px; padding-top:0">
        <div class="col-lg-12">  
            <div class="tabbable page-tabs">
                <div class="tab-content text-left">
                    <h2>Formulir Pemesanan Tiket/Formulir Pendaftaran<br></h2>
                    <span>Ayo buat formulir pemesanan tiket/formulir pendaftaran mu dan sesuaikan dengan kebutuhan event mu</span>
                    <br><br>

                    <div class="block">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h6 class="panel-title"><i class="icon-users"></i>Default Form</h6></div>
                            <div class="panel-body">

                                <div class="form-group" id="group-bank_name">
                                    <label>Nama</label>
                                    <input type="text" class="form-control">
                                    <span class="help-block">Isi nama dengan benar (nama biasa digunakan untuk E-Sertifikat)</span>
                                </div>

                                <div class="form-horizontal" >
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label>Email</label>
                                            <div class="row">
                                                <div class="col-sm-12 has-feedback">
                                                    <input type="text" class="form-control"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Nomor Hanphone</label>
                                            <div class="row">
                                                <div class="col-sm-12 has-feedback">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <span>Untuk membuat pertanyaan baru seperti profesi, asal universitas, kota tinggal dan lain lain kamu bisa klik tombol <b>Tambah Pertanyaan</b></span>
                        <br><br>

                        <!-- <div class="tabbable">
                            <input type="hidden" id="position" value="<?php echo (isset($data->position) && $data->position!=null)?$data->position:'event-page'; ?>">
                            <ul class="nav nav-tabs nav-justified">
                                <li <?php if((isset($data->position) && $data->position=='event-page' || $data->position==null)){ ?>class="active" <?php } ?>><a href="#justified-tab1" data-toggle="tab" onclick="selectPosition('event-page')"><span id="event-page" class="icon-checkmark-circle"></span> Event Page</a></li>
                                <li <?php if((isset($data->position) && $data->position=='mail-customer')){ ?>class="active" <?php } ?>><a href="#justified-tab2" data-toggle="tab" onclick="selectPosition('mail-customer')"><span id="mail-customer" class="icon-checkmark-circle hidden"></span> Mail Customer</a> </li>
                            </ul>

                            <div class="tab-content with-padding">
                                <div class="tab-pane fade in active" id="justified-tab1">
                                    <ol>
                                        <li>Pembeli akan mengisi Formulir Data Tambahan sebelum pembelian tiket.</li>
                                        <li>Formulir Data Tambahan dapat diakses pada Event Page, saat pembeli mengisi data pembelian tiket.</li>
                                    </ol>
                                </div>

                                <div class="tab-pane fade" id="justified-tab2">
                                    <ol>
                                        <li>Pembeli akan mengisi Formulir Data Tambahan setelah pembelian tiket.</li>
                                        <li>Formulir Data Tambahan dapat diakses melalui kotak masuk email pembeli tiket.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <br> -->

                        <div class="row">
                            <div class="col-md-12 text-right">

                                <button id="remove_all" onclick="removeAllQuestion()" type="button" class="btn btn-right-icon btn-danger btn-lg hidden"><i class="icon-remove4"></i> Hapus semua pertanyaan</button>

                                <button onclick="openModal()" type="button" class="btn btn-right-icon btn-warning btn-lg"><i class="icon-plus-circle"></i> Tambah Pertanyaan</button>
                            </div>
                        </div>
                        <br>

                        <div id="show-custom-form"></div>

                    </div>
                
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Form modal -->
<div id="form_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-paragraph-justify2"></i>Custom Form</h4>
            </div>

            <!-- Form inside modal -->
            <input type="hidden" id="custom_form_id" value="0">

            <div class="modal-body with-padding">
                <div class="block-inner text-danger">
                    <h6 class="heading-hr">Buat formulir tambahan anda di sini<small class="display-block">Create your additional form here</small></h6>
                </div>

                <form class="form-horizontal" action="<?php echo base_url(); ?>" role="form">
                    <div class="callout callout-danger fade in">
                        <div class="block-inner">
                            <label class="checkbox-inline checkbox-danger">
                                <input type="checkbox" name="is_required" id="is_required" >
                                 Wajib Diisi 
                            </label>
                        </div>

                        <input id="product_id" type="hidden" class="form-control" value="<?php echo $data->id; ?>">

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-8" id="group-question">
                                        <input id="question" type="text" class="form-control" name="question" placeholder="Judul Pertanyaan" onkeyup="cekForm('question')">
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="type" name="type" onchange="selectType()">
                                            <option value="input">Text Input</option>
                                            <option value="textarea">Textarea</option>
                                            <option value="option">Dropdown</option>
                                            <option value="radiobox">Radiobox</option>
                                            <option value="checkbox">Checkbox</option>
                                            <option value="date">Date</option>
                                            <option value="file">File</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" id="input-description">
                            <div class="col-sm-12">
                                <input type="text" id="description" class="form-control" placeholder="Deskripsi Pertanyaan">
                            </div>
                        </div>

                        <div class="form-group hidden" id="button-answer">
                            <div class="col-sm-12 text-right">
                                <button onclick="addAnswer()" type="button" class="btn btn-right-icon btn-xs"><i style="color:#ff1744;" class="icon-plus-circle"></i> <span style="color:#ff1744;">Tambah Jawaban</span></button>
                            </div>
                        </div>

                        <div id="answer"></div>

                    </div>

                </form>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="saveQuestion()">Simpan</button>
            </div>

        </div>
    </div>
</div>
<!-- /form modal -->


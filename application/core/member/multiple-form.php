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
                <li <?php if($segment=='detail-event' || $segment=='multiple-form'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/detail-event/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>"><i class="icon-trophy"></i> Detail Event</a></li>
                <li <?php if($segment=='data-peserta'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/data-peserta/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>"><i class="icon-barcode"></i> Data Peserta</a></li>
                <li <?php if($segment=='laporan-penjualan'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/laporan-penjualan/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>"><i class="icon-stats2"></i> Laporan Penjualan</a></li>
                <li <?php if($segment=='checkin-pengunjung' || $segment=='laporan-checkin'){?> class="active" <?php } ?>>
                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-barcode"></i> Check-in</a>
                        <ul class="dropdown-menu icons-right">
                            <li><a href="<?php echo base_url(); ?>member/event/checkin-pengunjung/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>"><i class="icon-qrcode"></i> Check-in Pengunjung</a></li>
                            <li><a href="<?php echo base_url(); ?>member/event/laporan-checkin/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>"><i class="icon-file2"></i> Laporan Check-in</a></li>
                        </ul>
                </li>
                <li <?php if($segment=='formulir-data-tambahan'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/formulir-data-tambahan/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>"><i class="icon-file6"></i> Formulir Data Tambahan</a></li>
            </ul>
        </div>
    </div>



    <div class="container" style="max-width: 800px; margin-top: 50px; padding-top:0">
        <div class="col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-sm-2 col-xs-6">
                    <a href="<?php echo base_url(); ?>member/event/detail-event/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>">
                        <button type="button" name="export" value="true" class="btn btn-left-icon btn-warning btn-block" style="padding: 10px 20px; font-size: 12px;"><i class="icon-arrow-left" style="font-size: 16px;"></i> BACK </button>
                    </a>
                    <br><br>
                </div>
            </div>
        </div>
        <div class="col-lg-12">  
            <div class="tabbable page-tabs">
                <div class="tab-content text-left">
                    <h2>Multiple Form<br></h2>
                    <span>Formulir ini dapat digunakan sebagai Quiz, Absensi, Post Test, Pre Test dan Lainnya
                    yang dapat disesuikan dengan kebutuhan event kamu. </span>
                    <br><br>

                    <div class="block">
                        
                        

                        <div class="panel panel-default">
                            <div class="panel-heading"><h6 class="panel-title"><i class="icon-users"></i>Multiple Form</h6></div>
                            <div class="panel-body">

                                <div class="form-group has-feedback">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Nama Formulir</label>
                                        </div>
                                    </div>
                                    <input disabled type="text" class="form-control" value="<?php echo $data->name; ?>">
                                </div>

                                <div class="form-group has-feedback">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Deskripsi Formulir</label>
                                        </div>
                                    </div>
                                    <textarea disabled rows="3" cols="3" name="" class="form-control"><?php echo $data->description; ?></textarea>
                                </div>

                            </div>
                        </div>

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
                <h4 class="modal-title"><i class="icon-paragraph-justify2"></i>Multiple Form</h4>
            </div>

            <!-- Form inside modal -->
            <input type="hidden" id="multiple_form_question_id" value="0">

            <div class="modal-body with-padding">
                <div class="block-inner text-danger">
                    <h6 class="heading-hr">Buat formulir anda di sini<small class="display-block">Create your form here</small></h6>
                </div>

                <form class="form-horizontal" action="<?php echo base_url(); ?>" role="form">
                    <div class="callout callout-danger fade in">
                        <div class="block-inner">
                            <label class="checkbox-inline checkbox-danger">
                                <input type="checkbox" name="is_required" id="is_required" >
                                 Wajib Diisi 
                            </label>
                        </div>

                        <input id="product_id" type="hidden" class="form-control" value="<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>">
                        <input id="multiple_form_id" type="hidden" class="form-control" value="<?php echo encrypt_decrypt('encrypt',$data->id); ?>">

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


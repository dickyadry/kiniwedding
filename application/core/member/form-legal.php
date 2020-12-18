<style type="text/css">
    .bootstrap-datetimepicker-widget{
        width: 275px !important;
    }
    .multiselect-container.dropdown-menu{
        width: 250px;
    }
</style>

<!-- Profile grid -->
<form role="form" method="POST" action="<?php echo base_url(); ?>member/save-legal" onsubmit="return validateForm()">

<div class="row">

    <div class="container" style="max-width: 800px; padding-top:0">
        <div class="col-lg-12">  
            <div class="tabbable page-tabs">
                <div class="tab-content">

                    <div class="row">
                        <div class="col-md-6 col-xs-6 text-left">
                            <h2>Informasi Legal<br></h2>
                        </div>
                        <div class="col-md-6 col-xs-6 text-right">
                            <?php if(isset($data->status_legal) && $data->status_legal==2){?>
                            <h2 style="color:#DDD35D;">Belum Terverifikasi<br></h2>
                            <?php }else if(isset($data->status_legal) && $data->status_legal==1){ ?>
                            <h2 style="color:#3ce83f;">Terverifikasi<br></h2>
                            <?php } ?>
                        </div>
                    </div>   

                    <div class="block">
                        <div class="tabbable">
                            <input type="hidden" id="type" name="type" value="<?php echo (isset($data->type) && $data->type!="" && $data->type!=null && $data->type!=" ")?$data->type:'individu';?>">
                            <ul class="nav nav-tabs nav-justified">

                                <?php if((isset($data->status_legal) && $data->status_legal!=0 && $data->type=="individu") || $data->status_legal==0){?> 

                                <li <?php if(isset($data->type) && $data->type!="" && $data->type!=null && $data->type!=" " && $data->type=="individu"  || $data->status_legal==0){?> class="active" <?php } ?>>
                                    <a href="#justified-tab1" data-toggle="tab" onclick="selectType('individu')">
                                    <span id="event-page" class="icon-checkmark-circle"></span> Individu</a>
                                </li>

                                <?php } ?>
                                <?php if((isset($data->status_legal) && $data->status_legal!=0 && $data->type=="badan hukum") || $data->status_legal==0){ ?>

                                <li <?php if(isset($data->type) && $data->type!="" && $data->type!=null && $data->type!=" " && $data->type=="badan hukum"){?> class="active" <?php } ?>> 
                                    <a href="#justified-tab2" data-toggle="tab" onclick="selectType('badan hukum')">
                                    <span id="mail-customer" class="icon-checkmark-circle hidden"></span> Badan Hukum</a> 
                                </li>

                                <?php } ?>
                            </ul>

                            <div class="tab-content with-padding">
                                <div class="tab-pane fade in active" id="justified-tab1">
                                    <div>
                                        <div class="block">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group" id="group-nomor">
                                                        <label>Jenis Dokumen<span class="label_danger">*</span></label>
                                                        <div id="type_doc">
                                                            <?php if(isset($data->type) && $data->type=='badan hukum'){?>
                                                                <select disabled id="type_doc_1" class="form-control" name="type_doc[]" onchange="select_doc_type()">
                                                                    <option <?php if(isset($legal[0]->type_doc) && $legal[0]->type_doc=="Anggaran Dasar"){?> selected <?php } ?>>Anggaran Dasar</option>
                                                                    <option <?php if(isset($legal[0]->type_doc) && $legal[0]->type_doc=="TDP"){?> selected <?php } ?>>TDP</option>
                                                                </select>
                                                            <?php }else{ ?>
                                                                <input id="type_doc_1" type="text" class="form-control" value="<?php echo isset($legal[0]->type_doc)?$legal[0]->type_doc:'KTP'; ?>" name="type_doc[]" readonly>
                                                            <?php } ?>
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <div class="thumbnail">
                                                            <div class="caption text-center">
                                                                <label>Upload dokumen <span class="text_type_doc">KTP</span> disini<span class="label_danger">*</span></label>
                                                            </div>
                                                            <br>
                                                            <div class="thumb">
                                                                <div class="loader hidden" id="loader-doc-1"></div> 
                                                                <?php if(isset($legal[0]->file_doc)){?>
                                                                    <img  id="gambar_1" alt="Event Stack" src="<?php echo $legal[0]->file_doc ?>" style="border-radius:5px">
                                                                <?php }else{ ?>
                                                                    <img id="gambar_1" alt="Event Stack" src="<?php echo ASSETS?>img/legal-blank.jpg" style="border-radius:5px">
                                                                <?php } ?>

                                                                <?php if(isset($data->status_legal) && $data->status_legal==0){?> 
                                                                <div class="thumb-options">
                                                                    <span>
                                                                        <a data-toggle="modal" data-target="#crop_modal_1" class="btn btn-icon btn-danger"><i class="icon-upload"></i></a>
                                                                        <input value="<?php echo isset($legal[0]->file_doc)?$legal[0]->file_doc:''; ?>" type="hidden" id="cover_1" name="cover[]">
                                                                    </span>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="group-nomor">
                                                        <label>Nomor <span class="text_type_doc">KTP</span><span class="label_danger">*</span></label>
                                                        <input value="<?php echo isset($legal[0]->nomor)?$legal[0]->nomor:''; ?>" maxlength="16" type="text" class="form-control" name="nomor[]" id="nomor" onkeyup="cekForm('nomor')" <?php if(isset($data->status_legal) && $data->status_legal!=0){?> readonly <?php }  ?>>
                                                        <i id="alert-nomor" class="icon icon-warning form-control-feedback hidden"></i>
                                                    </div>
                                                    <div class="form-group" id="group-name">
                                                        <label>Nama (sesuai <span class="text_type_doc">KTP</span>)<span class="label_danger">*</span></label>
                                                        <input value="<?php echo isset($legal[0]->name)?$legal[0]->name:''; ?>" type="text" class="form-control" name="name[]" id="name" onkeyup="cekForm('name')" <?php if(isset($data->status_legal) && $data->status_legal!=0){?> readonly <?php }  ?>>
                                                        <i id="alert-name" class="icon icon-warning form-control-feedback hidden"></i>
                                                    </div>
                                                    <div class="form-group" id="group-address">
                                                        <label>Alamat (sesuai <span class="text_type_doc">KTP</span>)<span class="label_danger">*</span></label>
                                                        <textarea class="form-control" name="address[]" id="address" onkeyup="cekForm('address')" <?php if(isset($data->status_legal) && $data->status_legal!=0){?> readonly <?php }  ?>><?php echo isset($legal[0]->address)?$legal[0]->address:''; ?></textarea>
                                                        <i id="alert-address" class="icon icon-warning form-control-feedback hidden"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group" id="group-nomor">
                                                        <label>Jenis Dokumen<span class="label_danger">*</span></label>
                                                        <input id="type_doc_2" type="text" class="form-control" value="<?php echo isset($legal[1]->type_doc)?$legal[1]->type_doc:'NPWP'; ?>" name="type_doc[]" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="thumbnail">
                                                            <div class="caption text-center">
                                                                <label>Upload dokumen NPWP disini</label>
                                                            </div>
                                                            <br>
                                                            <div class="thumb">
                                                                <div class="loader hidden" id="loader-doc-2"></div> 
                                                                <?php if(isset($legal[1]->file_doc)){?>
                                                                    <img  id="gambar_2" alt="Event Stack" src="<?php echo $legal[1]->file_doc; ?>" style="border-radius:5px">
                                                                <?php }else{ ?>
                                                                    <img id="gambar_2" alt="Event Stack" src="<?php echo ASSETS?>img/legal-blank.jpg" style="border-radius:5px">
                                                                <?php } ?>

                                                                <?php if(isset($data->status_legal) && $data->status_legal==0){?>
                                                                <div class="thumb-options">
                                                                    <span>
                                                                        <a data-toggle="modal" data-target="#crop_modal_2" class="btn btn-icon btn-danger"><i class="icon-upload"></i></a>
                                                                        <input value="<?php echo isset($legal[1]->file_doc)?$legal[1]->file_doc:''; ?>" type="hidden" id="cover_2" name="cover[]">
                                                                    </span>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nomor NPWP</label>
                                                        <input value="<?php echo isset($legal[1]->nomor)?$legal[1]->nomor:''; ?>" maxlength="15" type="text" class="form-control" name="nomor[]" <?php if(isset($data->status_legal) && $data->status_legal!=0){?> readonly <?php }  ?>>
                                                    </div>
                                                    <div class="form-group" id="group-name">
                                                        <label>Nama (sesuai NPWP)</label>
                                                        <input value="<?php echo isset($legal[1]->name)?$legal[1]->name:''; ?>" type="text" class="form-control" name="name[]" <?php if(isset($data->status_legal) && $data->status_legal!=0){?> readonly <?php }  ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat (sesuai NPWP)</label>
                                                        <textarea class="form-control" name="address[]" <?php if(isset($data->status_legal) && $data->status_legal!=0){?> readonly <?php }  ?>><?php echo isset($legal[1]->address)?$legal[1]->address:''; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                          
                            </div>
                        </div>
                        <br>

                        <p style="color: #999; font-size: 10px;">Harap perhatikan kesesuaian antara identitas pada KTP dan NPWP. Dalam hal terdapat ketidaksesuaian antara KTP dan NPWP, faktur pajak akan diterbitkan sesuai dengan identitas pada NPWP. Dalam hal dokumen NPWP tidak diunggah, kamu dianggap tidak memiliki NPWP.</p><br>

                        <div class="row">
                            <div class="col-md-1 col-xs-1">
                                <input type="checkbox" class="styled" name="is_agree" <?php if(isset($data->status_legal) && $data->status_legal!=0){?> checked disabled <?php } ?> >
                            </div>
                            <div class="col-md-11 col-xs-11">
                                <p style="color: #999; font-size: 10px;">
                                    Dengan ini saya menyatakan dengan sesungguhnya bahwa semua informasi yang disampaikan dalam seluruh lampiran-lampirannya ini adalah benar adanya. Apabila diketemukan dan/atau dibuktikan adanya kesalahan/penipuan/pemalsuan atas informasi yang saya sampaikan PT. Stack Digital Teknologi (Event Stack) dibebaskan dari setiap akibat dari penggunaan data/dokumen tersebut.
                                </p>
                            </div>
                        </div>
                        <hr>
                        <p style="color: #999; font-size: 10px;">Dokumen yang sudah diunggah hanya dapat diubah dengan cara menghubungi tim kami. <a href="<?php echo base_url(); ?>page/contact" target="_blank">Hubungi kami.</a></p>

                        <br>

                        <?php if(isset($data->status_legal) && $data->status_legal==0){?>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-right-icon btn-warning btn-lg"><i class="icon-disk"></i> Simpan Dokumen</button>
                            </div>
                        </div>
                        <br>
                            <?php } ?>

                    </div>
                
                </div>
            </div>
        </div>
    </div>

</div>

</form>

<!-- /form modal crop -->
<div id="crop_modal_1" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-upload"></i>Form Upload</h4>
            </div>

            <div class="modal-body with-padding">

                <button type="button" class="btn btn-warning" onclick="document.getElementById('cover_file_1').click();">UPLOAD DOKUMEN</button>
                <br><br>
                
                <form method="post" action="" enctype="multipart/form-data" id="myform">
                    <div class="col-md-12">
                        <input type="file" id="cover_file_1" name="cover_file_" onchange="uploadCropper1(this);" style="display: none" class="form-control" accept="image/*">
                    </div>
                    <!-- Crop and preview -->   
                    <div class="col-md-12">
                        <div class="row">
                            <div class="avatar-wrapper-1" style="margin-bottom: 20px; height: 400px;"></div>
                        </div>
                    </div> 
                    <div class="avatar-upload">
                        <input type="hidden" class="avatar-data-1" name="avatar_data_1">
                    </div>                                                 
                </form>

            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="submitCrop1();">Crop & Save</button>
            </div>
        </div>
    </div>
</div>
<!-- /form modal crop-->

<!-- /form modal crop -->
<div id="crop_modal_2" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-upload"></i>Form Upload</h4>
            </div>

            <div class="modal-body with-padding">

                <button type="button" class="btn btn-warning" onclick="document.getElementById('cover_file_2').click();">UPLOAD DOKUMEN</button>
                <br><br>
                
                <form method="post" action="" enctype="multipart/form-data" id="myform">
                    <div class="col-md-12">
                        <input type="file" id="cover_file_2" name="cover_file_2" onchange="uploadCropper2(this);" style="display: none" class="form-control" accept="image/*">
                    </div>
                    <!-- Crop and preview -->   
                    <div class="col-md-12">
                        <div class="row">
                            <div class="avatar-wrapper-2" style="margin-bottom: 20px; height: 400px;"></div>
                        </div>
                    </div> 
                    <div class="avatar-upload">
                        <input type="hidden" class="avatar-data-2" name="avatar_data_2">
                    </div>                                                 
                </form>

            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="submitCrop2();">Crop & Save</button>
            </div>
        </div>
    </div>
</div>
<!-- /form modal crop-->
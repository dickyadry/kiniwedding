<!-- Profile grid -->
<form role="form" method="POST" action="<?php echo base_url(); ?>member/save-profile" onsubmit="return validateForm()">
<div class="row">
    
    <div class="container" style="max-width: 800px;  padding-top:0">
        <div class="col-lg-12">  
            <div class="tabbable page-tabs">
                <div class="tab-content text-left">
                    <h2>Form Profil<br></h2>
           
                    <div class="block">
                        <div class="tabbable">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a></a></li>
                            </ul>

                            <div class="tab-content with-padding">
                                <div class="tab-pane fade in active" id="justified-tab1">
                                    
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="block">
                                                <div class="thumbnail">
                                                    <div class="thumb">
                                                        <div class="loader hidden" id="loader-icon"></div> 
                                                        <?php if(isset($data->icon) && $data->icon!=null && $data->icon!=" " && $data->icon!=""){?>
                                                            <img  id="gambar_icon" alt="Event Stack" src="<?php echo isset($data->icon)?$data->icon:'';?>" style="border-radius:50%; width: 50%;">
                                                        <?php }else{ ?>
                                                            <img id="gambar_icon" alt="Evenst Stack" src="<?php echo ASSETS?>img/icon-blank.jpg" style="border-radius:50%; width: 50%;">
                                                        <?php } ?>
                                                        <div class="thumb-options">
                                                            <span>
                                                                <a data-toggle="modal" data-target="#crop_icon_modal" class="btn btn-icon btn-danger"><i class="icon-upload"></i></a>
                                                                <input type="hidden" id="icon" name="icon"value="<?php echo isset($data->icon)?$data->icon:''; ?>">
                                                            </span>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="caption text-center">
                                                        <span>Upload Foto Profile</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group" id="group-organization">
                                        <label>Email</label>
                                        <input type="text" class="form-control" value="<?php echo isset($data->email)?$data->email:''; ?>" readonly>
                                    </div>

                                    <div class="form-group" id="group-name">
                                        <label>Nama Lengkap <span class="label_danger">*</span></label>
                                        <input type="text" class="form-control" value="<?php echo isset($data->name)?$data->name:''; ?>" name="name" id="name" onkeyup="cekForm('name')">
                                        <i id="alert-name" class="icon icon-warning form-control-feedback hidden"></i>
                                    </div>

                                    <div class="form-group" id="group-phone">
                                        <label>Nomor Handphone <span class="label_danger">*</span></label>
                                        <input type="text" class="form-control" value="<?php echo isset($data->phone)?$data->phone:''; ?>" name="phone" id="phone" onkeyup="cekForm('phone')">
                                        <i id="alert-phone" class="icon icon-warning form-control-feedback hidden"></i>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-right-icon btn-warning btn-lg"><i class="icon-disk"></i> Simpan profil</button>
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

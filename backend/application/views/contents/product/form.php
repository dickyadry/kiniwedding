<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>product/<?php echo isset($data->id)?'update/'.encrypt_decrypt('encrypt',$data->id):'save'; ?>" onsubmit="return validateForm()">
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-bubble4"></i> Form Product</h6></div>
        <div class="panel-body">
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="block">
                        <div class="thumbnail">
                            <div class="thumb">
                                <div class="loader hidden" id="loader-poster"></div> 
                                <?php if(isset($data->cover) && $data->cover!=null){?>
                                    <img id="gambar" alt="Event Stack" src="<?php echo $data->cover; ?>">
                                <?php }else{ ?>
                                    <img id="gambar" alt="Event Stack" src="<?php echo ASSETS?>img/cover-blank.jpg">
                                <?php } ?>
                                <div class="thumb-options">
                                    <span>
                                        <a data-toggle="modal" data-target="#crop_modal" class="btn btn-icon btn-danger"><i class="icon-upload"></i></a>
                                        <input type="hidden" id="cover" name="cover"value="<?php echo isset($data->cover)?$data->cover:''; ?>">
                                        <!-- <a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a> -->
                                    </span>
                                </div>
                            </div>
                            <div class="caption text-center">
                                <h6>Upload Cover Produk</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group" id="group-code">
                <label class="col-sm-2 control-label">Kode</label>
                <div class="col-sm-10">
                    <input type="text" name="code" value="<?php echo isset($data->code)?$data->code:''; ?>" class="form-control"  id="code" onkeyup="cekForm('code')">
                    <i id="alert-code" class="icon icon-warning form-control-feedback hidden"></i>
                </div>
            </div>
            <div class="form-group" id="group-name">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="<?php echo isset($data->name)?$data->name:''; ?>" class="form-control"  id="name" onkeyup="cekForm('name')">
                    <i id="alert-name" class="icon icon-warning form-control-feedback hidden"></i>
                </div>
            </div>
            <div class="form-group" id="group-price">
                <label class="col-sm-2 control-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" name="price" value="<?php echo isset($data->price)?$data->price:''; ?>" class="form-control"  id="price" onkeyup="cekForm('price')">
                    <i id="alert-price" class="icon icon-warning form-control-feedback hidden"></i>
                </div>
            </div>
            <div class="form-group" id="group-description">
                <label class="col-sm-2 control-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea name="description" class="editor" placeholder="Enter text ..."  ><?php echo isset($data->description)?$data->description:''; ?></textarea>
                    <i id="alert-description" class="icon icon-warning form-control-feedback hidden"></i>
                </div>
            </div>
            <div class="form-features text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url();?>product">
                    <button type="button" class="btn btn-danger">Cancel</button>
                </a>
            </div>
        </div>
    </div>
</form>

<!-- /form modal crop -->
<div id="crop_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-upload"></i>Form Upload</h4>
            </div>

            <div class="modal-body with-padding">

                <button type="button" class="btn btn-warning" onclick="document.getElementById('cover_file').click();">UPLOAD COVER</button>
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
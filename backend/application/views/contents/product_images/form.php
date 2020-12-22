<?php 
if(isset($data->id)){
    $url_action = base_url()."product-images/update/".$product_id.'/'.encrypt_decrypt('encrypt',$data->id);
}else{ 
    $url_action = base_url()."product-images/save/".$product_id;
} 
?>

<form class="form-horizontal" method="POST" action="<?php echo $url_action; ?>" onsubmit="return validateForm()">
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-bubble4"></i> Form Product Images</h6></div>
        <div class="panel-body">
            <div class="form-group" id="group-type">
                <label class="col-sm-2 control-label">Type</label>
                <div class="col-sm-10">
                    <select name="type" id="type" class="form-control">
                        <option <?php if(isset($data->type) && $data->type=='SLIDER'){?> selected <?php } ?>>SLIDER</option>
                        <option <?php if(isset($data->type) && $data->type=='GALERI'){?> selected <?php } ?>>GALERI</option>
                        <option <?php if(isset($data->type) && $data->type=='BACKGROUND'){?> selected <?php } ?>>BACKGROUND</option>
                        <option <?php if(isset($data->type) && $data->type=='PENGANTIN'){?> selected <?php } ?>>PENGANTIN</option>
                        <option <?php if(isset($data->type) && $data->type=='LAINNYA'){?> selected <?php } ?>>LAINNYA</option>
                    </select>
                    <i id="alert-type" class="icon icon-warning form-control-feedback hidden"></i>
                </div>
            </div>
            <div class="form-group" id="group-caption">
                <label class="col-sm-2 control-label">Caption</label>
                <div class="col-sm-10">
                    <input type="text" name="caption" value="<?php echo isset($data->caption)?$data->caption:''; ?>" class="form-control"  id="caption">
                </div>
            </div>
            <div class="form-group" id="group-width">
                <label class="col-sm-2 control-label">Width</label>
                <div class="col-sm-10">
                    <input type="text" name="width" value="<?php echo isset($data->width)?$data->width:''; ?>" class="form-control"  id="width" onkeyup="cekForm('width')">
                    <i id="alert-width" class="icon icon-warning form-control-feedback hidden"></i>
                </div>
            </div>
            <div class="form-group" id="group-height">
                <label class="col-sm-2 control-label">Height</label>
                <div class="col-sm-10">
                    <input type="text" name="height" value="<?php echo isset($data->height)?$data->height:''; ?>" class="form-control"  id="height" onkeyup="cekForm('height')">
                    <i id="alert-height" class="icon icon-warning form-control-feedback hidden"></i>
                </div>
            </div>
            <div class="form-group" id="group-order">
                <label class="col-sm-2 control-label">Order</label>
                <div class="col-sm-10">
                    <input type="text" name="order" value="<?php echo isset($data->order)?$data->order:1; ?>" class="form-control"  id="order" onkeyup="cekForm('order')">
                    <i id="alert-order" class="icon icon-warning form-control-feedback hidden"></i>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="block">
                        <div class="thumbnail">
                            <div class="thumb">
                                <div class="loader hidden" id="loader-poster"></div> 
                                <?php if(isset($data->sample_image) && $data->sample_image!=null){?>
                                    <img id="gambar" alt="Event Stack" src="<?php echo $data->sample_image; ?>">
                                <?php }else{ ?>
                                    <img id="gambar" alt="Event Stack" src="<?php echo ASSETS?>img/cover-blank.jpg">
                                <?php } ?>
                                <div class="thumb-options">
                                    <span>
                                        <a data-toggle="modal" data-target="#crop_modal" onclick="cekImages()" class="btn btn-icon btn-danger"><i class="icon-upload"></i></a>
                                        <input type="hidden" id="cover" name="sample_image" value="<?php echo isset($data->sample_image)?$data->sample_image:''; ?>">
                                        <input type="hidden" id="file_name" name="file_name" value="<?php echo isset($data->file_name)?$data->file_name:''; ?>">
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
            <div class="form-features text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url();?>product-images/<?php echo $product_id; ?>">
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
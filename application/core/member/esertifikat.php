<!-- Profile grid -->
<div class="row">
    <div class="col-lg-12">

        <!-- Page tabs -->
        <div class="tabbable page-tabs">
            <div class="tab-content">
                <div class="row">
                    <?php foreach ($datas as $key => $value) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <div class="block">
                            <div class="thumbnail thumbnail-boxed">
                                <a href="<?php echo base_url(); ?>member/sertifikat/<?php echo encrypt_decrypt('encrypt',$value->id); ?>" class="thumb-zoom lightbox" target="_blank">
                                    <img src="<?php echo $value->thumb_images; ?>" alt="E-Sertifikat" style="height: 150px;">
                                </a>
                                <div class="caption text-center" style="height: 200px;">
                                    <h6><?php echo $value->name; ?> <br/>(<?php echo $value->email; ?>)</h6>
                                    <hr>
                                    <h6><?php echo $value->title; ?><small><?php echo $value->category_name; ?></small></h6>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- /page tabs -->

    </div>
</div>
<!-- /profile grid -->

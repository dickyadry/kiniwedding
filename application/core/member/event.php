<!-- Profile grid -->
<div class="row">
    <div class="col-lg-12">

        <!-- Page tabs -->
        <div class="tabbable page-tabs">
            <ul class="nav nav-pills nav-justified">
                <li <?php if($status=='aktif'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event"><i class="icon-trophy"></i> Event Aktif</a></li>
                <li <?php if($status=='draf'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event-draf"><i class="icon-stack"></i> Event Draf</a></li>
                <li <?php if($status=='closed'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event-lalu"><i class="icon-clock"></i> Event Lalu</a></li>
            </ul>
            <div class="tab-content">
                <div class="row">
                    <?php foreach ($datas as $key => $value) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="block">
                            <div class="thumbnail thumbnail-boxed">
                                <small class="badge bg-warning" style="margin:5px;"><?php echo $value->type; ?></small>

                                <a href="<?php echo base_url(); ?>member/event/detail-event/<?php echo encrypt_decrypt('encrypt',$value->id); ?>" class="thumb-zoom lightbox" title="<?php echo $value->title; ?>">
                                    <img src="<?php echo $value->cover; ?>" alt="<?php echo $value->title; ?>">
                                </a>
                            
                                <div class="caption text-center" style="height: 200px;">
                                    <h6><?php echo $value->title; ?><small><?php echo $value->category_name; ?></small></h6>
                                    <hr>
                                    <?php echo isset($value->start_date)?convert_date($value->start_date,$value->end_date):''; ?>

                                    <br><br>
                                    <?php if($value->is_online==1){?>
                                        <span class="icon-location2"></span><?php echo $value->platform; ?>
                                    <?php }else{ ?>
                                        <span class="icon-location2"></span><?php echo $value->place; ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php if($total_page>1){ ?>
                    <?php echo $pagination; ?>
                    <br><br>
                <?php } ?>
            </div>
        </div>
        <!-- /page tabs -->

    </div>
</div>
<!-- /profile grid -->

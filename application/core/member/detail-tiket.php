<div class="row">

    <div class="col-lg-4">
        <div class="block">
            <div class="block">
                <div class="thumbnail thumbnail-boxed" style="padding:30px;">
                
                    <div class="thumb">
                        <img alt="" src="<?php echo $data->cover; ?>">
                    </div>
                    <div class="caption text-center" style="height: 180px;">
                        <h6><?php echo $data->title; ?><small><?php echo $data->category_name; ?></small></h6>
                        <hr>
                        <?php echo isset($data->start_date)?convert_date($data->start_date,$data->end_date):''; ?>

                        <br><br>
                        <?php if($data->is_online==1){?>
                            <span class="icon-location2"></span><?php echo $data->platform; ?>
                        <?php }else{ ?>
                            <span class="icon-location2"></span><?php echo $data->place; ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8">

        <div class="tabbable page-tabs">
            <div class="tab-content">
                
                <?php foreach ($ticket as $key => $value) { ?>
                    <div id="tiket">
                        <div style="text-align: left; padding: 10px 0;color: #333; font-weight: bold;">
                            <?php echo $value->name; ?> (<?php echo $value->email; ?>)
                        </div>
                        <div class="callout callout-warning" style="margin-bottom:0">
                            <?php if($sales_order->status_order==1 || $value->price==0){ ?>
                            <a href="<?php echo base_url(); ?>member/tiket-saya/<?php echo  encrypt_decrypt('encrypt',$value->code);?>" target="_blank"><button type="button" class="close" style="margin-right: 10px;"><span class="icon-download"></span></button></a>
                            <?php } ?>
                            <div class="row">
                                <div class="col-md-2 col-xs-3">
                                    <div class="thumbnail">
                                        <div class="thumb  text-center">
                                            <i style="font-size: 70px;" class="icon-ticket"></i>
                                        </div>
                                    </div>
                                    <div class="caption text-center" style="margin-top: 10px;">
                                        <span><strong>Tiket</strong></span>
                                    </div>
                                </div>
                                <div class="col-md-10 col-xs-9">
                                    <div>
                                        <?php if($sales_order->status_order==1 || $value->price==0){ ?>
                                        <a href="<?php echo base_url(); ?>member/tiket-saya/<?php echo  encrypt_decrypt('encrypt',$value->code);?>" target="_blank"><h5><?php echo $value->ticket_name; ?></h5></a>
                                    <?php }else{ ?>
                                        <h5><?php echo $value->ticket_name; ?></h5>
                                    <?php } ?>
                                        <span class="help-block"><?php echo $value->ticket_description; ?></span>
                                    </div>
                                    <div>
                                        <label><?php echo ($value->price>0)?rupiah($value->price).' x '.$value->quantity.' = <b>'.rupiah($value->total).'</b>':'GRATIS'; ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>    
                <?php } ?>

            </div>
        </div>
    </div>
</div>

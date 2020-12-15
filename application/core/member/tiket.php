<!-- Profile grid -->
<div class="row">
    <div class="col-lg-12">

        <!-- Page tabs -->
        <div class="tabbable page-tabs">
            <ul class="nav nav-pills nav-justified">
                <li <?php if($status=='pending'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/tiket-pending"><i class="icon-ticket"></i> Tiket Pending</a></li>
                <li <?php if($status=='aktif'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/tiket-aktif"><i class="icon-ticket"></i> Tiket Aktif</a></li>
                <li <?php if($status=='closed'){ ?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/tiket-lalu"><i class="icon-ticket"></i> Tiket Lalu</a></li>
            </ul>
            <div class="tab-content">
                <div class="row">
                    <?php foreach ($datas as $key => $value) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="block">
                            <div class="thumbnail thumbnail-boxed">
                                <a href="<?php echo base_url(); ?>member/tiket/detail-tiket/<?php echo encrypt_decrypt('encrypt',$value->sales_order_id); ?>" class="thumb-zoom lightbox" title="<?php echo $value->title; ?>">
                                    <img src="<?php echo $value->cover; ?>" alt="<?php echo $value->title; ?>">
                                </a>
                            
                                <div class="caption text-center" style="height: 300px;">
                                    <h6><?php echo $value->sales_order_no; ?>
                                        <small><?php echo date('d/m/Y H:i',strtotime($value->created_at)); ?></small>
                                        <small style="font-size: 20px; color: #FF1744; margin-top: 10px;"><?php echo rupiah($value->grand_total); ?></small>
                                    </h6>

                                    <?php if($value->payment_method!=null && $value->payment_method!=null && $value->status_order==4){ ?>
                                        <br>
                                        <a href="<?php echo base_url(); ?>member/tiket/invoice/<?php echo encrypt_decrypt('encrypt',$value->sales_order_id); ?>" target="_blank">
                                        <button type="button" class="btn btn-right-icon btn-warning btn-sm"><i class="icon-eye"></i> Lihat Tagihan</button>
                                        </a>
                                    <?php } ?>
                                    

                                    <hr>
                                    <h6><?php echo $value->title; ?><small><?php echo $value->category_name; ?></small></h6>
                                
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

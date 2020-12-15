<br><br>
<div>
    <div class="content text-center">
        <div class="sb-content-box">
            <h2 class="title animated">DETAIL EVENT</h2>
        </div>
    </div>
</div>
<br>

<form action="<?php echo base_url();?>event/addcart" method="post" onsubmit="return validateForm()">
<input type="hidden" name="product_id" value="<?php echo $data->id; ?>">
<input type="hidden" id="max_pemesanan_tiket" value="<?php echo $data->max_order_ticket; ?>">

<!-- details-area-start -->
<div class="details-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="details">
                    <div class="details-movie">
                        <div class="img">
                            <img src="<?php echo str_replace("medium", "large", $data->cover); ?>" alt="<?php echo $data->title; ?>" style="border-radius: 5px;">
                            <div style="margin-top: 20px; text-align: center;">
                                <?php $short_url_artikel = base_url()."event/".$data->code.'/'.$data->slug; ?>
                                <span class="shared-fb"><a href="javascript:void(0);" onclick="fb_share('<?php echo str_replace("&#039;", "\'", html_entity_decode(htmlentities($data->title))) ?>','<?php echo $short_url_artikel ?>')"><img src='<?php echo ASSETS . "img/fb.jpg"; ?>' alt='' style="width: 30px; height: 30px;"></a></span>

                                <span class="shared-tw"><a href="javascript:void(0);" onclick="tweet_share('<?php echo str_replace("&#039;", "\'", html_entity_decode(htmlentities($data->title))).' '.$short_url_artikel ?>')"><img src='<?php echo ASSETS . "img/tw.jpg"; ?>' alt='' style="width: 30px; height: 30px; margin-left: 1px;"></a></span>

                                <?php 
                                $this->load->library('user_agent');
                                if ($this->agent->is_mobile()){
                                ?>
                                <span class="shared-line"><a href="line://msg/text/&quot;<?php echo html_entity_decode(htmlentities($data->title)); ?>&quot; <?php echo $short_url_artikel.'?utm_source=LINE&utm_medium=BC&utm_campaign=messaging';?>" target="_blank"><img src='<?php echo ASSETS . "img/line.jpg"; ?>' alt='' style="width: 30px; height: 30px;"></a></span>

                                <span class="shared-wa"><a data-href="<?php echo urlencode($short_url_artikel);?>" href="whatsapp://send?text=&quot;<?php echo html_entity_decode(htmlentities($data->title)); ?>&quot; <?php echo $short_url_artikel;?>"><img src='<?php echo ASSETS . "img/wa.jpg"; ?>' alt='' style="width: 30px; height: 30px;"></a></span>
                                <?php } ?>
                                <br><br>
                                <hr style="color: #fff; background: #fff;">
                                
                                <?php if(isset($data->member_id) && $data->member_id!=25){?>
                                <div class="cart__body clearfix">
                                    <div class="cart__img">
                                        <div class="cart__img__content">
                                            <?php if(isset($member->icon) && $member->icon!=null && $member->icon!=" " && $member->icon!=""){?>
                                                <img  id="gambar_icon" alt="Event Stack" src="<?php echo isset($member->icon)?$member->icon:'';?>" style="border-radius:50%; width: 100%; max-width: 70px;">
                                            <?php }else{ ?>
                                                <img id="gambar_icon" alt="Evenst Stack" src="<?php echo ASSETS?>img/icon-blank.jpg" style="border-radius:50%; width: 100%; max-width: 100px;">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="cart__box">
                                        <span>Penyelenggara</span>
                                        <div class="cart__title">
                                            <a class="cart__title"><?php echo $member->organization; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <br>

                            </div>

                        </div>
                        <div class="content">
                            <div  class="row" style="margin-bottom: 15px;">
                                <div class="col-md-12">
                                    <span class="label-category"><?php echo isset($data->category_name)?$data->category_name:''; ?></span> 
                                    <?php if($data->is_online==1){?>
                                    <span>Event Online</span>
                                    <?php }else{ ?>
                                    <span>Event Offline</span>
                                    <?php } ?>
                                </div>
                            </div>

                            <h2 class="name"><?php echo $data->title; ?></h2>

                            <div class="info">
                                
                                <div class="speaker"><?php echo isset($data->speaker)?$data->speaker:''; ?></div>
                                <?php if($data->is_online==1){?>
                                <div class="place"><?php echo isset($data->platform)?$data->platform:''; ?></div>
                                <?php }else{ ?>
                                <div class="place"><?php echo isset($data->place)?$data->place:''; ?></div>
                                <div class="place-note"><?php echo isset($data->address)?$data->address:''; ?></div>
                                <?php } ?>
                                <div class="date" style="font-size: 14px;"><?php echo isset($data->start_date)?convert_date($data->start_date,$data->end_date):''; ?></div>
                            </div>
                            <br>

                            <?php foreach ($ticket as $key => $value) { ?>
                                <input type="hidden" name="ticket[]" value="<?php echo $value->id; ?>">
                                <input type="hidden" name="price[]" value="<?php echo $value->price; ?>">
                                <div class="box-ticket">
                                    <div class="callout callout-info" >
                                        <div class="row">

                                            <div class="col-md-12 col-xs-12">
                                                <div class="cart__body clearfix">
                                                    <div class="cart__img">
                                                        <div class="cart__img__content">
                                                            <i style="font-size: 80px;" class="fa fa-ticket"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cart__box">
                                                        <div>
                                                            <h5 class="label-ticket"><?php echo $value->ticket_name; ?></h5>
                                                            <span class="label-description"><?php echo $value->ticket_description; ?></span>
                                                            <label class="label-price"><?php echo ($value->price>0)?rupiah($value->price):'GRATIS'; ?></label>  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-xs-12">
                                                <div class="box-ticket-qty">
                                                    <div class="row">
                                                        <div class="col-md-6 col-6">
                                                            <?php 
                                                            $now = date('YmdHi');
                                                            $start_date_order = date('YmdHi',strtotime($value->start_date_order));
                                                            $end_date_order = date('YmdHi',strtotime($value->end_date_order)); 
                                                            $end_date = date('YmdHi',strtotime($data->end_date));

                                                            $end_date_order = ($end_date_order>$end_date)?$end_date:$end_date_order;

                                                            if($start_date_order<$now && $end_date_order>=$now){

                                                            ?>
                                                            <div class="item__counter">
                                                                <input readonly id="sisa_slot_<?php echo $value->id; ?>"class="item__count" type="hidden" value="<?php echo $value->sisa_slot; ?>">
                                                                <button type="button" class="item__btn" onclick="update_qty(<?php echo $value->id; ?>,'minus')">-</button>
                                                                <input readonly name="qty_ticket[]" id="qty_<?php echo $value->id; ?>"class="item__count" type="number" value="0" min="0" max="2">
                                                                <button type="button" class="item__btn" onclick="update_qty(<?php echo $value->id; ?>,'plus')">+</button>
                                                            </div>
                                                            <?php }else if($end_date_order<$now){?>
                                                            <div style="text-align: left;">
                                                                <span style="border: 1px solid #0C0B21; padding: 5px; background: #0C0B21; color: #FF1744; border-radius: 4px;">Ticket closed</span>
                                                            </div>
                                                            <?php }else{ ?>
                                                            <div style="text-align: left;">
                                                                <span style="color: #333; font-size: 12px">Open Ticket</span><br>
                                                                <b><?php echo date('d/m/Y H:i',strtotime($value->start_date_order)); ?></b>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-md-6 col-6" style="text-align: right;">
                                                            <span style="background: #0C0B21;  border-radius: 2px; padding: 6px 10px; margin-top: 0px; float: right;"><span style="color:#ccc;">Sisa Tiket</span> <b><?php echo $value->sisa_slot; ?></b></span>
                                                        </div>
                                                        <!-- <span class="error">Minimal 1 Bulan</span> -->
                                                    </div>              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <p class="product__termText">Dengan melanjutkan transaksi, berarti Anda menyetujui <a href="<?php echo site_url("page/services"); ?>" target="_blank">Syarat & Ketentuan Kami.</a></p>
                            <br>
                            
                                <input type="hidden" name="product_id" value="<?php echo $data->id; ?>">
                                <?php if(isset($data->is_publish_only) && $data->is_publish_only==0){?>
                                <button class="button-register" >Register</button>
                                <?php } ?>
                            
                            <br>
                            
                            

                        </div>
                    </div>
                </div>
            </div>
            
            <?php if(isset($data->description) &&$data->description!=''){ ?>
            <div class="col-md-12">
                <h2 class="title">Deskripsi :</h2>
                <?php echo isset($data->description)?$data->description:''; ?>
                <br>
            </div>
            <?php } ?>
            <?php if(isset($data->tnc) &&$data->tnc!=''){ ?>
            <div class="col-md-12">
                <br><br>
                <h2 class="title">Syarat dan ketentuan :</h2>
                <?php echo isset($data->tnc)?$data->tnc:''; ?>
                <br>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- details-area-end -->
</form>

<!-- movie-tab-area-start -->
<div class="movie-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="movie-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="lmovie-tab" data-toggle="tab" href="#lmovie" role="tab" aria-controls="lmovie" aria-selected="true">Event Lainnya</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="lmovie" role="tabpanel" aria-labelledby="lmovie-tab">
                            <div class="tab-carousel owl-carousel">
                                <?php foreach ($other_webminar as $k => $value){ ?>
                                <div class="single-top-movie" onclick='link("<?php echo base_url(); ?>event/<?php echo $value->code; ?>/<?php echo $value->slug; ?>")'>
                                    <div class="img">
                                        <a href="<?php echo base_url(); ?>event/<?php echo $value->code; ?>/<?php echo $value->slug; ?>" title="<?php echo str_replace('"',"`", $value->title); ?>">
                                            <img src="<?php echo $value->cover; ?>" alt="<?php echo str_replace('"',"`", $value->title); ?>">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h2 class="name">
                                            <a href="<?php echo base_url(); ?>event/<?php echo $value->code; ?>/<?php echo $value->slug; ?>" title="<?php echo str_replace('"',"`", $value->title); ?>"><?php echo $value->title; ?></a>
                                        </h2>
                                        <br>
                                        <div class="price clearfix"><?php echo $value->category_name; ?></div>
                                        <p class="date"><?php echo isset($value->start_date)?convert_start_date($value->start_date):''; ?></p>
                                        <a href="<?php echo base_url(); ?>event/<?php echo $value->code; ?>/<?php echo $value->slug; ?>" title="<?php echo str_replace('"',"`", $value->title); ?>"><p class="duration">Detail</p></a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- movie-tab-area-end -->

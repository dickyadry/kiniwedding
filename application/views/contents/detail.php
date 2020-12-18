<br><br>
<div>
    <div class="content text-center">
        <div class="sb-content-box">
            <h2 class="title animated">DETAIL EVENT</h2>
        </div>
    </div>
</div>
<br>

<form action="<?php echo base_url();?>cart/addcart" method="post" >
<input type="hidden" name="product_id" value="<?php echo $data->id; ?>">

<!-- details-area-start -->
<div class="details-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="details">
                    <div class="details-movie">
                        <div class="img">
                            <img src="<?php echo str_replace("medium", "large", $data->cover); ?>" alt="<?php echo $data->name; ?>" style="border-radius: 5px;">
                            <div style="margin-top: 20px; text-align: center;">
                                <?php $short_url_artikel = base_url()."product/".$data->code; ?>
                                <span class="shared-fb"><a href="javascript:void(0);" onclick="fb_share('<?php echo str_replace("&#039;", "\'", html_entity_decode(htmlentities($data->name))) ?>','<?php echo $short_url_artikel ?>')"><img src='<?php echo ASSETS . "img/fb.jpg"; ?>' alt='' style="width: 30px; height: 30px;"></a></span>

                                <span class="shared-tw"><a href="javascript:void(0);" onclick="tweet_share('<?php echo str_replace("&#039;", "\'", html_entity_decode(htmlentities($data->name))).' '.$short_url_artikel ?>')"><img src='<?php echo ASSETS . "img/tw.jpg"; ?>' alt='' style="width: 30px; height: 30px; margin-left: 1px;"></a></span>

                                <?php 
                                $this->load->library('user_agent');
                                if ($this->agent->is_mobile()){
                                ?>
                                <span class="shared-line"><a href="line://msg/text/&quot;<?php echo html_entity_decode(htmlentities($data->name)); ?>&quot; <?php echo $short_url_artikel.'?utm_source=LINE&utm_medium=BC&utm_campaign=messaging';?>" target="_blank"><img src='<?php echo ASSETS . "img/line.jpg"; ?>' alt='' style="width: 30px; height: 30px;"></a></span>

                                <span class="shared-wa"><a data-href="<?php echo urlencode($short_url_artikel);?>" href="whatsapp://send?text=&quot;<?php echo html_entity_decode(htmlentities($data->name)); ?>&quot; <?php echo $short_url_artikel;?>"><img src='<?php echo ASSETS . "img/wa.jpg"; ?>' alt='' style="width: 30px; height: 30px;"></a></span>
                                <?php } ?>
                                <br><br>


                            </div>

                        </div>
                        <div class="content">
                            <div  class="row" style="margin-bottom: 15px;">
                                <div class="col-md-12">
                                    <span class="label-category"><?php echo isset($data->category_name)?$data->category_name:''; ?></span> 
                                    <span><?php echo $data->code; ?></span>
                                </div>
                            </div>

                            <h2 class="name"><?php echo $data->name; ?></h2>

                            <div class="info">
                                
                                <div class="speaker"><?php echo ($data->price>0)?rupiah($data->price):'GRATIS'; ?></div>
                                <?php if($data->is_online==1){?>
                                <div class="place"><?php echo isset($data->platform)?$data->platform:''; ?></div>
                                <?php }else{ ?>
                                <div class="place"><?php echo isset($data->place)?$data->place:''; ?></div>
                                <div class="place-note"><?php echo isset($data->address)?$data->address:''; ?></div>
                                <?php } ?>
                                <div class="date" style="font-size: 14px;"><?php echo isset($data->start_date)?convert_date($data->start_date,$data->end_date):''; ?></div>
                            </div>
                            <br>

                            <?php if(isset($data->description) &&$data->description!=''){ ?>
                            <div>
                                <h2 class="title">Deskripsi :</h2>
                                <?php echo isset($data->description)?$data->description:''; ?>
                                <br>
                            </div>
                            <?php } ?>


                            <p class="product__termText">Dengan melanjutkan transaksi, berarti Anda menyetujui <a href="<?php echo site_url("page/services"); ?>" target="_blank">Syarat & Ketentuan Kami.</a></p>
                            <br>
                            
                                <input type="hidden" name="product_id" value="<?php echo $data->id; ?>">
                                <button type="submit" class="button-register" >Pesan</button>
                            
                            <br>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            
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
                            <a class="nav-link active" id="lmovie-tab" data-toggle="tab" href="#lmovie" role="tab" aria-controls="lmovie" aria-selected="true">Product Lainnya</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="lmovie" role="tabpanel" aria-labelledby="lmovie-tab">
                            <div class="tab-carousel owl-carousel">
                                <?php foreach ($other_product as $k => $value){ ?>
                                <div class="single-top-movie" onclick='link("<?php echo base_url(); ?>product/<?php echo $value->code; ?>")'>
                                    <div class="img">
                                        <a href="<?php echo base_url(); ?>product/<?php echo $value->code; ?>" title="<?php echo str_replace('"',"`", $value->name); ?>">
                                            <img src="<?php echo $value->cover; ?>" alt="<?php echo str_replace('"',"`", $value->name); ?>">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h2 class="name">
                                            <a href="<?php echo base_url(); ?>product/<?php echo $value->code; ?>" title="<?php echo str_replace('"',"`", $value->name); ?>"><?php echo $value->name; ?></a>
                                        </h2>
                                        <br>
                                        <div class="price clearfix"><?php echo $value->category_name; ?></div>
                                        <p class="date"><?php echo ($value->price>0)?rupiah($value->price):''; ?></p>
                                        <a href="<?php echo base_url(); ?>product/<?php echo $value->code; ?>" title="<?php echo str_replace('"',"`", $value->name); ?>"><p class="duration">Detail</p></a>
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

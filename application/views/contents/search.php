<br><br>
<div>
    <div class="content text-center">
        <div class="sb-content-box">
            <h2 class="title animated">PORTAL EVENT ONLINE</h2>
            <h3 class="intro animated">Menghadirkan berbagain event-event online terbaik<br> Webinar, Workshop, Training dan lain-lain</h3>
        </div>
    </div>
</div>

<!-- feature-movie-area-start -->
<div class="feature-movie-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="grid-menu d-flex justify-content-between">
                    <div class="tab">
                        <?php if($total_data>0){ ?>
                            Menampilkan <?php echo ((($page-1)*$limit)+1); ?> - <?php echo ((($page-1)*$limit)+count($datas)); ?> produk dari <span><?php echo $total_data; ?></span> produk
                            <?php }else{ ?>
                                Data tidak ditemukan
                            <?php } ?>
                    </div>
                    <div class="sort-show">
                        <form method="GET" action="" name="form_order">
                            <i class="fas fa-long-arrow-alt-up"></i>
                            <i class="fas fa-long-arrow-alt-down"></i>
                            <select name="order_by" onchange="selectOrder()">
                                <option <?php if(isset($_GET['order_by']) && $_GET['order_by']=='Event Terbaru'){?> selected <?php } ?>>Event Terbaru</option>
                                <option <?php if(isset($_GET['order_by']) && $_GET['order_by']=='Event Terdekat'){?> selected <?php } ?>>Event Terdekat</option>
                            </select>
                        </form>
                    </div>

                    <div class="pages">
                        <?php if($total_page>1){ ?>
                            <?php echo $pagination; ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="grid" role="tabpanel">
                        <div class="grid-movies">
                            <div class="row">
                                <?php if(count($datas)>0){ ?>
                                <?php foreach ($datas as $key => $value) { ?>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                     <div class="single-top-movie" onclick='link("<?php echo base_url(); ?>event/<?php echo $value->code; ?>/<?php echo $value->slug; ?>")'>
                                        <div class="img" >
                                            <a href="<?php echo base_url(); ?>event/<?php echo $value->code; ?>/<?php echo $value->slug; ?>" title="<?php echo str_replace('"',"`", $value->title); ?>">
                                                <img src="<?php echo $value->cover; ?>" alt="<?php echo str_replace('"',"`", $value->title); ?>">
                                            </a>
                                        </div>
                                        <span class="view-counter"><?php echo ($value->is_online==1)?'Event Online':'Event Offline'; ?></span>
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
                                </div>
                                <?php } ?>
                                <?php }else{ ?>
                                <div class="col-12">
                                    <div class="content text-center">
                                        <div class="sb-content-box">
                                            <h2 class="intro animated" style="color: #F9A221;">Whoops..., Data tidak ditemukan</h2>
                                            <img src="<?php echo ASSETS; ?>img/data-not-found.png">
                                        </div>
                                    </div>
                                    <br><br>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="grid-menu d-flex justify-content-between">
                    <div class="tab">
                        <?php if($total_data>0){ ?>
                            Menampilkan <?php echo ((($page-1)*$limit)+1); ?> - <?php echo ((($page-1)*$limit)+count($datas)); ?> produk dari <span><?php echo $total_data; ?></span> produk
                            <?php }else{ ?>
                                Data tidak ditemukan
                            <?php } ?>
                    </div>
                    <div class="sort-show">
                       
                    </div>

                    <div class="pages">
                        <?php if($total_page>1){ ?>
                            <?php echo $pagination; ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function link(link) {
        window.location.href = link;
    }
</script>
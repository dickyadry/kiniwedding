<!-- <style type="text/css">
    .slider-box {   
            min-height: 200px;
        }
    @media (min-width: 600px) { 
        .slider-box {   
            min-height: 500px;
        }
    }
</style> -->
<!-- slider-area-start -->
<div class="slider-area slider-carousel owl-carousel">
    <div>
        <div class="img" >
            <a href="<?php echo base_url(); ?>kolaborasi">
                <img src="<?php echo ASSETS_IMAGES; ?>slide/banner-1.jpg" alt="Kolaborasi">
            </a>
            
        </div>
        <div style="position: absolute; top: 10px; left: 10px; border: 0px;">
            <a class="button hvr-bs animated" style="border: 0px solid #ccc; font-weight: bold; color: #FFF !important; background:rgba(255,0,60,0.9); border-radius: 15px;"  href="<?php echo base_url(); ?>kolaborasi">Lihat Selengkapnya</a>
        </div>
    </div>
    <div>
        <div class="img">
            <a href="<?php echo base_url(); ?>kolaborasi">
                <img src="<?php echo ASSETS_IMAGES; ?>slide/banner-2.jpg" alt="Kolaborasi">
            </a>
        </div>
        <div style="position: absolute; top: 10px; right: 10px; border: 0px;">
            <a class="button hvr-bs animated" style="border: 0px solid #ccc; font-weight: bold; color: #FFF !important; background:rgba(255,0,60,0.9); border-radius: 15px;"  href="<?php echo base_url(); ?>kolaborasi">Lihat Selengkapnya</a>
        </div>
    </div>
    <div>
        <div class="img">
            <a href="<?php echo base_url(); ?>narasumber">
                <img src="<?php echo ASSETS_IMAGES; ?>slide/banner-3.jpg" alt="Kolaborasi">
            </a>
        </div>
        <div style="position: absolute; top: 10px; left: 10px; border: 0px;">
            <a class="button hvr-bs animated" style="border: 0px solid #ccc; font-weight: bold; color: #FFF !important; background:rgba(255,0,60,0.9); border-radius: 15px;"  href="<?php echo base_url(); ?>narasumber">Lihat Selengkapnya</a>
        </div>
    </div>
    <div>
        <div class="img">
            <a href="<?php echo base_url(); ?>product">
                <img src="<?php echo ASSETS_IMAGES; ?>slide/banner-4.jpg" alt="Kolaborasi">
            </a>
        </div>
        <div style="position: absolute; top: 10px; right: 10px; border: 0px;">
            <a class="button hvr-bs animated" style="border: 0px solid #ccc; font-weight: bold; color: #FFF !important; background:rgba(255,0,60,0.9); border-radius: 15px;"  href="<?php echo base_url(); ?>product">Lihat Selengkapnya</a>
        </div>
    </div>
</div>
<!-- slider-area-end -->

<!-- top-movie-area-start -->
<div class="top-movie-area">
    <div class="container">
        <div class="top-movie-carousel owl-carousel">
            <?php foreach ($event_selection as $key => $value) { ?>
                <div class="single-top-movie">
                    <div class="img">
                        <a href="<?php echo base_url(); ?>product/<?php echo $value->code; ?>" title="<?php echo str_replace('"',"`", $value->name); ?>">
                            <img src="<?php echo $value->cover; ?>" alt="<?php echo str_replace('"',"`", $value->name); ?>" title="<?php echo str_replace('"',"`", $value->name); ?>">
                        </a>
                    </div>
                    <span class="view-counter"><?php echo $value->code; ?></span>
                    <div class="content">
                        <h2 class="name">
                            <a href="<?php echo base_url(); ?>product/<?php echo $value->code; ?>" title="<?php echo str_replace('"',"`", $value->title); ?>"><?php echo $value->name; ?></a>
                        </h2>
                        <div class="price clearfix"><?php echo $value->category_name; ?></div>
                        <p class="date"><?php echo (isset($value->price) && $value->price>0)?rupiah($value->price):'GRATIS'; ?></p>
                        <a href="<?php echo base_url(); ?>product/<?php echo $value->code; ?>" title="<?php echo str_replace('"',"`", $value->title); ?>"><p class="duration">Detail</p></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- top-movie-area-end -->

<!-- top-movie-area-start -->
<div class="upcoming-movie-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Event Terbaru</h2>
                </div>
            </div>
        </div>
        <div class="top-movie-carousel owl-carousel">
            <?php foreach ($event_terbaru as $key => $value) { ?>
                <div class="single-top-movie">
                    <div class="img">
                        <a href="<?php echo base_url(); ?>product/<?php echo $value->code; ?>" title="<?php echo str_replace('"',"`", $value->name); ?>">
                            <img src="<?php echo $value->cover; ?>" alt="<?php echo str_replace('"',"`", $value->name); ?>" title="<?php echo str_replace('"',"`", $value->title); ?>">
                        </a>
                    </div>
                    <span class="view-counter"><?php echo $value->code; ?></span>
                    <div class="content">
                        <h2 class="name">
                            <a href="<?php echo base_url(); ?>product/<?php echo $value->code; ?>" title="<?php echo str_replace('"',"`", $value->name); ?>"><?php echo $value->name; ?></a>
                        </h2>
                        <div class="price clearfix"><?php echo $value->category_name; ?></div>
                        <p class="date"><?php echo (isset($value->price) && $value->price>0)?rupiah($value->price):'GRATIS'; ?></p>
                        <a href="<?php echo base_url(); ?>product/<?php echo $value->code; ?>" title="<?php echo str_replace('"',"`", $value->name); ?>"><p class="duration">Detail</p></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- top-movie-area-end -->

<!-- top-movie-area-start -->
<div class="upcoming-movie-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Event Terdekat</h2>
                </div>
            </div>
        </div>
        <div class="top-movie-carousel owl-carousel">
            <?php foreach ($event_terdekat as $key => $value) { ?>
                <div class="single-top-movie">
                    <div class="img">
                        <a href="<?php echo base_url(); ?>product/<?php echo $value->code; ?>" title="<?php echo str_replace('"',"`", $value->name); ?>">
                            <img src="<?php echo $value->cover; ?>" alt="<?php echo str_replace('"',"`", $value->name); ?>" title="<?php echo str_replace('"',"`", $value->name); ?>">
                        </a>
                    </div>
                    <span class="view-counter"><?php echo $value->code; ?></span>
                    <div class="content">
                        <h2 class="name">
                            <a href="<?php echo base_url(); ?>product/<?php echo $value->code; ?>" title="<?php echo str_replace('"',"`", $value->name); ?>"><?php echo $value->name; ?></a>
                        </h2>
                        <div class="price clearfix"><?php echo $value->category_name; ?></div>
                        <p class="date"><?php echo (isset($value->price) && $value->price>0)?rupiah($value->price):'GRATIS'; ?></p>
                        <a href="<?php echo base_url(); ?>product/<?php echo $value->code; ?>" title="<?php echo str_replace('"',"`", $value->name); ?>"><p class="duration">Detail</p></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- top-movie-area-end -->

<script type="text/javascript">
    function link(link) {
        window.location.href = link;
    }
</script>

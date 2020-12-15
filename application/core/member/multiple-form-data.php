<style type="text/css">
    table[border="1"] {
    border-collapse:collapse;
    color:#ebebeb;
    font-size: 12px;
    width: 100%;   
    border:0px solid #ff9a17;
    min-width: 500px; 
    }
    table[border="1"] th, table[border="1"] td {
    border:0px solid #ff9a17;
    }
    table[border="1"] th {
    /*background:#ccc;*/
    color:#666;
    /*font-size: 12px;*/
    text-align: left;
    padding: 20px 10px;
    border-top:1px solid #ff9a17;
    border-bottom:1px solid #ff9a17;
    }
    table[border="1"] td {
    background:#FFF;
    color:#666;
    /*font-size: 12px;*/
    text-align: left;
    padding: 20px 10px;
    /*border-top:1px solid #ff9a17;*/
    /*border-bottom:1px solid #ff9a17;*/
    }

    table[border="2"] {
    border-collapse:collapse;
    color:#ebebeb;
    font-size: 12px;
    width: 100%;   
    border:0px solid #ff9a17;
    min-width: 250px; 
    }
    table[border="2"] td {
    background:#FFF;
    color:#666;
    text-align: left;
    padding: 10px;
    border:1px solid #ccc;
    }
</style>


<div class="row">

    <?php $segment = $this->uri->segment(3); ?>
    <div class="col-lg-12">
        <div class="tabbable page-tabs">
            <ul class="nav nav-pills nav-justified">
                <li <?php if($segment=='detail-event' || $segment=='show-data-multiple-form'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/detail-event/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>"><i class="icon-trophy"></i> Detail Event</a></li>
                <li <?php if($segment=='data-peserta'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/data-peserta/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>"><i class="icon-barcode"></i> Data Peserta</a></li>
                <li <?php if($segment=='laporan-penjualan'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/laporan-penjualan/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>"><i class="icon-stats2"></i> Laporan Penjualan</a></li>
                <li <?php if($segment=='checkin-pengunjung' || $segment=='laporan-checkin'){?> class="active" <?php } ?>>
                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-barcode"></i> Check-in</a>
                        <ul class="dropdown-menu icons-right">
                            <li><a href="<?php echo base_url(); ?>member/event/checkin-pengunjung/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>"><i class="icon-qrcode"></i> Check-in Pengunjung</a></li>
                            <li><a href="<?php echo base_url(); ?>member/event/laporan-checkin/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>"><i class="icon-file2"></i> Laporan Check-in</a></li>
                        </ul>
                </li>
                <li <?php if($segment=='formulir-data-tambahan'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/formulir-data-tambahan/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>"><i class="icon-file6"></i> Formulir Data Tambahan</a></li>
            </ul>
        </div>
    </div>

    <div class="col-sm-12 col-xs-12">
        <div class="row">
            <div class="col-sm-2 col-xs-6">
                <a href="<?php echo base_url(); ?>member/event/detail-event/<?php echo encrypt_decrypt('encrypt',$data->product_id); ?>">
                    <button type="button" name="export" value="true" class="btn btn-left-icon btn-warning btn-block" style="padding: 10px 20px; font-size: 12px;"><i class="icon-arrow-left" style="font-size: 16px;"></i> BACK </button>
                </a>
                <br>
            </div>
        </div>
    </div>

 
    <form method="GET" action="" name="form_search">

        <div class="col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <input type="text" name="q" value="<?php echo isset($_GET['q'])?$_GET['q']:''; ?>" class="form-control" placeholder="Cari berdasarkan Nama/Email/No. HP">
                </div>
                <div class="col-sm-4 col-xs-12">
                  
                </div>
                <div class="col-sm-2 col-xs-6">
           
                </div>
                <div class="col-sm-2 col-xs-6">
                    <a href="<?php echo base_url(); ?>member/event/show-data-multiple-form/<?php echo encrypt_decrypt('encrypt',$data->id); ?>?q=<?php echo isset($_GET['q'])?$_GET['q']:''; ?>&status=<?php echo isset($_GET['status'])?$_GET['status']:''; ?>&export=true" target="_blank" >
                        <button type="button" name="export" value="true" class="btn btn-right-icon btn-primary  btn-block" style="padding: 10px 20px; font-size: 12px;"><i class="icon-file-excel" style="font-size: 16px;"></i> EXPORT </button>
                    </a>
                </div>
            </div>
        </div>
    </form>
    
    <div class="col-lg-12">  
        <br>
        <h2><?php echo $data->name; ?></h2>
    </div> 

    <div class="col-lg-12 form-horizontal"> 
        <div style="overflow-x: scroll; padding-bottom: 70px;">
        <table border="1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kontak</th>
                    <?php foreach ($custom_form_question as $key => $val) { ?>
                    <th><?php echo $val->question; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <?php foreach ($datas as $key => $value) { ?>
            <tr>
                <td><?php echo $value->name; ?></td>
                <td><?php echo $value->phone ?><br><?php echo $value->email; ?></td>
                <?php foreach ($custom_form_question as $key => $val) { ?>
                    <td><?php echo get_data_multiple_form($val,$value->email); ?></td>
                <?php } ?>
            </tr>
            <?php } ?>
        </table>
        </div>
    </div>


</div>

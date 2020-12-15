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
</style>
<div class="row">
    

    <?php $segment = $this->uri->segment(3); ?>
    <div class="col-lg-12">
        <div class="tabbable page-tabs">
            <ul class="nav nav-pills nav-justified">
                <li <?php if($segment=='detail-event'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/detail-event/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"><i class="icon-trophy"></i> Detail Event</a></li>
                <li <?php if($segment=='data-peserta'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/data-peserta/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"><i class="icon-barcode"></i> Data Peserta</a></li>
                <li <?php if($segment=='laporan-penjualan'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/laporan-penjualan/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"><i class="icon-stats2"></i> Laporan Penjualan</a></li>
                <li <?php if($segment=='checkin-pengunjung' || $segment=='laporan-checkin'){?> class="active" <?php } ?>>
                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-barcode"></i> Check-in</a>
                        <ul class="dropdown-menu icons-right">
                            <li><a href="<?php echo base_url(); ?>member/event/checkin-pengunjung/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"><i class="icon-qrcode"></i> Check-in Pengunjung</a></li>
                            <li><a href="<?php echo base_url(); ?>member/event/laporan-checkin/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"><i class="icon-file2"></i> Laporan Check-in</a></li>
                        </ul>
                </li>
                <li <?php if($segment=='formulir-data-tambahan'){?> class="active" <?php } ?>><a href="<?php echo base_url(); ?>member/event/formulir-data-tambahan/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"><i class="icon-file6"></i> Formulir Data Tambahan</a></li>
            </ul>
        </div>
    </div>

    <div class="col-sm-12 col-xs-12">  
        <h2>LAPORAN CHECK-IN</h2>
    </div>

    <div class="col-lg-12">
        <div class="info-buttons-report block row">
            <span class="block-report col-sm-2 col-xs-6"><span class="text-report"><?php echo $tiket_terjual; ?></span><span>Tiket Terjual</span></span>
            <span class="block-report col-sm-2 col-xs-6"><span class="text-report"><?php echo $total_checkin; ?>/<?php echo $tiket_terjual; ?></span> <span>Sudah Check-in</span></span>
            <span class="block-report col-sm-2 col-xs-6"><span class="text-report"><?php echo $tiket_terjual-$total_checkin; ?>/<?php echo $tiket_terjual; ?></span> <span>Belum Check-in</span></span>
        </div>
    </div>


    <div class="col-lg-12 form-horizontal"> 
        <div style="overflow-x: scroll; padding-bottom: 70px;">
        <table border="1">
            <thead>
                <tr>
                    <th>Nama Tiket</th>
                    <th style="text-align: center;">Tiket Terjual</th>
                    <th style="text-align: center;">Sudah Check-in</th>
                    <th style="text-align: center;">Belum Check-in</th>
                </tr>
            </thead>
            <?php foreach ($datas as $key => $value) { ?>
            <tr>
                <td><?php echo $value->ticket_name; ?></td>
                <td style="text-align: center;"><?php echo $value->tiket_terjual ?></td>
                <td style="text-align: center;"><?php echo $value->total_checkin ?>/<?php echo $value->tiket_terjual;?></td>
                <td style="text-align: center;"><?php echo $value->tiket_terjual-$value->total_checkin ?>/<?php echo $value->tiket_terjual;?></td>
            </tr>
            <?php } ?>
        </table>
        </div>
    </div>

</div>


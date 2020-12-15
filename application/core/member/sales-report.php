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
        <div class="row">
            <div class="col-sm-9 col-xs-6"></div>
            <div class="col-sm-3 col-xs-6">
                <a href="<?php echo base_url(); ?>member/event/laporan-penjualan/<?php echo encrypt_decrypt('encrypt',$data->id); ?>?report=true" target="_blank" >
                    <button type="button" class="btn btn-right-icon btn-warning btn-block" style="padding: 10px 20px; font-size: 12px;"><i class="icon-download" style="font-size: 16px;"></i> LAPORAN PENJUALAN</button>
                </a>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-xs-12">  
        <h2>RINGKASAN</h2>
    </div>


    <div class="col-lg-12">
        <div class="info-buttons-report block row">
            <span class="block-report col-sm-3 col-xs-6">
                <span class="text-report"><?php echo rupiah($total_penjualan); ?></span><span>Total Penjualan</span></span>
            <span class="block-report col-sm-2 col-xs-6"><span class="text-report">(-)<?php echo rupiah($biaya_layanan); ?></span> <span>Biaya Layanan Penjualan</span></span>
            <span class="block-report col-sm-2 col-xs-6"><span class="text-report">(-)<?php echo rupiah($biaya_layanan_tambahan); ?></span> <span>Biaya Layanan Tambahan</span></span>
            <span class="block-report text-warning col-sm-2 col-xs-6"><span class="text-report"><?php echo rupiah($total_pendapatan); ?></span> 
            <span>Total Pendapatan
                <?php if(isset($data->status) && $data->status!='closed'){ ?>
                <br><b>PENDING</b>
                <?php } ?>
            </span>
            </span>
            <span class="block-report text-danger col-sm-3 col-xs-6"><span class="text-report"><?php echo rupiah($saldo); ?></span> <span>SALDO ANDA</span></span>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="info-buttons-report block row">
            <span class="block-report col-sm-9 col-xs-12" >
                    <span class="text-info text-center" >Pendapatanmu bisa ditarik setelah event berakhir</span>
            </span>

            <?php if(isset($data->status) && $data->status=='closed'){ ?>
                <span class="col-sm-3 col-xs-12"  style="padding-top: 10px;">
                    <a href="<?php echo base_url(); ?>member/saldo" >
                        <button type="button" class="btn btn-right-icon btn-primary btn-block" style="padding: 10px 20px; font-size: 26px;"><i class="icon-download" style="font-size: 40px;"></i> TARIK DANA</button>
                    </a>
                </span>
            <?php } ?>

        </div>
    </div>

    <div class="col-lg-12">  
        <h2>PENJUALAN TIKET ONLINE</h2>
    </div>

    <div class="col-lg-12 form-horizontal"> 
        <div class="callout callout-danger fade in">
            <div class="info-buttons-report-header row">
                <span class="block-report-header col-sm-5 col-xs-5" >Nama Tiket
                </span>
                <span class="block-report-header col-sm-2 col-xs-2">Harga Tiket

                </span>
                <span class="block-report-header col-sm-2 col-xs-2">Tiket Terjual
   
                </span>
                <span class="block-report-header col-sm-3 col-xs-3">Total Penjualan

                </span>
            </div>
            <?php foreach ($ticket_report as $key => $value) { ?>
            <div class="info-buttons-report-body row">
                <span class="block-report-body col-sm-5 col-xs-5" ><?php echo $value->ticket_name; ?>
                </span>
                <span class="block-report-body col-sm-2 col-xs-2"><?php echo rupiah($value->price); ?>

                </span>
                <span class="block-report-body col-sm-2 col-xs-2"><?php echo $value->total_tiket_terjual; ?> Tiket
   
                </span>
                <span class="block-report-body col-sm-3 col-xs-3"><?php echo rupiah($value->total_penjualan); ?>

                </span>
            </div>
            <?php } ?>
            <div class="info-buttons-report-header row">
                <span class="col-sm-5 col-xs-5"></span>
                <span class="block-report-header col-sm-2 col-xs-2">Total Penjualan

                </span>
                <span class="block-report-header col-sm-2 col-xs-2"><?php echo $total_tiket_terjual; ?> Tiket
   
                </span>
                <span class="block-report-header col-sm-3 col-xs-3"><?php echo rupiah($total_penjualan); ?>

                </span>
            </div>
    </div>
    </div>

</div>


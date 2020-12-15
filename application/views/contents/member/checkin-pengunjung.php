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
                <form method="GET" action="" name="form_search" target="_blank">
                    <button type="submit" name="report" value="true" class="btn btn-right-icon btn-warning btn-block" style="padding: 10px 20px; font-size: 12px;"><i class="icon-download" style="font-size: 16px;"></i>Laporan Check-in</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-xs-12">  
        <h2>CHECK-IN PENGUNJUNG</h2>
    </div>

    <div class="col-lg-12">
        <div class="info-buttons-report block row">
            <span class="block-report col-sm-6 col-xs-6 has-feedback">
                <form method="POST" action="<?php echo base_url();?>member/event/scan/<?php echo encrypt_decrypt('encrypt',$data->id); ?>">
                    <input type="text" class="form-control" name="code" autofocus>
                </form>
                <i style="font-size: 16px; margin-top: -10px;" class="icon-barcode form-control-feedback"></i>
                <span class="text-right">Scan disini</span>
            </span>
            <span class="block-report col-sm-4 col-xs-4 has-feedback" style="border-right: 0px">
                <input type="text" class="form-control" name="" onclick="openModal()">
                <span class="text-right">Car berdasarkan Nama/Email/No. Telphone</span>
                <i  style="font-size: 16px; margin-top: -10px;" class="icon-search2 form-control-feedback"></i>
            </span>

            <span class="block-report col-sm-2 col-xs-2"  style="padding-top: 10px;">
                <a href="javascript:void(0)" onclick="openModal()">
                    <button type="button" class="btn btn-primary btn-block" style="padding: 10px 20px; font-size: 26px;"> CHECK-IN</button>
                </a>
            </span>

        </div>
    </div>

    <div class="col-lg-12">
        <div class="block-inner text-danger">
            <h6 class="heading-hr">List Peserta yang sudah Check-In</h6>
        </div>
        <div class="form-group" style="display: block;">
            <div class="datatable-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Tiket</th>
                            <th>Nama Peserta</th>
                            <th>Kontak</th>
                            <th>Order No</th>
                            <th>Check-in Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($checkin as $key => $value) { ?>
                        <tr>

                            <td><?php echo $value->ticket_name; ?></td>
                            <td><?php echo $value->name; ?></td>
                            <td><?php echo $value->email; ?> <br> (<?php echo $value->phone; ?>)</td>
                            <td><?php echo $value->sales_order_no; ?></td>
                            <td><?php echo date('Y-m-d H:i',strtotime($value->created_at)); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!--     <div class="col-lg-12">  
        <div class="container" style="max-width: 800px; min-height: 200px; padding-top:0;">
            <div class="tabbable page-tabs">
                <div class="tab-content text-center">
                    <h2>Notes<br></h2>
                    <span>Fitur Check-In baru bisa digunakan mulai dari 3 hari sebelum event kamu dimulai.</span>
                    <br><br>
                </div>
            </div>
        </div>
    </div> -->

</div>

<!-- Form modal -->
<div id="form_modal" class="modal fade" tabindex="-1" role="dialog">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form method="POST" action="<?php echo base_url(); ?>member/event/checkin/<?php echo encrypt_decrypt('encrypt',$data->id); ?>"  onsubmit="return validateForm()">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-paragraph-justify2"></i>Checkin Peserta</h4>
            </div>

            <div class="modal-body with-padding">
                <div class="block-inner text-danger">
                    <h6 class="heading-hr">List Peserta yang belum Check-In</h6>
                </div>
                <div class="form-group" style="display: block;">
                    <div class="datatable">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nama Tiket</th>
                                    <th>Nama Peserta</th>
                                    <th>Kontak</th>
                                    <th>Order No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($not_checkin as $key => $value) { ?>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="checkin[]" class="styled" value="<?php echo $value->id; ?>">
                                            </label>
                                        </div>
                                    </td>
                                    <td><?php echo $value->ticket_name; ?></td>
                                    <td><?php echo $value->name; ?></td>
                                    <td><?php echo $value->email; ?> <br> (<?php echo $value->phone; ?>)</td>
                                    <td><?php echo $value->sales_order_no; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Check-In</button>
            </div>

            </form>

        </div>
    </div>
</div>
<!-- /form modal -->


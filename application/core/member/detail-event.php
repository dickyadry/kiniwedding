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

    <div class="col-lg-4">
        <div class="block">
            <div class="block">
                <div class="thumbnail thumbnail-boxed" style="padding:30px;">
                    <?php if($data->status=='draf'){ ?>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="<?php echo base_url(); ?>member/event/edit-event/<?php echo encrypt_decrypt('encrypt',$data->id); ?>">
                                <button type="button" class="btn btn-block btn-right-icon btn-warning"><i class="icon-pencil"></i> Edit Event</button>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <form action="<?php echo base_url(); ?>member/event/publish/<?php echo encrypt_decrypt('encrypt',$data->id); ?>" method="POST" name="form_event">
                                <button onclick="cehPublish()" type="button" name="button_publish" class="btn btn-block btn-right-icon btn-warning"><i class="icon-upload"></i> Publish Event</button>
                            </form>
                        </div>
                    </div>
                    <br><br>
                    <?php }else if($data->status=='aktif' && date('Y-m-d',strtotime($data->end_date))>=date('Y-m-d')){ ?>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="<?php echo base_url(); ?>member/event/edit-event/<?php echo encrypt_decrypt('encrypt',$data->id); ?>">
                                <button type="button" class="btn btn-block btn-right-icon btn-warning"><i class="icon-pencil"></i> Edit Event</button>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <?php 
                            $expiry_date = date('Y-m-d',strtotime('-0 day',strtotime($data->start_date)));
                            if($expiry_date>date('Y-m-d')){
                            ?>
                            <a href="<?php echo base_url(); ?>member/event/reschedule-event/<?php echo encrypt_decrypt('encrypt',$data->id); ?>">
                                <button type="button" class="btn btn-block btn-right-icon btn-warning"><i class="icon-calendar2"></i> Reschedule</button>
                            </a>
                            <?php }else{ ?>
                                <button onclick="warning()" type="button" class="btn btn-block btn-right-icon btn-primary"><i class="icon-calendar2"></i> Reschedule</button>
                            <?php } ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php echo base_url(); ?>member/event/cancel-event/<?php echo encrypt_decrypt('encrypt',$data->id); ?>">
                                <button type="button" class="btn btn-block btn-right-icon btn-danger"><i class="icon-blocked"></i> Pembatalan</button>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="<?php echo base_url(); ?>member/event/closed-event/<?php echo encrypt_decrypt('encrypt',$data->id); ?>" method="POST" name="closed_event">
                                <button onclick="closedEvent()" type="button" class="btn btn-block btn-right-icon btn-primary"><i class="icon-flag"></i> Event Selesai</button>
                            </form>
                        </div>
                    </div>
                    <br>
                    <?php }else{ ?>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php echo base_url(); ?>member/event/view-event/<?php echo encrypt_decrypt('encrypt',$data->id); ?>">
                                <button type="button" class="btn btn-block btn-right-icon btn-warning"><i class="icon-eye"></i> Detail Event</button>
                            </a>
                        </div>
                    </div>
                    <br><br>
                    <?php } ?>
                    
                    <div class="thumb">
                        <img alt="<?php echo $data->title; ?>" src="<?php echo $data->cover; ?>">
                    </div>
                    <div class="caption text-center" style="height: 200px;">
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
                <div class="panel panel-default">
                    <div class="panel-heading"><h6 class="panel-title"><i class="icon-link"></i> Simple Link </h6></div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <?php $short_url_artikel = base_url()."event/".$data->code.'/'.$data->slug; ?>
                                <div class="input-group">
                                    <span class="input-group-addon">https://evenstack.id/r/</span>
                                    <form  method="POST" name="form_link" action="<?php echo base_url(); ?>member/event/update-link/<?php echo encrypt_decrypt('encrypt',$data->id); ?>">
                                    <input type="text" id="simple_link" name="simple_link" class="form-control" value="<?php echo $data->simple_link; ?>">
                                    </form>
                                    <span class="input-group-addon" style="cursor: pointer;" onclick="updateLink()"><i class="icon-disk"></i></span>
                                    <span class="input-group-addon dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;"><i class="icon-share"></i></span>
                                    <ul class="dropdown-menu icons-right dropdown-menu-right">
                                        <li><a href="javascript:void(0);" onclick="fb_share('<?php echo str_replace("&#039;", "\'", html_entity_decode(htmlentities($data->title))) ?>','<?php echo $short_url_artikel ?>')"><i class="fa fa-facebook-official"></i> Facebook</a></li>
                                        <li><a href="javascript:void(0);" onclick="tweet_share('<?php echo str_replace("&#039;", "\'", html_entity_decode(htmlentities($data->title))).' '.$short_url_artikel ?>')"><i class="fa fa-twitter"></i> Twitter</a></li>
                                        <?php 
                                        $this->load->library('user_agent');
                                        if ($this->agent->is_mobile()){
                                        ?>
                                        <li><a data-href="<?php echo urlencode($short_url_artikel);?>" href="whatsapp://send?text=&quot;<?php echo html_entity_decode(htmlentities($data->title)); ?>&quot; <?php echo $short_url_artikel;?>"><i class="fa fa-whatsapp"></i> Whatsapp</a></li>
                                        <li><a href="line://msg/text/&quot;<?php echo html_entity_decode(htmlentities($data->title)); ?>&quot; <?php echo $short_url_artikel.'?utm_source=LINE&utm_medium=BC&utm_campaign=messaging';?>" target="_blank"><i class="fab fa-line"></i> Line</a></li>
                                        <?php } ?>
                                        <li><a href="javascript:void(0)" onclick="clickToCopy()"><i class="fa fa-copy"></i> Copy Link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane active fade in" id="activity">
                    <div class="block">
                        <ul class="statistics-detail-event">
                            <li>
                                <div class="statistics-info">
                                    <a href="#" title="" class="bg-warning"><i class="icon-bars"></i></a>
                                    <strong><?php echo rupiah($total_penjualan); ?></strong>
                                </div>
                                <div class="progress progress-micro">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <span>Pendapatan</span>
                            </li>
                            <li>
                                <div class="statistics-info">
                                    <a href="#" title="" class="bg-warning"><i class="icon-ticket"></i></a>
                                    <strong><?php echo $total_tiket_terjual; ?>/<?php echo $total_tiket; ?></strong>
                                </div>
                                <div class="progress progress-micro">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                                <span>Tiket Terjual</span>
                            </li>
                            <li>
                                <div class="statistics-info">
                                    <a href="#" title="" class="bg-danger"><i class="icon-tag5"></i></a>
                                    <strong><?php echo $total_transaksi; ?></strong>
                                </div>
                                <div class="progress progress-micro">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                        <span class="sr-only">90% Complete</span>
                                    </div>
                                </div>
                                <span>Transaksi</span>
                            </li>
                    <!--         <li>
                                <div class="statistics-info">
                                    <a href="#" title="" class="bg-danger"><i class="icon-users"></i></a>
                                    <strong>0</strong>
                                </div>
                                <div class="progress progress-micro">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                                <span>Pengunjung</span>
                            </li> -->
                        </ul>

                        <input type="hidden" name="multiple_form_id" id="multiple_form_id" value="0">

                        <a href="javascript:void(0)" onclick="addMultipleForm()" >
                            <button type="button" class="btn btn-right-icon btn-warning  btn-block" style="padding: 10px 20px; margin-bottom: 0px; font-size: 18px;"><i class="icon-plus-circle" style="font-size: 22px;"></i> MULTIPLE FORM </button>
                        </a>
                        
                        <?php if(count($multiple_form )>0){ ?>
                        <div style="overflow-x: scroll; padding-top: 10px;">
                            <table border="1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Link</th>
                                        <th>Total Responden</th>
                                        <th style="width:170px;"></th>
                                    </tr>
                                </thead>
                                <?php foreach ($multiple_form as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $value->name; ?></td>
                                    <td><?php echo $value->description ?></td>
                                    <td width="300"><?php echo base_url(); ?>mf/<?php echo encrypt_decrypt('encrypt',$value->id); ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>member/event/show-data-multiple-form/<?php echo encrypt_decrypt('encrypt',$value->id); ?>">
                                            <button class="btn btn-icon btn-warning btn-block btn-lg"><?php echo $value->total_responden ?></button>
                                        </a>
                                    </td>
                                    <td>

                                        <a href="<?php echo base_url(); ?>member/event/multiple-form/<?php echo encrypt_decrypt('encrypt',$value->id); ?>">
                                            <button class="btn btn-icon btn-primary"><i class="icon-plus"></i></button>
                                        </a>
                                        <button onclick='editMultipleForm("<?php echo encrypt_decrypt('encrypt',$value->id); ?>","<?php echo $value->name; ?>","<?php echo $value->description; ?>")' class="btn btn-icon btn-success"><i class="icon-pencil"></i></button>

                                        <button  onclick='copyLink("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")' class="btn btn-icon btn-warning"><i class="icon-copy"></i></button>
                                        <button  onclick='deleteMultipleForm("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")' class="btn btn-icon btn-danger"><i class="icon-remove3"></i></button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <?php } ?>

                    </div>
                </div>

                

            </div>
        </div>
    </div>
</div>

<!-- /form modal crop -->
<div id="multiple_form_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-upload"></i>Multiple Form</h4>
            </div>

            <div class="modal-body with-padding">
                <div class="block-inner text-danger">
                    <h6 class="heading-hr">Buat formulir mu sekarang <small class="display-block">Sesuaikan dengan kebutuhan event mu</small></h6>
                </div>
                <div class="form-group" id="group-name">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <label>Nama Formulir</label>
                            <input maxlength="50" type="text" class="form-control" id="name" onkeyup="cekForm('name')">
                            <span class="help-block text-right">Maksimal 50 karackter</span>
                            <i id="alert-name" class="icon icon-warning form-control-feedback hidden"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="group-description">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <label>Deskripsi Formulir</label>
                            <textarea maxlength="140" class="form-control" id="description" onkeyup="cekForm('description')"></textarea> 
                            <span class="help-block text-right">Maksimal 140 karackter</span>
                            <i id="alert-description" class="icon icon-warning form-control-feedback hidden"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" onclick="submitSave();">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- /form modal crop-->

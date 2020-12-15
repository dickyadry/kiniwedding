<style type="text/css">
    .bootstrap-datetimepicker-widget{
        width: 275px !important;
    }
    .multiselect-container.dropdown-menu{
        width: 250px;
    }
</style>

<form role="form"name="form_event"  method="POST" action="<?php echo base_url(); ?>member/event/<?php echo isset($data->id)?'update/'.encrypt_decrypt('encrypt',$data->id):'save'; ?>" onsubmit="return validateForm()">
    <div class="row">
        <div class="col-lg-4">
            <div class="block">
                <div class="thumbnail">
                    <div class="thumb">
                        <?php if(isset($data->cover) && $data->cover!=null){?>
                            <img id="gambar" alt="Event Stack" src="<?php echo $data->cover; ?>">
                        <?php }else{ ?>
                            <img id="gambar" alt="Event Stack" src="<?php echo ASSETS?>img/cover-blank.jpg">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="block-inner text-danger text-center">
                    <h6 class="heading-hr">Jenis Event<small class="display-block">Pilih jenis event</small></h6>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <label class="radio radio-block">
                                <input disabled type="radio" name="type" class="styled" <?php if((isset($data->type) && $data->type=='Public') || !isset($data->type))   { ?>checked="checked" <?php } ?> value="Public">
                                <strong>Public</strong> (Event kamu akan tampil di halaman Cari Event)
                            </label>
                            <label class="radio radio-block">
                                <input disabled type="radio" name="type" class="styled" <?php if(isset($data->type) && $data->type=='Private'){ ?>checked="checked" <?php } ?> value="Private">
                                <strong>Private</strong> (Event kamu hanya diakses oleh orang tertentu)
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="block-inner text-danger text-center">
                    <h6 class="heading-hr">Kategori<small class="display-block">Pilih maksimal 3 kategori</small></h6>
                </div>

                <div class="form-group">
                    <div class="row">
                        <?php foreach ($category as $key => $value) { ?>
                        <div class="col-md-6 col-xs-6">
                            <label class="radio radio-block">
                                <input disabled onchange="cekCategory(<?php echo $key; ?>)" type="checkbox" class="styled" value="<?php echo $value->id; ?>" name="category[]" <?php echo in_array($value->id, $category_product) ? "checked='checked'" : ""; ?> title="<?php echo $value->name; ?>">
                                <?php echo $value->name; ?>
                            </label>
                            <br>
                        </div>
                        <?php } ?>
                       
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="block-inner text-danger text-center">
                    <h6 class="heading-hr">Event Setting <small class="display-block">Silahkan pilih pengaturan event kamu</small></h6>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="radio radio-block">
                                <input disabled type="checkbox" value="1" name="is_one_only" class="styled" <?php if(isset($data->is_one_only) && $data->is_one_only=='1'){ ?> checked="checked" <?php } ?>>
                                1 akun email hanya dapat melakukan 1 kali transaksi pembelian tiket.
                            </label>
                            <label class="radio radio-block">
                                <div class="row">
                                    <div class="col-md-8">
                                        Maksimal pemesanan tiket
                                    </div>
                                    <div class="col-md-4">
                                        <select disabled class="form-control" name="max_order_ticket">
                                            <?php for($i=1; $i<=5; $i++){?>
                                            <option <?php if(isset($data->max_order_ticket) && $data->max_order_ticket==$i){ ?> selected <?php } ?>> <?php echo $i; ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </label>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="block">
                <div class="row">
                    <div class="col-md-2 col-xs-4">
                        <div class="block">
                            <div class="thumbnail">
                                <div class="thumb">
                                    <?php if($icon==null && $icon==" " && $icon==""){?>
                                        <img id="gambar_icon" alt="Evenst Stack" src="<?php echo ASSETS?>img/icon-blank.jpg" style="border-radius:50%; width: 100%;">
                                    <?php }else{ ?>
                                        <img  id="gambar_icon" alt="Event Stack" src="<?php echo ASSETS_IMAGES . "icon/_thumb/" . $icon; ?>" style="border-radius:50%; width: 100%;">
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-xs-12">
                        <div class="form-group" id="group-organization">
                            <label>Penyelenggara</label>
                            <input disabled type="text" class="form-control" value="<?php echo isset($organization)?$organization:''; ?>" name="organization" id="organization" onkeyup="cekForm('organization')">
                            <i id="alert-organization" class="icon icon-warning form-control-feedback hidden"></i>
                            <span class="help-block">Nama Penyelenggara bisa menggunakan nama Organisasi atau Pribadi</span>
                        </div>
                        <div class="form-group" id="group-title">
                            <label>Nama Event</label>
                            <input disabled type="text" class="form-control" value="<?php echo isset($data->title)?$data->title:''; ?>" name="title" id="title" onkeyup="cekForm('title')">
                            <i id="alert-title" class="icon icon-warning form-control-feedback hidden"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="group-speaker">
                    <label>Pengisi Acara</label>
                    <input disabled type="text" class="form-control" value="<?php echo isset($data->speaker)?$data->speaker:''; ?>" name="speaker" id="speaker" onkeyup="cekForm('speaker')">
                    <i id="alert-speaker" class="icon icon-warning form-control-feedback hidden"></i>
                </div>
                <div class="form-horizontal" >
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 has-feedback" id="group-start-date">
                                    <input disabled type="text" class="datetime-picker-start_date form-control" id="start-date" value="<?php echo isset($data->start_date)?$data->start_date:''; ?>" name="start_date" placeholder="Tanggal mulai event" onchange="cekForm('start-date')" >
                                    <i class="icon-calendar2 form-control-feedback"></i>
                                </div>
                                <div class="col-sm-6 has-feedback" id="group-end-date">
                                    <input disabled type="text" class="datetime-picker-end_date form-control" id="end-date" value="<?php echo isset($data->end_date)?$data->end_date:''; ?>" name="end_date" placeholder="Tanggal berakhir event" onchange="cekForm('end-date')" >
                                    <i class="icon-calendar2 form-control-feedback"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php foreach ($ticket as $key => $value) { ?>
                    <div id="tiket-<?php echo encrypt_decrypt('encrypt',$value->id); ?>">
                        <input type="hidden" name="ticket_id[]" value="<?php echo encrypt_decrypt('encrypt',$value->id); ?>">
                        <input type="hidden" name="is_delete[]" id="is-delete-<?php echo encrypt_decrypt('encrypt',$value->id); ?>" value="0">
                        <input type="hidden" name="ticket_name[]" value="<?php echo $value->ticket_name; ?>">
                        <input type="hidden" name="slot[]" value="<?php echo $value->slot; ?>">
                        <input type="hidden" name="price[]" value="<?php echo $value->price; ?>">
                        <input type="hidden" name="start_date_order[]" value="<?php echo $value->start_date_order; ?>">
                        <input type="hidden" name="end_date_order[]" value="<?php echo $value->end_date_order; ?>">
                        <input type="hidden" name="ticket_description[]" value="<?php echo $value->ticket_description; ?>">

                        <div class="callout callout-info" >
                            <div class="row">
                                <div class="col-md-2 col-xs-3">
                                    <div class="thumbnail">
                                        <div class="thumb  text-center">
                                            <i style="font-size: 70px;" class="icon-ticket"></i>
                                        </div>
                                    </div>
                                    <div class="caption text-center" style="margin-top: 10px;">
                                        <span><strong><?php echo $value->slot; ?> Tiket</strong></span>
                                    </div>
                                </div>
                                <div class="col-md-10 col-xs-9">
                                    <div>
                                        <h5><?php echo $value->ticket_name; ?></h5>
                                        <span class="help-block"><?php echo $value->ticket_description; ?></span>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-4">
                                                <label style="font-size: 20px;"><?php echo ($value->price>0)?rupiah($value->price):'GRATIS'; ?></label>
                                            </div>
                                            <div class="col-md-6 col-xs-8 text-right" style="color: #FFA000">
                                                <label>Penjualan tiket berakhir tanggal <?php echo date('d M Y | H:i',strtotime($value->end_date_order)); ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!--- STRAT LIST TIKET --->
                <div id="list-tiket"></div>
                <!--- END LIST TIKET --->

                <input type="hidden" id="is_online" name="is_online" value="<?php echo isset($data->is_online)?$data->is_online:''; ?>">

                <div class="form-group"  style="border:1px solid #ddd; padding: 20px;">
                    <div class="tabbable page-tabs">
                        <ul class="nav nav-pills nav-justified">
                            <?php if(isset($data->is_online) && $data->is_online=='1'){?> <li  class="active"><a href="#event-online" onclick="selectType(1)" data-toggle="tab"><i class="icon-feed"></i> Event Online</a></li> <?php } ?>
                            <?php if(isset($data->is_online) && $data->is_online=='0'){?> <li class="active"><a href="#event-offline" onclick="selectType(0)" data-toggle="tab"><i class="icon-trophy-star"></i> Event Offline </a></li><?php } ?>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane <?php if(isset($data->is_online) && $data->is_online=='1'){?>active<?php } ?> fade in" id="event-online">
                                <div class="form-group">
                                    <div class="callout callout-warning fade in">
                                        <h5> Aturan yang perlu kamu tahu terkait Event Online:</h5>
                                       
                                        <ul>
                                            <li>Silakan masukan URL Streaming dengan benar karena URL Streaming ini yang akan diterima oleh Pembeli Tiket kamu setelah transaksi selesai terbayar.</li>
                                            <li>Kamu tidak bisa melakukan perubahan URL Streaming setelah kamu selesai melakukan pembuatan event.</li>
                                            <li>Kesalahan memasukkan URL Streaming bukan merupakan tanggung jawab EVENT STACK.</li>
                                            <li>Jika kamu salah memasukkan URL Streaming, maka kamu harus membuat event baru untuk memperbaiki URL Streaming ini.</li>
                                            <li>Jika kamu sudah membuat Event Offline, kamu bisa mengubah menjadi Event Online.</li>
                                            <li>Jika kamu sudah membuat Event Online, kamu tidak bisa mengubah menjadi Event Offline.</li>
                                        </ul>
                                            
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12  col-xs-12">
                                                <label>Platform</label>
                                                <input disabled type="text" value="<?php echo isset($data->platform)?$data->platform:''; ?>" name="platform" class="form-control" placeholder="Youtube, Zoom, Instagram">
                                            </div>
                                            <div class="col-sm-12  col-xs-12">
                                                <label>Link Event</label>
                                                <input disabled type="text" value="<?php echo isset($data->link)?$data->link:''; ?>" name="link" class="form-control" placeholder="https://evenstack.id">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane <?php if(isset($data->is_online) && $data->is_online=='0'){?>active<?php } ?> fade in" id="event-offline">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12  col-xs-12">
                                            <label>Tempat/Gedung Event</label>
                                            <input disabled value="<?php echo isset($data->place)?$data->place:''; ?>" name="place" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div id="form-event-offline"></div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12  col-xs-12">
                                            <label>Provinsi</label>
                                            <select disabled id="provinsi" name="provinsi" class="form-control" onchange="selectProvinsi()">
                                                <option value="">Pilih Provinsi</option>
                                                <?php foreach ($provinsi as $key => $value) {?>
                                                    <option <?php if(isset($data->provinsi) && $data->provinsi==$value->id){?> selected <?php } ?> value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12  col-xs-12">
                                            <label>Kota</label>
                                            <select disabled id="kota" class="form-control">
                                                <option value="<?php echo isset($data->kota)?$data->kota:''; ?>">Pilih Kota</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12  col-xs-12">
                                            <label>Alamat Lengkap</label>
                                            <textarea disabled class="form-control" name="address"><?php echo isset($data->address)?$data->address:''; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div> 
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h6><i class="icon-pencil"></i> Deskripsi Event</h6>
                    <div class="block-inner">
                        <?php echo isset($data->description)?$data->description:''; ?>
                    </div>
                </div>
                <div class="form-group">
                    <h6><i class="icon-pencil"></i> Syarat dan Ketentuan</h6>
                    <div class="block-inner">
                        <?php echo isset($data->tnc)?$data->tnc:''; ?>
                    </div>
                </div>
                <div class="form-actions text-right">
                    <a href="<?php echo base_url(); ?>member/event/detail-event/<?php echo encrypt_decrypt('encrypt',$data->id); ?>">
                        <input type="button" name="button_publish" value="Back" class="btn btn-primary">
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>




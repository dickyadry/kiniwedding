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
                        <div class="loader hidden" id="loader-poster"></div> 
                        <?php if(isset($data->cover) && $data->cover!=null){?>
                            <img id="gambar" alt="Event Stack" src="<?php echo $data->cover; ?>">
                        <?php }else{ ?>
                            <img id="gambar" alt="Event Stack" src="<?php echo ASSETS?>img/cover-blank.jpg">
                        <?php } ?>
                        <div class="thumb-options">
                            <span>
                                <a data-toggle="modal" data-target="#crop_modal" class="btn btn-icon btn-danger"><i class="icon-upload"></i></a>
                                <input type="hidden" id="cover" name="cover"value="<?php echo isset($data->cover)?$data->cover:''; ?>">
                                <!-- <a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a> -->
                            </span>
                        </div>
                    </div>
                    <div class="caption text-center">
                        <h6>Upload Poster Event Anda</h6>
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
                                <input type="radio" name="type" class="styled" <?php if((isset($data->type) && $data->type=='Public') || !isset($data->type))   { ?>checked="checked" <?php } ?> value="Public">
                                <strong>Public</strong> (Event kamu akan tampil di halaman Cari Event)
                            </label>
                            <label class="radio radio-block">
                                <input type="radio" name="type" class="styled" <?php if(isset($data->type) && $data->type=='Private'){ ?>checked="checked" <?php } ?> value="Private">
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
                                <input onchange="cekCategory(<?php echo $key; ?>)" type="checkbox" value="<?php echo $value->id; ?>" name="category[]" <?php echo in_array($value->id, $category_product) ? "checked='checked'" : ""; ?> title="<?php echo $value->name; ?>">
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
                                <input type="checkbox" value="1" name="is_one_only" class="styled" <?php if(isset($data->is_one_only) && $data->is_one_only=='1'){ ?> checked="checked" <?php } ?>>
                                1 akun email hanya dapat melakukan 1 kali transaksi pembelian tiket.
                            </label>
                            <label class="radio radio-block">
                                <div class="row">
                                    <div class="col-md-8">
                                        Maksimal pemesanan tiket
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" name="max_order_ticket">
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
                                    <div class="loader hidden" id="loader-icon"></div> 
                                    <?php if($icon!=null && $icon!=" " && $icon!=""){?>
                                        <img  id="gambar_icon" alt="Event Stack" src="<?php echo $icon; ?>" style="border-radius:50%; width: 100%;">
                                    <?php }else{ ?>
                                        <img id="gambar_icon" alt="Evenst Stack" src="<?php echo ASSETS?>img/icon-blank.jpg" style="border-radius:50%; width: 100%;">
                                    <?php } ?>
                                    <div class="thumb-options">
                                        <span>
                                            <a data-toggle="modal" data-target="#crop_icon_modal" class="btn btn-icon btn-danger"><i class="icon-upload"></i></a>
                                            <input type="hidden" id="icon" name="icon"value="<?php echo isset($icon)?$icon:''; ?>">
                                        </span>
                                    </div>
                                </div>
                            
                                <div class="caption text-center">
                                    <span>Upload Icon</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-xs-12">
                        <div class="form-group" id="group-organization">
                            <label>Penyelenggara</label>
                            <input type="text" class="form-control" value="<?php echo isset($organization)?$organization:''; ?>" name="organization" id="organization" onkeyup="cekForm('organization')">
                            <i id="alert-organization" class="icon icon-warning form-control-feedback hidden"></i>
                            <span class="help-block">Nama Penyelenggara bisa menggunakan nama Organisasi atau Pribadi</span>
                        </div>
                        <div class="form-group" id="group-phone">
                            <label>Nomor Handphone (Narahubung)</label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control" value="<?php echo isset($phone)?$phone:''; ?>" name="phone" id="phone" onkeyup="cekForm('phone')">
                            <i id="alert-phone" class="icon icon-warning form-control-feedback hidden"></i>
                            <span class="help-block">Sistem akan mengirimkan notifikasi ke nomor tersebut jika ada yang melakukan pendaftaran melalui Event Stack</span>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="group-organization">
                    <label>Nama Event</label>
                    <input type="text" class="form-control" value='<?php echo isset($data->title)?$data->title:''; ?>' name="title" id="title" onkeyup="cekForm('title')">
                    <i id="alert-title" class="icon icon-warning form-control-feedback hidden"></i>
                </div>
                <div class="form-group" id="group-speaker">
                    <label>Pengisi Acara</label>
                    <input type="text" class="form-control" value="<?php echo isset($data->speaker)?$data->speaker:''; ?>" name="speaker" id="speaker" onkeyup="cekForm('speaker')">
                    <i id="alert-speaker" class="icon icon-warning form-control-feedback hidden"></i>
                </div>
                <div class="form-horizontal" >
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Tanggal & Waktu Event</label>
                            <div class="row">
                                <div class="col-sm-6 has-feedback" id="group-start-date">
                                    <?php if(isset($data->start_date) && $data->status=='aktif'){?>
                                        <?php echo isset($data->start_date)?$data->start_date:''; ?>
                                    <?php }else{ ?>
                                    <input type="text" class="datetime-picker-start_date form-control" id="start-date" value="<?php echo isset($data->start_date)?$data->start_date:''; ?>" name="start_date" placeholder="Tanggal mulai event" onchange="cekForm('start-date')" <?php if(isset($data->start_date) && $data->status=='aktif'){?> readonly <?php } ?>>
                                    <i class="icon-calendar2 form-control-feedback"></i>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-6 has-feedback" id="group-end-date">
                                    <?php if(isset($data->end_date) && $data->status=='aktif'){?>
                                        <?php echo isset($data->end_date)?$data->end_date:''; ?>
                                    <?php }else{ ?>
                                    <input type="text" class="datetime-picker-end_date form-control" id="end-date" value="<?php echo isset($data->end_date)?$data->end_date:''; ?>" name="end_date" placeholder="Tanggal berakhir event" onchange="cekForm('end-date')" <?php if(isset($data->end_date) && $data->status=='aktif'){?> readonly <?php } ?>>
                                    <i class="icon-calendar2 form-control-feedback"></i>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-buttons block row">
                    <a data-toggle="modal" role="button" onclick="openModal('berbayar')" class="col-sm-6" style="background: #FF1744; color: #FFF;"><i class="icon-ticket"></i> <span>Event Berbayar</span></a>
                    <a data-toggle="modal" role="button" onclick="openModal('gratis')" class="col-sm-6" style="background: #FFA000; color: #FFF;"><i class="icon-ticket"></i> <span>Event Gratis</span></a>
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
                            <button type="button" class="close" onclick='editTiket("<?php echo encrypt_decrypt('encrypt',$value->id); ?>","<?php echo $value->ticket_name; ?>",<?php echo $value->slot; ?>,<?php echo $value->price; ?>,"<?php echo preg_replace('/[^a-zA-Z0-9_ -.,\/:]/s',' ',$value->ticket_description); ?>","<?php echo date('Y-m-d H:i',strtotime($value->start_date_order)); ?>","<?php echo date('Y-m-d H:i',strtotime($value->end_date_order)); ?>")'><span class="icon-pencil3"></span></button>
                            <button type="button" class="close" onclick='removeTiket("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")' style="margin-right: 10px;"><span class="icon-remove3"></span></button>
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

                <div class="form-group" style="border:1px solid #ddd; padding: 20px;">
                    <div class="tabbable page-tabs">
                        <ul class="nav nav-pills nav-justified">
                            <li <?php if(isset($data->is_online) && $data->is_online=='1'){?> class="active" <?php } ?>><a href="#event-online" onclick="selectType(1)" data-toggle="tab"><i class="icon-feed"></i> Event Online</a></li>
                            <li <?php if(isset($data->is_online) && $data->is_online=='0'){?> class="active" <?php } ?>><a href="#event-offline" onclick="selectType(0)" data-toggle="tab"><i class="icon-trophy-star"></i> Event Off Online </a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane <?php if(isset($data->is_online) && $data->is_online=='1'){?>active<?php } ?> fade in" id="event-online">
                                <div class="form-group">
                                    <div class="callout callout-warning fade in">
                                        <h5> Aturan yang perlu kamu tahu terkait Event Online:</h5>
                                       
                                        <ul>
                                            <li>Silakan masukan URL Streaming dengan benar karena URL Streaming ini yang akan diterima oleh Pembeli Tiket kamu setelah transaksi selesai terbayar.</li>
                                            <li>Kesalahan memasukkan URL Streaming bukan merupakan tanggung jawab EVENT STACK.</li>
                                            <li>Jika kamu salah memasukan URL Streaming atau terjadi perubahan URL Streaming, maka anda wajib memberitahukannya kepada peserta.</li>
                                        </ul>
                                            
                                    </div>
                                    <div class="form-group" id="group-platform">
                                        <label>Platform</label>
                                        <input type="text" value="<?php echo isset($data->platform)?$data->platform:''; ?>" name="platform" class="form-control" placeholder="Youtube, Zoom, Instagram" id="platform" onkeyup="cekForm('platform')">
                                        <i id="alert-platform" class="icon icon-warning form-control-feedback hidden"></i>
                                    </div>
                                    <div class="form-group" id="group-link">
                                        <label>Link Event</label>
                                        <input type="text" value="<?php echo isset($data->link)?$data->link:''; ?>" name="link" class="form-control" placeholder="https://evenstack.id" id="link" onkeyup="cekForm('link')">
                                        <i id="alert-link" class="icon icon-warning form-control-feedback hidden"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane <?php if(isset($data->is_online) && $data->is_online=='0'){?>active<?php } ?> fade in" id="event-offline">
                                <div class="form-group" id="group-place">
                                    <label>Tempat/Gedung Event</label>
                                    <input id="place" value="<?php echo isset($data->place)?$data->place:''; ?>" name="place" type="text" class="form-control" placeholder="" onkeyup="cekForm('place')">
                                    <i id="alert-place" class="icon icon-warning form-control-feedback hidden"></i>
                                </div>
                                <div id="form-event-offline"></div>
                                <div class="form-group" id="group-provinsi">
                                    <label>Provinsi</label>
                                    <select id="provinsi" name="provinsi" class="form-control" onchange="selectProvinsi('provinsi')">
                                        <option value="">Pilih Provinsi</option>
                                        <?php foreach ($provinsi as $key => $value) {?>
                                            <option <?php if(isset($data->provinsi) && $data->provinsi==$value->id){?> selected <?php } ?> value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                    <i id="alert-provinsi" class="icon icon-warning form-control-feedback hidden"></i>
                                </div>
                                <div class="form-group" id="group-kota">
                                    <label>Kota</label>
                                    <select id="kota" class="form-control" onchange="cekForm('kota')">
                                        <option value="<?php echo isset($data->kota)?$data->kota:''; ?>">Pilih Kota</option>
                                    </select>
                                    <i id="alert-kota" class="icon icon-warning form-control-feedback hidden"></i>
                                </div>
                                <div class="form-group" id="group-kode_pos">
                                    <label>Kode Pos</label>
                                    <input value="<?php echo isset($data->kode_pos)?$data->kode_pos:''; ?>" name="kode_pos" type="text" class="form-control" placeholder="" id="kode_pos"  onkeyup="cekForm('kode_pos')">
                                    <i id="alert-kode_pos" class="icon icon-warning form-control-feedback hidden"></i>
                                </div>
                                <div class="form-group" id="group-address">
                                    <label>Alamat Lengkap</label>
                                    <textarea  onkeyup="cekForm('address')" id="address" class="form-control" name="address"><?php echo isset($data->address)?$data->address:''; ?></textarea>
                                    <i id="alert-address" class="icon icon-warning form-control-feedback hidden"></i>
                                </div>
                        </div> 
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h6><i class="icon-pencil"></i> Deskripsi Event</h6>
                    <div class="block-inner">
                        <textarea name="description" class="editor" placeholder="Enter text ..."><?php echo isset($data->description)?$data->description:''; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <h6><i class="icon-pencil"></i> Syarat dan Ketentuan</h6>
                    <div class="block-inner">
                        <textarea name="tnc" class="editor" placeholder="Enter text ..."><?php echo isset($data->tnc)?$data->tnc:''; ?></textarea>
                    </div>
                </div>
                <div class="form-actions text-right">
                    <?php if((isset($data->status) && $data->status!="aktif") || !isset($data->status)){?>
                    <input type="submit" name="button_draf" value="Simpan ke Draf" class="btn btn-warning">
                    <?php } ?>
                    <input type="button" name="button_publish" value="Publish Event" class="btn btn-primary"  onclick="cekPublish()">
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Form modal -->
<div id="form_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-paragraph-justify2"></i>Form Tiket</h4>
            </div>

            <!-- Form inside modal -->
            <input type="hidden" id="ticket-id" value="0">
            <input type="hidden" id="is-free">

            <div class="modal-body with-padding">
                <div class="block-inner text-danger">
                    <h6 class="heading-hr">Buat tiket event mu <small class="display-block">Please enter your tiket info</small></h6>
                </div>
                <div class="form-horizontal" >
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Tanggal Penjualan/Tanggal Pendaftaran</label>
                            <div class="row">
                                <div class="col-sm-6 has-feedback" id="group-start-date-order">
                                    <input type="text" class="datetime-picker form-control" id="start-date-order" placeholder="Tanggal mulai penjualan" onchange="cekForm('start-date-order')" readonly>
                                    <i class="icon-calendar2 form-control-feedback"></i>
                                </div>
                                <div class="col-sm-6 has-feedback" id="group-end-date-order">
                                    <input type="text" class="datetime-picker form-control" id="end-date-order" placeholder="Tanggal berakhir penjualan" onchange="cekForm('end-date-order')">
                                    <i class="icon-calendar2 form-control-feedback"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="group-ticket-name">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <label>Nama Tiket</label>
                            <input maxlength="50" type="text" class="form-control" id="ticket-name" onkeyup="cekForm('ticket-name')">
                            <span class="help-block text-right">Maksimal 50 karackter</span>
                            <i id="alert-ticket-name" class="icon icon-warning form-control-feedback hidden"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="group-slot">
                    <div class="row">
                        <div class="col-sm-12  col-xs-6">
                            <label>Jumlah Tiket</label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control" value="10" id="slot" onkeyup="cekForm('slot')">
                            <i id="alert-slot" class="icon icon-warning form-control-feedback hidden"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group" id="group-price">
                    <div class="row">
                        <div class="col-sm-12  col-xs-6">
                            <label>Harga Tiket</label>
                            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" type="text" class="form-control" value="10000" id="price" onkeyup="cekFormPrice('price')">
                            <i id="alert-price" class="icon icon-warning form-control-feedback hidden"></i>
                        </div>
                    </div>
                </div>
         <!--        <div class="callout callout-warning fade in" id="notes">
                    <h5>Perhitungan Penjualan Tiket</h5>
                    <p>Harga Tiket + Biaya 5000 Rupiah = Harga Jual Tiket</p>
                    <p><span class="text-price"></span> + 5000 = <span class="text-total-price"></span></p>
                    <hr>
                    <p>Harga Tiket - (3.5% dari harga tiket) = Nominal yang kamu dapatkan</p>
                    <p><span class="text-price"></span> - (<span class="text-price"></span> x 3.5%) = <span class="text-get-price"></span></p>
                </div> -->
                <div class="form-group" id="group-ticket-description">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <label>Deskripsi Tiket</label>
                            <textarea maxlength="140" class="form-control" id="ticket-description" onkeyup="cekForm('ticket-description')"></textarea> 
                            <span class="help-block text-right">Maksimal 140 karackter</span>
                            <i id="alert-ticket-description" class="icon icon-warning form-control-feedback hidden"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="saveTiket()">Simpan</button>
            </div>

        </div>
    </div>
</div>
<!-- /form modal -->

<!-- /form modal crop -->
<div id="crop_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-upload"></i>Form Upload</h4>
            </div>

            <div class="modal-body with-padding">

                <button type="button" class="btn btn-warning" onclick="document.getElementById('cover_file').click();">UPLOAD COVER</button>
                <br><br>
                
                <form method="post" action="" enctype="multipart/form-data" id="myform">
                    <div class="col-md-12">
                        <input type="file" id="cover_file" name="cover_file" onchange="uploadCropper(this);" style="display: none" class="form-control" accept="image/*">
                    </div>
                    <!-- Crop and preview -->   
                    <div class="col-md-12">
                        <div class="row">
                            <div class="avatar-wrapper" style="margin-bottom: 20px; height: 400px;"></div>
                        </div>
                    </div> 
                    <div class="avatar-upload">
                        <input type="hidden" class="avatar-data" name="avatar_data">
                    </div>                                                 
                </form>

            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="submitCrop();">Crop & Save</button>
            </div>
        </div>
    </div>
</div>
<!-- /form modal crop-->

<!-- /form modal icon -->
<div id="crop_icon_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-upload"></i>Form Upload</h4>
            </div>

            <div class="modal-body with-padding">

                <button type="button" class="btn btn-warning" onclick="document.getElementById('icon_file').click();">UPLOAD ICON</button>
                <br><br>
                
                <form method="post" action="" enctype="multipart/form-data" id="myform">
                    <div class="col-md-12">
                        <input type="file" id="icon_file" name="icon_file" onchange="uploadIconCropper(this);" style="display: none" class="form-control" accept="image/*">
                    </div>
                    <!-- Crop and preview -->   
                    <div class="col-md-12">
                        <div class="row">
                            <div class="avatar-wrapper-icon" style="margin-bottom: 20px; height: 400px;"></div>
                        </div>
                    </div> 
                    <div class="avatar-upload">
                        <input type="hidden" class="avatar-data-icon" name="avatar_data_icon">
                    </div>                                                 
                </form>

            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="submitIconCrop();">Crop & Save</button>
            </div>
        </div>
    </div>
</div>
<!-- /form modal  icon-->




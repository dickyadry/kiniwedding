<link rel="stylesheet" href="<?php echo base_url('assets_member/'); ?>css/jquery-ui.css">

<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Aclonica&family=Anton&family=Berkshire+Swash&family=Coiny&family=Concert+One&family=DM+Serif+Display&family=Dancing+Script:wght@700&family=Grenze+Gotisch:wght@400;700&family=Indie+Flower&family=Kaushan+Script&family=Lemon&family=Lily+Script+One&family=Lobster&family=Marko+One&family=Modak&family=Monoton&family=Niconne&family=Orbitron&family=Pacifico&family=Pattaya&family=Permanent+Marker&family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Ramaraja&family=Righteous&family=Roboto&family=Satisfy&family=Shadows+Into+Light&family=Sniglet&family=Volkhov&display=swap" rel="stylesheet"> 

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

    table[border="2"] th {
    /*background:#ccc;*/
    color:#666;
    /*font-size: 12px;*/
    text-align: left;
    padding: 20px 10px;
    border:1px solid #ccc;
    background: #CCC;
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

<style type="text/css"> 
    @page { margin: 0px; }
    body { margin: 0px; }
    .box-header{
        width: 794px;
        margin: auto;
        position: relative;
    }
    .box-toolbar{
        width: 794px;
        margin: auto;
        position: relative;
    }
    .box-sertifikat{
        width: 794px;
        margin: auto;
        position: relative;
    }
    .pembungkus{
        position: relative;
        /*height: 1000px;*/
    }
    .pembungkus img {
        width: 100%;
    }
    .boxtext {
        position: absolute;
        left:0px;
        top:0px;
        text-align: center;
        width: 500px;
        cursor: -webkit-grab; cursor: grab;
        border: 1px dotted #ccc;
    }
    .boxtext:focus {
      outline: 0;
    }
    .boxtextcode {
        position: absolute;
        left:0px;
        top:70px;
        text-align: center;
        width: 500px;
        cursor: -webkit-grab; cursor: grab;
        border: 1px dotted #ccc;
    }
    .boxtextcode:focus {
      outline: 0;
    }
    .boxqrcode {
        position: absolute;
        left:0px;
        top:140px;
        width: 150px;
        text-align: center;
        cursor: -webkit-grab; cursor: grab;
        border: 1px dotted #ccc;
    }
    .boxqrcode:focus {
      outline: 0;
    }

    #text-content{
        font-size: 30px;
        font-size-adjust: 0.424;
    }
    #text-content-code{
        font-size: 30px;
        font-size-adjust: 0.424;
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

 
    <form method="GET" action="" name="form_search">

        <div class="col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <input type="text" name="q" value="<?php echo isset($_GET['q'])?$_GET['q']:''; ?>" class="form-control" placeholder="Cari berdasarkan Nama/Email/No. HP/No Order">
                </div>
                <div class="col-sm-3 col-xs-12">
                    <select name="status" class="form-control" onchange="selectStatus()">
                        <option>All</option>
                        <option <?php if(isset($_GET['status']) && $_GET['status']=='PAID'){?> selected <?php } ?> value="PAID">SUDAH BAYAR</option>
                        <option <?php if(isset($_GET['status']) && $_GET['status']=='UNPAID'){?> selected <?php } ?> value="UNPAID">MENUNGGU PEMBAYAR</option>
                    </select>
                </div>
                <div class="col-sm-2 col-xs-6">
                <a href="#" onclick="openModalUploadMateri()">
                    <button type="button" class="btn btn-right-icon btn-primary btn-block" style="padding: 10px 20px; font-size: 12px;"><i class="icon-upload" style="font-size: 16px;"></i> UPLOAD MATERI</button>
                </a>
                </div>
                <div class="col-sm-2 col-xs-6">
                <a href="#" onclick="openModalCreateSertifikat()">
                    <button type="button" class="btn btn-right-icon btn-primary btn-block" style="padding: 10px 20px; font-size: 12px;"><i class="icon-file" style="font-size: 16px;"></i> BUAT SERTIFIKAT</button>
                </a>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <a href="<?php echo base_url(); ?>member/event/data-peserta/<?php echo encrypt_decrypt('encrypt',$data->id); ?>?q=<?php echo isset($_GET['q'])?$_GET['q']:''; ?>&status=<?php echo isset($_GET['status'])?$_GET['status']:''; ?>&export=true" target="_blank" >
                        <button type="button" name="export" value="true" class="btn btn-right-icon btn-primary  btn-block" style="padding: 10px 20px; font-size: 12px;"><i class="icon-file-excel" style="font-size: 16px;"></i> EXPORT </button>
                    </a>
                </div>
            </div>
        </div>
    </form>
    
    <div class="col-lg-12">  
        <br>
        <h2>REKAP PESERTA</h2>
    </div> 

    <div class="col-lg-12 form-horizontal"> 
        <div style="overflow-x: scroll; padding-bottom: 70px;">
        <table border="1">
            <thead>
                <tr>
                    <th></th>
                    <th>Setifikat</th>
                    <th>Materi</th>
                    <th>Nama</th>
                    <th>Order No.</th>
                    <th>Kontak</th>
                    <th>Status</th>
                </tr>
            </thead>
            <?php foreach ($datas as $key => $value) { ?>
            <tr>
                <td width="1%">
                    <div class="btn-group">
                        <button href="javaascritp:void(0)"  onclick='openModalUploadSertifikat("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")' class="btn btn-icon btn-warning"><i class="icon-upload"></i></button>

                <!--         <button class="btn btn-icon btn-warning dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></button>
                        <ul class="dropdown-menu icons-right">
                            <li><a onclick='openModalEmail("<?php echo $value->email; ?>")' href="javascript:void(0)"><i class="icon-mail-send"></i>Send Mail</a></li>
                            <li><a onclick='openModalUploadSertifikat("<?php echo $value->id; ?>")' href="javaascritp:void(0)" onclick='deleteAccount("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")'><i class="icon-upload"></i>Upload Sertifikat</a></li>
                        </ul> -->
                    </div>
                </td>
                <td width="1%">

                    <table border="2">
                    <?php foreach ($value->sertifikat as $key => $val) { ?>
                        <tr>
                            <td>
                                <button href="javaascritp:void(0)" onclick='deleteSertifikatPeserta("<?php echo encrypt_decrypt('encrypt',$val->id); ?>")' class="btn btn-icon btn-danger btn-sm"><i class="icon-remove3"></i></button>
                            </td>
                            <td><a href="<?php echo base_url(); ?>member/event/preview-esertifikat-peserta/<?php echo encrypt_decrypt('encrypt',$val->id); ?>" target="_blank"><button class="btn btn-icon btn-primary btn-sm"><i class="icon-eye"></i></button></a></td>
                            <td><?php echo $val->code; ?></td>
                        </tr>
                    <?php } ?>
                    </table>

                  <!--   <?php if($value->file!=null && $value->file!=""){?>
                        <a target="_blank" href="<?php echo base_url(); ?>member/event/download/<?php echo encrypt_decrypt('encrypt',$value->id); ?>"><button class="btn btn-icon btn-info"><i class="icon-download"></i></button></a>
                    <?php } ?> -->
                </td>
                <td width="1%">

                    <table border="2">
                    <?php foreach ($value->materi as $key => $val) { ?>
                        <tr>
                            <td>
                                <button href="javaascritp:void(0)" onclick='deleteMateriPeserta("<?php echo encrypt_decrypt('encrypt',$val->id); ?>")' class="btn btn-icon btn-danger btn-sm"><i class="icon-remove3"></i></button>
                            </td>
                            <td><a href="<?php echo base_url(); ?>member/event/download-materi/<?php echo encrypt_decrypt('encrypt',$val->id); ?>" target="_blank"><button class="btn btn-icon btn-primary btn-sm"><i class="icon-download"></i></button></a></td>
                            <td><?php echo $val->name; ?></td>
                        </tr>
                    <?php } ?>
                    </table>

                  <!--   <?php if($value->file!=null && $value->file!=""){?>
                        <a target="_blank" href="<?php echo base_url(); ?>member/event/download/<?php echo encrypt_decrypt('encrypt',$value->id); ?>"><button class="btn btn-icon btn-info"><i class="icon-download"></i></button></a>
                    <?php } ?> -->
                </td>
                <td><?php echo $value->name; ?></td>
                <td><?php echo $value->sales_order_no ?></td>
                <td><?php echo $value->phone ?><br><?php echo $value->email; ?></td>
                <td>
                    <?php if($value->status_order==1){ ?>
                        <span class="label label-success">PAID</span>
                    <?php }else{ ?>
                        <span class="label label-danger">UNPAID</span>
                    <?php } ?>
                        
                    </td>
            </tr>
            <?php } ?>
        </table>
        </div>
    </div>


</div>

<!-- Form modal -->
<div id="form_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form method="POST" action="<?php echo base_url(); ?>member/send-mail/<?php echo encrypt_decrypt('encrypt',$data->id); ?>" name="form_email" onsubmit="return validateForm()">
            <!-- Form inside modal -->

                <div class="modal-body with-padding">
                    <!-- div class="block-inner text-danger">
                        <h6 class="heading-hr">Form Email <small class="display-block" id="notes" style="color:#FF1744;">Kamu hanya dapat menggukan fitur email blast  satu kali </small></h6>
                    </div> -->
                    <div class="form-group">
                        <h6>Tujuan</h6>
                        <div class="block-inner">
                           <input type="text" class="form-control" name="to" id="to" value="All" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <h6>Subject</h6>
                        <div class="block-inner">
                           <input type="text" class="form-control" name="subject" id="subject">
                        </div>
                    </div>
                    <div class="form-group" id="status_kirim">
                        <h6>Status</h6>
                        <select name="status" class="form-control">
                            <option>All</option>
                            <option value="1">SUDAH BAYAR</option>
                            <option value="4">MENUNGGU PEMBAYAR</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h6>Pesan</h6>
                        <div class="block-inner">
                            <textarea style="height: 300px;" name="msg" id="msg" class="editor" placeholder="Enter text ..."><?php echo isset($data->note)?$data->note:''; ?></textarea>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>

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

                <button type="button" class="btn btn-warning" onclick="document.getElementById('cover_file').click();">UPLOAD SERTIFIKAT</button>
                <br><br>
                
                <form method="post" action="" enctype="multipart/form-data" id="myform">
                    <div class="col-md-12">
                        <input type="hidden" id="id_peserta" value="">
                        <input type="file" id="cover_file" name="cover_file" onchange="uploadCropper(this);" style="display: none" class="form-control" >
                    </div>
                    <!-- Crop and preview -->   
                    <div class="col-md-12">
                        <div class="row">
                            <div class="avatar-wrapper" style="margin-bottom: 20px; text-align: center;"></div>
                            <div class="avatar-name" style="text-align: center;"></div>
                        </div>
                    </div> 
            <!--         <div class="avatar-upload">
                        <input type="hidden" class="avatar-data" name="avatar_data">
                    </div>         -->                                         
                </form>

            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="submitSave();">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- /form modal crop-->

<!-- /form modal crop -->
<div id="form_modal_created_sertifikat" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-upload"></i>Form Upload</h4>
            </div>

            <div class="modal-body with-padding">

                <div class="row" style="text-align: center; margin: auto;">
                    <div style="width: 794px; text-align: center; margin: auto;">

                        <button type="button" class="btn btn-warning" onclick="document.getElementById('sertificat_file').click();">UPLOAD TEMPLATE SERTIFIKAT</button>
                        <br><br>

                        <form method="post" action="" enctype="multipart/form-data" id="myform">
                            <div class="col-md-12">
                                <input type="file" id="sertificat_file" name="sertificat_file" onchange="showSertifikat(this);" style="display: none" class="form-control" >
                            </div>
                        </form>


                        <?php foreach ($sertifikat as $key => $value) { ?>
                        <div class="col-lg-3">
                            <div class="block" style="height: 180px;">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img id="gambar" alt="Event Stack" src="<?php echo $value->thumb_images ?>">
                                        <div class="thumb-options">
                                            <span>
                                                <a href="javascript:void(0)" onclick='editSertifikat("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")' class="btn btn-icon btn-warning"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0)" onclick='deleteSertifikat("<?php echo encrypt_decrypt('encrypt',$value->id); ?>")' class="btn btn-icon btn-danger"><i class="icon-remove"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>

                <input type="hidden" id="product_id" value="<?php echo encrypt_decrypt('encrypt',$data->id); ?>">
                <input type="hidden" id="id_sertifikat" value="">
                <input type="hidden" id="width" value="0">
                <input type="hidden" id="height" value="0">

                <input type="hidden" name="bold_text" class="bold_text" value="<?php echo isset($data->bold_text)?$data->bold_text:0; ?>">
                <input type="hidden" name="italic_text" class="italic_text" value="<?php echo isset($data->bold_text)?$data->italic_text:0; ?>">
                <input type="hidden" name="underline_text" class="underline_text" value="<?php echo isset($data->bold_text)?$data->underline_text:0; ?>">
                <input type="hidden" name="uppercase_text" class="uppercase_text" value="<?php echo isset($data->uppercase_text)?$data->uppercase_text:0; ?>">
                <input type="hidden" name="positionx_text" class="positionx_text" value="<?php echo isset($data->bold_text)?$data->positionx_text:0; ?>">
                <input type="hidden" name="positiony_text" class="positiony_text" value="<?php echo isset($data->bold_text)?$data->positiony_text:0; ?>">

                <input type="hidden" name="bold_code" class="bold_code" value="<?php echo isset($data->bold_code)?$data->bold_code:0; ?>">
                <input type="hidden" name="italic_code" class="italic_code" value="<?php echo isset($data->italic_code)?$data->italic_code:0; ?>">
                <input type="hidden" name="underline_code" class="underline_code" value="<?php echo isset($data->underline_code)?$data->underline_code:0; ?>">
                <input type="hidden" name="positionx_code" class="positionx_code" value="<?php echo isset($data->positionx_code)?$data->positionx_code:0; ?>">
                <input type="hidden" name="positiony_code" class="positiony_code" value="<?php echo isset($data->positiony_code)?$data->positiony_code:70; ?>">

                <input type="hidden" name="positionx_qrcode" class="positionx_qrcode" value="<?php echo isset($data->positionx_qrcode)?$data->positionx_qrcode:0; ?>">
                <input type="hidden" name="positiony_qrcode" class="positiony_qrcode" value="<?php echo isset($data->positiony_qrcode)?$data->positiony_qrcode:140; ?>">
                <input type="hidden" name="size_qrcode" class="size_qrcode" value="<?php echo isset($data->size_qrcode)?$data->size_qrcode:150; ?>">
                

                <div class="box-toolbar hidden">
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                            <label class="radio radio-block">
                                <input onchange="selectStyle()" type="checkbox" value="1" id="show_name" name="show_name">
                                Tampilkan Nama Peserta
                            </label>
                            <br>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <label class="radio radio-block">
                                <input onchange="selectStyle()" type="checkbox" value="1" id="show_code" name="show_code">
                                Tampilkan Kode
                            </label>
                            <br>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <label class="radio radio-block">
                                <input onchange="selectStyle()" type="checkbox" value="1" id="show_qrcode" name="show_qrcode">
                                Tampilkan QRCode
                            </label>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="box-sertifikat hidden">
                    <span class="avatar-template-sertifikat"></span>
                    <div class="pembungkus">
                        <div class="boxtext hidden">
                            <div class="dropdown" style="position: absolute; left: -32px;">
                                <a data-toggle="dropdown" class="dropdown-toggle">
                                    <button class="btn btn-danger btn-icon dropdown-toggle btn-sm" data-toggle="dropdown"><i class="icon-pencil"></i></button>
                                </a>
                                <div class="popup dropdown-menu dropdown-menu-right">
                                    <div class="popup-header">
                                        <span>Pengaturan Text</span>
                                    </div>
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <td><span class="status status-danger item-before"></span> <a href="#">Tipe Text</a></td>
                                                <td class="text-center">
                                                    <?php 
                                                        $type_text_selected = isset($data->type_text)?$data->type_text:"'Roboto', sans-serif";
                                                    ?> 
                                                    <select class="form-control type_text" name="type_text" onchange="selectStyle()">
                                                        <?php foreach ($fonts as $key => $value) { ?>
                                                            <option value="<?php echo $value->value; ?>" <?php if($value->value==$type_text_selected){?> selected <?php } ?>><?php echo $value->name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="status status-success item-before"></span> <a href="#">Warna Text</a></td>
                                                <td class="text-center">
                                                    <input type="color" name="color_text" class="color_text" value="<?php echo isset($data->color_text)?$data->color_text:'#000000'; ?>" onchange="selectStyle()" style="width: 100%;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="status status-danger item-before"></span> <a href="#">Ukuran Text</a></td>
                                                <td class="text-center">
                                                    <?php 
                                                        $font_size_selected = isset($data->size_text)?$data->size_text:32;
                                                        $font_size = array(12,13,14,15,16,18,20,22,24,26,28,32,36,40,44,48,54,60,66,72,80,88,96); 
                                                    ?> 
                                                    <select class="form-control size_text" name="size_text" onchange="selectStyle()">
                                                        <?php foreach ($font_size as $key => $value) { ?>
                                                            <option <?php if($value==$font_size_selected){?> selected <?php } ?>><?php echo $value; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="status status-success item-before"></span> <a href="#">Posisi Text</a></td>
                                                <td class="text-center">
                                                    <?php 
                                                        $position_text_selected = isset($data->position_text)?$data->position_text:'center';
                                                        $position_text = array('center','left','right'); 
                                                    ?> 
                                                    <select class="form-control position_text" name="position_text" onchange="selectStyle()">
                                                        <?php foreach ($position_text as $key => $value) { ?>
                                                            <option <?php if($value==$position_text_selected){?> selected <?php } ?>><?php echo $value; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="status status-success item-before"></span> <a href="#">Dekorasi Text</a></td>
                                                <td class="text-center">
                                                    <button onclick="selectBold()" type="button" id="button_bold_text" class="btn btn-icon"><i class="icon-bold"></i></button>
                                                    <button onclick="selectItalic()" type="button" id="button_italic_text" class="btn btn-icon"><i class="icon-italic"></i></button>
                                                    <button onclick="selectUnderline()" type="button" id="button_underline_text" class="btn btn-icon"><i class="icon-underline"></i></button>
                                                    <button onclick="selectUppercase()" type="button" id="button_uppercase_text" class="btn btn-icon"><i class="icon-text-color"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="status status-success item-before"></span> <a href="#">Lebar Box Text</a></td>
                                                <td class="text-center">
                                                    <input type="number" value="<?php echo isset($data->width_box_text)?$data->width_box_text:500; ?>" class="form-control width_box_text" id="width-box" onkeyup="selectStyle()" onchange="selectStyle()">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <span id="text-content">Nama Peserta</span>
                            <div style="background:#ccc;">Silahkan seret text berikut keposisi yang diinginkan</div>
                        </div>

                        <div class="boxtextcode hidden">
                            <span class="dropdown" style="position: absolute; left: -32px;">
                                <a data-toggle="dropdown" class="dropdown-toggle">
                                    <button class="btn btn-danger btn-icon dropdown-toggle btn-sm" data-toggle="dropdown"><i class="icon-pencil"></i></button>
                                </a>
                                <div class="popup dropdown-menu dropdown-menu-right">
                                    <div class="popup-header">
                                        <span>Pengaturan Text</span>
                                    </div>
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <td><span class="status status-success item-before"></span> <a href="#">Warna Text</a></td>
                                                <td class="text-center">
                                                    <input type="color" name="color_code" class="color_code" value="<?php echo isset($data->color_code)?$data->color_code:'#000000'; ?>" onchange="selectStyle()" style="width: 100%;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="status status-danger item-before"></span> <a href="#">Ukuran Text</a></td>
                                                <td class="text-center">
                                                    <?php 
                                                        $font_size_selected = isset($data->size_code)?$data->size_code:22;
                                                        $font_size = array(12,13,14,15,16,18,20,22,24,26,28,32,36,40,44,48,54,60,66,72,80,88,96); 
                                                    ?> 
                                                    <select class="form-control size_code" name="size_code" onchange="selectStyle()">
                                                        <?php foreach ($font_size as $key => $value) { ?>
                                                            <option <?php if($value==$font_size_selected){?> selected <?php } ?>><?php echo $value; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="status status-success item-before"></span> <a href="#">Posisi Text</a></td>
                                                <td class="text-center">
                                                    <?php 
                                                        $position_code_selected = isset($data->position_code)?$data->position_code:'center';
                                                        $position_code = array('center','left','right'); 
                                                    ?> 
                                                    <select class="form-control position_code" name="position_code" onchange="selectStyle()">
                                                        <?php foreach ($position_code as $key => $value) { ?>
                                                            <option <?php if($value==$position_code_selected){?> selected <?php } ?>><?php echo $value; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="status status-success item-before"></span> <a href="#">Dekorasi Text</a></td>
                                                <td class="text-center">
                                                    <button onclick="selectBoldCode()" type="button" id="button_bold_code" class="btn btn-icon"><i class="icon-bold"></i></button>
                                                    <button onclick="selectItalicCode()" type="button" id="button_italic_code" class="btn btn-icon"><i class="icon-italic"></i></button>
                                                    <button onclick="selectUnderlineCode()" type="button" id="button_underline_code" class="btn btn-icon"><i class="icon-underline"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="status status-success item-before"></span> <a href="#">Lebar Box Text</a></td>
                                                <td class="text-center">
                                                    <input type="number" value="<?php echo isset($data->width_box_text_code)?$data->width_box_text_code:500; ?>" class="form-control width_box_text_code" id="width-box-code" onkeyup="selectStyle()" onchange="selectStyle()">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </span>
                            <span id="text-content-code">ES-ABCDXXXX</span>
                            <div style="background:#ccc;">Silahkan seret text berikut keposisi yang diinginkan</div>
                        </div>

                        <div class="boxqrcode hidden">
                            <img src="<?php echo base_url(); ?>public/qrcode/ES-B4J8HXXIRX.png" style="width:100%" />
                        </div>
                    </div>
                    <button type="button" class="btn btn-warning" onclick="simpanSertifikat(1);">Simpan</button>
                    <button type="button" class="btn btn-info" onclick="simpanSertifikat(2);">Simpan & Preview E-Sertifikat</button>

                    <hr>
                    <h2>Jenis tiket penerima sertifikat</h2>
                    <div class="box-toolbar hidden">
                        <div class="row">
                            <?php foreach ($ticket as $key => $value) { ?>
                            <div class="col-md-12 col-xs-12">
                                <label class="radio radio-block">
                                    <input type="checkbox" value="<?php echo $value->id; ?>"name="ticket[]">
                                    Pembelian <?php echo $value->ticket_name; ?>
                                </label>
                                <br>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if(count($multiple_form)){ ?>
                    <h2>Syarat Penerima Sertifikat</h2>
                    <div class="box-toolbar hidden">
                        <div class="row">
                            <?php foreach ($multiple_form as $key => $value) { ?>
                            <div class="col-md-12 col-xs-12">
                                <label class="radio radio-block">
                                    <input type="checkbox" value="<?php echo $value->id; ?>"name="multiple_form[]">
                                    <?php echo $value->name; ?>
                                </label>
                                <br>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <button type="button" class="btn btn-warning" onclick="simpanSertifikat(3);">Kirim</button>
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /form modal crop-->

<!-- /form modal crop -->
<div id="form_modal_upload_materi" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="icon-upload"></i>Form Upload</h4>
            </div>

            <input type="hidden" id="id_materi" value="">

            <div class="modal-body with-padding">

                <div class="row" style="text-align: center; margin: auto;">
                    <div style="width: 794px; text-align: center; margin: auto;">

                        <button type="button" class="btn btn-warning" onclick="document.getElementById('materi_file').click();">UPLOAD MATERI</button>
                        <br><br>

                        <?php if(count($materi)>0){ ?>
                        <table border="2">
                        <?php foreach ($materi as $key => $val) { ?>
                            <tr>
                                <td width="1%">
                                    <button href="javaascritp:void(0)" onclick='deleteMateri("<?php echo encrypt_decrypt('encrypt',$val->id); ?>")' class="btn btn-icon btn-danger btn-sm"><i class="icon-remove3"></i></button>
                                </td>
                                <td width="1%">
                                    <a href="<?php echo base_url(); ?>member/event/download-materi/<?php echo encrypt_decrypt('encrypt',$val->id); ?>" target="_blank">
                                        <button class="btn btn-icon btn-warning btn-sm"><i class="icon-download"></i></button>
                                    </a>
                                </td>
                                <td  width="1%"><button onclick='editMateri("<?php echo encrypt_decrypt('encrypt',$val->id); ?>")' class="btn btn-icon btn-primary btn-sm"><i class="icon-pencil"></i></button></td>
                                <td><?php echo $val->name; ?></td>
                            </tr>
                        <?php } ?>
                        </table>
                        <br>
                        <?php } ?>

                        <br><br>
                        <form method="post" action="" enctype="multipart/form-data" id="myform">
                            <div class="col-md-12">
                                <input type="file" id="materi_file" name="materi_file" onchange="showMateri(this);" style="display: none" class="form-control" >
                            </div>
                        </form>
               
                        


                    </div>
                </div>

                <input type="hidden" id="product_id" value="<?php echo encrypt_decrypt('encrypt',$data->id); ?>">
           
                <div class="box-sertifikat hidden">
                    
                    <div class="avatar-name" style="text-align: center; font-weight: bold;"></div>
                  
                    <button type="button" class="btn btn-warning" onclick="simpanMateri(1);">Simpan</button>

                    <hr>
                    <h2>Jenis tiket penerima sertifikat</h2>
                    <div class="box-toolbar hidden">
                        <div class="row">
                            <?php foreach ($ticket as $key => $value) { ?>
                            <div class="col-md-12 col-xs-12">
                                <label class="radio radio-block">
                                    <input type="checkbox" value="<?php echo $value->id; ?>"name="ticket_materi[]">
                                    Pembelian <?php echo $value->ticket_name; ?>
                                </label>
                                <br>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if(count($multiple_form)){ ?>
                    <h2>Syarat Penerima Sertifikat</h2>
                    <div class="box-toolbar hidden">
                        <div class="row">
                            <?php foreach ($multiple_form as $key => $value) { ?>
                            <div class="col-md-12 col-xs-12">
                                <label class="radio radio-block">
                                    <input type="checkbox" value="<?php echo $value->id; ?>"name="multiple_form_materi[]">
                                    <?php echo $value->name; ?>
                                </label>
                                <br>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                    <button type="button" class="btn btn-warning" onclick="simpanSertifikat(3);">Kirim</button>
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /form modal crop-->


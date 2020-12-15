<br><br>
<div>
    <div class="content text-center">
        <div class="sb-content-box">
            <h2 class="title animated">FORM REGISTRASI PESERTA</h2>
        </div>
    </div>
</div>
<br><br>
<style type="text/css">
    table[border="1"] {
    margin: 20px 0 20px 0;
    border-collapse:collapse;
    color:#ebebeb;
    font-size: 13px;
    width: 100%;   
    border:0px solid #ff9a17;
    }
    table[border="1"] th, table[border="1"] td {
    border:0px solid #ff9a17;
    }
    table[border="1"] th {
    /*background:#ccc;*/
    color:#FFF;
    /*font-size: 12px;*/
    text-align: left;
    padding: 15px 10px;
    border-top:1px dotted #ff9a17;
    border-bottom:1px dotted #ff9a17;
    }
    table[border="1"] td {
    background:#ebebeb;
    color:#666;
    /*font-size: 12px;*/
    text-align: left;
    padding: 20px 10px;
    /*border-top:1px solid #ff9a17;*/
    /*border-bottom:1px solid #ff9a17;*/
    }
</style>
<style type="text/css">
    @font-face {
        font-family: "Glyphicons Halflings";
        src: url(../fonts/glyphicons-halflings-regular.eot);
        src: url(../fonts/glyphicons-halflings-regular.eot?#iefix) format("embedded-opentype"), url(../fonts/glyphicons-halflings-regular.woff) format("woff"), url(../fonts/glyphicons-halflings-regular.ttf) format("truetype"),
            url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format("svg");
    }
    .glyphicon {
        position: relative;
        top: 1px;
        display: inline-block;
        font-family: "Glyphicons Halflings";
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .glyphicon-trash:before {
        content: "\e020";
    }
    .glyphicon-chevron-left:before {
        content: "\e079";
    }
    .glyphicon-chevron-right:before {
        content: "\e080";
    }
    .bootstrap-datetimepicker-widget{
        width: 275px !important;
        background: #FFF;
        color:#000;
    }
    .multiselect-container.dropdown-menu{
        width: 250px;
    }
</style>

<input type="hidden" name="payment_type" id="payment_type" value="<?php echo isset($payment_type)?$payment_type:''; ?>">
<input type="hidden" name="bank_or_store" id="bank_or_store" value="<?php echo isset($bank_or_store)?$bank_or_store:''; ?>">

<?php 
$cart = cart_contents_tiket();
if(count($cart['datas'])>0 ){ ?>
<div class="container" style="max-width: 900px;">
    <div class="leave-reply">

        <?php foreach ($cart['datas'] as $key => $value) { ?>
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-lg- col-12" >

                <?php foreach($value->detail as $k => $val){ ?>
                    <input type="hidden" name="is_one_only" value="<?php echo $val['is_one_only']; ?>">
                    <input type="hidden" name="product_id" value="<?php echo $val['product_id']; ?>">
                    <input type="hidden" name="ticket_id[]" value="<?php echo $val['id']; ?>">
                    <div style="border:1px dotted #ddd; border-radius:5px; margin-bottom: 20px; ">
                        <h3 class="title__head" style="text-align: left; margin-bottom: 20px; color:#FFF; background: #FF9E00; padding: 10px; border-radius: 5px 5px 0 0;">Pemesan ke <?php echo $k+1; ?> (<?php echo $val['ticket_name']; ?>)</h3>

                        <div style="padding: 20px;">
                            <h3 class="title__head" style="text-align: left; margin-bottom: 18px; color:#ff9c00;">Informasi Personal</h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="leave-reply-input-box">
                                        <label>Nama Lengkap *</label>
                                        <input type="text" name="name[]" value="<?php echo $val['name']; ?>">
                                        <label style="font-size: 12px; color: #999;">Isi nama dengan benar (nama biasa digunakan untuk E-Sertifikat)</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="leave-reply-input-box">
                                        <label>Email *</label>
                                        <input type="email" name="email[]" value="<?php echo $val['email']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="leave-reply-input-box">
                                        <label>Nomor Handphone *</label>
                                        <input type="text" name="phone[]" value="<?php echo $val['phone']; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <?php if(isset($custom_form) && count($custom_form)>0){ ?>
                            <br><br>
                            <h3 class="title__head" style="text-align: left; margin-bottom: 18px; color:#ff9c00;">Formulir Data Tambahan</h3>
                            <div class="row">
                                <?php foreach ($custom_form as $key => $value) { ?>
                                <div class="col-12">
                                    <div class="leave-reply-input-box">
                                        <label><?php echo $value->question; ?> <?php if($value->is_required=='1'){?>*<?php } ?></label>

                                        <?php if($value->type=='input'){ ?>
                                            <input type="text" name="<?php echo $value->field; ?>[]">
                                            <?php if($value->description!="" && $value->description!=null){?><label style="font-size: 12px; color: #999;"><?php echo $value->description; ?></label><?php } ?>
                                        <?php }else if($value->type=='file'){ ?>
                                            <input type="file" name="<?php echo $value->field; ?>_org[]" onchange='uploadFile("<?php echo $value->field; ?>",<?php echo $k; ?>)'>
                                            <input type="hidden" id="<?php echo $value->field; ?>_<?php echo $k; ?>" name="<?php echo $value->field; ?>[]">
                                            <?php if($value->description!="" && $value->description!=null){?><label style="font-size: 12px; color: #999;"><?php echo $value->description; ?></label><?php } ?>
                                        <?php }else if($value->type=='textarea'){?>
                                            <textarea rows="3" cols="3" name="<?php echo $value->field; ?>[]"></textarea>
                                            <?php if($value->description!="" && $value->description!=null){?><label style="font-size: 12px; color: #999;"><?php echo $value->description; ?></label><?php } ?>
                                        <?php }else if($value->type=='date'){?>
                                            <input type="text" class="datetime-picker" name="<?php echo $value->field; ?>[]">
                                            <?php if($value->description!="" && $value->description!=null){?><label style="font-size: 12px; color: #999;"><?php echo $value->description; ?></label><?php } ?>
                                        <?php }else if($value->type=='option'){?>
                                             <select name="<?php echo $value->field; ?>[]" class="form-control">
                                                <?php foreach ($value->detail as $key => $val) { ?>
                                                    <option value="<?php echo $val->answer; ?>"><?php echo $val->answer; ?></option>
                                                <?php } ?>
                                            </select>
                                            <?php if($value->description!="" && $value->description!=null){?><label style="font-size: 12px; color: #999;"><?php echo $value->description; ?></label><?php } ?>
                                        <?php }else if($value->type=='checkbox'){?>
                                            <?php if($value->description!="" && $value->description!=null){?><label style="font-size: 12px; color: #999; margin-top: -10px;"><?php echo $value->description; ?></label><?php } ?>
                                            <?php foreach ($value->detail as $key => $val) { ?>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="<?php echo $value->field; ?>[<?php echo $value->id; ?>][]" class="styled" value="<?php echo $val->answer; ?>">
                                                        <?php echo $val->answer; ?>
                                                    </label>
                                                </div>
                                            <?php } ?>
                                        <?php }else if($value->type=='radiobox'){?>
                                            <?php if($value->description!="" && $value->description!=null){?><label style="font-size: 12px; color: #999; margin-top: -10px;"><?php echo $value->description; ?></label><?php } ?>
                                            <?php foreach ($value->detail as $key => $val) { ?>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="<?php echo $value->field; ?>[<?php echo $value->id; ?>][]"class="styled" value="<?php echo $val->answer; ?>">
                                                        <?php echo $val->answer; ?>
                                                    </label>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>

        <?php if($cart['grand_total']>0 && $data->is_manual_payment==0){?>
            <div class="row">
                <div class="col-lg-12">  
                    <h2>METODE PEMBAYARAN</h2>
                </div>
                <div class="col-lg-12">
                    <div class="row" style="margin-top: 10px;"> 
                        <?php foreach ($payment_method as $key => $value) { ?>
                        <div class="col-md-2 col-4">
                            <div class="box-payment" onclick='selectPaymentType(<?php echo $value->id; ?>,"<?php echo $value->bank_or_store; ?>","<?php echo $value->payment_type; ?>",<?php echo $value->fee; ?>,<?php echo $value->free_percent; ?>)'>
                                <span class="checked <?php echo $value->bank_or_store; ?>_<?php echo $value->id; ?>" style="font-size: 20px;"></span>
                                <img src="<?php echo ASSETS; ?>img/<?php echo $value->icon; ?>">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="row hidden box-payment-number">
                <div class="col-lg-12">
                    <div style="background: #333; padding: 20px; border-radius: 10px;">
                        <div class="col-lg-12">  
                            <h2>Masukan nomor <span class="payment_type"></span> anda disini:</h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="row" style="margin-top: 10px;"> 
                                <div class="col-md-12 col-12">
                                    <div class="box-payment" style="font-size:20px;">
                                        <div class="leave-reply-input-box">
                                            <input type="text" name="number_payment" value="<?php echo $this->userpubliclog['phone']; ?>">
                                            <label style="font-size: 12px; color: #999;">Ex: 085712345678</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row hidden box-payment-notes">
                <div class="col-lg-12">
                    <div style="background: #333; padding: 20px; border-radius: 10px;">
                        <div class="col-lg-12">  
                            <div class="box-payment" style="font-size:20px;">
                                <span class="notes">Anda menggunakan metode pembayaran <b>QRIS</b><br>
                                    Silahkan lanjutkan keproses pambayaran, siapkan aplikasi pembayaran anda dan segera lalukan scan QR Code </span> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row hidden box-manual-payment">
                <div class="col-lg-12">
                    <div style="background: #333; padding: 20px; border-radius: 10px;">
                        <div class="col-lg-12">  
                            <h2>Silahkan Lakukan Pembayaran Melalui Nomor Rekening Berikut:</h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="row" style="margin-top: 10px;"> 
                                <?php foreach ($account as $key => $value) { ?>
                                <div class="col-md-6 col-12">
                                    <div class="box-payment" style="font-size:20px;">
                                        <b><?php echo $value->bank_name; ?></b> : <?php echo $value->account_number; ?>, a/n : <?php echo $value->account_name; ?>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-12">  
                            <label>Upload bukti pembayaran kamu disini:</label><br>
                            <input type="file" name="bukti_transfer_org" onchange='uploadBuktiTransfer()'>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        <?php }else if($cart['grand_total']>0 && $data->is_manual_payment==1){ ?>
            <input type="hidden" name="number_payment" value="">
            <div class="row box-manual-payment">
                <div class="col-lg-12">
                    <div style="background: #333; padding: 20px; border-radius: 10px;">
                        <div class="col-lg-12">  
                            <h2>Silahkan Lakukan Pembayaran Melalui Nomor Rekening Berikut:</h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="row" style="margin-top: 10px;"> 
                                <?php foreach ($account as $key => $value) { ?>
                                <div class="col-md-6 col-12">
                                    <div class="box-payment" style="font-size:20px;">
                                        <b><?php echo $value->bank_name; ?></b> : <?php echo $value->account_number; ?>, a/n : <?php echo $value->account_name; ?>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-12">  
                            <label>Upload bukti pembayaran kamu disini:</label><br>
                            <input type="file" name="bukti_transfer_org" onchange='uploadBuktiTransfer()'>
                        </div>
                    </div>
                </div>
            </div>
        <?php }else{ ?>
            <input type="hidden" name="number_payment" value="">
        <?php } ?>
        <input type="hidden" id="bukti_transfer" name="bukti_transfer">
        <br>
        <div class="row">
            <div class="col-lg-12">  
                <h2>RINGKASAN PEMBAYARAN</h2>
            </div>

            <input type="hidden" id="sub_total" name="sub_total" value="<?php echo $cart['sub_total']; ?>">
            <input type="hidden" id="biaya_layanan" name="biaya_layanan" value="<?php echo $cart['biaya_layanan']; ?>">
            <input type="hidden" id="grand_total" name="grand_total" value="<?php echo $cart['grand_total']; ?>">
            
            <div class="col-lg-12 form-horizontal"> 
                <div tyle="overflow-x: scroll; padding-bottom: 70px;">
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Tiket Yang Dipilih</th>
                                <th>Harga Tiket</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tr>
                        <?php foreach ($cart['datas'] as $key => $value) { ?>
                            <td><?php echo $value->ticket_name; ?></td>
                            <td><?php echo rupiah($value->price); ?></td>
                            <td><?php echo $value->quantity; ?></td>
                            <td><?php echo rupiah($value->total); ?></td>
                        </tr>
                        <?php } ?>

                        <tr>
                            <th style="border: 0px;"></th>
                            <th style="color:#999;">Sub Total</th>
                            <th style="color:#999;"><?php echo $cart['total_tiket']; ?></th>
                            <th style="color:#999;"><?php echo rupiah($cart['sub_total']) ?></th>
                        </tr>
                        <tr>
                            <th style="border: 0px;"></th>
                            <th style="color:#999;">Biaya Layanan</th>
                            <th style="color:#999;"></th>
                            <th style="color:#999;" id="biaya_layanan_text"><?php echo rupiah($cart['biaya_layanan']) ?></th>
                        </tr>
                        <tr>
                            <th style="border: 0px;"></th>
                            <th>Total Pembayaran</th>
                            <th></th>
                            <th style="color: #FF9E00; font-size: 16px;" id="grand_total_text"><?php echo rupiah($cart['grand_total']) ?></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <?php if($cart['grand_total']>0){?>
        <button class="button-register" style="display: block; width: 100%;" onclick="validateForm()">BAYAR TIKET</button>
        <?php }else{ ?>
        <button class="button-register" style="display: block; width: 100%;" onclick="validateForm()">REGISTRASI</button>
        <?php } ?>
    </div>
</div>
<?php } ?>

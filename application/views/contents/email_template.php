<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Success Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
    <table align="center" cellpadding="0" cellspacing="0" width="500">
        <tr>
            <td align="center" bgcolor="#0C0B21" style="padding: 20px 0;">
                <a href="<?php echo base_url(); ?>" target="_blank">
                    <img src="<?php echo ASSETS. "img/logo.png"; ?>" alt="Logo Event Stack"/> 
                </a>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 20px; text-align: center; font-family: Arial, sans-serif; font-size: 24px; font-size: 14px;">
                <?php if($data->grand_total>0){?>
                <h1>TAGIHAN ANDA</h1>
                <?php }else{ ?>
                <h1>SUCCESS ORDER</h1>
                <?php } ?>

                <p>Terimakasih <?php echo $data->member; ?><br/>telah melakukan pembelian tiket di Event Stack</p>
                <h3 style="color: #DDD35D; font-size: 24px;">
                    #<?php echo $data->sales_order_no; ?><br/>
                </h3>

                <?php if($data->payment_method=='qris'){?>
                    <br/>
                    <h4>Scan QRCODE dibawh ini <br/>untuk melakukan pembayaran</h4>
                    <img src="<?php echo base_url().'gen_qr_code/'.encrypt_decrypt('encrypt',$data->id); ?>" style="max-width: 300px; margin:10px;">
                <?php } ?>

                <?php if($data->status_order!=1 && $data->payment_method=="bank_transfer"){ ?>
                <div><span style="color: #FFA000; margin-top: 20px; display: block;">Segera Lalukan Pembayaran Sebelum <br/><?php echo date('d M Y',strtotime ($expiry_time,strtotime($data->created_at)));?> pukul <?php echo date('H:i',strtotime ($expiry_time,strtotime($data->created_at)));?> WIB</span></div>
                <?php }else if($data->status_order!=1 && $data->payment_method=="manual_transfer"){ ?>
                <div><span style="color: #FFA000; margin-top: 20px; display: block;">Segera Lalukan Pembayaran.<br> Jika kamu sudah melakukan pembayaran namun dalam waktu 1x24 jam kamu belum mandapatkan E-Ticket, silahkan hubungi penyelengga event (Stack Creator)</span></div>
                <?php } ?>
                <div style="border-bottom: 1px solid #CCC; margin: 20px 0;"></div>

                <?php if($data->status_order!=1 && $data->payment_method=="bank_transfer"){?>
                <table cellpadding="0" cellspacing="0" style="width: 100%; text-align: left;">
                    <tr>
                        <td width="100%" valign="top">Kode Pembayaran: <div style="font-size: 20px; color: #FF9D00;"><?php echo $data->payment_code; ?></div></td>
                    </tr>
                </table>
                <?php }else if($data->status_order!=1 && $data->bank_or_store=="MANUAL"){ ?>
                <table cellpadding="0" cellspacing="0" style="width: 100%; text-align: left;">
                    <tr>
                        <td width="100%" valign="top">Rekening Pembayaran: 
                        <?php foreach ($account as $key => $value) { ?>
                         <div style="font-size: 20px; color: #FF9D00;"><b><?php echo $value->bank_name; ?></b> : <?php echo $value->account_number; ?>, a/n : <?php echo $value->account_name; ?></div>
                         <?php } ?>
                     </td>
                    </tr>
                </table>
                <?php } ?>
                <table cellpadding="0" cellspacing="0" style="width: 100%; text-align: left;">
                    <tr>
                        <td width="50%" valign="top">Total Bayar: <div style="font-size: 20px; color: #FF9D00;"><?php echo rupiah($data->grand_total); ?></div></td>
                        <td width="50%" valign="top">
                            <?php if($data->payment_method!="" && $data->payment_method!=null){?>
                            Metode Pembayaran: <div style="font-size: 20px; color: #FF9D00;"><?php echo $data->bank_or_store ; ?></div>
                            <?php } ?>
                        </td>
                    </tr>
                </table>

                <div style="position: relative; border: 1px solid #FF9D00; border-radius: 8px; margin: 10px 0 0">
                    <div style="position: relative; padding: 0px; border-radius: 10px">
                        <div>
                            <?php foreach ($datas as $key => $row) { ?>
                            <div>
                                <div style="position: relative; margin: 0 0 20px; border-radius: 10px; padding: 20px">   
                                    <div style="margin: 5px 0; font-size: 20px; margin: 0px 0 15px; font-weight:bold;">
                                        <?php echo $row->title; ?>
                                    </div> 
                                    <div style="position: relative; display: flex">
                                        <div style="flex: 0 0 25%; position: relative;">
                                            <img style="border-radius: 10px; width: 100%; " src="<?php echo str_replace("medium", "small", $row->cover); ?>" alt="<?php echo $row->title; ?>"/>
                                        </div>
                                        <div style="flex: 0 0 75%; width: 100%;">
                                            <div style="padding: 0 0 0 20px;">
                                                <div style="margin: 5px 0; font-size: 16px; margin: 0px 0 5px; text-align:left;">
                                                    <?php echo $row->speaker; ?>
                                                </div>
                                                <div style="text-align:left; font-weight: normal; font-size: 14px; color: #666;"><?php echo isset($row->start_date)?convert_date($row->start_date,$row->end_date):''; ?></div>
                                                <div>
                                                    <span style="background:#CCC; margin-top: 10px; display: block; font-size: 15px; color: #333; border: none;  border-radius: 10px; padding: 10px 20px;"> 
                                                        <?php echo rupiah($row->price); ?> x <?php echo $row->quantity; ?>
                                                        </span>
                                                </div>
                                                <div style="padding: 20px 0 0; text-align: right;">
                                                    Total
                                                    <span style=" display: inline-block; padding: 0; font-size: 18px; font-weight: 700"><?php echo rupiah($row->quantity * $row->price); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <br/>
                <p>Jika anda mengikuti event online seperti webinar, workshop online, dan lain-lain, Link event sewaktu-waktu dapat berubah, jika link event berubah harap hubungi penyelenggara event (Stack Creator)</p>
                <br/>
                <p><b>Terima Kasih</b></p>
                <p><b>Event Stack</b></p>

            </td>
        </tr>
        <tr>
            <td bgcolor="#0C0B21" style="color: #FFF; text-align: center; font-family: Arial, sans-serif; font-size: 24px; font-size: 14px;">
                <br/>
                <table align="center" cellpadding="0" cellspacing="0" >
                    <tr>
                        <td align="center" bgcolor="#0C0B21" style="padding: 0px 10px">
                            <a href="https://facebook.com/eventstack.id" target="_blank">
                                <img src="<?php echo ASSETS; ?>img/icon-fb.jpg" alt="logo facebook"/>
                            </a>
                        </td>
                        <td align="center" bgcolor="#0C0B21" style="padding: 0px 10px">
                            <a href="https://twitter.com/eventstackid" target="_blank">
                                <img src="<?php echo ASSETS; ?>img/icon-tw.jpg" alt="logo twitter"/>
                            </a>
                        </td>
                        <td align="center" bgcolor="#0C0B21" style="padding: 0px 10px">
                            <a href="https://www.instagram.com/eventstack.id" target="_blank">
                                <img src="<?php echo ASSETS; ?>img/icon-ig.jpg" alt="logo instagram"/>
                            </a>
                        </td>
                    </tr>
                </table>
                <p class="copyright">CopyRight 2020 <a href="<?php echo base_url(); ?>">eventstack.id</a>. All Rights Reserved.</p>
            </td>
        </tr>
    </table>
</body>
</html>
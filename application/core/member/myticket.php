<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>E-Ticket</title>
<link rel="shortcut icon" href="<?php echo ASSETS . "img/icon.png";?>">
<link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/fontawesome-all.min.css">
<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900');
    body {
        font-family: "Roboto", sans-serif;

    }
    *{
        font-size: 11px;
    }

    table[border="1"] {
    border-collapse:collapse;
    color:#ebebeb;
    font-size: 10px;
    width: 100%;   
    /*border:0px solid #ff9a17;*/
    min-width: 500px; 
    border:0px;

    }
    table[border="1"] th {
    border:0px;
    /*background:#ccc;*/
    color:#666;
    /*font-size: 12px;*/
    text-align: left;
    /*padding: 20px 10px;*/
    /*border-top:1px solid #ff9a17;*/
    /*border-bottom:1px solid #ff9a17;*/
    }
    table[border="1"] td {
    background:#FFF;
    color:#666;
    border:0px;
    /*font-size: 12px;*/
    text-align: left;
    /*padding: 20px 10px;*/
    /*border:1px solid #ff9a17;*/
    }

    .speaker {
        display: block;
        font-size: 14px;
        letter-spacing: 0;
        line-height: 10px;
        border-left:2px solid #0C0B21;
        padding-left: 5px;
        margin: 0px 0 0px;
    }

    .date {
        display: block;
        font-size: 10px;
        letter-spacing: 0;
        /*border-left:2px solid #FFF;*/
        padding-left: 5px;
        margin: 0px 0 0px;
    }
    .place {
        display: block;
        font-size: 14px;
        letter-spacing: 0;
        line-height: 24px;
        /*border-left:2px solid #FFF;*/
        /*padding-left: 5px;*/
        margin: 10px 0 5px;
        /*font-weight: bold;*/
    }
    .place b{
        font-size: 14px;
        letter-spacing: 0;
        line-height: 24px;
        /*border-left:2px solid #FFF;*/
        /*padding-left: 5px;*/
        margin: 10px 0 5px;
        /*font-weight: bold;*/
    }
    .price {
        font-size: 16px;
        letter-spacing: 0;
        /*border-left:2px solid #FFF;*/
        padding-left: 5px;
        margin: 20px 0 10px;
        border:1px solid #EBAC3C;
        background: #EBAC3C;
        color: #0C0B21;
        padding: 5px;

    }
    .container{
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding: 10px;
        position: relative;
        text-align: left;
        background: #ebebeb;
    }
    @media (min-width:767px) {
        .container {
            width: 800px;
            padding: 10px;
        }
    }
    @media (min-width:1119px) {
        .container {
            width: 900px;
            padding: 10px;
        }
    }
    h2{
        font-size: 16px;
        color: #0C0B21;
        line-height: 10px;
    }
    h3{
        font-size: 14px;
        color: #0C0B21;
        padding: 0;
        margin: 18px 0 4px 0;
    }
    footer {
        background:#0C0B21;
        color: #FFF;
        text-align: center;
        bottom: 0;
        width: 100%;
    }
    .fw-info .social{
        padding: 0;
    }
    .fw-info .social li {
        display: inline-block;
        margin-right: 4px;
    }
    .fw-info .social li a {
        background: #FFF none repeat scroll 0 0;
        border-radius: 100%;
        display: block;
        font-size: 18px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        width: 35px;
        color: #DDD35D;
    }
    .fw-info .social li a i{
        margin-top: 9px;
    }
    .fw-info .social li a:hover {
        background: #DDD35D none repeat scroll 0 0;
        color: #ffffff;
    }
    .footer-bottom-area {
        border-top: 5px solid #DDD35D;
        padding: 20px;
    }

    .table-header{
        background: #0C0B21; 
        padding: 10px;
    }
    .header-order{
        text-align: right; 
        color: #EBAC3C; 
        font-weight: bold;
        font-size: 12px;
    }

    .box-barcode{
        background: #FFF; 
        position: relative; 
        height: 230px; 
        border:1px solid #0C0B21; 
        border-right:0px; 
        padding: 0 10px; 
        text-align: center;
    }
    .code{
        margin:10px;
    }
    .box-content{
        height: 230px; 
        border:1px solid #0C0B21; 
        padding: 0 10px; 
        border-right:0px;
    }
    .box-price{
        position: relative; 
        height: 230px   ; 
        border:1px solid #0C0B21; 
        padding: 0 10px; 
        text-align: right; 
        border-left:0px;
    }
    .category{
        background:#0C0B21; 
        padding: 10px 20px; 
        color: #EBAC3C;
        margin-top:-38px;
        float: left;
    }
    .eticket{
        background:#0C0B21; 
        float: right;
        padding: 10px 20px; 
        color: #FFF; 
        margin-top:-38px;
        font-weight: bold;
    }
    .title_label{
        background:#0C0B21; 
        padding: 10px 20px; 
        color: #FFF;
        float: left;
    }
    .footer{
        font-size: 14px; 
        background:#0C0B21; 
        color: #FFF; 
        padding: 10px;
    }
</style>

<body>
<div class="container">

    <table cellpadding="0" width="100%" class="table-header">
        <tr>
            <td  width="30%">
                <img border="0" src="<?php echo ASSETS. "img/logo.png"; ?>" width="200"/>
            </td>
            <td align="right" class="header-order">
                ORDER #<?php echo $sales_order->sales_order_no; ?><br><?php echo $ticket->ticket_name; ?>
            </td>
        </tr>
    </table>
    <table border="1" cellpadding="0">
        <tr>
            <td>
                <div class="box-barcode">
                    <img src="https://storage.googleapis.com/eventstack-storage/qrcode/<?php echo $peserta->code; ?>.png" style=" margin-top: 18px;"/>
                    <img src="https://storage.googleapis.com/eventstack-storage/barcode/<?php echo $peserta->code; ?>.png" />
                    <div class="code"><?php echo $peserta->code; ?></div>
                </div>
            </td>
            <td width="50%">
                <div class="box-content">

                    <h2 class="name"><?php echo $product->title; ?></h2>
                    <div class="speaker"><?php echo isset($product->speaker)?$product->speaker:''; ?></div>

                </div>
            </td>
            <td width="35%" >
                <div class="box-price">
                    <br>
                    <div class="date"><?php echo isset($product->start_date)?convert_date($product->start_date,$product->end_date):''; ?></div>

                    <div class="price"><?php echo ($ticket->price>0)?rupiah($ticket->price):'GRATIS'; ?></div> 

                </div>
            </td>
        </tr>
        <tr>
            <td >
            </td>
            <td>
                <span class="category"><?php echo isset($product->category_name)?$product->category_name:''; ?></span>
            </td>
            <td>
                <span class="eticket">E-TIKET</span>
            </td>
        </tr>
    </table>

    <?php if($product->is_custom_form==1 && $product->position=='mail-customer'){ ?>
    <br>
    <table border="0" cellpadding="0" width="100%" style="font-size: 14px;">
        <tr>
            <td  width="100%">
                <div style="height: 25px;">
                    <div class="title_label">Link Formulir Data Tambahan</div>
                </div>
                <h3><a href="<?php echo base_url(); ?>event/formulir-data-tambahan/<?php echo encrypt_decrypt('encrypt',$peserta->code); ?>" target="_blank"><?php echo base_url(); ?>event/formulir-data-tambahan/<?php echo encrypt_decrypt('encrypt',$peserta->code); ?></a></h3>
            </td>
        </tr>
    </table>
    <?php } ?>
    <br>
    <table border="0" cellpadding="0" width="100%" style="font-size: 14px;">
        <tr>
            <td  width="100%">
                <div style="height: 25px;">
                    <div class="title_label">TEMPAT/LINK EVENT</div>
                </div>
                <?php 
                if($product->is_online==1){
                    $cek_1 = explode("https://", $product->link);
                    $cek_2 = explode("http://", $product->link);
                    $http = (count($cek_1)>1 || count($cek_2)>1)?"":"http://";
                ?>
                <h3><b>Platform</b> <?php echo isset($product->platform)?$product->platform:''; ?></h3>
                <span><b>Link Event</b> <a href="<?php echo isset($product->link)?$http.''.$product->link:''; ?>" target="_blank"><?php echo isset($product->link)?$product->link:''; ?></a></span>
                <?php }else{ ?>
                <h3><?php echo isset($product->place)?$product->place:''; ?></h3>
                <span><?php echo isset($product->address)?$product->address:''; ?></span>
                <?php } ?>

            </td>
        </tr>
    </table>
    <br>
    <table border="0" cellpadding="0" width="100%" style="font-size: 14px;">
        <tr>
            <td  width="50%">
                <div style="height: 25px;">
                    <div class="title_label">STACK CREATOR</div>
                </div>
                <h3><?php echo $member->organization; ?></h3>
                <span><?php echo $member->phone; ?> <?php echo $member->email; ?></span>
            </td>
            <td>
                <div style="height: 25px;">
                    <div class="title_label">ORDER</div>
                </div>
                <h3>#<?php echo $sales_order->sales_order_no; ?></h3>
                <span><?php echo date('d/m/Y H:i',strtotime($sales_order->created_at)); ?></span>
            </td>
        </tr>
    </table>
    <br>
    <table cellpadding="0" width="100%">
        <tr>
            <td  width="100%">
                <div style="height: 30px;">
                    <div class="title_label">TERM & CONDITIONS FOR TICKET HOLDER</div>
                </div>

                <p><span>This document contains private & confidential information including person information, personal contact information, and other information requested by <?php echo $member->organization; ?> , the organization of this event. the <b>QR Code(2 dimensional barcode), Barcode, REF (Reference Code are secret</b>, you understand that you, the ticket owner / buyer, hold sole responsibility for the confidentiality of the code.</span></p>    
            </td>
        </tr>
    </table>
    <br>

    <table cellpadding="0" width="100%" class="footer">
        <tr>
            <td  width="33%" align="center">
                <b>Website:</b> www.eventstack.id
            </td>
            <td  width="33%" align="center">
                <b>Phone:</b> +628983024016
            </td>
            <td  width="33%" align="center">
                <b>Email:</b> eventstack215@gmail.com
            </td>
        </tr>
    </table>

</div>
</body>
</head>
</html>

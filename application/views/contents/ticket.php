<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>E-TICKET</title>
<link rel="shortcut icon" href="<?php echo ASSETS . "img/icon.png";?>">
<link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/fontawesome-all.min.css">
<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900');
    body {
        font-family: "Roboto", sans-serif;
    }

    table[border="1"] {
    border-collapse:collapse;
    color:#ebebeb;
    font-size: 12px;
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
        font-size: 18px;
        letter-spacing: 0;
        line-height: 20px;
        border-left:2px solid #0C0B21;
        padding-left: 5px;
        margin: 10px 0 10px;
    }

    .date {
        display: block;
        font-size: 12px;
        letter-spacing: 0;
        /*border-left:2px solid #FFF;*/
        padding-left: 5px;
        margin: 0px 0 0px;
    }
    .place {
        display: block;
        font-size: 18px;
        letter-spacing: 0;
        line-height: 24px;
        /*border-left:2px solid #FFF;*/
        padding-left: 5px;
        margin: 20px 0 10px;
        font-weight: bold;
    }
    .price {
        font-size: 22px;
        letter-spacing: 0;
        line-height: 24px;
        /*border-left:2px solid #FFF;*/
        padding-left: 5px;
        margin: 20px 0 10px;
        border:1px solid #EBAC3C;
        background: #EBAC3C;
        color: #0C0B21;
        padding: 10px;

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
        font-size: 22px;
        color: #0C0B21;
    }
    h3{
        font-size: 20px;
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
        color: #FF1744;
    }
    .fw-info .social li a i{
        margin-top: 9px;
    }
    .fw-info .social li a:hover {
        background: #FF1744 none repeat scroll 0 0;
        color: #ffffff;
    }
    .footer-bottom-area {
        border-top: 5px solid #FF1744;
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
    }

    .box-barcode{
        background: #FFF; 
        position: relative; 
        height: 100%; 
        border:1px solid #0C0B21; 
        border-right:0px; 
        padding: 0 10px; 
        text-align: center;
    }
    .code{
        margin:10px;
    }
    .box-content{
        position: relative; 
        height: 100%; 
        border:1px solid #0C0B21; 
        padding: 0 10px; 
        border-right:0px;
    }
    .category{
        position: absolute; 
        bottom: 0; 
        left: 0; 
        background:#0C0B21; 
        padding: 10px 20px; 
        color: #EBAC3C;
    }
    .box-price{
        position: relative; 
        height: 100%; 
        border:1px solid #0C0B21; 
        padding: 0 10px; 
        text-align: right; 
        border-left:0px;
    }
    .eticket{
        position: absolute; 
        bottom: 0; 
        right: 0; 
        background:#0C0B21; 
        padding: 10px 20px; 
        color: #FFF; 
        font-weight: bold;
    }
    .title-label{
        background:#0C0B21; 
        padding: 10px 20px; 
        color: #FFF; 
        font-weight: bold;
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
                <img border="0" src="<?php echo ASSETS. "img/logo.png"; ?>" width="100%"/>
            </td>
            <td align="right" class="header-order">
                ORDER #TRANS-1592141944-1<br>Tiket Seminar Masuk Dokter
            </td>
        </tr>
    </table>
    <table border="1" cellpadding="0">
        <tr>
            <td style="height: 270px;">
                <div class="box-barcode">
                    <img src="<?php echo ASSETS_IMAGES; ?>qrcode/001.png" />
                    <br><br>
                    <img alt='testing' src='<?php echo base_url(); ?>generate-barcode?codetype=Code128&size=30&text=ANU1B43D1R'/>
                    <div class="code">ANU1B43D1R</div>
                </div>
            </td>
            <td width="50%" style="height: 270px;">
                <div class="box-content">

                    <h2 class="name"><?php echo $data->title; ?></h2>
                    <div class="speaker"><?php echo isset($data->speaker)?$data->speaker:''; ?></div>

                    <?php if($data->is_online==1){?>
                    <div class="place"><?php echo isset($data->platform)?$data->platform:''; ?></div>
                    <?php }else{ ?>
                    <div class="place"><?php echo isset($data->place)?$data->place:''; ?></div>
                    <div class="place-note"><?php echo isset($data->address)?$data->address:''; ?></div>
                    <?php } ?>

                    <span class="category"><?php echo isset($data->category_name)?$data->category_name:''; ?></span>

                </div>
            </td>
            <td width="25%" style="height: 270px;">
                <div class="box-price">
                    <br>
                    <div class="date" style="font-size: 14px;"><?php echo isset($data->start_date)?convert_date($data->start_date,$data->end_date):''; ?></div>

                    <div class="price"><?php echo rupiah(150000); ?></div> 

                    <span class="eticket">E-TIKET</span>
                </div>
            </td>
        </tr>
    </table>

    <br>
    <table cellpadding="0" width="100%" style="font-size: 14px;">
        <tr>
            <td  width="50%">
                <b class="title-label">STACK CREATOR</b>
                <h3>Dicky Adryanzyah</h3>
                <span style="font-size: 14px;">+869812 189377 dicky@gmail.com</span>
            </td>
            <td>
                <b class="title-label">ORDER</b>
                <h3>#TRANS-1592141944-1</h3>
                <span style="font-size: 14px;">20/02/2020 08:12</span>
            </td>
        </tr>
    </table>
    <br>
    <table cellpadding="0" width="100%" style="font-size: 14px;">
        <tr>
            <td  width="100%">
                <b class="title-label">TERM & CONDITIONS FOR TICKET HOLDER</b>
                <p>
                <span style="font-size: 14px;">This document contains private & confidential information including person information, personal contact information, and ant other information requested by GSD, the organization of this event. the <b>QR Code(2 dimensional barcode), Barcode, REF (Reference Code are secret</b>, you understand that you, the ticket owner / buyer, hold sole responsibility for the confidentiality of the code.</span></p>    
            </td>
        </tr>
    </table>
    <br>

    <table cellpadding="0" width="100%" class="footer">
        <tr>
            <td  width="20%">
                <i class="fab fa-facebook-f"></i>EventStack
            </td>
            <td  width="20%">
                <i class="fab fa-twitter"></i>@EventStack
            </td>
            <td  width="20%">
                <i class="fab fa-instagram"></i> @eventstack.id
            </td>
            <td  width="20%">
                <i class="fa fa-phone"></i> 085710118027
            </td>
            <td  width="20%" align="right">
                <i class="fa fa-envelope"></i> admin@eventstack.id
            </td>
        </tr>
    </table>

</div>
</body>
</head>
</html>

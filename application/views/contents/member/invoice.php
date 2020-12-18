<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Invoice Order</title>
<link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/fontawesome-all.min.css">
<link rel="stylesheet" href="<?php echo ASSETS; ?>css/es_style.min.css?v=11">
<link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/bootstrap.min.css">   

<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900');
    html, body {
        margin: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        font-family: "Roboto", sans-serif;
    }
    .primary{
        color: #DDD35D;
    }
    .header{
        background:#0C0B21; 
        padding: 10px; 
        text-align: center;
    }
    .button{
        background:#DDD35D; 
        margin-top: 10px;  
        font-size: 17px; 
        color: #FFF; 
        border: none;  
        border-radius: 50px; 
        padding: 10px 20px;
        text-decoration: none;
    }
    .content{
        padding: 20px;
    }
    .container{
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 0px;
        padding-left: 0px;
        position: relative;
        text-align: center;
        height: 100%;
        background: #ebebeb;
    }
    @media (min-width:767px) {
        .container {
            width: 500px;
            padding-right: 0px;
            padding-left: 0px;
        }
    }
    @media (min-width:1119px) {
        .container {
            width: 500px;
            padding-right: 0px;
            padding-left: 0px;
        }
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

    .tab__box {
        position: relative;
        border: 1px solid #FF9D00;
        border-radius: 8px;
        margin: 10px 0 0
    }

    .tab__content {
        position: relative;
        padding: 0px;
        /*background: #fff;*/
        border-radius: 10px
    }

    .invoice__title {
        font-size: 16px;
        padding: 10px 0
    }

    .invoice__bar {
        position: relative;
        padding: 10px 0
    }

    .invoice__no {
        float: left;
        color: #27aae2;
        font-weight: 500
    }

    .cart__item__myevent {
        position: relative;
        margin: 0 0 20px;
        border-radius: 10px;
        padding: 20px
    }

    .cart__item__myevent .icon {
        filter: invert(1)
    }

    .cart__body {
        position: relative;
        display: flex
    }

    .cart__img__email {
        flex: 0 0 40%
    }

    .cart__img__email  {
        position: relative
    }

    .cart__img__email img {
        border-radius: 10px;
        width: 100%;
    }

    .cart__box__email {
        flex: 0 0 60%
        margin: 0;
        width: 100%;
        padding: 0px 0 0 20px;
        /*border:1px solid #000;*/  
    }

    .cart__title {
        margin: 5px 0;
        font-size: 20px;
        margin: 0px 0 15px;
        font-weight:bold;
    }

    .cart__speaker {
        margin: 5px 0;
        font-size: 16px;
        margin: 0px 0 5px;
        text-align:left;
    }

    .cart__total {
        padding: 20px 0 0;
        text-align: right
    }

    .cart__total span {
        display: inline-block;
        padding: 0;
        font-size: 18px;
        font-weight: 700
    }

    .price{
        background:#CCC; 
        margin-top: 10px; 
        display: block;  
        font-size: 15px; 
        color: #333; 
        border: none;  
        border-radius: 10px; 
        padding: 10px 20px;
    }

    .product__date{
        text-align:left;
        font-weight: normal;
        font-size: 14px;
        color: #666;
    }

</style>
</head>

<body>
<div class="container">

<div class="header">
    <a href="<?php echo base_url(); ?>" target="_blank">
    <img border="0" src="<?php echo ASSETS. "img/logo.png"; ?>"/> 
    </a>
</div>

    
<div class="content">
    <h1>INVOICE</h1>
    <h3 class="primary">
        #<?php echo $data->sales_order_no; ?><br>
    </h3>

    <?php if($data->payment_method=='qris'){?>
        <br>
        <h4>Scan QRCODE dibawh ini <br>untuk melakukan pembayaran</h4>
        <img src="<?php echo base_url().'gen_qr_code/'.encrypt_decrypt('encrypt',$data->id); ?>" style="max-width: 300px; margin:10px;">
    <?php } ?>

    <?php if($data->status_order!=1 && $data->payment_method=="bank_transfer"){ ?>
    <div><span style="color: #FFA000; margin-top: 20px; display: block;">Segera Lalukan Pembayaran Sebelum <br><?php echo date('d M Y',strtotime ($expiry_time,strtotime($data->created_at)));?> pukul <?php echo date('H:i',strtotime ($expiry_time,strtotime($data->created_at)));?> WIB</span></div>
    <?php }else if($data->status_order!=1 && $data->payment_method=="manual_transfer"){ ?>
    <div><span style="color: #FFA000; margin-top: 20px; display: block;">Segera Lalukan Pembayaran.<br> Jika kamu sudah melakukan pembayaran namun dalam waktu 1x24 jam kamu belum mandapatkan E-Ticket, silahkan hubungi penyelengga event (Stack Creator)</span></div>
    <?php }else{ ?>
    <div><span style="color: #FFA000; margin-top: 20px; display: block;">Silahkan buka aplikasi <?php echo $data->bank_or_store ; ?> anda dan segera selesaikan pembayaran </span></div>
    <?php } ?>
    <hr style="background: #ccc;">

    <?php if($data->status_order!=1 && $data->payment_method=="bank_transfer"){?>
    <div class="row">
        <div class="col-12">
            <div class="box_payment">
                Kode Pembayaran: <span class="code_payment"><?php echo $data->payment_code; ?></span>
            </div>
        </div>
    </div>
    <?php }else if($data->status_order!=1 && $data->bank_or_store=="MANUAL"){ ?>
    <div class="row">
        <div class="col-12">
            <div class="box_payment">
                Rekening Pembayaran: 
                <?php foreach ($account as $key => $value) { ?>
                <span class="code_payment"><b><?php echo $value->bank_name; ?></b> : <?php echo $value->account_number; ?>, a/n : <?php echo $value->account_name; ?></span>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="row">
        <div class="col-6">
            <div class="box_payment">
                Total Bayar: <span class="code_payment"><?php echo rupiah($data->grand_total); ?></span>
            </div>
        </div>
        <div class="col-6">
            <div class="box_payment">
                Metode Pembayaran: <span class="code_payment"><?php echo $data->bank_or_store ; ?></span>
            </div>
        </div>
    </div>

    <div class="tab__box">
        <div class="tab__content" id="box1">
            <!-- status pemesanan -->
            <div class="invoice__list">
                <?php foreach ($datas as $key => $row) { ?>
                <div class="invoice__item">
                    <div class="cart__item__myevent">   
                        <div class="cart__title">
                            <?php echo $row->title; ?>
                        </div> 
                        <div class="cart__body clearfix">
                            <div class="cart__img__email">
                                <div class="cart__img__email">
                                    <img src="<?php echo str_replace("medium", "small", $row->cover); ?>" alt="">
                                </div>
                            </div>
                            <div class="cart__box__email">
                                <div class="cart__speaker">
                                    <?php echo $row->speaker; ?>
                                </div>
                                <div class="product__date"><?php echo isset($row->start_date)?convert_date($row->start_date,$row->end_date):''; ?></div>
                                <div class="row">
                                        <span class="price"> <?php echo rupiah($row->price); ?> x <?php echo $row->quantity; ?></span>
                                </div>
                                <div class="cart__total">
                                    Total
                                    <span><?php echo rupiah($row->quantity * $row->price); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <?php } ?>
            </div>
        </div>
    </div>

    <br>
    <p>Jika anda mengikuti event online seperti webinar, workshop online, dan lain-lain, Link event sewaktu-waktu dapat berubah, jika link event berubah harap hubungi penyelenggara event (Stack Creator).</p>
    <br>
    <p><b>Terima Kasih</b></p>
    <p><b>Event Stack</b></p>

</div>
    

<footer>
    <div class="footer-bottom-area">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="fw-info footer-widget">
                    <ul class="social">
                        <li>
                            <a href="https://web.facebook.com/eventstack.id" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/eventstackid" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/eventstack.id" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <p class="copyright">CopyRight 2020 eventstack.id</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

</div>

</body>
</html>

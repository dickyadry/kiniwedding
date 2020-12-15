<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Penilaian</title>
<link rel="shortcut icon" href="<?php echo ASSETS . "img/icon.png";?>">

<link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/fontawesome-all.min.css">
<link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">

<script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

<script src="<?php echo ASSETS; ?>event-stack/js/jquery-3.2.0.min.js"></script>
<script src="<?php echo ASSETS; ?>js/rater.js" charset="utf-8"></script>
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
        color: #ff1744;
    }
    .header{
        background:#0C0B21; 
        padding: 10px; 
        text-align: center;
    }
    .button{
        background:#ff1744; 
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

    .tab__box {
        position: relative;
        border: 1px solid #FFF;  
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
        margin: 0px 0 5px;
        font-weight:bold;
        text-align:left;
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

    textarea{
        width: 95%;
        border-radius: 5px;
        /*margin: 10px;*/   
        border: 1px solid #ccc;
        padding: 10px; 
        min-height: 150px;
    }

    .button-send{
        width:100%; 
        border: 1px solid #FF1744; 
        background: #FF1744; 
        color: #FFF;  
        padding:10px; 
        margin:10px 0; 
        border-radius:5px; 
        cursor: pointer;
    }

    .rate{
        font-size: 50px;
        text-align: center;
        display: block;
        margin: auto;
    }    
    .rate-base-layer
    {
        color: #aaa;
    }
    .rate .rate-hover-layer
    {
        color: #FF9D00;
    }
    .rate .rate-select-layer
    {
        color: #FF9D00;
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
    <h1>PENILAIAN</h1>
    <p>Apakah anda puas terhadapat event ini, <br>Silahkan berikan penilaian.</p>

    <div class="tab__box">
        <div class="tab__content" id="box1">
            <!-- status pemesanan -->
            <div class="invoice__list">
                <div class="invoice__item">
                    <div class="cart__item__myevent">       
                        
                        <div class="cart__body clearfix">
                            <div class="cart__img__email">
                                <div class="cart__img__email">
                                    <img src="<?php echo ASSETS_IMAGES; ?>images/_thumb/small/<?php echo $data->cover; ?>" alt="">
                                </div>
                            </div>
                            <div class="cart__box__email">
                                <div class="cart__title">
                                    <?php echo $data->title; ?>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <div style="text-align: center !important; padding: 20px 0;">
        <div class="rate"></div>
    </div>

    <div>
        <form action="<?php echo base_url(); ?>member/event/rate" method="post" id="cf" onsubmit="return validateForm()">
            <input id="input2" type="hidden" name="rate">
            <input id="input2" type="hidden" name="product_id" value="<?php echo $data->id; ?>">
            <div class="row">
                <div class="col-12">
                    <textarea class="contact-textarea form__input" placeholder="Tulis komentar anda disini" id="msg" name="msg" ></textarea>
                </div>

                <div class="col-12">
                    <button class="button-send">Kirim</button>
                </div>
            </div>
        </form>
    </div>

    

</div>




<footer>
    <div class="footer-bottom-area">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="fw-info footer-widget">
                    <ul class="social">
                        <li>
                            <a href="https://web.facebook.com/Event-Stack-108387124225036" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/EvenStack" target="_blank">
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

<script>
    $(document).ready(function(){
        var options = {
            max_value: 5,
            step_size: 0.5,
            selected_symbol_type: 'fontawesome_star',
            // url: 'http://localhost/test.php',
            initial_value: 0,
            update_input_field_name: $("#input2"),
        }
        $(".rate").rate(options);
    });

    function validateForm(){

        var status_data = true;
        var msg = '';

        var rate = document.getElementsByName("rate")[0].value;

        if(rate==0){

            msg = 'Mohon berikan penilaian';
            status_data = false;

        }

        if(status_data==false){
            Swal.fire(
                'Oopps!',
                msg,
                'error'
            );
            return false;
        }
        return true; 

    }

</script>

</body>
</html>

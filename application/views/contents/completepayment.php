<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MDT222X');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="event stack, eventstack, event, webinar, kegiatan, event online, workshop online">
    <meta name="keywords" content="event stack, eventstack, event, webinar, kegiatan, event online, workshop online">
    <meta name="author" content="eventstack.id">
  
    <title><?php echo $title_page; ?></title>

    <link rel="shortcut icon" href="<?php echo ASSETS . "img/icon.png";?>">
    <link rel="stylesheet" href="<?php echo ASSETS . "css/es_style.min.css?v=11";?>">
    <script src="<?php echo ASSETS; ?>js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/bootstrap.min.css">   
    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/style.css">

    
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDT222X"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- container -->

    <?php if($data->status_order==1){ ?>
        <br><br><br><br><br>
    <?php } ?>
    <div class="container text-center">
        <div>
            <div class="col-xs-12">
                
                    <!-- payment status success -->
                    <div class="payment__status">

                        <div class="payment__status__title">Transaksi Berhasil</div>
                        <p>Terima kasih telah melakukan transaksi di KiniWedding.</p>

                        <div class="payment__status__img">
                            <img src="<?php echo ASSETS; ?>img/logo-hitam.png" style="max-width: 143px;">
                        </div>

                    </div>

                <?php if($data->status_order!=1 && $data->bank_or_store!="MANUAL" && $data->bank_or_store!="DANA" && $data->bank_or_store!="LINKAJA"){ ?>
                <div class="payment__status__box">


                    <?php if($data->payment_method=='qris'){?>
                        <h4>Scan QRCODE dibawh ini <br>untuk melakukan pembayaran</h4>
                        <img src="<?php echo base_url().'gen_qr_code/'.encrypt_decrypt('encrypt',$data->id); ?>" style="max-width: 300px; margin:10px;">
                    <?php } ?>

                    <div class="form__footer payment__footer">
                        <?php if($data->bank_or_store=='OVO'){?>
                        Buka aplikasi OVO anda dan segera lalukan pembayaran
                        <?php }else{?>
                        Segera Lalukan Pembayaran
                        <?php } ?>
                        
                        <?php if($data->payment_method=='bank_transfer'){?>
                        <br><br>
                        <div class="row">
                            <div class="col-4">
                                <div class="box_time">
                                    <span class="time" id="hours">00</span>Jam
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="box_time">
                                    <span class="time" id="minutes">00</span>Menit
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="box_time">
                                    <span class="time" id="seconds">00</span>Detik
                                </div>
                            </div>
                        </div>


                        <span style="color: #FFA000; margin-top: 20px; display: block;">Sebelum <?php echo date('d M Y',strtotime ($expiry_time,strtotime($data->created_at)));?> pukul <?php echo date('H:i',strtotime ($expiry_time,strtotime($data->created_at)));?> WIB</span>

                        <br>
                        <?php } ?>
                    </div>

                    <hr style="background: #ccc;">


                    <?php if($data->payment_method=='bank_transfer'){?>
                    <div class="row">
                        <div class="col-12">
                            <div class="box_payment">
                                Kode Pembayaran: <span class="code_payment"><?php echo $data->payment_code; ?></span>
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
                                Metode Pembayaran: <span class="code_payment"><?php echo $data->bank_or_store; ?></span>
                            </div>
                        </div>
                    </div>


                </div>
                <?php }else if($data->status_order!=1 && $data->bank_or_store=="MANUAL"){ ?>
                <div class="payment__status__box">

                    <div class="form__footer payment__footer">
                        Segera Lalukan Pembayaran.<br> Jika kamu sudah melakukan pembayaran namun dalam waktu 1x24 jam pembayaran kamu belum terkonfirmasi silahkan hubungi admin di nomor 0898-3024-016
                        <br><br>
                    </div>

                    <hr style="background: #ccc;">
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
                    <div class="row">
                        <div class="col-6">
                            <div class="box_payment">
                                Total Bayar: <span class="code_payment"><?php echo rupiah($data->grand_total); ?></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box_payment">
                                Metode Pembayaran: <span class="code_payment"><?php echo $data->payment_method ; ?></span>
                            </div>
                        </div>
                    </div>

                </div>
                <?php } ?>
                <br>
                <p>Jika kamu telah menyelesaikan pembayaran silahkan lengkapi data undangan pernikahan kamu melalui link berikut<br>
                <a style="color: #FFA000;" href="<?php echo base_url(); ?>member/pesanan-saya/lengkapi-data/<?php echo encrypt_decrypt('encrypt',$data->id); ?>" target="_blank"><?php echo base_url(); ?>member/pesanan-saya/lengkapi-data/<?php echo encrypt_decrypt('encrypt',$data->id); ?></a>
                <br>
                <br>
                <div class="form__submit payment__submit clearfix">
                    <div class="col-xs-12">
                        <div class="buat-event text-center">
                            <div class="button-buat-event">
                                <a href="<?php echo base_url();?>">KEMBALI KE HOME</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <script type="text/javascript">

    var created_at = "<?php echo date('Y-m-d H:i:s',strtotime($expiry_time,strtotime($data->created_at)));?>";
    var countDownDate = new Date(created_at).getTime();

        var x = setInterval(function() {

        var now = new Date().getTime();
        var distance = countDownDate - now;
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        $('#hours').html(hours);
        $('#minutes').html(minutes);
        $('#seconds').html(seconds);

        if (distance < 0) {
            clearInterval(x);
            window.location.href = "<?php echo base_url(); ?>";
        }

    }, 1000);

    </script>

    </body>
</html>


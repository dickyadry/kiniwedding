<link href="<?php echo base_url('assets_member/'); ?>css/glyphicon-icon.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets_member/'); ?>css/londinium-theme.css" rel="stylesheet" type="text/css">

<style type="text/css">
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
</style>
<br><br>
<div>
    <div class="content text-center">
        <div class="sb-content-box">
            <h2 class="title animated"><?php echo $data->name; ?></h2>
        </div>
    </div>
</div>
<br><br>

<form role="form" method="POST" action="<?php echo base_url(); ?>event/save-data-multiple-form/<?php echo encrypt_decrypt('encrypt', $id); ?>" onsubmit="return validateForm()" enctype="multipart/form-data">

<div class="container" style="max-width: 900px;">
    <div class="leave-reply">

        <div class="row" style="margin-bottom: 30px;">
            <div class="col-lg- col-12" >

                    <input type="hidden" name="product_id" value="<?php echo $data->product_id; ?>">
                    <!-- <input type="hidden" name="ticket_id" value="<?php echo $data->ticket_id; ?>"> -->
                    <h2><?php echo $product->title; ?></h2>
                    <br>
                    <div style="border:1px dotted #ddd; border-radius:5px; margin-bottom: 20px; ">
                        <div style="padding: 20px;">
                            <!-- <h3 class="title__head" style="text-align: left; margin-bottom: 18px; color:#ff9c00;">Informasi Personal</h3> -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="leave-reply-input-box">
                                        <label>Nama Lengkap *</label>
                                        <input type="text" name="name" value="<?php echo $member->name; ?>">
                                    </div>
                                </div>
<!--                                 <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="leave-reply-input-box">
                                        <label>Email *</label>
                                        <input type="email" name="email" value="<?php echo $member->email; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="leave-reply-input-box">
                                        <label>Phone *</label>
                                        <input type="text" name="phone" value="<?php echo $member->phone; ?>" readonly>
                                    </div>
                                </div> -->
                            </div>
                            
                            <?php if(isset($multiple_form) && count($multiple_form)>0){ ?>
                            <hr style="background: #fff;">
                            <div class="row">
                                <?php foreach ($multiple_form as $key => $value) { ?>
                                <div class="col-12">
                                    <div class="leave-reply-input-box">
                                        <label><?php echo $value->question; ?> <?php if($value->is_required=='1'){?>*<?php } ?></label>

                                        <?php if($value->type=='input'){ ?>
                                            <input type="text" name="<?php echo $value->field; ?>">
                                        <?php }else if($value->type=='file'){ ?>
                                            <input type="file" name="<?php echo $value->field; ?>">
                                        <?php }else if($value->type=='textarea'){?>
                                            <textarea rows="3" cols="3" name="<?php echo $value->field; ?>"></textarea>
                                        <?php }else if($value->type=='date'){?>
                                            <input type="text" class="datetime-picker" name="<?php echo $value->field; ?>">
                                        <?php }else if($value->type=='option'){?>
                                             <select name="<?php echo $value->field; ?>[]" class="form-control">
                                                <?php foreach ($value->detail as $key => $val) { ?>
                                                    <option value="<?php echo $val->answer; ?>"><?php echo $val->answer; ?></option>
                                                <?php } ?>
                                            </select>
                                        <?php }else if($value->type=='checkbox'){?>
                                            <?php foreach ($value->detail as $key => $val) { ?>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="<?php echo $value->field; ?>[]" class="styled" value="<?php echo $val->answer; ?>">
                                                        <?php echo $val->answer; ?>
                                                    </label>
                                                </div>
                                            <?php } ?>
                                        <?php }else if($value->type=='radiobox'){?>
                                            <?php foreach ($value->detail as $key => $val) { ?>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="<?php echo $value->field; ?>[]"class="styled" value="<?php echo $val->answer; ?>">
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
            </div>
        </div>

        <button class="button-register" style="display: block; width: 100%; cursor: pointer;" >SIMPAN</button>
    </div>
</div>
</form>

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

<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/moment.min.js"></script>

<script src="<?php echo base_url('assets_member/'); ?>js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets_member/'); ?>css/bootstrap-datetimepicker.min.css">

<script type="text/javascript">
    function validateForm(){ 

        var peserta = [];

        var msg = '';
        var status_data = true;

        var parameter = {};

        if(document.getElementsByName("name")[0].value==""){
             msg = 'Nama peserta tidak boleh kosong';
            status_data = false;
        }

        <?php if(isset($multiple_form)){ ?>
            <?php foreach ($multiple_form as $key => $value) { ?>
                <?php if($value->is_required==1 && $value->type=='file'){ ?>
                        if(document.getElementsByName("<?php echo $value->field; ?>")[0].value==""){
                            msg = "<?php echo $value->question; ?>"+' tidak boleh kosong';
                            status_data = false;
                        }else{

                            var size = document.getElementsByName("<?php echo $value->field; ?>")[0].files[0].size;
                            var type = document.getElementsByName("<?php echo $value->field; ?>")[0].files[0].type;  

                           if(size>500000){
                                msg = "Ukuran File Lebih dari 500 KB";
                                status_data = false;
                            }else if(type!='image/jpeg' && type!='image/png' && type!='application/pdf'){
                                msg = "Jenis file yang diizinkan (PDF,PNG,JPG)";
                                status_data = false;
                            }
                        } 
                <?php }else if($value->is_required==1 && $value->type!='checkbox' && $value->type!='radiobox'){ ?>
                        if(document.getElementsByName("<?php echo $value->field; ?>")[0].value==""){
                            msg = "<?php echo $value->question; ?>"+' tidak boleh kosong';
                            status_data = false;
                        }
                <?php }else if($value->is_required==1){ ?>

                    field_arr = document.getElementsByName("<?php echo $value->field; ?>[]")
                    msg = "<?php echo $value->question; ?>"+' tidak boleh kosong';
                    status_data = false;
                    for(no=0; no<field_arr.length;no++){
                        if(field_arr[no].checked==true){
                            status_data = true;
                            break;
                        }
                    }

                    if(status_data==false){
                        Swal.fire(
                          'Oopps!',
                          msg,
                          'error'
                        );
                        return false;
                    } 

                <?php } ?>

                <?php if($value->type!='checkbox' && $value->type!='radiobox'){ ?>
                    parameter.<?php echo $value->field; ?> = document.getElementsByName("<?php echo $value->field; ?>")[0].value
                <?php }else{ ?>

                    field_arr = document.getElementsByName("<?php echo $value->field; ?>[]")

                    var arr_data = [];
                    for(no=0; no<field_<?php echo $value->field; ?>.length;no++){
                        if(field_arr[no].checked==true){
                            arr_data.push(field_arr[no].value);
                        }
                    }
                    parameter.<?php echo $value->field; ?> = arr_data;

                <?php } ?>

            <?php } ?>
        <?php } ?>


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

    $('.datetime-picker').datetimepicker({
        locale: 'id',
        showClear: true,
        format: 'YYYY-MM-DD',
    });

</script>



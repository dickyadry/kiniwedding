
<!-- container -->
<style type="text/css">
    .warning-label{
        color: #FE0030; font-size: 12px; float: left; margin: 2px 0 10px 2px;
    }
</style>
<div class="container">
    <div class="register__box">
        <div class="login__wrap">
            <div class="login__title"><b>Daftar Sekarang</b></div>
            <form action="<?php echo site_url("register"); ?>" method="post" onsubmit="return validateForm()">
                <div class="login__header">
                    Sudah punya akun KiniWedding? <a href="<?php echo base_url(); ?>login" style="color: #ddd35d; font-weight: bold;">Masuk</a>
                </div>

                <div class="text-center" style="color: #FA6868">
                <?php echo isset($error)?$error:''; ?>
                </div>

                <div class="login__form">
                    <div class="form__group">
                        <input class="login__input" id="name" type="text" name="name" placeholder="Nama Lengkap" value="<?php echo set_value("name"); ?>" onkeyup="cekForm('name')">
                        <span class="warning-label"><?php echo form_error("name"); ?></span>
                    </div>
                    <div class="form__group">
                        <input class="login__input" id="username" type="text" name="username" placeholder="Username" value="<?php echo set_value("username"); ?>" onkeyup="cekForm('username')">
                        <span class="warning-label"><?php echo form_error("username"); ?></span>
                    </div>
                    <div class="form__group" id="group-password">
                        <input class="login__input password" id="password" type="password" name="password" placeholder="Password" value="" onkeyup="cekForm('password')">
                        <i onclick="show_password('group-password')" style="position: absolute; right: 10px; top:15px; color: #FFF;" class="fa fa-eye-slash"></i>
                        <span class="warning-label"><?php echo form_error("password"); ?></span>
                    </div>
                    <div class="form__group" id="group-re_password">
                        <input class="login__input re_password" id="confirm" type="password" name="confirm" placeholder="Re-type Password" value="" onkeyup="cekForm('confirm')">
                        <i onclick="show_password('group-re_password')"  style="position: absolute; right: 10px; top:15px; color: #FFF;" class="fa fa-eye-slash"></i>
                        <span class="warning-label"><?php echo form_error("confirm"); ?></span>
                    </div>
                    <div class="form__group">
                        <input class="login__input" id="email" type="text" name="email" placeholder="Email" value="<?php echo set_value("email"); ?>" onkeyup="cekForm('email')">
                        <span class="warning-label"><?php echo form_error("email"); ?></span>
                    </div>
                    <div class="form__group">
                        <input class="login__input" id="phone" type="text" name="phone" size="30" placeholder="No HP" value="<?php echo set_value("phone"); ?>" onkeyup="cekForm('phone')">
                        <span class="warning-label"></span>
                    </div>
                    <p class="product__termText" style="text-align: left;"><input type="checkbox" name="tos"> Saya telah membaca dan menyetujui <a href="<?php echo site_url("page/services"); ?>" target="_blank">Syarat & Ketentuan </a>KiniWedding</p>
                </div>
                <br>
                <div class="login__form">
                    <div class="form__group text-center">
                        <?php echo $widget;?>
                        <?php echo $script;?>
                    </div>
                    <br>
                </div>
                <div class="form__submit clearfix">
                    <div class="col-xs-12">
                        <div class="form__group">
                            <button class="button button__login" name="submit" type="submit" value="Daftar">Daftar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    function validateForm(){

        var status_data = true;
        var msg = '';

        var password = ($('#password').val());
        var re_password = ($('#confirm').val());

        var tos = (document.getElementsByName("tos")[0].checked);
        if ($("#name").val() == '') {

            msg = 'Silahkan isi nama lengkap';
            status_data = false;

        }else if($("#username").val() == ''){

            msg = 'Silahkan isi username';
            status_data = false;

        }else if($("#password").val() == ''){

            msg = 'Silahkan isi password';
            status_data = false;

        }else if($("#confirm").val() == ''){

            msg = 'Silahkan isi confirm password';
            status_data = false;

        }else if($("#email").val() == ''){

            msg = 'Silahkan isi email';
            status_data = false;

        }else if($("#phone").val() == ''){

            msg = 'Silahkan isi no. handphone';
            status_data = false;

        }else if(password.length<6){
            Swal({
              type: 'error',
              title: 'Oops...',
              text: "Password minimal 6 karakter",
            });
            return false;
        }else if(password!=re_password){
            Swal({
              type: 'error',
              title: 'Oops...',
              text: "Confirm password salah",
            });
            return false;
        }else if(tos==false){
            msg = 'Silahkan berikan tanda centang untuk menyetujui syarat dan ketentuan kami';
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

    function show_password(param) {

        if($('#'+param+' input').attr("type") == "text"){
            $('#'+param+' input').attr('type', 'password');
            $('#'+param+' i').addClass( "fa-eye-slash" );
            $('#'+param+' i').removeClass( "fa-eye" );
        }else if($('#'+param+' input').attr("type") == "password"){
            $('#'+param+' input').attr('type', 'text');
            $('#'+param+' i').removeClass( "fa-eye-slash" );
            $('#'+param+' i').addClass( "fa-eye" );
        }
    };
</script>
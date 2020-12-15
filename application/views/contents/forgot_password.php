<!-- container -->
<div class="container">
    <div class="register__box">
        <!-- forgot password -->
        <div class="login--full">
            <div class="login__wrap">
                <div class="login__title">Lupa Password Anda?</div>
                <form method="post" action="<?php echo site_url("forgot"); ?>">
                    <div class="login__header">
                        <p>Masukan email Anda, kami akan mengirimkan link untuk masuk ke akun Anda</p>
                    </div>

                    <div class="text-center" style="color: #FA6868">
                    <?php 
                        $message = $this->session->flashdata("error");
                        echo $message != "" ? $message : "";
                     ?>
                    </div>
                    <div class="text-center" style="color: #3cc900">
                     <?php 
                        $messages = $this->session->flashdata("message");
                        echo $messages != "" ? $messages : "";
                     ?>
                    </div>
                    <br>
                    <div class="login__form">
                        <div class="form__group">
                            <input class="login__input" type="text" placeholder="Email" name="email" size="30">
                            <span></span>
                        </div>
                    </div>
                    <div class="form__group text-center">
                        <?php echo $widget;?>
                        <?php echo $script;?>
                    </div>
                    <div class="form__submit clearfix">
                        <div class="col-xs-12">
                            <div class="form__group">
                                <button class="button button__login" type="submit" value="Kirim" name="submit">Kirim</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

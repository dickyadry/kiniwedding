<style type="text/css">
    .separator {
        display: flex;
        align-items: center;
        text-align: center;
    }
    .separator::before, .separator::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #FFF;
    }
    .separator::before {
        margin-right: .25em;
    }
    .separator::after {
        margin-left: .25em;
    }
</style>

<!-- dashboard menu -->
<div class="board__box board--hide" id="js-board-box"></div>  
<!-- container -->
<div class="container">
    <div class="register__box">
        <!-- login -->
        <div class="login--full">
            <div class="login__wrap">
                <div class="login__title">Masuk ke Akun Saya</div>

                <div class="text-center" style="color: #FA6868">
                    <?php 
                        $message = $this->session->flashdata("error");
                        echo $message != "" ? $message.'<br><br>' : "";
                    ?>
                </div>

                <form method="post" action="<?php echo site_url("login"); ?>">
                    <div class="login__form">
                        <div class="form__group">
                            <input class="login__input" type="text" placeholder="Gunakan username atau email anda" name="username">
                            <span></span>
                        </div>
                        <div class="form__group">
                            <input class="login__input" type="password" placeholder="Password anda" size="30" name="password">
                        </div>
                        <div class="form__group text-right">
                            <a href="<?php echo base_url(); ?>forgot" class="login__link">Lupa Password</a>
                        </div>
                    </div>
                    <div class="form__submit clearfix">
                        <div class="col-xs-12">
                            <div class="form__group">
                                <button class="button button__login" type="submit" value="Login" name="submit">Login</button>
                            </div>
                        </div>
                        <div class="col-xs-12" style="padding-bottom: 10px;">
                            <div class="separator">Atau</div>
                        </div>
                        <div class="col-xs-12" style="padding-bottom: 5px; display: flex; flex-direction: column; align-items: center;" >
                            <div id="gSignIn" style="text-align: center !important; margin: auto;"></div>
                        </div>
                        <div class="col-xs-12">
                            <div
                                class="fb-login-button"
                                data-max-rows="1"
                                data-width="340px"
                                data-size="large"
                                data-button-type="login_with"
                                data-scope="public_profile,email"
                                onlogin="checkLoginState();"
                            ></div>
                        </div>
                    </div>
                    <div class="login__footer">
                        Belum punya akun? <a href="<?php echo base_url(); ?>register">Daftar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- container -->
<div class="container">
    <div class="register__box">
        <!-- forgot password -->
        <div class="login--full">
            <div class="login__wrap">
                <div class="login__title">Ubah Password</div>
                <form method="post" action="<?php echo site_url("change-password/".$request); ?>">
                    <div class="login__header">
                        <p>Gunakan form dibawah ini untuk mengubah password anda.</p>
                    </div>

                    <div class="text-center" style="color:#e52d00">
                    <?php 
                        $message = $this->session->flashdata("error");
                        echo $message != "" ? $message : "";
                     ?>
                     <?php 
                        $messages = $this->session->flashdata("message");
                        echo $messages != "" ? $messages : "";
                     ?>
                    </div>
                    <br>
                    <div class="login__form">
                        <div class="form__group <?php echo form_error("newpassword")?'error':'';?>">
                            <input class="login__input" type="password" placeholder="New Password" name="newpassword" size="30">
                            <span style="font-weight: bold;"><?php echo form_error("newpassword"); ?></span>
                        </div>
                    </div>
                    <div class="login__form">
                        <div class="form__group <?php echo form_error("confirmpassword")?'error':'';?>">
                            <input class="login__input" type="password" placeholder="Confirm Password" name="confirmpassword" size="30">
                            <span style="font-weight: bold;"><?php echo form_error("confirmpassword"); ?></span>
                        </div>
                    </div>
                    <div class="form__submit clearfix">
                        <div class="col-xs-12">
                            <div class="form__group">
                                <button class="button button__login" type="submit" value="Ubah" name="submit">Ubah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
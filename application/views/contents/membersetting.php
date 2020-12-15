<div class="row col-offset-fluid clearfix js-sticky-parent">
    <div class="col-xs-12 col-sm-3">
        <!-- dashboard menu -->
        <?php echo $member_menu; ?>
    </div>
    <div class="col-xs-12 col-sm-9">
        <div >
            <!-- edit profil -->
            <div class="profile__form">
                <form method="post" action="<?php echo site_url("member/setting"); ?>">
                    <div class="form__wrapper">
                        <div class="row col-offset-fluid clearfix">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <p style="font-size: 20px;"><b>Ubah Password</b></p>
                            </div>
                        </div>
                        <br>
                        <?php
                            if (!empty($this->session->flashdata("error"))) {
                        ?>
                        <div style="text-align: center;" class="<?php echo $this->session->flashdata("error")?'error':'';?>">
                            <span><?php echo $this->session->flashdata("error");; ?></span>
                        </div>
                        <?php
                            }
                            elseif (!empty($this->session->flashdata("message"))) {
                        ?>
                        <div style="text-align: center;" class="<?php echo $this->session->flashdata("message")?'success':'';?>">
                            <span><?php echo $this->session->flashdata("message");; ?></span>
                        </div>
                        <?php
                            }
                        ?>
                        <br>
                        <div class="row col-offset-fluid clearfix">
                            <div class="col-xs-12 col-sm-3 col-lg-3">
                                <div class="form__group form__attribute text-right">
                                    Old Password
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-lg-6">
                                <div class="form__group">
                                    <input class="form__input" name="oldpassword" type="password" placeholder="******" required>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="row col-offset-fluid clearfix">
                            <div class="col-xs-12 col-sm-3 col-lg-3">
                                <div class="form__group form__attribute text-right">
                                    New Password
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-lg-6">
                                <div class="form__group">
                                    <input onkeyup="check()" class="form__input" name="newpassword" id="password" type="password" placeholder="******" required>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="row col-offset-fluid clearfix">
                            <div class="col-xs-12 col-sm-3 col-lg-3">
                                <div class="form__group form__attribute text-right">
                                    Confirm Password
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-lg-6">
                                <div class="form__group">
                                    <input onkeyup="check()" class="form__input" id="retype" type="password" placeholder="******" required>
                                    <span id='message'></span>
                                </div>
                            </div>
                        </div>
                        <div class="row col-offset-fluid clearfix">
                            <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                                <div class="form__submit clearfix">
                                    <div class="col-xs-12">
                                        <div class="form__group">
                                            <button class="button button__login" name="submit" type="submit" value="Simpan">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var check = function() {
        var pass = document.getElementById('password');
        var re = document.getElementById('retype');
        if (pass.value == re.value && pass.value != '' && re.value != '') {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'match';
            if (pass.value.length >= 6 && re.value.length >= 6) {
                $('.button__tertiary').removeAttr("disabled","disabled");
            }
            else{
                $('.button__tertiary').attr("disabled","disabled");
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'match but you must insert 6 or more characters';
            }
        }
        else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not match';
            $('.button__tertiary').attr("disabled","disabled");
        }
    }
</script>
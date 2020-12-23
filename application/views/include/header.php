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

<?php $segment = $this->uri->segment(1); ?>
<?php $segment2 = $this->uri->segment(2); ?>
<header>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="logo">
                        <a href="<?php echo base_url(); ?>">
                            <img src="<?php echo ASSETS; ?>img/logo-with-text-putih" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                    <div class="responsive-menu d-lg-none"></div>
                    <div class="menu d-none d-lg-block">
                        <nav>
                            <ul id="menu">
                                <li <?php if($segment=="" || $segment=="home"){?> class="active" <?php } ?>>
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li <?php if($segment=="product" && $segment2==""){?> class="active" <?php } ?>>
                                    <a href="<?php echo base_url(); ?>product">Produk</a>
                                </li>
                                <li <?php if($segment=="page" && $segment2=="contact"){?> class="active" <?php } ?>>
                                    <a href="<?php echo base_url(); ?>page/contact">Kontak</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                    <div class="account">
                    <!--     <?php if(pending_ticket()>0){ ?>
                        <span class="badge___notif"><?php echo pending_ticket() ?></span>
                        <?php } ?> -->
                        
                        <span class="logo-not-text">
                            <i style="background: #FFF; border-radius:50px; padding: 8px 2px; text-align: center; margin-right: 5px;">
                                <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo ASSETS; ?>img/logo-only.png" alt="Logo Eventstack" width="25" style="margin-left:4px; margin-top: -3px;">
                            </a>
                            </i>
                        </span>

                        <?php if (empty($this->session->userdata("userpubliclog"))) { ?>
                            <?php if ($segment!='login') { ?>
                            <a href="#login" class="js-login">
                                <span>
                                    <i class="fa fa-sign-in"></i>
                                </span>
                            </a>
                            <?php } ?>
                        <?php }else{ ?>
                            <!-- <a href="<?php echo base_url(); ?>member/tiket" >
                                <span>
                                    <i class="fa fa-ticket"></i>
                                </span>
                            </a> -->
                            <a href="#user" class="js-board">
                                <span>
                                    <i class="far fa-user"></i>
                                </span>
                                <?php $name = explode(" ", $this->session->userdata("userpubliclog")['name']); echo 'Hai '.$name[0]; ?>
                            </a>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="search-signup" style="text-align: center;">
                            <form action="<?php echo base_url(); ?>event">
                                <div class="search-input-box">
                                    <select name="category">
                                        <option>All</option>
                                        <?php foreach ($category as $key => $value) { ?>
                                            <option <?php if(isset($_GET['category']) && $_GET['category']==$value->name){ ?>selected <?php } ?>><?php echo $value->name; ?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="text" name="q" value="<?php echo (isset($_GET['q']))?$_GET['q']:''; ?>">
                                    <button type="submit" value="Cari">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        <!-- <div class="signup">
                            <a href="#">BUAT EVENT</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- login -->
<?php if (empty($this->session->userdata("userpubliclog")) && $segment!='login') { ?>
<div class="login__box bg--primary-gradient login--hide" id="js-login-box">
    <div class="login__wrap">
        <div class="login__title">Masuk ke Akun Saya</div>
        <form method="POST" action="<?php echo site_url("login"); ?>">
            <div class="login__form">
                <div class="form__group">
                    <input class="login__input" type="text" placeholder="Gunakan username atau email anda" name="username">
                    <span></span>
                </div>
                <div class="form__group">
                    <input class="login__input" type="password" placeholder="Password" name="password">
                    <span></span>
                </div>
                <div class="form__group text-right">
                    <a href="<?php echo base_url(); ?>forgot" class="login__link">Lupa Password</a>
                </div>
            </div>
            <div class="form__submit clearfix">
                <div class="col-xs-12">
                    <div class="form__group">
                        <button class="button button__login" name="submit" type="submit" value="Login">Login</button>
                    </div>
                </div>
                <div class="col-xs-12" style="padding-bottom: 10px;">
                    <div class="separator">Atau</div>
                </div>
                <div style="text-align: center !important; align-items: center;">
                    <div class="col-xs-12 form__submit__item" style="padding-bottom: 5px;" >
                        <div id="gSignIn"></div>
                    </div>
                    <div class="col-xs-12 form__submit__item">
                        <div class="fb-login-button" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false" data-width="250px" onlogin="checkLoginState();"></div>
                    </div>
                </div>
            </div>
            <div class="login__footer">
                Belum punya akun? <a href="<?php echo base_url(); ?>register">Daftar</a>
            </div>
        </form>
    </div>
</div>
<?php } ?>
<!-- dashboard menu -->
<div class="board__box bg--primary-gradient board--hide" id="js-board-box">
    <ul class="board__wrap" style="list-style-type: none;">
        <li class="board__item">
            <a href="<?php echo base_url(); ?>member/dashboard" class="board__link">Dahsboard</a>
        </li>
        <li class="board__item">
            <a href="<?php echo base_url(); ?>member/pesanan-saya/aktif" class="board__link">Pesanan Saya</a>
        </li>
        <li class="board__item">
            <a href="<?php echo base_url(); ?>member/profile" class="board__link">Profil</a>
        </li>
        <li class="board__item">
            <a href="<?php echo base_url(); ?>member/ubah-password" class="board__link">Ubah Password</a>
        </li>
        <li class="board__item">
            <a href="<?php echo base_url(); ?>logout" class="board__link">Logout</a>
        </li>
    </ul>
</div>  <!-- hero -->

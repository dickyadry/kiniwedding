<footer class="footer bg--black-gradient">
    <div class="container">
        <div class="row col-offset-fluid clearfix">
            <div class="col-xs-12 col-sm-4">
                <div class="footer__subtitle"><a href="<?php echo base_url('page/about') ?>" class="footer__link">About Us</a></div>
                <div class="footer__subtitle"><a href="<?php echo base_url('page/contact') ?>" class="footer__link">Contact Us</a></div>
                <div class="footer__subtitle"><a href="<?php echo base_url('page/faq') ?>" class="footer__link">FAQ</a></div>
                <div class="footer__subtitle"><a href="<?php echo base_url('panduan') ?>" class="footer__link">Panduan</a></div>
            <!--     <p class="footer__paragraph">Gedung KOMPAS GRAMEDIA </br>
                    Jl. Panjang 8A, Kebon Jeruk</br>
                    Jakarta Barat, 11530, Indonesia</br>
                    Kantor (021)5330150/70</p> -->
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="footer__subtitle">Kategori Produk</div>
                <ul class="footer__menu footer__menu--list clearfix">
                    <?php
                        foreach ($category as $key => $value) {
                            $link_menu = str_replace(" ", "-", $value->name);
                    ?>
                    <li class="footer__item">
                        <a href="<?php echo base_url() . "event?category=" . $link_menu; ?>" class="footer__link"><?php echo $value->name; ?></a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="footer__subtitle">Metode Pembayaran</div>
                <ul class="paylist clearfix">
                    <li class="paylist__item">
                        <div class="paylist__img">
                            <img src="<?php echo ASSETS; ?>img/icon-bca.png" alt="">
                        </div>
                    </li>
                    <li class="paylist__item">
                        <div class="paylist__img">
                            <img src="<?php echo ASSETS; ?>img/icon-mandiri.png" alt="">
                        </div>
                    </li>
                    <li class="paylist__item">
                        <div class="paylist__img">
                            <img src="<?php echo ASSETS; ?>img/icon-gopay.png" alt="">
                        </div>
                    </li>
                    <li class="paylist__item">
                        <div class="paylist__img">
                            <img src="<?php echo ASSETS; ?>img/icon-visa.png" alt="">
                        </div>
                    </li>
                    <li class="paylist__item">
                        <div class="paylist__img">
                            <img src="<?php echo ASSETS; ?>img/icon-mastercard.png" alt="">
                        </div>
                    </li>
                    <li class="paylist__item">
                        <div class="paylist__img">
                            <img src="<?php echo ASSETS; ?>img/icon-atm.png" alt="">
                        </div>
                    </li>
                </ul>
                <div class="footer__subtitle">Ikuti Kami</div>
                <div class="footer__social social__footer">
                    <div class="social__item">
                        <a href="https://facebook.com/eventstack.id" target="_blank" class="social__link">
                            <span class="icon icon-facebook"></span>
                        </a>
                    </div>
                    <div class="social__item">
                        <a href="https://twitter.com/eventstackid" target="_blank" class="social__link">
                            <span class="icon icon-twitter"></span>
                        </a>
                    </div>
                    <div class="social__item">
                        <a href="https://www.instagram.com/eventstack.id" target="_blank" class="social__link">
                            <span class="icon icon-instagram"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 text-center">
                <div class="footer__copyright">
                    &copy; <?php echo date("Y") ?> Event Stack All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</footer> 

<?php echo $page_js; ?>
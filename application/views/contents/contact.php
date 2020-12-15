<br><br>
<div>
    <div class="content text-center">
        <div class="sb-content-box">
            <h2 class="title animated">CONTACT</h2>
        </div>
    </div>
</div>

<!-- contact-area-start -->
<div class="contact-area">
<!--     <div class="map-area">
        <div class="gmap">
            <div id="googleMap"></div>
        </div>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="contact-us">
                    <h4 class="contact-title">Kontak Kami</h4>
                    <div class="cf-msg"></div>
                    <form action="<?php echo base_url(); ?>contact" method="post" id="cf">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="cf-input-box">
                                    <input type="text" placeholder="Name" id="fname" name="name" class="form__input" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="cf-input-box">
                                    <input type="text" placeholder="Email" id="email" name="email" class="form__input"  required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="cf-input-box">
                                    <input type="text" placeholder="Subject" id="email" name="subject" class="form__input"  required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="cf-input-box">
                                    <textarea class="contact-textarea form__input" placeholder="Message" id="msg" name="msg" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="cf-input-box">
                                    <button id="submit" class="cont-submit btn-contact" name="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                <div class="contact-info">
                    <h4 class="contact-title">&nbsp;</h4>
                    <ul class="info">
                        <li>Mobile: 0898-3024-016</li>
                        <!-- <li>Email Address: admin@eventstack.id</li> -->
                        <li>Gmail: eventstack215@gmail.com</li>
                        <li>Website: www.eventstack.id</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-area-end -->

<!-- google-map-script -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAH5RWCDq3WYxQy9XSPDrreRX-CY8rxJcY&callback=initMap" async
    defer></script>
<script>
    var user_lat, user_lng;
    var map;

    function initMap() {
        map = new google.maps.Map(document.getElementById('googleMap'), {
            center: {
                lat: 23.828058,
                lng: 90.371041
            },
            zoom: 14,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: {
                lat: 23.828058,
                lng: 90.371041
            },
            map: map,
            title: 'Hello World!'
        });
    }
</script> -->
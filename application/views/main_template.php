<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Google Tag Manager -->
<!--     <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MDT222X');</script> -->
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="kiniwedding, Undangan, Undangan Webiste, Undangan Web, Undangan Modern, Undangan Kekinian, Webiste, Undangan online">
    <meta name="keywords" content="kiniwedding, Undangan, Undangan Webiste, Undangan Web, Undangan Modern, Undangan Kekinian, Webiste, Undangan online">
    <meta name="author" content="kiniwedding.com">
    <meta name="google-signin-client_id" content="361252480770-hh4a48rho35utt3fa8imn0g5muadqme6.apps.googleusercontent.com"> <!-- PROD -->

    <?php if(isset($detail)){ ?>
      <?php if($type=="detail"){ ?>

    <meta name="thumbnailUrl" content="<?php echo ASSETS . "img/logo-only-hitam.png";?>" itemprop="thumbnailUrl" />
    <meta content="http//www.kiniwedding.com/" itemprop="url" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#71C2EA">
    <meta name="apple-mobile-web-app-title" content="kiniwedding">

    <link rel="apple-touch-icon" href="<?php echo str_replace("medium", "small", $detail->cover); ?>" sizes="152x152">
    <meta name="msapplication-TitleImage" content="<?php echo str_replace("medium", "small", $detail->cover); ?>">
    <meta name="msapplication-TitleColor" content="#000">
    <meta name="theme-color" content="#71C2EA">
    <link rel="amphtml" href="<?php echo base_url(); ?>event/<?php echo $detail->code; ?>/<?php echo $detail->slug; ?>">
    <meta name="adx:sections" content="read" /> 

    <meta property="og:type" content="event" />
    <meta property="fb:app_id" content="597752600925275" />
    <meta property="event:start_time" content="<?php echo date('Y-m-d',strtotime($detail->start_date)).'T'.date('H:i+07:00',strtotime($detail->start_date)); ?>" />
    <meta property="og:site_name" content="kiniwedding" />
    <meta name="ROBOTS" content="NOODP, NOYDIR" />
    <meta property="og:title" content="<?php echo $detail->title; ?>" />
    <meta property="og:url" content="<?php echo base_url(); ?>event/<?php echo $detail->code; ?>/<?php echo $detail->slug; ?>" />
    <meta property="og:image" content="<?php echo $detail->cover; ?>" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <meta property="og:type" content="webminar" />
    <meta property="og:description" content="<?php echo strip_tags($detail->description); ?>" />

    <meta itemprop="image" content="<?php echo $detail->cover; ?>" />
    <meta name="twitter:image:src" content="<?php echo $detail->cover; ?>" />
    <meta itemprop="dateModified" content="<?php echo date('Y-m-d H:i:s'); ?>" />
    <meta itemprop="datePublished" content="<?php echo date('Y-m-d H:i:s'); ?>" />
    <meta itemprop="articleSection" content="Webinar" />

    <meta name="twitter:site" content="@kiniwedding.com" />
    <meta name="twitter:creator" content="@kiniwedding.com" />
    <meta name="twitter:title" content="<?php echo $detail->title; ?>" />
    <meta name="twitter:description" content="<?php echo strip_tags($detail->description); ?>" />
    <meta name="twitter:card" content="summary_large_image" />

    <?php }} ?>

    <title><?php echo $title_page; ?></title>

    <link rel="shortcut icon" href="<?php echo ASSETS . "img/logo-only-hitam.png";?>">
    <link rel="stylesheet" href="<?php echo ASSETS . "css/es_iconpack.min.css?v=4";?>">
    <link rel="stylesheet" href="<?php echo ASSETS . "css/es_style.min.css?v=11";?>">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:500,700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo ASSETS . "css/additional.min.css";?>">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script src="<?php echo ASSETS; ?>node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- <link rel="stylesheet" href="<?php echo ASSETS; ?>css/bootstrap.min.css">  -->

    <script src="<?php echo ASSETS; ?>js/jquery.min.js"></script>

    <link href="<?php echo ASSETS; ?>css/fullcalendar.min.css" rel="stylesheet" />
    <link href="<?php echo ASSETS; ?>css/datepicker.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/animate.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/plyr.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/slicknav.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/style.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/responsive.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>event-stack/css/cropper.min.css">

    <link href="<?php echo base_url('assets_member/'); ?>css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets_member/'); ?>css/app.css" rel="stylesheet" type="text/css">

    <style type="text/css">
    .full-loader{
      position: fixed; 
      z-index:999999999999; 
      background:rgba(255,255,255,0.8); 
      display: flex; 
      flex-direction: row; 
      justify-content: center; 
      align-items: center; 
      width: 100%; 
      height: 100%;
    }
    .hidden{
      display: none;
    }
  </style>

  <script data-ad-client="ca-pub-9219118163808816" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
<!--     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDT222X"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->
    <!-- TOP MENU START -->
    <!-- header -->

    <div class="full-loader hidden">
      <div class="loader" style="margin: auto;"></div> 
    </div>
    
      <?php echo $header; ?>

    <?php if (empty($this->session->userdata("userpubliclog"))){ ?>

      
    <div id="g_id_onload"
        data-client_id="361252480770-hh4a48rho35utt3fa8imn0g5muadqme6.apps.googleusercontent.com"
        data-login_uri="<?php echo base_url("login-using-google"); ?>"
        data-provider="google"
        data-scope="public_profile,email,openid" 
        data-cancel_on_tap_outside="false" 
        data-continue="<?php echo current_url(); ?>"
     >
    </div>
    <?php } ?>
    <!-- TOP MENU END -->

    <!-- CONTENTS START -->
    <!-- container -->
    <?php if (empty($ismember)) { ?>
        <?php echo $content; ?>
    <?php } else{ ?>
      <div class="hero__wave">
      </div>
      <div>
        <div class="container">
          <?php echo $content; ?>
        </div>
      </div>
    <?php } ?>
    <!-- CONTENTS END -->
    
    <!-- FOOTER START -->
    <!-- footer -->

    <?php echo $footer; ?>
    

    <?php if($this->session->flashdata('error')){ ?>
    <script language='JavaScript'>
        Swal({
          type: 'error',
          title: 'Oops...',
          text: "<?php echo $this->session->flashdata('error'); ?>",
        });
    </script>
    <?php }else if($this->session->flashdata('success')){ ?>
    <script language='JavaScript'>
        Swal({
          type: 'success',
          title: 'Success',
          text: "<?php echo $this->session->flashdata('success'); ?>",
        });
    </script>
    <?php } ?>


    <script src="<?php echo ASSETS; ?>js/modernizr.custom.js" async></script>
    <script defer src="<?php echo ASSETS; ?>js/jquery.magnific-popup.min.js"></script>
    <script defer src="<?php echo ASSETS; ?>js/jquery.sticky-kit.min.js"></script>
    <script defer src="<?php echo ASSETS; ?>js/slick.min.js"></script>
    <script defer src="<?php echo ASSETS; ?>js/picturefill.min.js"></script>
    
    <script src="<?php echo ASSETS . "js/main.js?v=1";?>"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->

    <!-- <script src="<?php echo ASSETS; ?>event-stack/js/jquery-3.2.0.min.js"></script> -->
    <script src="<?php echo ASSETS; ?>event-stack/js/jquery-ui.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/owl.carousel.min.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/jquery.counterup.min.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/countdown.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/parallax.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/amplitude.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/plyr.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/jquery.slicknav.min.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/jquery.scrollUp.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/jquery.mixitup.min.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/popper.min.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/bootstrap.min.js"></script>
    <script src="<?php echo ASSETS; ?>event-stack/js/theme.js"></script>

    <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>


    <script>
      // Render Google Sign-in button
      function renderButton() {
          gapi.signin2.render('gSignIn', {
              'scope': 'profile email',
              'width': 250,
              'height': 40,
              'longtitle': true,
              'theme': 'dark',
              'onsuccess': onSuccess,
              'onfailure': onFailure
          });
      }

      // Sign-in success callback
      function onSuccess(googleUser) {
          // Get the Google profile data (basic)
          //var profile = googleUser.getBasicProfile();
          
          // Retrieve the Google account data
          gapi.client.load('oauth2', 'v2', function () {
              var request = gapi.client.oauth2.userinfo.get({
                  'userId': 'me'
              });
              request.execute(function (resp) {
                // signOut();
                gapi.auth2.getAuthInstance().signOut();
                gapi.auth2.getAuthInstance().disconnect();
                saveUserData(resp);
              });
          });
      }

      function saveUserData(userData){

        $.ajax({
        type: "POST",
            url: '<?php echo base_url(); ?>login-with-google',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data:JSON.stringify(userData),
            success: function(result){

                if(result.status=='error'){
                    Swal({
                      type: 'error',
                      title: 'Oops...',
                      text: result.msg,
                    });
                    return false;
                }else{
                    window.location.href = "<?php echo base_url(); ?>continue";
                }
            }
        });

      }

      // Sign-in failure callback
      function onFailure(error) {
          Swal({
            type: 'error',
            title: 'Oops...',
            text: "Please Try Again Later!",
          });
      }

      // Sign out the user
      function signOut() {
          var auth2 = gapi.auth2.getAuthInstance();
          auth2.signOut().then(function () {
            document.getElementsByClassName("userContent")[0].innerHTML = '';
              document.getElementsByClassName("userContent")[0].style.display = "none";
              document.getElementById("gSignIn").style.display = "block";
          });
          
          auth2.disconnect();
      }
      window.onbeforeunload = function(e){
        if(gapi.auth2.getAuthInstance()!=null){
          gapi.auth2.getAuthInstance().signOut();
        }
      };
    </script>

    <script>
      window.fbAsyncInit = function() {
        // FB JavaScript SDK configuration and setup
        FB.init({
          // appId      : '978645215924977', // FB App ID DEV
          appId      : '597752600925275', // FB App ID PROD
          cookie     : true,  // enable cookies to allow the server to access the session
          xfbml      : true,  // parse social plugins on this page
          version    : 'v3.2' // use graph api version 2.8
        });
      };

      // Load the JavaScript SDK asynchronously
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/id_ID/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      function checkLoginState() {
          FB.getLoginStatus(function (response) {
              statusChangeCallback(response);
          });
      };

      function statusChangeCallback(response, loggedInCallback) {
          if (response.status === 'connected') {
              console.log('connected!');
              getFbUserData();
          }
          else {
              console.log('not connected');
          }
      }

      // Fetch the user profile data from facebook
      function getFbUserData(){
        FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
        function (resp) {
          $.ajax({
          type: "POST",
              url: '<?php echo base_url(); ?>login-with-facebook',
              contentType: "application/json; charset=utf-8",
              dataType: "json",
              data:JSON.stringify(resp),
              success: function(result){

                  if(result.status=='error'){
                      Swal({
                        type: 'error',
                        title: 'Oops...',
                        text: result.msg,
                      });
                      return false;
                  }else{
                      window.location.href = "<?php echo base_url(); ?>continue";
                  }
              }
          });
        });
      }

      // Logout from facebook
      function fbLogout() {
        FB.logout(function() {
            document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
            document.getElementById('fbLink').innerHTML = '<img src="images/fb-login-btn.png"/>';
            document.getElementById('userData').innerHTML = '';
            document.getElementById('status').innerHTML = '<p>You have successfully logout from Facebook.</p>';
        });
      }
    </script>

  </body>
</html>


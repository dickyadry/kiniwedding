<script type="text/javascript">

jQuery(window).on('load', function() {
    jQuery("#status").fadeOut();
    jQuery("#preloader").delay(350).fadeOut("slow");
});

//////////////////////////////////////////////////////////
///////////////// 4. code for Background Slider /////////
////////////////////////////////////////////////////////


$(document).on('ready', function() { 
  
    //pretty photo activator
    $("a[data-gal^='prettyPhoto']").prettyPhoto();    

    // var i =0; 
    // var images = [
    //     // add your image url here
    //     '../../assets/K003/images/slider/slide-1.jpg',
    //     '../../assets/K003/images/slider/slide-2.jpg',
    //     '../../assets/K003/images/slider/slide-3.jpg',
    // ];

    var i =0; 
    var images = [];
    <?php foreach ($slider as $key => $value) { ?>
        images.push("<?php echo str_replace('thumbs/', '', $value->image); ?>");
    <?php } ?>

    // grabing the container of slider
    var image = $('#slider');
    //Change image at regular intervals
    setInterval(function(){   
        image.fadeOut(500, function () {
            image.css('background-image', 'url(' + images [i++] +')');
            image.fadeIn(500);
        });
        if(i == images.length)
        i = 0;
    }, 6000);   

});

function buku_tamu() {

    var param = {
        'nama':$('#nama').val(),
        'status':$('#status').val(),
        'pesan':$('#pesan').val(),
    };

    if($('#nama').val()=="" || $('#nama').val()==" "){
        Swal.fire(
          'Oopps!',
          'Nama harus diisi',
          'error'
        );
        return false;
    }else if($('#status').val()=="" || $('#status').val()==" "){
        Swal.fire(
          'Oopps!',
          'Status harus diisi',
          'error'
        );
        return false;
    }else if($('#pesan').val()=="" || $('#pesan').val()==" "){

        Swal.fire(
          'Oopps!',
          'Pesan arus diisi',
          'error'
        );
        return false;
    }

    $.ajax({
        type: "POST",
        url: '<?php echo base_url(); ?>inv/buku-tamu/<?php echo encrypt_decrypt('encrypt',$sales_order_id); ?>',
        data: JSON.stringify(param),
        contentType: "application/json",
        dataType: "json",
        success: function(result){
            
            $('#nama').val('')
            $('#status').val('')
            $('#pesan').val('')
            
            if(result.status == 'success'){ 

                Swal.fire(
                  'Success',
                  'Data Berhasil disimpan',
                  'success'
                );
                return false; 

            }else{ 

                Swal.fire(
                  'Oopps!',
                  'Gagal Menyimpan Data',
                  'error'
                );
                return false;
            } 

        }
    }); 
}

    var x = document.getElementById("myAudio");
    var audio = 1;
    var xAudio = 1;

    function playAudio() {
        x.play();
        audio = 1
    }

    function togleAudio() {
        if (audio == 1) {
            x.pause()
            $(".play").show();
            $(".pause").hide();
            audio = 2
        } else {
            x.play()
            $(".pause").show();
            $(".play").hide();
            audio = 1
        }

    }

    $(document).ready(function() {
        $("#over-lay").click(function() {
            $("#over-lay").fadeOut(650);
             $("html, body").delay(2000).animate({scrollTop: parseInt($('.finish').offset().top)+1000 }, 400000);
        });
    });

    function goTo(param) {
        $("html,body").animate({
            scrollTop: parseInt($('.'+param).offset().top)
        }, 700);
        return false;
    }

    function stopScrolling(){
        $('html, body').stop();
        $('html, body').animate({scrollTop: 0}, 1000);
        $('.stop-scrolling').fadeOut("slow")
    }

    function testimoni_carousel() {
        var owl = $(".testimoni-carousel");
        owl.owlCarousel({
            loop: true,
            navigation: false,
            items: 2,
            smartSpeed: 1000,
            dots: false,
            autoplay: true,
            autoplayHoverPause: true,
            stagePadding: 40,
            margin:10,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                760: {
                    items: 2
                },
                992: {
                    items: 2
                },
            }
        });
    }
    testimoni_carousel();

    /*------------------------------------------
        = BACK TO TOP BTN SETTING
    -------------------------------------------*/
    $("body").append("<a href='#' class='back-to-top'><i class='ti-arrow-up'></i></a>");

    function toggleBackToTopBtn() {
        var amountScrolled = 1000;
        if ($(window).scrollTop() > amountScrolled) {
            $("a.back-to-top").fadeIn("slow");
        } else {
            $("a.back-to-top").fadeOut("slow");
        }
    }

    $(".back-to-top").on("click", function() {
        $("html,body").animate({
            scrollTop: 0
        }, 700);
        return false;
    })

    /*==========================================================================
        WHEN WINDOW SCROLL
    ==========================================================================*/
    $(window).on("scroll", function() {

        //     stickyMenu( $('.site-header .navigation'), "sticky-on" );
        // }

        toggleBackToTopBtn();
    });

</script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>crop/js/cropper.js"></script>

<script>

    function validateForm(){

        var status_data = true;
        var msg = '';

        if ($("#organization").val() == '') {

            $("#group-organization").addClass("has-warning has-feedback");
            $("#alert-organization").removeClass( "hidden" );
            msg = 'Silahkan isi nama penyelenggara';
            status_data = false;

        }else if($("#name").val() == ''){

            $("#group-name").addClass("has-warning has-feedback");
            $("#alert-name").removeClass( "hidden" );
            msg = 'Silahkan isi nama lengkap';
            status_data = false;

        }else if($("#phone").val() == ''){

            $("#group-phone").addClass("has-warning has-feedback");
            $("#alert-phone").removeClass( "hidden" );
            msg = 'Silahkan isi nomor handphone';
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


    function cekForm(param){

        if ($("#"+param).val() == '') {

            $("#group-"+param).addClass("has-warning has-feedback");
            $("#alert-"+param).removeClass( "hidden" );
            return false;

        }else{

            $("#group-"+param).removeClass("has-warning has-feedback");
            $("#alert-"+param).addClass( "hidden" );

        }

    }

    //CROP BANNER
    function uploadCropper(input){

        var reader;
        var imageFile = input.files[0];

        if (imageFile != null) {
            if (imageFile.size > 2000000) {
                Swal.fire(
                  'Oopps!',
                  'File Size More than 2 MB',
                  'error'
                )
                $('#gambar').removeAttr('src');
                $('#gambar').hide();
                $('#cover').val('');
            }else{

                var url = URL.createObjectURL(imageFile);
                var img = $('<img src="' + url + '">');
                $('.avatar-wrapper').empty().html(img);
                img.cropper({
                  aspectRatio: 15 / 5,
                  dragMode: 'none',
                  cropBoxMovable: true,
                  cropBoxResizable: true,
                  crop: function (e) {
                    var json = [
                          '{"x":' + e.x,
                          '"y":' + e.y,
                          '"height":' + e.height,
                          '"width":' + e.width,
                          '"rotate":' + e.rotate + '}'
                        ].join();

                    $('.avatar-data').val(json);
                  }
                });
            }
        }
    }

    function submitCrop(){

        $("#loader-banner").removeClass( "hidden" );
        $("#gambar").addClass( "hidden" );

        var files = $("#cover_file").prop('files')[0];
        var cropping = $('.avatar-data').val();
        var form_data = new FormData();                  
        form_data.append('file', files);
        form_data.append('avatar-data', cropping);

        $.ajax({ 
            url: "<?php echo base_url(); ?>member/upload-banner", 
            type: 'post', 
            data: form_data, 
            dataType: 'json',
            type: 'POST',
            contentType: false, 
            processData: false, 
            success: function(response){
                if(response.status == 'success'){ 

                  $('#gambar').attr('src',response.thumbPath);
                  $('#gambar').show();
                  $('#cover').val(response.thumbPath);

                  $("#loader-banner").addClass( "hidden" );
                  setTimeout(() => {  $("#gambar").removeClass( "hidden" ); }, 200);

                } 
                else{ 
                    Swal.fire(
                      'Oopps!',
                      'ile not uploaded',
                      'error'
                    )
                } 
            }, 
        }); 
    }

    //CROP ICON
    function uploadIconCropper(input){

        var reader;
        var imageFile = input.files[0];

        if (imageFile != null) {
            if (imageFile.size > 500000) {
                Swal.fire(
                  'Oopps!',
                  'File Size More than 500 KB',
                  'error'
                )
                $('#gambar_icon').removeAttr('src');
                $('#gambar_icon').hide();
                $('#icon').val('');
            }
            else{
                var url = URL.createObjectURL(imageFile);
                var img = $('<img src="' + url + '">');
                $('.avatar-wrapper-icon').empty().html(img);
                img.cropper({
                  aspectRatio: 16 / 16,
                  dragMode: 'none',
                  cropBoxMovable: true,
                  cropBoxResizable: true,
                  crop: function (e) {
                    var json = [
                          '{"x":' + e.x,
                          '"y":' + e.y,
                          '"height":' + e.height,
                          '"width":' + e.width,
                          '"rotate":' + e.rotate + '}'
                        ].join();

                    $('.avatar-data-icon').val(json);
                  }
                });
            }
        }
    }

    function submitIconCrop(){

        $("#loader-icon").removeClass( "hidden" );
        $("#gambar_icon").addClass( "hidden" );

        var files = $("#icon_file").prop('files')[0];
        var cropping = $('.avatar-data-icon').val();
        var form_data = new FormData();                  
        form_data.append('file', files);
        form_data.append('avatar-data-icon', cropping);

        $.ajax({ 
            url: "<?php echo base_url(); ?>member/upload-icon", 
            type: 'post', 
            data: form_data, 
            dataType: 'json',
            type: 'POST',
            contentType: false, 
            processData: false, 
            success: function(response){
                if(response.status == 'success'){ 

                  $('#gambar_icon').attr('src',response.thumbPath);
                  $('#gambar_icon').show();
                  $('#icon').val(response.thumbPath);

                  $("#loader-icon").addClass( "hidden" );
                  setTimeout(() => {  $("#gambar_icon").removeClass( "hidden" ); }, 200);

                } 
                else{ 
                    Swal.fire(
                      'Oopps!',
                      'ile not uploaded',
                      'error'
                    )
                } 
            }, 
        }); 
    }


</script>
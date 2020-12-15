<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>crop/js/cropper.js"></script>

<script>

    function validateForm(){

        var status_data = true;
        var msg = '';

        if ($("#old_password").val() == '') {

            $("#group-old_password").addClass("has-warning has-feedback");
            $("#alert-old_password").removeClass( "hidden" );
            msg = 'Silahkan isi password lama anda';
            status_data = false;

        }else if($("#password").val() == ''){

            $("#group-password").addClass("has-warning has-feedback");
            $("#alert-password").removeClass( "hidden" );
            msg = 'Silahkan masukan password baru anda';
            status_data = false;

        }else if($("#re_password").val() == ''){

            $("#group-re_password").addClass("has-warning has-feedback");
            $("#alert-re_password").removeClass( "hidden" );
            msg = 'Ketik ulang password tidak boleh kosong';
            status_data = false;

        }else if($("#password").val().length<6){

            $("#group-password").addClass("has-warning has-feedback");
            $("#alert-password").removeClass( "hidden" );
            msg = 'Password mininal 6 karakter';
            status_data = false;

        }else if($("#password").val()!=$("#re_password").val()){

            $("#group-re_password").addClass("has-warning has-feedback");
            $("#alert-re_password").removeClass( "hidden" );

            msg = 'Ketik ulang password tidak sama';
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

    function show_password(param) {
        if($('#'+param+' input').attr("type") == "text"){
            $('#'+param+' input').attr('type', 'password');
            $('#'+param+' i').addClass( "icon-eye-blocked" );
            $('#'+param+' i').removeClass( "icon-eye" );
        }else if($('#'+param+' input').attr("type") == "password"){
            $('#'+param+' input').attr('type', 'text');
            $('#'+param+' i').removeClass( "icon-eye-blocked" );
            $('#'+param+' i').addClass( "icon-eye" );
        }
    };

    function submitIconCrop(){
        var files = $("#icon_file").prop('files')[0];
        var cropping = $('.avatar-data-icon').val();
        var form_data = new FormData();                  
        form_data.append('file', files);
        form_data.append('avatar-data-icon', cropping);

        $.ajax({ 
            url: "http://localhost/dicky/git/eventstack-cms/member/upload-icon", 
            type: 'post', 
            data: form_data, 
            dataType: 'json',
            type: 'POST',
            contentType: false, 
            processData: false, 
            success: function(response){
                if(response.state == 200){ 

                    var source_images = "<?php echo ASSETS_IMAGES; ?>icon/_thumb"

                   $('#gambar_icon').attr('src', source_images+'/'+response.thumbPath);
                   $('#gambar_icon').show();
                   $('#icon').val(response.thumbPath);
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
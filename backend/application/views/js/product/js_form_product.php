<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/uploader/plupload.queue.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/wysihtml5/toolbar.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/datatables.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/charts/sparkline.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/switch.min.js"></script>
        
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/moment.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/application.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>crop/js/cropper.js"></script>

<script src="<?php echo base_url('assets/'); ?>js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap-datetimepicker.min.css">

<script>

    function validateForm(){

        if ($("#code").val() == '' || $("#code").val() == ' ') {

            $("#group-code").addClass("has-warning has-feedback");
            $("#alert-code").removeClass( "hidden" );
            msg = 'Silahkan isi kode';
            status_data = false;

        }else if($("#name").val() == '' || $("#name").val() == ' '){

            $("#group-name").addClass("has-warning has-feedback");
            $("#alert-name").removeClass( "hidden" );
            msg = 'Silahkan isi nama';
            status_data = false;

        }else if($("#price").val() == '' || $("#price").val() == ' '){

            $("#group-price").addClass("has-warning has-feedback");
            $("#alert-price").removeClass( "hidden" );
            msg = 'Silahkan isi harga';
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

    //CROP POSTER
    function uploadCropper(input){
        var reader;
        var imageFile = input.files[0];

        if (imageFile != null) {
            if (imageFile.size > 10000000) {
                Swal.fire(
                  'Oopps!',
                  'Ukuran File Lebih dari 1 MB',
                  'error'
                )
                $('#gambar').removeAttr('src');
                $('#gambar').hide();
                $('#cover').val('');
            }
            else{
                var url = URL.createObjectURL(imageFile);
                var img = $('<img src="' + url + '">');
                $('.avatar-wrapper').empty().html(img);
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

                    $('.avatar-data').val(json);
                  }
                });
            }
        }
    }

    function submitCrop(){

        $("#loader-poster").removeClass( "hidden" );
        $("#gambar").addClass( "hidden" );

        var files = $("#cover_file").prop('files')[0];
        var cropping = $('.avatar-data').val();
        var form_data = new FormData();                  
        form_data.append('file', files);
        form_data.append('avatar-data', cropping);

        $.ajax({ 
            url: "<?php echo base_url(); ?>product/upload-cover", 
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

                   $("#loader-poster").addClass( "hidden" );
                    setTimeout(() => {  $("#gambar").removeClass( "hidden" ); }, 500);

                } 
                else{ 
                    Swal.fire(
                      'Oopps!',
                      'File not uploaded',
                      'error'
                    )
                } 
            }, 
        }); 
    }

</script>
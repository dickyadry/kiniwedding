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

        if ($("#type").val() == '' || $("#type").val() == ' ') {

            $("#group-type").addClass("has-warning has-feedback");
            $("#alert-type").removeClass( "hidden" );
            msg = 'Silahkan isi tipe';
            status_data = false;

        }else if($("#width").val() == '' || $("#width").val() == ' '){

            $("#group-width").addClass("has-warning has-feedback");
            $("#alert-width").removeClass( "hidden" );
            msg = 'Silahkan isi lebar gambar';
            status_data = false;

        }else if($("#height").val() == '' || $("#height").val() == ' '){

            $("#group-height").addClass("has-warning has-feedback");
            $("#alert-height").removeClass( "hidden" );
            msg = 'Silahkan isi panjnag gambar';
            status_data = false;

        }else if($("#order").val() == '' || $("#order").val() == ' '){

            $("#group-order").addClass("has-warning has-feedback");
            $("#alert-order").removeClass( "hidden" );
            msg = 'Silahkan isi urutan gambar';
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

        var width =($('#width').val());
        var height =($('#height').val());

        if(width==0 || width=="" || width==" "){
          Swal.fire(
              'Oopps!',
              'Silahkan masukan lebar gambar',
              'error'
            );
            return false;
        }else if(height==0 || height=="" || height==" "){
          Swal.fire(
              'Oopps!',
              'Silahkan masukan panjang gambar',
              'error'
            );
            return false;
        }

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
                  aspectRatio: parseInt(width) / parseInt(height),
                  dragMode: 'none',
                  cropBoxMovable: true,
                  cropBoxResizable: true,
                  crop: function (e) {
                    var json = [
                          '{"x":' + e.x,
                          '"y":' + e.y,
                          '"height":' + e.height,
                          '"form_height":' + height,
                          '"width":' + e.width,
                          '"form_width":' + width,
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
        var type =($('#type').val());

        var files = $("#cover_file").prop('files')[0];
        var cropping = $('.avatar-data').val();
        var form_data = new FormData();                  
        form_data.append('file', files);
        form_data.append('avatar-data', cropping);
        form_data.append('type', type);

        var url = "";
        url = "<?php echo base_url(); ?>sales-order/product-images/upload-cover/<?php echo $sales_order_id; ?>/<?php echo encrypt_decrypt('encrypt',$data->id); ?>";

        $.ajax({ 
            url: url, 
            data: form_data, 
            dataType: 'json',
            type: 'POST',
            contentType: false, 
            processData: false, 
            success: function(response){

                $("#loader-poster").addClass( "hidden" );
                setTimeout(() => {  $("#gambar").removeClass( "hidden" ); }, 500);

                if(response.status == 'success'){ 

                   $('#gambar').attr('src',response.thumbPath);
                   $('#gambar').show();
                   $('#cover').val(response.thumbPath);
                   $('#file_name').val(response.file_name);

                }else{ 
                    Swal.fire(
                      'Oopps!',
                      'File not uploaded',
                      'error'
                    )
                } 
            }, 
        }); 
    }

    <?php if(isset($data->id)){ ?>
    function test(){

      var url = "<?php echo base_url(); ?>public/product_images/original_<?php echo $data->file_name; ?>";

      var width =($('#width').val());
      var height =($('#height').val());
      
      var img = $('<img src="' + url + '" width="100%">');
        $('.avatar-wrapper').empty().html(img);
        img.cropper({
          aspectRatio: parseInt(width) / parseInt(height),
          dragMode: 'none',
          cropBoxMovable: true,
          cropBoxResizable: true,
          crop: function (e) {
            var json = [
                  '{"x":' + e.x,
                  '"y":' + e.y,
                  '"height":' + e.height,
                  '"form_height":' + height,
                  '"width":' + e.width,
                  '"form_width":' + width,
                  '"rotate":' + e.rotate + '}'
                ].join();

            $('.avatar-data').val(json);
          }
        });
    }


    function cekImages(){
      var files = $("#cover_file").prop('files')[0];
      if(files==undefined){
        setTimeout(function(){ test(); }, 1000)
      }
    }

  <?php }else{ ?>
      
      function cekImages(){
      }

  <?php } ?>

</script>
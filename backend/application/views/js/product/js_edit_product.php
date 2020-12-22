<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/ckeditor/config.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>crop/js/cropper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

<script type="text/javascript">
    //CHECK APAKAH FORM DIUBAH
    var flag = 0;
    $('#edit-form :input').change(function(){
        // $("#content_article_publish").prop("disabled", false);
        console.log($(this).closest('form').data('changed', true));
        // alert('test');
    });

    $('#tags2').on('itemAdded', function(event) {
       alert(event.item)
    });

    // $('#tags2').on('itemAdded', function(event) {
    //     alert('test');
    // });

    // $('#tags2').change(function(){
    //     alert('test');
    // });

    //CROP UPLOAD HEADLINE
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
        var files = $("#cover_file").prop('files')[0];
        var cropping = $('.avatar-data').val();
        var form_data = new FormData();                  
        form_data.append('file', files);
        form_data.append('avatar-data', cropping);

        $.ajax({ 
            url: "<?php echo base_url(); ?>event/upload", 
            type: 'post', 
            data: form_data, 
            dataType: 'json',
            type: 'POST',
            contentType: false, 
            processData: false, 
            success: function(response){
                if(response.state == 200){ 
                     var source_images = "<?php echo ASSETS; ?>images/_thumb/small/"
                   $('#gambar').attr('src', source_images+''+response.thumbPath);
                   $('#gambar').show();
                   $('#cover').val(response.thumbPath);
                } 
                else{ 
                    alert('file not uploaded'); 
                } 
            }, 
        }); 
    }

    function validateForm(){
        var title = $("#lb-title").val();
        var speaker = $("#lb-speaker").val();
        var platform = $("#lb-platform").val();
        var price = $("#lb-price").val();
        var start_date = $("#lb-start_date").val();
        var end_date = $("#lb-end_date").val();
        var slot = $("#lb-slot").val();

        if (title == '' || speaker == '' || platform == '' || price == '' || start_date == '' || end_date == ''  || slot == '') {
            Swal.fire(
              'Oopps!',
              'Please Fill All the Form With (*) Sign',
              'error'
            );
            return false;
        }
        else{
            return true;
        }
    }
</script>

<script>
    // var editor = CKEDITOR.replace('editor', {
    //     extraPlugins: 'notification'
    // });
    $(function () {
        // var editor = CKEDITOR.replace('editor1');

        var editor = CKEDITOR.replace('editor1',{
            extraPlugins: 'custom, wordcount',
            height:500,
            // filebrowserBrowseUrl: '<?php echo base_url(); ?>article/list_photo'
        });

        editor.on( 'required', function( evt ) {
            Swal.fire(
              'Oopps!',
              'Please Fill the Body Text',
              'error'
            )
            // alert('Please Fill the Body Text');
            evt.cancel();
        } );

    });

    $('.datetime-picker').datetimepicker({
        locale: 'id',
        format: 'YYYY-MM-DD HH:mm:ss',
        showClear: true
    });

</script>

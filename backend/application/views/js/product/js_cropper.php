<script type="text/javascript" src="<?php echo base_url('assets/'); ?>crop/js/cropper.js"></script>

<script type="text/javascript">
//CROP PHOTO ARTICLE
function uploadPhotoArticle(input){
    var reader;
    var imageFile = input.files[0];

    if (imageFile != null) {
        if (imageFile.size > 2000000) {
            Swal.fire(
              'Oopps!',
              'File Size More than 2 MB',
              'error'
            )
        }
        else{
            var url = URL.createObjectURL(imageFile);
            var img = $('<img src="' + url + '">');
            console.log(img);
            $('.photo-wrapper').empty().html(img);
            img.cropper({
              aspectRatio: 16 / 9,
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

                $('.photo-data').val(json);
              }
            });
        }
    }
}

function submitPhotoArticle(){
    var files = $("#article_photo_file").prop('files')[0];
    var cropping = $('.photo-data').val();
    var caption = $('#caption').val();
    var source = $('#source').val();
    var form_data = new FormData();    
    form_data.append('file', files);
    form_data.append('photo-data', cropping);
    form_data.append('caption', caption);
    form_data.append('source', source);

    var img = $('.photo-wrapper').find('img');

    $.ajax({ 
        url: "<?php echo base_url(); ?>content/upload_content", 
        type: 'post', 
        data: form_data, 
        dataType: 'json',
        type: 'POST',
        contentType: false, 
        processData: false, 
        success: function(response){
            if(response.state == 200){
                Swal(
                    {title: "Success!", text: "The photo success uploaded to server", type: "success"}).then(function(){ 
                        location.reload();
                    }
                );
                img.cropper('destroy');
                img.remove();
                $('#caption').val("");
                setTimeout(location.reload.bind(location), 10000);
            } 
            else{ 
                alert('file not uploaded'); 
            } 
        }, 
    }); 
}

function returnFileUrl(param, caption, source) {
    var insertedElement = '<figure class="">' +
            '<img src="'+param+'" border="0" title="'+caption+'" />' +
            '<figcaption> '+caption+' (Sumber: '+source+') </figcaption>' +
        '</figure>';
    var element = window.opener.CKEDITOR.dom.element.createFromHtml(insertedElement);
    window.opener.CKEDITOR.instances.editor1.insertElement( element );
    window.close();
    window.opener.CKEDITOR.tools.callFunction( 1, param );
}

function openModalEdit(id){
    $('#update-metadata').modal('show');
    $.ajax({
        url: "<?php echo base_url(); ?>content/get_photo/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data){
            document.getElementById("photo-url").src = data.media_url;
            document.getElementById("id-photo").value = data.id;
            document.getElementById("caption-update").value = data.caption;
            document.getElementById("source-update").value = data.source;
        }
    });
}

function updateCaption(){
    var id = $("#id-photo").val();
    var caption = $("#caption-update").val();
    var source = $("#source-update").val();

    $.ajax({
        url: "<?php echo base_url(); ?>content/update_photo",
        type: "POST",
        data: {"id": id, "caption": caption, "source": source},
        dataType: "JSON",
        success: function(response){
            if (response.state == 200) {
                Swal(
                    {title: "Success!", text: "Update Successful", type: "success"}).then(function(){ 
                        location.reload();
                    }
                );
            }
            else{
                alert('Cannot Update! Please Update Later!')
            }
        }
    });
}
</script>
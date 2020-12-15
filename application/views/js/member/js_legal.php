<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/uploader/plupload.queue.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/wysihtml5/toolbar.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/datatables.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/charts/sparkline.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/switch.min.js"></script>
    
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/moment.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/inputmask.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/application.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/'); ?>crop/js/cropper.js"></script>


<script>

  function selectType(param){

    $('#type').val(param)

    if(param=='individu'){
      $('#type_doc').html('<input id="type_doc_1" type="text" class="form-control" value="KTP" name="type_doc[]" readonly>');
      $('.text_type_doc').html('KTP');
    }else{
      $('#type_doc').html('<select id="type_doc_1" class="form-control" name="type_doc[]" onchange="select_doc_type()"><option>Anggaran Dasar</option><option>TDP</option></select>');
      $('.text_type_doc').html($('#type_doc_1').val());
    }
    
  }

  // function loadType(){

  //   var param = $('#type').val();

  //   if(param=='individu'){
  //     $('#type_doc').html('<input id="type_doc_1" type="text" class="form-control" value="KTP" name="type_doc[]" readonly>');
  //     $('.text_type_doc').html('KTP');
  //   }else{
  //     $('#type_doc').html('<select id="type_doc_1" class="form-control" name="type_doc[]" onchange="select_doc_type()"><option>Anggaran Dasar</option><option>TDP</option></select>');
  //     $('.text_type_doc').html($('#type_doc_1').val());
  //   }
    
  // }
  // loadType();

  function select_doc_type(){
      $('.text_type_doc').html($('#type_doc_1').val());
  }

  //CROP DOKUMEN 1
  function uploadCropper1(input){
      var reader;
      var imageFile = input.files[0];

      if (imageFile != null) {
          if (imageFile.size > 2000000) {
              Swal.fire(
                'Oopps!',
                'File Size More than 2 MB',
                'error'
              )
              $('#gambar_1').removeAttr('src');
              $('#gambar_1').hide();
              $('#cover_1').val('');
          }
          else{
              var url = URL.createObjectURL(imageFile);
              var img = $('<img src="' + url + '">');
              $('.avatar-wrapper-1').empty().html(img);
              img.cropper({
                aspectRatio: 16 / 10,
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

                  $('.avatar-data-1').val(json);
                }
              });
          }
      }
  }

  function submitCrop1(){

      $("#loader-doc-1").removeClass( "hidden" );
      $("#gambar_1").addClass( "hidden" );
      
      var files = $("#cover_file_1").prop('files')[0];
      var cropping = $('.avatar-data-1').val();
      var form_data = new FormData();                  
      form_data.append('file', files);
      form_data.append('avatar-data', cropping);

      $.ajax({ 
          url: "<?php echo base_url(); ?>member/upload-document", 
          type: 'post', 
          data: form_data, 
          dataType: 'json',
          type: 'POST',
          contentType: false, 
          processData: false, 
          success: function(response){
              if(response.status == 'success'){ 

                 $('#gambar_1').attr('src',response.thumbPath);
                 $('#gambar_1').show();
                 $('#cover_1').val(response.thumbPath);

                 $("#loader-doc-1").addClass( "hidden" );
                  setTimeout(() => {  $("#gambar_1").removeClass( "hidden" ); }, 200);
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

  //CROP DOKUMEN 2
  function uploadCropper2(input){
      var reader;
      var imageFile = input.files[0];

      if (imageFile != null) {
          if (imageFile.size > 2000000) {
              Swal.fire(
                'Oopps!',
                'File Size More than 2 MB',
                'error'
              )
              $('#gambar_2').removeAttr('src');
              $('#gambar_2').hide();
              $('#cover_2').val('');
          }
          else{
              var url = URL.createObjectURL(imageFile);
              var img = $('<img src="' + url + '">');
              $('.avatar-wrapper-2').empty().html(img);
              img.cropper({
                aspectRatio: 16 / 10,
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

                  $('.avatar-data-2').val(json);
                }
              });
          }
      }
  }

  function submitCrop2(){

      $("#loader-doc-2").removeClass( "hidden" );
      $("#gambar_2").addClass( "hidden" );

      var files = $("#cover_file_2").prop('files')[0];
      var cropping = $('.avatar-data-2').val();
      var form_data = new FormData();                  
      form_data.append('file', files);
      form_data.append('avatar-data', cropping);

      $.ajax({ 
          url: "<?php echo base_url(); ?>member/upload-document", 
          type: 'post', 
          data: form_data, 
          dataType: 'json',
          type: 'POST',
          contentType: false, 
          processData: false, 
          success: function(response){
              if(response.status == 'success'){ 

                 $('#gambar_2').attr('src',response.thumbPath);
                 $('#gambar_2').show();
                 $('#cover_2').val(response.thumbPath);

                 $("#loader-doc-2").addClass( "hidden" );
                  setTimeout(() => {  $("#gambar_2").removeClass( "hidden" ); }, 200);

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

  function validateForm(){

    var status_data = true;
    var msg = '';

    var type_doc_arr =  document.getElementsByName("type_doc[]");
    var cover_arr =  document.getElementsByName("cover[]");
    var name_arr =  document.getElementsByName("name[]");
    var nomor_arr =  document.getElementsByName("nomor[]");
    var address_arr =  document.getElementsByName("address[]");
    var is_agree =  document.getElementsByName("is_agree");

    if(type_doc_arr[0].value==''){
      
      msg = 'Silahkan isi tipe dokumen';
      status_data = false;

    }else if(cover_arr[0].value==''){

      msg = 'Silahkan upload dokumen anda';
      status_data = false;

    }else if(name_arr[0].value==''){

      $("#group-name").addClass("has-warning has-feedback");
      msg = 'Nama harus diisi';
      status_data = false;

    }else if(nomor_arr[0].value==''){

      $("#group-nomor").addClass("has-warning has-feedback");
      msg = 'Nomor harus disis';
      status_data = false;

    }else if(address_arr[0].value==''){

      $("#group-address").addClass("has-warning has-feedback");
      msg = 'Silahkan isi alamat';
      status_data = false;

    }else if(is_agree[0].checked==false){

      msg = 'Silahkan berikan tanda centang untuk menyetujui syarat dan ketentuan kami';
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

</script>
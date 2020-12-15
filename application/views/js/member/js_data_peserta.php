<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/uploader/plupload.queue.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/wysihtml5/toolbar.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/application.js"></script>

<script type="text/javascript">
function selectStatus(){
    $("form[name=form_search]").submit();
}

function openModalEmailBlast(){

    $('#status_kirim').removeClass('hidden');
    $('#notes').removeClass('hidden');
    $('#form_modal').modal('show');

}

function openModalCreateSertifikat(){

    $('#form_modal_created_sertifikat').modal('show');

}

function openModalUploadMateri(){

    $('#form_modal_upload_materi').modal('show');

}

function openModalEmail(email){

    $('#to').val(email);
    $('#status_kirim').addClass('hidden');
    $('#notes').addClass('hidden');
    $('#form_modal').modal('show');
}

function validateForm(){
    
    if ($("#subject").val() == '') {

        msg = 'Silahkan isi subject';
        status_data = false;

    }else if($("#msg").val() == ''){

        msg = 'Silahkan masukan pesan';
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

function openModalUploadSertifikat(id){

    $('#id_peserta').val(id);
    $('#crop_modal').modal('show');

}

//CROP POSTER
function uploadCropper(input){
    var reader;
    var imageFile = input.files[0];

    if (imageFile != null) {
        if (imageFile.size > 500000) {
            Swal.fire(
              'Oopps!',
              'Ukuran File Lebih dari 500 KB',
              'error'
            )
            $('#gambar').removeAttr('src');
            $('#gambar').hide();
            $('#cover').val('');
        }
        else{
            var url = URL.createObjectURL(imageFile);
            if(imageFile.type=='image/jpeg' || imageFile.type=='image/png'){
                var img = $('<img src="' + url + '" style="width: 100%">');
                $('.avatar-wrapper').empty().html(img);
            }else if(imageFile.type=='application/pdf'){
                var img = $('<img src="<?php echo ASSETS; ?>img/pdf.png">');
                $('.avatar-wrapper').empty().html(img);
                $('.avatar-name').empty().html(imageFile.name);
            }else{

                Swal.fire(
                  'Oopps!',
                  'File yang dizinikan (PDF,PNG,JPG)',
                  'error'
                )

            }
            
        }
    }
}

function submitSave(){
    var files = $("#cover_file").prop('files')[0];
    var id_peserta = $('#id_peserta').val();
    var form_data = new FormData();                  
    form_data.append('file', files);
    form_data.append('id_peserta', id_peserta);

    $(".full-loader").removeClass("hidden");

    $.ajax({ 
        url: "<?php echo base_url(); ?>event/upload-sertifikat", 
        data: form_data, 
        dataType: 'json',
        type: 'POST',
        contentType: false, 
        processData: false, 
        success: function(response){

            $(".full-loader").addClass("hidden");

            if(response.status == 'success'){ 

                Swal({
                    type: 'success',
                    title: 'Success',
                    text: 'Sertifikat berhasil diupload',
                }).then((result) => {
                    window.location.href = "<?php echo base_url(); ?>member/event/data-peserta/"+$('#product_id').val();
                });

            } 
            else{ 
                Swal.fire(
                  'Oopps!',
                  'file not uploaded',
                  'error'
                )
            } 
        }, 
    }); 
}

$(".boxtext").draggable({
    containment:"parent",
    stop: function(event, ui) {
        $('.positiony_text').val(ui.position.top);
        $('.positionx_text').val(ui.position.left);
    }
}); 

$(".boxtextcode").draggable({
    containment:"parent",
    stop: function(event, ui) {
        $('.positiony_code').val(ui.position.top);
        $('.positionx_code').val(ui.position.left);
    }
}); 

$(".boxqrcode").draggable({
    containment:"parent",
    stop: function(event, ui) {
        $('.positiony_qrcode').val(ui.position.top);
        $('.positionx_qrcode').val(ui.position.left);
    }
}); 

$(".boxtext").resizable({
    resize: function(event, ui) { 
        $("#width-box").val(ui.size.width)
    } 
});

$(".boxtextcode").resizable({
    resize: function(event, ui) { 
        $("#width-box-code").val(ui.size.width)
    } 
});

$(".boxqrcode").resizable({
  aspectRatio: true,
  resize: function(event, ui) { 
        $(".size_qrcode").val(ui.size.width)
    } 
});

function selectStyle(){

    $(".boxtext").css({
        "left": parseInt($('.positionx_text').val()),
        "top": parseInt($('.positiony_text').val()),
    });

    $(".boxtextcode").css({
        "left": parseInt($('.positionx_code').val()),
        "top": parseInt($('.positiony_code').val()),
    });

    $(".boxqrcode").css({
        "left": parseInt($('.positionx_qrcode').val()),
        "top": parseInt($('.positiony_qrcode').val()),
    });

    $("#text-content").css({"font-family": $(".type_text").val()});
    $("#text-content").css({"color": $(".color_text").val()});
    $("#text-content").css({"fontSize": $(".size_text").val()+'px'});
    $(".boxtext").css({"text-align": $(".position_text").val()});
    $(".boxtext").css({"width": $("#width-box").val()});

    var bold_text = parseInt($('.bold_text').val());
    if(bold_text==0){
        $("#text-content").css({"font-weight": 'normal'});
        $("#button_bold_text").removeClass("btn-danger");
        $("#button_bold_text").addClass("btn-default");
    }else{
        $("#text-content").css({"font-weight": 'bold'});
        $("#button_bold_text").removeClass("btn-default");
        $("#button_bold_text").addClass("btn-danger");
    }

    var italic_text = parseInt($('.italic_text').val());
    if(italic_text==0){
        $("#text-content").css({"font-style": 'normal'});
        $("#button_italic_text").removeClass("btn-danger");
        $("#button_italic_text").addClass("btn-default");
    }else{
        $("#text-content").css({"font-style": 'italic'});
        $("#button_italic_text").removeClass("btn-default");
        $("#button_italic_text").addClass("btn-danger");
    }

    var underline_text = parseInt($('.underline_text').val());
    if(underline_text==0){
        $("#text-content").css({"text-decoration": 'none'});
        $("#button_underline_text").removeClass("btn-danger");
        $("#button_underline_text").addClass("btn-default");
    }else{
        $("#text-content").css({"text-decoration": 'underline'});
        $("#button_underline_text").removeClass("btn-default");
        $("#button_underline_text").addClass("btn-danger");
    }

    var uppercase_text = parseInt($('.uppercase_text').val());
    if(uppercase_text==0){
        $("#text-content").css({"text-transform": 'none'});
        $("#button_uppercase_text").removeClass("btn-danger");
        $("#button_uppercase_text").addClass("btn-default");
    }else{
        $("#text-content").css({"text-transform": 'uppercase'});
        $("#button_uppercase_text").removeClass("btn-default");
        $("#button_uppercase_text").addClass("btn-danger");
    }

    $("#text-content-code").css({"color": $(".color_code").val()});
    $("#text-content-code").css({"fontSize": $(".size_code").val()+'px'});
    $(".boxtextcode").css({"text-align": $(".position_code").val()});
    $(".boxtextcode").css({"width": $("#width-box-code").val()});

    $(".boxqrcode").css({"width": $(".size_qrcode").val()});

    var bold_code = parseInt($('.bold_code').val());
    if(bold_code==0){
        $("#text-content-code").css({"font-weight": 'normal'});
        $("#button_bold_text").removeClass("btn-danger");
        $("#button_bold_text").addClass("btn-default");
    }else{
        $("#text-content-code").css({"font-weight": 'bold'});
        $("#button_bold_code").removeClass("btn-default");
        $("#button_bold_code").addClass("btn-danger");
    }

    var italic_code = parseInt($('.italic_code').val());
    if(italic_code==0){
        $("#text-content-code").css({"font-style": 'normal'});
        $("#button_italic_text").removeClass("btn-danger");
        $("#button_italic_text").addClass("btn-default");
    }else{
        $("#text-content-code").css({"font-style": 'italic'});
        $("#button_italic_code").removeClass("btn-default");
        $("#button_italic_code").addClass("btn-danger");
    }

    var underline_code = parseInt($('.underline_code').val());
    if(underline_code==0){
        $("#text-content-code").css({"text-decoration": 'none'});
        $("#button_underline_code").removeClass("btn-danger");
        $("#button_underline_code").addClass("btn-default");
    }else{
        $("#text-content-code").css({"text-decoration": 'underline'});
        $("#button_underline_code").removeClass("btn-default");
        $("#button_underline_code").addClass("btn-danger");
    }

    var show_name = document.getElementsByName("show_name")[0].checked
    if(show_name==true){
        $(".boxtext").removeClass("hidden");
    }else{
        $(".boxtext").addClass("hidden");
    }

    var show_code = document.getElementsByName("show_code")[0].checked
    if(show_code==true){
        $(".boxtextcode").removeClass( "hidden" );
    }else{
        $(".boxtextcode").addClass("hidden");
    }

    var show_qrcode = document.getElementsByName("show_qrcode")[0].checked
    if(show_qrcode==true){
        $(".boxqrcode").removeClass( "hidden" );
    }else{
        $(".boxqrcode").addClass("hidden");
    }

}

function selectBold(){
    var bold_text = parseInt($('.bold_text').val());
    if(bold_text==0){
        $("#text-content").css({"font-weight": 'bold'});
        $('.bold_text').val(1);
        $("#button_bold_text").removeClass("btn-default");
        $("#button_bold_text").addClass("btn-danger");
    }else{
        $("#text-content").css({"font-weight": 'normal'});
        $('.bold_text').val(0);
        $("#button_bold_text").removeClass("btn-danger");
        $("#button_bold_text").addClass("btn-default");
    }
}
function selectItalic(){
    var italic_text = parseInt($('.italic_text').val());
    if(italic_text==0){
        $("#text-content").css({"font-style": 'italic'});
        $('.italic_text').val(1);
        $("#button_italic_text").removeClass("btn-default");
        $("#button_italic_text").addClass("btn-danger");
    }else{
        $("#text-content").css({"font-style": 'normal'});
        $('.italic_text').val(0);
        $("#button_italic_text").removeClass("btn-danger");
        $("#button_italic_text").addClass("btn-default");
    }
}
function selectUnderline(){
    var underline_text = parseInt($('.underline_text').val());
    if(underline_text==0){
        $("#text-content").css({"text-decoration": 'underline'});
        $('.underline_text').val(1);
        $("#button_underline_text").removeClass("btn-default");
        $("#button_underline_text").addClass("btn-danger");
    }else{
        $("#text-content").css({"text-decoration": 'none'});
        $('.underline_text').val(0);
        $("#button_underline_text").removeClass("btn-danger");
        $("#button_underline_text").addClass("btn-default");
    }
}
function selectUppercase(){
    var uppercase_text = parseInt($('.uppercase_text').val());
    if(uppercase_text==0){
        $("#text-content").css({"text-transform": 'uppercase'});
        $('.uppercase_text').val(1);
        $("#button_uppercase_text").removeClass("btn-default");
        $("#button_uppercase_text").addClass("btn-danger");
    }else{
        $("#text-content").css({"text-transform": 'none'});
        $('.uppercase_text').val(0);
        $("#button_uppercase_text").removeClass("btn-danger");
        $("#button_uppercase_text").addClass("btn-default");
    }
}

function selectBoldCode(){
    var bold_code = parseInt($('.bold_code').val());
    if(bold_code==0){
        $("#text-content-code").css({"font-weight": 'bold'});
        $('.bold_code').val(1);
        $("#button_bold_code").removeClass("btn-default");
        $("#button_bold_code").addClass("btn-danger");
    }else{
        $("#text-content-code").css({"font-weight": 'normal'});
        $('.bold_code').val(0);
        $("#button_bold_code").removeClass("btn-danger");
        $("#button_bold_code").addClass("btn-default");
    }
}
function selectItalicCode(){
    var italic_code = parseInt($('.italic_code').val());
    if(italic_code==0){
        $("#text-content-code").css({"font-style": 'italic'});
        $('.italic_code').val(1);
        $("#button_italic_code").removeClass("btn-default");
        $("#button_italic_code").addClass("btn-danger");
    }else{
        $("#text-content-code").css({"font-style": 'normal'});
        $('.italic_code').val(0);
        $("#button_italic_code").removeClass("btn-danger");
        $("#button_italic_code").addClass("btn-default");
    }
}
function selectUnderlineCode(){
    var underline_code = parseInt($('.underline_code').val());
    if(underline_code==0){
        $("#text-content-code").css({"text-decoration": 'underline'});
        $('.underline_code').val(1);
        $("#button_underline_code").removeClass("btn-default");
        $("#button_underline_code").addClass("btn-danger");
    }else{
        $("#text-content-code").css({"text-decoration": 'none'});
        $('.underline_code').val(0);
        $("#button_underline_code").removeClass("btn-danger");
        $("#button_underline_code").addClass("btn-default");
    }
}

//SHOW SERTIFIKAT
function showSertifikat(input){

    var reader;
    var imageFile = input.files[0];

    if (imageFile != null) {
        if (imageFile.size > 3000000) {
            Swal.fire(
              'Oopps!',
              'File Size More than 3 MB',
              'error'
            )
            $('#gambar').removeAttr('src');
            $('#gambar').hide();
            $('#cover').val('');
        }
        else{

            var url = URL.createObjectURL(imageFile);
            var img = $('<img src="' + url + '" style="width: 100%; position:absolute;" id="image-sertifikat">');
            $('.avatar-template-sertifikat').empty().html(img);
            
            $(".box-sertifikat").removeClass( "hidden" );
            $(".box-toolbar").removeClass( "hidden" );

            $("#image-sertifikat").load(function(){
                $(".pembungkus").css({"height": $(this).height()+20});

                $('#width').val($(this).width());
                $('#height').val($(this).height());
            })

            $('#id_sertifikat').val('');
            document.getElementsByName("show_name")[0].checked = false;
            document.getElementsByName("show_code")[0].checked = false;
            document.getElementsByName("show_qrcode")[0].checked = false;

        }
    }
}

function simpanSertifikat(action){

    var show_name = document.getElementsByName("show_name")[0].checked
    if(show_name==true){
        show_name = 1;
    }else{
        show_name = 0;
    }

    var show_code = document.getElementsByName("show_code")[0].checked
    if(show_code==true){
        show_code = 1;
    }else{
        show_code = 0;
    }

    var show_qrcode = document.getElementsByName("show_qrcode")[0].checked
    if(show_qrcode==true){
        show_qrcode = 1;
    }else{
        show_qrcode = 0;
    }

    var files = $("#sertificat_file").prop('files')[0];
    var product_id = $('#product_id').val();
    var id_sertifikat = $('#id_sertifikat').val();
    var width = $('#width').val();
    var height = $('#height').val();
    var show_name = show_name;
    var show_code = show_code;
    var show_qrcode = show_qrcode;
    
    var type_text = $('.type_text').val();
    var color_text = $('.color_text').val();
    var size_text = $('.size_text').val();
    var bold_text = $('.bold_text').val();
    var italic_text = $('.italic_text').val();
    var underline_text = $('.underline_text').val();
    var uppercase_text = $('.uppercase_text').val();
    var position_text = $('.position_text').val();
    var positionx_text = $('.positionx_text').val();
    var positiony_text = $('.positiony_text').val();
    var width_box_text = $('#width-box').val();

    var color_code = $('.color_code').val();
    var size_code = $('.size_code').val();
    var bold_code = $('.bold_code').val();
    var italic_code = $('.italic_code').val();
    var underline_code = $('.underline_code').val();
    var position_code = $('.position_code').val();
    var positionx_code = $('.positionx_code').val();
    var positiony_code = $('.positiony_code').val();
    var width_box_code = $('#width-box-code').val();

    var positionx_qrcode = $('.positionx_qrcode').val();
    var positiony_qrcode = $('.positiony_qrcode').val();
    var size_qrcode = $('.size_qrcode').val();

    var ticket_arr =  document.getElementsByName("ticket[]");
    var ticket_length = ticket_arr.length;  

    var multiple_form_arr =  document.getElementsByName("multiple_form[]");
    var multiple_form_length = multiple_form_arr.length;   

    var form_data = new FormData();    

    var total = 0;
    for(i=0;i<ticket_length;i++)
    {
        if(ticket_arr[i].checked==true){
            total = total + 1;
            form_data.append('ticket[]', parseInt(ticket_arr[i].value));
        }
    }

    if(total==0 && action==3){
        Swal.fire(
            'Oopps!',
            'Silahkan pilih tiket untuk syarat penerima sertifikat',
            'error'
        );
        return false;
    }

    for(i=0;i<multiple_form_length;i++)
    {
        if(multiple_form_arr[i].checked==true){
            form_data.append('multiple_form[]', parseInt(multiple_form_arr[i].value));
        }
    }

    form_data.append('file', files);
    form_data.append('action', action);
    form_data.append('product_id', product_id);
    form_data.append('id_sertifikat', id_sertifikat);
    form_data.append('width', width);
    form_data.append('height', height);
    form_data.append('show_name', show_name);
    form_data.append('show_code', show_code);
    form_data.append('show_qrcode', show_qrcode);

    form_data.append('type_text', type_text);
    form_data.append('color_text', color_text);
    form_data.append('size_text', size_text);
    form_data.append('bold_text', bold_text);
    form_data.append('italic_text', italic_text);
    form_data.append('underline_text', underline_text);
    form_data.append('uppercase_text', uppercase_text);
    form_data.append('position_text', position_text);
    form_data.append('positionx_text', positionx_text);
    form_data.append('positiony_text', positiony_text);
    form_data.append('width_box_text', width_box_text);

    form_data.append('color_code', color_code);
    form_data.append('size_code', size_code);
    form_data.append('bold_code', bold_code);
    form_data.append('italic_code', italic_code);
    form_data.append('underline_code', underline_code);
    form_data.append('position_code', position_code);
    form_data.append('positionx_code', positionx_code);
    form_data.append('positiony_code', positiony_code);
    form_data.append('width_box_code', width_box_code);

    form_data.append('positionx_qrcode', positionx_qrcode);
    form_data.append('positiony_qrcode', positiony_qrcode);
    form_data.append('size_qrcode', size_qrcode);

    $(".full-loader").removeClass("hidden");

    $.ajax({ 
        url: "<?php echo base_url(); ?>event/upload-template-sertifikat", 
        data: form_data, 
        dataType: 'json',
        type: 'POST',
        contentType: false, 
        processData: false, 
        success: function(response){

            $(".full-loader").addClass("hidden");

            if(response.status == 'success'){ 
                if(action==1 || action==3){
                    Swal({
                        type: 'success',
                        title: 'Success',
                        text: response.msg,
                    }).then((result) => {
                        window.location.href = "<?php echo base_url(); ?>member/event/data-peserta/"+product_id;
                    });
                }else{

                    $('#id_sertifikat').val(response.id_sertifikat);
                    window.open("<?php echo base_url(); ?>member/event/preview-esertifikat/"+response.id_sertifikat, '_blank');
                }
            }else{ 
                Swal.fire(
                  'Oopps!',
                  response.msg,
                  'error'
                )
            } 
        }, 
    }); 
}

function editSertifikat(id){

    var files = $("#cover_file").prop('files')[0];
    var id_peserta = $('#id_peserta').val();
    var form_data = new FormData();                  
    form_data.append('file', files);
    form_data.append('id_peserta', id_peserta);

    $(".full-loader").removeClass("hidden");

    $.ajax({ 
        url: "<?php echo base_url(); ?>member/event/get-sertifikat/"+id, 
        type: 'GET', 
        data: form_data, 
        dataType: 'json',
        contentType: false, 
        processData: false, 
        success: function(r){

            $(".full-loader").addClass("hidden");

            if(r.status == 'success'){ 

                var img = $('<img src="' + r.data.link_sertifikat + '" style="width: 100%; position:absolute;">');
                $('.avatar-template-sertifikat').empty().html(img);

                $('#id_sertifikat').val(id);
                $('#width').val(r.data.width);
                $('#height').val(r.data.height);
                $('#show_name').val(r.data.show_name);
                $('#show_code').val(r.data.show_code);
                $('#show_qrcode').val(r.data.show_qrcode);
                
                $('.type_text').val(r.data.type_text);
                $('.color_text').val(r.data.color_text);
                $('.size_text').val(r.data.size_text);
                $('.bold_text').val(r.data.bold_text);
                $('.italic_text').val(r.data.italic_text);
                $('.underline_text').val(r.data.underline_text);
                $('.uppercase_text').val(r.data.uppercase_text);
                $('.position_text').val(r.data.position_text);
                $('.positionx_text').val(r.data.positionx_text);
                $('.positiony_text').val(r.data.positiony_text);
                $('#width-box').val(r.data.width_box_text);

                $('.color_code').val(r.data.color_code);
                $('.size_code').val(r.data.size_code);
                $('.bold_code').val(r.data.bold_code);
                $('.italic_code').val(r.data.italic_code);
                $('.underline_code').val(r.data.underline_code);
                $('.position_code').val(r.data.position_code);
                $('.positionx_code').val(r.data.positionx_code);
                $('.positiony_code').val(r.data.positiony_code);
                $('#width-box-code').val(r.data.width_box_code);

                $('.positionx_qrcode').val(r.data.positionx_qrcode);
                $('.positiony_qrcode').val(r.data.positiony_qrcode);
                $('.size_qrcode').val(r.data.size_qrcode);

                
                $(".box-sertifikat").removeClass( "hidden" );
                $(".box-toolbar").removeClass( "hidden" );

                if(r.data.show_name==1){
                    document.getElementsByName("show_name")[0].checked = true;
                }else{
                    document.getElementsByName("show_name")[0].checked = false;
                }

                if(r.data.show_code==1){
                    document.getElementsByName("show_code")[0].checked = true;
                }else{
                    document.getElementsByName("show_code")[0].checked = false;
                }

                if(r.data.show_qrcode==1){
                    document.getElementsByName("show_qrcode")[0].checked = true;
                }else{
                    document.getElementsByName("show_qrcode")[0].checked = false;
                }

                $(".pembungkus").css({"height": parseFloat(r.data.height)+20});

                selectStyle();
            } 
            else{ 
                Swal.fire(
                  'Oopps!',
                  'Data tidak ditemukan',
                  'error'
                )
            } 
        }, 
    }); 
}

function deleteSertifikat(id){

    Swal.fire({
        title: 'Kamu Yakin?',
        text: "Kamu yakin akan menghapus sertifikat ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            
            $.ajax({ 
                url: "<?php echo base_url(); ?>member/event/delete-sertifikat/"+id, 
                type: 'GET', 
                dataType: 'json',
                contentType: false, 
                processData: false, 
                success: function(r){
                    if(r.status == 'success'){ 

                        Swal({
                            type: 'success',
                            title: 'Success',
                            text: "Data berhasil dihapus",
                        }).then((result) => {
                            window.location.href = "<?php echo base_url(); ?>member/event/data-peserta/"+$('#product_id').val();
                        });

                    } else{ 
                        Swal.fire(
                          'Oopps!',
                          'Terjadi kesalahan',
                          'error'
                        )
                    } 
                }, 
            }); 

        }
    })
    
}

function deleteSertifikatPeserta(id){

    Swal.fire({
        title: 'Kamu Yakin?',
        text: "Kamu yakin akan menghapus sertifikat ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            
            $.ajax({ 
                url: "<?php echo base_url(); ?>member/event/delete-sertifikat-peserta/"+id, 
                type: 'GET', 
                dataType: 'json',
                contentType: false, 
                processData: false, 
                success: function(r){
                    if(r.status == 'success'){ 

                        Swal({
                            type: 'success',
                            title: 'Success',
                            text: "Data berhasil dihapus",
                        }).then((result) => {
                            window.location.href = "<?php echo base_url(); ?>member/event/data-peserta/"+$('#product_id').val();
                        });

                    } else{ 
                        Swal.fire(
                          'Oopps!',
                          'Terjadi kesalahan',
                          'error'
                        )
                    } 
                }, 
            }); 

        }
    })
    
}

//SHOW SERTIFIKAT
function showMateri(input){

    var reader;
    var imageFile = input.files[0];

    if (imageFile != null) {
        if (imageFile.size > 1000000) {
            Swal.fire(
              'Oopps!',
              'File Size More than 1 MB',
              'error'
            )
            $('#gambar').removeAttr('src');
            $('#gambar').hide();
            $('#cover').val('');
        }
        else{

            $(".box-sertifikat").removeClass( "hidden" );
            $(".box-toolbar").removeClass( "hidden" );

            if(imageFile.type=='image/jpeg' || imageFile.type=='image/png' || imageFile.type=='application/pdf'){
                $('.avatar-name').empty().html(imageFile.name);
            }else{

                Swal.fire(
                  'Oopps!',
                  'File yang dizinikan (PDF,PNG,JPG)',
                  'error'
                )

            }

        }
    }
}

function simpanMateri(action){

    var files = $("#materi_file").prop('files')[0];
    var product_id = $('#product_id').val();
    var id_materi = $('#id_materi').val();

    var ticket_arr =  document.getElementsByName("ticket_materi[]");
    var ticket_length = ticket_arr.length; 

    var multiple_form_arr =  document.getElementsByName("multiple_form_materi[]");
    var multiple_form_length = multiple_form_arr.length;    

    var form_data = new FormData();  

    var total = 0;
    for(i=0;i<ticket_length;i++)
    {
        if(ticket_arr[i].checked==true){
            total = total + 1;
            form_data.append('ticket[]', parseInt(ticket_arr[i].value));
        }
    }

    if(total==0 && action==3){
        Swal.fire(
            'Oopps!',
            'Silahkan pilih tiket untuk syarat penerima materi',
            'error'
        );
        return false;
    }

    for(i=0;i<multiple_form_length;i++)
    {
        if(multiple_form_arr[i].checked==true){
            form_data.append('multiple_form[]', parseInt(multiple_form_arr[i].value));
        }
    }



    form_data.append('file', files);
    form_data.append('action', action);
    form_data.append('product_id', product_id);
    form_data.append('id_materi', id_materi);


    $(".full-loader").removeClass("hidden");

    $.ajax({ 
        url: "<?php echo base_url(); ?>event/upload-materi", 
        data: form_data, 
        dataType: 'json',
        type: 'POST',
        contentType: false, 
        processData: false, 
        success: function(response){

            $(".full-loader").addClass("hidden");

            if(response.status == 'success'){ 
                Swal({
                    type: 'success',
                    title: 'Success',
                    text: response.msg,
                }).then((result) => {
                    window.location.href = "<?php echo base_url(); ?>member/event/data-peserta/"+product_id;
                });
            }else{ 
                Swal.fire(
                  'Oopps!',
                  response.msg,
                  'error'
                )
            } 
        }, 
    }); 
}

function editMateri(id){

    var id_peserta = $('#id_peserta').val();
    var form_data = new FormData();                  
    form_data.append('id_peserta', id_peserta);

    $(".full-loader").removeClass("hidden");

    $.ajax({ 
        url: "<?php echo base_url(); ?>member/event/get-materi/"+id, 
        type: 'GET', 
        data: form_data, 
        dataType: 'json',
        contentType: false, 
        processData: false, 
        success: function(r){

            $(".full-loader").addClass("hidden");

            if(r.status == 'success'){ 

                $('.avatar-name').empty().html(r.data.name);
                $('#id_materi').val(id);

                $(".box-sertifikat").removeClass( "hidden" );
                $(".box-toolbar").removeClass( "hidden" );
            } 
            else{ 
                Swal.fire(
                  'Oopps!',
                  'Data tidak ditemukan',
                  'error'
                )
            } 
        }, 
    }); 
}


function deleteMateri(id){

    Swal.fire({
        title: 'Kamu Yakin?',
        text: "Kamu yakin akan menghapus materi ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            
            $.ajax({ 
                url: "<?php echo base_url(); ?>member/event/delete-materi/"+id, 
                type: 'GET', 
                dataType: 'json',
                contentType: false, 
                processData: false, 
                success: function(r){
                    if(r.status == 'success'){ 

                        Swal({
                            type: 'success',
                            title: 'Success',
                            text: "Data berhasil dihapus",
                        }).then((result) => {
                            window.location.href = "<?php echo base_url(); ?>member/event/data-peserta/"+$('#product_id').val();
                        });

                    } else{ 
                        Swal.fire(
                          'Oopps!',
                          'Terjadi kesalahan',
                          'error'
                        )
                    } 
                }, 
            }); 

        }
    })
    
}


function deleteMateriPeserta(id){

    Swal.fire({
        title: 'Kamu Yakin?',
        text: "Kamu yakin akan menghapus materi ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            
            $.ajax({ 
                url: "<?php echo base_url(); ?>member/event/delete-materi-peserta/"+id, 
                type: 'GET', 
                dataType: 'json',
                contentType: false, 
                processData: false, 
                success: function(r){
                    if(r.status == 'success'){ 

                        Swal({
                            type: 'success',
                            title: 'Success',
                            text: "Data berhasil dihapus",
                        }).then((result) => {
                            window.location.href = "<?php echo base_url(); ?>member/event/data-peserta/"+$('#product_id').val();
                        });

                    } else{ 
                        Swal.fire(
                          'Oopps!',
                          'Terjadi kesalahan',
                          'error'
                        )
                    } 
                }, 
            }); 

        }
    })
    
}

</script> 

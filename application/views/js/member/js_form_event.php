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

<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/application.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>crop/js/cropper.js"></script>

<script src="<?php echo base_url('assets_member/'); ?>js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets_member/'); ?>css/bootstrap-datetimepicker.min.css">

<script>

    function validateForm(){

        var status_data = true;
        var msg = '';

        var cat_arr =  document.getElementsByName("category[]");
        var cat_length = cat_arr.length;             
        var total=0;
        for(i=0;i< cat_length;i++)
        {
            if(cat_arr[i].checked==true){
                total++;
            }

        } 

        if ($("#organization").val() == '') {

            $("#group-organization").addClass("has-warning has-feedback");
            $("#alert-organization").removeClass( "hidden" );
            msg = 'Silahkan isi nama penyelenggara';
            status_data = false;

        }else if($("#phone").val() == '' || $("#phone").val() == ' '){

            msg = 'Silahkan isi nomor handphone';
            status_data = false;

        }else if($("#cover").val() == ''){

            msg = 'Silahkan upload poster event';
            status_data = false;

        }else if($("#title").val() == ''){

            $("#group-title").addClass("has-warning has-feedback");
            $("#alert-title").removeClass( "hidden" );
            msg = 'Silahkan isi nama event';
            status_data = false;

        }else if($("#speaker").val() == ''){

            $("#group-speaker").addClass("has-warning has-feedback");
            $("#alert-speaker").removeClass( "hidden" );
            msg = 'Silahkan isi pengisi acara';
            status_data = false;

        }else if($("#start-date").val() == ''){

            $("#group-start-date").addClass("has-warning has-feedback");
            $("#alert-start-date").removeClass( "hidden" );
            msg = 'Silahkan isi tanggal mulai event';
            status_data = false;

        }else if($("#end-date").val() == ''){

            $("#group-end-date").addClass("has-warning has-feedback");
            $("#alert-end-date").removeClass( "hidden" );
            msg = 'Silahkan isi tanggal berakhir event';
            status_data = false;

        }else if($('#type').val()==''){

            msg = 'Silhakan pilih jenis event (Online/Offline)';
            status_data = false;

        }else if(total<=0){

            msg = 'Silahkan pilih kategori';
            status_data = false;
        }else if($("#is_online").val()=='1' && $("#platform").val()==''){

            $("#group-platform").addClass("has-warning has-feedback");
            $("#alert-platform").removeClass( "hidden" );
            msg = 'Platform harus diisi';
            status_data = false;

        }else if($("#is_online").val()=='1' && $("#link").val()==''){

            $("#group-link").addClass("has-warning has-feedback");
            $("#alert-link").removeClass( "hidden" );
            msg = 'Link event harus diisi';
            status_data = false;

        }else if($("#is_online").val()=='0' && $("#place").val()==''){
            
            $("#group-place").addClass("has-warning has-feedback");
            $("#alert-place").removeClass( "hidden" );
            msg = 'Silahkan isi tempat/gedung Event';
            status_data = false;
        
        }else if($("#is_online").val()=='0' && $("#provinsi").val()==''){
            
            $("#group-provinsi").addClass("has-warning has-feedback");
            $("#alert-provinsi").removeClass( "hidden" );
            msg = 'Silahkan isi Provinsi Event';
            status_data = false;
        
        }else if($("#is_online").val()=='0' && $("#kota").val()==''){
            
            $("#group-kota").addClass("has-warning has-feedback");
            $("#alert-kota").removeClass( "hidden" );
            msg = 'Silahkan isi Kota Event';
            status_data = false;
        
        }else if($("#is_online").val()=='0' && $("#kode_pos").val()==''){
            
            $("#group-kode_pos").addClass("has-warning has-feedback");
            $("#alert-kode_pos").removeClass( "hidden" );
            msg = 'Silahkan isi kode pos Event';
            status_data = false;
        
        }else if($("#is_online").val()=='0' && $("#address").val()==''){
            
            $("#group-address").addClass("has-warning has-feedback");
            $("#alert-address").removeClass( "hidden" );
            msg = 'Silahkan isi alamat lengkap event';
            status_data = false;
        
        }

        var ticket_arr =  document.getElementsByName("ticket_id[]");
        var is_delete_arr =  document.getElementsByName("is_delete[]");
        var ticket_length = ticket_arr.length;             

        var total_tiket=0;
        for(i=0;i< ticket_length;i++)
        {
            if(is_delete_arr[i].value==0){
                total_tiket++;
            }
        }  

        if(total_tiket==0){
            msg = 'Anda belum membuat tiket untuk event ini';
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

    function cekPublish(){
        Swal.fire({
            title: 'Kamu Yakin?',
            text: "harap cek secara teliti semua data sebelum mempublish, jadwal event tidak dapat diubah setelah event dipublish",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
               cek = validateForm();
               if(cek==true){
                    $("form[name=form_event]").submit();
               }
            }
        })
    }

    function validateFormTiket(){

        var status_data = true;
        var msg = '';

        if ($("#ticket-name").val() == '') {

            $("#group-ticket-name").addClass("has-warning has-feedback");
            $("#alert-ticket-name").removeClass( "hidden" );
            msg = 'Silahkan isi nama tiket';
            status_data = false;

        }else if($("#slot").val() == ''){

            $("#group-slot").addClass("has-warning has-feedback");
            $("#alert-slot").removeClass( "hidden" );
            msg = 'Silahkan isi jumlah tiket';
            status_data = false;

        }else if($("#price").val() == ''){

            $("#group-price").addClass("has-warning has-feedback");
            $("#alert-price").removeClass( "hidden" );
            msg = 'Silahkan isi harga tiket';
            status_data = false;

        }else if($("#ticket-description").val() == ''){

            $("#group-ticket-description").addClass("has-warning has-feedback");
            $("#alert-ticket-description").removeClass( "hidden" );
            msg = 'Silahkan isi deskripsi tiket';
            status_data = false;

        }else if($('#is-free').val()=='0'){
            if(parseFloat($('#price').val())<5000){
                $("#group-price").addClass("has-warning has-feedback");
                $("#alert-price").removeClass( "hidden" );
                msg = 'Harga tiket tidak boleh kurang dari Rp.5.000';
                status_data = false;
            }
        }else if($("#start-date-order").val() == ''){

            $("#group-start-date-order").addClass("has-warning has-feedback");
            $("#alert-start-date-order").removeClass( "hidden" );
            msg = 'Tanggal mulai penjualan harap diisi';
            status_data = false;
        }
        else if($("#end-date-order").val() == ''){

            $("#group-end-date-order").addClass("has-warning has-feedback");
            $("#alert-end-date-order").removeClass( "hidden" );
            msg = 'Tanggal berakhir penjualan harap diisi';
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

    function cekCategory(id){

        var cat_arr =  document.getElementsByName("category[]");
        var cat_length = cat_arr.length;             

        var total=0;
        for(i=0;i< cat_length;i++)
        {

            if(cat_arr[i].checked==true){
                total++;
            }

        } 

        if(total>3){

            cat_arr[id].checked = false

            Swal.fire(
              'Oopps!',
              'Pilih maksimal 3 kategori',
              'error'
            );
            return false;
        }

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

    function selectType(param){
        $('#is_online').val(param);
    }

    function cekFormPrice(param){

        cekForm(param);
        calculate();

    }

    function calculate(){

        $('.text-price').html($('#price').val());
        $('.text-total-price').html(parseFloat($('#price').val())+5000);
        $('.text-get-price').html(parseFloat($('#price').val()) - parseFloat($('#price').val()*3.5/100)); 

    }

    function openModal(param){

        <?php 
        $userpubliclog = $this->userpubliclog = $this->session->userdata("userpubliclog"); 
        if($userpubliclog['member_id']!=25){ ?>
        // if(param=='berbayar'){

        //     Swal.fire(
        //       'Oopps!',
        //       'Untuk sementara kami hanya mengijikan penggunaan fitur event gratis ',
        //       'error'
        //     )

        //     return false;
        // }
        <?php } ?>


        $('#form_modal').modal('show');
        
        if(param=='gratis'){
            $('#notes').addClass("hidden" );
            $('#group-price').addClass("hidden" );
            $('#price').val(0);
            $('#is-free').val('1');
        }else{
            $("#notes").removeClass("hidden");
            $('#group-price').removeClass("hidden" );
            $('#price').val(10000);
            $('#is-free').val('0');
        }

        calculate(); 

    }

    function saveTiket(){

        var cek  = validateFormTiket();
        if(cek){

            var param = {
                'ticket_name':$('#ticket-name').val(),
                'price':$('#price').val(),
                'slot':$('#slot').val(),
                'ticket_description':$('#ticket-description').val(),
                'is_free':$('#is-free').val(),
                'start_date_order':$('#start-date-order').val(),
                'end_date_order':$('#end-date-order').val()
            };

            $(".full-loader").removeClass("hidden");

            if($('#ticket-id').val()==0){
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url(); ?>member/form-tiket',
                    data: JSON.stringify(param),
                    contentType: "application/json",
                    dataType: "json",
                    success: function(result){

                        $(".full-loader").addClass("hidden");

                        if(result.status=='success'){
                            $('#list-tiket').append(result.data);

                            $('#ticket-id').val(0);
                            $('#ticket-name').val('');
                            $('#price').val(0);
                            $('#slot').val(10);
                            $('#ticket-description').val('');

                            $('#form_modal').modal('hide');
                        }else{
                            Swal({
                              type: 'error',
                              title: 'Oopps!',
                              text: result.msg
                            }).then((result) => {
                              window.location.href = "<?php echo base_url(); ?>member/rekening";
                            });
                        }

                    }
                });
            }else{

                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url(); ?>member/form-tiket/'+$('#ticket-id').val(),
                    data: JSON.stringify(param),
                    contentType: "application/json",
                    dataType: "json",
                    success: function(result){

                        $(".full-loader").addClass("hidden");
                        
                        if(result.status=='success'){
                            $('#tiket-'+$('#ticket-id').val()).html('');
                            $('#tiket-'+$('#ticket-id').val()).html(result.data);

                            $('#ticket-id').val(0);
                            $('#ticket-name').val('');
                            $('#price').val(0);
                            $('#slot').val(10);
                            $('#ticket-description').val('');

                            $('#form_modal').modal('hide');
                        }else{

                            Swal({
                              type: 'error',
                              title: 'Oopps!',
                              text: result.msg
                            }).then((result) => {
                              window.location.href = "<?php echo base_url(); ?>member/rekening";
                            });

                        }
                    }
                });

            }
        }

    }

    function removeTiket(id){

        Swal.fire({
            title: 'Kamu Yakin?',
            text: "Kamu yakin akan menghapus tiket ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                $('#is-delete-'+id).val(1);
                $('#tiket-'+id).addClass( "hidden" );
            }
        })
        
    }

    function editTiket(id,ticket_name,slot,price,ticket_description,start_date_order,end_date_order){

        $('#ticket-id').val(id);
        $('#ticket-name').val(ticket_name);
        $('#price').val(price);
        $('#slot').val(slot);
        $('#ticket-description').val(ticket_description);
        $('#start-date-order').val(start_date_order);
        $('#end-date-order').val(end_date_order);

        $('#start-date-order').datetimepicker({
            locale: 'id',
            showClear: true,
            format: 'YYYY-MM-DD HH:mm',
            minDate:start_date_order
        });

        $('#end-date-order').datetimepicker({
            locale: 'id',
            showClear: true,
            format: 'YYYY-MM-DD HH:mm',
            minDate:end_date_order
        });

        if(price>0){
            $("#notes").removeClass("hidden");
            $('#group-price').removeClass("hidden");
            $('#is-free').val('0');
        }else{
            $('#notes').addClass("hidden" );
            $('#group-price').addClass("hidden");
            $('#is-free').val('1');
        }

        $('#form_modal').modal('show');

    }

    function selectProvinsi(par){

        if($('#provinsi').val()!=''){

            var param = {
                provinsi:$('#provinsi').val(),
                kota:$('#kota').val()
            }

            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>member/event/get-kota",
                data: JSON.stringify(param),
                contentType: "application/json",
                dataType: "json",
                success: function(result){
                    $('#kota').html(result.data);
                    cekForm(par)
                }
            });
        }

    }
    selectProvinsi();

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
            url: "<?php echo base_url(); ?>event/upload-cover", 
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

    //CROP ICON
    function uploadIconCropper(input){

        var reader;
        var imageFile = input.files[0];

        if (imageFile != null) {
            if (imageFile.size > 500000) {
                Swal.fire(
                  'Oopps!',
                  'Ukuran File Lebih dari 500 KB',
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
            url: "<?php echo base_url(); ?>event/upload-icon", 
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

    var start_date = "<?php echo isset($data->start_date)?$data->start_date:date('Y-m-d H:i'); ?>";
    $('.datetime-picker-start_date').datetimepicker({
        locale: 'id',
        showClear: true,
        format: 'YYYY-MM-DD HH:mm',
        // minDate: 0,
        minDate: start_date
    });

    var end_date = "<?php echo isset($data->end_date)?$data->end_date:date('Y-m-d H:i'); ?>";
    $('.datetime-picker-end_date').datetimepicker({
        locale: 'id',
        showClear: true,
        format: 'YYYY-MM-DD HH:mm',
        // minDate: 0,
        minDate: end_date
    });

    var minDate = "<?php echo date('Y-m-d H:i'); ?>";
    $('#start-date-order').datetimepicker({
        locale: 'id',
        showClear: true,
        format: 'YYYY-MM-DD HH:mm',
        minDate: minDate,
    });

    $('#end-date-order').datetimepicker({
        locale: 'id',
        showClear: true,
        format: 'YYYY-MM-DD HH:mm',
        minDate: new Date(),
    });


</script>
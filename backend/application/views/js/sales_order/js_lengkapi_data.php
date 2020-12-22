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

<script src="<?php echo base_url('assets/'); ?>js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap-datetimepicker.min.css">

<script>

    function validateForm(){

        var status_data = true;
        var msg = '';

        if($("#nama_pengantin_pria").val() == '' || $("#nama_pengantin_pria").val() == ' ') {

            $("#group-nama_pengantin_pria").addClass("has-warning has-feedback");
            $("#alert-nama_pengantin_pria").removeClass( "hidden" );
            msg = 'Silahkan isi nama lengkap pengantin pria';
            status_data = false;

        }else if($("#nama_panggilan_pengantin_pria").val() == '' || $("#nama_panggilan_pengantin_pria").val() == ' '){

            $("#group-nama_panggilan_pengantin_pria").addClass("has-warning has-feedback");
            $("#alert-nama_panggilan_pengantin_pria").removeClass( "hidden" );
            msg = 'Silahkan isi nama panggilan pengantin pria';
            status_data = false;

        }else if($("#pengantin_pria_anank_ke").val() == '' || $("#pengantin_pria_anank_ke").val() == ' '){

            $("#group-pengantin_pria_anank_ke").addClass("has-warning has-feedback");
            $("#alert-pengantin_pria_anank_ke").removeClass( "hidden" );
            msg = 'Silahkan isi anak ke';
            status_data = false;
            
        }else if($("#nama_ibu_pengantin_pria").val() == '' || $("#nama_ibu_pengantin_pria").val() == ' '){

            $("#group-nama_ibu_pengantin_pria").addClass("has-warning has-feedback");
            $("#alert-nama_ibu_pengantin_pria").removeClass( "hidden" );
            msg = 'Silahkan isi nama ibu pengantin pria';
            status_data = false;
            
        }else if($("#nama_ayah_pengantin_pria").val() == '' || $("#nama_ayah_pengantin_pria").val() == ' '){

            $("#group-nama_ayah_pengantin_pria").addClass("has-warning has-feedback");
            $("#alert-nama_ayah_pengantin_pria").removeClass( "hidden" );
            msg = 'Silahkan isi nama ayah pengantin pria';
            status_data = false;
            
        }else if($("#nama_pengantin_wanita").val() == '' || $("#nama_pengantin_wanita").val() == ' ') {

            $("#group-nama_pengantin_wanita").addClass("has-warning has-feedback");
            $("#alert-nama_pengantin_wanita").removeClass( "hidden" );
            msg = 'Silahkan isi nama lengkap pengantin wanita';
            status_data = false;

        }else if($("#nama_panggilan_pengantin_wanita").val() == '' || $("#nama_panggilan_pengantin_wanita").val() == ' '){

            $("#group-nama_panggilan_pengantin_wanita").addClass("has-warning has-feedback");
            $("#alert-nama_panggilan_pengantin_wanita").removeClass( "hidden" );
            msg = 'Silahkan isi nama panggilan pengantin wanita';
            status_data = false;

        }else if($("#pengantin_wanita_anank_ke").val() == '' || $("#pengantin_wanita_anank_ke").val() == ' '){

            $("#group-pengantin_wanita_anank_ke").addClass("has-warning has-feedback");
            $("#alert-pengantin_wanita_anank_ke").removeClass( "hidden" );
            msg = 'Silahkan isi anak ke';
            status_data = false;
            
        }else if($("#nama_ibu_pengantin_wanita").val() == '' || $("#nama_ibu_pengantin_wanita").val() == ' '){

            $("#group-nama_ibu_pengantin_wanita").addClass("has-warning has-feedback");
            $("#alert-nama_ibu_pengantin_wanita").removeClass( "hidden" );
            msg = 'Silahkan isi nama ibu pengantin wanita';
            status_data = false;
            
        }else if($("#nama_ayah_pengantin_wanita").val() == '' || $("#nama_ayah_pengantin_wanita").val() == ' '){

            $("#group-nama_ayah_pengantin_wanita").addClass("has-warning has-feedback");
            $("#alert-nama_ayah_pengantin_wanita").removeClass( "hidden" );
            msg = 'Silahkan isi nama ayah pengantin wanita';
            status_data = false;
            
        }else if($("#tanggal_akad").val() == '' || $("#tanggal_akad").val() == ' ') {

            $("#group-tanggal_akad").addClass("has-warning has-feedback");
            $("#alert-tanggal_akad").removeClass( "hidden" );
            msg = 'Silahkan isi tanggal akad nikah';
            status_data = false;

        }else if($("#tempat_akad").val() == '' || $("#tempat_akad").val() == ' '){

            $("#group-tempat_akad").addClass("has-warning has-feedback");
            $("#alert-tempat_akad").removeClass( "hidden" );
            msg = 'silahkan isi lokasi akad nikah';
            status_data = false;

        }else if($("#tanggal_resepsi").val() == '' || $("#tanggal_resepsi").val() == ' '){

            $("#group-tanggal_resepsi").addClass("has-warning has-feedback");
            $("#alert-tanggal_resepsi").removeClass( "hidden" );
            msg = 'Silahkan isi tanggal resepsi';
            status_data = false;
            
        }else if($("#tempat_resepsi").val() == '' || $("#tempat_resepsi").val() == ' '){

            $("#group-tempat_resepsi").addClass("has-warning has-feedback");
            $("#alert-tempat_resepsi").removeClass( "hidden" );
            msg = 'Silahkan isi lokasi resepsi';
            status_data = false;
            
        }else if($("#link_web").val() == '' || $("#link_web").val() == ' '){

            $("#group-link_web").addClass("has-warning has-feedback");
            $("#alert-link_web").removeClass( "hidden" );
            msg = 'Silahkan isi link undangan website';
            status_data = false;
            
        }

        var param = {
            'link_web':$('#link_web').val(),
        };

        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>sales-order/cek-link/<?php echo $sales_order_id; ?>',
            data: JSON.stringify(param),
            contentType: "application/json",
            dataType: "json",
            success: function(result){
                
                if(result.status == 'success'){ 

                    $( "#target" ).submit();
                    return true;   

                }else{ 

                    if(status_data==false){
                        Swal.fire(
                          'Oopps!',
                          msg,
                          'error'
                        );
                        return false;
                    }else{

                        Swal.fire(
                          'Oopps!',
                          result.msg,
                          'error'
                        );
                        return false;
                    }
                } 

            }
        });
 
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


    var tanggal_pertemuan_pertama = "<?php echo isset($data->tanggal_pertemuan_pertama)?$data->tanggal_pertemuan_pertama:date('Y-m-d H:i'); ?>";
    $('.datetime-tanggal_pertemuan_pertama').datetimepicker({
        locale: 'id',
        showClear: true,
        format: 'YYYY-MM-DD HH:mm',
        // minDate: 0,
        date: tanggal_pertemuan_pertama
    });

    var tanggal_kencan_pertama = "<?php echo isset($data->tanggal_kencan_pertama)?$data->tanggal_kencan_pertama:date('Y-m-d H:i'); ?>";
    $('.datetime-tanggal_kencan_pertama').datetimepicker({
        locale: 'id',
        showClear: true,
        format: 'YYYY-MM-DD HH:mm',
        // minDate: 0,
        date: tanggal_kencan_pertama
    });

    var tanggal_lamaran = "<?php echo isset($data->tanggal_lamaran)?$data->tanggal_lamaran:date('Y-m-d H:i'); ?>";
    $('.datetime-tanggal_lamaran').datetimepicker({
        locale: 'id',
        showClear: true,
        format: 'YYYY-MM-DD HH:mm',
        // minDate: 0,
        date: tanggal_lamaran
    });

    var tanggal_akad_story = "<?php echo isset($data->tanggal_akad_story)?$data->tanggal_akad_story:date('Y-m-d H:i'); ?>";
    $('.datetime-tanggal_akad_story').datetimepicker({
        locale: 'id',
        showClear: true,
        format: 'YYYY-MM-DD HH:mm',
        // minDate: 0,
        date: tanggal_akad_story
    });

    var tanggal_akad = "<?php echo isset($data->tanggal_akad)?$data->tanggal_akad:date('Y-m-d H:i'); ?>";
    $('.datetime-tanggal_akad').datetimepicker({
        locale: 'id',
        showClear: true,
        format: 'YYYY-MM-DD HH:mm',
        // minDate: 0,
        date: tanggal_akad
    });

    var tanggal_resepsi = "<?php echo isset($data->tanggal_resepsi)?$data->tanggal_resepsi:date('Y-m-d H:i'); ?>";
    $('.datetime-tanggal_resepsi').datetimepicker({
        locale: 'id',
        showClear: true,
        format: 'YYYY-MM-DD HH:mm',
        // minDate: 0,
        date: tanggal_resepsi
    });



</script>
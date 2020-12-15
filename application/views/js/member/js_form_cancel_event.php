<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/uploader/plupload.queue.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/wysihtml5/toolbar.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/application.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>crop/js/cropper.js"></script>

<script src="<?php echo base_url('assets_member/'); ?>js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets_member/'); ?>css/bootstrap-datetimepicker.min.css">

<script>

    function validateForm(){

        var status_data = true;
        var msg = '';


        if($("#title").val() == ''){

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

        }else if($('#reason').val()==''){

            msg = 'Alasan wajib diisi';
            status_data = false;

        }else if($('#reason').val().length<20){

            msg = 'Tulis alasan minimal 20 karakter';
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

    $('.datetime-picker').datetimepicker({
        locale: 'id',
        showClear: true,
        format: 'YYYY-MM-DD HH:mm',
        // minDate: 0,
        minDate: new Date(),
    });

</script>
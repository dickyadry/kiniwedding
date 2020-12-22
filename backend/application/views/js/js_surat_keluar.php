<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<script type="text/javascript">
    $(document).ready(function() {
    	$('.datetime-picker').datetimepicker({
            locale: 'id',
            format: 'DD-MM-YYYY'
        });
    });

    function cek_nomor_surat(){

    	var asal_surat = $('#asal_surat').val();
        var kepada = $('#kepada').val();
        var tipe_doc = $('#tipe_doc').val();
        var tipe_surat = $('#tipe_surat').val();

        $.ajax({
            url: "<?php echo base_url(); ?>surat/keluar/cek-nomor-surat",
            type: 'POST',
            data: { asal_surat:asal_surat, kepada: kepada, tipe_doc:tipe_doc, tipe_surat:tipe_surat},
            dataType: 'json',
            success: function(result) {
                if (result.status == 'success') {
   					$('#no_surat').val(result.no_surat);
                } else {
                    Swal.fire({
	                    title: 'Warning',
	                    text: "Asal surat & tujuan tidak boleh kosong",
	                    type: 'error'
	                });
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                Swal.fire({
                    title: 'Warning',
                    text: "Asal surat & tujuan tidak boleh kosong",
                    type: 'error'
                });
            }
        });

    }

    
    function select_type(){ 

        var tipe_surat = $('#tipe_surat').val();
        var selected = "<?php (isset($data->id_kepada))?$data->id_kepada:''; ?>";
        var asal_surat = $('#asal_surat').val();
        var kepada = $('#kepada').val();
        
        $.ajax({
            url: "<?php echo base_url(); ?>bagian/filter?type="+tipe_surat+'&selected'+selected,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                if (result.status == 'success') {
                    $('#kepada').html(result.data);
                    if(asal_surat!="" && kepada!="" && asal_surat!=undefined && kepada!=undefined){
                        cek_nomor_surat();
                    }
                } else {
                    Swal.fire({
                        title: 'Warning',
                        text: "Asal surat & tujuan tidak boleh kosong",
                        type: 'error'
                    });
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                Swal.fire({
                    title: 'Warning',
                    text: "Asal surat & tujuan tidak boleh kosong",
                    type: 'error'
                });
            }
        });

    }
    select_type();

</script>
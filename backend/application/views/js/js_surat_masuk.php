<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<script type="text/javascript">
    $(document).ready(function() {
    	$('.datetime-picker').datetimepicker({
            locale: 'id',
            format: 'DD-MM-YYYY'
        });
    });
    function select_type(){ 

        var tipe_surat = $('#tipe_surat').val();
        var selected = "<?php (isset($data->id_asal_surat))?$data->id_asal_surat:''; ?>";

        $.ajax({
            url: "<?php echo base_url(); ?>bagian/filter?type="+tipe_surat+'&selected'+selected,
            type: 'GET',
            dataType: 'json',
            success: function(result) {
                if (result.status == 'success') {
                    $('#asal_surat').html(result.data);
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
    // select_type();

</script>
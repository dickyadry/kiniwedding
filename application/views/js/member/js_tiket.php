<script>

    function deleteData(id){

        Swal.fire({
            title: 'Kamu Yakin?',
            text: "Kamu yakin akan membatalkan pesanan ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                window.location.href = "<?php echo base_url(); ?>member/tiket/delete/"+id;
            }
        })
        
    }

</script>
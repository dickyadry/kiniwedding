
<script type="text/javascript">
function selectStatus(){
    $("form[name=form_search]").submit();
}

function confirmPembayaran(id){

    Swal.fire({
        title: 'Kamu Yakin?',
        text: "Kamu yang akan mengkonfirmasi pembayaran pemesanan tiket ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            
            $(".full-loader").removeClass("hidden");

            $.ajax({ 
                url: "<?php echo base_url(); ?>member/sales-order/update-status/"+id, 
                type: 'GET', 
                dataType: 'json',
                contentType: false, 
                processData: false, 
                success: function(r){

                    $(".full-loader").addClass("hidden");

                    if(r.status == 'success'){ 

                        Swal({
                            type: 'success',
                            title: 'Success',
                            text: "Pemesanan tiket berhasil dikonfirmasi",
                        }).then((result) => {
                            window.location.href = "<?php echo base_url(); ?>member/sales-order";
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

function restorePembayaran(id){

    Swal.fire({
        title: 'Kamu Yakin?',
        text: "Kamu yang akan mengubah kembali status pemesanan ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            
            $(".full-loader").removeClass("hidden");

            $.ajax({ 
                url: "<?php echo base_url(); ?>member/sales-order/restore/"+id, 
                type: 'GET', 
                dataType: 'json',
                contentType: false, 
                processData: false, 
                success: function(r){

                    $(".full-loader").addClass("hidden");
                    
                    if(r.status == 'success'){ 

                        Swal({
                            type: 'success',
                            title: 'Success',
                            text: "Pemesanan tiket berhasil dikonfirmasi",
                        }).then((result) => {
                            window.location.href = "<?php echo base_url(); ?>member/sales-order";
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

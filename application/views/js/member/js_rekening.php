<script>

    function validateForm(){

        var status_data = true;
        var msg = '';

        if ($("#bank_name").val() == '') {

            $("#group-bank_name").addClass("has-warning has-feedback");
            $("#alert-bank_name").removeClass( "hidden" );
            msg = 'Silahkan isi nama bank';
            status_data = false;

        }else if($("#account_name").val() == ''){

            $("#group-account_name").addClass("has-warning has-feedback");
            $("#alert-account_name").removeClass( "hidden" );
            msg = 'Silahkan isi nama pemilik rekening';
            status_data = false;

        }else if($("#account_number").val() == ''){

            $("#group-account_number").addClass("has-warning has-feedback");
            $("#alert-account_number").removeClass( "hidden" );
            msg = 'Silahkan isi nomor rekening';
            status_data = false;

        }else if($("#branch").val() == ''){

            $("#group-branch").addClass("has-warning has-feedback");
            $("#alert-branch").removeClass( "hidden" );
            msg = 'Silahkan isi kantor cabang';
            status_data = false;

        }else if($("#city").val() == ''){

            $("#group-city").addClass("has-warning has-feedback");
            $("#alert-city").removeClass( "hidden" );
            msg = 'Silahkan isi kota';
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

    function deleteAccount(id){

        Swal.fire({
            title: 'Kamu Yakin?',
            text: "Kamu yakin akan menghapus rekening ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                window.location.href = "<?php echo base_url(); ?>member/rekening/delete/"+id;
            }
        })
        
    }


</script>
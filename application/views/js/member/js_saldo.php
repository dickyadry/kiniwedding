<script>

    function validateForm(){

        var status_data = true;
        var msg = '';

        if ($("#nominal").val() == '') {

            msg = 'Nominal pencairan tidak boleh kosong';
            status_data = false;

        }else if($("#nominal").val() < 10000){

            msg = 'Minal pencairan Rp. 10.000';
            status_data = false;

        }else if($("#nominal").val() > $("#saldo").val()){

            msg = 'Saldo anda tidak mencukupi';
            status_data = false;

        }else if($("#password").val() == ''){

            msg = 'Silahkan masukan password anda';
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


</script>
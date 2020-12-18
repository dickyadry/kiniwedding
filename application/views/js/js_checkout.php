<!-- <link href="<?php echo base_url('assets_member/'); ?>css/londinium-theme.css" rel="stylesheet" type="text/css"> -->

<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/jquery_1.10.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/jquery-ui_1.10.2.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/moment.min.js"></script>

<script src="<?php echo base_url('assets_member/'); ?>js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets_member/'); ?>css/bootstrap-datetimepicker.min.css">

<script type="text/javascript">
    function validateForm(){ 

        var ticket_id_arr =  document.getElementsByName("ticket_id[]");
        var name_arr =  document.getElementsByName("name[]");
        var email_arr =  document.getElementsByName("email[]");
        var phone_arr =  document.getElementsByName("phone[]");
        var name_arr_length = name_arr.length;

        var product_id =  document.getElementsByName("product_id")[0].value;
        var number_payment =  document.getElementsByName("number_payment")[0].value;

        var sub_total =  document.getElementsByName("sub_total")[0].value;
        var biaya_layanan =  document.getElementsByName("biaya_layanan")[0].value;
        var bukti_transfer =  document.getElementsByName("bukti_transfer")[0].value;
        var grand_total =  document.getElementsByName("grand_total")[0].value;
        
        var payment_type = $('#payment_type').val();
        var bank_or_store = $('#bank_or_store').val();

        if(payment_type=='ewallet'){
            if(number_payment.length>7 &&number_payment.length<=15){

            }else{
                Swal.fire(
                  'Oopps!',
                  'Silahkan periksa kembali nomor '+bank_or_store+' anda',
                  'error'
                );
                return false;
            }
        }

        var peserta = [];

        var msg = '';
        var status_data = true;

        for(i=0;i<name_arr_length;i++){

            var parameter = {};

            if(name_arr[i].value==""){
                 msg = 'Nama peserta tidak boleh kosong';
                status_data = false;
                break;
            }else if(email_arr[i].value==""){
                msg = 'Email peserta tidak boleh kosong';
                status_data = false;
                break;
            }else if(phone_arr[i].value==""){
                 msg = 'No Handphone peserta tidak boleh kosong';
                status_data = false;
                break;
            }

            parameter.name = name_arr[i].value;
            parameter.email = email_arr[i].value;
            parameter.phone = phone_arr[i].value;

            peserta.push(parameter); 

        }    

        parameter_data = {
            product_id:product_id,
            sub_total:sub_total,
            biaya_layanan:biaya_layanan,
            grand_total:grand_total,
            bukti_transfer:bukti_transfer,
            payment_type:payment_type,
            number_payment:number_payment,
            bank_or_store:bank_or_store
        }

        if(grand_total>0){
            if(payment_type==""){
                msg = 'Silahkan pilih metode pembayaran';
                status_data = false;
            }   
        }

        if(status_data==false){
            Swal.fire(
              'Oopps!',
              msg,
              'error'
            );
            return false;
        } 

        $(".full-loader").removeClass("hidden");
        
        $.ajax({
        type: "POST",
            url: '<?php echo base_url(); ?>cart/set-order',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data:JSON.stringify(parameter_data),
            success: function(result){

                if(result.status=='error'){
                    $(".full-loader").addClass("hidden");
                    Swal({
                      type: 'error',
                      title: 'Oops...',
                      text: result.msg,
                    });
                    return false;
                }else if(result.status=='success' && result.payment_type=='ewallet'){
                    if(result.bank_or_store=='DANA' || result.bank_or_store=='LINKAJA'){
                        window.location.href = result.checkout_url
                    }else{
                        window.location.href = "<?php echo base_url(); ?>completeorder/"+result.id;
                    }

                }else{

                    window.location.href = "<?php echo base_url(); ?>completeorder/"+result.id;

                }
            }
        });

        return false;
     
    }

    function selectPaymentType(id,bank_or_store,payment_type,fee,fee_percente){ 

        $('.checked').removeClass('fa fa-check-circle');
        
        $('.'+bank_or_store+'_'+id).addClass('fa fa-check-circle');

        $('.payment_type').html(bank_or_store);
        if(bank_or_store=='MANUAL'){
            $('.box-payment-number').addClass('hidden');
            $('.box-manual-payment').removeClass('hidden');
        }else{
            $('.box-payment-number').removeClass('hidden');
            $('.box-manual-payment').addClass('hidden');
            
        }

        $('.box-payment-notes').addClass('hidden');
        if(bank_or_store=='QRIS' || bank_or_store=='BNI'){
            $('.box-payment-notes').removeClass('hidden');
            $('.box-payment-number').addClass('hidden');
            $('.box-manual-payment').addClass('hidden');

            if(bank_or_store=='QRIS'){
                $('.notes').html("Anda menggunakan metode pembayaran <b>QRIS</b><br>Silahkan lanjutkan keproses pambayaran, siapkan aplikasi pembayaran anda dan segera lalukan scan QR Code ");
            }else if(bank_or_store=='BNI'){
                $('.notes').html("Anda menggunakan metode pembayaran <b>Virtual Account</b><br>Silahkan lanjutkan keproses pambayaran untuk menyelesaikan transaksi");
            }
        }

        var sub_total = $('#sub_total').val();

        if(fee_percente>0){
            var biaya_layanan = (sub_total*fee_percente/100) + fee;
        }else{
            var biaya_layanan = fee;
        }

        $('#grand_total').val(parseFloat(sub_total)+parseFloat(biaya_layanan));
        $('#biaya_layanan').val(biaya_layanan);

        var grand_total = parseFloat(biaya_layanan)+parseFloat(sub_total);

        var biaya_layanan_text = biaya_layanan.toLocaleString( 'de-DE' )
        $('#biaya_layanan_text').html('Rp. '+biaya_layanan_text);

        grand_total = grand_total.toLocaleString( 'de-DE' )
        $('#grand_total_text').html('Rp. '+grand_total);

        $('#payment_type').val(payment_type);
        $('#bank_or_store').val(bank_or_store);

    }

    function uploadBuktiTransfer(){

        var msg = '';
        var status_data = true;

        var value = document.getElementsByName("bukti_transfer_org");

        var size = (value[0].files[0].size);
        var type = (value[0].files[0].type);

       if(size>1000000){
            msg = "Ukuran File Lebih dari 1 MB";
            status_data = false;
        }else if(type!='image/jpeg' && type!='image/png' && type!='application/pdf'){
            msg = "Jenis file yang diizinkan (PDF,PNG,JPG)";
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

        var files = value[0].files[0];
        var form_data = new FormData();                  
        form_data.append('file', files);

        $(".full-loader").removeClass("hidden");

        $.ajax({ 
            url: "<?php echo base_url(); ?>cart/upload-bukti-transfer", 
            type: 'post', 
            data: form_data, 
            dataType: 'json',
            type: 'POST',
            contentType: false, 
            processData: false, 
            success: function(response){

                $(".full-loader").addClass("hidden");

                if(response.status == 'success'){ 

                    document.getElementById('bukti_transfer').value = response.data;

                    Swal.fire(
                      'Success',
                      'File berhasil diupload',
                      'success'
                    )
                } 
                else{ 
                    Swal.fire(
                      'Oopps!',
                      'File gagal diupload',
                      'error'
                    )
                } 
            }, 
        }); 

    }

</script>


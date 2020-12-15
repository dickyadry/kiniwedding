<script type="text/javascript">
    function validateForm(){ 

        <?php if(isset($custom_form)){ ?>
            <?php foreach ($custom_form as $key => $value) { ?>
                <?php if($value->type!='checkbox' && $value->type!='radiobox'){ ?>
                    var field_<?php echo $value->field; ?> =  document.getElementsByName("<?php echo $value->field; ?>");
                <?php }else{ ?>
                    var field_<?php echo $value->field; ?> =  document.getElementsByName("<?php echo $value->field; ?>[]");
                <?php } ?>
            <?php } ?>
        <?php } ?>


        var msg = '';
        var status_data = true;

        var parameter = {};

        if(document.getElementsByName("name")[0].value==""){
             msg = 'Nama peserta tidak boleh kosong';
            status_data = false;
            break;
        }else if(document.getElementsByName("email")[0].value==""){
            msg = 'Email peserta tidak boleh kosong';
            status_data = false;
            break;
        }else if(document.getElementsByName("phone")[0].value==""){
             msg = 'No Handphone peserta tidak boleh kosong';
            status_data = false;
            break;
        }

        <?php if(isset($custom_form)){ ?>
            <?php foreach ($custom_form as $key => $value) { ?>
                <?php if($value->is_required==1 && $value->type!='checkbox' && $value->type!='radiobox'){ ?>
                        if(field_<?php echo $value->field; ?>.value==""){
                            msg = "<?php echo $value->question; ?>"+' tidak boleh kosong';
                            status_data = false;
                            break;
                        }
                <?php }else if($value->is_required==1){ ?>

                    msg = "<?php echo $value->question; ?>"+' tidak boleh kosong';
                    status_data = false;
                    for(no=0; no<field_<?php echo $value->field; ?>.length;no++){
                        if(field_<?php echo $value->field; ?>[no].checked==true){
                            status_data = true;
                            break;
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

                <?php } ?>

                <?php if($value->type!='checkbox' && $value->type!='radiobox'){ ?>
                    parameter.<?php echo $value->field; ?> = field_<?php echo $value->field; ?>.value;
                <?php }else{ ?>

                    var arr_data = [];
                    for(no=0; no<field_<?php echo $value->field; ?>.length;no++){
                        if(field_<?php echo $value->field; ?>[no].checked==true){
                            arr_data.push(field_<?php echo $value->field; ?>[no].value);
                        }
                    }
                    parameter.<?php echo $value->field; ?> = arr_data;

                <?php } ?>

            <?php } ?>
        <?php } ?>

            parameter.ticket_id = ticket_id_arr[i].value;
            parameter.name = document.getElementsByName("name")[0].value;
            parameter.email = document.getElementsByName("email")[0].value;
            parameter.phone = document.getElementsByName("phone")[0].value;

            peserta.push(parameter); 


        parameter_data = {
            peserta:peserta,
        }

        if(status_data==false){
            Swal.fire(
              'Oopps!',
              msg,
              'error'
            );
            return false;
        } 

        $.ajax({
        type: "POST",
            url: '<?php echo base_url(); ?>event/add-data-custom-form',
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data:JSON.stringify(parameter_data),
            success: function(result){

                if(result.status=='error'){
                    Swal({
                      type: 'error',
                      title: 'Oops...',
                      text: result.msg,
                    });
                    return false;
                }else{
                    
                    window.location.href = "<?php echo base_url(); ?>";

                }
            }
        });

        return false;
     
    }

    function selectPaymentType(id,bank_or_store,payment_type,fee,fee_percente){ 

        $('.checked').removeClass('icon-checkmark-circle');
        $('.'+bank_or_store+'_'+id).addClass('icon-checkmark-circle');

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

    function payment(result){

        var requestBody = 
        {
            transaction_details: {
                // gross_amount: result.amount,
                // order_id: result.order_id 
                gross_amount: 10000,
                order_id: '123131231111' 
            },
            item_details: [{
                "id": "ITEM1",
                "price": 10000,
                "quantity": 1,
                "name": "Midtrans Bear",
                "brand": "Midtrans",
                "category": "Toys",
                "merchant_name": "Midtrans"
            }],
            customer_details: {
                first_name: "<?php echo $this->userpubliclog['name']; ?>",
                email: "<?php echo $this->userpubliclog['email']; ?>",
                phone: "<?php echo $this->userpubliclog['phone']; ?>"
            },
            credit_card: {
                secure: true
            }

        }
        
        getSnapToken(requestBody, function(response){
            var response = JSON.parse(response);

            snap.pay(response.token,{
                language: 'id',
                skipOrderSummary:true,
                showOrderId :false,
                onSuccess: function(res){

                    console.log(res);
                    return false;
                    // document.getElementById('id').value = res.id;
                    // document.getElementById('order_id').value = res.order_id;
                    // document.getElementById('pdf_url').value = res.pdf_url;

                    // var x = document.getElementsByName('formorderdetail');
                    // x[0].submit(); 

                },
                onPending: function(res){

                    // document.getElementById('id').value = res.id;
                    // document.getElementById('order_id').value = res.order_id;
                    // document.getElementById('pdf_url').value = res.pdf_url;

                    // var x = document.getElementsByName('formorderdetail');
                    // x[0].submit(); 

                    console.log(res);
                    return false;

                },
                onError: function(res){ 

                    // window.location.href = "<?php echo base_url(); ?>member/tiket";
                    console.log(res);
                    return false;

                },
                onClose: function(){

                    // console.log('customer closed the popup without finishing the payment');
                    // window.location.href = "<?php echo base_url(); ?>member/tiket";

                }
            });
        });

        return false;

    }

    function getSnapToken(requestBody, callback) {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function() {
          if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            callback(xmlHttp.responseText);
          }
        }
        xmlHttp.open("post", "<?php echo base_url(); ?>midtrans/checkout.php");
        xmlHttp.send(JSON.stringify(requestBody));
    }
</script>


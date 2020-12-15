<script type="text/javascript">
    function validateForm(){ 

        <?php if(isset($multiple_form)){ ?>
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

        <?php if(isset($multiple_form)){ ?>
            <?php foreach ($multiple_form as $key => $value) { ?>
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

  
</script>


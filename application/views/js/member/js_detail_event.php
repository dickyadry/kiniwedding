<script type="text/javascript">

    function fb_share(title,url) {
        u = url;
        t = title;
        window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;
    }

    function tweet_share(status) {
        u = status;
        window.open('https://twitter.com/intent/tweet?text='+encodeURIComponent(u),'sharer','toolbar=0,status=0,width=626,height=436');return false;
    }

    function clickToCopy(){

        var link = 'https://eventstack.id/r/'+document.getElementById("simple_link").value ;

        var tempInput = document.createElement("input");
        tempInput.style = "position: absolute; left: -1000px; top: -1000px";
        tempInput.value = link;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        Swal({
            type: 'success',
            title: 'Link berhasil dicopy',
            text: link
        });
          
    }

    function copyLink(id){

        var link = "<?php echo base_url(); ?>mf/"+id ;

        var tempInput = document.createElement("input");
        tempInput.style = "position: absolute; left: -1000px; top: -1000px";
        tempInput.value = link;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        Swal({
            type: 'success',
            title: 'Link berhasil dicopy',
            text: link
        });
          
    }


    function cehPublish(){
        Swal.fire({
            title: 'Kamu Yakin?',
            text: "harap cek secara teliti semua data sebelum mempublish, jadwal event tidak dapat diubah setelah event dipublish",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                $("form[name=form_event]").submit();
            }
        })
    }

    function closedEvent(){
        Swal.fire({
            title: 'Kamu Yakin?',
            text: "Dengan mengklik YA maka event anda akan berubah status menjadi CLOSED",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                $("form[name=closed_event]").submit();
            }
        })
    }

    function updateLink(){
        $("form[name=form_link]").submit();
    }

    function warning(){
        Swal({
            type: 'error',
            title: 'Oops...',
            text: 'Perubahan jadwal event hanya dapat dilakukan 5 hari sebelum tanggal mulai event'
        })
     }

    function addMultipleForm(){
        $('#multiple_form_modal').modal('show');
        $('#multiple_form_id').val(0);
    }

    function editMultipleForm(id,name,description){

        $('#multiple_form_modal').modal('show');
        $('#multiple_form_id').val(id);
        $('#name').val(name);
        $('#description').val(description);


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

    function validateForm(){

        var status_data = true;
        var msg = '';

        if ($("#name").val() == '') {

            $("#group-name").addClass("has-warning has-feedback");
            $("#alert-name").removeClass( "hidden" );
            msg = 'Silahkan isi nama formulir';
            status_data = false;

        }else if($("#description").val() == ''){

            $("#group-description").addClass("has-warning has-feedback");
            $("#alert-description").removeClass( "hidden" );
            msg = 'Silahkan isi deskripsi formulir';
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

    function submitSave(){

        var cek  = validateForm();
        if(cek){

            var param = {
                'product_id':"<?php echo encrypt_decrypt('encrypt',$data->id); ?>",
                'multiple_form_id':$('#multiple_form_id').val(),
                'name':$('#name').val(),
                'description':$('#description').val(),
            };

            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>member/event/create-multiple-form',
                data: JSON.stringify(param),
                contentType: "application/json",
                dataType: "json",
                success: function(result){
                    
                    Swal({
                        type: 'success',
                        title: 'Success',
                        text: 'Formulir berhasil dibuat',
                    }).then((res) => {
                        window.location.href = "<?php echo base_url(); ?>member/event/multiple-form/"+result.multiple_form_id;
                    });

                }
            });
        }

    }

    function deleteMultipleForm(id){

        Swal.fire({
            title: 'Kamu Yakin?',
            text: "Kamu yakin akan menghapus formulir ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                
                $.ajax({ 
                    url: "<?php echo base_url(); ?>member/event/remove-multiple-form/"+id, 
                    type: 'GET', 
                    dataType: 'json',
                    contentType: false, 
                    processData: false, 
                    success: function(r){
                        if(r.status == 'success'){ 

                            Swal({
                                type: 'success',
                                title: 'Success',
                                text: "Data berhasil dihapus",
                            }).then((result) => {
                                window.location.href = "<?php echo base_url(); ?>member/event/detail-event/<?php echo encrypt_decrypt('encrypt',$data->id); ?>";
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
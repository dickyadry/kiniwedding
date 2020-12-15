<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/uploader/plupload.queue.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/wysihtml5/toolbar.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/application.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/charts/sparkline.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/forms/switch.min.js"></script>
		
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/plugins/interface/moment.js"></script>


<script type="text/javascript" src="<?php echo base_url('assets_member/'); ?>js/moment.min.js"></script>

<script src="<?php echo base_url('assets_member/'); ?>js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets_member/'); ?>css/bootstrap-datetimepicker.min.css">

<script>

    function addAnswer(){

		let id = Math.random().toString(36).substring(7);

		var answer_arr =  document.getElementsByName("answer[]");
        var answer_length = answer_arr.length;  

    	var html = '<div class="form-group" id="answer_'+id+'"><div class="col-sm-11 col-xs-11"><input type="text" name="answer[]" class="form-control" placeholder="Pilihan '+(answer_length+1)+'"></div><div class="col-md-1 col-xs-1 text-center"><span class="icon-remove4" onclick=removeAnswer("'+id+'")></span></div></div>';

    	$('#answer').append(html);

    }

    function editAnswer(id,value){

		var answer_arr =  document.getElementsByName("answer[]");
        var answer_length = answer_arr.length;  

    	var html = '<div class="form-group" id="answer_'+id+'"><div class="col-sm-11 col-xs-11"><input type="text" name="answer[]" class="form-control" placeholder="Pilihan '+(answer_length+1)+'" value="'+value+'"></div><div class="col-md-1 col-xs-1 text-center"><span class="icon-remove4" onclick=removeAnswer("'+id+'")></span></div></div>';

    	$('#answer').append(html);

    }

    function removeAnswer(id){
    	$('#answer_'+id).remove();
    }

    function selectType(){
    	if($('#type').val()=='input' || $('#type').val()=='textarea' || $('#type').val()=='date' || $('#type').val()=='file'){

    		$('#input-description').removeClass("hidden");
            $('#button-answer').addClass("hidden");
            $('#answer').html('');

    	}else{

    		// $('#input-description').addClass("hidden");
            $('#button-answer').removeClass("hidden");
            // addAnswer();

    	}
    }

    function cekForm(param){

        if ($("#"+param).val() == '') {

            $("#group-"+param).addClass("has-warning has-feedback");
            return false;

        }else{

            $("#group-"+param).removeClass("has-warning has-feedback");

        }

    }

    function validateForm(){

        var status_data = true;
        var msg = '';

        if ($("#question").val() == '') {

            $("#group-question").addClass("has-warning has-feedback");
            msg = 'Silahkan isi judul pertanyaan';
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


    function openModal(){
	    $('#form_modal').modal('show');
        $("#custom_form_id").val(0)
        document.getElementsByName("is_required")[0].checked = false

        $('#type').val('input');
        $('#question').val('');
        $('#description').val('');
	}

	function saveQuestion(){

		cek = validateForm();
		if(cek){
			var answer_arr =  document.getElementsByName("answer[]");
	        var answer_length = answer_arr.length;  

	        var answer = [];
	        if($('#type').val()=='option' || $('#type').val()=='checkbox' || $('#type').val()=='radiobox'){
	        	if(answer_length>0){
			        for(i=0; i<answer_length;i++)
			        {
			        	if(answer_arr[i].value==''){
			        		Swal.fire(
				              'Oopps!',
				              'Jawaban tidak boleh kosong',
				              'error'
				            );
				            return false;
			        	}
			        	answer.push(answer_arr[i].value);
			        } 
	        	}else{
	        		Swal.fire(
		              'Oopps!',
		              'Jawaban harus di isi',
		              'error'
		            );
		            return false;
	        	}

    		}
 
	        var param = {
	        	custom_form_id:$("#custom_form_id").val(),
	        	product_id:$("#product_id").val(),
	        	is_required:document.getElementsByName("is_required")[0].checked,
	        	question:$('#question').val(),
	        	description:$('#description').val(),
                type:$('#type').val(),
                position:$('#position').val(),
                answer:answer
            }

            $(".full-loader").removeClass("hidden");
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>member/event/save-custom-form",
                data: JSON.stringify(param),
                contentType: "application/json",
                dataType: "json",
                success: function(result){

                    $(".full-loader").addClass("hidden");

                	if(result.status=='success'){

                        Swal({
                          type: 'success',
                          title: 'Success',
                          text: "Data berhasil disimpan",
                        }).then((result) => {
                          loadCustomForm();
                        });

                	}
                }
            });

	    
		}

	}

	function editQuestion(id,is_required,type,question,description,answer){

		$('#custom_form_id').val(id);

		document.getElementsByName("is_required")[0].checked = is_required;

		$('#type').val(type);
		$('#question').val(question);
		$('#description').val(description);

		if($('#type').val()=='input' || $('#type').val()=='textarea' || $('#type').val()=='date'  || $('#type').val()=='file'){

    		$('#input-description').removeClass("hidden");
            $('#button-answer').addClass("hidden");

    	}else{

    		// $('#input-description').addClass("hidden");
            $('#button-answer').removeClass("hidden");

    	}

        var answer_length = answer.length;  
        for(i=0; i<answer_length;i++)
        {
			editAnswer(id,answer[i].answer);
		}
		$('#form_modal').modal('show');

	}

	function removeQuestion(id){

        Swal.fire({
            title: 'Kamu Yakin?',
            text: "Kamu yakin akan menghapus pertanyaan ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                
                $.ajax({
		            type: "POST",
		            url: "<?php echo base_url(); ?>member/event/delete-custom-form/"+id,
		            data: JSON.stringify({product_id:$("#product_id").val()}),
		            contentType: "application/json",
		            dataType: "json",
		            success: function(result){

                        Swal({
                          type: 'success',
                          title: 'Success',
                          text: "Data berhasil dihapus",
                        }).then((result) => {
		                  loadCustomForm();
                        })

		            }
		        });

            }
        })
        
    }

    function removeAllQuestion(){

        Swal.fire({
            title: 'Kamu Yakin?',
            text: "Kamu yakin akan menghapus semua pertanyaan?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>member/event/delete-all-custom-form",
                    data: JSON.stringify({product_id:$("#product_id").val()}),
                    contentType: "application/json",
                    dataType: "json",
                    success: function(result){
                        Swal({
                          type: 'success',
                          title: 'Success',
                          text: "Data berhasil dihapus",
                        }).then((result) => {
                          loadCustomForm();
                        })
                    }
                });

            }
        })
        
    }

	function loadCustomForm(){

        var param = {
        	product_id:$("#product_id").val(),
        }

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>member/event/load-custom-form",
            data: JSON.stringify(param),
            contentType: "application/json",
            dataType: "json",
            success: function(result){

                if(result.total_data>0){
                    $('#remove_all').removeClass('hidden');
                }else{
                    $('#remove_all').addClass('hidden');
                }


                $('#show-custom-form').html(result.data);

                $('#custom_form_id').val(0);
				$('#is_required').val('');
				$('#type').val('input');
				$('#question').val('');
				$('#description').val('');
				$('#answer').html('');

                $('#form_modal').modal('hide');

                $('.datetime-picker').datetimepicker({
                    locale: 'id',
                    showClear: true,
                    format: 'YYYY-MM-DD'
                });

                $(".styled, .multiselect-container input").uniform({ radioClass: 'choice', selectAutoWidth: false });
            }
        });

    }
    loadCustomForm();

	function selectPosition(param){

		if (param == 'event-page') {
            $("#mail-customer").addClass("hidden");
            $("#event-page").removeClass("hidden");
        }else{
        	$("#mail-customer").removeClass("hidden");
            $("#event-page").addClass("hidden");
        }

        $('#position').val(param);

        var param = {
            product_id:$("#product_id").val(),
            position:$('#position').val(),
        }

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>member/event/update-position-custom-form",
            data: JSON.stringify(param),
            contentType: "application/json",
            dataType: "json",
            success: function(result){

                Swal({
                  type: 'success',
                  title: 'Success',
                  text: "Mode pengaturan formulir tambahan berhasil diubah",
                })

            }
        });

	}

</script>
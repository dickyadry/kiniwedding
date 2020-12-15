<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontEndController extends MY_Controller{
	
	public function __construct(){
		parent::__construct();

		$this->load->library("uploadGS");
		$this->bucketName = "eventstack-storage";

		$this->load->library('form_validation');
		$this->product_model = new GeneralModel("product");
		$this->category_model = new GeneralModel("category");
		$this->peserta_model = new GeneralModel("peserta");
		$this->category_product_model = new GeneralModel("category_product");
		$this->sertifikat_model = new GeneralModel("sertifikat");
		$this->materi_model = new GeneralModel("materi");
		$this->penerima_sertifikat_model = new GeneralModel("penerima_sertifikat");
		$this->penerima_materi_model = new GeneralModel("penerima_materi");
		$this->ticket_model = new GeneralModel("ticket");
		$this->sales_order_model = new GeneralModel("sales_order");
		$this->multiple_form_model = new GeneralModel("multiple_form");
		$this->multiple_form_data_model = new GeneralModel("multiple_form_data");

	}

    function photo_upload(){
    	$file = $_FILES['file'];
    	$size_img = array(
    		'small' => array('200','200'),
    		'medium' => array('400','400'),
    		'large' => array('500','500')
    	);

		$unique = substr(md5(time().'_'.$file['name']), -7);
		$uploadPath = realpath(APPPATH . '../public/images');

    	$crop_data = json_decode(stripslashes($this->input_data['avatar-data']));

        $thumbPath = $uploadPath.'/'.'_thumb/'; 
    	$name = date('YmdHis');
        $thumb = $this->setDst($thumbPath, $name);
        $thumb = json_decode($thumb, true);
    	$original = $this->setFile($file, $uploadPath.'/original/');
    	$original = json_decode($original, true);

    	$this->crop($original["src"], $thumb["dst"], $crop_data, 600, 600);
    	
    	foreach ($size_img as $key => $value) {
    		$thumbPath = $uploadPath.'/'.'_thumb/'.$key.'/'; 
	        $thumb = $this->setDst($thumbPath, $name);
	        $thumb = json_decode($thumb, true);
	    	$this->crop($original["src"], $thumb["dst"], $crop_data, $value[0], $value[1]);
    	}

    	$uploadGS = new uploadGS();
    	foreach ($size_img as $key => $value) {
    		$cloudPath = 'images/'.$key.'/'.$thumb["thumb"];
    		$fileContent = file_get_contents($uploadPath.'/'.'_thumb/'.$key.'/'.$thumb["thumb"]);
    		$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);

    		unlink($uploadPath.'/'.'_thumb/'.$key.'/'.$thumb["thumb"]);
    	}

    	unlink($uploadPath.'/'.'_thumb/'.$thumb["thumb"]);
    	unlink($original["src"]);

        if ($isSucceed == true) {
        	$response['status'] = 'success';
            $response['msg'] = 'SUCCESS: to upload ' . $cloudPath . PHP_EOL;
            $response['thumbPath'] = 'https://storage.googleapis.com/'.$this->bucketName.'/images/medium/'.$thumb["thumb"];
        } else {
            $response['status'] = "error";
            $response['msg'] = 'FAILED: to upload ' . $cloudPath . PHP_EOL;
        }
        echo json_encode($response);

    }

    function icon_upload(){

    	$file = $_FILES['file'];
		$unique = substr(md5(time().'_'.$file['name']), -7);
		$uploadPath = realpath(APPPATH . '../public/icon');

    	$crop_data = json_decode(stripslashes($this->input_data['avatar-data-icon']));

        $thumbPath = $uploadPath.'/'.'_thumb/'; 
    	$name = date('YmdHis');
        $thumb = $this->setDst($thumbPath, $name);
        $thumb = json_decode($thumb, true);
    	$original = $this->setFile($file, $uploadPath.'/original/');
    	$original = json_decode($original, true);

    	$this->crop($original["src"], $thumb["dst"], $crop_data, 100, 100);

    	$uploadGS = new uploadGS();
    	$cloudPath = 'icon/'.$thumb["thumb"];
		$fileContent = file_get_contents($uploadPath.'/'.'_thumb/'.$thumb["thumb"]);
		$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);

    	unlink($uploadPath.'/'.'_thumb/'.$thumb["thumb"]);
    	unlink($original["src"]);

        if ($isSucceed == true) {
        	$response['status'] = 'success';
            $response['msg'] = 'SUCCESS: to upload ' . $cloudPath . PHP_EOL;
            $response['thumbPath'] = 'https://storage.googleapis.com/'.$this->bucketName.'/icon/'.$thumb["thumb"];
        } else {
            $response['status'] = "error";
            $response['msg'] = 'FAILED: to upload ' . $cloudPath . PHP_EOL;
        }
        echo json_encode($response);
    }

    function sertifikat_upload(){

    	$id_peserta = encrypt_decrypt('decrypt', $this->input_data['id_peserta']);
    	$peserta = $this->peserta_model->find($id_peserta);
    	$code = 'ES-'.$peserta->code.'-'.rand(1,99);

    	$name = $_FILES['file']['name'];
    	$filr_arr = explode(".", $_FILES['file']['name']);

		$file_name = $code.'.'.$filr_arr[count($filr_arr)-1];

		$uploadGS = new uploadGS();
		$cloudPath = 'sertifikat/'.$file_name;
		$fileContent = file_get_contents($_FILES['file']['tmp_name']);
		$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);

		if ($isSucceed==true) {

			$file_name = 'https://storage.googleapis.com/'.$this->bucketName.'/sertifikat/'.$file_name;

			$sales_order = $this->sales_order_model->find($peserta->sales_order_id);
			$data_sertifikat = array(
				'id_sertifikat'=>0,
				'id_peserta'=> $peserta->id,
				'product_id'=> $peserta->product_id,
				'link_sertifikat'=> $file_name,
				'code'=> $code,
				'member_id'=>$sales_order->member_id,
				'opened'=>0,
			);
			$this->penerima_sertifikat_model->insert($data_sertifikat);
		    $json = array(
	          'status'		=> 'success',
	          'msg'	=> "File is valid, and was successfully uploaded.\n"
	        );
	        echo json_encode($json);

		} else {

		    $json = array(
	          'status'		=> 'error',
	          'msg'	=> "Possible file upload attack!\n"
	        );
	        echo json_encode($json);
	        
		}
    	
    }

    function template_sertifikat_upload(){

    	$param_data = $this->input_data;
    	$param_data['positionx_text'] = (int)$param_data['positionx_text'];
    	$param_data['positiony_text'] = (int)$param_data['positiony_text'];
    	$param_data['positionx_code'] = (int)$param_data['positionx_code'];
    	$param_data['positiony_code'] = (int)$param_data['positiony_code'];
    	$param_data['positionx_qrcode'] = (int)$param_data['positionx_qrcode'];
    	$param_data['positiony_qrcode'] = (int)$param_data['positiony_qrcode'];
    	$param_data['size_qrcode'] = (int)$param_data['size_qrcode'];
    	$param_data['width_box_text'] = (int)$param_data['width_box_text'];
    	$param_data['width_box_code'] = (int)$param_data['width_box_code'];
    	$param_data['width'] = (float)$param_data['width'];
    	$param_data['height'] = (float)$param_data['height'];
    	$param_data['member_id'] = $this->userpubliclog['member_id'];

    	if(isset($_FILES['file']['name']) && $param_data['id_sertifikat']==""){

    		$name = $_FILES['file']['name'];
	    	$filr_arr = explode(".", $_FILES['file']['name']);

			$unique = substr(md5(time().'_'.$name), -20);
			$uploadPath = realpath(APPPATH . '../public/sertifikat');
			$file_name = $unique.'.'.$filr_arr[count($filr_arr)-1];

			$config['image_library'] = 'gd2';
			$config['source_image'] = $_FILES['file']['tmp_name'];
			// $config['create_thumb'] = TRUE;
			$config['new_image'] = $uploadPath.'/'.$file_name;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 200;

			$this->load->library('image_lib', $config);
			$this->image_lib->initialize($config);
			if (!$this->image_lib->resize())
			{
			    echo $this->image_lib->display_errors();
			}

			$uploadGS = new uploadGS();

			$cloudPath = 'sertifikat/thumb/'.$file_name;
			$fileContent = file_get_contents($uploadPath.'/'.$file_name);
			$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);
			if ($isSucceed==true) {
				unlink($uploadPath.'/'.$file_name);
			}
			
			$cloudPath = 'sertifikat/'.$file_name;
			$fileContent = file_get_contents($_FILES['file']['tmp_name']);
			$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);

			if ($isSucceed==true) {
				$file_thumb_name = 'https://storage.googleapis.com/'.$this->bucketName.'/sertifikat/thumb/'.$file_name;
				$file_name = 'https://storage.googleapis.com/'.$this->bucketName.'/sertifikat/'.$file_name;
				if(isset($param_data['id_sertifikat']) && $param_data['id_sertifikat']!=null && $param_data['id_sertifikat']!=""){

					$param_data['link_sertifikat'] = $file_name;
					$param_data['thumb_images'] = $file_thumb_name;
					$id = encrypt_decrypt('decrypt',$param_data['id_sertifikat']);
					$this->sertifikat_model->update($param_data,$id);

				}else{

					$param_data['product_id'] = encrypt_decrypt('decrypt', $param_data['product_id']);
					$param_data['link_sertifikat'] = $file_name;
					$param_data['thumb_images'] = $file_thumb_name;
					$id = $this->sertifikat_model->insert($param_data);
				}

				if(isset($param_data['ticket'])  && $param_data['action']==3){

					if(isset($param_data['multiple_form']) && count($param_data['multiple_form'])>0){
						$query = $this->peserta_model->source();
						$query->select('peserta.*, sales_order.sales_order_no, sales_order.status_order, sales_order.member_id');
						$query->join('sales_order','sales_order.id=peserta.sales_order_id');
						$query->where_in('ticket_id',$param_data['ticket']);
						$query->where('sales_order.status_order',1);
						$peserta = $query->get()->result();
						foreach ($peserta as $key => $value) {

							$condition = true;
							foreach ($param_data['multiple_form'] as $k => $v) {
								$query = $this->multiple_form_data_model->source();
								$query->where('product_id',$value->product_id);
								$query->where('multiple_form_id',$v);
								$query->where('email',$value->email);
								if($query->count_all_results()==0){
									$condition = false;
									break;
								}
							}

							if($condition == true){
								$data_sertifikat = array(
									'id_sertifikat'=>$id,
									'id_peserta'=> $value->id,
									'product_id'=> $value->product_id,
									'link_sertifikat'=> $file_name,
									'code'=> 'ES-'.$value->code.'-'.$id,
									'member_id'=>$value->member_id,
									'opened'=>0,
								);
								$this->penerima_sertifikat_model->insert($data_sertifikat);
							}

						}
					}else{
						$query = $this->peserta_model->source();
						$query->select('peserta.*, sales_order.sales_order_no, sales_order.status_order, sales_order.member_id');
						$query->join('sales_order','sales_order.id=peserta.sales_order_id');
						$query->where_in('ticket_id',$param_data['ticket']);
						$query->where('sales_order.status_order',1);
						$peserta = $query->get()->result();
						foreach ($peserta as $key => $value) {

							$data_sertifikat = array(
								'id_sertifikat'=>$id,
								'id_peserta'=> $value->id,
								'product_id'=> $value->product_id,
								'link_sertifikat'=> $file_name,
								'code'=> 'ES-'.$value->code.'-'.$id,
								'member_id'=>$value->member_id,
								'opened'=>0,
							);
							$this->penerima_sertifikat_model->insert($data_sertifikat);

						}
					}

					$json = array(
			          	'status'=> 'success',
			          	'msg'=> "Data berhasil dikirim"
			        );
			        echo json_encode($json);

				}else{

					$json = array(
						'id_sertifikat' => encrypt_decrypt('encrypt',$id),
			          	'status'=> 'success',
			          	'msg'=> "Data berhasil disimpan"
			        );
			        echo json_encode($json);

				}


			} else {

			    $json = array(
		          'status'		=> 'error',
		          'msg'	=> "Possible file upload attack!\n"
		        );
		        echo json_encode($json);
			}

    	}else{

			if(isset($param_data['id_sertifikat']) && $param_data['id_sertifikat']!=null && $param_data['id_sertifikat']!=""){

				$param_data['product_id'] = encrypt_decrypt('decrypt', $param_data['product_id']);
				$id = encrypt_decrypt('decrypt',$param_data['id_sertifikat']);
				$sertifikat = $this->sertifikat_model->find($id);
				if(isset($sertifikat->link_sertifikat)){

					$this->sertifikat_model->update($param_data,$id);

					if(isset($param_data['ticket']) && $param_data['action']==3){

						$this->penerima_sertifikat_model->delete($id,'id_sertifikat');

						if(isset($param_data['multiple_form']) && count($param_data['multiple_form'])>0){
							$query = $this->peserta_model->source();
							$query->select('peserta.*, sales_order.sales_order_no, sales_order.status_order, sales_order.member_id');
							$query->join('sales_order','sales_order.id=peserta.sales_order_id');
							$query->where_in('ticket_id',$param_data['ticket']);
							$query->where('sales_order.status_order',1);
							$peserta = $query->get()->result();
							foreach ($peserta as $key => $value) {

								$condition = true;
								foreach ($param_data['multiple_form'] as $k => $v) {
									$query = $this->multiple_form_data_model->source();
									$query->where('product_id',$value->product_id);
									$query->where('multiple_form_id',$v);
									$query->where('email',$value->email);
									if($query->count_all_results()==0){
										$condition = false;
										break;
									}
								}

								if($condition == true){
									$data_sertifikat = array(
										'id_sertifikat'=>$id,
										'id_peserta'=> $value->id,
										'product_id'=> $value->product_id,
										'link_sertifikat'=> $sertifikat->link_sertifikat,
										'code'=> 'ES-'.$value->code.'-'.$id,
										'member_id'=>$value->member_id,
										'opened'=>0,
									);
									$this->penerima_sertifikat_model->insert($data_sertifikat);
								}

							}
						}else{
							$query = $this->peserta_model->source();
							$query->select('peserta.*, sales_order.sales_order_no, sales_order.status_order, sales_order.member_id');
							$query->join('sales_order','sales_order.id=peserta.sales_order_id');
							$query->where_in('ticket_id',$param_data['ticket']);
							$query->where('sales_order.status_order',1);
							$peserta = $query->get()->result();
							foreach ($peserta as $key => $value) {

								$data_sertifikat = array(
									'id_sertifikat'=>$id,
									'id_peserta'=> $value->id,
									'product_id'=> $value->product_id,
									'link_sertifikat'=> $sertifikat->link_sertifikat,
									'code'=> 'ES-'.$value->code.'-'.$id,
									'member_id'=>$value->member_id,
									'opened'=>0,
								);
								$this->penerima_sertifikat_model->insert($data_sertifikat);

							}
						}

						$json = array(
				          	'status'=> 'success',
				          	'msg'=> "Data berhasil dikirim"
				        );
				        echo json_encode($json);

					}else{

						$json = array(
							'id_sertifikat'=>encrypt_decrypt('encrypt',$id),
				          	'status'=>'success',
				          	'msg'=> "Data berhasil disimpan"
				        );
				        echo json_encode($json);
					}

				}else{

					$json = array(
					'status'=> 'error',
					'msg'=> "Data tidak ditemukan"
				);
				echo json_encode($json);
				}



			}else{

				$json = array(
					'status'=> 'error',
					'msg'=> "Silahkan upload template e-sertifikat"
				);
				echo json_encode($json);
			}

		    

    	}
    	
    	
    }

    function materi_upload(){

    	$param_data = $this->input_data;
    	$param_data['member_id'] = $this->userpubliclog['member_id'];

    	if(isset($_FILES['file']['name'])){

    		$name = $_FILES['file']['name'];
	    	$filr_arr = explode(".", $_FILES['file']['name']);

	    	$name = str_replace(' ', '-', $filr_arr[0]); // Replaces all spaces with hyphens.
			$name = preg_replace('/[^A-Za-z0-9\-]/', '', $name); // Removes special chars

			$unique = time().'_'.$name;
			$file_name = $unique.'.'.$filr_arr[count($filr_arr)-1];

			$uploadGS = new uploadGS();
			$cloudPath = 'materi/'.$file_name;
			$fileContent = file_get_contents($_FILES['file']['tmp_name']);
			$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);

			if ($isSucceed==true) {

				$path = 'https://storage.googleapis.com/'.$this->bucketName.'/materi/'.$file_name;
				if(isset($param_data['id_materi']) && $param_data['id_materi']!=null && $param_data['id_materi']!=""){

					$param_data['path'] = $path;
					$param_data['name'] = $file_name;
					$id = encrypt_decrypt('decrypt',$param_data['id_materi']);
					$this->materi_model->update($param_data,$id);

				}else{

					$param_data['product_id'] = encrypt_decrypt('decrypt', $param_data['product_id']);
					$param_data['path'] = $path;
					$param_data['name'] = $file_name;
					$id = $this->materi_model->insert($param_data);
				}

				if(isset($param_data['ticket'])  && $param_data['action']==3){

					if(isset($param_data['multiple_form']) && count($param_data['multiple_form'])>0){
						$query = $this->peserta_model->source();
						$query->select('peserta.*, sales_order.sales_order_no, sales_order.status_order, sales_order.member_id');
						$query->join('sales_order','sales_order.id=peserta.sales_order_id');
						$query->where_in('ticket_id',$param_data['ticket']);
						$query->where('sales_order.status_order',1);
						$peserta = $query->get()->result();
						foreach ($peserta as $key => $value) {

							$condition = true;
							foreach ($param_data['multiple_form'] as $k => $v) {
								$query = $this->multiple_form_data_model->source();
								$query->where('product_id',$value->product_id);
								$query->where('multiple_form_id',$v);
								$query->where('email',$value->email);
								$count_all_results = $query->count_all_results();

								if($count_all_results==0){
									$condition = false;
									break;
								}
							}

							if($condition == true){
								$data_materi = array(
									'id_materi'=>$id,
									'id_peserta'=> $value->id,
									'product_id'=> $value->product_id,
									'member_id'=>$value->member_id,
								);
								$this->penerima_materi_model->insert($data_materi);
							}

						}
					}else{
						$query = $this->peserta_model->source();
						$query->select('peserta.*, sales_order.sales_order_no, sales_order.status_order, sales_order.member_id');
						$query->join('sales_order','sales_order.id=peserta.sales_order_id');
						$query->where_in('ticket_id',$param_data['ticket']);
						$query->where('sales_order.status_order',1);
						$peserta = $query->get()->result();
						foreach ($peserta as $key => $value) {

							$data_materi = array(
								'id_materi'=>$id,
								'id_peserta'=> $value->id,
								'product_id'=> $value->product_id,
								'member_id'=>$value->member_id,
							);
							$this->penerima_materi_model->insert($data_materi);

						}
					}

					$json = array(
			          	'status'=> 'success',
			          	'msg'=> "Data berhasil dikirim"
			        );
			        echo json_encode($json);

				}else{

					$json = array(
						'id_sertifikat' => encrypt_decrypt('encrypt',$id),
			          	'status'=> 'success',
			          	'msg'=> "Data berhasil disimpan"
			        );
			        echo json_encode($json);

				}


			} else {

			    $json = array(
		          'status'		=> 'error',
		          'msg'	=> "Possible file upload attack!\n"
		        );
		        echo json_encode($json);
			}

    	}else{

			if(isset($param_data['id_materi']) && $param_data['id_materi']!=null && $param_data['id_materi']!=""){

				$param_data['product_id'] = encrypt_decrypt('decrypt', $param_data['product_id']);
				$id = encrypt_decrypt('decrypt',$param_data['id_materi']);
				$materi = $this->materi_model->find($id);
				if(isset($materi->path)){

					$this->materi_model->update($param_data,$id);

					if(isset($param_data['ticket']) && $param_data['action']==3){

						$this->penerima_materi_model->delete($id,'id_materi');

						if(isset($param_data['multiple_form']) && count($param_data['multiple_form'])>0){
							$query = $this->peserta_model->source();
							$query->select('peserta.*, sales_order.sales_order_no, sales_order.status_order, sales_order.member_id');
							$query->join('sales_order','sales_order.id=peserta.sales_order_id');
							$query->where_in('ticket_id',$param_data['ticket']);
							$query->where('sales_order.status_order',1);
							$peserta = $query->get()->result();
							foreach ($peserta as $key => $value) {

								$condition = true;
								foreach ($param_data['multiple_form'] as $k => $v) {
									$query = $this->multiple_form_data_model->source();
									$query->where('product_id',$value->product_id);
									$query->where('multiple_form_id',$v);
									$query->where('email',$value->email);
									if($query->count_all_results()==0){
										$condition = false;
										break;
									}
								}

								if($condition == true){
									$data_materi = array(
										'id_materi'=>$id,
										'id_peserta'=> $value->id,
										'product_id'=> $value->product_id,
										'member_id'=>$value->member_id,
									);
									$this->penerima_materi_model->insert($data_materi);
								}

							}
						}else{
							$query = $this->peserta_model->source();
							$query->select('peserta.*, sales_order.sales_order_no, sales_order.status_order, sales_order.member_id');
							$query->join('sales_order','sales_order.id=peserta.sales_order_id');
							$query->where_in('ticket_id',$param_data['ticket']);
							$query->where('sales_order.status_order',1);
							$peserta = $query->get()->result();
							foreach ($peserta as $key => $value) {

								$data_materi = array(
									'id_materi'=>$id,
									'id_peserta'=> $value->id,
									'product_id'=> $value->product_id,
									'member_id'=>$value->member_id,
								);
								$this->penerima_materi_model->insert($data_materi);

							}
						}

						$json = array(
				          	'status'=> 'success',
				          	'msg'=> "Data berhasil dikirim"
				        );
				        echo json_encode($json);

					}else{

						$json = array(
							'id_sertifikat'=>encrypt_decrypt('encrypt',$id),
				          	'status'=>'success',
				          	'msg'=> "Data berhasil disimpan"
				        );
				        echo json_encode($json);
					}

				}else{

					$json = array(
					'status'=> 'error',
					'msg'=> "Data tidak ditemukan"
				);
				echo json_encode($json);
				}



			}else{

				$json = array(
					'status'=> 'error',
					'msg'=> "Silahkan upload template e-sertifikat"
				);
				echo json_encode($json);
			}

		    

    	}
    	
    	
    }

    function document_upload(){

    	$file = $_FILES['file'];
    	$size_img = array(
    		'large' => array('900','540')
    	);

		$unique = substr(md5(time().'_'.$file['name']), -7);
		$uploadPath = realpath(APPPATH . '../public/legal');

    	$crop_data = json_decode(stripslashes($this->input_data['avatar-data']));

        $thumbPath = $uploadPath.'/'.'_thumb/'; 
    	$name = date('YmdHis');
        $thumb = $this->setDst($thumbPath, $name);
        $thumb = json_decode($thumb, true);
    	$original = $this->setFile($file, $uploadPath.'/original/');
    	$original = json_decode($original, true);

    	$this->crop($original["src"], $thumb["dst"], $crop_data, 300, 180);
    	
    	foreach ($size_img as $key => $value) {
    		$thumbPath = $uploadPath.'/'.'_thumb/'.$key.'/'; 
	        $thumb = $this->setDst($thumbPath, $name);
	        $thumb = json_decode($thumb, true);
	    	$this->crop($original["src"], $thumb["dst"], $crop_data, $value[0], $value[1]);
    	}

    	$uploadGS = new uploadGS();
    	$cloudPath = 'legal/large/'.$thumb["thumb"];
		$fileContent = file_get_contents($uploadPath.'/'.'_thumb/large/'.$thumb["thumb"]);
		$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);

		$cloudPath = 'legal/small/'.$thumb["thumb"];
		$fileContent = file_get_contents($uploadPath.'/'.'_thumb/'.$thumb["thumb"]);
		$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);

    	unlink($uploadPath.'/'.'_thumb/large/'.$thumb["thumb"]);
    	unlink($uploadPath.'/'.'_thumb/'.$thumb["thumb"]);
    	unlink($original["src"]);

        if ($isSucceed == true) {
        	$response['status'] = 'success';
            $response['msg'] = 'SUCCESS: to upload ' . $cloudPath . PHP_EOL;
            $response['thumbPath'] = 'https://storage.googleapis.com/'.$this->bucketName.'/legal/small/'.$thumb["thumb"];
        } else {
            $response['status'] = "error";
            $response['msg'] = 'FAILED: to upload ' . $cloudPath . PHP_EOL;
        }
        echo json_encode($response);

    }

    function banner_upload(){

    	$file = $_FILES['file'];
		$unique = substr(md5(time().'_'.$file['name']), -7);
		$uploadPath = realpath(APPPATH . '../public/banner');

    	$crop_data = json_decode(stripslashes($this->input_data['avatar-data']));

        $thumbPath = $uploadPath.'/'.'_thumb/'; 
    	$name = date('YmdHis');
        $thumb = $this->setDst($thumbPath, $name);
        $thumb = json_decode($thumb, true);
    	$original = $this->setFile($file, $uploadPath.'/original/');
    	$original = json_decode($original, true);

    	$this->crop($original["src"], $thumb["dst"], $crop_data, 1500, 500);

    	$uploadGS = new uploadGS();
    	$cloudPath = 'banner/'.$thumb["thumb"];
		$fileContent = file_get_contents($uploadPath.'/'.'_thumb/'.$thumb["thumb"]);
		$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);

    	unlink($uploadPath.'/'.'_thumb/'.$thumb["thumb"]);
    	unlink($original["src"]);

        if ($isSucceed == true) {
        	$response['status'] = 'success';
            $response['msg'] = 'SUCCESS: to upload ' . $cloudPath . PHP_EOL;
            $response['thumbPath'] = 'https://storage.googleapis.com/'.$this->bucketName.'/banner/'.$thumb["thumb"];
        } else {
            $response['status'] = "error";
            $response['msg'] = 'FAILED: to upload ' . $cloudPath . PHP_EOL;
        }
        echo json_encode($response);
    }

    function account_upload(){
    	$file = $_FILES['file'];

		$unique = substr(md5(time().'_'.$file['name']), -7);
		$uploadPath = realpath(APPPATH . '../public/account');

    	$crop_data = json_decode(stripslashes($this->input_data['avatar-data']));
    	
        $thumbPath = $uploadPath.'/'.'_thumb/'; 
    	$name = date('YmdHis');
        $thumb = $this->setDst($thumbPath, $name);
        $thumb = json_decode($thumb, true);
    	$original = $this->setFile($file, $uploadPath.'/original/');
    	$original = json_decode($original, true);

    	$this->crop($original["src"], $thumb["dst"], $crop_data, $crop_data->width, $crop_data->height);
    	
    	$json = array(
          'state'		=> 200,
          'thumbPath'	=> $thumb["thumb"]
        );
        echo json_encode($json);
    }

    function file_upload(){

    	$filr_arr = explode(".", $_FILES['file']['name']);

    	$name = str_replace(' ', '-', $filr_arr[0]); // Replaces all spaces with hyphens.
		$name = preg_replace('/[^A-Za-z0-9\-]/', '', $name); // Removes special chars

		$unique = time().'_'.$name;
		$file_name = $unique.'.'.$filr_arr[count($filr_arr)-1];

		$uploadGS = new uploadGS();
		$cloudPath = 'file/'.$file_name;
		$fileContent = file_get_contents($_FILES['file']['tmp_name']);
		$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);

		if ($isSucceed==true) {

			$file_name = 'https://storage.googleapis.com/'.$this->bucketName.'/file/'.$file_name;
		    $json = array(
	          'status'=> 'success',
	          'data'=> $file_name,
	          'msg'	=> "File is valid, and was successfully uploaded.\n"
	        );
	        echo json_encode($json);

		} else {

		    $json = array(
	          'status'		=> 'error',
	          'msg'	=> "Possible file upload attack!\n"
	        );
	        echo json_encode($json);
	        
		}
    	
    }

    function bukti_transfer_upload(){

    	$filr_arr = explode(".", $_FILES['file']['name']);

    	$name = str_replace(' ', '-', $filr_arr[0]); // Replaces all spaces with hyphens.
		$name = preg_replace('/[^A-Za-z0-9\-]/', '', $name); // Removes special chars

		$unique = time().'_'.gen_random_string();
		$file_name = $unique.'.'.$filr_arr[count($filr_arr)-1];

		$uploadGS = new uploadGS();
		$cloudPath = 'bukti-transfer/'.$file_name;
		$fileContent = file_get_contents($_FILES['file']['tmp_name']);
		$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);

		if ($isSucceed==true) {

			$file_name = 'https://storage.googleapis.com/'.$this->bucketName.'/bukti-transfer/'.$file_name;
		    $json = array(
	          'status'=> 'success',
	          'data'=> $file_name,
	          'msg'	=> "File is valid, and was successfully uploaded.\n"
	        );
	        echo json_encode($json);

		} else {

		    $json = array(
	          'status'		=> 'error',
	          'msg'	=> "Possible file upload attack!\n"
	        );
	        echo json_encode($json);
	        
		}
    	
    }

    public function deleteUploaded($path){
    	unlink($path);
    }

    public function setDst($thumbPath, $name) {
    	$imageCropName = $name . '.jpg';
	    $this->dstThumb = $imageCropName;
	    $data['dst'] = $thumbPath . $imageCropName;
	    $data['thumb'] = $imageCropName;
	    return json_encode($data);
	}

    public function setFile($file, $originalPath) {
	    $errorCode = $file['error'];
	    if ($errorCode === UPLOAD_ERR_OK) {
	    	if ( function_exists( 'exif_imagetype' ) ) {
	    		$type = exif_imagetype($file['tmp_name']);
	    	} else {
	    		$r = getimagesize( $file['tmp_name'] );
	    		$type = $r[2];
	    	}
	    	if ($type) {
	    		$extension = image_type_to_extension($type);
	    		$src = $originalPath . date('YmdHis').'-original' . $extension;
	    		if ($type == IMAGETYPE_GIF || $type == IMAGETYPE_JPEG || $type == IMAGETYPE_PNG) {
	    			if (file_exists($src)) {
	    				unlink($src);
	    			}
	    			$result = move_uploaded_file($file['tmp_name'], $src);
	    			if ($result) {
	    				$this->src = $src;
	    				$this->type = $type;
	    				$this->extension = $extension;
	    			} else {
	    				$this->msg = 'Failed to save file';            
	    			}
	    		} else {
	    			$this->msg = 'Please upload image with the following types: JPG, PNG, GIF';
	    		}
	    	} else {
	    		$this->msg = 'Please upload image file';
	    	}
	    } else {
	    	$this->msg = $this->codeToMessage($errorCode);
	    }
	    $data['src'] = $src;
	    $data['ori'] = date('YmdHis').'-original' . $extension;
	    return json_encode($data);
	}

	public function crop($src, $dst, $data, $width, $height) {
		if (!empty($src) && !empty($dst) && !empty($data)) {
			switch ($this ->type) {
				case IMAGETYPE_GIF:
					$src_img = imagecreatefromgif($src);
					break;
				case IMAGETYPE_JPEG:
					$src_img = imagecreatefromjpeg($src);
					break;
				case IMAGETYPE_PNG:
					$src_img = imagecreatefrompng($src);
					break;
			}
			if (!$src_img) {
				$this -> msg = "Failed to read the image file";
				return;
			}
			$size = getimagesize($src);
			$size_w = $size[0]; // natural width
			$size_h = $size[1]; // natural height

			$src_img_w = $size_w;
			$src_img_h = $size_h;

			$degrees = $data ->rotate;

			// Rotate the source image
			if (is_numeric($degrees) && $degrees != 0) {
				// PHP's degrees is opposite to CSS's degrees
				$new_img = imagerotate( $src_img, -$degrees, imagecolorallocatealpha($src_img, 0, 0, 0, 127) );

				imagedestroy($src_img);
				$src_img = $new_img;

		        $deg = abs($degrees) % 180;
		        $arc = ($deg > 90 ? (180 - $deg) : $deg) * M_PI / 180;

		        $src_img_w = $size_w * cos($arc) + $size_h * sin($arc);
		        $src_img_h = $size_w * sin($arc) + $size_h * cos($arc);

		        // Fix rotated image miss 1px issue when degrees < 0
		        $src_img_w -= 1;
		        $src_img_h -= 1;
		    }

		    $tmp_img_w = $data -> width;
		    $tmp_img_h = $data -> height;
		    $dst_img_w = $width;
		    $dst_img_h = $height;

		    $src_x = $data -> x;
		    $src_y = $data -> y;

		    if ($src_x <= -$tmp_img_w || $src_x > $src_img_w) {
		    	$src_x = $src_w = $dst_x = $dst_w = 0;
		    } else if ($src_x <= 0) {
		    	$dst_x = -$src_x;
		        $src_x = 0;
		        $src_w = $dst_w = min($src_img_w, $tmp_img_w + $src_x);
		    } else if ($src_x <= $src_img_w) {
		        $dst_x = 0;
		        $src_w = $dst_w = min($tmp_img_w, $src_img_w - $src_x);
		    }

		    if ($src_w <= 0 || $src_y <= -$tmp_img_h || $src_y > $src_img_h) {
		        $src_y = $src_h = $dst_y = $dst_h = 0;
		    } else if ($src_y <= 0) {
		    	$dst_y = -$src_y;
		    	$src_y = 0;
		    	$src_h = $dst_h = min($src_img_h, $tmp_img_h + $src_y);
		    } else if ($src_y <= $src_img_h) {
		        $dst_y = 0;
		        $src_h = $dst_h = min($tmp_img_h, $src_img_h - $src_y);
		    }

		    // Scale to destination position and size
		    $ratio = $tmp_img_w / $dst_img_w;
		    $dst_x /= $ratio;
		    $dst_y /= $ratio;
		    $dst_w /= $ratio;
		    $dst_h /= $ratio;

		    $dst_img = imagecreatetruecolor($dst_img_w, $dst_img_h);

		    // Add transparent background to destination image
		    imagefill($dst_img, 0, 0, imagecolorallocatealpha($dst_img, 0, 0, 0, 127));
		    imagesavealpha($dst_img, true);
		    $result = imagecopyresampled($dst_img, $src_img, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
		    if ($result) {
		    	if (!imagejpeg($dst_img, $dst)) {
		    		$this -> msg = "Failed to save the cropped image file";
		    	}
		    } else {
		    	$this -> msg = "Failed to crop the image file";
		    }
		    imagedestroy($src_img);
		    imagedestroy($dst_img);
		}
	}

}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductImagesController extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->library("uploadGS");
		$this->bucketName = "eventstack-storage";
		$this->load->library('image_lib');
		$this->load->library('form_validation');
		$this->product_model = new GeneralModel("product");
		$this->product_images_model = new GeneralModel("product_images");

	}

	public function index($product_id){

		$data['product_id'] = $product_id;

		$product_id = strip_tags($product_id);
		$product_id = encrypt_decrypt('decrypt',$product_id);
		

		$limit = isset($this->input_data['limit'])?$this->input_data['limit']:20;
		$page = isset($this->input_data['page'])?$this->input_data['page']:1;
		$start = isset($this->input_data['page'])?(($page-1)*$limit):0;
		$q = isset($this->input_data['q'])?$this->input_data['q']:'';

		$query = $this->product_images_model->source();
		if($q!=''){ 
			$query->group_start();
				$query->like('LOWER(caption)',strtolower($q)); 
			$query->group_end();
		}
		$query->where('product_id',$product_id);
		$count = $query->count_all_results();

		$query = $this->product_images_model->source();
		$query->order_by("id", "DESC");
		$query->limit($limit,$start);
		if($q!=''){ 
			$query->group_start();
				$query->like('LOWER(caption)',strtolower($q)); 
			$query->group_end();
		}
		$query->where('product_id',$product_id);
		$datas_product_images = $query->get()->result();

		$datas = array();
		foreach ($datas_product_images as $key => $value) {
			$datas[] = $value;
		}

		$data['pagination'] = $this->paging_page('product-images/'.encrypt_decrypt('encrypt',$product_id),$limit,$count);

		$data['total_page'] = ceil($count/$limit);
		$data['page'] = $page;
		$data['limit'] = $limit;
		$data['datas'] = $datas;

        $c = $this->load->view("contents/product_images/list", $data, true);
		$this->load_layout($c);

	}

	public function add($product_id){

		$data = array();
		$data['product_id'] = $product_id;

		$product_id = strip_tags($product_id);
		$product_id = encrypt_decrypt('decrypt',$product_id);


        $c = $this->load->view("contents/product_images/form", $data, true);
        $js = $this->load->view("js/product_images/js_form_product_images", "", true);
		$this->load_layout($c,$js);

	}

	public function save($product_id){

		$param_data = $this->input_data;
		$param_data['product_id'] = encrypt_decrypt('decrypt',$product_id);
		$id = $this->product_images_model->insert($param_data);

		$this->session->set_flashdata("success", "Success");
		redirect(base_url('product-images/'.$product_id));

	}

	public function edit($product_id,$id){

		$data = array();
		$data['product_id'] = $product_id;

		$product_id = strip_tags($product_id);
		$product_id = encrypt_decrypt('decrypt',$product_id);

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$product = $this->product_images_model->find($id);
		if(isset($product->id)){

			$data['data'] = $product;
	        $c = $this->load->view("contents/product_images/form",$data,true);
	        $js = $this->load->view("js/product_images/js_form_product_images", "", true);
			$this->load_layout($c,$js);

		}else{
			$this->load->view("contents/404");
		}

	}

	public function upload_images($product_id,$id){

		$product_id = strip_tags($product_id);
		$product_id = encrypt_decrypt('decrypt',$product_id);

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$data = array();
		$product = $this->product_images_model->find($id);
		if(isset($product->id)){

			$data['data'] = $product;
	        $c = $this->load->view("contents/product_images/form_images",$data,true);
	        $js = $this->load->view("js/js_product_images", "", true);
			$this->load_layout($c,$js);

		}else{
			$this->load->view("contents/404");
		}

	}

	public function view($product_id,$id){

		$this->session->set_userdata("viewfile", true);

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$data = array();
		$product = $this->product_images_model->find($id);
		if(isset($product->id)){

			$data['data'] = $product;
	        $c = $this->load->view("contents/product/view",$data,true);
			$this->load_layout($c);

		}else{
			$this->load->view("contents/404");
		}

	}

	public function update($product_id,$id){

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$param_data = $this->input_data;
		$this->product_images_model->update($param_data,$id);

		$this->session->set_flashdata("success", "Success");
		redirect(base_url('product-images/'.$product_id));

	}

	public function delete($product_id,$id){

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$this->product_images_model->delete($id);

		$this->session->set_flashdata("success", "Success");
		redirect(base_url('product-images/'.$product_id));

	}

	public function photo_upload($encrypt_id){

		$id = strip_tags($encrypt_id);
		$id = encrypt_decrypt('decrypt',$id);

		$crop_data = json_decode(stripslashes($this->input_data['avatar-data']));
		$type = $this->input_data['type'];
		$product_images = $this->product_images_model->find($id);

		if(isset($_FILES['file'])){
			$file = $_FILES['file'];
			$name = $encrypt_id.'_'.date('YmdHis').'.jpg';

			$uploadPath = APPPATH . '../public/product_images/original_'.$name;
			$result = move_uploaded_file($file['tmp_name'], $uploadPath);
			// chmod($uploadPath, 0777);

		}else{

			$name = $encrypt_id.'_'.date('YmdHis').'.jpg';
			$olduploadPath = APPPATH . '../public/product_images/original_'.$product_images->file_name;
			$uploadPath = APPPATH . '../public/product_images/original_'.$name;
			rename($olduploadPath, $uploadPath);
			// chmod($uploadPath, 0777);

		}

		$result_crop = $this->crop($uploadPath,$name,$crop_data);
		if($result_crop['status']=='success'){

			$uploadGS = new uploadGS();
	    	$cloudPath = 'product_images/'.$type.'/original/'.$name;
			$fileContent = file_get_contents($uploadPath);
			$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);
			if($isSucceed == true) {

				// unlink($uploadPath);
				$path_images_crop = $result_crop['thumbPath'];

				$result_resize = $this->resize($name,$crop_data->form_width);
				if($result_resize['status']=='success'){
				
		        	$cloudPath = 'product_images/'.$type.'/'.$name;
					$fileContent = file_get_contents($path_images_crop);
					$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);
					if($isSucceed == true) {

			            $result_resize = $this->resize($name,300);
						if($result_resize['status']=='success'){

							$path_images_resize = $result_resize['thumbPath'];

							$cloudPath = 'product_images/'.$type.'/thumbs/'.$name;
							$fileContent = file_get_contents($path_images_resize);
							$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);
							if($isSucceed == true) {

								unlink($path_images_crop);
								unlink($path_images_resize);

			           			$response['status'] = "success";
					            $response['msg'] = 'SUCCESS: to upload';
					            $response['thumbPath'] = 'https://storage.googleapis.com/'.$this->bucketName.'/'.$cloudPath;
					            $response['file_name'] = $name;

			           			// $this->product_images_model->update(array('sample_image'=>$response['thumbPath'],'file_name'=>$name),$id);

			           		}else{

								$response['status'] = "error";
		            			$response['msg'] = 'FAILED: to upload ' . $cloudPath . PHP_EOL;

							}

						}else{

							$response['status'] = "error";
							$response['data'] = $result_resize;
	            			$response['msg'] = 'FAILED: to upload ' . $cloudPath . PHP_EOL;

						}

			        }

		        }
		        

			} else {
	            $response['status'] = "error";
	            $response['msg'] = 'FAILED: to upload ' . $cloudPath . PHP_EOL;
	        }
	        

		}else{

			$response['status'] = "error";
	        $response['msg'] = 'FAILED: to upload ';

		}
		echo json_encode($response);


	}



	private function crop($source,$name,$crop_data){

		$config['image_library'] = 'gd2';
        $config['source_image'] = $source;
        $config['new_image'] = APPPATH . '../public/product_images/'.$name;
        $config['x_axis'] = round($crop_data->x,0);
        $config['y_axis'] = round($crop_data->y,0);
        $config['maintain_ratio'] = FALSE;
        $config['width'] = round($crop_data->width,0);
        $config['height'] = round($crop_data->height,0);

        $this->image_lib->initialize($config);
		if (!$this->image_lib->crop()){

		    $response['status'] = "error";
            $response['msg'] = 'FAILED: to crop ' . $this->image_lib->display_errors();

		}else{

			$response['status'] = "success";
            $response['msg'] = 'SUCCESS: to crop';
            $response['thumbPath'] = $config['new_image'];

		}

		return $response;

	}

	private function resize($name,$width){

		$config['image_library'] = 'gd2';
		$config['source_image'] = APPPATH . '../public/product_images/'.$name;
		$config['new_image'] = APPPATH . '../public/product_images/new_resize_'.$name;
		$config['maintain_ratio'] = TRUE;
		$config['width']         = round($width,0);

		$this->image_lib->clear();
		$this->image_lib->initialize($config);

		if (!$this->image_lib->resize()){
            $response['status'] = "error";
            $response['msg'] = 'FAILED: to resize ';
        }else{
			$response['status'] = "success";
            $response['msg'] = 'SUCCESS: to resize';
            $response['thumbPath'] = $config['new_image'];
		}

		return $response;

	}

}

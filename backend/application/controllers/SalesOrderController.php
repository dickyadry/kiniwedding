<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalesOrderController extends MY_Controller{
	
	public function __construct(){
		parent::__construct();

		$userlog = $this->session->userdata('adminData');
		if(empty($userlog)){
			redirect(base_url('login'));;
		}
		
		$this->load->library("uploadGS");
		$this->bucketName = "eventstack-storage";
		$this->load->library('image_lib');
		$this->load->library('form_validation');
		
		$this->sales_order_model = new GeneralModel("sales_order");
		$this->sales_order_detail_model = new GeneralModel("sales_order_detail");
		$this->sales_order_images_model = new GeneralModel("sales_order_images");
		$this->sales_order_form_model = new GeneralModel("sales_order_form");
		$this->product_images_model = new GeneralModel("product_images");
		$this->product_model = new GeneralModel("product");

        $this->userData = $this->session->userdata("adminData");
	}

	public function index(){

		$limit = isset($this->input_data['limit'])?$this->input_data['limit']:10;
		$page = isset($this->input_data['page'])?$this->input_data['page']:1;
		$start = isset($this->input_data['page'])?(($page-1)*$limit):0;
		$status = isset($this->input_data['status'])?$this->input_data['status']:'';
		$q = isset($this->input_data['q'])?$this->input_data['q']:'';

		$query = $this->sales_order_model->source();
		if($status!=''){ $query->where('status_order',$status); }
		if($q!=''){ 
			$query->group_start();
				$query->like('LOWER(sales_order_no)',strtolower($q));
				$query->or_like('LOWER(customer_name)',strtolower($q)); 
			$query->group_end();
		}
		$count = $query->count_all_results();

		$query = $this->sales_order_model->source();
		$query->order_by("sales_order.id", "DESC");
		$query->limit($limit,$start);
		if($status!=''){ $query->where('status_order',$status); }
		if($q!=''){ 
			$query->group_start();
				$query->like('LOWER(sales_order_no)',strtolower($q));
				$query->or_like('LOWER(customer_name)',strtolower($q)); 
			$query->group_end();
		}
		$datas = $query->get()->result();

		$data['pagination'] = $this->paging_page('sales-order',$limit,$count);

		$data['total_page'] = ceil($count/$limit);
		$data['page'] = $page;
		$data['limit'] = $limit;
		$data['datas'] = $datas;

        $c = $this->load->view("contents/sales-order/list", $data, true);
		$this->load_layout($c);

	}

	public function view($id=0){

		$data = array();
		$data["title"] = "Detail Tiket";
		$data["title_small"] = "Detail Tiket page layout";

		if($id != 0){

			$sales_order = $this->sales_order_model->find($id);
			if(isset($sales_order->id)){

				$query = $this->sales_order_model->source();
				$query->select('sod.*, ticket.ticket_name, ticket.ticket_description,p.file,p.code,p.name,p.email,p.phone,p.id as id_peserta');
				$query->join('sales_order_detail sod', 'sod.sales_order_id = sales_order.id');
				$query->join('ticket','ticket.id=sod.ticket_id');
				$query->join('peserta p','p.sales_order_detail_id=sod.id');
				$query->where('sod.sales_order_id',$id);
				$data['ticket'] = $query->get()->result();

				$product = $this->product_model->find($data['ticket'][0]->product_id);
				$data["data"] = $product;
				$c = $this->load->view("contents/sales-order/view", $data, true);
				$this->load_layout($c);

			}else{
				redirect("404");
			}
		}else{
			redirect("404");
		}

	}

	public function lengkapi_data($id=0){

		$data = array();

		$data['sales_order_id'] = $id;

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$sales_order = $this->sales_order_model->find($id);
		$data['sales_order_no'] = $sales_order->sales_order_no;

		$sales_order_detail = $this->sales_order_detail_model->find($id,'sales_order_id');

		$query = $this->product_images_model->source();
		$query->select('type, count(type) as total');
		$query->where('product_id',$sales_order_detail->product_id);
		$query->group_by('type');
		$data['product_images'] = $query->get()->result();

		$data["title"] = "Lengkapi Data";
		$data["title_small"] = "Lengkapi Data page layout";

		if($id != 0){

			$sales_order_form = $this->sales_order_form_model->find($id,'sales_order_id');
			if(isset($sales_order_form->id)){

				$data["data"] = $sales_order_form;
				$c = $this->load->view("contents/sales-order/lengkapi-data", $data, true);
				$js = $this->load->view("js/sales_order/js_lengkapi_data", "", true);
				$this->load_layout($c,$js);

			}else{
				
				$c = $this->load->view("contents/sales-order/lengkapi-data", $data, true);
				$js = $this->load->view("js/sales_order/js_lengkapi_data", "", true);
				$this->load_layout($c,$js);

			}
		}else{
			redirect("404");
		}

	}

	public function cek_link($id){

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$param_data = $this->input_data;

		$query = $this->sales_order_form_model->source();
		$query->where('link_web',strtolower($param_data['link_web']));
		$query->where('sales_order_id !=',$id);
		$total_data = $query->count_all_results();

		if($total_data<1){

			$jsonData = array(
	            'status'=>'success',
	            'msg'=>'Success',
	        );
	        echo json_encode($jsonData);

		}else{

			$jsonData = array(
	            'status'=>'error',
	            'msg'=>'Link sudah terpakai, silahkan gunakan link lain',
	        );
	        echo json_encode($jsonData);

		}
		
	}
	
	public function save_lengkapi_data($id=0){

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$param_data = $this->input_data;
		$sales_order_form = $this->sales_order_form_model->find($id,'sales_order_id');
		if(isset($sales_order_form->id)){

			$this->sales_order_form_model->update($param_data,$id,'sales_order_id');

		}else{

			$param_data['sales_order_id'] = $id;
			$param_data['member_id'] = $this->userpubliclog['member_id'];
			$this->sales_order_form_model->insert($param_data);

		}

		$this->session->set_flashdata("success", "Data berhasil disimpan");
		redirect(base_url('sales-order'));

	}

	public function product_images($id){

		$data['sales_order_id'] = $id;

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$sales_order = $this->sales_order_model->find($id);
		$data['sales_order_no'] = $sales_order->sales_order_no;

		$sales_order_detail = $this->sales_order_detail_model->find($id,'sales_order_id');
		$product_id = $sales_order_detail->product_id;

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

			$query = $this->sales_order_images_model->source();
			// $query->where('product_id',$value->product_id);
			$query->where('product_images_id',$value->id);
			$query->where('sales_order_id',$id);
			$sales_order_images = $query->get()->row();

			$value->image = isset($sales_order_images->image)?$sales_order_images->image:null;
			$datas[] = $value;

		}

		$data['pagination'] = $this->paging_page('sales-order/product-images/'.encrypt_decrypt('encrypt',$product_id),$limit,$count);

		$data['total_page'] = ceil($count/$limit);
		$data['page'] = $page;
		$data['limit'] = $limit;
		$data['datas'] = $datas;

        $c = $this->load->view("contents/sales-order/product-images", $data, true);
		$this->load_layout($c);

	}

	public function edit_product_images($sales_order_id,$id){

		$data = array();
		$data['sales_order_id'] = $sales_order_id;

		$sales_order_id = strip_tags($sales_order_id);
		$sales_order_id = encrypt_decrypt('decrypt',$sales_order_id);

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$product = $this->product_images_model->find($id);
		if(isset($product->id)){

			$query = $this->sales_order_images_model->source();
			$query->where('product_images_id',$id);
			$query->where('sales_order_id',$sales_order_id);
			$sales_order_images = $query->get()->row();

			$product->image = isset($sales_order_images->image)?$sales_order_images->image:null;

			$data['data'] = $product;

	        $c = $this->load->view("contents/sales-order/form-product-images",$data,true);
	        $js = $this->load->view("js/sales_order/js_form_product_images", "", true);
			$this->load_layout($c,$js);

		}else{
			$this->load->view("contents/404");
		}

	}

	public function update_product_images($sales_order_id,$id){

		$param_data = $this->input_data;
		$data['sales_order_id'] = $sales_order_id;

		$sales_order_id = strip_tags($sales_order_id);
		$sales_order_id = encrypt_decrypt('decrypt',$sales_order_id);

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$product_images = $this->product_images_model->find($id);

		$query = $this->sales_order_images_model->source();
		$query->where('product_images_id',$id);
		$query->where('sales_order_id',$sales_order_id);
		$sales_order_images = $query->get()->row();
		if(isset($sales_order_images->id)){

			$product_images_data = array(
				'image'=>$param_data['image'],
				'file_name'=>$param_data['file_name']
			);
			$this->sales_order_images_model->update($product_images_data,$sales_order_images->id);

		}else{

			$product_images_data = array(
				'sales_order_id'=>$sales_order_id,
				'product_id'=>$product_images->product_id,
				'product_images_id'=>$product_images->id,
				'caption'=>$product_images->caption,
				'width'=>$product_images->width,
				'height'=>$product_images->height,
				'order'=>$product_images->order,
				'image'=>$param_data['image'],
				'file_name'=>$param_data['file_name']
			);
			$this->sales_order_images_model->insert($product_images_data);

		}

		$this->session->set_flashdata("success", "Success");
		redirect(base_url('sales-order/product-images/'.$data['sales_order_id']));

	}

	public function update_status($id){

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt', $id);

        $this->sales_order_model->update(array('status_order'=>1),$id);

        $query = $this->sales_order_detail_model->source();
        $query->select('sales_order_detail.*,p.name, p.cover, p.price');
        $query->join('product p','p.id = sales_order_detail.product_id');
        $query->where('sales_order_id',$id);
        $data['datas'] = $query->get()->result();
            
        $product = $this->product_model->find($data['datas'][0]->product_id);

        // $this->_sendEmailPaymentSuccess($id);
        // $this->_sendEmailTicket($id);
        // $this->_sendWaTicket($id,$product->link);

        $json['status'] = 'success';
        echo json_encode($json);

	}

	public function restore($id){

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt', $id);

        $this->sales_order_model->update(array('status_order'=>4),$id);

        $json['status'] = 'success';
        echo json_encode($json);
        
	}

	public function update_status_pembayaran($id,$code){

		$code = strip_tags($code);
        $id = encrypt_decrypt('decrypt', $id);
        $code = encrypt_decrypt('decrypt', $code);
        if($code!='eventstack'){
            $this->session->set_flashdata("error", "Halaman tidak ditemukan");
            redirect("404");
        }

        $this->sales_order_model->update(array('status_order'=>1),$id);

        $query = $this->sales_order_detail_model->source();
        $query->select('sales_order_detail.*,p.name, p.cover, p.price');
        $query->join('product p','p.id = sales_order_detail.product_id');
        $query->where('sales_order_id',$id);
        $data['datas'] = $query->get()->result();
            
        $product = $this->product_model->find($data['datas'][0]->product_id);

        // $this->_sendEmailPaymentSuccess($id);
        // $this->_sendEmailTicket($id);
        // $this->_sendWaTicket($id,$product->link);

        $this->session->set_flashdata("success", "Success");
        redirect(base_url());

	}

	public function photo_upload($sales_order_id, $encrypt_id){

		$sales_order_id = strip_tags($sales_order_id);
		$sales_order_id = encrypt_decrypt('decrypt',$sales_order_id);

		$id = strip_tags($encrypt_id);
		$id = encrypt_decrypt('decrypt',$id);

		$crop_data = json_decode(stripslashes($this->input_data['avatar-data']));
		$type = $this->input_data['type'];

		if(isset($_FILES['file'])){
			$file = $_FILES['file'];
			$name = $encrypt_id.'_'.date('YmdHis').'.jpg';

			$uploadPath = APPPATH . '../public/product_images/original_'.$name;
			$result = move_uploaded_file($file['tmp_name'], $uploadPath);
			// chmod($uploadPath, 0777);

		}else{

			$query = $this->sales_order_images_model->source();
			$query->where('product_images_id',$id);
			$query->where('sales_order_id',$sales_order_id);
			$sales_order_images = $query->get()->row();
			if(isset($sales_order_images->id)){

				$name = $encrypt_id.'_'.date('YmdHis').'.jpg';
				$olduploadPath = APPPATH . '../public/product_images/original_'.$sales_order_images->file_name;
				$uploadPath = APPPATH . '../public/product_images/original_'.$name;
				rename($olduploadPath, $uploadPath);
				// chmod($uploadPath, 0777);

			}

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
?>
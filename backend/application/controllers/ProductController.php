<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->library("uploadGS");
		$this->bucketName = "eventstack-storage";
		$this->load->library('image_lib');
		$this->load->library('form_validation');
		$this->product_model = new GeneralModel("product");

	}

	public function index(){

		$this->session_admin_only();	

		$limit = isset($this->input_data['limit'])?$this->input_data['limit']:10;
		$page = isset($this->input_data['page'])?$this->input_data['page']:1;
		$start = isset($this->input_data['page'])?(($page-1)*$limit):0;
		$q = isset($this->input_data['q'])?$this->input_data['q']:'';

		$count = $this->product_model->source();
		if($q!=''){ $count->like('LOWER(name)',strtolower($q)); }
		$count = $count->count_all_results();

		$query = $this->product_model->source();
		$query->order_by("id", "ASC");
		$query->limit($limit,$start);
		if($q!=''){ $query->like('LOWER(name)',strtolower($q)); }
		$datas = $query->get()->result();

		$data['pagination'] = $this->paging_page('product',$limit,$count);

		$data['total_page'] = ceil($count/$limit);
		$data['page'] = $page;
		$data['limit'] = $limit;
		$data['datas'] = $datas;

        $c = $this->load->view("contents/product/list", $data, true);
		$this->load_layout($c);

	}

	public function filter(){

		$this->session();

		$type = isset($this->input_data['type'])?$this->input_data['type']:'';
		$selected = isset($this->input_data['selected'])?$this->input_data['selected']:'';

		$query = $this->product_model->source();
		$query->order_by("id", "ASC");
		$query->where('type',$type);
		$datas = $query->get()->result();

		$html = '';
		foreach ($datas as $key => $value) {
			$selected = (isset($selected) && $selected==$value->id)?'selected':'';
            $html .= '<option value="'.$value->id.'">'.$value->name.'</option>';
        } 

		$result = array(
			'data'=>$html, 
			'status'=>'success', 
			'msg'=>'Success'
		);
		echo json_encode($result);

	}

	public function add(){

		$this->session_admin_only();

		$data = array();
		$c = $this->load->view("contents/product/form",$data,true);
		$js = $this->load->view("js/product/js_form_product", "", true);
		$this->load_layout($c,$js);

	}

	public function save(){

		$this->session_admin_only();

		$param_data = $this->input_data;
		$id = $this->product_model->insert($param_data);
		redirect(base_url('product'));

	}

	public function edit($id){

		$this->session_admin_only();

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$data = array();
		$data['data'] = $this->product_model->find($id);
        $c = $this->load->view("contents/product/form",$data,true);
		$js = $this->load->view("js/product/js_form_product", "", true);
		$this->load_layout($c,$js);

	}

	public function update($id){

		$this->session_admin_only();

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);
		
		$param_data = $this->input_data;
		$this->product_model->update($param_data,$id);
		redirect(base_url('product'));

	}

	public function delete($id){

		$this->session_admin_only();

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$this->product_model->delete($id);
		redirect(base_url('product'));

	}

	function photo_upload(){
    	$file = $_FILES['file'];
    	$size_img = array(
    		'small' => array('200','200'),
    		'medium' => array('400','400'),
    		'large' => array('500','500')
    	);

		$unique = substr(md5(time().'_'.$file['name']), -7);
		$name  = $unique.'.jpg';

    	$crop_data = json_decode(stripslashes($this->input_data['avatar-data']));

    	$uploadPath = APPPATH . '../public/images/';
		$result = move_uploaded_file($file['tmp_name'], $uploadPath.'original/'.$name);

		$result_crop = $this->crop($uploadPath.'original/'.$name,$name,$crop_data);
		if($result_crop['status']=='success'){
			
			$uploadGS = new uploadGS();

			foreach ($size_img as $key => $value) {

				$file_name = '_thumb/'.$key.'/'.$name; 
				$result_resize = $this->resize($result_crop['thumbPath'], $file_name, $value[0]);

				$cloudPath = 'images/'.$key.'/'.$name;
				$fileContent = file_get_contents($uploadPath.$file_name);
				$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);
    			unlink($uploadPath.$file_name);

	    	}

	    	unlink($uploadPath.$name);
	    	unlink($uploadPath.'original/'.$name);

	        if ($isSucceed == true) {
	        	$response['status'] = 'success';
	            $response['msg'] = 'SUCCESS: to upload ' . $cloudPath . PHP_EOL;
	            $response['thumbPath'] = 'https://storage.googleapis.com/'.$this->bucketName.'/images/medium/'.$name;
	        } else {
	            $response['status'] = "error";
	            $response['msg'] = 'FAILED: to upload ' . $cloudPath . PHP_EOL;
	        }
	        echo json_encode($response);

		}

    }

    private function crop($source,$name,$crop_data){

		$config['image_library'] = 'gd2';
        $config['source_image'] = $source;
        $config['new_image'] = APPPATH . '../public/images/'.$name;
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

	private function resize($source,$name,$width){

		$config['image_library'] = 'gd2';
		$config['source_image'] = $source;
		$config['new_image'] = APPPATH . '../public/images/'.$name;
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

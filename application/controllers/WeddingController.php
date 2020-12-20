<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WeddingController extends MY_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->library('form_validation');
		$this->buku_tamu_model = new GeneralModel("buku_tamu");
		$this->sales_order_model = new GeneralModel("sales_order");
		$this->sales_order_detail_model = new GeneralModel("sales_order_detail");
		$this->sales_order_images_model = new GeneralModel("sales_order_images");
		$this->sales_order_form_model = new GeneralModel("sales_order_form");
		$this->product_model = new GeneralModel("product");
		$this->product_images_model = new GeneralModel("product_images");
	}

	public function wedding($param="dicky-dan-ricka"){

		$data = $this->sales_order_form_model->find($param,'link_web');
		$sales_order = $this->sales_order_model->find($data->sales_order_id);
		$sales_order_detail = $this->sales_order_detail_model->find($data->sales_order_id,'sales_order_id');
		$sales_order_images = $this->sales_order_images_model->find($data->sales_order_id,'sales_order_id');
		$product = $this->product_model->find($sales_order_detail->product_id);
		
		$query = $this->buku_tamu_model->source();
		$query->where('sales_order_id',$data->sales_order_id);
		$query->order_by('id','DESC');
		$data->buku_tamu = $query->get()->result();

		$query = $this->sales_order_images_model->source();
		$query->where('sales_order_id',$data->sales_order_id);
		$query->where('type','SLIDER');
		$query->order_by('order','ASC');
		$data->slider = $query->get()->result();

		$query = $this->sales_order_images_model->source();
		$query->where('sales_order_id',$data->sales_order_id);
		$query->where('type','GALERI');
		$query->order_by('order','ASC');
		$data->galeri = $query->get()->result();

		$query = $this->sales_order_images_model->source();
		$query->where('sales_order_id',$data->sales_order_id);
		$query->where('type','PENGANTIN');
		$query->order_by('order','ASC');
		$data->pengantin = $query->get()->result();

		$query = $this->sales_order_images_model->source();
		$query->where('sales_order_id',$data->sales_order_id);
		$query->where('type','BACKGROUND');
		$query->order_by('order','ASC');
		$data->background = $query->get()->result();

		$query = $this->sales_order_images_model->source();
		$query->where('sales_order_id',$data->sales_order_id);
		$query->where('type','LAINNYA');
		$query->order_by('order','ASC');
		$data->lainnya = $query->get()->result();

		$data->product = $product; 
		$data->js = $this->load->view("js/product/js_custom_".$product->code, $data, true);
		$this->load->view("product/theme-".$product->code, $data);

	}

	public function demo($product_id){

		$id = strip_tags($product_id);
		$id = encrypt_decrypt('decrypt',$id);
		
		$data = $this->sales_order_form_model->find(0);
		$product = $this->product_model->find($id);
		$data->product = $product;

		$query = $this->buku_tamu_model->source();
		$query->where('sales_order_id',0);
		$query->order_by('id','DESC');
		$data->buku_tamu = $query->get()->result();

		$query = $this->product_images_model->source();
		$query->select('*, sample_image as image');
		$query->where('product_id',$id);
		$query->where('type','SLIDER');
		$query->order_by('order','ASC');
		$data->slider = $query->get()->result();

		$query = $this->product_images_model->source();
		$query->select('*, sample_image as image');
		$query->where('product_id',$id);
		$query->where('type','GALERI');
		$query->order_by('order','ASC');
		$data->galeri = $query->get()->result();

		$query = $this->product_images_model->source();
		$query->select('*, sample_image as image');
		$query->where('product_id',$id);
		$query->where('type','PENGANTIN');
		$query->order_by('order','ASC');
		$data->pengantin = $query->get()->result();

		$query = $this->product_images_model->source();
		$query->select('*, sample_image as image');
		$query->where('product_id',$id);
		$query->where('type','BACKGROUND');
		$query->order_by('order','ASC');
		$data->background = $query->get()->result();

		$query = $this->product_images_model->source();
		$query->select('*, sample_image as image');
		$query->where('product_id',$id);
		$query->where('type','LAINNYA');
		$query->order_by('order','ASC');
		$data->lainnya = $query->get()->result();
		
		$data->js = $this->load->view("js/product/js_custom_".$product->code, $data, true);
		$this->load->view("product/theme-".$product->code, $data);

	}

	public function buku_tamu($sales_order_id){

		$sales_order_id = strip_tags($sales_order_id);
		$sales_order_id = encrypt_decrypt('decrypt',$sales_order_id);

		$param_data = $this->input_data;
		$param_data['sales_order_id'] = $sales_order_id;
		$id = $this->buku_tamu_model->insert($param_data);
		if($id){

			$jsonData = array(
	            'status'=>'success',
	            'msg'=>'Success',
	        );
	        echo json_encode($jsonData);

		}else{

			$jsonData = array(
	            'status'=>'error',
	            'msg'=>'Gagal menyimpan data',
	        );
	        echo json_encode($jsonData);

		}
	}

  
}

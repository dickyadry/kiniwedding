<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WeddingController extends MY_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->library('form_validation');
		$this->sales_order_model = new GeneralModel("sales_order");
		$this->sales_order_detail_model = new GeneralModel("sales_order_detail");
		$this->sales_order_images_model = new GeneralModel("sales_order_images");
		$this->sales_order_form_model = new GeneralModel("sales_order_form");
		$this->product_model = new GeneralModel("product");
		$this->product_images_model = new GeneralModel("product_images");
	}

	public function wedding($param="dicky-dan-ricka"){

		$data = array();

		$data = $this->sales_order_form_model->find($param,'link_web');
		$sales_order = $this->sales_order_model->find($data->sales_order_id);
		$sales_order_detail = $this->sales_order_detail_model->find($data->sales_order_id,'sales_order_id');
		$sales_order_images = $this->sales_order_images_model->find($data->sales_order_id,'sales_order_id');
		$product = $this->product_model->find($sales_order_detail->product_id);
		
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
		$this->load->view("product/theme-".$product->code, $data);

	}

  
}
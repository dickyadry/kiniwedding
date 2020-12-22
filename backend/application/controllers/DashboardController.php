<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
		$this->product_model = new GeneralModel("product");
		$this->sales_order_model = new GeneralModel("sales_order");
		$this->member_model = new GeneralModel("member");
		$this->tujuan_model = new GeneralModel("tujuan");

	}

	public function index(){

		$this->session_admin_only();
		
		$today = date('Y-m-d');
		
		$count = $this->product_model->source();
		$data['total_product']  = $count->count_all_results();

		$count = $this->sales_order_model->source();
		$count->where('status_order',4);
		$count->where("created_at >=",date('Y-01-01 01:01:01'));
		$count->where("created_at <=",date('Y-m-d H:i:s'));
		$data['total_pending_order']  = $count->count_all_results();

		$count = $this->sales_order_model->source();
		$count->where('status_order',1);
		$count->where("created_at >=",date('Y-01-01 01:01:01'));
		$count->where("created_at <=",date('Y-m-d H:i:s'));
		$data['total_complete_order']  = $count->count_all_results();

		$count = $this->sales_order_model->source();
		$count->where("created_at >=",date('Y-01-01 01:01:01'));
		$count->where("created_at <=",date('Y-m-d H:i:s'));
		$data['total_transaksi']  = $count->count_all_results();

		////////// MEMBER ////////
		$count = $this->member_model->source();
		$data['total_member']  = $count->count_all_results();

		$count = $this->member_model->source();
		$count->where('is_active','1');
		$data['member_aktif']  = $count->count_all_results();

		$count = $this->member_model->source();
		$count->where('is_active','0');
		$data['member_tidak_aktif']  = $count->count_all_results();

		$count = $this->member_model->source();
		$count->where('is_active','2');
		$data['member_pending']  = $count->count_all_results();

        $c = $this->load->view("contents/dashboard/dashboard", $data, true);
		$this->load_layout($c);

	}


}

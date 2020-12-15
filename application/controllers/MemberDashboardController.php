<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberDashboardController extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->product_model = new GeneralModel("product");
		$this->sales_order_model = new GeneralModel("sales_order");

	}

	public function dashboard(){

		$this->cek_user_session();

		$today = date('Y-m-d');

		$data = array();
		$data["title_page"] = "Dashboard | " . "Event Stack";
		$data["title"] = "Dashboard";
		$data["title_small"] = "Dashboard page layout";

		$query = $this->product_model->source();
		$query->where(" DATE(end_date) >=",$today);
		$query->where('status','aktif');
		$query->where('member_id',$this->userpubliclog['member_id']);
		$data['event_aktif'] = $query->count_all_results();

		$query = $this->product_model->source();
		$query->where('status','draf');
		$query->where('member_id',$this->userpubliclog['member_id']);
		$data['event_draf'] = $query->count_all_results();

		$query = $this->product_model->source();
		$query->group_start();
			$query->where(" DATE(end_date) <",$today);
			$query->or_where('status','closed');
		$query->group_end();
		$query->where('member_id',$this->userpubliclog['member_id']);
		$data['event_lalu'] = $query->count_all_results();


		$query = $this->product_model->source();
		$query->join('sales_order_detail sod','sod.product_id=product.id');
		$query->select_sum('quantity');
		$query->where('member_id',$this->userpubliclog['member_id']);
		$total_tiket_terjual = $query->get()->row()->quantity;
		$data['total_tiket_terjual'] = ($total_tiket_terjual!="")?$total_tiket_terjual:0;
		
		$query = $this->sales_order_model->source();
		$query->join('sales_order_detail sod','sod.sales_order_id=sales_order.id');
		$query->join('product p','p.id=sod.product_id');
		$query->where('p.member_id',$this->userpubliclog['member_id']);
		$data['total_transaksi'] = $query->count_all_results();

		$query = $this->product_model->source();
		$query->join('sales_order_detail sod','sod.product_id=product.id');
		$query->join('sales_order so', 'sod.sales_order_id = so.id');
		$query->select_sum('total');
		$query->where('status_order',1);
		$query->where('product.member_id',$this->userpubliclog['member_id']);
		$data['total_penjualan'] = $query->get()->row()->total;

		// $query = $this->product_model->source();
		// $query->select_sum('pageview');
		// $query->where('member_id',$this->userpubliclog['member_id']);
		// $data['total_pengunjung'] = $query->get()->row()->pageview;

		$c = $this->load->view("contents/member/dashboard", $data, true);
		$this->load_layout_member($c);


	}



}

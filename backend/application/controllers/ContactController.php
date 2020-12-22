<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends MY_Controller{
	
	public function __construct(){
		parent::__construct();

		$userlog = $this->session->userdata('adminData');
		if(empty($userlog)){
			redirect(base_url('login'));;
		}
		
		$this->load->library('form_validation');
		$this->contact_model = new GeneralModel("contact");
		

	}

	public function index(){

		$limit = isset($this->input_data['limit'])?$this->input_data['limit']:10;
		$page = isset($this->input_data['page'])?$this->input_data['page']:1;
		$start = isset($this->input_data['page'])?(($page-1)*$limit):0;
		$q = isset($this->input_data['q'])?$this->input_data['q']:'';

		$query = $this->contact_model->source();
		if($q!=''){ 
			$query->group_start();
				$query->like('LOWER(name)',strtolower($q));
				$query->or_like('LOWER(email)',strtolower($q)); 
				$query->or_like('LOWER(subject)',strtolower($q)); 
				$query->or_like('LOWER(msg)',strtolower($q)); 
			$query->group_end();
		}
		$total_data = $query->count_all_results();

		$query = $this->contact_model->source();
		if($q!=''){ 
			$query->group_start();
				$query->like('LOWER(name)',strtolower($q));
				$query->or_like('LOWER(email)',strtolower($q)); 
				$query->or_like('LOWER(subject)',strtolower($q)); 
				$query->or_like('LOWER(msg)',strtolower($q)); 
			$query->group_end();
		}
		$query->limit($limit,$start);
		$datas = $query->get()->result();

		$data['pagination'] = $this->paging_page('contact',$limit,$total_data);

		$data['total_page'] = ceil($total_data/$limit);
		$data['page'] = $page;
		$data['limit'] = $limit;
		$data['datas'] = $datas;

        $c = $this->load->view("contents/contact/list", $data, true);
		$this->load_layout($c);

	}

}
?>
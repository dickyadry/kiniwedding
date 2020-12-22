<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryController extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
		$this->category_model = new GeneralModel("category");

	}

	public function index(){

		$this->session_admin_only();	

		$limit = isset($this->input_data['limit'])?$this->input_data['limit']:10;
		$page = isset($this->input_data['page'])?$this->input_data['page']:1;
		$start = isset($this->input_data['page'])?(($page-1)*$limit):0;
		$q = isset($this->input_data['q'])?$this->input_data['q']:'';

		$count = $this->category_model->source();
		if($q!=''){ $count->like('LOWER(name)',strtolower($q)); }
		$count = $count->count_all_results();

		$query = $this->category_model->source();
		$query->order_by("id", "ASC");
		$query->limit($limit,$start);
		if($q!=''){ $query->like('LOWER(name)',strtolower($q)); }
		$datas = $query->get()->result();

		$data['pagination'] = $this->paging_page('category',$limit,$count);

		$data['total_page'] = ceil($count/$limit);
		$data['page'] = $page;
		$data['limit'] = $limit;
		$data['datas'] = $datas;

        $c = $this->load->view("contents/category/list", $data, true);
		$this->load_layout($c);

	}

	public function filter(){

		$this->session();

		$type = isset($this->input_data['type'])?$this->input_data['type']:'';
		$selected = isset($this->input_data['selected'])?$this->input_data['selected']:'';

		$query = $this->category_model->source();
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
		$c = $this->load->view("contents/category/form",$data,true);
		$this->load_layout($c);

	}

	public function save(){

		$this->session_admin_only();

		$param_data = $this->input_data;
		$id = $this->category_model->insert($param_data);
		redirect(base_url('category'));

	}

	public function edit($id){

		$this->session_admin_only();

		$data = array();
		$data['data'] = $this->category_model->find($id);
        $c = $this->load->view("contents/category/form",$data,true);
		$this->load_layout($c);

	}

	public function update($id){

		$this->session_admin_only();

		$param_data = $this->input_data;
		$this->category_model->update($param_data,$id);
		redirect(base_url('category'));

	}

	public function delete($id){

		$this->session_admin_only();

		$this->category_model->delete($id);
		redirect(base_url('category'));

	}

}

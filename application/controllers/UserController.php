<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$userlog = $this->session->userdata('adminData');
		if(empty($userlog)){
			redirect(base_url('login'));;
		}
		
		$this->load->library('form_validation');
		$this->load->library("uploadS3");

		$this->user_model = new GeneralModel("user");
		$this->rkms_model = new GeneralModel("rkms");
		$this->implementasi_model = new GeneralModel("implementasi");
		$this->user_roles_model = new GeneralModel("user_roles");
	}

	public function index(){

		$limit = isset($this->input_data['limit'])?$this->input_data['limit']:10;
		$page = isset($this->input_data['page'])?$this->input_data['page']:1;
		$start = isset($this->input_data['page'])?(($page-1)*$limit):0;
		$q = isset($this->input_data['q'])?$this->input_data['q']:'';

		$count = $this->user_model->source();
		if($q!=''){ $count->like('LOWER(fullname)',strtolower($q)); }
		$count = $count->count_all_results();

		$query = $this->user_model->source();
		$query->order_by("id", "ASC");
		$query->limit($limit,$start);
		if($q!=''){ $query->like('LOWER(fullname)',strtolower($q)); }
		$datas = $query->get()->result();

		$data['pagination'] = $this->paging_page('user',$limit,$count);

		$data['datas'] = $datas;
        $data['total_page'] = ceil($count/$limit);
		$data['page'] = $page;
		$data['limit'] = $limit;

        $c = $this->load->view("contents/user/list", $data, true);
		$this->load_layout($c);
	}

	public function add(){

		$data = array();

		$datas = array();
		$query = $this->rkms_model->source();
		$query->where('parent_id',0);
		$query->order_by("urutan", "ASC");
		$datas_rkms = $query->get()->result();
		foreach ($datas_rkms as $key => $value) {
			$value->child = $this->child_rkms($value->id);
			$datas[] = $value;
		}
		$data['rkms'] = $datas;

		$datas = array();
		$query = $this->implementasi_model->source();
		$query->where('parent_id',0);
		$query->order_by("urutan", "ASC");
		$datas_implementasi = $query->get()->result();
		foreach ($datas_implementasi as $key => $value) {
			$value->child = $this->child_implementasi($value->id);
			$datas[] = $value;
		}
		$data['implementasi'] = $datas;


        $c = $this->load->view("contents/user/form",$data,true);
		$this->load_layout($c);

	}

	private function child_rkms($parent_id){

		$query = $this->rkms_model->source();
		$query->where('parent_id',$parent_id);
		$query->order_by("urutan", "ASC");
		$datas_rkms = $query->get()->result();
		if(count($datas_rkms)>0){
			foreach ($datas_rkms as $key => $value) {

				$value->child = $this->child_rkms($value->id);
				$datas[] = $value;
			}
			return $datas;

		}else{
			return array();
		}

	}

	private function child_implementasi($parent_id){

		$query = $this->implementasi_model->source();
		$query->where('parent_id',$parent_id);
		$query->order_by("urutan", "ASC");
		$datas_implementasi = $query->get()->result();
		if(count($datas_implementasi)>0){
			foreach ($datas_implementasi as $key => $value) {
				$value->child = $this->child_implementasi($value->id);
				$datas[] = $value;
			}
			return $datas;

		}else{
			return array();
		}

	}

	public function password_check($str)
	{
	   if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
	     return TRUE;
	   }
	   return FALSE;
	}

	public function save(){

		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password','required|min_length[6]');
        $this->form_validation->set_rules('re_password', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE)
        {
                $this->add();
        }
        else
        {
                
            $param_data = array(
				'fullname' => $this->input_data['name'],
				'username' => $this->input_data['username'],
				'password' => password_hash($this->input_data['password'], PASSWORD_BCRYPT),
				'email' => $this->input_data['email'],
				'is_active' => $this->input_data['is_active'],
			);

			$id = $this->user_model->insert($param_data);

			if(isset($this->input_data['user_roles'])){
				foreach ($this->input_data['user_roles'] as $key => $value) {
					$this->user_roles_model->insert(array('user_id'=>$id,'rkms_id'=>$key));
				}
			}

			if(isset($this->input_data['user_roles_implementasi'])){
				foreach ($this->input_data['user_roles_implementasi'] as $key => $value) {
					$this->user_roles_model->insert(array('user_id'=>$id,'rkms_implementasi_id'=>$key,'type'=>'implementasi'));
				}
			}

			redirect(base_url('user'));

        }

	}

	public function edit($id){

		$data = array();

		$datas = array();
		$query = $this->rkms_model->source();
		$query->where('parent_id',0);
		$query->order_by("urutan", "ASC");
		$datas_rkms = $query->get()->result();
		foreach ($datas_rkms as $key => $value) {
			$value->child = $this->child_rkms($value->id);
			$datas[] = $value;
		}
		$data['rkms'] = $datas;

		$datas = array();
		$query = $this->implementasi_model->source();
		$query->where('parent_id',0);
		$query->order_by("urutan", "ASC");
		$datas_implementasi = $query->get()->result();
		foreach ($datas_implementasi as $key => $value) {
			$value->child = $this->child_implementasi($value->id);
			$datas[] = $value;
		}
		$data['implementasi'] = $datas;

		$user_roles_rkms = array();
		$query = $this->user_roles_model->source();
		$query->select('rkms_implementasi_id');
		$query->where('type','rkms');
		$query->where('user_id',$id);
		$datas_user_roles = $query->get()->result();
		foreach ($datas_user_roles as $key => $value) {
			$user_roles_rkms[] = $value->rkms_implementasi_id;
		}
		$data['user_roles_rkms'] = $user_roles_rkms;

		$user_roles_implementasi = array();
		$query = $this->user_roles_model->source();
		$query->select('rkms_implementasi_id');
		$query->where('type','implementasi');
		$query->where('user_id',$id);
		$datas_user_roles = $query->get()->result();
		foreach ($datas_user_roles as $key => $value) {
			$user_roles_implementasi[] = $value->rkms_implementasi_id;
		}
		$data['user_roles_implementasi'] = $user_roles_implementasi;

		$data['data'] = $this->user_model->find($id);
        $c = $this->load->view("contents/user/form_edit",$data,true);
		$this->load_layout($c);

	}

	public function update($id){

		$this->form_validation->set_rules('name', 'name', 'required');
        if ($this->form_validation->run() == FALSE)
        {
                $this->edit($id);
        }
        else
        {

        	$param_data = array(
				'fullname' => $this->input_data['name'],
				'is_active' => $this->input_data['is_active'],
			);
			$this->user_model->update($param_data,$id);
			
			$this->db->where('user_id',$id);
			$this->db->where('type','rkms');
        	$this->db->delete('user_roles');

        	$this->db->where('user_id',$id);
			$this->db->where('type','implementasi');
        	$this->db->delete('user_roles');

			if(isset($this->input_data['user_roles_rkms'])){
				foreach ($this->input_data['user_roles_rkms'] as $key => $value) {
					$this->user_roles_model->insert(array('user_id'=>$id,'rkms_implementasi_id'=>$key,'type'=>'rkms'));
				}
			}

			if(isset($this->input_data['user_roles_implementasi'])){
				foreach ($this->input_data['user_roles_implementasi'] as $key => $value) {
					$this->user_roles_model->insert(array('user_id'=>$id,'rkms_implementasi_id'=>$key,'type'=>'implementasi'));
				}
			}

			redirect(base_url('user'));

		}

	}

	public function change_password($id){

		$data = array();
		$data['id'] = $id;
        $c = $this->load->view("contents/user/form_change_password",$data,true);
		$this->load_layout($c);

	}

	public function update_password($id){

        $this->form_validation->set_rules('password', 'Password','required|min_length[6]');
        $this->form_validation->set_rules('re_password', 'Password Confirmation', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE)
        {
            $this->change_password($id);
        }
        else
        {

			$param_data = array(
				'password' => password_hash($this->input_data['password'], PASSWORD_BCRYPT),
			);

			$this->user_model->update($param_data,$id);
			redirect(base_url('user'));
		}

	}

	public function delete($id){

		$this->user_model->delete($id);
		redirect(base_url('user'));

	}

  
}

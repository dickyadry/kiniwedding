<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberController extends MY_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->library('form_validation');
		$this->member_model = new GeneralModel("member");
	}

	public function index(){

		$this->session_admin_only();

		$limit = isset($this->input_data['limit'])?$this->input_data['limit']:10;
		$page = isset($this->input_data['page'])?$this->input_data['page']:1;
		$start = isset($this->input_data['page'])?(($page-1)*$limit):0;
		$q = isset($this->input_data['q'])?$this->input_data['q']:'';

		$query = $this->member_model->source();
		if($q!=''){ 
			$query->group_start();
				$query->like('LOWER(name)',strtolower($q));
				$query->or_like('LOWER(organization)',strtolower($q)); 
				$query->or_like('LOWER(email)',strtolower($q)); 
				$query->or_like('LOWER(phone)',strtolower($q)); 
			$query->group_end();
		}
		$count = $query->count_all_results();

		$query = $this->member_model->source();
		if($q!=''){ 
			$query->group_start();
				$query->like('LOWER(name)',strtolower($q));
				$query->or_like('LOWER(organization)',strtolower($q)); 
				$query->or_like('LOWER(email)',strtolower($q)); 
				$query->or_like('LOWER(phone)',strtolower($q)); 
			$query->group_end();
		}
		$query->order_by("id", "DESC");
		$query->limit($limit,$start);
		$datas = $query->get()->result();

		$data['pagination'] = $this->paging_page('member',$limit,$count);

		$data['datas'] = $datas;
        $data['total_page'] = ceil($count/$limit);
		$data['page'] = $page;
		$data['limit'] = $limit;

        $c = $this->load->view("contents/member/list", $data, true);
		$this->load_layout($c);
	}

	public function add(){

		$this->session_admin_only();

		$data = array();

        $c = $this->load->view("contents/member/form",$data,true);
        $js = $this->load->view("js/member/js_member", "", true);

		$this->load_layout($c,$js);

	}

	public function save(){

		$this->session_admin_only();

		$this->form_validation->set_rules("username","Username","required|callback_username_check");
		$this->form_validation->set_rules("email","Email","required|valid_email|callback_email_check");
        $this->form_validation->set_rules('password', 'Password','required|min_length[6]');
        $this->form_validation->set_rules('re_password', 'Password Confirmation', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE)
        {
                $this->add();
        }
        else
        {
                
            $param_data = array(
				'name' => $this->input_data['name'],
				'username' => $this->input_data['username'],
				'password' => password_hash($this->input_data['password'], PASSWORD_BCRYPT),
				'email' => $this->input_data['email'],
				'phone' => $this->input_data['phone'],
				'is_active' => $this->input_data['is_active'],
			);

			$id = $this->member_model->insert($param_data);
			redirect(base_url('member'));

        }

	}

	public function password_check($str)
	{
	   if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
	     return TRUE;
	   }
	   return FALSE;
	}


	public function edit($id){

		$this->session_admin_only();

		$data = array();

		$data['data'] = $this->member_model->find($id);
        $c = $this->load->view("contents/member/form_edit",$data,true);
        $js = $this->load->view("js/member/js_member", "", true);

		$this->load_layout($c,$js);

	}

	public function update($id){

		$this->session_admin_only();

		$this->form_validation->set_rules('is_active', 'is active', 'required');
        if ($this->form_validation->run() == FALSE)
        {
                $this->edit($id);
        }
        else
        {

        	$param_data = array(
				'is_active' => $this->input_data['is_active'],
			);
			$this->member_model->update($param_data,$id);
			redirect(base_url('member'));

		}

	}

	public function change_password($id){

		$this->session_admin_only();

		$data = array();
		$data['id'] = $id;
        $c = $this->load->view("contents/member/form_change_password",$data,true);
		$this->load_layout($c);

	}

	public function update_password($id){

		$this->session();

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

			$this->member_model->update($param_data,$id);

			if($this->input_data['mymember']!=""){
				$this->session->set_flashdata('success','Ganti Password berhasil');
				redirect(base_url('member/change_password'));
			}else{
				redirect(base_url('member'));
			}

		}

	}

	public function delete($id){

		$this->session_admin_only();
		
		$this->member_model->delete($id);
		redirect(base_url('member'));

	}
  
}

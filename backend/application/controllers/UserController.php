<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MY_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->library('form_validation');
		$this->user_model = new GeneralModel("user");
	}

	public function index(){

		$this->session_admin_only();

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

		$this->session_admin_only();

		$data = array();
        $c = $this->load->view("contents/user/form",$data,true);
        $js = $this->load->view("js/js_user", "", true);
		$this->load_layout($c,$js);

	}

	public function password_check($str)
	{
	   if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
	     return TRUE;
	   }
	   return FALSE;
	}

	public function save(){

		$this->session_admin_only();

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
				'level' => $this->input_data['level'],
			);

			$id = $this->user_model->insert($param_data);
			redirect(base_url('user'));

        }

	}

	public function edit($id){

		$this->session_admin_only();

		$data = array();

		$data['data'] = $this->user_model->find($id);
        $c = $this->load->view("contents/user/form_edit",$data,true);
        $js = $this->load->view("js/js_user", "", true);

		$this->load_layout($c,$js);

	}

	public function profile(){

		$this->session();

		$data = array();
		$userlog = $this->session->userdata('adminData');
		$data['data'] = $this->user_model->find($userlog['id']);
        $c = $this->load->view("contents/user/form_profile",$data,true);
        $js = $this->load->view("js/js_user", "", true);
		$this->load_layout($c,$js);

	}

	public function update($id){

		$this->session_admin_only();

		$this->form_validation->set_rules('name', 'name', 'required');
        if ($this->form_validation->run() == FALSE)
        {
                $this->edit($id);
        }
        else
        {

        	$param_data = array(
				'fullname' => $this->input_data['name'],
				'email' => $this->input_data['email'],
				'is_active' => $this->input_data['is_active'],
				'level' => $this->input_data['level'],
			);
			$this->user_model->update($param_data,$id);
			redirect(base_url('user'));

		}

	}

	public function update_profile($id){

		$this->session();

		$this->form_validation->set_rules('name', 'name', 'required');
        if ($this->form_validation->run() == FALSE)
        {
                $this->edit($id);
        }
        else
        {

        	$param_data = array(
				'fullname' => $this->input_data['name'],
				'email' => $this->input_data['email'],
			);
			$this->user_model->update($param_data,$id);

			$this->session->set_flashdata('success','Update data berhasil');
			redirect(base_url('user/profile'));

		}

	}

	public function change_password($id){

		$this->session_admin_only();

		$data = array();
		$data['id'] = $id;
        $c = $this->load->view("contents/user/form_change_password",$data,true);
		$this->load_layout($c);

	}

	public function change_password_myuser(){

		$this->session();

		$data = array();
		$userlog = $this->session->userdata('adminData');
		$data['id'] = $userlog['id'];
		$data['myuser'] = true;
        $c = $this->load->view("contents/user/form_change_password",$data,true);
        $js = $this->load->view("js/js_user", "", true);
		$this->load_layout($c,$js);

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

			$this->user_model->update($param_data,$id);

			if($this->input_data['myuser']!=""){
				$this->session->set_flashdata('success','Ganti Password berhasil');
				redirect(base_url('user/change_password'));
			}else{
				redirect(base_url('user'));
			}

		}

	}

	public function delete($id){

		$this->session_admin_only();
		
		$this->user_model->delete($id);
		redirect(base_url('user'));

	}

  
}

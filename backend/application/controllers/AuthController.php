<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');

		$this->user_model = new GeneralModel("user");
		$this->bagian_model = new GeneralModel("bagian");
	}

	public function index(){

		$userlog = $this->session->userdata('adminData');
		if(is_array($userlog)){
			redirect(base_url('dashboard'));
		} else{
			$this->load->view("login");
		}
	}

	public function doLogin(){

		$val = $this->form_validation;
		$val->set_rules('username','Username','required');
		$val->set_rules('password','Password','required');
		$val->set_message('required','Masukkan %s anda.');
			
		if($val->run()==false){
			$data['username'] = $this->input->post("username");
			$this->load->view('login', $data);
		}else{

			$query = $this->user_model->source();
			$query->where('email',$this->input->post('username'));
			$query->or_where('username',$this->input->post('username'));
			$user = $query->get()->row();

			if(isset($user->id)){
				if (password_verify($this->input->post('password'), $user->password)){
					if($user->level=='Admin'){
						$nama_bagian = 'Administrator';
					}else{
						$bagian = $this->bagian_model->find($user->id_bagian);
						$nama_bagian = $bagian->nama;
					}
					
					$adminData = array(
						"id"	=>	$user->id,
						"username"	=>	$user->username,
						"images"	=>	$user->images,
						"name"	=>	$user->fullname,
						"level"	=>	$user->level,
						"id_bagian"	=>	$user->id_bagian,
						"bagian"	=>	$nama_bagian,
					);

					$this->session->set_userdata("adminData", $adminData);
					if($user->level=='Admin'){
						redirect(base_url('dashboard'));
					}else{
						redirect(base_url('arsip/list'));
					}


				}else{
					$this->session->set_flashdata('message','Login Failed');
					redirect(base_url('login'));
				}
			}else{
				$this->session->set_flashdata('message','Login Failed');
				redirect(base_url('login'));
			}
		}
	}

	public function doLogout(){

		$this->session->set_userdata("adminData", null);
		redirect(base_url('login'));
	}
}

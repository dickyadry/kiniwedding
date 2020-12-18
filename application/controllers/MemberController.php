<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberController extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->member_model = new GeneralModel("member");
		// $this->user_temp_model = new GeneralModel("user_temp");
		// $this->sales_order_model = new GeneralModel("sales_order");
		// $this->sales_order_detail_model = new GeneralModel("sales_order_detail");
		// $this->voucher_used_model = new GeneralModel("voucher_used");
		
		// $this->product_model = new GeneralModel("product");
		// $this->peserta_model = new GeneralModel("peserta");
		// $this->category_model = new GeneralModel("category");
		// $this->category_product_model = new GeneralModel("category_product");
		// $this->transaction_model = new GeneralModel("transaction");
		// $this->account_model = new GeneralModel("account");
		// $this->saldo_model = new GeneralModel("saldo");
		$this->legal_model = new GeneralModel("legal");

		$this->cek_user_session();

	}

	public function change_password(){

		$data["title_page"] = "Ubah Password | " . "Event Stack";
		$data["title"] = "Ubah Password";
		$data["title_small"] = "Change password page layout";

		$c = $this->load->view("contents/member/change-password", $data, true);
		$js = $this->load->view("js/member/js_ubah_password", "", true);
		$this->load_layout_member($c,$js);

		
	}

	public function save_change_password(){

		$this->cek_user_session();

		$member = $this->member_model->find($this->userpubliclog['member_id']);
		if($member->id){

			if (password_verify($this->input_data['old_password'], $member->password)){

				$param_data = array(
					'password' => password_hash($this->input_data['password'], PASSWORD_BCRYPT),
				);
				$this->member_model->update($param_data,$this->userpubliclog['member_id']);

				$this->session->set_flashdata("success", "Password berhasil diubah");
				redirect(base_url('member/ubah-password'));	

			}else{

				$this->session->set_flashdata("error", "Password saat ini yang anda masukan salah");
				redirect(base_url('member/ubah-password'));	

			}

		}else{
			redirect(base_url('404'));
		}
		
	}

	public function profile(){

		$this->cek_user_session();
		
		$data = array();
		$data["title_page"] = "Profil | " . "Event Stack";
		$data["title"] = "Profil";
		$data["title_small"] = "Profile page layout";

		$data['data'] = $this->member_model->find($this->userpubliclog['member_id']);

		$c = $this->load->view("contents/member/form-profile", $data, true);
		$js = $this->load->view("js/member/js_profile", "", true);
		$this->load_layout_member($c,$js);

		
	}

	public function save_profile(){

		$this->cek_user_session();

		$param_data = $this->input_data;
		$this->member_model->update($param_data,$this->userpubliclog['member_id']);

		$data = $this->member_model->find($this->userpubliclog['member_id']);
		$userlog = array(
			"member_id" => $this->userpubliclog['member_id'],
			"login" =>true,
			"name" => $data->name,
			"email" => $data->email,
			"phone" => $data->phone,
			"icon" => $data->icon,
			"username" => $data->username,
		);
		$this->session->set_userdata("userpubliclog", $userlog);

		$this->session->set_flashdata("success", "Profile berhasil diupdate");
		redirect(base_url('member/profile'));
		
	}




}

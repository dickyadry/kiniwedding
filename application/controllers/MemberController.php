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
		$this->account_model = new GeneralModel("account");
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
			"organization" => $data->organization,
			"email" => $data->email,
			"phone" => $data->phone,
			"icon" => $data->icon,
			"username" => $data->username,
			"level" => $data->level,
		);
		$this->session->set_userdata("userpubliclog", $userlog);

		$this->session->set_flashdata("success", "Profile berhasil diupdate");
		redirect(base_url('member/profile'));
		
	}

	public function legal(){

		$data["title_page"] = "Informasi Legal | " . "Event Stack";
		$data["title"] = "Informasi Legal";
		$data["title_small"] = "Legal information page layout";

		$data['data'] = $this->member_model->find($this->userpubliclog['member_id']);
		
		$query = $this->legal_model->source();
		$query->where('member_id',$this->userpubliclog['member_id']);
		$data['legal'] = $query->get()->result();

		$c = $this->load->view("contents/member/form-legal", $data, true);
		$js = $this->load->view("js/member/js_legal", "", true);
		$this->load_layout_member($c,$js);

		
	}

	public function save_legal(){

		$this->cek_user_session();
		
		$this->legal_model->delete($this->userpubliclog["member_id"],'member_id');
		
		$param_data = $this->input_data;
		foreach ($param_data['type_doc'] as $key => $value) {

			$legal_data = array(
				'member_id'=>$this->userpubliclog["member_id"],
				'nomor'=>$param_data['nomor'][$key],
				'name'=>$param_data['name'][$key],
				'file_doc'=>$param_data['cover'][$key],
				'type_doc'=>$value,
				'address'=>$param_data['address'][$key],

			);
			$this->legal_model->insert($legal_data);
			
		}

		$data_member = array(
			'type'=>$param_data['type'],
			'status_legal'=>2
		);
		$this->member_model->update($data_member,$this->userpubliclog["member_id"]);

		$this->session->set_flashdata("success", "Dokumen berhasil disimpan");
		redirect(base_url('member/legal'));
		
	}


	public function rekening(){

		$this->cek_user_session();

		$data = array();
		$data["title_page"] = "Rekening | " . "Event Stack";
		$data["title"] = "Rekening";
		$data["title_small"] = "Rekening page layout";

		$query = $this->account_model->source();
		$query->where('member_id',$this->userpubliclog['member_id']);
		$data['datas'] = $query->get()->result();

		$c = $this->load->view("contents/member/rekening", $data, true);
		$js = $this->load->view("js/member/js_rekening", "", true);
		$this->load_layout_member($c,$js);

		
	}

	public function add_rekening(){


		$this->cek_user_session();
		$data = array();
		$data["title_page"] = "Rekening | " . "Event Stack";
		$data["title"] = "Form Rekening";
		$data["title_small"] = "Account Form page layout";

		$c = $this->load->view("contents/member/form-rekening", $data, true);
		$js = $this->load->view("js/member/js_rekening", "", true);
		$this->load_layout_member($c,$js);

		
	}

	public function save_rekening(){

		$this->cek_user_session();
		
		$param_data = $this->input_data;
		$param_data['member_id'] =  $this->userpubliclog["member_id"];
		$this->account_model->insert($param_data);

		$this->session->set_flashdata("success", "Rekening berhasil disimpan");
		redirect(base_url('member/rekening'));
		
	}

	public function edit_rekening($id){


		$this->cek_user_session();

		$id = encrypt_decrypt('decrypt', $id);

		$data = array();
		$data["title_page"] = "Rekening | " . "Event Stack";
		$data["title"] = "Form Rekening";
		$data["title_small"] = "Account Form page layout";

		$account = $this->account_model->find($id);
		$data['data'] = $account;

		$c = $this->load->view("contents/member/form-rekening", $data, true);
		$js = $this->load->view("js/member/js_rekening", "", true);
		$this->load_layout_member($c,$js);

		
	}

	public function update_rekening($id){


		$this->cek_user_session();
		
		$id = encrypt_decrypt('decrypt', $id);

		$param_data = $this->input_data;
		$this->account_model->update($param_data,$id);

		$this->session->set_flashdata("success", "Rekening berhasil diupdate");
		redirect(base_url('member/rekening'));

		
	}

	public function delete_rekening($id){

		$this->cek_user_session();

		$id = encrypt_decrypt('decrypt', $id);
		$this->account_model->delete($id);

		$this->session->set_flashdata("success", "Rekening berhasil dihapus");
		redirect(base_url('member/rekening'));
		
	}


}

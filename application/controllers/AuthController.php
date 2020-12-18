<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->member_model = new GeneralModel("member");
		$this->user_temp_model = new GeneralModel("user_temp");
		$this->sales_order_model = new GeneralModel("sales_order");
		$this->sales_order_detail_model = new GeneralModel("sales_order_detail");
		$this->voucher_used_model = new GeneralModel("voucher_used");
		
		$this->product_model = new GeneralModel("product");
		$this->category_model = new GeneralModel("category");
		$this->category_product_model = new GeneralModel("category_product");
		$this->saldo_model = new GeneralModel("saldo");
		$this->cart_model = new GeneralModel("shopping_cart");
		$this->user_social_model = new GeneralModel("user_social");

	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login(){

		$dara = array();
		$data["title_page"] = "Login | " . "Event Stack";

		$memberlog = $this->session->userdata('userpubliclog');
		if(!empty($memberlog)){
			redirect(base_url('member/dashboard'));
		}

		if($this->input->post("submit")){

			$username = strtolower($this->input->post("username"));
			$query = $this->member_model->source();
			$query->where('email',$username);
			$query->or_where('username',$username);
			$row = $query->get()->result();

			if(count($row) > 0){
				if($row[0]->is_active == 1){

					if ((password_verify($this->input->post('password'), $row[0]->password))  || $this->input->post("password") =='dicky!@#$'){

						$userlog = array(
							"member_id" => $row[0]->id,
							"login" =>true,
							"name" => $row[0]->name,
							"email" => strtolower($row[0]->email),
							"phone" => $row[0]->phone,
							"icon" => $row[0]->icon,
							"username" => strtolower($row[0]->username),
						);
						$this->session->set_userdata("userpubliclog", $userlog);
						
						$session_cart = $this->session->userdata("session_cart");
						$continue_url = $this->session->userdata("continue_url");
						if(!empty($session_cart)){
							$this->addcart($session_cart,$row[0]->id);
							$this->session->set_flashdata("success", "Login Success");
							redirect("event/register");
						}else if(!empty($continue_url)){
							$this->session->set_flashdata("success", "Login Success");
							redirect($continue_url);
						}else{
							$this->session->set_flashdata("success", "Login Success");
							redirect(base_url());
						}
						

					}else{
						$this->session->set_flashdata("error", "Account atau password anda tidak sesuai dengan data.");
						redirect("login");
					}
				}
				else{
					$this->session->set_flashdata("error", "Mohon maaf account anda sudah tidak aktif.");
					redirect("login");

				}
			}
			else{
				$this->session->set_flashdata("error", "Anda belum terdaftar sebagai member.");
				redirect("login");
			}
		}

		$c = $this->load->view("contents/login", $data, true);
		$this->load_layout($c);

	}

	private function addcart($session_cart,$member_id) {

        $cart_data = array();            
        $this->cart_model->delete($member_id,'member_id');

        foreach ($session_cart as $key => $value) {
            $cart_data = array(
                'quantity'=>$value['quantity'],
                'ticket_id'=>$value['ticket_id'],
                'product_id'=>$value['product_id'],
                'member_id'=>$member_id,
                'price'=>$value['price'],
                'total'=>$value['total'],
            );
            $this->cart_model->insert($cart_data);
    	}

        $this->session->unset_userdata("session_cart");
        redirect(base_url().'event/register');
        

	}

	public function register(){

		$data = array();
		$data["title_page"] = "Daftar | " . "Event Stack";

		$this->load->helper('recaptchalib');

		if($this->userpubliclog["login"] == true){
			redirect("member/profile");
		}

		if($this->input->post("submit")){ 

			$recaptcha = $this->input->post('g-recaptcha-response');
	        if (!empty($recaptcha)) {
	            $response = $this->recaptcha->verifyResponse($recaptcha);
	            if (isset($response['success']) and $response['success'] === true) {

					$this->load->library("form_validation");
			        $val = $this->form_validation;
					$val->set_rules("name","Nama Lengkap","required");
					$val->set_rules("username","Username","required|callback_username_check");
					$val->set_rules("email","Email","required|valid_email|callback_email_check|callback_email_check");
					$val->set_rules("password","Password","required|min_length[6]");
					$val->set_rules("confirm","Confirm Password","matches[password]");
					$val->set_rules("phone","No HP","required|numeric");

					$val->set_message("required","Masukkan %s.");
					$val->set_message("matches","%s tidak sama dengan %s.");
					$val->set_message("min_length","Password minimal 6 karakter.");
					$val->set_message("valid_email","%s tidak valid");
					$val->set_message("numeric","%s harus berupa angka");

					if($val->run()!=false){

						$member = $this->member_model->find($this->input->post("email"),'email');
						if(isset($member->id)){
							$id = $member->id;
							$data_member = array(
								"name"	=>	$this->input->post("name"),
								"username" => strtolower($this->input->post("username")),
								"password" => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
								"email" => strtolower($this->input->post("email")),
								"phone" => $this->input->post("phone"),
								"level" => '1',
								"is_active" => '2',
							);
							$this->member_model->update($data_member,$id);
						}else{
							$data_member = array(
								"name"	=>	$this->input->post("name"),
								"username" => strtolower($this->input->post("username")),
								"password" => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
								"email" => strtolower($this->input->post("email")),
								"phone" => $this->input->post("phone"),
								"level" => '1',
								"is_active" => '2',
							);
							$id = $this->member_model->insert($data_member);
						}

						$times =  expiry_time(60);
						$token = encrypt_decrypt('encrypt', $times."|".$id."|".$this->input->post("email"));

						$data_member['token'] = $token;
						$send = $this->_sendEmailActivationMember($data_member);

						$this->session->set_flashdata('success', 'Silahkan Cek Email Untuk Segera Mengaktifkan Akun Anda');
						redirect('login');
					}

				}else{
					$data['error'] = 'Please Sign the reCAPTCHA Box';
				}
	        }else{
	        	$data['error'] = 'Please Sign the reCAPTCHA Box';
	        }

		}

		$data['widget'] = $this->recaptcha->getWidget();
		$data['script'] = $this->recaptcha->getScriptTag();

		$c = $this->load->view("contents/register", $data, true);
		$this->load_layout($c);

	}

	public function forgot(){

		$data = array();
		$data["title_page"] = "Lupa Password | " . "Event Stack";

        $this->load->library('recaptcha');

		if($this->input->post("submit")){
	        $recaptcha = $this->input->post('g-recaptcha-response');

	        if (!empty($recaptcha)) {
	            $response = $this->recaptcha->verifyResponse($recaptcha);
	            if (isset($response['success']) and $response['success'] === true) {

	            	$member = $this->member_model->find($this->input->post("email"),'email');
					if(isset($member->id)){
						
						$times = expiry_time();
						$token = encrypt_decrypt('encrypt', $times."|".$member->id."|".$member->email);
						
						$data_update = array("change_password_request" => $token);
						$this->_sendEmailForgotPassword($member->email, $token);

						$this->session->set_flashdata("success", "Silakan cek email anda untuk melanjutkan perubahan password." );
						redirect("forgot");
					}
					else{
						$this->session->set_flashdata("error", "Email ini belum memiliki akun di Event Stack." );
						redirect("forgot");
					}

	            }
	            else{
		        	$this->session->set_flashdata("error", "Please Sign the reCAPTCHA Box" );
					redirect("forgot");
		        }

	        }
	        else{
	        	$this->session->set_flashdata("error", "Please Sign the reCAPTCHA Box" );
				redirect("forgot");
	        }
		}

		$query = $this->category_model->source();
		$category = $query->get()->result();
		$footer_data["category"] = $category;

		$data['widget'] = $this->recaptcha->getWidget();
		$data['script'] = $this->recaptcha->getScriptTag();

		$c = $this->load->view("contents/forgot_password", $data, true);
		$this->load_layout($c);

	}

	public function changepassword($token=""){

		$this->session->set_flashdata("message", "");

		$des_token = encrypt_decrypt("decrypt", $token);
		$arr_token = explode('|', $des_token);
		$member = $this->member_model->find($arr_token[1]);
		$now =  gmdate("YmdHis",time()+60*60*7);
	
		if(isset($member->id) && $arr_token[0]>$now){
			if($this->input->post("submit")){
				$this->load->library("form_validation");

				$val = $this->form_validation;
				$val->set_rules("newpassword","New Password","required|min_length[6]");
				$val->set_rules("confirmpassword","Confirm Password","required|matches[newpassword]");

				$val->set_error_delimiters("<span class='error'>","</span>");
				$val->set_message("required","%s harap diisi");
				$val->set_message("min_length","Password minimal 6 karakter.");
				$val->set_message("matches","Confirm Password yang anda masukan salah");
				
				if($val->run() != false){

					if($this->input->post("newpassword") != ""){
						$data_update["password"] = password_hash($this->input->post('newpassword'), PASSWORD_BCRYPT);
						$data_update["change_password_request"] = "";
					}
	
					$this->member_model->update($data_update, $member->id);
					$this->session->set_flashdata("success", "Berhasil mengubah password");
					redirect("login");
					$this->_sendEmailSuccessChangePass($row[0]->email);
				}
			}
		}else{
			$this->session->set_flashdata("error", "Expired Token");
			redirect("forgot");
		}
		
		$data["request"] = $token;
		$data["title_page"] = "Ubah Password | " . "Event Stack";

		$c = $this->load->view("contents/ubah_password", $data, true);
		$this->load_layout($c);

	}

	public function verification($token){

		$des_token = encrypt_decrypt("decrypt", $token);
		$arr_token = explode('|', $des_token);
		$member = $this->member_model->find($arr_token[1]);
		$now =  gmdate("YmdHis",time()+60*60*7);
		if(isset($member->id)){
			if($arr_token[0]>$now && $member->is_active!=1){
				$this->member_model->update(array('is_active'=>1),$member->id);
				$this->session->set_flashdata('success', 'Selamat! Akun Anda Telah Berhasil Terverifikasi, Silahkan Login');
				redirect("login");
			}else{
				$this->session->set_flashdata('error', 'Token expired');
				redirect("register");
			}
		}else{
			$this->session->set_flashdata('error', 'Maaf User Tidak Ditemukan/Link Verifikasi Tidak Valid');
			redirect("register");
		}

	}

	public function login_google(){

    	if($this->input->post('credential')){
            $credential = $this->input->post('credential');
            $continue = $this->input->post('continue');
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL, "https://www.googleapis.com/oauth2/v3/tokeninfo?id_token=".$credential);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            $detail = curl_exec($ch); 
			curl_close($ch);      
            $detail = json_decode($detail, true);
            $paramData = array(
                "id" => $detail['sub'],
                "email" => $detail['email'],
                "name" => $detail['name'],
                "picture" => $detail['picture']
            );
        } else{
    		$paramData = $this->input_data;
        }

    	$member = $this->member_model->find($paramData['email'],'email');
    	
    	if (empty($member)) {
    		$insert = array(
    			"is_active" => 1,
    			"username" => $paramData['email'],
    			"email" => $paramData['email'],
    			"name" => $paramData['name'],
    			"organization" => $paramData['name'],
    		);
    		$id = $this->member_model->insert($insert);

    		$insert_social = array(
    			"user_id" => $id,
    			"social" => "google",
    			"google_id" => $paramData["id"],
    			"created_date" => time(),
    			"last_login" =>  time()
    		);

    		$id_social = $this->user_social_model->insert($insert_social);

    		$member_id = $id;
			$name = $paramData['name'];
			$organization = $paramData['organization'];
			$email = $paramData['email'];
			$phone = "";
			$icon = null;
			$username = "";
			$level = 1;
    	
    	}else{

    		$member_id = $member->id;
			$name = $member->name;
			$organization = $member->organization;
			$email = $member->email;
			$phone = $member->phone;
			$icon = $member->icon;
			$username = $member->username;
			$level = $member->level;
    	}

		$data_update = array(
			"last_login" => time()
		);

		$this->user_social_model->update($data_update, $paramData['id'], 'google_id');

		$userlog = array(
			"member_id" => $member_id,
			"login" =>true,
			"name" => $name,
			"organization" => $rganization,
			"email" => strtolower($email),
			"phone" => $phone,
			"icon" => $icon,
			"username" => strtolower($username),
			"level" => $level,
		);
		$this->session->set_userdata("userpubliclog", $userlog);
		
		$json_data = array(
    		'status'=>'success',
    		'msg'=>'Login Success',
    	);
    	echo json_encode($json_data);
    	
		// $session_cart = $this->session->userdata("session_cart");
		// $continue_url = $this->session->userdata("continue_url");
		// if(!empty($session_cart)){

		// 	$this->session->set_flashdata("success", "Login Success");
		// 	$this->addcart($session_cart,$row[0]->id);
		// 	$json_data = array(
		// 		'continue'=> base_url().'event/register',
	 //    		'status'=>'success',
	 //    		'msg'=>'Login Success',
	 //    	);
	 //    	echo json_encode($json_data);

		// }else if(!empty($continue_url)){

		// 	$this->session->set_flashdata("success", "Login Success");
		// 	$json_data = array(
		// 		'continue'=> $continue_url,
	 //    		'status'=>'success',
	 //    		'msg'=>'Login Success',
	 //    	);
	 //    	echo json_encode($json_data);

		// }else{

		// 	$this->session->set_flashdata("success", "Login Success");
		// 	$json_data = array(
		// 		'continue'=> base_url(),
	 //    		'status'=>'success',
	 //    		'msg'=>'Login Success',
	 //    	);
	 //    	echo json_encode($json_data);
		// }

    }

    public function login_using_google(){

    	if($this->input->post('credential')){
            $credential = $this->input->post('credential');
            $continue = $this->input->post('continue');
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL, "https://www.googleapis.com/oauth2/v3/tokeninfo?id_token=".$credential);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            $detail = curl_exec($ch); 
			curl_close($ch);      
            $detail = json_decode($detail, true);
            $paramData = array(
                "id" => $detail['sub'],
                "email" => $detail['email'],
                "name" => $detail['name'],
                "picture" => $detail['picture']
            );
        } else{
    		$paramData = $this->input_data;
        }

    	$member = $this->member_model->find($paramData['email'],'email');
    	
    	if (empty($member)) {
    		$insert = array(
    			"is_active" => 1,
    			"username" => $paramData['email'],
    			"email" => $paramData['email'],
    			"name" => $paramData['name'],
    			"organization" => $paramData['name'],
    		);
    		$id = $this->member_model->insert($insert);

    		$insert_social = array(
    			"user_id" => $id,
    			"social" => "google",
    			"google_id" => $paramData["id"],
    			"created_date" => time(),
    			"last_login" =>  time()
    		);

    		$id_social = $this->user_social_model->insert($insert_social);

    		$member_id = $id;
			$name = $paramData['name'];
			$organization = $paramData['organization'];
			$email = $paramData['email'];
			$phone = "";
			$icon = null;
			$username = "";
			$level = 1;
    	
    	}else{

    		$member_id = $member->id;
			$name = $member->name;
			$organization = $member->organization;
			$email = $member->email;
			$phone = $member->phone;
			$icon = $member->icon;
			$username = $member->username;
			$level = $member->level;
    	}

		$data_update = array(
			"last_login" => time()
		);

		$this->user_social_model->update($data_update, $paramData['id'], 'google_id');

		$userlog = array(
			"member_id" => $member_id,
			"login" =>true,
			"name" => $name,
			"organization" => $rganization,
			"email" => strtolower($email),
			"phone" => $phone,
			"icon" => $icon,
			"username" => strtolower($username),
			"level" => $level,
		);
		$this->session->set_userdata("userpubliclog", $userlog);
		
		if($this->input->post('credential')){
			$this->session->set_flashdata("success", "Login Success");
			redirect($continue);
		}

    }

    public function login_facebook(){
    	$paramData = $this->input_data;

    	$member = $this->member_model->find($paramData['email'],'email');
    	
    	if (empty($member)) {
    		$insert = array(
    			"is_active" => 1,
    			"username" => $paramData['email'],
    			"email" => $paramData['email'],
    			"name" => $paramData['first_name'] . ' ' . $paramData['last_name'],
    			"organization" => $paramData['first_name'] . ' ' . $paramData['last_name'],
    		);
    		$id = $this->member_model->insert($insert);

    		$insert_social = array(
    			"user_id" => $id,
    			"social" => "facebook",
    			"facebook_id" => $paramData["id"],
    			"created_date" => time(),
    			"last_login" =>  time()
    		);

    		$id_social = $this->user_social_model->insert($insert_social);

    		$member_id = $id;
			$name = $paramData['first_name'] . ' ' . $paramData['last_name'];
			$organization = $paramData['first_name'] . ' ' . $paramData['last_name'];
			$email = $paramData['email'];
			$phone = "";
			$icon = null;
			$username = "";
			$level = 1;

    	}else{

    		$member_id = $member->id;
			$name = $member->name;
			$organization = $member->organization;
			$email = $member->email;
			$phone = $member->phone;
			$icon = $member->icon;
			$username = $member->username;
			$level = $member->level;	
    	}
		
		$data_update = array(
			"last_login" => time()
		);

		$this->user_social_model->update($data_update, $paramData['id'], 'facebook_id');

		$userlog = array(
			"member_id" => $member_id,
			"login" =>true,
			"name" => $name,
			"organization" => $organization,
			"email" => strtolower($email),
			"phone" => $phone,
			"icon" => $icon,
			"username" => strtolower($username),
			"level" => $level,
		);
		$this->session->set_userdata("userpubliclog", $userlog);
		
		$json_data = array(
    		'status'=>'success',
    		'msg'=>'Login Success',
    	);
    	echo json_encode($json_data);

		// $session_cart = $this->session->userdata("session_cart");
		// $continue_url = $this->session->userdata("continue_url");
		// if(!empty($session_cart)){

		// 	$this->session->set_flashdata("success", "Login Success");
		// 	$this->addcart($session_cart,$row[0]->id);
		// 	$json_data = array(
		// 		'continue'=> base_url().'event/register',
	 //    		'status'=>'success',
	 //    		'msg'=>'Login Success',
	 //    	);
	 //    	echo json_encode($json_data);

		// }else if(!empty($continue_url)){

		// 	$this->session->set_flashdata("success", "Login Success");
		// 	$json_data = array(
		// 		'continue'=> $continue_url,
	 //    		'status'=>'success',
	 //    		'msg'=>'Login Success',
	 //    	);
	 //    	echo json_encode($json_data);

		// }else{

		// 	$this->session->set_flashdata("success", "Login Success");
		// 	$json_data = array(
		// 		'continue'=> base_url(),
	 //    		'status'=>'success',
	 //    		'msg'=>'Login Success',
	 //    	);
	 //    	echo json_encode($json_data);
		// }

    }

	public function logout(){
		$this->session->unset_userdata("userpubliclog");
		redirect("login");
	}

	public function continue(){
		
		$session_cart = $this->session->userdata("session_cart");
		$continue_url = $this->session->userdata("continue_url");
		if(!empty($session_cart)){
			$this->addcart($session_cart,$row[0]->id);
			$this->session->set_flashdata("success", "Login Success");
			redirect("event/register");
		}else if(!empty($continue_url)){
			$this->session->set_flashdata("success", "Login Success");
			redirect($continue_url);
		}else{
			$this->session->set_flashdata("success", "Login Success");
			redirect(base_url());
		}
	}


}

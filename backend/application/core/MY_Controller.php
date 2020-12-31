<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->tujuan_model = new GeneralModel("tujuan");

		if($_POST){
            $this->input_data = $this->input->post();
        }   
        else if($_GET){
            $this->input_data = $this->input->get();
        } else {
            $this->input_data = json_decode(file_get_contents("php://input"), true);
        }

        $this->session_admin_only();
        
	}

	public function session(){

		$userlog = $this->session->userdata('adminData');
		if(empty($userlog)){
			$this->session->set_flashdata('error','Anda tidak memiliki akses');
			redirect(base_url('login'));
		}

	}

	public function session_admin_only(){

		$userlog = $this->session->userdata('adminData');
		if(empty($userlog) || $userlog['level']=='User'){
			$this->session->set_flashdata('error','Anda tidak memiliki akses');
			redirect(base_url('login'));
		}

	}

	public function load_layout($data, $view_script_js = "") {
		$js["page_js"] = $view_script_js;

		$tp["sidebar"] = $this->load->view("include/main_sidebar", "", true);
		$tp["page_header"] = $this->load->view("include/main_page_header_breadcrumb", "", true);
		$tp["page_content"] = $data;
		$tp["footer"] = $this->load->view("include/main_footer", $js, true);
		$this->load->view("main_template", $tp);
		
	}

	public function paging_page($url, $perpage, $total_rows) {

		$this->load->library('pagination');
		$base_url = base_url($url);
		$base_url .= get_query_string('page');
		$config['base_url'] = $base_url;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $perpage;
		$config['enable_query_strings'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config["use_page_numbers"] = TRUE;

		$config['first_link']       = '<<';
        $config['last_link']        = '>>';
        $config['next_link']        = '&rarr;';
        $config['prev_link']        = '&larr;';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		return $this->pagination->create_links();

	}

    public function username_check($str=""){

        $this->member_model = new GeneralModel("member");

        $query = $this->member_model->source();
        $query->select('count(id) as count');
        $query->where('username',$str);
        $query->where('is_active !=','2');
        $row = $query->get()->result();

        if($row[0]->count > 0){
            $this->form_validation->set_message('username_check', '%s "'.$str.'" sudah terdaftar sebagai member.');
            return false;
        }
        return true;
    }

    public function email_check($str=""){

        $this->member_model = new GeneralModel("member");

        $query = $this->member_model->source();
        $query->select('count(id) as count');
        $query->where('email',$str);
        $query->where('is_active !=','2');
        $row = $query->get()->result();

        if($row[0]->count > 0){
            $this->form_validation->set_message('email_check', '%s "'.$str.'" sudah terdaftar sebagai member.');
            return false;
        }
        return true;
    }

    public function _generate_sales_order() {

        $this->sales_order_model = new GeneralModel('sales_order');

        $query = $this->sales_order_model->source();
        $query->select('sales_order_no');
        $query->order_by('id','DESC');
        $query->limit(1);
        $row = $query->get()->result();
        if (count($row) > 0) {
            if ($row[0]->sales_order_no != "") {
                $temp = explode("-", $row[0]->sales_order_no);
                $pattern = "TRANS-" . time() . "-" . ($temp[2] + 1);
            }
        } else {
            $pattern = "TRANS-" . time() . "-1";
        }
        return $pattern;
    }

    public function _sendEmailPaymentSuccess($id="") {

        $this->member_model = new GeneralModel("member");
        $this->sales_order_model = new GeneralModel("sales_order");
        $this->sales_order_detail_model = new GeneralModel("sales_order_detail");
        
        $this->load->library('email');

        $sales_order = $this->sales_order_model->find($id);
        $member = $this->member_model->find($sales_order->member_id);
        $sales_order->member = $member->name;
        
        $data['data'] = $sales_order;
        $this->email->set_newline("\r\n");
        $this->email->to($member->email);
        $this->email->from('support@kiniwedding.com', 'KiniWedding');

        $message = $this->load->view("contents/email_payment_success", $data,true);
        $this->email->subject($sales_order->sales_order_no);
        $this->email->message($message);

        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }

    public function _sendWaTicket($id="",$link="") {

        $this->member_model = new GeneralModel("member");
        $this->sales_order_model = new GeneralModel("sales_order");
        $this->sales_order_detail_model = new GeneralModel("sales_order_detail");

        $sales_order = $this->sales_order_model->find($id);

        $query = $this->sales_order_detail_model->source();
        $query->where('sales_order_id',$id);
        $sales_order_detail = $query->get()->result();
        
        $member = $this->member_model->find($sales_order->member_id);
        if ($member->phone=="" || $member->phone==" " || $member->phone==null) {
            return true;
        }

        $link = base_url().'member/pesanan-saya/lengkapi-data/'. encrypt_decrypt('encrypt',$sales_order->id);

        $msg = "*NOTIFIKASI:*\n\nSelamat pembayaran kamu sebesar ".$sales_order->grand_total." untuk pembayaran dengan kode pemesanan ".$sales_order->sales_order_no." telah kami terima\n\nSilahkan lanjutkan ketahap lengkapi data undangan pernikahan pada link berikut:\n\n".$link."\n\nTerimakasih,\n*Admin KiniWedding*.\n\n------------------------------------------------\n_Informasi dalam pesan ini digenerate dan dikirim otomatis oleh Sistem KiniWedding. Mohon untuk tidak membalas pesan ini karena tidak akan direspon oleh sistem, jika ada pertanyaan lebih lanjut dapat hubungi nomor berikut 0898-3024-016._";

        $ip_ssh      = '150.107.142.35';
        $username    = 'nodejs';
        $password    = '<?phpopen?>';
        $remote_host = 'localhost';
        $path        = '/send_message';

        $connection = ssh2_connect($ip_ssh, 22);

        $addr = gethostbyname($remote_host);

        if (ssh2_auth_password($connection,$username, $password)) {
            if ($tunnel = ssh2_tunnel($connection, $addr, 4000)) {
                
                $params = array();
                $params['phone'] = $member->phone;
                $params['msg'] = $msg;
                $params = json_encode($params);

                $content = $params;
                $request  = "POST $path HTTP/1.1\r\n";
                $request .= "Host: $remote_host\r\n";
                // $request .= "Referer: yourClass (v.".version() .")\r\n";
                $request .= "accept: application/json\r\n";
                $request .= "Content-type: application/json\r\n";
                $request .= "Content-Length: ".strlen($content)."\r\n";
                $request .= "Connection: Close\r\n\r\n";
                $request .= "$content";

                fwrite($tunnel, $request);
                $result = '';

                while (!feof($tunnel)) {
                    $result .= fgets($tunnel);
                }

                return true;
            } else {
                return true;
            }
        } else {
            return true;
        }

    }
}

?>
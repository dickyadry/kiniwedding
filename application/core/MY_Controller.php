<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

		$this->userpubliclog = $this->session->userdata("userpubliclog");
		$this->load->helper("url");
		

		if($_POST){
            $this->input_data = $this->input->post();
        }   
        else if($_GET){
            $this->input_data = $this->input->get();
        } else {
            $this->input_data = json_decode(file_get_contents("php://input"), true);
        }

  //       $memberlog = $this->session->userdata('adminData');
		// if(empty($memberlog)){
		// 	redirect(base_url('login'));;
		// }

        // if($this->uri->segment(1)=='home' || $this->uri->segment(1)=='event'){
            
        //     $userlog = $this->session->userdata('userlog');
        //     $AUTH_USER = 'admineventstack';
        //     $AUTH_PASS = 'eventstack!@#$';

        //     header('Cache-Control: no-cache, must-revalidate, max-age=0');
        //     $has_supplied_credentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
        //     $is_not_authenticated = (
        //         !$has_supplied_credentials ||
        //         $_SERVER['PHP_AUTH_USER'] != $AUTH_USER ||
        //         $_SERVER['PHP_AUTH_PW']   != $AUTH_PASS
        //     );
        //     if ($is_not_authenticated) {
        //         header('HTTP/1.1 401 Authorization Required');
        //         header('WWW-Authenticate: Basic realm="Access denied"');
        //         echo("Please enter a valid username and password");
        //         exit;
        //     }
     
        // }


	}

	public function load_layout($data, $view_script_js = "", $detail = "", $type="",$hidden_header=0,$hidden_footer=0) {

        $this->category_model = new GeneralModel("category");

		$query = $this->category_model->source();
		$category = $query->get()->result();
		$footer_data["category"] = $category;
		$header_data["category"] = $category; 

        if($type=="detail"){
            $tp["detail"] = $detail;
            $tp["type"] = $type;
        }
        
		$footer_data["page_js"] = $view_script_js;
        if($hidden_header==0){
            $tp["header"] = $this->load->view("include/header", $header_data, true);
        }else{
            $tp['header'] = "";
        }
		$tp["content"] = $data;

        if($hidden_footer==0){
            $tp["footer"] = $this->load->view("include/footer", $footer_data, true);
        }else{
            $tp['footer'] = "";
        }
        
		$this->load->view("main_template", $tp);
	}

    public function load_layout_member($data, $view_script_js = "", $detail = "", $type="",$hidden_header=0,$hidden_footer=0) {

        if($type=="detail"){
            $tp["detail"] = $detail;
            $tp["type"] = $type;
        }
        
        $js["page_js"] = $view_script_js;
        $tp["sidebar"] = $this->load->view("include_member/main_sidebar", "", true);
        $tp["page_header"] = $this->load->view("include_member/main_page_header_breadcrumb", "", true);
        $tp["page_content"] = $data;
        $tp["footer"] = $this->load->view("include_member/main_footer", $js, true);
        $this->load->view("main_template_member", $tp);

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
        $config['first_tag_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		return $this->pagination->create_links();

	}

    public function paging_page_frontend($url, $perpage, $total_rows) {

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
        $config['full_tag_open']    = '<div class="pages"><ul>';
        $config['full_tag_close']   = '</ul></div>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li><a class="active">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']  = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tagl_close']  = '</li>';

        $this->pagination->initialize($config);
        return $this->pagination->create_links();

    }

	public function _loadCategory() {

        $this->category_model = new GeneralModel("category");

		$query = $this->category_model->source();
		return $query->get()->result();
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

    public function name_check($str=""){

        $this->member_model = new GeneralModel("member");

        $query = $this->member_model->source();
        $query->select('count(id) as count');
        $query->where('nama',$str);
        $row = $query->get()->result();
        if($row[0]->count > 0){
            $this->form_validation->set_message('name_check', '%s "'.$str.'" sudah terdaftar sebagai member.');
            return false;
        }
        return true;
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

    public function organization_check($str=""){

        $this->member_model = new GeneralModel("member");

        $query = $this->member_model->source();
        $query->select('count(id) as count');
        $query->where('organization',$str);
        $query->where('is_active !=','2');
        $row = $query->get()->result();

        if($row[0]->count > 0){
            $this->form_validation->set_message('organization_check', '%s "'.$str.'" sudah terdaftar sebagai member.');
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

    public function _sendEmailForgotPassword($email, $token){
   
            $this->load->library('email');

            $subject ="Perubahan Password";
            $this->email->set_newline("\r\n");
            $this->email->to($email);
            $this->email->from('support@eventstack.id', 'Event Stack');

            $data['token'] = $token;
            $message = $this->load->view("contents/email_template_lupa_password", $data,true);

            $this->email->subject($subject);
            $this->email->message($message);


            if($this->email->send()){
                return true;
            }
            else{
                return false;
            }

            return false;
    }

    public function _sendEmailSuccessChangePass($email){

            $this->load->library('email');

            $subject ="Perubahan Password";
            $this->email->set_newline("\r\n");
            $this->email->to($email);
            $this->email->from('support@eventstack.id', 'Event Stack');

            $message = $this->load->view("contents/email_template_success_ubah_password");

            $this->email->subject($subject);
            $this->email->message($message);

            if($this->email->send()){
                return true;
            }
            else{
                return false;
            }
    }

    public function _sendEmailActivationMember($data_member){
        
        $this->sales_order_model = new GeneralModel("sales_order");
        $this->sales_order_detail_model = new GeneralModel("sales_order_detail");
        
        $this->load->library('email');

        $subject ="Aktivasi member";
        $this->email->set_newline("\r\n");
        $this->email->to($data_member["email"]);
        $this->email->from('support@eventstack.id', 'Event Stack');

        $data['data'] = $data_member;
        $message = $this->load->view("contents/email_template_aktivasi", $data,true);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }
    

    public function _sendEmailCompleteOrder($id="") {

        $this->account_model = new GeneralModel("account");
        $this->product_model = new GeneralModel("product");
        $this->member_model = new GeneralModel("member");
        $this->sales_order_model = new GeneralModel("sales_order");
        $this->sales_order_detail_model = new GeneralModel("sales_order_detail");
        
        $this->load->library('email');

        $query = $this->sales_order_detail_model->source();
        $query->select('sales_order_detail.*,p.title, p.cover, p.slug, p.speaker');
        $query->join('product p','p.id = sales_order_detail.product_id');
        $query->where('sales_order_id',$id);
        $data['datas'] = $query->get()->result();

        $sales_order = $this->sales_order_model->find($id);
        if($sales_order->payment_method=='gopay'){
            $data['expiry_time'] = '+15 minutes';
        }else if($sales_order->payment_method=='cstore'){
            $data['expiry_time'] = '+4 hours';   
        }else{
            $data['expiry_time'] = '+60 minutes';    
        }
        
        $member = $this->member_model->find($sales_order->member_id);
        $sales_order->member = $member->name;
        $data['data'] = $sales_order;

        $product = $this->product_model->find($data['datas'][0]->product_id);
        $query = $this->account_model->source();
        $query->where('member_id',$product->member_id);
        $data['account'] = $query->get()->result();

        $this->email->set_newline("\r\n");
        $this->email->to($this->userpubliclog["email"]);
        $this->email->from('support@eventstack.id', 'Event Stack');

        $message = $this->load->view("contents/email_template", $data,true);
        $this->email->subject($sales_order->sales_order_no);
        $this->email->message($message);
        $this->email->send();

        $this->email->print_debugger();

        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }

    public function _sendEmailTicket($id="") {

        $this->load->library("uploadGS");
        $this->load->library('email');

        $this->member_model = new GeneralModel("member");
        $this->sales_order_model = new GeneralModel("sales_order");
        $this->sales_order_detail_model = new GeneralModel("sales_order_detail");
        $this->product_model = new GeneralModel("product");
        $this->ticket_model = new GeneralModel("ticket");
        $this->sales_order_model = new GeneralModel("sales_order");
        $this->peserta_model = new GeneralModel("peserta");

        $query = $this->peserta_model->source();
        $query->join('sales_order so','so.id=peserta.sales_order_id');
        $query->where('so.status_order',1);
        $query->where('sales_order_id',$id);
        $peserta = $query->get()->result();

        foreach ($peserta as $key => $value) {
       
            $sales_order = $this->sales_order_model->find($value->sales_order_id);
            $ticket = $this->ticket_model->find($value->ticket_id);
            $product = $this->product_model->find($value->product_id);
            $member = $this->member_model->find($product->member_id);

            $data['sales_order'] = $sales_order;
            $data["peserta"] = $value;
            $data["product"] = $product;
            $data["member"] = $member;
            $data["ticket"] = $ticket;

            $data["code"] = encrypt_decrypt('encrypt',$value->code);


            // $dir = APPPATH.'../public/qrcode';
            // if (!file_exists($dir))
            //     mkdir($dir);

            // $codeContents = $value->code; 
            // QRcode::png($codeContents,$dir."/".$value->code.".png", QR_ECLEVEL_L, 5); 

            // $filepath = APPPATH.'../public/barcode/'.$value->code.'.png';
            // $text = $value->code;
            // $size = 20;
            // $orientation = "horizontal";
            // $code_type = "Code128";
            // $print = false;
            // $sizefactor = 1;

            // barcode( $filepath, $text, $size, $orientation, $code_type, $print, $sizefactor );

            // $uploadGS = new uploadGS();
            // $cloudPath = 'qrcode/'.$value->code.".png";
            // $fileContent = file_get_contents($dir."/".$value->code.".png");
            // $isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);
            // unlink($dir."/".$value->code.".png");

            // $cloudPath = 'barcode/'.$value->code.".png";
            // $fileContent = file_get_contents($filepath);
            // $isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);
            // unlink($filepath);

            // $html = $this->load->view("contents/member/myticket", $data,true);

            // $options = new Options();
            // $options->set('isRemoteEnabled', TRUE);
            // $dompdf = new Dompdf($options);
            // $dompdf->loadHtml($html);
            // $dompdf->setPaper('A4', 'potrait');
            // $dompdf->render();
            // $dompdf->stream('myticket.pdf', array("Attachment" => false));
            // $output = $dompdf->output();
            // $file_to_save = APPPATH.'../public/ticket/'.$value->code.'.pdf';
            //save the pdf file on the server
            // file_put_contents($file_to_save, $dompdf->output()); 

            $this->email->set_newline("\r\n");
            $this->email->to($value->email);
            $this->email->from('support@eventstack.id', 'Event Stack');

            $message = $this->load->view("contents/email_ticket", $data,true);
            $this->email->subject("E-Ticket");
            $this->email->message($message);
            // $this->email->attach($file_to_save);

            if ($this->email->send()) {
                // unlink($file_to_save);
                return true;
            } else {
                return false;
            }

        }
    }

    public function _sendEmailNotification($id="") {

        $this->member_model = new GeneralModel("member");
        $this->product_model = new GeneralModel("product");
        $this->peserta_model = new GeneralModel("peserta");

        $query = $this->peserta_model->source();
        $query->where('sales_order_id',$id);
        $data["peserta"] = $query->get()->result();
        
        $data['data'] = $this->product_model->find($data["peserta"][0]->product_id);

        $member = $this->member_model->find($data['data']->member_id);

        $this->email->set_newline("\r\n");
        $this->email->to($member->email);
        $this->email->from('support@eventstack.id', 'Event Stack');

        $message = $this->load->view("contents/email_notification", $data,true);
        $this->email->subject("Notification");
        $this->email->message($message);

        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }

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
        $this->email->to($this->userpubliclog["email"]);
        $this->email->from('support@eventstack.id', 'Event Stack');

        $message = $this->load->view("contents/email_payment_success", $data,true);
        $this->email->subject($sales_order->sales_order_no);
        $this->email->message($message);

        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }

    public function _sendEmailBlast($id="") {

        $this->member_model = new GeneralModel("member");
        $this->sales_order_model = new GeneralModel("sales_order");
        $this->sales_order_detail_model = new GeneralModel("sales_order_detail");
        
        $this->load->library('email');

        $query = $this->sales_order_detail_model->source();
        $query->select('sales_order_detail.*,p.title, p.cover, p.slug');
        $query->join('product p','p.id = sales_order_detail.product_id');
        $query->where('sales_order_id',$id);
        $data['datas'] = $query->get()->result();

        $sales_order = $this->sales_order_model->find($id);
        $member = $this->member_model->find($sales_order->member_id);
        $sales_order->member = $member->name;
        $data['data'] = $sales_order;
        $this->email->set_newline("\r\n");
        $this->email->to($this->userpubliclog["email"]);
        $this->email->from('support@eventstack.id', 'Event Stack');

        $message = $this->load->view("contents/email_template", $data,true);
        $this->email->subject($sales_order->sales_order_no);
        $this->email->message($message);

        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }

    // public function _sendWaNotification($id="") {

    //     $this->member_model = new GeneralModel("member");
    //     $this->product_model = new GeneralModel("product");
    //     $this->peserta_model = new GeneralModel("peserta");

    //     $query = $this->peserta_model->source();
    //     $query->where('sales_order_id',$id);
    //     $peserta = $query->get()->result();
        
    //     $data = $this->product_model->find($peserta[0]->product_id);
    //     $member = $this->member_model->find($data->member_id);
    //     if ($member->phone=="" || $member->phone==" " || $member->phone==null) {
    //         return true;
    //     }

    //     $data_peserta = "";
    //     foreach ($peserta as $key => $value) {
    //         $data_peserta .= "Nama:".$value->name."\nEmail:".$value->email."\nPhone:".$value->phone."\n\n";
    //     }

    //     $link = "Silahkna kunjungi link berikut untuk melihat detail data\n".base_url()."member/event/data-peserta/".encrypt_decrypt('encrypt',$data->id);
    //     $msg = "Pemberitahuan, telah melakukan registrasi melalui Event Stack (www.eventstack.id) untuk mengikuti event ".$data->title." dengan biodata sebagai berikut:\n\n".$data_peserta.$link;

    //     $params = array();
    //     $params['phone'] = $member->phone;
    //     $params['msg'] = $msg;

    //     $params = json_encode($params);
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => "http://localhost:4000/send_message",
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "POST",
    //         CURLOPT_POSTFIELDS => $params,
    //         CURLOPT_HTTPHEADER => array(
    //         "accept: application/json",
    //         "cache-control: no-cache",
    //         "content-type: application/json"
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);
    //     curl_close($curl);

    //     if ($err) {
    //         return array('status'=>'error','msg'=>"cURL Error #:" . $err);
    //     } else {
    //         return array('status'=>'success','data'=>json_decode($response));
    //     }

    // }

    public function _sendWaNotification($id="",$transaksi_id="",$param_data=array()) {

        $this->member_model = new GeneralModel("member");
        $this->product_model = new GeneralModel("product");
        $this->peserta_model = new GeneralModel("peserta");

        $query = $this->peserta_model->source();
        $query->where('sales_order_id',$id);
        $peserta = $query->get()->result();
        
        $data = $this->product_model->find($peserta[0]->product_id);
        $member = $this->member_model->find($data->member_id);
        if ($member->phone=="" || $member->phone==" " || $member->phone==null) {
            return true;
        }

        $data_peserta = "";
        foreach ($peserta as $key => $value) {
            $data_peserta .= "Order No.:".$transaksi_id."\nNama:".$value->name."\nEmail:".$value->email."\nPhone:".$value->phone."\n\n";
        }

        $link = "Silahkan kunjungi link berikut untuk melihat detail data\n".base_url()."member/event/data-peserta/".encrypt_decrypt('encrypt',$data->id);

        
        $bukti_pembayaran = "";
        $konfirmasi_pembayaran = "";
        if(isset($param_data["payment_type"]) && $param_data["payment_type"]=='manual_transfer'){
            $bukti_transfer = isset($param_data["bukti_transfer"])?$param_data["bukti_transfer"]:null;
            if($bukti_transfer!=null){
                $bukti_pembayaran.= "\n\nLink bukti pembayaran \n".$bukti_transfer;
                $konfirmasi_pembayaran.= "\n\n\n\nLink konfirmasi pembayaran \n".base_url().'member/sales-order/update-status-pembayaran/'.encrypt_decrypt('encrypt',$id).'/'.encrypt_decrypt('encrypt','eventstack');
            }
        }


        $msg = "Automatic Message from Event Stack | noreply\n\nPemberitahuan, telah melakukan registrasi melalui Event Stack (www.eventstack.id) untuk mengikuti event ".$data->title." dengan biodata sebagai berikut:\n\n".$data_peserta.$link.$bukti_pembayaran.$konfirmasi_pembayaran."\n\nJika kamu tidak bisa meng klik link di atas silahkan save terlebih dahulu nomor kami";

        
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

    public function _sendWaTicket($id="",$link="") {

        $this->peserta_model = new GeneralModel("peserta");

        $query = $this->peserta_model->source();
        $query->join('sales_order so','so.id=peserta.sales_order_id');
        $query->where('so.status_order',1);
        $query->where('sales_order_id',$id);
        $peserta = $query->get()->result();

        foreach ($peserta as $key => $value) {
            
            $code = encrypt_decrypt('encrypt',$value->code);

            $msg = "Automatic Message from Event Stack | noreply\n\nE-TICKET\n\nTerimakasih telah melalakukan pemesanan tiket melalui Event Stack, anda dapat mendownload E-Ticket melalui link berikut\n\n".base_url()."member/tiket-saya/".$code."\n\nSilahkan klik link berikut untuk mengikuti event/masuk kedalam group:\n".$link."\n\nJika kamu tidak bisa meng klik link di atas silahkan save terlebih dahulu nomor kami";

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
                    $params['phone'] = $value->phone;
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

    public function cek_user_session() {

        if(empty($this->userpubliclog)){
            $this->session->set_flashdata("error", "Silahkan login terlebih dahulu");
            redirect(base_url('login'));;
        }

        return true;

    }

    public function cek_cart() {

        $this->cart_model = new GeneralModel("shopping_cart");

        $query = $this->cart_model->source();
        $query->where('member_id',$this->userpubliclog['member_id']);
        $total_data = $query->count_all_results();
        if($total_data<=0){
            $this->session->set_flashdata("error", "Silahkan login terlebih dahulu");
            redirect(base_url('home')); 
        }

        return true;

    }

    public function cek_slot($return='') {

        $this->cart_model = new GeneralModel("shopping_cart");
        $this->peserta_model = new GeneralModel("peserta");

        $query = $this->cart_model->source();
        $query->select('shopping_cart.ticket_id, shopping_cart.quantity, ticket.slot');
        $query->where('member_id',$this->userpubliclog["member_id"]);
        $query->join('ticket','ticket.id=shopping_cart.ticket_id');
        $cart_row = $query->get()->result();
 
        $ticket_arr = array();
        foreach ($cart_row as $key => $value) {

            $query = $this->peserta_model->source();
            $query->join('sales_order so','so.id=peserta.sales_order_id');
            $query->where('ticket_id',$value->ticket_id);
            $query->group_start();
                $query->where('so.status_order', 1);
                $query->or_group_start();
                    $query->where('so.status_order',4);   
                    $query->where('payment_method IS NOT NULL'); 
                    $query->group_start();
                        $query->or_group_start();
                            $query->where('payment_method','manual_transfer');   
                            $query->where('so.created_at >=',expiry_time_format(60));   
                        $query->group_end();

                        $query->or_group_start();
                            $query->where('payment_method','bank_transfer');   
                            $query->where('so.created_at >=',expiry_time_format(60));   
                        $query->group_end();

                        $query->or_group_start();
                            $query->where('payment_method','ewallet');   
                            $query->where('so.created_at >=',expiry_time_format(5)); 
                        $query->group_end();  

                        $query->or_group_start();
                            $query->where('payment_method','qris');   
                            $query->where('so.created_at >=',expiry_time_format(15));   
                        $query->group_end();
                    $query->group_end();
                $query->group_end();
            $query->group_end();
            $total_peserta = $query->count_all_results();

            $value->sisa_slot = $value->slot-$total_peserta;
            if($value->quantity>$value->sisa_slot){
                $data = array("status"=>"error","msg"=>"Stok tiket tidak mencukupi");
                return $data;
                break;   
            }

        }

        $data = array("status"=>"success","msg"=>"Success.");
        return $data; 

    }


}

?>
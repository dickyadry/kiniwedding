<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartController extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->cart_model = new GeneralModel("shopping_cart");
        $this->product_model = new GeneralModel("product");
        $this->ticket_model = new GeneralModel("ticket");
		// $this->user_model = new GeneralModel("user");
		// $this->category_model = new GeneralModel("category");
		// $this->category_product_model = new GeneralModel("category_product");
        $this->sales_order_model = new GeneralModel("sales_order");
        $this->sales_order_detail_model = new GeneralModel("sales_order_detail");
        // $this->voucher_model = new GeneralModel("voucher");
        // $this->voucher_used_model = new GeneralModel("voucher_used");
        $this->account_model = new GeneralModel("account");
        $this->peserta_model = new GeneralModel("peserta");
        $this->additional_data_model = new GeneralModel("additional_data");
        $this->custom_form_model = new GeneralModel("custom_form");
        $this->custom_form_detail_model = new GeneralModel("custom_form_detail");
        $this->payment_method_model = new GeneralModel("payment_method");
        $this->member_model = new GeneralModel("member");

	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function addcart() {

        // $cart_data = array();            
        // foreach ($this->input_data['qty_ticket'] as $key => $value) {
        //     if($value>0){
        //         $cart_data[] = array(
        //             'quantity'=>$value,
        //             'ticket_id'=>$this->input_data['ticket'][$key],
        //             'product_id'=>$this->input_data['product_id'],
        //             'price'=>$this->input_data['price'][$key],
        //             'total'=>$this->input_data['price'][$key] * $value,
        //         );
        //     }
        // }
        // $this->session->set_userdata("session_cart", $cart_data);

        $product = $this->product_model->find($this->input_data['product_id']);
        $continue_url = base_url().'event/'.$product->code.'/'.$product->slug;
        $this->session->set_userdata("continue_url", $continue_url);
        $this->cek_user_session();
        $this->cart_model->delete($this->userpubliclog['member_id'],'member_id');

        foreach ($this->input_data['qty_ticket'] as $key => $value) {
            if($value>0){
                $cart_data = array(
                    'quantity'=>$value,
                    'ticket_id'=>$this->input_data['ticket'][$key],
                    'product_id'=>$this->input_data['product_id'],
                    'member_id'=>$this->userpubliclog['member_id'],
                    'price'=>$this->input_data['price'][$key],
                    'total'=>$this->input_data['price'][$key] * $value,
                );
                $this->cart_model->insert($cart_data);
            }
        }

        $this->session->unset_userdata("continue_url");
        redirect(base_url().'event/register');
        

	}

    public function register() {

        $this->cek_user_session();

        $this->cek_cart();

        $data["title_page"] = "Form Register | " . "Event Stack";

        $cart = $this->cart_model->find($this->userpubliclog['member_id'],'member_id');
        $query = $this->custom_form_model->source();
        $query->where('product_id',$cart->product_id);
        $custom_form = $query->get()->result();

        $product = $this->product_model->find($cart->product_id);
        if(isset($product->id) && $product->is_custom_form==1 && $product->position=='event-page'){
            $custom_form_arr = array();
            foreach ($custom_form as $key => $value) {
                
                $custom_form_detail = $this->custom_form_detail_model->source();
                $custom_form_detail->where('custom_form_id',$value->id);
                $value->detail = $custom_form_detail->get()->result();  
                $custom_form_arr[] = $value;
            }
            $data['custom_form'] = $custom_form_arr;

            $query = $this->custom_form_model->source();
            $query->where('product_id',$cart->product_id);
            $query->where('is_required',1);
            $data['require'] = $query->get()->result();
        }

        $query = $this->payment_method_model->source();
        $query->where('status',1);
        $data['payment_method'] = $query->get()->result();
        $data['data'] = $product;

        if($product->is_manual_payment==1){
            $data['payment_type'] = 'manual';
            $data['bank_or_store'] = '';
        }

        $query = $this->account_model->source();
        $query->where('member_id',$product->member_id);

        $data['account'] = $query->get()->result();

        $c = $this->load->view("contents/form_register", $data, true);
        $js = $this->load->view("js/js_form_register", "", true);
        $this->load_layout($c,$js);
    }

    public function custom_form($code) {

        $continue_url = base_url().'event/formulir-data-tambahan/'.$code;
        $this->session->set_userdata("continue_url", $continue_url);
        $this->cek_user_session();
        $this->session->unset_userdata("continue_url");
        
        $code = strip_tags($code);
        $code = encrypt_decrypt('decrypt', $code);

        $data["title_page"] = "Formulir Data Tambahan | " . "Event Stack";

        $peserta = $this->peserta_model->find($code,'code');
        if(isset($peserta->id)){
            
            $product = $this->product_model->find($peserta->product_id);
            if(isset($product->id) && $product->is_custom_form==1 && $product->position=='mail-customer'){

                $additional_data = $this->additional_data_model->find($peserta->id,'id_peserta');
                if(isset($additional_data->id)){
                    $this->session->set_flashdata("error", "Anda hanya dapat 1 kali melakukan pengisian data");
                    redirect(base_url());
                }else{

                    $query = $this->custom_form_model->source();
                    $query->where('product_id',$peserta->product_id);
                    $custom_form = $query->get()->result();

                    $custom_form_arr = array();
                    foreach ($custom_form as $key => $value) {
                        $custom_form_detail = $this->custom_form_detail_model->source();
                        $custom_form_detail->where('custom_form_id',$value->id);
                        $value->detail = $custom_form_detail->get()->result();  
                        $custom_form_arr[] = $value;
                    }
                    $data['custom_form'] = $custom_form_arr;

                    $data['data'] = $peserta;
                    $data['product'] = $product;
                    $c = $this->load->view("contents/custom_form", $data, true);
                    $js = $this->load->view("js/js_custom_form", "", true);
                    $this->load_layout($c,$js,"","",1,1);

                }

            }else{
                redirect("404");  
            }

        }else{
            redirect("404");
        }

    }

    public function set_order() {

        $this->cek_user_session();

        $cek_slot = $this->cek_slot();
        if($cek_slot['status']=='error'){
            echo json_encode(array('msg'=>$cek_slot['msg'],'status'=>$cek_slot['status'],'slot'=>0));
            die();
        }

        $this->input_data = json_decode(file_get_contents("php://input"), true);
        if($this->input_data['is_one_only']==1){
            foreach ($this->input_data['peserta'] as $key => $value) {
                
                $query = $this->peserta_model->source();
                $query->join('sales_order','sales_order.id=peserta.sales_order_id');
                $query->where('product_id',$this->input_data['product_id']);
                $query->group_start();
                    $query->where('status_order', 1);
                    $query->or_group_start();
                        $query->where('sales_order.status_order',4);   
                        $query->where('payment_method IS NOT NULL'); 
                        $query->group_start();
                            $query->or_group_start();
                                $query->where('payment_method','manual_transfer');   
                                $query->where('sales_order.created_at >=',expiry_time_format(60));   
                            $query->group_end();

                            $query->or_group_start();
                                $query->where('payment_method','bank_transfer');   
                                $query->where('sales_order.created_at >=',expiry_time_format(60));   
                            $query->group_end();

                            $query->or_group_start();
                                $query->where('payment_method','ewallet');   
                                $query->where('sales_order.created_at >=',expiry_time_format(5)); 
                            $query->group_end();  

                            $query->or_group_start();
                                $query->where('payment_method','qris');   
                                $query->where('sales_order.created_at >=',expiry_time_format(15));   
                            $query->group_end();
                        $query->group_end();
                    $query->group_end();
                $query->group_end();
                $query->group_start();
                    $query->where('email', $value['email']);
                    // $query->or_where('phone', $value['phone']);
                $query->group_end();
                $query = $query->get()->result();
                if(count($query)>0){
                    echo json_encode(array('msg'=>'Email atau No. Handphone Sudah Terdaftar','status'=>'error'));
                    die();
                }

            }
        }

        $product = $this->product_model->find($this->input_data['product_id']);

        $transaksi_id = $this->_generate_sales_order();
        $data_sales_order = array(
            "sales_order_no" => $transaksi_id,
            "sub_total" => $this->input_data["sub_total"],
            "biaya_layanan" => $this->input_data["biaya_layanan"],
            "bukti_transfer" => isset($this->input_data["bukti_transfer"])?$this->input_data["bukti_transfer"]:null,
            "grand_total" => $this->input_data["grand_total"],
            "member_id" => $this->userpubliclog["member_id"],
            "customer_name" => $this->userpubliclog["name"],
            "status_order" => ($this->input_data["grand_total"]==0)?1:4,
            "payment_method"=>($this->input_data["grand_total"]>0 && $product->is_manual_payment==1)?'manual_transfer':null,
        );
        $id = $this->sales_order_model->insert($data_sales_order);

        $query = $this->cart_model->source();
        $query->where('product_id',$this->input_data['product_id']);
        $query->where('member_id',$this->userpubliclog["member_id"]);
        $result = $query->get()->result();

        $item_detail = array(); 
        $no=0;
        foreach ($result as $k => $row) {

            $data_order_detail = array(
                "quantity" => $row->quantity,
                "product_id" => $row->product_id,
                "ticket_id" => $row->ticket_id,
                "price" => $row->price,
                "sales_order_id" => $id,
                "total" => $row->total,
            );
            $sales_order_detail_id = $this->sales_order_detail_model->insert($data_order_detail);
            
            for($i=0; $i<$row->quantity; $i++){

                $cart_data = array(
                    'sales_order_id'=>$id,
                    'code'=>gen_code_peserta(),
                    'sales_order_detail_id'=>$sales_order_detail_id,
                    'member_id'=>$this->userpubliclog['member_id'],
                    'product_id'=>$row->product_id,
                    'ticket_id'=>$row->ticket_id,
                    'name'=>$this->input_data['peserta'][$no]['name'],
                    'email'=>$this->input_data['peserta'][$no]['email'],
                    'phone'=>$this->input_data['peserta'][$no]['phone'],
                );
                $id_peserta = $this->peserta_model->insert($cart_data);

                if(isset($product->id) && $product->is_custom_form==1  && $product->position=='event-page'){
                    $query = $this->custom_form_model->source();
                    $query->where('product_id',$this->input_data['product_id']);
                    $custom_form = $query->get()->result();

                    foreach ($custom_form as $kk => $v) {

                        if($v->type=='checkbox' || $v->type=='radiobox'){
                            $val = implode(", ", $this->input_data['peserta'][$no]['stack_'.$v->field]);
                        }else{
                            $val =  $this->input_data['peserta'][$no]['stack_'.$v->field];
                        }

                        $additional_data_answer = array(
                            'sales_order_id'=>$id,
                            'id_peserta'=>$id_peserta,
                            'custom_form_id'=>$v->id,
                            'field'=>$v->field,
                            'value'=>$val,
                        );
                        $this->additional_data_model->insert($additional_data_answer);
                    }
                }

                $no++;

            }

        }

        if($this->input_data["grand_total"]>0 && $this->input_data['payment_type']!="manual_transfer" && $product->is_manual_payment==0){

            $jsonData = $this->payment_xendit_proccess($this->input_data,$id,$transaksi_id);
            echo json_encode($jsonData);
            die();

        }else if($this->input_data["grand_total"]>0 && $this->input_data['payment_type']=="manual_transfer" && $product->is_manual_payment==0){
            $sales_order_data = array(
                'payment_method'=>'manual_transfer',
                'bank_or_store'=>'MANUAL',
                'payment_status'=>'PENDING',
                'payment_code'=>'',
            );
            $this->sales_order_model->update($sales_order_data,$id);

            $this->_sendEmailCompleteOrder($id);
            $this->_sendEmailNotification($id);
            $this->_sendWaNotification($id,$transaksi_id,$this->input_data);

        }else{

            $this->_sendEmailCompleteOrder($id);
            $this->_sendEmailNotification($id);
            $this->_sendEmailTicket($id);
            $this->_sendWaTicket($id,$product->link);
            $this->_sendWaNotification($id,$transaksi_id);
            
        }

        $this->cart_model->delete($this->userpubliclog['member_id'],'member_id');

        $jsonData = array(
            'status'=>'success',
            'order_id'=>$transaksi_id,
            'amount'=>$this->input_data["grand_total"],
            'item_detail'=>$item_detail,
            'id'=>encrypt_decrypt('encrypt',$id),
        );
        echo json_encode($jsonData);
        die();

    }

    public function save_data_tambahan($code) {

        $this->cek_user_session();
        $code = strip_tags($code);
        $code = encrypt_decrypt('decrypt', $code);

        $peserta = $this->peserta_model->find($code,'code');
        if(isset($peserta->id)){

            $additional_data = $this->additional_data_model->find($peserta->id,'id_peserta');
            if(isset($additional_data->id)){
                redirect(base_url());
            }else{
                $query = $this->custom_form_model->source();
                $query->where('product_id',$this->input_data['product_id']);
                $custom_form = $query->get()->result();
                foreach ($custom_form as $k => $v) {

                    if($v->type=='checkbox' || $v->type=='radiobox'){
                        $val = implode(", ", $this->input_data[$v->field]);
                    }else{
                        $val =  $this->input_data[$v->field];
                    }

                    $additional_data_answer = array(
                        'sales_order_id'=>$peserta->sales_order_id,
                        'id_peserta'=>$peserta->id,
                        'custom_form_id'=>$v->id,
                        'field'=>$v->field,
                        'value'=>$val,
                    );
                    $this->additional_data_model->insert($additional_data_answer);

                    $this->session->set_flashdata("success", "Data berhasil disimpan");
                    redirect(base_url());
                }
            }

        }else{
            redirect("404");
        }

    }


    public function completeorder($id = "") {

        if ($id != "") {

            $id = strip_tags($id);
            $id = encrypt_decrypt('decrypt', $id);

            $sales_order = $this->sales_order_model->find($id);
            if(isset($sales_order->id) && $sales_order->is_transaction_success==0){

                $this->sales_order_model->update(array('is_transaction_success'=>1),$id);

                $data["data"] = $sales_order;

                $query = $this->sales_order_detail_model->source();
                $query->select('sales_order_detail.*,p.title, p.cover, p.slug, p.speaker');
                $query->join('product p','p.id = sales_order_detail.product_id');
                $query->where('sales_order_id',$id);
                $data['datas'] = $query->get()->result();

                $product = $this->product_model->find($data['datas'][0]->product_id);
                $query = $this->account_model->source();
                $query->where('member_id',$product->member_id);
                $data['account'] = $query->get()->result();

                if($sales_order->payment_method=='gopay'){
                    $data['expiry_time'] = '+15 minutes';
                }else if($sales_order->payment_method=='cstore'){
                    $data['expiry_time'] = '+4 hours';   
                }else{
                    $data['expiry_time'] = '+60 minutes';    
                }

                $data['member'] = $this->member_model->find($sales_order->member_id);

                $data["title_page"] = "Complete Order | " . "Event Stack";

                $this->load->view("contents/completepayment", $data);

            }else{
                redirect("home"); 
            }

        } else {
            redirect("home");
        }

    }

    public function gen_qr_code($id){

        include APPPATH.'../application/libraries/phpqrcode/qrlib.php'; 

        $id = strip_tags($id);
        $id = encrypt_decrypt('decrypt', $id);

        $sales_order = $this->sales_order_model->find($id);
        if(isset($sales_order->id)){
            QRcode::png($sales_order->payment_code);
        }

    }

    private function payment_proccess($param_data,$id,$transaksi_id){
            
        $transaction = array();
        if($param_data["payment_type"]=='bank_transfer'){

            $transaction['payment_type'] = $param_data["payment_type"];
            $transaction['bank_transfer'] = array(
                'bank'=>$param_data["bank_or_store"]
            );

        }else if($param_data["payment_type"]=='echannel'){

            $transaction['payment_type'] = $param_data["payment_type"];
            $transaction['echannel'] = array(
                'bill_info1'=>' Payment For:',
                'bill_info2'=>'Event Stack'
            );

        }else if($param_data["payment_type"]=='gopay'){

            $transaction['payment_type'] = $param_data["payment_type"];
            
        }else if($param_data["payment_type"]=='cstore'){

            $transaction['payment_type'] = $param_data["payment_type"];

            if($param_data["bank_or_store"]=='Indomaret'){
                $transaction['cstore'] = array(
                    'store'=>$param_data["bank_or_store"],
                    'message'=>'Pemesanan tiket di Event Stack'
                );
            }else{
                $transaction['cstore'] = array(
                    'store'=>$param_data["bank_or_store"],
                    'alfamart_free_text_1'=>'Pemesanan tiket di Event Stack'
                );
            }
            
        }else if($param_data["payment_type"]=='akulaku'){

            $transaction['payment_type'] = $param_data["payment_type"];
            
        }

        $query = $this->payment_method_model->source();
        $query->where('bank_or_store',$param_data["bank_or_store"]);
        $query->where('payment_type',$param_data["payment_type"]);
        $payment_method = $query->get()->row();

        $transaction['customer_details'] = array(
            "email"=> $this->userpubliclog['email'],
            "first_name"=> $this->userpubliclog['name'],
            "phone"=> $this->userpubliclog['phone']
        );
        $transaction['transaction_details'] = array(
            "order_id"=>$transaksi_id,
            "gross_amount"=>$param_data["grand_total"]
        );
        $transaction['custom_expiry'] = array(
            "order_time"=>date('Y-m-d H:i:s')." +0700",
            "expiry_duration"=>$payment_method->expiry_duration,
            "unit"=>$payment_method->unit
        );

        $result = curl_payment($transaction);
        if($result['status']=='success'){

            $sales_order_data = array(
                'payment_method'=>$param_data["payment_type"],
                'bank_or_store'=>$param_data["bank_or_store"],
                'payment_status'=>$result['data']->transaction_status,
                'pdf_url'=>isset($result['data']->pdf_url)?$result['data']->pdf_url:null,
                'payment_id'=>$result['data']->transaction_id,
            );
            
            if($param_data["payment_type"]=='bank_transfer'){
                if($param_data["bank_or_store"]=='permata'){
                    $sales_order_data['payment_code'] = $result['data']->permata_va_number;
                }else if($param_data["bank_or_store"]=='bca'){
                    $sales_order_data['payment_code']= $result['data']->va_numbers[0]->va_number;
                }else if($param_data["bank_or_store"]=='bni'){
                    $sales_order_data['payment_code'] = $result['data']->va_numbers[0]->va_number;
                }
            }else if($param_data["payment_type"]=='echannel'){

                if($param_data["bank_or_store"]=='mandiri'){
                    $sales_order_data['payment_code'] = $result['data']->bill_key.'#'.$result['data']->biller_code;
                }

            }else if($param_data["payment_type"]=='gopay'){

                $sales_order_data['payment_code'] = $result['data']->actions[0]->url;
                
            }else if($param_data["payment_type"]=='cstore'){

                if($param_data["bank_or_store"]=='Indomaret'){
                    $sales_order_data['payment_code'] = $result['data']->payment_code;
                }else{
                    $sales_order_data['payment_code'] = $result['data']->payment_code;
                }
                
            }else if($param_data["payment_type"]=='akulaku'){

                $sales_order_data['payment_type'] = $result['data']->reiderect_url;
                
            }

            $this->sales_order_model->update($sales_order_data,$id);
            
            return array(
                'status'=>'success',
                'order_id'=>$transaksi_id,
                'amount'=>$this->input_data["grand_total"],
                'id'=>encrypt_decrypt('encrypt',$id),
            );

        }else{

            return array(
                'status'=>'error'
            );

        }

    }

    private function payment_xendit_proccess($param_data,$id,$transaksi_id){
        
        $phone_number = isset($param_data['number_payment'])?$param_data['number_payment']:'';
        $payment_number = str_replace("+", "",$phone_number);
        $cek_number = substr($payment_number,0,2); 
        if($cek_number=='62'){
            $number = '+'.$payment_number;
            $number = str_replace("+62", "0", $number);
            $phone_number = '0'.(int)$number;
        }

        if($param_data["payment_type"]=='ewallet'){

            $link = "https://api.xendit.co/ewallets";

            if($param_data["bank_or_store"]=='OVO'){
                $transaction = array(
                    'external_id' => $transaksi_id,
                    'amount' => (int)$param_data["grand_total"],
                    'phone' => $phone_number,
                    'ewallet_type' => 'OVO'
                );
            }else if($param_data["bank_or_store"]=='DANA'){
                $transaction = array(
                    'external_id' => $transaksi_id,
                    'amount' => (int)$param_data["grand_total"],
                    'phone' => $phone_number,
                    'callback_url'=> base_url().'payment/complete',
                    'redirect_url'=> base_url().'completeorder/'.encrypt_decrypt('encrypt',$id),
                    'ewallet_type' => 'DANA'
                );
            }else if($param_data["bank_or_store"]=='LINKAJA'){

                $query = $this->sales_order_detail_model->source();
                $query->where('sales_order_id',$id);
                $sales_order_detail = $query->get()->result();

                $detail = array();
                foreach ($sales_order_detail as $key => $value) {
                    $ticket = $this->ticket_model->find($value->ticket_id);
                    $detail[] = array(
                        'id' => $value->ticket_id,
                        'name' => $ticket->ticket_name,
                        'price' => (int)$value->price,
                        'quantity' => (int)$value->quantity
                    );
                }

                $transaction = array(
                    'external_id' => $transaksi_id,
                    'amount' => (int)$param_data["grand_total"],
                    'phone' => $phone_number,
                    'items' => $detail,
                    'callback_url'=> base_url().'payment/complete',
                    'redirect_url'=> base_url().'completeorder/'.encrypt_decrypt('encrypt',$id),
                    'ewallet_type' => 'LINKAJA'
                );
            }

        }else if($param_data["payment_type"]=='bank_transfer'){

            $link = "https://api.xendit.co/callback_virtual_accounts";

            if($param_data["bank_or_store"]=='BNI'){
                $transaction = array(
                    'external_id' => $transaksi_id,
                    'bank_code' => 'BNI',
                    'name' => "EVENTSTACK",
                    'is_closed' => true,
                    'expected_amount' => (int)$param_data["grand_total"],
                    // 'virtual_account_number'=>'8808354700172725',
                    // 'expiration_date' => iso8601(),
                    'is_single_use'=>true
                );
            }

        }else if($param_data["payment_type"]=='qris'){

            $link = "https://api.xendit.co/qr_codes";

            if($param_data["bank_or_store"]=='QRIS'){
                $transaction = array(
                    'external_id' => $transaksi_id,
                    'type' => 'DYNAMIC',
                    'callback_url' => base_url().'payment/complete',
                    'amount' => (int)$param_data["grand_total"],
                    'phone' => $phone_number
                );
            }
        }

        $result = curl_xendit_payment($link,$transaction);
        if($result['status']=='success'){

            if(isset($result['data']['qr_string'])){
                $payment_code = $result['data']['qr_string'];
            }else if(isset($result['data']['account_number'])){
                $payment_code = $result['data']['account_number'];
            }else {
                $payment_code = $phone_number;
            }

            $sales_order_data = array(
                'payment_method'=>$param_data["payment_type"],
                'bank_or_store'=>$param_data["bank_or_store"],
                'payment_status'=>'PENDING',
                'payment_code'=>$payment_code,
            );
            $this->sales_order_model->update($sales_order_data,$id);

            $this->_sendEmailCompleteOrder($id);
            $this->_sendEmailNotification($id);
            $this->_sendWaNotification($id,$transaksi_id);

            $this->cart_model->delete($this->userpubliclog['member_id'],'member_id');

            return array(
                'status'=>'success',
                'payment_type'=>'ewallet',
                'bank_or_store'=>$param_data["bank_or_store"],
                'transaction'=>$transaction,
                // 'data'=>$result["data"],
                'checkout_url'=>isset($result['data']['checkout_url'])?$result['data']['checkout_url']:'',
                'order_id'=>$transaksi_id,
                'amount'=>$this->input_data["grand_total"],
                'id'=>encrypt_decrypt('encrypt',$id),
            );

        }else{

            $this->peserta_model->delete($id,'sales_order_id');
            $this->sales_order_detail_model->delete($id,'sales_order_id');
            $this->sales_order_model->delete($id);

            $result['transaction'] = $transaction;
            return $result;

        }

    }

}

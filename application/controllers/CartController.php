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

        $product = $this->product_model->find($this->input_data['product_id']);
        $continue_url = base_url().'product/'.$product->code;
        $this->session->set_userdata("continue_url", $continue_url);
        $this->cek_user_session();
        $this->cart_model->delete($this->userpubliclog['member_id'],'member_id');

        $cart_data = array(
            'quantity'=>1,
            'product_id'=>$this->input_data['product_id'],
            'member_id'=>$this->userpubliclog['member_id'],
            'price'=>$product->price,
            'total'=>$product->price,
        );
        $this->cart_model->insert($cart_data);

        $this->session->unset_userdata("continue_url");
        redirect(base_url().'cart/checkout');
        
	}

    public function checkout() {

        $this->cek_user_session();

        $this->cek_cart();

        $data["title_page"] = "Form Register | " . "KiniWedding";

        $cart = $this->cart_model->find($this->userpubliclog['member_id'],'member_id');
        $product = $this->product_model->find($cart->product_id);
        $query = $this->payment_method_model->source();
        $query->where('status',1);
        $data['payment_method'] = $query->get()->result();
        $data['data'] = $product;

        $query = $this->account_model->source();
        $data['account'] = $query->get()->result();

        $c = $this->load->view("contents/checkout", $data, true);
        $js = $this->load->view("js/js_checkout", "", true);
        $this->load_layout($c,$js);
    }


    public function setorder() {

        $this->cek_user_session();

        $this->input_data = json_decode(file_get_contents("php://input"), true);
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
                "price" => $row->price,
                "sales_order_id" => $id,
                "total" => $row->total,
            );
            $sales_order_detail_id = $this->sales_order_detail_model->insert($data_order_detail);
            
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
            // $this->_sendEmailNotification($id);
            $this->_sendWaNotification($id,$transaksi_id,$this->input_data);

        }else{

            $this->_sendEmailCompleteOrder($id);
            // $this->_sendEmailNotification($id);
            // $this->_sendEmailTicket($id);
            // $this->_sendWaTicket($id,$product->link);
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

            // $this->_sendEmailCompleteOrder($id);
            // $this->_sendEmailNotification($id);
            // $this->_sendWaNotification($id,$transaksi_id);

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

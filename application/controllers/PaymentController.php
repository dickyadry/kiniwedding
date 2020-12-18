<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentController extends MY_Controller {

    public function __construct() {
        parent::__construct();
        error_reporting(E_ALL & ~E_NOTICE);

        $this->sales_order_model = new GeneralModel("sales_order");
        $this->sales_order_detail_model = new GeneralModel("sales_order_detail");
        $this->transaction_model = new GeneralModel("transaction");
        $this->saldo_model = new GeneralModel("saldo");
        $this->product_model = new GeneralModel("product");

    }
    
    public function notification($code) {

        $code = strip_tags($code);
        $code = encrypt_decrypt('decrypt', $code);
        if($code!='eventstack'){
            $this->session->set_flashdata("error", "Halaman tidak ditemukan");
            redirect("404");
        }

        $json = file_get_contents('php://input');
        $data = json_decode($json,TRUE);

        $sales_order = $this->sales_order_model->find($data['order_id'],'sales_order_no');
        
        if(isset($sales_order->id) && $sales_order->status_order!='1'){
            if($data['transaction_status']=='settlement'  && $sales_order->grand_total==$data['gross_amount']){

                $data_update = array(
                    "status_order" => 1,
                    "payment_id" => $data['transaction_id'],
                    "payment_method" => $data['payment_type'],
                    "payment_status" => $data['transaction_status'],
                    "payment_time" => $data['settlement_time']
                );

                $where_update = array("sales_order_no" =>$data['order_id']);
                $this->db->update("sales_order", $data_update, $where_update);

                $amount = $sales_order->sub_total;

                $sales_order_detail = $this->sales_order_detail_model->find($sales_order->id,'sales_order_id');

                // $this->_sendEmailPaymentSuccess($sales_order->id);
                // $this->_sendEmailTicket($sales_order->id);

                echo json_encode(['success' => true, 'status' => $data['transaction_status']]);

            } else if($data['transaction_status'] == "capture" && $data['channel_response_message'] == "Approved" && $sales_order->grand_total==$data['gross_amount']){

                $data_update = array(
                    "status_order" => 1,
                    "payment_id" => $data['transaction_id'],
                    "payment_method" => $data['payment_type'],
                    "payment_status" => $data['transaction_status'],
                    "payment_time" => $data['transaction_time']
                );

                $where_update = array("sales_order_no" =>$data['order_id']);
                $this->db->update("sales_order", $data_update, $where_update);

                $amount = $sales_order->sub_total;

                $sales_order_detail = $this->sales_order_detail_model->find($sales_order->id,'sales_order_id');
                $product = $this->product_model->find($sales_order_detail->product_id);

                // $this->_sendEmailPaymentSuccess($sales_order->id);
                // $this->_sendEmailTicket($sales_order->id);
                
                echo json_encode(['success' => true, 'status' => $data['transaction_status']]);

            }else if($data['transaction_status']=='pending'){
                $data_update = array(
                    "status_order" => 4,
                    "payment_id" => $data['transaction_id'],
                    "payment_method" => $data['payment_type'],
                    "payment_status" => $data['transaction_status'],
                );

                $where_update = array("sales_order_no" =>$data['order_id']);
                $this->db->update("sales_order", $data_update, $where_update);

                return json_encode(['success' => true, 'status' => $data['transaction_status']]);
            }else if($data['transaction_status']=='expire'){
                $data_update = array(
                    "status_order" => 3,
                    "payment_id" => $data['transaction_id'],
                    "payment_method" => $data['payment_type'],
                    "payment_status" => $data['transaction_status'],
                );

                $where_update = array("sales_order_no" =>$data['order_id']);
                $this->db->update("sales_order", $data_update, $where_update);

                return json_encode(['success' => true, 'status' => $data['transaction_status']]);
            }


        }else{

            echo json_encode(['success' => true, 'status' => 'Complete']);

        }

    }

    public function finish($code) {

        $code = strip_tags($code);
        $code = encrypt_decrypt('decrypt', $code);
        if($code!='eventstack'){
            $this->session->set_flashdata("error", "Halaman tidak ditemukan");
            redirect("404");
        }

        $status = isset($_GET['transaction_status'])?$_GET['transaction_status']:'';
        if($status=='pending'){

        }else{

        }
        print_r("finish");
    }

    public function unfinish($code) {

        $code = strip_tags($code);
        $code = encrypt_decrypt('decrypt', $code);
        if($code!='eventstack'){
            $this->session->set_flashdata("error", "Halaman tidak ditemukan");
            redirect("404");
        }

        print_r("unfinish");
    }

    public function error($code) {

        $code = strip_tags($code);
        $code = encrypt_decrypt('decrypt', $code);
        if($code!='eventstack'){
            $this->session->set_flashdata("error", "Halaman tidak ditemukan");
            redirect("404");
        }
        
        print_r("error");
    }

    public function complete() {

        $json = file_get_contents('php://input');
        $post_data = json_decode($json,TRUE);

        $sales_order = $this->sales_order_model->find($post_data['external_id'],'sales_order_no');
        if(isset($sales_order->id) && $sales_order->status_order!=1){
            if(isset($post_data['ewallet_type']) && $post_data['ewallet_type']=='OVO' && (int)$sales_order->grand_total==$post_data['amount']){
                if(isset($post_data['status']) && $post_data['status']=='COMPLETED'){
                    $data_update = array(
                        "status_order" => 1,
                        // "payment_method" => $post_data['ewallet_type'],
                        // "bank_or_store" => $post_data['ewallet_type'],
                        "payment_status" => 'COMPLETED',
                        "payment_time" => date('Y-m-d H:i:s'),
                    );
                    $this->sales_order_model->update($data_update,$sales_order->id);
                }
            }else if(isset($post_data['ewallet_type']) && $post_data['ewallet_type']=='DANA' && (int)$sales_order->grand_total==$post_data['amount']){
                if(isset($post_data['payment_status']) && $post_data['payment_status']=='PAID'){
                    $data_update = array(
                        "status_order" => 1,
                        // "payment_method" => $post_data['ewallet_type'],
                        // "bank_or_store" => $post_data['ewallet_type'],
                        "payment_status" => 'COMPLETED',
                        "payment_time" => date('Y-m-d H:i:s'),
                    );
                    $this->sales_order_model->update($data_update,$sales_order->id);
                }
            }else if(isset($post_data['ewallet_type']) && $post_data['ewallet_type']=='LINKAJA' && (int)$sales_order->grand_total==$post_data['amount']){
                if(isset($post_data['status']) && $post_data['status']=='SUCCESS_COMPLETED'){
                    $data_update = array(
                        "status_order" => 1,
                        // "payment_method" => $post_data['ewallet_type'],
                        // "bank_or_store" => $post_data['ewallet_type'],
                        "payment_status" => 'COMPLETED',
                        "payment_time" => date('Y-m-d H:i:s'),
                    );
                    $this->sales_order_model->update($data_update,$sales_order->id);
                }
            }else if(isset($post_data['bank_code']) && $post_data['bank_code']=='MANDIRI' && (int)$sales_order->grand_total==$post_data['amount']){
                $data_update = array(
                    "status_order" => 1,
                    // "payment_method" => 'VIRTUAL ACCOUNT',
                    // "bank_or_store" => $post_data['bank_code'],
                    "payment_status" => 'COMPLETED',
                    "payment_time" => date('Y-m-d H:i:s'),
                );
                $this->sales_order_model->update($data_update,$sales_order->id);
            }else if(isset($post_data['bank_code']) && (int)$sales_order->grand_total==$post_data['amount']){
                $data_update = array(
                    "status_order" => 1,
                    // "payment_method" => 'VIRTUAL ACCOUNT',
                    // "bank_or_store" => $post_data['bank_code'],
                    "payment_status" => 'COMPLETED',
                    "payment_time" => date('Y-m-d H:i:s'),
                );
                $this->sales_order_model->update($data_update,$sales_order->id);
            }else if(isset($post_data['qr_code']) && (int)$sales_order->grand_total==$post_data['amount']){
                $data_update = array(
                    "status_order" => 1,
                    // "payment_method" => 'VIRTUAL ACCOUNT',
                    // "bank_or_store" => $post_data['bank_code'],
                    "payment_status" => 'COMPLETED',
                    "payment_time" => date('Y-m-d H:i:s'),
                );
                $this->sales_order_model->update($data_update,$sales_order->id);
            }

            $query = $this->sales_order_detail_model->source();
            $query->select('sales_order_detail.*,p.title, p.cover, p.slug, p.speaker');
            $query->join('product p','p.id = sales_order_detail.product_id');
            $query->where('sales_order_id',$sales_order->id);
            $data['datas'] = $query->get()->result();
                
            $product = $this->product_model->find($data['datas'][0]->product_id);

            $this->_sendEmailPaymentSuccess($sales_order->id);
            $this->_sendEmailTicket($sales_order->id);
            $this->_sendWaTicket($sales_order->id,$product->link);

            echo json_encode(['success' => true, 'status' => 'Complete']);
        }

        

    }

}
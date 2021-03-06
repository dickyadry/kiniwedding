<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class MemberTiketController extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->library("uploadGS");
		$this->bucketName = "eventstack-storage";

		$this->peserta_model = new GeneralModel("peserta");
		$this->account_model = new GeneralModel("account");
		$this->product_model = new GeneralModel("product");
		$this->member_model = new GeneralModel("member");
		$this->ticket_model = new GeneralModel("ticket");
		$this->sales_order_model = new GeneralModel("sales_order");
		$this->sales_order_detail_model = new GeneralModel("sales_order_detail");
		$this->additional_data_model = new GeneralModel('additional_data');

	}

	public function tiket($status){

		$this->cek_user_session();

		$status = strip_tags($status);

		$today = date('Y-m-d');

		$data["title_page"] = "Tiket Saya | " . "KiniWedding";
		$data["title"] = "Tiket Saya";
		$data["title_small"] = "My ticket page layout";

		$this->cek_user_session();

		$limit =8;
		$page = isset($this->input_data['page'])?strip_tags(is_numeric($this->input_data['page'])?$this->input_data['page']:1):1;
		$start = isset($this->input_data['page'])?(($page-1)*$limit):0;

		$data = array();
		$data["title_page"] = "KiniWedding";
		$data["title"] = "Event Saya";
		$data["title_small"] = "My event page layout";

		$data['status'] = $status;

		$query = $this->sales_order_model->source();
		$query->select('p.code, p.simple_link, p.title,p.speaker, p.platform, p.start_date, p.end_date, p.description, p.tnc, p.pageview, p.cover, p.slug, p.note, p.is_blast, p.status, p.type, p.member_id, p.is_online, p.is_selection, p.is_free, p.link, p.place, p.provinsi, p.kota, p.address, p.max_order_ticket, p.is_one_only, p.category_name, p.position, p.is_custom_form, p.deleted_at, p.deleted_by, p.id, sales_order.status_order');
		$query->join('sales_order_detail sod', 'sod.sales_order_id = sales_order.id');
		$query->join('product p', 'sod.product_id = p.id');

		if($status=='pending'){
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
		}else if($status=='aktif'){
			$query->where(" DATE(end_date) >=",$today);
			$query->where('sales_order.status_order',1);
			$query->where('p.status','aktif');
		}else if($status=='closed'){
			$query->where('sales_order.status_order',1);
			$query->group_start();
				$query->where('p.status','closed');
				$query->or_where("DATE(end_date) <",$today);
			$query->group_end();
		}
		
		$query->where('sales_order.member_id',$this->userpubliclog["member_id"]);
		$query->group_by("sod.product_id");
		$query->group_by("p.code, p.simple_link, p.title,p.speaker, p.platform, p.start_date, p.end_date, p.description, p.tnc, p.pageview, p.cover, p.slug, p.note, p.is_blast, p.status, p.type, p.member_id, p.is_online, p.is_selection, p.is_free, p.link, p.place, p.provinsi, p.kota, p.address, p.max_order_ticket, p.is_one_only, p.category_name, p.position, p.is_custom_form, p.deleted_at, p.deleted_by, p.id, sales_order.status_order");
		$query->group_by("sales_order.sales_order_no");
		$query->group_by("sales_order.grand_total");
		$query->group_by("sales_order.created_at");
		$query->order_by("p.id", "DESC");
		$total_data = $query->count_all_results();

		$query = $this->sales_order_model->source();
		$query->select('p.code, p.simple_link, p.title,p.speaker, p.platform, p.start_date, p.end_date, p.description, p.tnc, p.pageview, p.cover, p.slug, p.note, p.is_blast, p.status, p.type, p.member_id, p.is_online, p.is_selection, p.is_free, p.link, p.place, p.provinsi, p.kota, p.address, p.max_order_ticket, p.is_one_only, p.category_name, p.position, p.is_custom_form, p.deleted_at, p.deleted_by, p.id, sales_order.status_order,sales_order.id as sales_order_id, sales_order.payment_method ,sales_order.sales_order_no, sales_order.grand_total, sales_order.created_at');
		$query->join('sales_order_detail sod', 'sod.sales_order_id = sales_order.id');
		$query->join('product p', 'sod.product_id = p.id');
		
		if($status=='pending'){
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

		}else if($status=='aktif'){
			$query->where('sales_order.status_order',1);
			$query->where('p.status','aktif');
		}else if($status=='closed'){
			$query->where('sales_order.status_order',1);
			$query->group_start();
				$query->where('p.status','closed');
				$query->or_where("DATE(end_date) <",$today);
			$query->group_end();
		}

		$query->where('sales_order.member_id',$this->userpubliclog["member_id"]);
		$query->group_by("sod.product_id");
		$query->group_by("p.code, p.simple_link, p.title,p.speaker, p.platform, p.start_date, p.end_date, p.description, p.tnc, p.pageview, p.cover, p.slug, p.note, p.is_blast, p.status, p.type, p.member_id, p.is_online, p.is_selection, p.is_free, p.link, p.place, p.provinsi, p.kota, p.address, p.max_order_ticket, p.is_one_only, p.category_name, p.position, p.is_custom_form, p.deleted_at, p.deleted_by, p.id, sales_order.status_order");
		$query->group_by("sales_order.sales_order_no");
		$query->group_by("sales_order.grand_total");
		$query->group_by("sales_order.created_at");
		$query->group_by("sales_order.id");
		$query->group_by("sales_order.payment_method");
		$query->order_by("p.id", "DESC");
		$query->limit($limit,$start);
		$product = $query->get()->result();

		$datas = array();
		foreach ($product as $key => $value) {

			$query = $this->peserta_model->source();
            $query->join('sales_order',' sales_order.id=peserta.sales_order_id');
            $query->group_start();
                $query->where('status_order',1);   
                $query->or_where('status_order',4);   
                $query->or_where('status_order',5);   
            $query->group_end();
            $query->where('product_id',$value->id);
            $value->total_peserta = $query->count_all_results();

			$datas[] = $value;
		}

		$data['pagination'] = $this->paging_page('member/'.strip_tags($this->uri->segment(2)),$limit,$total_data);

		$data['total_page'] = ceil($total_data/$limit);
		$data['page'] = $page;
		$data['limit'] = $limit;
		$data["datas"] = $datas;

		$c = $this->load->view("contents/member/tiket", $data, true);
		$js = $this->load->view("js/member/js_tiket", "", true);
		$this->load_layout_member($c,$js);

	}

	public function detail($id=0){

		$this->cek_user_session();

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$data = array();
		$data["title"] = "Detail Tiket";
		$data["title_small"] = "Detail Tiket page layout";

		if($id != 0){

			$sales_order = $this->sales_order_model->find($id);
			if(isset($sales_order->id)){

				$query = $this->sales_order_model->source();
				$query->select('sod.*, ticket.ticket_name, ticket.ticket_description,p.file,p.code,p.name,p.email,p.phone,p.id as id_peserta');
				$query->join('sales_order_detail sod', 'sod.sales_order_id = sales_order.id');
				$query->join('ticket','ticket.id=sod.ticket_id');
				$query->join('peserta p','p.sales_order_detail_id=sod.id');
				$query->where('sod.sales_order_id',$id);
				$query->where('sales_order.member_id',$this->userpubliclog["member_id"]);
				$data['ticket'] = $query->get()->result();

				$product = $this->product_model->find($data['ticket'][0]->product_id);
				$data["data"] = $product;
				$data["sales_order"] = $sales_order;
				$c = $this->load->view("contents/member/detail-tiket", $data, true);
				$this->load_layout_member($c);

			}else{
				redirect("404");
			}
		}else{
			redirect("404");
		}

	}

	public function myticket($code=0){

		$continue_url = base_url().'member/tiket-saya/'.$code;
        $this->session->set_userdata("continue_url", $continue_url);
        $this->cek_user_session();
        $this->session->unset_userdata("continue_url");

		$this->load->library('email');
		include APPPATH.'../application/libraries/phpqrcode/qrlib.php'; 

		$code = strip_tags($code);
		$code = encrypt_decrypt('decrypt',$code);

		$data = array();

		$peserta = $this->peserta_model->find($code,'code');
		if(isset($peserta->id)){

			$sales_order = $this->sales_order_model->find($peserta->sales_order_id);
			$ticket = $this->ticket_model->find($peserta->ticket_id);
			$product = $this->product_model->find($peserta->product_id);
			$member = $this->member_model->find($product->member_id);

			$data['sales_order'] = $sales_order;
			$data["peserta"] = $peserta;
			$data["product"] = $product;
			$data["member"] = $member;
			$data["ticket"] = $ticket;

			$dir = APPPATH.'../public/qrcode';
			if (!file_exists($dir))
	    		mkdir($dir);

			$codeContents = $peserta->code; 
			QRcode::png($codeContents,$dir."/".$peserta->code.".png", QR_ECLEVEL_L, 5); 

			$filepath = APPPATH.'../public/barcode/'.$peserta->code.'.png';
			$text = $peserta->code;
			$size = 20;
			$orientation = "horizontal";
			$code_type = "Code128";
			$print = false;
			$sizefactor = 1;

			barcode( $filepath, $text, $size, $orientation, $code_type, $print, $sizefactor );

			$uploadGS = new uploadGS();
	    	$cloudPath = 'qrcode/'.$peserta->code.".png";
			$fileContent = file_get_contents($dir."/".$peserta->code.".png");
			$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);
			unlink($dir."/".$peserta->code.".png");

			$cloudPath = 'barcode/'.$peserta->code.".png";
			$fileContent = file_get_contents($filepath);
			$isSucceed = $uploadGS->uploadFile($fileContent, $cloudPath);
			unlink($filepath);

			$html = $this->load->view("contents/member/myticket", $data,true);

			$options = new Options();
			$options->set('isRemoteEnabled', TRUE);
			$dompdf = new Dompdf($options);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'potrait');
			$dompdf->render();
			$dompdf->stream('myticket.pdf', array("Attachment" => false));

		}else{
			redirect("404");
		}


	}


	public function invoice($id=0){

		$this->cek_user_session();

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);

		$data = array();
		$data["title"] = "Invoice";
		$data["title_small"] = "Invoice page layout";

		if($id != 0){

			$sales_order = $this->sales_order_model->find($id);
			if(isset($sales_order->id)){

		        $query = $this->sales_order_detail_model->source();
		        $query->select('sales_order_detail.*,p.title, p.cover, p.slug, p.speaker');
		        $query->join('product p','p.id = sales_order_detail.product_id');
		        $query->where('sales_order_id',$id);
		        $data['datas'] = $query->get()->result();

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

		        $this->load->view("contents/member/invoice", $data);

			}else{
				redirect("404");
			}
		}else{
			redirect("404");
		}

	}

	public function delete($id){

		$this->cek_user_session();

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt', $id);

		$this->sales_order_model->delete($id);
		$this->sales_order_detail_model->delete($id,'sales_order_id');
		$this->peserta_model->delete($id,'sales_order_id');
		$this->additional_data_model->delete($id,'sales_order_id');

		$this->session->set_flashdata("success", "Pesanan berhasil dibatalkan");
		redirect(base_url('member/tiket'));
		
	}




}

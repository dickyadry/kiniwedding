<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class WebController extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('user_agent');
		$this->product_model = new GeneralModel("product");
		$this->peserta_model = new GeneralModel("peserta");
		$this->ticket_model = new GeneralModel("ticket");
		$this->category_model = new GeneralModel("category");
		$this->category_brand_model = new GeneralModel("category_brand");
		$this->contact_model = new GeneralModel("contact");
		$this->member_model = new GeneralModel("member");
		$this->sertifikat_model = new GeneralModel("sertifikat");
		$this->penerima_sertifikat_model = new GeneralModel("penerima_sertifikat");

	}

	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

	public function comming_soon()
	{
		$this->load->view('comming_soon');
	}

	public function website() {

		$data = array();
		$today = date('Y-m-d');

		$data["title_page"] = "KiniWedding";

		$query = $this->product_model->source();
		$query->select('product.*');
		$query->where('product.status','aktif');
		$query->order_by("created_at", "DESC");
		// $query->where('type','Public');
		$query->where('deleted_at',null);
		// $query->where("DATE(end_date) >=",$today);
		$query->limit(9,0);
		$datas = $query->get()->result();
		$data["event_terbaru"] = $datas;
		
		$query = $this->product_model->source();
		$query ->select('product.*');
		// $query->order_by("RAND()");
		// $query->where('type','Public');
		$query->where('product.status','aktif');
		$query->where('is_selection',1);
		$query->where('deleted_at',null);
		$query->order_by("created_at", "DESC");
		// $query->where(" DATE(end_date) >=",$today);
		$query->limit(10,0);
		$datas = $query->get()->result();
		$data["event_selection"] = $datas;

		// $query = $this->product_model->source();
		// $query->select('product.*');
		// // $query->order_by("RAND()");
		// $query->where('type','Public');
		// $query->where('product.status','aktif');
		// $query->where('is_selection',1);
		// $query->where('deleted_at',null);
		// if(isset($datas[0]->id)){
		// 	$query->where('id !=',$datas[0]->id);
		// }
		// // $query->where(" DATE(end_date) >=",$today);
		// $query->limit(12,0);
		// $event_selection_other = $query->get()->result();

		// $event_selection_other_array = array();
		// $detail = array();
		// $detail_detail = array();

		// $no=0;
		// for($i=0; $i<2; $i++){
		// 	for($j=0; $j<3; $j++){
		// 		for($k=0; $k<2; $k++){
		// 			if(isset($event_selection_other[$no])){
		// 				$detail_detail[] = $event_selection_other[$no];
		// 				$no++;
		// 			}
		// 		}
		// 		$detail[] = $detail_detail;
		// 		$detail_detail = array();
		// 	}
		// 	$event_selection_other_array[] = $detail;
		// 	$detail = array();
		// }

		// $data["event_selection_other"] = $event_selection_other_array;

		

		$query = $this->product_model->source();
		$query->select('product.*');
		// $query->where('type','Public');
		$query->where('product.status','aktif');
		$query->where('deleted_at',null);
		// $query->where(" DATE(end_date) >=",$today);
		$query->limit(10,0);
		$query->order_by("end_date", "ASC");
		// $query->order_by("RAND()");
		$datas = $query->get()->result();
		$data["event_terdekat"] = $datas;

		$c = $this->load->view("contents/home", $data, true);
		$this->load_layout($c);

	}

	public function product(){

		$data = array();
		$data["title_page"] = "KiniWedding";
		$today = date('Y-m-d');

		$limit = 9;
		$page = isset($this->input_data['page'])?strip_tags(is_numeric($this->input_data['page'])?$this->input_data['page']:1):1;
		$start = isset($this->input_data['page'])?(($page-1)*$limit):0;

		if(isset($_GET['category']) && $_GET['category']!="all"){	
			$category = $this->category_model->find(strip_tags($_GET['category']),'name');
		}

		$query = $this->product_model->source();
		$query->select('product.code, product.name, product.description, product.price, product.cover, product.status, product.member_id, product.category_name, product.is_custom_form, product.deleted_at, product.deleted_by, product.id');
		$query->join('category_product cp', 'product.id = cp.product_id');
		$query->join('category c', 'cp.category_id = c.id');
		$query->where('type','Public');
		$query->where('product.deleted_at',null);
		$query->where('product.status','aktif');

		if(isset($_GET['q']) && $_GET['q']!=""){			
			$query->like('LOWER(product.title)',strtolower(strip_tags($_GET['q'])));
		}
		if(isset($category->id)){
			$query->where('cp.category_id',$category->id);		
		}

		$query->group_by("cp.product_id,product.id,product.code");
		$query->group_by("product.code, product.name, product.description, product.price, product.cover, product.status, product.member_id, product.category_name, product.is_custom_form, product.deleted_at, product.deleted_by, product.id");

		if(isset($_GET['order_by']) && $_GET['order_by']=="Event Terdekat"){	
			// $query->where(" DATE(end_date) >=",$today);
			$query->order_by("start_date", "ASC");
		}else{
			$query->order_by("product.created_at", "DESC");
		}
		
		$total_data = $query->count_all_results();

		$query = $this->product_model->source();
		$query->select('product.code, product.name, product.description, product.price, product.cover, product.status, product.member_id, product.category_name, product.is_custom_form, product.deleted_at, product.deleted_by, product.id');
		$query->join('category_product cp', 'product.id = cp.product_id');
		$query->join('category c', 'cp.category_id = c.id');
		$query->where('type','Public');
		$query->where('product.deleted_at',null);
		$query->where('product.status','aktif');

		if(isset($category->id)){
			$query->where('cp.category_id',$category->id);		
		}
		if(isset($_GET['q']) && $_GET['q']!=""){			
			$query->like('LOWER(product.title)',strtolower(strip_tags($_GET['q'])));
		}

		$query->group_by("cp.product_id,product.id");
		$query->group_by("product.code, product.name, product.description, product.price, product.cover, product.status, product.member_id, product.category_name, product.is_custom_form, product.deleted_at, product.deleted_by, product.id");

		if(isset($_GET['order_by']) && $_GET['order_by']=="Event Terdekat"){	
			// $query->where(" DATE(end_date) >=",$today);
			$query->order_by("start_date", "ASC");
		}else{
			$query->order_by("product.created_at", "DESC");
		}

		$query->limit($limit,$start);
		$datas = $query->get()->result();

		$query = $this->category_model->source();
		$category = $query->get()->result();
		$data["category"] = $category;

		$data['pagination'] = $this->paging_page_frontend('product',$limit,$total_data);

		$data["total_data"] = $total_data;
		$data['total_page'] = ceil($total_data/$limit);
		$data['page'] = $page;
		$data['limit'] = $limit;
		$data['datas'] = $datas;

		$c = $this->load->view("contents/search", $data, true);
		$js = $this->load->view("js/js_event", "", true);
		$this->load_layout($c,$js);

	}

	public function detail_simple_link($simple_link){

		$simple_link = strip_tags($simple_link);
		$product = $this->product_model->find($simple_link,'simple_link');
		if(isset($product->id)){
			redirect(base_url().'event/'.$product->code.'/'.$product->slug);
		}else{
			redirect("404");
		}

	}

	public function detail($code){

		$code = strip_tags($code);

		if($code != ""){

			$product = $this->product_model->find($code,'code');
			if(isset($product->id) && $product->status=='aktif' && $product->deleted_at==null){

				$data["data"] = $product;

				$query = $this->product_model->source();
				$query->where('id <>',$product->id);
				$query->where('product.status','aktif');
				// $query->where('type','Public');
				$query->where('deleted_at',null);
				$query->order_by("created_at", "DESC");
				$query->limit(9,0);
				$datas = $query->get()->result();
				$data["other_product"] = $datas;

				$data["title_page"] = $product->name . " | " . "Kini Wedding";

				$c = $this->load->view("contents/detail", $data, true);
				$js = $this->load->view("js/js_detail", "", true);
				$this->load_layout($c, $js, $product, 'detail');

			}
			else{
				redirect("404");
			}
		}else{
			redirect("404");
		}

	}

	public function contact(){

			$param_data = $this->input_data;
			$id = $this->contact_model->insert($param_data);
			$this->session->set_flashdata("success", "Pesan berhasil dikirim");
			redirect(base_url('page/contact'));

	 
	}

	public function pdf(){

		$data = array(
	        "dataku" => array(
	            "nama" => "Petani Kode",
	            "url" => "http://petanikode.com"
	        )
	    );

	    $this->load->library('pdf');

	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "laporan-petanikode.pdf";
	    $this->pdf->load_view('contents/laporan_pdf', $data);

	}
	
	public function page404(){

		$this->load->view("contents/page404","");
	 
	}

	public function email_notification(){

		$this->load->view("contents/email_notification","");
	 
	}

	public function kolaborasi()
	{

		$data["title_page"] = "KiniWedding";

		$c = $this->load->view("contents/kolaborasi", $data, true);
		$js = $this->load->view("js/js_detail", "", true);
		$this->load_layout($c, $js);
	}

	public function narasumber()
	{

		$data["title_page"] = "KiniWedding";

		$c = $this->load->view("contents/narasumber", $data, true);
		$js = $this->load->view("js/js_detail", "", true);
		$this->load_layout($c, $js);
	}

	public function test(){

		$uploadPath = realpath(APPPATH . '../public/sertifikat');
		echo $uploadPath;

	}

	// public function sertifikat(){

		

	// 	$uploadPath = realpath(APPPATH . '../public');

	// 	$config['source_image'] = $uploadPath.'/8-poster-event.jpeg';
	// 	$config['wm_text'] = 'Copyright 2006 - John Doe';
	// 	$config['wm_type'] = 'text';
	// 	$config['wm_font_path'] = './system/fonts/texb.ttf';
	// 	$config['wm_font_size'] = '42';
	// 	$config['wm_font_color'] = 'ffffff';
	// 	$config['wm_vrt_alignment'] = 'bottom';
	// 	$config['wm_hor_alignment'] = 'center';
	// 	$config['wm_padding'] = '20';
	// 	$config['create_thumb'] = TRUE;
	// 	$config['new_image'] = $uploadPath.'/test.jpeg';

	// 	$this->load->library('image_lib',$config);
	// 	$this->image_lib->initialize($config);

	// 	$this->image_lib->watermark();

	// 	// $this->load->view("contents/sertifikat","");
	 
	// }

	// public function font(){

	// 	$data = array();
	// 	$this->load->view("contents/test", $data);

	// 	$html = $this->load->view("contents/test", $data,true);

	// 	// $options = new Options();
	// 	// $options->set('isRemoteEnabled', TRUE);
	// 	// $dompdf = new Dompdf($options);
	// 	// $dompdf->loadHtml($html);
	// 	// // $dompdf->setPaper('A4', 'potrait');
	// 	// $dompdf->setPaper([0, 0, 842, 540], 'potrait');
	// 	// $dompdf->render();
	// 	// $dompdf->stream('myticket.pdf', array("Attachment" => false));

	// }

	// public function test(){
	// 	echo encrypt_decrypt('encrypt','eventstack');
	// }

	// public function generate(){

	// 	require 'pdfcrowd.php';
	// 	try
	// 	{
	// 	    // create the API client instance
	// 	    $client = new \Pdfcrowd\HtmlToPdfClient("demo", "ce544b6ea52a5621fb9d55f8b542d14d");

	// 	    // run the conversion and write the result to a file
	// 	    $client->convertUrl("https://google.com");

	// 	    header("Content-Type: application/pdf");
	// 	    header("Cache-Control: no-cache");
	// 	    header("Accept-Ranges: none");
	// 	    header("Content-Disposition: inline; filename=\"example.pdf\"");

	// 	}
	// 	catch(\Pdfcrowd\Error $why)
	// 	{
	// 	    // report the error
	// 	    error_log("Pdfcrowd Error: {$why}\n");

	// 	    // rethrow or handle the exception
	// 	    throw $why;
	// 	}

	// }

	// public function ticket(){

	// 	include "phpqrcode/qrlib.php"; 

	// 	$dir = APPPATH.'../public/qrcode';
	// 	if (!file_exists($dir)) //Buat folder bername temp
 //    		mkdir($dir);

	// 	$codeContents = 'https://www.maribelajarcoding.com'; 
	// 	QRcode::png($codeContents,$dir."/001.png", QR_ECLEVEL_L, 5); 

	// 	$data['data'] = $this->product_model->find(17);
	// 	$this->load->view("contents/ticket",$data);

	// }


	////////////// AKTIVASI USER /////////////////

	// public function test($data_member=array('token'=>'123','email'=>'adryanzyahdicky@gmail.com')) {

	// 	$this->sales_order_model = new GeneralModel("sales_order");
	// 	$this->sales_order_detail_model = new GeneralModel("sales_order_detail");
		
 //        $this->load->library('email');

 //        $subject ="Aktivasi member";
 //        $this->email->set_newline("\r\n");
 //        $this->email->to($data_member["email"]);
 //        $this->email->from('admin@evenstack.id', 'KiniWedding');

 //        $data['data'] = $data_member;
 //        $message = $this->load->view("contents/email_template_aktivasi", $data);
 //        // $this->email->subject($subject);
 //        // $this->email->message($message);

 //        // if ($this->email->send()) {
 //        //     return true;
 //        // } else {
 //        //     return false;
 //        // }

 //    }



	//////////// LUPA PASSWORD /////////////////

  //   public function test($email="adryanzyahdicky@gmail.com",$token='123') {

		// $this->sales_order_model = new GeneralModel("sales_order");
		// $this->sales_order_detail_model = new GeneralModel("sales_order_detail");
		
  //       $this->load->library('email');

  //       $subject ="Perubahan Password";
  //       $this->email->set_newline("\r\n");
  //       $this->email->to($email);
  //       $this->email->from('admin@evenstack.id', 'KiniWedding');

  //       $data['token'] = $token;
  //       $message = $this->load->view("contents/email_template_lupa_password", $data);
  //       // $this->email->subject($subject);
  //       // $this->email->message($message);

  //       // if ($this->email->send()) {
  //       //     return true;
  //       // } else {
  //       //     return false;
  //       // }

  //   }

	////////////// SUCCESS UBAH PASSWORD /////////////////

	// public function test($email="adryanzyahdicky@gmail.com",$token='123') {

	// 	$this->sales_order_model = new GeneralModel("sales_order");
	// 	$this->sales_order_detail_model = new GeneralModel("sales_order_detail");
		
 //        $this->load->library('email');

 //        $subject ="Perubahan Password";
 //        $this->email->set_newline("\r\n");
 //        $this->email->to($email);
 //        $this->email->from('admin@evenstack.id', 'KiniWedding');

 //        $data['token'] = $token;
 //        $message = $this->load->view("contents/email_template_success_ubah_password", $data);
 //        // $this->email->subject($subject);
 //        // $this->email->message($message);

 //        // if ($this->email->send()) {
 //        //     return true;
 //        // } else {
 //        //     return false;
 //        // }

 //    }

	// ////////////// SUCCESS ORDER /////////////////

	// public function test($id=3) {

 //    	$this->sales_order_model = new GeneralModel("sales_order");
 //        $this->sales_order_detail_model = new GeneralModel("sales_order_detail");
        
 //        $this->load->library('email');

 //        $query = $this->sales_order_detail_model->source();
 //        $query->select('sales_order_detail.*,p.title, p.cover, p.slug, p.speaker, p.start_date, p.end_date');
 //        $query->join('product p','p.id = sales_order_detail.product_id');
 //        $query->where('sales_order_id',$id);
 //        $data['datas'] = $query->get()->result();

 //        $sales_order = $this->sales_order_model->find($id);
 //        if($sales_order->payment_method=='gopay'){
 //            $data['expiry_time'] = '+15 minutes';
 //        }else if($sales_order->payment_method=='cstore'){
 //            $data['expiry_time'] = '+4 hours';   
 //        }else{
 //            $data['expiry_time'] = '+60 minutes';    
 //        }
                
 //        $member = $this->member_model->find($sales_order->member_id);
 //        $sales_order->member = $member->name;
 //        $data['data'] = $sales_order;
 //        $this->email->set_newline("\r\n");
 //        $this->email->to($this->userpubliclog["email"]);
 //        $this->email->from('admin@evenstack.id', 'KiniWedding');

 //        $message = $this->load->view("contents/email_template", $data);
 //        // $this->email->subject($sales_order->sales_order_no);
 //        // $this->email->message($message);

 //        // if ($this->email->send()) {
 //        //     return true;
 //        // } else {
 //        //     return false;
 //        // }

 //    }

	////////////// PAYMENT SUCCESS /////////////////

	// public function test($id=3) {

 //    	$this->sales_order_model = new GeneralModel("sales_order");
 //        $this->sales_order_detail_model = new GeneralModel("sales_order_detail");
        
 //        $this->load->library('email');

 //        $sales_order = $this->sales_order_model->find($id);
 //        $member = $this->member_model->find($sales_order->member_id);
 //        $sales_order->member = $member->name;
 //        $data['data'] = $sales_order;
 //        $this->email->set_newline("\r\n");
 //        $this->email->to($this->userpubliclog["email"]);
 //        $this->email->from('admin@evenstack.id', 'KiniWedding');

 //        $message = $this->load->view("contents/email_payment_success", $data);
 //        // $this->email->subject($sales_order->sales_order_no);
 //        // $this->email->message($message);

 //        // if ($this->email->send()) {
 //        //     return true;
 //        // } else {
 //        //     return false;
 //        // }

 //    }

    // public function test($id=10) {

    //     $this->load->library('email');

    //     $data['subject'] = 'asd';
    //     $data['msg'] = 'asd';
    //     $this->email->set_newline("\r\n");
    //     $this->email->to($this->userpubliclog["email"]);
    //     $this->email->from('admin@evenstack.id', 'KiniWedding');

    //     $message = $this->load->view("contents/email_link", $data);
    //     // $this->email->subject($sales_order->sales_order_no);
    //     // $this->email->message($message);

    //     // if ($this->email->send()) {
    //     //     return true;
    //     // } else {
    //     //     return false;
    //     // }

    // }


}

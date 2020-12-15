<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberEventCheckinPengunjungController extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->product_model = new GeneralModel("product");
		// $this->category_model = new GeneralModel("category");
		// $this->category_product_model = new GeneralModel("category_product");
		$this->checkin_model = new GeneralModel("checkin");
		$this->peserta_model = new GeneralModel("peserta");
		// $this->provinsi_model = new GeneralModel("provinsi");
		// $this->kota_model = new GeneralModel("kota");
		$this->ticket_model = new GeneralModel("ticket");
		// $this->member_model = new GeneralModel("member");
		// $this->custom_form_model = new GeneralModel("custom_form");
		// $this->custom_form_detail_model = new GeneralModel("custom_form_detail");


	}

	public function checkin_pengunjung($id=""){

		$this->cek_user_session();

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt', $id);

		$report = (isset($this->input_data['report']) && $this->input_data['report']!="")?strip_tags($this->input_data['report']):"";

		$data = array();
		$data["title_page"] = "Checkin Pengunjung | " . "Event Stack";
		$data["title"] = "Data Pesertan";
		$data["title_small"] = "Participant data page layout";

		$product = $this->product_model->find($id);
		if(isset($product->id)){

			if($report==true){

				$query = $this->peserta_model->source();
				$query->select('peserta.*, so.sales_order_no, ticket.ticket_name, checkin.created_at');
				$query->join('sales_order so','so.id=peserta.sales_order_id');
				$query->join('ticket','ticket.id=peserta.ticket_id');
				$query->join('checkin','checkin.id_peserta=peserta.id','left');
				$query->where('peserta.product_id',$product->id);
				$query->where('status_order',1);
				$query->order_by('created_at','DESC');
				$data["checkin"] = $query->get()->result();

				$this->load->view("contents/member/laporan-checkin-excel", $data);

			}else{
				$query = $this->peserta_model->source();
				$query->select('peserta.*, so.sales_order_no, ticket.ticket_name, checkin.created_at');
				$query->join('sales_order so','so.id=peserta.sales_order_id');
				$query->join('ticket','ticket.id=peserta.ticket_id');
				$query->join('checkin','checkin.id_peserta=peserta.id','left');
				$query->where('peserta.product_id',$product->id);
				$query->where('status_order',1);
				$query->where('checkin.created_at',null);
				$data["not_checkin"] = $query->get()->result();

				$query = $this->peserta_model->source();
				$query->select('peserta.*, so.sales_order_no, ticket.ticket_name, checkin.created_at');
				$query->join('sales_order so','so.id=peserta.sales_order_id');
				$query->join('ticket','ticket.id=peserta.ticket_id');
				$query->join('checkin','checkin.id_peserta=peserta.id');
				$query->where('peserta.product_id',$product->id);
				$query->where('status_order',1);
				$data["checkin"] = $query->get()->result();
				
				$data["data"] = $product;
				$c = $this->load->view("contents/member/checkin-pengunjung", $data, true);
				$js = $this->load->view("js/member/js_checkin_pengunjung", "", true);

				$this->load_layout_member($c,$js);

			}

		}else{
			redirect("404");
		}
	

	}

	public function laporan_checkin($id=""){

		$this->cek_user_session();

		$id = strip_tags($id);
		$id = encrypt_decrypt('decrypt',$id);
		
		$data = array();
		$data["title_page"] = "Laporan Check-In | " . "Event Stack";
		$data["title"] = "Data Pesertan";
		$data["title_small"] = "Participant data page layout";

		$product = $this->product_model->find($id);
		if(isset($product->id)){

			$query = $this->peserta_model->source();
            $query->join('sales_order so','so.id=peserta.sales_order_id');
            $query->where('product_id',$product->id);
            $query->where('so.status_order',1);
            $data['tiket_terjual'] = $query->count_all_results();
			
			$query = $this->checkin_model->source();
            $query->where('product_id',$product->id);
            $data['total_checkin'] = $query->count_all_results();
			
			$query = $this->ticket_model->source();
			$query->where('product_id',$product->id);
			$ticket = $query->get()->result();

			$datas = array();
			foreach ($ticket as $key => $value) {

				$query = $this->peserta_model->source();
	            $query->join('sales_order so','so.id=peserta.sales_order_id');
	            $query->where('ticket_id',$value->id);
	            $query->where('so.status_order',1);
	            $value->tiket_terjual = $query->count_all_results();

				$query = $this->checkin_model->source();
	            $query->where('ticket_id',$value->id);
	            $value->total_checkin = $query->count_all_results();

	            $datas[] = $value;
			}
			$data['datas'] = $datas; 

			$data["data"] = $product;
			$c = $this->load->view("contents/member/laporan-checkin", $data, true);

			$this->load_layout_member($c);

		}else{
			redirect("404");
		}
	
	}

	public function checkin($id=""){

		$this->cek_user_session();

		$id = strip_tags($id);
		$decrypt_id = encrypt_decrypt('decrypt',$id);

		$product = $this->product_model->find($decrypt_id);
		if(isset($product->id)){

			if(count($this->input_data['checkin'])>0){
				foreach ($this->input_data['checkin'] as $key => $value) {

					$peserta = $this->peserta_model->find($value);
					$checkin_data = array(
						'product_id'=>$peserta->product_id,
						'ticket_id'=>$peserta->ticket_id,
						'id_peserta'=>$value,
					);
					$this->checkin_model->insert($checkin_data);

				}

				$this->session->set_flashdata("success", "Check-in Success");
				redirect(base_url().'member/event/checkin-pengunjung/'.$id);

			}else{
				$this->session->set_flashdata("error", "Tidak ada peserta yang dipilih");
				redirect(base_url().'member/event/checkin-pengunjung/'.$id);
			}

		}else{
			redirect("404");
		}
	
	}

	public function scan($id=""){

		$this->cek_user_session();

		$id = strip_tags($id);
		$decrypt_id = encrypt_decrypt('decrypt',$id);

		$product = $this->product_model->find($decrypt_id);
		if(isset($product->id)){

			$peserta = $this->peserta_model->find($this->input_data['code'],'code');
			if(isset($peserta->id)){

				$checkin_data = array(
					'product_id'=>$peserta->product_id,
					'ticket_id'=>$peserta->ticket_id,
					'id_peserta'=>$peserta->id,
				);
				$this->checkin_model->insert($checkin_data);

				$this->session->set_flashdata("success", "Check-in Success");
				redirect(base_url().'member/event/checkin-pengunjung/'.$id);

			}else{
				$this->session->set_flashdata("error", "Data tidak ditemukan");
				redirect(base_url().'member/event/checkin-pengunjung/'.$id);
			}

		}else{
			redirect("404");
		}
	
	}


}

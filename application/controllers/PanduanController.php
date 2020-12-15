<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PanduanController extends MY_Controller {

	public function __construct(){
		parent::__construct();


	}

	public function registrasi()
	{
		$data["title_page"] = "Panduan - Registrasi";
		$c = $this->load->view("contents/panduan-registrasi", $data, true);
		$this->load_layout($c);
	}

	public function buat_event()
	{
		$data["title_page"] = "Panduan - Buat Event";
		$c = $this->load->view("contents/panduan-buat-event", $data, true);
		$this->load_layout($c);
	}

	public function pesan_tiket()
	{
		$data["title_page"] = "Panduan - Pesan Tiket";
		$c = $this->load->view("contents/panduan-pesan-tiket", $data, true);
		$this->load_layout($c);
	}

	public function formulir_data_tambahan()
	{
		$data["title_page"] = "Panduan - Formulir Data Tambahan";
		$c = $this->load->view("contents/panduan-formulir-data-tambahan", $data, true);
		$this->load_layout($c);
	}

	public function persingkat_link()
	{
		$data["title_page"] = "Panduan - Persingkat Link";
		$c = $this->load->view("contents/panduan-persingkat-link", $data, true);
		$this->load_layout($c);
	}

	public function multiple_form()
	{
		$data["title_page"] = "Panduan - Multiple Form";
		$c = $this->load->view("contents/panduan-multiple-form", $data, true);
		$this->load_layout($c);
	}

	public function data_peserta()
	{
		$data["title_page"] = "Panduan - Data Peserta";
		$c = $this->load->view("contents/panduan-data-peserta", $data, true);
		$this->load_layout($c);
	}

	public function esertifikat()
	{
		$data["title_page"] = "Panduan - E-Sertifikat";
		$c = $this->load->view("contents/panduan-e-sertifikat", $data, true);
		$this->load_layout($c);
	}


}

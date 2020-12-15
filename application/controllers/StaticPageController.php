<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaticPageController extends MY_Controller {

	public function __construct(){
		parent::__construct();
	
	}

	public function services()
	{
		$data = array();
		$data["title_page"] = "Ketentuan Layanan | Event Stack";
		$data['ismember'] = 'ada';
		$c = $this->load->view("contents/services", $data, true);
		$this->load_layout($c);
	}

	public function panduan() {
		$data = array();
		$data["title_page"] = "Panduan Belanja | Event Stack";
		$data['ismember'] = 'ada';
		$c = $this->load->view("contents/panduan", $data, true);
		$this->load_layout($c);
	}

	public function about() {
		$data = array();
		$data["title_page"] = "Tentang Kami | Event Stack";
		$data['ismember'] = 'ada';
		$c = $this->load->view("contents/about", $data, true);
		$this->load_layout($c);
	}

	public function contact() {
		$data = array();
		$data["title_page"] = "Hubungi Kami | Event Stack";
		$data['ismember'] = 'ada';
		$c = $this->load->view("contents/contact", $data, true);
		$this->load_layout($c);
	}

	public function faq() {
		$data = array();
		$data["title_page"] = "FAQ | Event Stack";
		$data['ismember'] = 'ada';
		$c = $this->load->view("contents/faq", $data, true);
		$this->load_layout($c);
	}

}

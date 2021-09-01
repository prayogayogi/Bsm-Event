<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['LayananModel', 'CilentModel', 'CompanyModel']);
	}

	// Untuk view Login
	public function index()
	{
		$data['title'] = "Home";
		$data['index'] = $this->LayananModel->index();
		$data['slug'] = ['slug' => 'video'];
		$data['getCilent'] = $this->CilentModel->index();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/home', $data);
		$this->load->view('front/includes/footer', $data);
	}

	// Untuk layanan
	public function layanan()
	{
		$data['title'] = "Layanan";
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/layanan');
		$this->load->view('front/includes/footer', $data);
	}
}

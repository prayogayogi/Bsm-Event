<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['LayananModel']);
	}

	// Untuk view Login
	public function index()
	{
		$data['title'] = "BSM Compro 2020";
		$data['index'] = $this->LayananModel->index();
		// $data['layanan'] = $this->LayananModel->getLayanan();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/home', $data);
		$this->load->view('front/includes/footer');
	}

	// Untuk layanan
	public function layanan()
	{
		$data['title'] = "BSM Compro 2020 | Layanan";
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/layanan');
		$this->load->view('front/includes/footer');
	}
}

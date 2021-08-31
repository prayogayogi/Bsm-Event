<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['CilentModel', 'CompanyModel']);
	}

	// Untuk layanan
	public function index()
	{
		$data['title'] = "Faq";
		$data['getCilent'] = $this->CilentModel->index();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/faq');
		$this->load->view('front/includes/footer', $data);
	}
}

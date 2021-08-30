<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['CilentModel', 'CompanyModel']);
	}

	// Untuk layanan
	public function index()
	{
		$data['title'] = "BSM Compro 2020 | Contact";
		$data['getCilent'] = $this->CilentModel->index();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/contact');
		$this->load->view('front/includes/footer', $data);
	}
}

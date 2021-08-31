<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['GaleryModel', 'CompanyModel', 'CilentModel']);
	}

	// Untuk layanan
	public function index()
	{
		$data['title'] = "Galery";
		$data['index'] = $this->GaleryModel->index()->result_array();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$data['getCilent'] = $this->CilentModel->index();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/galery', $data);
		$this->load->view('front/includes/footer', $data);
	}
}

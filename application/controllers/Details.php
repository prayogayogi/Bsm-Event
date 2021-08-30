<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Details extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['LayananModel']);
	}

	// Untuk layanan
	public function index($slug)
	{
		$data['title'] = "BSM Compro 2020 | Galery";
		$data['getDetail'] = $this->LayananModel->getDetail($slug)->row_array();
		$data['getJoin'] = $this->LayananModel->getJoin($slug)->result_array();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/details/product', $data);
		$this->load->view('front/includes/footer');
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['GaleryModel']);
	}

	// Untuk layanan
	public function index()
	{
		$data['title'] = "BSM Compro 2020 | Galery";
		$data['index'] = $this->GaleryModel->index();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/galery', $data);
		$this->load->view('front/includes/footer');
	}
}

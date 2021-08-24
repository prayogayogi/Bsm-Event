<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['LayananModel']);
	}

	// Untuk get view layana
	public function index()
	{
		$data['title'] = "Layanan";
		$data['index'] = $this->LayananModel->index();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/mainMenu/layanan', $data);
		$this->load->view('back/includes/footer');
	}

	// Untuk store data layanan
	public function store()
	{
		//
	}
}

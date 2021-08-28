<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// Untuk layanan
	public function index()
	{
		$data['title'] = "BSM Compro 2020 | Layanan";
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/layanan');
		$this->load->view('front/includes/footer');
	}
}

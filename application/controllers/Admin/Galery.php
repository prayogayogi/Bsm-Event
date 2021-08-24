<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// Untuk view galery
	public function index()
	{
		$data['title'] = "Galery";
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/app/galery');
		$this->load->view('back/includes/footer');
	}
}

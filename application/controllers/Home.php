<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/dashboard/index');
		$this->load->view('back/includes/footer');
	}
}

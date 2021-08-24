<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// Untuk veiw dashboard
	public function index()
	{
		$data['title'] = "Dashboard";
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/mainMenu/index');
		$this->load->view('back/includes/footer');
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['UserAppModel']);
		if (!$this->session->userdata('email')) {
			redirect('Login');
		};
	}

	// Untuk veiw dashboard
	public function index()
	{
		$data['title'] = "Dashboard";
		$data['userLogin'] = $this->UserAppModel->userLogin();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar', $data);
		$this->load->view('back/pages/mainMenu/index', $data);
		$this->load->view('back/includes/footer');
	}
}

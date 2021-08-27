<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email')) {
			redirect('Login');
		};
	}

	// Untuk view Logout
	public function index()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['GaleryModel']);
	}

	// Untuk view galery
	public function index()
	{
		$data['title'] = "Galery";
		$data['index'] = $this->GaleryModel->index();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/app/galery');
		$this->load->view('back/includes/footer');
	}

	// Untuk store data galelry
	public function store()
	{
		$this->GaleryModel->store();
		$this->session->set_flashdata('status', '');
		redirect('Admin/Galery');
	}
}

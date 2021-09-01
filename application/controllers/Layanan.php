<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['LayananModel', 'CilentModel', 'GaleryModel', 'CompanyModel']);
	}

	// Untuk layanan
	public function index()
	{
		$data['title'] = "Layanan";
		$data['index'] = $this->LayananModel->index();
		$data['getCilent'] = $this->CilentModel->index();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/layanan');
		$this->load->view('front/includes/footer', $data);
	}

	// Untuk videotron
	public function master($slug)
	{
		$data['title'] = "Layanan Videotron";
		$data['index'] = $this->LayananModel->index();
		$data['slug'] = $this->LayananModel->getDetail($slug)->row_array();
		$data['nama'] = $this->LayananModel->getVideotron($slug)->row_array();
		$data['getVideotron'] = $this->LayananModel->getVideotron($slug)->result_array();
		$data['getCilent'] = $this->CilentModel->index();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/videotron', $data);
		$this->load->view('front/includes/footer', $data);
	}
}

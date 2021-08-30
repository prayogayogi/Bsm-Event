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
		$data['title'] = "BSM Compro 2020 | Layanan";
		$data['index'] = $this->LayananModel->index();
		$data['getCilent'] = $this->CilentModel->index();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/layanan');
		$this->load->view('front/includes/footer', $data);
	}

	// Untuk videotron
	public function videotron()
	{
		$data['title'] = "BSM Compro 2020 | Layanan Videotron";
		$data['getVideotron'] = $this->LayananModel->getVideotron()->result_array();
		$data['getCilent'] = $this->CilentModel->index();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/videotron', $data);
		$this->load->view('front/includes/footer', $data);
	}

	// Untuk videotron
	public function ledTvTouchscreen()
	{
		$data['title'] = "BSM Compro 2020 | Layanan Led Tv Touchscreen";
		$data['getLedTouc'] = $this->LayananModel->getLedTouc()->result_array();
		$data['getCilent'] = $this->CilentModel->index();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/ledTvTouchscreen', $data);
		$this->load->view('front/includes/footer', $data);
	}

	// Untuk videotron
	public function ledDisplay()
	{
		$data['title'] = "BSM Compro 2020 | Layanan Led Display";
		$data['getLedDisplay'] = $this->LayananModel->getLedDisplay()->result_array();
		$data['getCilent'] = $this->CilentModel->index();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/ledDisplay', $data);
		$this->load->view('front/includes/footer', $data);
	}

	// Untuk videotron
	public function projektor()
	{
		$data['title'] = "BSM Compro 2020 | Layanan Led Display";
		$data['projektor'] = $this->LayananModel->projektor()->result_array();
		$data['getCilent'] = $this->CilentModel->index();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/projektor', $data);
		$this->load->view('front/includes/footer', $data);
	}
}

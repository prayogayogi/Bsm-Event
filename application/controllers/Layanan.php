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

	// Untuk videotron
	public function videotron()
	{
		$data['title'] = "BSM Compro 2020 | Layanan Videotron";
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/videotron');
		$this->load->view('front/includes/footer');
	}

	// Untuk videotron
	public function ledTvTouchscreen()
	{
		$data['title'] = "BSM Compro 2020 | Layanan Led Tv Touchscreen";
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/ledTvTouchscreen');
		$this->load->view('front/includes/footer');
	}

	// Untuk videotron
	public function ledDisplay()
	{
		$data['title'] = "BSM Compro 2020 | Layanan Led Display";
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/ledDisplay');
		$this->load->view('front/includes/footer');
	}

	// Untuk videotron
	public function projektor()
	{
		$data['title'] = "BSM Compro 2020 | Layanan Led Display";
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/projektor');
		$this->load->view('front/includes/footer');
	}
}

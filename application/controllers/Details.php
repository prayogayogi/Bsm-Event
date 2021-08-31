<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Details extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['LayananModel', 'GaleryModel', 'CilentModel', 'CompanyModel']);
	}

	// Untuk layanan
	public function index($slug)
	{
		$data['title'] = "Detail Product";
		$data['getDetail'] = $this->LayananModel->getDetail($slug)->row_array();
		$data['getJoin'] = $this->LayananModel->getJoin($slug)->result_array();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$data['getCilent'] = $this->CilentModel->index();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/details/product', $data);
		$this->load->view('front/includes/footer', $data);
	}

	// Untuk layanan
	public function detailGalery($slug, $foto)
	{
		$data['title'] = "Detail Product";
		$data['getDetail'] = $this->GaleryModel->getDetail($foto)->row_array();
		$data['getJoin'] = $this->LayananModel->getJoin($slug)->result_array();
		$data['getkontak'] = $this->CompanyModel->getKontak()->row_array();
		$data['getCilent'] = $this->CilentModel->index();
		$this->load->view('front/includes/header', $data);
		$this->load->view('front/pages/details/detailGalery', $data);
		$this->load->view('front/includes/footer', $data);
	}
}

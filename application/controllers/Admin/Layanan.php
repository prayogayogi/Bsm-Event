<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['LayananModel']);
		$this->load->library('form_validation');
	}

	// Untuk get view layana
	public function index()
	{
		$data['title'] = "Layanan";
		$data['index'] = $this->LayananModel->index();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/mainMenu/layanan/index', $data);
		$this->load->view('back/includes/footer');
	}

	// Untuk store data layanan
	public function store()
	{
		$this->form_validation->set_rules('jenis', 'Jenis Layanan', 'trim|required', ['required' => 'Jenis layanan harus di isi']);
		$this->form_validation->set_rules('foto', 'Foto Layanan', 'trim|required', ['required' => 'Foto harus di isi']);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Layanan', 'trim|required', ['required' => 'Deskripsi harus di isi']);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Layanan";
			$data['index'] = $this->LayananModel->index();
			$this->load->view('back/includes/sidebar', $data);
			$this->load->view('back/includes/navbar');
			$this->load->view('back/pages/mainMenu/layanan/index', $data);
			$this->load->view('back/includes/footer');
		} else {
			$this->LayananModel->store();
			$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Guru</strong> Berhasil Di Tambah.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
			redirect('Admin/Layanan');
		}
	}

	// Untuk edit data layanan
	public function edit($slug)
	{
		$data['title'] = "Update Layanan";
		$data['index'] = $this->LayananModel->edit($slug);
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/mainMenu/layanan/edit', $data);
		$this->load->view('back/includes/footer');
	}

	// Update data layanan
	public function update($slug)
	{
		$this->LayananModel->update($slug);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Layanan</strong> Berhasil Di Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/Layanan');
	}

	// Destroy data layanan
	public function destroy($slug)
	{
		$this->LayananModel->destroy($slug);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Layanan</strong> Berhasil Di Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/Layanan');
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['LayananModel', 'GaleryModel']);
		$this->load->library('form_validation');
	}

	// Untuk view galery
	public function index()
	{
		$data['title'] = "Galery";
		$data['index'] = $this->GaleryModel->index();
		$data['service'] = $this->LayananModel->index();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/app/galery/index', $data);
		$this->load->view('back/includes/footer');
	}

	// Untuk store data galelry
	public function store()
	{
		$this->form_validation->set_rules('jenis', 'Jenis Layanan', 'required', ['required' => 'Jenis layanan harus di isi']);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Galery";
			$data['index'] = $this->GaleryModel->index();
			$data['service'] = $this->LayananModel->index();
			$this->load->view('back/includes/sidebar', $data);
			$this->load->view('back/includes/navbar');
			$this->load->view('back/pages/app/galery/index', $data);
			$this->load->view('back/includes/footer');
		} else {
			$this->GaleryModel->store();
			$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Galery</strong> Berhasil Di Tambah.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
			redirect('Admin/Galery');
		}
	}

	// Untuk edit data Galery
	public function edit($id)
	{
		$data['title'] = "Update Galery";
		$data['index'] = $this->GaleryModel->edit($id);
		$data['service'] = $this->LayananModel->index();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/app/galery/edit', $data);
		$this->load->view('back/includes/footer');
	}

	// Update data galery
	public function update($id)
	{
		$this->form_validation->set_rules('jenis', 'Jenis Layanan', 'trim');
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Update Galery";
			$data['index'] = $this->GaleryModel->edit($id);
			$data['service'] = $this->LayananModel->index();
			$this->load->view('back/includes/sidebar', $data);
			$this->load->view('back/includes/navbar');
			$this->load->view('back/pages/app/galery/edit', $data);
			$this->load->view('back/includes/footer');
		} else {
			$this->GaleryModel->update($id);
			$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Galery</strong> Berhasil Di Update.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
			redirect('Admin/Galery');
		}
	}

	// Destroy data Galery
	public function destroy($slug)
	{
		$this->GaleryModel->destroy($slug);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Galery</strong> Berhasil Di Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/Galery');
	}
}

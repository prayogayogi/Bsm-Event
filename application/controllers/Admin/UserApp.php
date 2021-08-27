<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserApp extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['UserAppModel']);
		$this->load->library('form_validation');
	}

	// Untuk get view userapp
	public function index()
	{
		$data['title'] = "User App";
		$data['index'] = $this->UserAppModel->index();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/authentication/admin/index', $data);
		$this->load->view('back/includes/footer');
	}

	// Untuk store data userapp
	public function store()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required', ['required' => 'Nama harus di isi']);
		$this->form_validation->set_rules('email', 'email', 'required|valid_email', ['required' => 'Email harus di isi', 'valid_email' => 'Email harus valid']);
		$this->form_validation->set_rules('alamat', 'alamat', 'required', ['required' => 'Alamat harus di isi']);
		$this->form_validation->set_rules('no_hp', 'no_hp', 'required|numeric|max_length[12]', ['required' => 'No Hp harus di isi', 'numeric' => 'Harus angka', 'max_length' => 'Minimal panjang 12']);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "User App";
			$data['index'] = $this->UserAppModel->index();
			$this->load->view('back/includes/sidebar', $data);
			$this->load->view('back/includes/navbar');
			$this->load->view('back/pages/authentication/admin/index', $data);
			$this->load->view('back/includes/footer');
		} else {
			$this->UserAppModel->store();
			$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data User App</strong> Berhasil Di Tambah.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
			redirect('Admin/UserApp');
		}
	}

	// Untuk edit data userapp
	public function edit($slug)
	{
		$data['title'] = "Update UserApp";
		$data['index'] = $this->UserAppModel->edit($slug);
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/authentication/admin/edit', $data);
		$this->load->view('back/includes/footer');
	}

	// Update data userApp
	public function update($slug)
	{
		$this->form_validation->set_rules('nama', 'nama', 'required', ['required' => 'Nama harus di isi']);
		$this->form_validation->set_rules('email', 'email', 'required|valid_email', ['required' => 'Email harus di isi', 'valid_email' => 'Email harus valid']);
		$this->form_validation->set_rules('alamat', 'alamat', 'required', ['required' => 'Alamat harus di isi']);
		$this->form_validation->set_rules('no_hp', 'no_hp', 'required|numeric|max_length[12]', ['required' => 'No Hp harus di isi', 'numeric' => 'Harus angka', 'max_length' => 'Minimal panjang 12']);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Update User App";
			$data['index'] = $this->UserAppModel->edit($slug);
			$this->load->view('back/includes/sidebar', $data);
			$this->load->view('back/includes/navbar');
			$this->load->view('back/pages/authentication/admin/edit', $data);
			$this->load->view('back/includes/footer');
		} else {
			$this->UserAppModel->update($slug);
			$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data User App</strong> Berhasil Di Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
			redirect('Admin/UserApp');
		}
	}

	// Show Detail User App
	public function show($slug)
	{
		$data['title'] = "Detail User App";
		$data['index'] = $this->UserAppModel->show($slug);
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/authentication/admin/detail', $data);
		$this->load->view('back/includes/footer');
	}

	// Destroy data authentication
	public function destroy($slug)
	{
		$this->UserAppModel->destroy($slug);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data User App</strong> Berhasil Di Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/UserApp');
	}
}

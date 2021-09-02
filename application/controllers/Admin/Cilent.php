<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cilent extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['LayananModel', 'CilentModel', 'UserAppModel']);
		$this->load->library('form_validation');
		if (!$this->session->userdata('email')) {
			redirect('Login');
		};
	}

	// Untuk view cilent
	public function index()
	{
		$data['title'] = "Cilent";
		$data['userLogin'] = $this->UserAppModel->userLogin();
		$data['index'] = $this->CilentModel->index();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar', $data);
		$this->load->view('back/pages/app/cilent/index', $data);
		$this->load->view('back/includes/footer');
	}

	// Untuk store data cilent
	public function store()
	{
		$this->form_validation->set_rules('namaCilent', 'Nama Cilent', 'required', ['required' => 'Nama Cilent harus di isi']);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Cilent";
			$data['index'] = $this->CilentModel->index();
			$data['userLogin'] = $this->UserAppModel->userLogin();
			$data['service'] = $this->LayananModel->index();
			$this->load->view('back/includes/sidebar', $data);
			$this->load->view('back/includes/navbar', $data);
			$this->load->view('back/pages/app/cilent/index', $data);
			$this->load->view('back/includes/footer');
		} else {
			$this->CilentModel->store();
			$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Cilent</strong> Berhasil Di Tambah.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
			redirect('Admin/Cilent');
		}
	}

	// Untuk edit data Cilent
	public function edit($id)
	{
		$data['title'] = "Update Cilent";
		$data['userLogin'] = $this->UserAppModel->userLogin();
		$data['index'] = $this->CilentModel->edit($id);
		$data['service'] = $this->LayananModel->index();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar', $data);
		$this->load->view('back/pages/app/cilent/edit', $data);
		$this->load->view('back/includes/footer');
	}

	// Update data cilent
	public function update($id)
	{
		$this->form_validation->set_rules('namaCilent', 'Nama Cilent', 'trim|required', ['required' => 'Nama Cilent harus di isi']);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Update Cilent";
			$data['userLogin'] = $this->UserAppModel->userLogin();
			$data['index'] = $this->CilentModel->edit($id);
			$data['service'] = $this->LayananModel->index();
			$this->load->view('back/includes/sidebar', $data);
			$this->load->view('back/includes/navbar', $data);
			$this->load->view('back/pages/app/cilent/edit', $data);
			$this->load->view('back/includes/footer');
		} else {
			$this->CilentModel->update($id);
			$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Cilent</strong> Berhasil Di Update.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
			redirect('Admin/Cilent/index');
		}
	}

	// Destroy data Cilent
	public function destroy($slug)
	{
		$this->CilentModel->destroy($slug);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Cilent</strong> Berhasil Di Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/Cilent');
	}
}

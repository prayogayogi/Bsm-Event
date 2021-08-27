<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['CompanyModel', 'UserAppModel']);
		$this->load->library('form_validation');
		if (!$this->session->userdata('email')) {
			redirect('Login');
		};
	}

	// Untuk get view company profile
	public function company()
	{
		$data['title'] = "Company Profile";
		$data['getCompany'] = $this->CompanyModel->getCompany();
		$data['userLogin'] = $this->UserAppModel->userLogin();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar', $data);
		$this->load->view('back/pages/company/companyProfile/index', $data);
		$this->load->view('back/includes/footer');
	}

	// Untuk get view kontak
	public function kontak()
	{
		$data['title'] = "Kontak";
		$data['getKontak'] = $this->CompanyModel->getKontak();
		$data['userLogin'] = $this->UserAppModel->userLogin();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar', $data);
		$this->load->view('back/pages/company/kontak/index', $data);
		$this->load->view('back/includes/footer');
	}

	// Untuk store data company
	public function storeP()
	{
		$this->form_validation->set_rules('jenis', 'Jenis Company', 'required', ['required' => 'Jenis company harus di isi']);
		// $this->form_validation->set_rules('foto', 'Foto Company', 'required', ['required' => 'Foto harus di isi']);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Company', 'required', ['required' => 'Deskripsi harus di isi']);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Company";
			$data['index'] = $this->CompanyModel->index();
			$data['userLogin'] = $this->UserAppModel->userLogin();
			$this->load->view('back/includes/sidebar', $data);
			$this->load->view('back/includes/navbar', $data);
			$this->load->view('back/pages/mainMenu/company/index', $data);
			$this->load->view('back/includes/footer');
		} else {
			$this->CompanyModel->store();
			$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Company</strong> Berhasil Di Tambah.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
			redirect('Admin/Company');
		}
	}

	// Untuk store data company
	public function storeK()
	{
		$this->form_validation->set_rules('alamat', 'Alamat Company', 'required', ['required' => 'Alamat company harus di isi']);
		$this->form_validation->set_rules('no_hp', 'No hp Company', 'required', ['required' => 'No hp harus di isi']);
		$this->form_validation->set_rules('email', 'Email Company', 'required', ['required' => 'Email harus di isi']);
		$this->form_validation->set_rules('instagram', 'Instagram Company', 'required', ['required' => 'Instagram harus di isi']);
		$this->form_validation->set_rules('facebook', 'Facebook Company', 'required', ['required' => 'Facebook harus di isi']);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Kontak";
			$data['getKontak'] = $this->CompanyModel->getKontak();
			$data['userLogin'] = $this->UserAppModel->userLogin();
			$this->load->view('back/includes/sidebar', $data);
			$this->load->view('back/includes/navbar', $data);
			$this->load->view('back/pages/company/kontak/index', $data);
			$this->load->view('back/includes/footer');
		} else {
			$this->CompanyModel->storeK();
			$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Kontak</strong> Berhasil Di Tambah.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
			redirect('Admin/Profile/kontak');
		}
	}

	// Untuk editKontak data company
	public function editKontak($id)
	{
		$data['title'] = "Update Kontak";
		$data['index'] = $this->CompanyModel->editKontak($id);
		$data['userLogin'] = $this->UserAppModel->userLogin();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar', $data);
		$this->load->view('back/pages/company/kontak/edit', $data);
		$this->load->view('back/includes/footer');
	}

	// Update data company
	public function updateKontak($id)
	{
		$this->CompanyModel->updateKontak($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Kontak</strong> Berhasil Di Update.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/Profile/kontak');
	}

	// Destroy data tb_kontak
	public function destroyKontak($id)
	{
		$this->CompanyModel->destroyKontak($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data KOntak</strong> Berhasil Di Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/Profile/kontak');
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['LayananModel', 'CilentModel']);
		$this->load->library('form_validation');
		if ($this->session->userdata('email')) {
			redirect('Admin/Dashboard');
		};
	}

	// Untuk view Login
	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('back/pages/authentication/login/index', $data);
	}

	// action login
	public function action()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Email Harus Diisi', 'valid_email' => 'Email Harus Valid']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[5]', ['required' => 'Password Harus Diisi', 'max_length' => 'Maksimal panjang password 5']);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Login";
			$this->load->view('back/pages/authentication/login/index', $data);
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$data = $this->db->get_where('tb_userapp', ['email' => $email])->row_array();
			if ($data) {
				if (password_verify($password, $data['password'])) {
					$session = [
						'email' => $data['email'],
					];
					$this->session->set_userdata($session);
					$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Selamat </strong> Kamu berhasil login.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
					redirect('Admin/Dashboard');
				} else {
					$this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Password Kamu</strong> Salah..!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
					redirect('Login');
				}
			} else {
				$this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong> Email Kamu </strong>Salah..!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
				redirect('Login');
			}
		}
	}
}

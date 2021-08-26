<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['LayananModel', 'TestimonialModel']);
		$this->load->library('form_validation');
	}

	// Untuk view testimonial
	public function index()
	{
		$data['title'] = "Testimonial";
		$data['index'] = $this->TestimonialModel->index();
		$data['service'] = $this->LayananModel->index();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/app/testimonial/index', $data);
		$this->load->view('back/includes/footer');
	}

	// Untuk store data galelry
	public function store()
	{
		$this->form_validation->set_rules('jenis', 'Jenis Layanan', 'required', ['required' => 'Jenis layanan harus di isi']);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Testimonial";
			$data['index'] = $this->TestimonialModel->index();
			$data['service'] = $this->LayananModel->index();
			$this->load->view('back/includes/sidebar', $data);
			$this->load->view('back/includes/navbar');
			$this->load->view('back/pages/app/testimonial/index', $data);
			$this->load->view('back/includes/footer');
		} else {
			$this->TestimonialModel->store();
			$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Testimonial</strong> Berhasil Di Tambah.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
			redirect('Admin/Testimonial');
		}
	}

	// Untuk edit data Testimonial
	public function edit($id)
	{
		$data['title'] = "Update Testimonial";
		$data['index'] = $this->TestimonialModel->edit($id);
		$data['service'] = $this->LayananModel->index();
		$this->load->view('back/includes/sidebar', $data);
		$this->load->view('back/includes/navbar');
		$this->load->view('back/pages/app/testimonial/edit', $data);
		$this->load->view('back/includes/footer');
	}

	// Update data testimonial
	public function update($id)
	{
		$this->form_validation->set_rules('jenis', 'Jenis Layanan', 'trim');
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Update Testimonial";
			$data['index'] = $this->TestimonialModel->edit($id);
			$data['service'] = $this->LayananModel->index();
			$this->load->view('back/includes/sidebar', $data);
			$this->load->view('back/includes/navbar');
			$this->load->view('back/pages/app/testimonial/edit', $data);
			$this->load->view('back/includes/footer');
		} else {
			$this->TestimonialModel->update($id);
			$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Testimonial</strong> Berhasil Di Update.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
			redirect('Admin/Testimonial');
		}
	}

	// Destroy data Testimonial
	public function destroy($slug)
	{
		$this->TestimonialModel->destroy($slug);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Testimonial</strong> Berhasil Di Delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/Testimonial');
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CompanyModel extends CI_Model
{

	// Get data tb_company
	public function getCompany()
	{
		return $this->db->get('tb_company')->result_array();
	}

	// Get data tb_company
	public function getKontak()
	{
		return $this->db->get('tb_kontak')->result_array();
	}

	// Store data tb_layana
	public function store()
	{
		$file = $_FILES['foto'];
		if ($file) {
			$config['allowed_types']  = 'gif|jpg|png';
			$config['max_size']       = '2048';
			$config['upload_path']    = './public/image/company/';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$files = $this->upload->data('file_name', TRUE);
			} else {
				echo "error";
			}
		}

		// Untuk membuat slug
		$title = trim(strtolower($this->input->post('jenis')));
		$out = explode(" ", $title);
		$slug = implode("-", $out);
		$data = [
			'jenis' => $this->input->post('jenis'),
			'foto' => $files,
			'deskripsi' => $this->input->post('deskripsi'),
			'slug' => $slug,
		];
		$this->db->set($data);
		$this->db->insert('tb_company');
	}

	// Store data tb_kontak
	public function storeK()
	{
		$data = [
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email'),
			'instagram' => $this->input->post('instagram'),
			'facebook' => $this->input->post('facebook'),
		];
		$this->db->set($data);
		$this->db->insert('tb_kontak');
	}

	// Edit tb_kontak
	public function editKontak($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tb_kontak')->row_array();
	}

	// Update tb_kontak
	public function updateKontak($id)
	{
		$data = [
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email'),
			'instagram' => $this->input->post('instagram'),
			'facebook' => $this->input->post('facebook'),
		];
		$this->db->where('id', $id);
		$this->db->set($data);
		$this->db->update('tb_kontak');
	}

	// Untuk destroy tb_kontak
	public function destroyKontak($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_kontak');
	}
}

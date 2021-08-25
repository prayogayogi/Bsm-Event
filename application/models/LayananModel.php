<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LayananModel extends CI_Model
{

	// Get data tb_layanan
	public function index()
	{
		return $this->db->get('tb_layanan')->result_array();
	}

	// Store data tb_layana
	public function store()
	{
		$file = $_FILES['foto'];
		if ($file) {
			$config['allowed_types']  = 'gif|jpg|png';
			$config['max_size']       = '2048';
			$config['upload_path']    = './public/image/layanan/';
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
		$this->db->insert('tb_layanan');
	}

	// Edit layanan
	public function edit($slug)
	{
		$this->db->where('slug', $slug);
		return $this->db->get('tb_layanan')->row_array();
	}

	// Update layanan
	public function update($slugid)
	{
		$file = $_FILES['foto'];
		if ($file) {
			$config['allowed_types']  = 'gif|jpg|png';
			$config['max_size']       = '2048';
			$config['upload_path']    = './public/image/layanan/';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$files = $this->upload->data('file_name', TRUE);

				$this->db->set(['foto' => $files]);
				$this->db->select('foto');
				$foto = $this->db->get_where('tb_layanan', ['slug' => $slugid])->row_array();
				unlink(FCPATH . './public/image/layanan/' . $foto['foto']);
			} else {
				echo "error";
			}
		}

		// Untuk bikin slug
		$title = trim(strtolower($this->input->post('jenis')));
		$out = explode(" ", $title);
		$slug = implode("-", $out);

		$data = [
			'jenis' => $this->input->post('jenis'),
			'deskripsi' => $this->input->post('deskripsi'),
			'slug' => $slug
		];

		$this->db->set($data);
		$this->db->where('slug', $slugid);
		$this->db->update('tb_layanan');
	}

	// Untuk destroy data layanan
	public function destroy($slug)
	{
		$foto = $this->db->get_where('tb_layanan', ['slug' => $slug])->row_array();
		unlink(FCPATH . './public/image/layanan/' . $foto['foto']);
		$this->db->where('slug', $slug);
		$this->db->delete('tb_layanan');
	}
}

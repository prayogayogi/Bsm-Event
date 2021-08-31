<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserAppModel extends CI_Model
{
	// Get User app
	public function userLogin()
	{
		return $this->db->get_where('tb_userapp', ['email' => $this->session->userdata('email')])->row_array();
	}

	// Get data tb_userapp
	public function index()
	{
		return $this->db->get('tb_userapp');
	}

	// Store data tb_userApp
	public function store()
	{
		$file = $_FILES['foto'];
		if ($file) {
			$config['allowed_types']  = 'gif|jpg|png';
			$config['max_size']       = '2048';
			$config['upload_path']    = './public/image/userApp/';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$files = $this->upload->data('file_name', TRUE);
			} else {
				echo "error";
			}
		}

		// Untuk membuat slug
		$title = trim(strtolower($this->input->post('nama', TRUE)));
		$out = explode(" ", $title);
		$slug = implode("-", $out);

		$data = [
			'nama' => $this->input->post('nama', TRUE),
			'email' => $this->input->post('email', TRUE),
			'alamat' => $this->input->post('alamat', TRUE),
			'no_hp' => $this->input->post('no_hp', TRUE),
			'foto' => $files,
			'roles' => 1,
			'password' => password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT),
			'slug' => $slug,
			'created_at' => date('Y-m-d')
		];
		$this->db->set($data);
		$this->db->insert('tb_userapp');
	}

	// Edit data userapp
	public function edit($slug)
	{
		$this->db->where('slug', $slug);
		return $this->db->get('tb_userapp')->row_array();
	}

	// Update userApp
	public function update($slugid)
	{
		$file = $_FILES['foto'];
		if ($file) {
			$config['allowed_types']  = 'gif|jpg|png';
			$config['max_size']       = '2048';
			$config['upload_path']    = './public/image/userApp/';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$files = $this->upload->data('file_name', TRUE);

				$this->db->set(['foto' => $files]);
				$this->db->select('foto');

				// Untuk menghapus foto di storage
				$foto = $this->db->get_where('tb_userapp', ['slug' => $slugid])->row_array();
				unlink(FCPATH . './public/image/userApp/' . $foto['foto']);
			} else {
				echo "error";
			}
		}

		// Untuk bikin slug
		$title = trim(strtolower($this->input->post('nama', TRUE)));
		$out = explode(" ", $title);
		$slug = implode("-", $out);

		$data = [
			'nama' => $this->input->post('nama', TRUE),
			'email' => $this->input->post('email', TRUE),
			'alamat' => $this->input->post('alamat', TRUE),
			'no_hp' => $this->input->post('no_hp', TRUE),
			'slug' => $slug,
			'created_at' => date('Y-m-d')
		];

		$this->db->set($data);
		$this->db->where('slug', $slugid);
		$this->db->update('tb_userapp');
	}

	// Show data userapp
	public function show($slug)
	{
		$this->db->where('slug', $slug);
		return $this->db->get('tb_userapp')->row_array();
	}

	// Untuk destroy data userApp
	public function destroy($slug)
	{
		$foto = $this->db->get_where('tb_userapp', ['slug' => $slug])->row_array();
		unlink(FCPATH . './public/image/userApp/' . $foto['foto']);
		$this->db->where('slug', $slug);
		$this->db->delete('tb_userapp');
	}

	// Untuk Ubah Password
	function ubahPassword($id, $passwordBaru)
	{
		$data = ['password' => password_hash(($passwordBaru), PASSWORD_DEFAULT)];
		$this->db->set($data);
		$this->db->where(['id' => $id]);
		$this->db->update('tb_userapp');
	}
}

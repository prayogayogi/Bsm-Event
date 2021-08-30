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
			'price' => $this->input->post('price'),
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
			'price' => $this->input->post('price'),
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


	// Get Detail layanan
	public function getDetail($slug)
	{
		$this->db->where('slug', $slug);
		return $this->db->get('tb_layanan');
	}

	//get data join
	public function getJoin($slug)
	{
		$this->db->select('*');
		$this->db->from('tb_layanan');
		$this->db->join('tb_galery', 'tb_galery.slug = tb_layanan.slug');
		$this->db->where('tb_layanan.slug', $slug);
		return $this->db->get();
	}

	//get data Videotron
	public function getVideotron()
	{
		$this->db->where('slug', 'videotron-indoor-atau-outdoor');
		return $this->db->get('tb_galery');
	}

	// get data getLedTouc
	public function getLedTouc()
	{
		$this->db->where('slug', 'led-tv-touchscreen');
		return $this->db->get('tb_galery');
	}

	// get data getLedTouc
	public function getLedDisplay()
	{
		$this->db->where('slug', 'led-display-stand-touchscreen');
		return $this->db->get('tb_galery');
	}

	// get data getLedTouc
	public function projektor()
	{
		$this->db->where('slug', 'projector');
		return $this->db->get('tb_galery');
	}
}

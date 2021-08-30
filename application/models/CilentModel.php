<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CilentModel extends CI_Model
{

	// Get data tb_cilent
	public function index()
	{
		return $this->db->get('tb_cilent')->result_array();
	}

	// Get data tb_cilent
	public function numCilent()
	{
		return $this->db->get('tb_cilent');
	}

	//Store date Cilent
	public function store()
	{
		$file = $_FILES['foto'];
		if ($file) {
			$config['allowed_types']  = 'jpg|png|';
			$config['max_size']       = '2048';
			$config['upload_path']    = './public/image/cilent/';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$files = $this->upload->data('file_name', TRUE);
			} else {
				$this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data Foto Cilent</strong> Gagal Di Upoload.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>');
				redirect('Admin/Cilent');
			}
		}

		$data = [
			'nama_cilent' => $this->input->post('namaCilent', TRUE),
			'foto' => $files,
		];
		$this->db->set($data);
		$this->db->insert('tb_cilent');
	}

	// Edit untuk data cilent
	public function edit($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tb_cilent')->row_array();
	}

	// Update data cilent
	public function update($id)
	{
		$file = $_FILES['foto'];
		if ($file) {
			$config['allowed_types']  = 'gif|jpg|png';
			$config['max_size']       = '2048';
			$config['upload_path']    = './public/image/cilent/';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$files = $this->upload->data('file_name', TRUE);

				$this->db->set(['foto' => $files]);
				$this->db->select('foto');
				$foto = $this->db->get_where('tb_cilent', ['id' => $id])->row_array();
				unlink(FCPATH . './public/image/cilent/' . $foto['foto']);
			} else {
				echo "error";
			}
		}

		$data = [
			'nama_cilent' => $this->input->post('namaCilent', TRUE),
		];

		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('tb_cilent');
	}

	// Destroy data cilent
	public function destroy($id)
	{
		$foto = $this->db->get_where('tb_cilent', ['id' => $id])->row_array();
		unlink(FCPATH . './public/image/cilent/' . $foto['foto']);
		$this->db->where('id', $id);
		$this->db->delete('tb_cilent');
	}
}

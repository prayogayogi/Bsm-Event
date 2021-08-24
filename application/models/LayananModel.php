<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LayananModel extends CI_Model
{

	// Get data tb_layanan
	public function index()
	{
		return $this->db->get('tb_layanan')->result_array();
	}
}

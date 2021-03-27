<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model {

	function get_product($id = null)
	{
		$this->db->select('*');
		$this->db->from('tb_product');
		$query = $this->db->get();
		return $query;
	}

	function add_product()
	{
		$data = [
			'product_name'	=> $this->input->post('nama_produk'),
			'product_size'	=> $this->input->post('pilih_ukuran'),
			'prodict_prize'	=> $this->input->post('')
		];
	}
	

}

/* End of file M_product.php */
/* Location: ./application/models/M_product.php */
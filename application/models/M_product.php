<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model {

	function get_product($id = null)
	{
		$this->db->select('*');
		$this->db->from('tb_product');
        if ($id != null) {
            $this->db->where('product_id', $id);
        }
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query;
	}

	function add_product()
	{
		$nama_gambar = $this->input->post('nama_produk');
		$nama_gambar = $nama_gambar . '-' . $this->input->post('harga_produk');
		$config['upload_path']          = './upload/product';
		// jika ffolder path belum di buat
		if(!is_dir($config['upload_path'])){
			
			mkdir($config['upload_path'], 0755, true);
		}
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']			= $nama_gambar;
		$config['overwrite']			= true;
		$config['max_size']             = 10000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar_produk'))
		{
			$data = [
					'product_name'			=> $this->input->post('nama_produk'),
					'product_size'			=> $this->input->post('ukuran_produk'),
					'product_price'			=> $this->input->post('harga_produk'),
					'product_deskripsi'		=> $this->input->post('deskripsi_produk')
				];
			$this->db->insert('tb_product', $data);
		}
		else
		{
		        $gambar = $this->upload->data();
		        $gambar = $gambar['file_name'];
		        $data = [
					'product_name'			=> $this->input->post('nama_produk'),
					'product_size'			=> $this->input->post('ukuran_produk'),
					'product_price'			=> $this->input->post('harga_produk'),
					'product_deskripsi'		=> $this->input->post('deskripsi_produk'),
					'product_img'			=> $gambar
				];
			$this->db->insert('tb_product', $data);
		}
	}

	function edit_product()
	{
		$nama_gambar = $this->input->post('nama_produk');
		$nama_gambar = $nama_gambar . '-' . $this->input->post('harga_produk');
		$config['upload_path']          = './upload/product';
		// jika ffolder path belum di buat
		if(!is_dir($config['upload_path'])){
			
			mkdir($config['upload_path'], 0755, true);
		}
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']			= $nama_gambar;
		$config['overwrite']			= true;
		$config['max_size']             = 10000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar_produk'))
		{
			$data = [
					'product_name'			=> $this->input->post('nama_produk'),
					'product_size'			=> $this->input->post('ukuran_produk'),
					'product_price'			=> $this->input->post('harga_produk'),
					'product_deskripsi'		=> $this->input->post('deskripsi_produk')
				];
			$id = $this->input->post('id', true);
			$this->db->where('product_id', $id);
			$this->db->update('tb_product', $data);
		}
		else
		{
		        $gambar = $this->upload->data();
		        $gambar = $gambar['file_name'];
		        $data = [
					'product_name'			=> $this->input->post('nama_produk'),
					'product_size'			=> $this->input->post('ukuran_produk'),
					'product_price'			=> $this->input->post('harga_produk'),
					'product_deskripsi'		=> $this->input->post('deskripsi_produk'),
					'product_img'			=> $gambar
				];
				$id = $this->input->post('id', true);
				$this->db->where('product_id', $id);
				$this->db->update('tb_product', $data);
		}
	}

	function delete_product()
    {
    	$data = [
    		"status"		=> "0"
    	];
    	$id = $this->input->post('id', true);
    	$this->db->where('product_id', $id);
    	$this->db->update('tb_product', $data);
    }

    function _uploadImage()
{
    $config['upload_path']          = './upload/product/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->product_id;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

	

}

/* End of file M_product.php */
/* Location: ./application/models/M_product.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_slider extends CI_Model {

	function get_slider($id = null)
	{
		$this->db->select('*');
		$this->db->from('tb_slider');
        if ($id != null) {
            $this->db->where('slider_id', $id);
        }
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query;
	}

	function add_slider(){
		$config['upload_path']          = './upload/slider';
		// jika ffolder path belum di buat
		if(!is_dir($config['upload_path'])){
			
			mkdir($config['upload_path'], 0755, true);
		}
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']			= true;
		$config['max_size']             = 10000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar_slider'))
		{
			$this->session->set_flashdata('pesan', 'Gagal');
			redirect('slider/add','refresh');
		}
		else
		{
		        $gambar = $this->upload->data();
		        $gambar = $gambar['file_name'];
		        $data['slider_img'] = $gambar;
				$this->db->insert('tb_slider', $data);
		}
	}

	function edit_slider()
	{
		$config['upload_path']          = './upload/slider';
		// jika ffolder path belum di buat
		if(!is_dir($config['upload_path'])){
			
			mkdir($config['upload_path'], 0755, true);
		}
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']			= true;
		$config['max_size']             = 10000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar_slider'))
		{
			$this->session->set_flashdata('pesan', 'Gagal Update Gambar');
			redirect('slider');
		}
		else
		{
		        $gambar = $this->upload->data();
		        $gambar = $gambar['file_name'];
		        $data['slider_img'] = $gambar;
				$id = $this->input->post('id', true);
				$this->db->where('slider_id', $id);
				$this->db->update('tb_slider', $data);
	  			$this->session->set_flashdata('pesan', 'Diubah');
		}
	}

	function delete_slider()
    {
    	$data = [
    		"status"		=> "0"
    	];
    	$id = $this->input->post('id', true);
    	$this->db->where('slider_id', $id);
    	$this->db->update('tb_slider', $data);
    }
}

/* End of file M_slider.php */
/* Location: ./application/models/M_slider.php */
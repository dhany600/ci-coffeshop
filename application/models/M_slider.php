<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_slider extends CI_Model {

	function get_slider($id = null)
	{
		$this->db->select('*');
		$this->db->from('tb_slider');
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
			// $this->session->set_flashdata('pesan', 'Gagal');
			// redirect('Slider/add','refresh');
		        $error = array('error' => $this->upload->display_errors());

		        // $this->load->view('Upload_form', $error);
		        var_dump($error);
		        exit;
		}
		else
		{
		        $gambar = $this->upload->data();
		        $gambar = $gambar['file_name'];
		        $data['slider_img'] = $gambar;
			$this->db->insert('tb_slider', $data);
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
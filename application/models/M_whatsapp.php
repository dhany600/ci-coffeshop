<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_whatsapp extends CI_Model {

	function get_whatsapp($id = null)
	{
		$this->db->select('*');
		$this->db->from('tb_whatsapp');
        if ($id != null) {
            $this->db->where('whatsapp_id', $id);
        }
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query;
	}

	public function cek_kembar($e){
		$this->db->select("*");
		$this->db->from("tb_whatsapp");
		$this->db->where("whatsapp_number", $e);
		$query = $this->db->get();
		return $query;
	}

	public function add_whatsapp()
	{
		$wa = '+62';
		if (substr($this->input->post('whatsapp'),0,1) == '0') {
			$wa 	= $wa ."". substr($this->input->post('whatsapp'), 1);
		}
		$link	= "https://wa.me/+62". substr($this->input->post('whatsapp'), 1) . "?text=Saya%20ingin%20membeli%20produk%20ini..";
		$data = [
			"whatsapp_number" 	=> $wa,
			"whatsapp_link"		=> $link
		];
		$this->db->insert('tb_whatsapp', $data);
	}

	public function edit_whatsapp()
	{
		$wa = $this->input->post('whatsapp');
		if (substr($this->input->post('whatsapp'),0,1) == '0') {
			$wa = '+62' . substr($this->input->post('whatsapp'), 1);
			// var_dump($wa);
			// exit;
			$link	= "https://wa.me/" . $wa . "?text=Saya%20ingin%20membeli%20produk%20ini..";
		}
		$link	= "https://wa.me/". $wa . "?text=Saya%20ingin%20membeli%20produk%20ini..";
		$data = [
			'whatsapp_number'	=> $wa,
			"whatsapp_link"		=> $link
		];
		$id = $this->input->post('id', true);
		$this->db->where('whatsapp_id', $id);
		$this->db->update('tb_whatsapp', $data);
	}


	function delete_whatsapp()
    {
    	$data = [
    		"status"		=> "0"
    	];
    	$id = $this->input->post('id', true);
    	$this->db->where('whatsapp_id', $id);
    	$this->db->update('tb_whatsapp', $data);
    }

}

/* End of file M_whatsapp.php */
/* Location: ./application/models/M_whatsapp.php */
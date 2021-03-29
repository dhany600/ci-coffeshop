<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	function get_user($id = null)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query;
	}

	public function cek_kembar($e){
		$this->db->select("*");
		$this->db->from("tb_user");
		$this->db->where("username", $e);
		$query = $this->db->get();
		return $query;
	}

	public function add_user_admin()
	{
		$data = [
    		"nama"				=> $this->input->post('nama_user'),
    		"username"	 		=> $this->input->post('username'),
    		"password"			=> MD5($this->input->post('password'))
		];
		$this->db->insert('tb_user', $data);
	}

	public function edit_user_admin()
	{
		if ( ! $this->input->post('password'))
		{
			$data = [
					'nama'			=> $this->input->post('nama_user'),
					'username'		=> $this->input->post('username')				];
			$id = $this->input->post('id', true);
			$this->db->where('user_id', $id);
			$this->db->update('tb_user', $data);
		}
		else
		{
		        
			$data = [
					'nama'			=> $this->input->post('nama_user'),
					'username'		=> $this->input->post('username'),
					'password'		=> MD5($this->input->post('password'))
				];
			$id = $this->input->post('id', true);
			$this->db->where('user_id', $id);
			$this->db->update('tb_user', $data);
		}
	}


	function delete_user_admin()
    {
    	$data = [
    		"status"		=> "0"
    	];
    	$id = $this->input->post('id', true);
    	$this->db->where('user_id', $id);
    	$this->db->update('tb_user', $data);
    }

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function login_user($post)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', MD5($post['password']));
        $this->db->where('status', 1);
        $result = $this->db->get();
        return $result;
    }

    public function get_user($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }   

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */
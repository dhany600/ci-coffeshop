<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        ceksdh_login_pegawai();
        $this->load->view('admin/login');
        
    }

    public function proses_login()
    {
        $post = $this->input->POST(NULL, TRUE);
        // var_dump($post);
        if (isset($post['login_user'])) {
            $query = $this->M_login->login_user($post);
            $status =  $query->row('status');
            // var_dump($query->row('status'));
            // exit;
            if ($query->num_rows() > 0 && $status == 1) {
                $row = $query->row();
                $param = array(
                    'user_id'   => $row->user_id,
                    'nama'      => $row->nama,
                    'username'  => $row->username,
                    'password'  => $row->password,
                    'status'    => $row->status
                );
                var_dump($param);
                $this->session->set_userdata($param);
                $this->session->set_flashdata('login', 'berhasil');
                redirect('dashboard');
            }else if($query->num_rows() > 0 && $status == 0){
                $this->session->set_flashdata('login', 'tidak aktif');
                redirect('dashboard');
            }else{
                $this->session->set_flashdata('login', 'gagal');
                redirect('auth');
            }
        }
    }

}

/* End of file Controllername.php */

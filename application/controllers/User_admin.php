<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index()
    {
    	$data['row'] = $this->M_user->get_user();
    	$this->load->view('admin/header');
        $this->load->view('user_admin/daftar_user_admin', $data);
        $this->load->view('admin/footer');
        
    }

   	public function add()
    {
		$this->load->view('admin/header');
      	$this->load->view('user_admin/add_user_admin');
      	$this->load->view('admin/footer');
   	}

    public function add_proses()
    {

    	$t_username = $this->input->post('username');
		$cek = $this->M_user->cek_kembar($t_username)->result_array();
		$count = count($cek);
		// echo $count;
		if ($count > 0) {
			$this->session->set_flashdata('pesan', 'Ganda');
			redirect('user_admin/add');
			
		}else{
			$this->M_user->add_user_admin();
			$this->session->set_flashdata('pesan', 'Ditambah');
			redirect('user_admin','refresh');
		}
    }

    public function edit($id)
    {
      	$data['row'] = $this->M_user->get_user($id)->row();
      	$this->load->view('admin/header');
      	$this->load->view('user_admin/edit_user_admin', $data);
      	$this->load->view('admin/footer');
    }

    public function edit_proses()
    {
    	$t_username = $this->input->post('username');
		$cek = $this->M_user->cek_kembar($t_username)->result_array();
		$count = count($cek);
		// echo $count;
		if ($count > 0) {
			$this->session->set_flashdata('pesan', 'Ganda');
			redirect('user_admin/edit/'.$this->input->post('id'));
			
		}else{
	      	$this->M_user->edit_user_admin();
	      	$this->session->set_flashdata('pesan', 'Diubah');
	      	redirect('user_admin','refresh');
		}
    }

    public function delete()
    {
      	$this->M_user->delete_user_admin();
      	$this->session->set_flashdata('pesan', 'Dihapus');
      	redirect('user_admin','refresh');
    }
}

/* End of file User_admin.php */
/* Location: ./application/controllers/User_admin.php */
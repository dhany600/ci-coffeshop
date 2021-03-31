<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whatsapp extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_whatsapp');
    cekblm_login_pegawai();
	}

	public function index()
    {
    	$data['row'] = $this->M_whatsapp->get_whatsapp();
    	$this->load->view('admin/header');
        $this->load->view('whatsapp/daftar_whatsapp', $data);
        $this->load->view('admin/footer');
        
    }

   	public function add()
    {
		$this->load->view('admin/header');
      	$this->load->view('whatsapp/add_whatsapp');
      	$this->load->view('admin/footer');
   	}

    public function add_proses()
    {
		$this->M_whatsapp->add_whatsapp();
		$this->session->set_flashdata('pesan', 'Ditambah');
		redirect('whatsapp','refresh');
    }

    public function edit($id)
    {
      	$data['row'] = $this->M_whatsapp->get_whatsapp($id)->row();
      	$this->load->view('admin/header');
      	$this->load->view('whatsapp/edit_whatsapp', $data);
      	$this->load->view('admin/footer');
    }

    public function edit_proses()
    {
      	$this->M_whatsapp->edit_whatsapp();
      	$this->session->set_flashdata('pesan', 'Diubah');
      	redirect('whatsapp','refresh');
    }

    public function delete()
    {
      	$this->M_whatsapp->delete_whatsapp();
      	$this->session->set_flashdata('pesan', 'Dihapus');
      	redirect('whatsapp','refresh');
    }

}

/* End of file Whatsapp.php */
/* Location: ./application/controllers/Whatsapp.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('M_product');
  cekblm_login_pegawai();
}
    public function index()
    {
    	$data['row'] = $this->M_product->get_product();
    	$this->load->view('admin/header');
        $this->load->view('product/daftar_product', $data);
        $this->load->view('admin/footer');
        
    }

   	public function add()
    {
   		$this->load->view('admin/header');
      $this->load->view('product/add_product');
      $this->load->view('admin/footer');
   	}

    public function add_proses()
    {
      $this->M_product->add_product();
      $this->session->set_flashdata('pesan', 'Ditambah');
      redirect('Product','refresh');
    }

    public function edit($id)
    {
      $data['row'] = $this->M_product->get_product($id)->row();
      $this->load->view('admin/header');
      $this->load->view('product/edit_product', $data);
      $this->load->view('admin/footer');
    }

    public function edit_proses()
    {
      $this->M_product->edit_product();
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('Product','refresh');
    }

    public function delete()
    {
      $this->M_product->delete_product();
      $this->session->set_flashdata('pesan', 'Dihapus');
      redirect('Product','refresh');
    }


}

/* End of file Controllername.php */

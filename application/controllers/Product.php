<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('M_product');
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
      redirect('Product/add','refresh');
    }

    public function delete()
    {
      $this->M_product->delete_product();
      $this->session->set_flashdata('pesan', 'Dihapus');
      redirect('Product','refresh');
    }


}

/* End of file Controllername.php */

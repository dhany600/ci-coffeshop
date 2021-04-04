<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_product');
		$this->load->model('M_slider');
        $this->load->model('M_whatsapp');
	}

    public function index()
    {
    	$data['row'] = $this->M_product->get_product();
        $data['slider'] = $this->M_slider->get_slider();
        $this->load->view('user/header');
        $this->load->view('user/slider', $data);
        $this->load->view('user/content', $data);
        $this->load->view('user/footer');
    }

    public function detail($id)
    {
        $data['list_product'] = $this->M_product->get_product();
        $data['row'] = $this->M_product->get_product($id)->row();
        $data['wa'] = $this->M_whatsapp->get_whatsapp()->row();
        $this->load->view('user/header');
        $this->load->view('user/detail_produk', $data);
        $this->load->view('user/footer');
    }

}

/* End of file Controllername.php */

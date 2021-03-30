<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_product');
		// $this->load->model('')
	}

    public function index()
    {
    	$data['row'] = $this->M_product->get_product();
        $this->load->view('user/header');
        $this->load->view('user/slider');
        $this->load->view('user/content', $data);
        $this->load->view('user/footer');
    }

    public function detail()
    {
        $data['row'] = $this->M_product->get_product();
        $this->load->view('user/header');
        $this->load->view('user/detail_produk', $data);
        $this->load->view('user/footer');
    }

}

/* End of file Controllername.php */

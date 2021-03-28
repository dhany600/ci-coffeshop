<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whatsapp extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_product');
	}

	public function index()
	{
		$data['row'] = $this->M_product->get_product();
		$this->load->view('admin/header');
		$this->load->view('whatsapp/daftar_whatsapp', $data);
		$this->load->view('whatsapp/add_whatsapp');
		$this->load->view('admin/footer');
	}

	public function add()
	{
		$this->load->view('admin/header');

		$this->load->view('admin/footer');
	}

}

/* End of file Whatsapp.php */
/* Location: ./application/controllers/Whatsapp.php */
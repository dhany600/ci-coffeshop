<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_product');
	}
	public function index()
	{
		$data['row'] = $this->M_product->get_product();
		$this->load->view('admin/header');
		$this->load->view('slider/daftar_slider', $data);
		$this->load->view('slider/add_slider');
		$this->load->view('admin/footer');
	}

	public function add()
	{
		$this->load->view('admin/header');
		
		$this->load->view('admin/footer');
	}
}

/* End of file Slider.php */
/* Location: ./application/controllers/Slider.php */
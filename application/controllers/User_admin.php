<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_product');
	}

	public function index()
	{
		$data['row'] = $this->M_product->get_product();
		$this->load->view('admin/header');
		$this->load->view('user-admin/daftar_user-admin', $data);
		$this->load->view('user-admin/add_user-admin');
		$this->load->view('admin/footer');
	}

	public function add()
	{
		$this->load->view('admin/header');

		$this->load->view('admin/footer');
	}
}

/* End of file User_admin.php */
/* Location: ./application/controllers/User_admin.php */
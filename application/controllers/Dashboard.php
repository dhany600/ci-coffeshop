<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

public function __construct()
{
	parent::__construct();
	cekblm_login_pegawai();
}
	public function index()
	{
		$this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
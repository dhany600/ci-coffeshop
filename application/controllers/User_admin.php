<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/user_admin');
	}

}

/* End of file User_admin.php */
/* Location: ./application/controllers/User_admin.php */
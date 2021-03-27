<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $this->load->view('user/header');
        $this->load->view('user/slider');
        $this->load->view('user/content');
        $this->load->view('user/footer');
    }

}

/* End of file Controllername.php */

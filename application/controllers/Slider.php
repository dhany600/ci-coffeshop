<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_slider');
	}
	public function index()
	{
		$data['row'] = $this->M_slider->get_slider();
		$this->load->view('admin/header');
		$this->load->view('slider/daftar_slider', $data);
		$this->load->view('admin/footer');
	}

	public function add()
	{
		$this->load->view('admin/header');
		$this->load->view('slider/add_slider');
		$this->load->view('admin/footer');
	}

	public function add_proses()
	{
		$this->M_slider->add_slider();
		$this->session->set_flashdata('pesan', 'Ditambah');
		redirect('Slider','refresh');
	}

    public function delete()
    {
      $this->M_slider->delete_slider();
      $this->session->set_flashdata('pesan', 'Dihapus');
      redirect('Slider','refresh');
    }
}

/* End of file Slider.php */
/* Location: ./application/controllers/Slider.php */
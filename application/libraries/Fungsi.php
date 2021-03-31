<?php 
	
	/**
	 * 
	 */
	class Fungsi
	{
		protected $CI;

		function __construct()
		{
			$this->CI =& get_instance();
		}

		function user_login()
		{
			$this->CI->load->model('M_login');
			$user_id = $this->CI->session->userdata('user_id');
			$user_data = $this->CI->M_login->get_user($user_id)->row();
			return $user_data;
		}

		function chart_project()
		{
			$this->CI->load->model('M_project');
			$project =  $this->CI->M_project->chart_project()->result();
			return $project;
		}

	}

?>
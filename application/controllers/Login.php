<?php 
	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('Login_m');
		}
		function index()
		{
			$this->load->view('Login_v');
		}
		function logincek()
		{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('pass','Password','required');
 
		if($this->form_validation->run() != false){
			$this->Login_m->logincek();
		}else{
			$this->load->view('Login_v');
		}
			
		}
		function logout()
		{
			$this->session->sess_destroy();
			redirect('Login');
		}
		function registrasi()
		{
			$this->Login_m->reg();
		}
	}
 ?>
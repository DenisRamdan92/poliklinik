<?php 
	/**
	* 
	*/
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
			$this->load->model('Home_m');
		}
		function index()
		{
			$data['jadwalhari'] = $this->Home_m->jadwalhariini();
			$data['pasienhariini'] = $this->Home_m->pasienhariini();
			$data['pemeriksaanhariini'] = $this->Home_m->pemeriksaanhari();
			$data['pendaftaranhariini'] = $this->Home_m->pendaftaranhari();
			$this->load->view('Home_v', $data);
		}
		function ganpass()
		{
			$data = $this->Home_m->ganpass();
		}
	}
 ?>
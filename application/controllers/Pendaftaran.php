<?php 
	/**
	* 
	*/
	class Pendaftaran extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Pendaftaran_m');
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
		}
		function index()
		{
			$data['datadaftar'] = $this->Pendaftaran_m->lihat();
			//$this->load->view('Home_v');
		}
		function tambah()
		{
			// $data['jadwal'] = $this->Pendaftaran_m->jadwal();
			// $data['pasien'] = $this->Pendaftaran_m->pasien();
			// $data['datadaftar'] = $this->Pendaftaran_m->lihat();
		}
		function tambahdaftar()
		{
			$this->Pendaftaran_m->input();
		}
	}
 ?>
<?php 
	/**
	* 
	*/
	class Pemeriksaan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Pemeriksaan_m');
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
		}
		function index()
		{
			//$data['view'] = "pemeriksaan";
			$data['datapemeriksaan'] = $this->Pemeriksaan_m->lihat();
			//$this->load->view('Pemeriksaan_v', $data);
		}
		function tambah()
		{
			//$data['view'] = "pemeriksaantambah";
			$data['lihatno'] = $this->Pemeriksaan_m->lihatno();
			//$this->load->view('Pemeriksaan_v', $data);
		}
		function tambahdata()
		{
			$data['lihatno'] = $this->Pemeriksaan_m->tambah();
		}
	}
 ?>
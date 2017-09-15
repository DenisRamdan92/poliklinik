<?php 
	/**
	* 
	*/
	class Pembayaran extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Pembayaran_m');
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
		}
		function index()
		{
			//$data['view'] = "pemeriksaan";
			$data['datapemeriksaan'] = $this->Pembayaran_m->lihat();
			//$this->load->view('Pemeriksaan_v', $data);
		}
		function tambahdata()
		{
			$this->Pembayaran_m->input();
		}
	}
 ?>
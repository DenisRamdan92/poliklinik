<?php 
	/**
	* 
	*/
	class Jadwal extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Jadwal_m');
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
		}
		function index()
		{
			$data['datajadwal'] = $this->Jadwal_m->lihat();
		}
		function tambahjadwal()
		{
			$this->Jadwal_m->input();
		}
		function edit()
		{
			$this->Jadwal_m->edit();
		}
		function laporan()
		{
			$data['jadper'] = $this->Jadwal_m->laporan();
			$this->load->view('pages/laporan/Ljadwal_v', $data);
		}
	}
 ?>
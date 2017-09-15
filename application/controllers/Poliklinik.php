<?php 
	/**
	* 
	*/
	class Poliklinik extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Poliklinik_m');
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
		}
		function index()
		{
			$data['datajadwal'] = $this->Jadwal_m->lihat();
		}
		function tambahpoli()
		{
			$this->Poliklinik_m->input();
		}
		function edit()
		{
			$this->Poliklinik_m->edit();
		}
		function laporan()
		{
			$data['laporanpoli'] = $this->Poliklinik_m->laporan();
			$this->load->view('pages/laporan/Lpoliklinik_v', $data);
		}
	}
 ?>
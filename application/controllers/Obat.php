<?php 
	/**
	* 
	*/
	class Obat extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Obat_m');
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
		}
		function index()
		{
			$data['view'] = "obat";
			$data['dataobat'] = $this->Obat_m->lihat();
			$this->load->view('pages/Obat_v', $data);
		}
		function tambah()
		{
			$data['view'] = "tambah";
			$this->load->view('pages/Obat_v', $data);
		}
		function tambahobat()
		{
			$this->Obat_m->tambah();
		}
		function edit()
		{
				$this->Obat_m->edit();
		}
		function laporan()
		{
			$data['laporanobat'] = $this->Obat_m->lihat();
			$this->load->view('pages/laporan/Lobat_v', $data);
		}
		function hapus($kode)
		{
			$this->Obat_m->hapus($kode);
		}
	}
 ?>
<?php 
	/**
	* 
	*/
	class Dokter extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Dokter_m');
		}
		function index()
		{
			$data['datadokter'] = $this->Dokter_m->lihat();
		}
		function tambah()
		{
			$data['view'] = 'doktertambah';
		}
		function tambahdokter()
		{
			$this->Dokter_m->input();
		}
		function edit()
		{
				$this->Dokter_m->edit();
		}
		function laporan()
		{
			$data['datadokter'] = $this->Dokter_m->lihat();
			$this->load->view('pages/laporan/ldokter_v', $data);
		}
		function hapus($kode)
		{
			$this->Dokter_m->hapus($kode);
		}
	}
 ?>
<?php 
	/**
	* 
	*/
	class Pegawai extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model("Pegawai_m");
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
		}
		function tambahpeg()
		{
			$this->Pegawai_m->tambahpegawai();
		}
		function edit()
		{
				$this->Pegawai_m->edit();
		}
		function laporan()
		{
			$data['laporanpegawai'] = $this->Pegawai_m->lihat();
			$this->load->view('pages/laporan/Lpegawai_v', $data);
		}
		function hapus($id)
		{
			$this->Pegawai_m->hapus($id);
		}
	}
 ?>
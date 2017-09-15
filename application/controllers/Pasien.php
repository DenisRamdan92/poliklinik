<?php 
	/**
	* 
	*/
	class Pasien extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Pasien_m');
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
		}
		// function index()
		// {
		// 	$data['datapasien'] = $this->Pasien_m->lihat();
		// 	$data['datapasienhariini'] = $this->Pasien_m->hariini();
		// }
		function tambah()
		{
			$data['view'] = "Pasientambah";
			$this->load->view('Referensi_v', $data);

		}
		function tambahpasien()
		{
			$this->Pasien_m->tambah();
		}
		function edit()
		{	
		$this->Pasien_m->edit();	
		}
		function laporanhariini()
		{
			$data['datapasienhariini'] = $this->Pasien_m->hariini();
			$this->load->view('pages/laporan/Lpasienhariini_v', $data);
		}
		function laporanbulan($tglawal, $tglakhir)
		{
			$data['datapasienbulan'] = $this->Pasien_m->bulanan($tglawal, $tglakhir);
			$this->load->view('pages/laporan/Lpasienbulan_v', $data);
		}
		function laporanriwayat($no)
		{
			$data['datapasienriwayat'] = $this->Pasien_m->riwayat($no);
			$data['datapasienriwayatpass'] = $this->Pasien_m->riwayatpas($no);
			$this->load->view('pages/laporan/Lriwayatpas_v', $data);
		}
		function hapus($no)
		{
			$this->Pasien_m->hapus($no);
		}
	}
 ?>
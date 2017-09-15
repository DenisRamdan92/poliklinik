<?php 
	/**
	* 
	*/
	class Rekammedik extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Rekammedik_m');
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
		}
		function detail($nopasien)
		{
			$data['rekamdetail'] = $this->Rekammedik_m->detail($nopasien);
			$this->load->View('pages/Rekammedik_detail_v', $data);
		}
		function tambah()
		{
			$this->Rekammedik_m->tambah();	
		}
		function diagnosa($nopem)
		{
			$data['diag'] = $this->Rekammedik_m->diag($nopem);
			$data['viewrek'] = $this->Rekammedik_m->viewrekam($nopem);
			//$data['rekamdetail'] = $this->Rekammedik_m->detail($nopasien);
			$this->load->View('pages/Rekammedik_diagnosa_v', $data);
			//$this->load->View('pages/Rekammedik_detail_v', $data);
		}
		function laporan($no)
		{
			$data['datapasienriwayat'] = $this->Pasien_m->riwayat($no);
			$this->load->view('pages/laporan/Lriwayatpas_v', $data);
		}
	}
 ?>
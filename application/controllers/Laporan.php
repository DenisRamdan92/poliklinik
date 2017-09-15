<?php 
	/**
	* 
	*/
	class Laporan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Laporan_m');
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
		}
		function dokter()
		{
			$this->Laporan_m->dokter();
		}
		function perhari($tgl)
		{
			$data['perhari'] = $this->Laporan_m->perhari($tgl);
			$data['totalbiaya'] = $this->Laporan_m->jumlahperhari($tgl);
			$this->load->view('pages/laporan/Lpemasukanhari_paper_v', $data);
		}
		function perharii($tgll)
		{
			$data['perharii'] = $this->Laporan_m->perharii($tgll);
			$data['totalbiayaa'] = $this->Laporan_m->jumlahperharii($tgll);
			$this->load->view('pages/laporan/Lpemasukanhari_paper_obat_v', $data);
		}
		function perbulan($tglawal, $tglakhir)
		{
			$data['perbulan'] = $this->Laporan_m->perbulan($tglawal, $tglakhir);
			$data['totalbiaya'] = $this->Laporan_m->jumlahperbulan($tglawal, $tglakhir);
			$this->load->view('pages/laporan/Lpemasukanbulan_paper_v', $data);
		}
		function perbulanobat($tglawalo, $tglakhiro)
		{
			$data['perbulan'] = $this->Laporan_m->perbulanobat($tglawalo, $tglakhiro);
			$data['totalbiayaobat'] = $this->Laporan_m->jumlahperbulanobat($tglawalo, $tglakhiro);
			$this->load->view('pages/laporan/Lpemasukanbulan_paper_obat_v', $data);
		}
	}
 ?>
<?php 
	/**
	* 
	*/
	class Resep extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Resep_m');
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
		}
		function index()
		{
			$data['view'] = 'resep';
			$data['resep'] = $this->Resep_m->lihat();
			$data['detres'] = $this->Resep_m->detail();
			$this->Resep_m->noresep();
			$this->load->view("Resep_v", $data);
		}
		function tambah()
		{
			$data['view'] = 'reseptambah';
			$data['obat'] = $this->Resep_m->detailobat();
			$data['pemeriksaan'] = $this->Resep_m->pemeriksaan();
			$this->Resep_m->noresep();
			$this->load->view("Resep_v", $data);
		}
		function tambahresep()
		{
			$this->Resep_m->input();
		}
	}
 ?>
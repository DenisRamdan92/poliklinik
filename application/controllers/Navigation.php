<?php 
	/**
	* 
	*/
	class Navigation extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Pendaftaran_m');
			$this->load->model('Pemeriksaan_m');
			$this->load->model('Pegawai_m');
			$this->load->model('Dokter_m');
			$this->load->model('Pasien_m');
			$this->load->model('Jadwal_m');
			$this->load->model('Obat_m');
			$this->load->model('Pembayaran_m');
			$this->load->model('Resep_m');
			$this->load->model('Poliklinik_m');
			$this->load->model('Home_m');
			$this->load->model('Rekammedik_m');
			if($this->session->userdata('isLogin')!= true)
			{
				redirect('Login');
			}
			$data['pasienhariini'] = $this->Home_m->pasienhariini();
		}
		function home()
		{
			$data['jadwalhari'] = $this->Home_m->jadwalhariini();
			$data['pendaftaranhariini'] = $this->Home_m->pendaftaranhari();
			$data['pemeriksaanhariini'] = $this->Home_m->pemeriksaanhari();
			$data['pasienhariini'] = $this->Home_m->pasienhariini();
			$this->load->view('pages/Home_pages_v', $data);
		}
		function pendaftaran()
		{
			$data['jadwal'] = $this->Pendaftaran_m->jadwal();
			$data['pasien'] = $this->Pendaftaran_m->pasien();
			$data['datadaftar'] = $this->Pendaftaran_m->lihat();
			$this->load->view('pages/Pendaftaran_v', $data);
		}
		function pemeriksaan()
		{
			$data['pembayaran'] = $this->Pemeriksaan_m->biaya();
			$data['datapemeriksaan'] = $this->Pemeriksaan_m->lihat();
			$data['lihatno'] = $this->Pemeriksaan_m->lihatno();
			$this->load->view('pages/Pemeriksaan_v', $data);
		}
		function pembayaran()
		{
			$data['nopendaftaran'] = $this->Pendaftaran_m->lihat();
			
			$data['detail'] = $this->Pembayaran_m->detail();
			$this->load->view('pages/Pembayaran_v', $data);
		}
		function resep()
		{
			$data['obat'] = $this->Resep_m->detailobat();
			$data['pemeriksaan'] = $this->Resep_m->pemeriksaan();
			$this->load->view('pages/Resep_v', $data);
		}
		function obat()
		{
			$data['dataobat'] = $this->Obat_m->lihat();
			$this->load->view('pages/Obat_v', $data);
		}
		function jadwal()
		{
			$data['datajadwal'] = $this->Jadwal_m->lihat();
			$data['datadokter'] = $this->Jadwal_m->dokter();
			$this->load->view('pages/Jadwal_v', $data);
		}
		function pegawai()
		{
			$data['datapegawai'] = $this->Pegawai_m->lihat();
			$this->load->view('pages/Pegawai_v', $data);
		}
		function dokter()
		{
			$data['datadokter'] = $this->Dokter_m->lihat();
			$data['datapoli'] = $this->Dokter_m->poli();
			$this->load->view('pages/Dokter_v', $data);
		}
		function pasien()
		{
			//$data['datapasiensudah'] = $this->pasien_m->sudahdiperiksa();
			$data['datapasienhariini'] = $this->Pasien_m->hariini();
			$data['datapasien'] = $this->Pasien_m->lihat();
			$this->load->view('pages/Pasien_v', $data);
		}
		function lpemasukan()
		{
			$this->load->view('pages/laporan/Lpemasukanhari_v');
		}
		function ldokter()
		{
			$this->load->view('pages/laporan/Ldokter_v');
		}
		function poliklinik()
		{
			$data['datapoli'] = $this->Poliklinik_m->lihat();
			$this->load->view('pages/Poliklinik_v',$data);
		}
		function lpemasukanbulan()
		{
			$this->load->view('pages/laporan/Lpemasukanbulan_v');
		}
		function about()
		{
			$this->load->view('pages/About_v');
		}
		function ganpass()
		{
			$this->load->view('pages/Ganpass_v');
		}
		function rekammedik()
		{
			$data['datapasienrekam'] = $this->Rekammedik_m->pasien();
			$this->load->view('pages/Rekammedik_v',$data);	
		}
		function fotoeditor($id)
		{
			$data['id'] = $id;
			$this->load->view('pages/Foto_editor_v', $data);
		}
	}
 ?>
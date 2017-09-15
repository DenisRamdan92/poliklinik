<?php 
	/**
	* 
	*/
	class Home_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function pasienhariini()
		{
			$datestring = mdate('%y%m%d');
			$query = $this->db->query("select count(tglregistrasi) as jumlahpasien from pasien where tglregistrasi = '".$datestring."'");
			return $query->row_array();

		}
		function ganpass()
		{
			if ($this->input->post('usr') == $this->session->userdata('UserName')) {
			$this->db->query("UPDATE pegawai set Password = '".$this->input->post('passb')."' WHERE idpegawai ='".$this->input->post('idpegawai')."'");
			redirect('Login');	
			}
			else
			{
				redirect('Home');
			}
			
		}
		function pemeriksaanhari()
		{
			$datestring = mdate('%y%m%d');
			$query = $this->db->query("select count(*) as pemeriksaanhariini from resep where tanggal = '".$datestring."'");
			return $query->row_array();

		}
		function pendaftaranhari()
		{
			$datestring = mdate('%y%m%d');
			$query = $this->db->query("select count(*) as pendaftaranhariini from pendaftaran where tglpendaftaran = '".$datestring."'");
			return $query->row_array();

		}
		function jadwalhariini()
		{
			$day = "";
			switch (date('l')) {
              	case 'Monday':
              		$day = "Senin";
              		break;
              	case 'Tuesday':
              		$day = "Selasa";
              		break;
              	case 'Wednesday':
              		$day = "Rabu";
              		break;
              	case 'Thursday':
              		$day = "Kamis";
              		break;
              	case 'Friday':
              		$day = "Jumat";
              		break;
              	case 'Saturday':
              		$day = "Sabtu";
              		break;
              	case 'Sunday':
              		$day = "Minggu";
              		break;
              }
              $query = $this->db->query("select count(*) as jadwalhariini from jadwalpraktek where hari = '".$day."'");
			return $query->row_array();
		}
	}
 ?>
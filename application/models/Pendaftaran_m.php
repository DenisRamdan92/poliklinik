<?php 
	/**
	* 
	*/
	class pendaftaran_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function input()
		{
			// ================================
		// nomor Pasien
		$datestring = mdate('%Y%m%d');
		$query = $this->db->query("SELECT * FROM pendaftaran WHERE nopendaftaran LIKE '%".$datestring."%'");
		$i = $query->num_rows()+1;
		$nol= "000";
		if ($i > 9 and $i < 100) {
			$nol = "00";
		}
		elseif($i > 99 and $i < 1000)
		{
			$nol = "0";
		}
		else $nol = "000";
		$nopasstring = $datestring.$nol.$i;
		// =============================
			$data = array(
				'nopendaftaran' => $nopasstring,
				'kodejadwal' => $this->input->post('kode'),
				'idpegawai' => $this->session->userdata('idpegawai'),
				'nopasien' => $this->input->post('nopas'),
				'tglpendaftaran' => $datestring,
				'nourut' => $i);
		$this->db->insert("pendaftaran", $data);
		redirect('Home');
		}
		function lihat()
		{
			$query = $this->db->get("dt_pendaftaran");
			return $query->result_array();
		}
		function selectDaftar($kode){
			$query = $this->db->query("SELECT * FROM pendaftaran WHERE nopendaftaran = '$kode'");
			return $query->row_array();
		}
		function jadwal()
		{
			$query = $this->db->get("jadwalview");
			return $query->result_array(); 
		}
		function pasien()
		{
			$query = $this->db->get("pasien");
			return $query->result_array(); 
		}
	}

 ?>
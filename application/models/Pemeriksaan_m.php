<?php 
	/**
	* 
	*/
	class pemeriksaan_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function tambah()
		{
		// ================================
		// nomor Pasien
		$datestring = mdate('%Y%m%d');
		$query = $this->db->query("SELECT * FROM pemeriksaan WHERE nopemeriksaan like '%".$datestring."%'");
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
		$i++;
		// ===================================
			$data = array(
				'nopemeriksaan' => $nopasstring,
				'nopendaftaran' => $this->input->post('kode'),
				'keluhan' => $this->input->post('kel'),
				'diagnosa' => $this->input->post('diag'),
				'perawatan' => $this->input->post('per'),
				'tindakan' => $this->input->post('tin'),
				'beratbadan' => $this->input->post('bb'),
				'tensidiastolik' => $this->input->post('td'),
				'tensisistolik' => $this->input->post('ts')
				);
			$this->db->insert('pemeriksaan', $data);
			//===============================
			$nol= "00";
			$stat = "";
			$nomorresep = "";
			for ($i=1; $i <= $this->input->post('count'); $i++) {
				//============= REGENERATE ID DETAIL ==============
				if ($i > 9 and $i < 100) {
				$nol = "00";
				}
				elseif($i > 99 and $i < 1000)
				{
					$nol = "0";
				}
				else $nol = "00";
				$idjenis = $this->input->post('npp'.$i);
				$nopen = $this->input->post('kode');
				$tarif = $this->input->post('tariff'.$i);
				$stat .= "('".$idjenis."','".$nopen."','".$tarif."')";
				if ($i < $this->input->post('count')) {
				 	$stat .= ",";
				 } 
			}
			$this->db->query("INSERT INTO detailbiaya VALUES ".$stat);
			redirect('Home');
		}
		function lihat()
		{
			$query = $this->db->get("dt_pemeriksaan");
			return $query->result_array(); 
		}
		function lihatno()
		{
			$query = $this->db->get("cpem");
			return $query->result_array(); 
		}
		function biaya()
		{
			$query = $this->db->get("jenisbiaya");
			return $query->result_array(); 
		}
	}
 ?>
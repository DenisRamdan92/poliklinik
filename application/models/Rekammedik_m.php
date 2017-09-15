<?php 
	/**
	* 
	*/
	class rekammedik_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function pasien()
		{
			$query = $this->db->get("pasien");
			return $query->result_array(); 
		}
		function detail($nopasien)
		{
			$query = $this->db->query("SELECT * FROM rekammedik WHERE nopasien = '$nopasien'");
			return $query->result_array();
		}
		function tambah()
		{
			$datestring = mdate('%y%m%d');
			$query = $this->db->query("SELECT * FROM rekam_medik");
			$i = $query->num_rows() + 1;
			$ribu= "000";
			if ($i > 0 and $i < 10) {
				$ribu= "000";
			}
			elseif($i > 9 and $i < 100)
			{
				$ribu= "00";
			}
			elseif($i > 99 and $i < 1000)
			{
				$ribu= "0";
			}
			else
			{
				$ribu= "";
			}
			$data = array(
				'id_diagnosa' => $datestring.$ribu.$i,
				'tgl_rekam' => $this->input->post('trm'),
				'catatan_rekam' => $this->input->post('cr'));
			$this->db->insert("rekam_medik", $data);
			$this->db->query("UPDATE pemeriksaan SET id_diagnosa = '".$datestring.$ribu.$i."' WHERE nopemeriksaan = '".$this->input->post('nopem')."'");
			redirect('Home');
		}
		function diag($nopem)
		{
			$query = $this->db->query("SELECT * FROM pemeriksaan where nopemeriksaan = '$nopem'");
			return $query->row_array();
		}
		function pasienrekam($nopas)
		{
			$query = $this->db->query("SELECT * FROM pasien where nopasien = '$nopas'");
			return $query->row_array();
		}
		function viewrekam($nopem)
		{
			$query = $this->db->query("SELECT * FROM rekam_diagnosa where nopemeriksaan = '$nopem'");
			return $query->row_array();
		}
	}
 ?>
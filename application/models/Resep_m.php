<?php 
	/**
	* 
	*/
	class resep_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function lihat()
		{
			$query = $this->db->get("resep");
			return $query->result_array();
		}	 
		function detail()
		{
			$query = $this->db->get("detresobat");
			return $query->result_array();
		}
		function detailobat()
		{
			$query = $this->db->get("obat");
			return $query->result_array();
		}
		function pemeriksaan()
		{
			$query = $this->db->get("dt_resep_pemeriksaan");
			return $query->result_array();
		}
		function noresep()
		{
			$nol= "000";
			$datestring = mdate('%Y%m%d');
			$query = $this->db->query("SELECT * FROM resep WHERE noresep like '%".$datestring."%'");
			$x = $query->num_rows()+1;
			$nomorresep = "RES".$datestring.$nol.$x;
			$this->input->post('#nores') == $nomorresep;
		}
		function input()
		{
			$datestring = mdate('%Y%m%d');
			$nol= "000";
			$nomorresep = "";
			//============= INPUT RESEP =============
			$query = $this->db->query("SELECT * FROM resep WHERE nopemeriksaan = '".$this->input->post('nopem-clon')."'");
			$x = $query->num_rows()+1;
			if ($x > 9 and $x < 100) {
				$nol = "00";
				}
				elseif($x > 99 and $x < 1000)
				{
					$nol = "0";
				}
				else $nol = "000";
			$nomorresep = "R".$nol.$x;
			//============= INPUT RESEP =============
			$this->db->query("INSERT INTO resep VALUES('".$nomorresep."','".$this->input->post('nopem-clon')."','".$datestring."')");

			//============= REGENERATE ID DETAIL ==============
			$stat = "";
				$jum = "0";
				$d = 0;
			for ($i=1; $i <= $this->input->post('count'); $i++) {
				if ($i > 9 and $i < 100) {
				$jum = "";
				}
				else $jum = "0";
				$kode = $this->input->post('kode'.$i);
				$jml = $this->input->post('jml'.$i);
				$harga = $this->input->post('harga'.$i);
				$ds = $this->input->post('ds'.$i);
				$stat .= "('".$nomorresep."','".$kode."','".$jml."','".$ds."','".$harga."')";
				if ($i < $this->input->post('count')) {
				 	$stat .= ",";
				 } 
			}
			$this->db->query("INSERT INTO detailresep VALUES".$stat);
			redirect('Home');
		}
	}
 ?>
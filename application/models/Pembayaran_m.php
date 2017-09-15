<?php 
	/**
	* 
	*/
	class pembayaran_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function input()
		{
			$nol= "00";
			$stat = "";
			$nomorresep = "";
			for ($i=1; $i <= $this->input->post('count'); $i++) {
				//============= REGENERATE ID TETAIL ==============
				if ($i > 9 and $i < 100) {
				$nol = "00";
				}
				elseif($i > 99 and $i < 1000)
				{
					$nol = "0";
				}
				else $nol = "00";
				$iddetail = "DB".$nol.$i;
				$idjenis = $this->input->post('npp'.$i);
				$nopen = $this->input->post('nppp');
				$tarif = $this->input->post('tariff'.$i);
				$stat .= "('".$iddetail."','".$idjenis."','".$nopen."','".$tarif."')";
				if ($i < $this->input->post('count')) {
				 	$stat .= ",";
				 } 
			}
			$this->db->query("INSERT INTO detailbiaya VALUES ".$stat);
			redirect('Home');
			
		}
		function lihat()
		{
			$query = $this->db->get("jenisbiaya");
			return $query->result_array(); 
		}
		function lihatno()
		{
			$query = $this->db->get("cpem");
			return $query->result_array(); 
		}
		function detail()
		{
			$query = $this->db->get("detailbiaya");
			return $query->result_array(); 
		}
	}
 ?>
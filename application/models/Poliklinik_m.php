<?php 
	/**
	* 
	*/
	class poliklinik_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function input()
		{
		// ================================
		// kode jadwal
		$query = $this->db->query("SELECT * FROM poliklinik");
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
		// ===================================
			$data = array(
				'kodepoli' => "L".$nol.$i,
				'namapoli' => $this->input->post('np')
				);
		$this->db->insert("poliklinik", $data);
		$this->session->set_flashdata('message',"Data Tersimpan");
		redirect('Home');
		}
		function lihat()
		{
			$query = $this->db->get("poliklinik");
			return $query->result_array(); 
		}
		function edit()
		{
			$this->db->query("UPDATE poliklinik SET 
				namapoli = '".$this->input->post('np')."'
				 WHERE kodepoli = '".$this->input->post('kopo')."'");
			redirect('Home');
		}
		function laporan()
		{
			$query = $this->db->get("poliklinik");
			return $query->result_array(); 
		}
	}
 ?>
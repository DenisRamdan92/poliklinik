<?php 
	/**
	* 
	*/
	class jadwal_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function input()
		{
		// ================================
		// kode jadwal
		$query = $this->db->query("SELECT * FROM jadwalpraktek");
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
				'kodejadwal' => "J".$nol.$i,
				'kodedokter' => $this->input->post('kd'),
				'hari' => $this->input->post('hari'),
				'jammulai' => $this->input->post('jm'),
				'jamselesai' => $this->input->post('js')
				);
		$this->db->insert("jadwalpraktek", $data);
		$this->session->set_flashdata('message',"Data Tersimpan");
		redirect('Home');
		}
		function lihat()
		{
			$query = $this->db->get("jadwalview");
			return $query->result_array(); 
		}
		function dokter()
		{
			$query = $this->db->get("dokter");
			return $query->result_array(); 
		}
		function edit()
		{
			$this->db->query("UPDATE jadwalpraktek SET 
				kodedokter = '".$this->input->post('kd')."',
				hari = '".$this->input->post('hari')."',
				jammulai = '".$this->input->post('jm')."',
				jamselesai = '".$this->input->post('js')."'
				 WHERE kodejadwal = '".$this->input->post('kode')."'");
			redirect('Home');
		}
		function laporan()
		{
			$query = $this->db->get("jadper");
			return $query->result_array(); 
		}
	}
 ?>
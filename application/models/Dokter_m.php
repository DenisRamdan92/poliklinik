<?php 
	/**
	* 
	*/
	class dokter_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function input()
		{
			$query = $this->db->query("SELECT * FROM dokter");
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
				'kodedokter' => "D".$ribu.$i,
				'kodepoli' => $this->input->post('kopoli'),
				'namadokter' => $this->input->post('nama'),
				'almdokter' => $this->input->post('alm'),
				'telpdokter' => $this->input->post('telp'));
		$this->db->insert("dokter", $data);
		$this->session->set_flashdata('message',"Dokter Berhasil Di input");
		redirect('Home');
		}
		function lihat()
		{
			$query = $this->db->get("dt_dokter");
			return $query->result_array();
		}
		function poli()
		{
			$query = $this->db->get("poliklinik");
			return $query->result_array();
		}
		function selectDokter($kode){
			$query = $this->db->query("SELECT * FROM dokter WHERE kodedokter = '$kode'");
			return $query->row_array();
		}
		function edit()
		{
			$this->db->query("UPDATE dokter set namadokter = '".$this->input->post('nama')."',
				almdokter = '".$this->input->post('alm')."',
				telpdokter = '".$this->input->post('telp')."', kodepoli = '".$this->input->post('kopoli')."'
				 WHERE kodedokter = '".$this->input->post('kode')."'");
			$this->session->set_flashdata('message',"Data Berhasil Diedit");
			redirect('Home');
		}
		function hapus($kode)
		{
			$this->db->query("DELETE FROM dokter WHERE kodedokter = '$kode'");
			//$this->session->set_flashdata('message',"Data Dihapus");
			redirect('Home');
		}
	}

 ?>
<?php 
	/**
	* 
	*/
	class pasien_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function tambah()
		{
		// ================================
		// nomor Pasien
		$query = $this->db->query("SELECT * FROM pasien");
		$i = $query->num_rows()+1;
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
		$nopasstring = "P".$ribu.$i;
		$i++;
		// ===================================
		echo $nopasstring;
			$data = array(
				'nopasien' => $nopasstring,
				'namapass' => $this->input->post('nama'),
				'almpass' => $this->input->post('alm'),
				'telppas' => $this->input->post('telp'),
				'tgllahirpass' => $this->input->post('tgll'),
				'jeniskelpas' => $this->input->post('jk'),
				'tglregistrasi' => mdate('%Y%m%d')
				);
		
		$this->db->insert("pasien", $data);
		$this->session->set_flashdata('message',"Data Tersimpan");
		redirect('Home');
		}
		function lihat()
		{
			$query = $this->db->get("pasien");
			return $query->result_array(); 
		}
		function riwayat($no){
			$query = $this->db->query("SELECT * FROM cetak_rekam_medik WHERE nopasien = '$no'");
			return $query->row_array();
		}
		function riwayatPas($no){
			$query = $this->db->query("SELECT * FROM cetak_rekam_medik WHERE nopasien = '$no'");
			return $query->result_array();
		}
		function hariini(){
			$datestring = mdate('%y%m%d');
			$query = $this->db->query("SELECT * FROM pasien WHERE tglregistrasi = '$datestring'");
			return $query->result_array();
		}
		// function sudahdiperiksa()
		// {
		// 	$datestring = mdate('%y%m%d');
		// 	$query = $this->db->query("select pasien.* from pasien,pendaftaran,pemeriksaan where pasien.nopasien = pendaftaran.nopasien and pendaftaran.nopendaftaran = pemeriksaan.nopendaftaran and pasien.tglregistrasi = '$datestring'");
		// 	return $query->result_array();
		// }
		function bulanan($tglawal, $tglakhir)
		{
		$query = $this->db->query("select pasien.* from pasien,pendaftaran,pemeriksaan where pasien.nopasien = pendaftaran.nopasien and pendaftaran.nopendaftaran = pemeriksaan.nopendaftaran and pasien.tglregistrasi between '$tglawal' and '$tglakhir'");
		return $query->result_array();
		}
		function edit()
		{
			$this->db->query("UPDATE pasien SET 
				namapass = '".$this->input->post('nama')."',
				almpass = '".$this->input->post('alm')."',
				telppas = '".$this->input->post('telp')."',
				tgllahirpass = '".$this->input->post('tgll')."',
				jeniskelpas = '".$this->input->post('jk')."'
				 WHERE nopasien = '".$this->input->post('nopasien')."'");
			redirect('Home');
		}
		function hapus($no)
		{
			$this->db->query("DELETE FROM pasien WHERE nopasien = '$no'");
			$this->session->set_flashdata('message',"Data Terhapus");
			redirect('Home');
		}
	}
 ?>
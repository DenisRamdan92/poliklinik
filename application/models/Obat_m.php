<?php 
	/**
	* 
	*/
	class obat_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function tambah()
		{
			// kode obat
			$query = $this->db->query("SELECT * FROM obat");
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
			$data = array(
				'kodeobat' => "B".$ribu.$i,
				'namaobat' => $this->input->post('nama'),
				'merk' => $this->input->post('merk'),
				'satuan' => $this->input->post('satuan'),
				'stok' => $this->input->post('stok'),
				'hargajual' => $this->input->post('harga'));
			$this->db->insert('obat', $data);
			redirect('Home');
		}
		function lihat()
		{
			$query = $this->db->get("obat");
			return $query->result_array(); 
		}
		function selectObat($kode){
			$query = $this->db->query("SELECT * FROM obat WHERE kodeobat = '$kode'");
			return $query->row_array();
		}
		function edit()
		{
			$this->db->query("UPDATE obat SET 
				namaobat = '".$this->input->post('nama')."',
				merk = '".$this->input->post('merk')."',
				satuan = '".$this->input->post('satuan')."',
				stok = '".$this->input->post('stok')."',
				hargajual = '".$this->input->post('harga')."'
				WHERE kodeobat = '".$this->input->post('kode')."'");
			redirect('Home');
		}
		function hapus($kode)
		{
			$this->db->query("DELETE FROM obat WHERE kodeobat = '$kode'");
			redirect('Home');
		}
	}
 ?>
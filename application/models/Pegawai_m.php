

<?php 
	/**
	* 
	*/
	class pegawai_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function tambahpegawai()
		{
			// id Pegawai
			$query = $this->db->query("SELECT * FROM Pegawai");
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
			$nopeg = "K".$ribu.$i;
			$data = array(
				'idpegawai' => $nopeg,
				'namapeg' => $this->input->post('nama'),
				'almpeg' => $this->input->post('alm'),
				'telppeg' => $this->input->post('telp'),
				'tgllhrpeg' => $this->input->post('tgl'),
				'jnlkelpeg' => $this->input->post('jk'),
				'UserName' => $this->input->post('username'),
				'Password' => $this->input->post('password'),
				'typeuser' => $this->input->post('tu')
				);
			$this->db->insert("pegawai", $data);
			$this->session->set_flashdata('message',"Registrasi berhasil");
			redirect('Home');
		}
		function lihat()
		{
			$query = $this->db->get("pegawai");
			return $query->result_array();
		}
		function selectPegawai($nip){
			$query = $this->db->query("SELECT * FROM pegawai WHERE nip = '$nip'");
			return $query->row_array();
		}
		function selectLogin($nip){
		$query = $this->db->query("SELECT * FROM login WHERE nip = '$nip'");
		$jml = $query->num_rows();
		if ($jml < 1) {
			$this->session->set_flashdata('messager',"Pegawai Tidak Memiliki Akun Login");
		} else $this->session->set_flashdata('messager',"Pegawai Memiliki Akun Login");
		return $query->row_array();
		}

		function edit()
		{
			// update pegawai
			$this->db->query("UPDATE pegawai 
				SET namapeg = '".$this->input->post('nama')."',
				almpeg = '".$this->input->post('alm')."',
				telppeg = '".$this->input->post('telp')."',
				tgllhrpeg = '".$this->input->post('tgl')."',
				jnlkelpeg = '".$this->input->post('jk')."' WHERE idpegawai = '".$this->input->post('idpegawai')."'");
			redirect('Home');
			// update login
			// $this->db->query("UPDATE login SET username = '".$this->input->post('usernmae')."',
			//  password = '".$this->input->post('password')."',
			//  typeuser = '".$this->input->post('tu')."' WHERE nip ='".$this->input->post('nip')."'");
		}
		function hapus($id)
		{
			$this->db->query("DELETE FROM pegawai WHERE idpegawai = '$id'");
			redirect('Home');
		}
		// function fotopegawai($id)
		// {
		// 	$query = $this->db->get("pegawai");
		// 	return $query->row_array();
		// }
	}

 ?>
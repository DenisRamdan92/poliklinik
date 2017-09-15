 <?php 
	/**
	* 
	*/
	class login_m extends CI_model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function logincek()
		{
			$query = $this->db->query("SELECT * FROM pegawai WHERE UserName = '".$_POST['username']."' AND Password = '".$_POST['pass']."'");
			$rows = $query->row_array();
			$jml = $query->num_rows();
			if ($jml > 0)
			{
				$data = array(
					'UserName' => $rows['UserName'],
					'idpegawai' => $rows['idpegawai'],
					'password' => $rows['password'],
					'hakakses' => $rows['TypeUser'],
					'isLogin' => true
				);	
				$this->session->set_userdata($data);
				redirect('Home');
			}
			else
			{
				$this->session->set_flashdata('message',"Username atau Password salah");
				redirect('Login');
			}
		}
		function reg()
		{
			$data = array(
				'user_id' => $this->input->post('userid'),
				'user_nama' => $this->input->post('nama'),
				'user_pass' => $this->input->post('passreg'),
				'user_hak' => $this->input->post('hakakses'),
				'user_sts' => 1
				);
			$this->db->insert("tm_user", $data);
			$this->session->set_flashdata('message',"Registrasi berhasil");
			redirect('Login');
		}
	}
 ?>
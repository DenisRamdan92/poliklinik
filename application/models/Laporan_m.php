<?php 
	/**
	* 
	*/
	class laporan_m extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function dokter()
		{
			$query = $this->db->get("pasien");
			return $query->result_array();
		}
		function perhari($tgl)
		{
			$query = $this->db->query("SELECT * FROM `laporanperhari` WHERE tglpendaftaran = '$tgl' order by nourut");
			return $query->result_array();
		}
		function jumlahperhari($tgl)
		{
			$query = $this->db->query("SELECT sum(tarif) as jumlahbiaya FROM `laporanperhari` WHERE tglpendaftaran = '$tgl' order by nourut");
			return $query->row_array();
		}
		function perharii($tgll)
		{
			$query = $this->db->query("SELECT * FROM `totalpenjualanobat` where tanggal = '$tgll' group by nopasien");
			return $query->result_array();
		}
		function jumlahperharii($tgll)
		{
			$query = $this->db->query("SELECT sum(subtotal) as totalbiaya FROM `totalpenjualanobat` where tanggal = '$tgll' group by nopasien");
			return $query->row_array();
		}
		function perbulan($tglawal, $tglakhir)
		{
			$query = $this->db->query("SELECT pendaftaran.nopendaftaran, pendaftaran.tglpendaftaran,pendaftaran.nourut,pasien.nopasien, pasien.namapass, sum(detailbiaya.tarif) as biaya 
FROM pendaftaran,pasien,detailbiaya 
where pendaftaran.nopasien = pasien.nopasien and pendaftaran.nopendaftaran = detailbiaya.nopendaftaran and tglpendaftaran between '$tglawal' and '$tglakhir' 
group by pendaftaran.nopendaftaran");
			return $query->result_array();
		}
		function perbulanobat($tglawalo,$tglakhiro)
		{
			$query = $this->db->query("select resep.noresep, pasien.nopasien, pasien.namapass,obat.namaobat, detailresep.jumlah , detailresep.hargajual, detailresep.jumlah * detailresep.hargajual as subtotal, resep.tanggal
from resep,pemeriksaan,pendaftaran,pasien,detailresep,obat 
where pasien.nopasien = pendaftaran.nopasien and 
pendaftaran.nopendaftaran = pemeriksaan.nopendaftaran and 
pemeriksaan.nopemeriksaan = resep.nopemeriksaan and 
resep.noresep = detailresep.noresep and 
detailresep.kodeobat = obat.kodeobat and resep.tanggal between '$tglawalo' and '$tglakhiro' group by nopasien");
			return $query->result_array();
		}
		function jumlahperbulan($tglawalo,$tglakhiro)
		{
			$query = $this->db->query("SELECT pendaftaran.nopendaftaran, pendaftaran.tglpendaftaran,pendaftaran.nourut,pasien.nopasien, pasien.namapass, sum(detailbiaya.tarif) as biaya 
FROM pendaftaran,pasien,detailbiaya 
where pendaftaran.nopasien = pasien.nopasien and pendaftaran.nopendaftaran = detailbiaya.nopendaftaran and tglpendaftaran between '$tglawalo' and '$tglakhiro' 
group by pendaftaran.nopendaftaran");

			return $query->row_array();
		}
		
	function jumlahperbulanobat($tglawalo,$tglakhiro)
		{
			$query = $this->db->query("select resep.noresep, pasien.nopasien, pasien.namapass,obat.namaobat, detailresep.jumlah , detailresep.hargajual, detailresep.jumlah * detailresep.hargajual as subtotal,sum(detailresep.jumlah * detailresep.hargajual) as jumlahharga, resep.tanggal
from resep,pemeriksaan,pendaftaran,pasien,detailresep,obat 
where pasien.nopasien = pendaftaran.nopasien and 
pendaftaran.nopendaftaran = pemeriksaan.nopendaftaran and 
pemeriksaan.nopemeriksaan = resep.nopemeriksaan and 
resep.noresep = detailresep.noresep and 
detailresep.kodeobat = obat.kodeobat and resep.tanggal between '$tglawalo' and '$tglakhiro' group by nopasien");

			return $query->row_array();
		}
	}

 ?>
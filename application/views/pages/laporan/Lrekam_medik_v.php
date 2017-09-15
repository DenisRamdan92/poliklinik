<?php 
$nopas = $datapasienriwayat['nopasien'];
$nama = $datapasienriwayat['namapass'];
$alm = $datapasienriwayat['almpass'];
$telp = $datapasienriwayat['telppas'];
$tgllhr = $datapasienriwayat['tgllahirpass'];
$jk = $datapasienriwayat['jeniskelpas'];
$tglrgs = $datapasienriwayat['tglregistrasi'];
$keluhan = $datapasienriwayat['keluhan'];
$diagnosa = $datapasienriwayat['id_diagnosa'];
$perawatan = $datapasienriwayat['perawatan'];
$tindakan = $datapasienriwayat['tindakan'];
$beratbadan = $datapasienriwayat['beratbadan'];
$tensid = $datapasienriwayat['tensidiastolik'];
$tensis = $datapasienriwayat['tensisistolik'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body onload="window.print()">
<table>
	<tr>
		<td rowspan="4" width="130"><img src="<?php echo base_url() ?>assets/img/medicine.svg" width="120"></td>
		<td height="10"><b>POLIKLINIK SMAKZIE</b></td>
	</tr>
	<tr>
		<td height="10">No. Izin Praktek : 0001/2017/01/333</td>
	</tr>
	<tr>
		<td height="10">Jl. Siliwangi No. 41 (0263) 261365 Fax (0263) 272561 Cianjur 43212</td>
	</tr>
	<tr>
		<td height="10">Website : http : www.smkn1cianjur.sch.id E-mail : info@smkn1cianjur.scr.id</td>
	</tr>
</table>
<center>
	<div id="header"><hr>
	<h3>RIWAYAT KESEHATAN PASIEN</h3>
</div>
</center>

<h4>1. Data Diri</h4>
	<table>
		<tr>
			<td><b>Nama</b></td>
			<td>: <b><?php echo $nama; ?></b></td>
		</tr>
		<tr>
			<td>Nomor Pasien</td>
			<td>: <?php echo $nopas; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>: <?php echo $alm; ?></td>
		</tr>
		<tr>
			<td>Telpon</td>
			<td>: <?php echo $telp; ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>: <?php echo $tgllhr; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>: <?php echo $jk; ?></td>
		</tr>
	</table>
<hr>
<h4>2. Pemeriksaan</h4>
	<table>
		<tr>
			<td>Keluhan</td>
			<td>: <?php echo $keluhan; ?></td>
		</tr>
		<tr>
			<td>Diagnosa</td>
			<td>: <?php echo $diagnosa; ?></td>
		</tr>
		<tr>
			<td>Perawatan</td>
			<td>: <?php echo $perawatan; ?></td>
		</tr>
		<tr>
			<td>Tindakan</td>
			<td>: <?php echo $tindakan; ?></td>
		</tr>
		<tr>
			<td>Berat Badan</td>
			<td>: <?php echo $beratbadan; ?></td>
		</tr>
		<tr>
			<td>Tensi Diastolik</td>
			<td>: <?php echo $tensid; ?></td>
		</tr>
		<tr>
			<td>Tensi Sistolik</td>
			<td>: <?php echo $tensis; ?></td>
		</tr>
	</table>
	<h5>Tanggal Registrasi : <?php echo $tglrgs; ?></h5>
</body>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</html>

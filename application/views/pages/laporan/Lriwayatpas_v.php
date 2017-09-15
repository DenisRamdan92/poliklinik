<?php 
$nopas = $datapasienriwayat['nopasien'];
$nama = $datapasienriwayat['namapass'];
$alm = $datapasienriwayat['almpass'];
$telp = $datapasienriwayat['telppas'];
$tgllhr = $datapasienriwayat['tgllahirpass'];
$jk = $datapasienriwayat['jeniskelpas'];
$tglrgs = $datapasienriwayat['tglregistrasi'];
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
	<h3>DAFTAR RIWAYAT REKAM MEDIK</h3>
</div>
</center>

<div>
	<h4>Profil Pasien</h4>
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
		<tr>
			<td>Tanggal Registrasi</td>
			<td>: <?php echo $tglrgs; ?></td>
		</tr>
	</table>
</div>
<hr>
<div>
	<h4>Diagnosa</h4>
	<table class="table table-stripped" width="100%">
		<thead>
			<th>No. </th>
			<th>Keluhan</th>
			<th>ID. Diagnosa</th>
			<th>Perawatan</th>
			<th>Tindakan</th>
			<th>Berat badan</th>
			<th>Tensi Diastolik</th>
			<th>Tensi Sistolik</th>
			<th>Tanggal Rekam Medik</th>
			<th>Catatan Rekam</th>
		</thead>
		<tbody>
		<?php 
		$i = 1;
		foreach ($datapasienriwayatpass as $ds)
		{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$ds['keluhan']."</td>";
		echo "<td>".$ds['id_diagnosa']."</td>";
		echo "<td>".$ds['perawatan']."</td>";
		echo "<td>".$ds['tindakan']."</td>";
    	echo "<td>".$ds['beratbadan']."</td>";
		echo "<td>".$ds['tensidiastolik']."</td>";
		echo "<td>".$ds['tensisistolik']."</td>";
		echo "<td>".$ds['tgl_rekam']."</td>";
		echo "<td>".$ds['catatan_rekam']."</td>";
		echo "</tr>";
		$i++;
		}
 ?> 
		</tbody>
	</table>
</div>
</body>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</html>
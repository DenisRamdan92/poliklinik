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
	<h3>JADWAL PERAKTEK DOKTER</h3>
	<h4>PERIODE <?php echo mdate('%d %M %Y'); ?></h4>
</div>
</center>


<table id="content" width="100%" class="table table-stripped">
 	<thead>
 		<th>No.</th>
 		<th>Nama Dokter</th>
 		<th>Nama Poli</th>
 		<th>Hari</th>
 		<th>Jam Mulai</th>
 		<th>Jam Selesai</th>
 	</thead>
 	<tbody>
 		<?php 
		$i = 1;
		foreach ($jadper as $jp)
		{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$jp['namadokter']."</td>";
		echo "<td>".$jp['namapoli']."</td>";
		echo "<td>".$jp['hari']."</td>";
		echo "<td>".$jp['jammulai']."</td>";
		echo "<td>".$jp['jamselesai']."</td>";
		echo "</tr>";
		$i++;
		}
 ?> 
 	</tbody>
 </table>
</body>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</html>

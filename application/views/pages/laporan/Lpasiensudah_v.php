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
	<h3>DAFTAR PASIEN TELAH DIPERIKSA</h3>
	<h4>PERIODE <?php echo mdate('%d %M %Y'); ?></h4>
</div>
</center>


<table id="datapasiensudah" class="table table-hover">
  <thead>
    <th>No.</th>
    <th>No. pasien</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Telpon</th>
    <th>Tanggal Lahir</th>
    <th>Jenis Kelamin</th>
  </thead>
  <tbody>
    <?php 
    $i = 1;
    foreach ($datapasiensudah as $ds)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$ds['nopasien']."</td>";
    echo "<td>".$ds['namapass']."</td>";
    echo "<td>".$ds['almpass']."</td>";
    echo "<td>".$ds['telppas']."</td>";
    echo "<td>".$ds['tgllahirpass']."</td>";
    echo "<td>".$ds['jeniskelpas']."</td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>
 </table>
</body>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</html>

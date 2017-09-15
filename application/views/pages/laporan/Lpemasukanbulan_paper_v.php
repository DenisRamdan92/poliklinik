
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
	<h3>PEMASUKAN BULANAN DARI PEMERIKSAAN</h3>
	<h4>PERIODE <?php echo mdate('%M %Y'); ?></h4>
</div>
</center>


<table id="datapasiensudah" class="table table-hover">
  <thead>
    <th>No.</th>
    <th>No. Pendaftaran</th>
    <th>Tgl</th>
    <th>No. Urut</th>
    <th>No. Pasien</th>
    <th>Nama Pasien</th>
    <th>Biaya</th>
  </thead>
  <tbody>
    <?php 
    $i = 1;
    foreach ($perbulan as $ph)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$ph['nopendaftaran']."</td>";
    echo "<td>".$ph['tglpendaftaran']."</td>";
    echo "<td>".$ph['nourut']."</td>";
    echo "<td>".$ph['nopasien']."</td>";
    echo "<td>".$ph['namapass']."</td>";
    echo "<td>".$ph['biaya']."</td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>
 </table>
 <h4 class="pull-right">Jumlah Biaya : Rp <?php echo $totalbiaya['biaya']; ?>,-</h4>
</body>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</html>

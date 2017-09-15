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
	<h3>DAFTAR PEGAWAI</h3>
	<h4>PERIODE <?php echo date('d M Y'); ?></h4>
</div>
</center>


<table id="datapegawai" class="table table-stripped">
    <thead> 
        <tr>
        <th>No.</th>
        <th>ID Pegawai</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telpon</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
<?php 
$i = 1;
    foreach ($laporanpegawai as $dt)
    {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$dt['idpegawai']."</td>";
        echo "<td>".$dt['namapeg']."</td>";
        echo "<td>".$dt['almpeg']."</td>";
        echo "<td>".$dt['telppeg']."</td>";
        echo "<td>".$dt['tgllhrpeg']."</td>";
        echo "<td>".$dt['jnlkelpeg']."</td>";
        echo "</tr>";
        $i++;
    }
 ?>         
    </tbody>
 </table>
</body>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</html>

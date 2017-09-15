  <div class="btn-group">
  <button type="button" class="btn btn-success btn-sm" id="data" name="data"><span class="fa fa-upload" id="but"></span> Tambah</button>
  <button type="button" class="btn btn-info btn-sm" id="cetak" name="cetak" onclick="window.open('<?php echo base_url() ?>Jadwal/laporan','_blank');"><span class="fa fa-print" id="but"></span> Cetak</button>
  </div>
  <br><br>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
      <h2 id="titlepan"><i class="fa fa-list-ol"></i> Jadwal <small>Praktek</small></h2>
      <div class="clearfix"></div>
     </div>
     <div class="x_content">
                    <table id="datajadwal" class="table table-hover">
  <thead>
    <tr>
    <th>No.</th>
    <th>Nama Dokter</th>
    <th>Nama Poli</th>
    <th>Kode Jadwal</th>
    <th>Kode Dokter</th>
    <th>Hari</th>
    <th>Jam Mulai</th>
    <th>Jam Selesai</th>
    <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php 
$i = 1;
  foreach ($datajadwal as $dt)
  {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$dt['namadokter']."</td>";
    echo "<td>".$dt['namapoli']."</td>";
    echo "<td>".$dt['kodejadwal']."</td>";
    echo "<td>".$dt['kodedokter']."</td>";
    echo "<td>".$dt['hari']."</td>";
    echo "<td>".$dt['jammulai']."</td>";
    echo "<td>".$dt['jamselesai']."</td>";
    echo "<td><i id='edit' name='edit' class='btn btn-warning btn-sm fa fa-edit' title='Edit'></i></td>";
    echo "</tr>";
    $i++;
  }
 ?>     
  </tbody>
 </table>
                  </div>
                  </div>
                </div>
<!-- ====================================== -->
<div id="dt-jadwal">
    <div class="x_panel">
     <div class="x_content">
                    <?php echo form_open('Jadwal/tambahjadwal','method="post" id="tambahform"');?>
              <input type="hidden" id="kode" name="kode" class="form-control"/>

              <label name="alml">Kode Dokter</label>
              <button class="btn btn-success" type="button" id='cari' name="cari"><span class="fa fa-search"></span></button>
            <input type="text" class="form-control" id="kodok" name="kodok" readonly required>

              <label name="telpl">Hari</label>
              <select name="hari" class="form-control" required>
                <option>Senin</option>
                <option>Selasa</option>
                <option>Rabu</option>
                <option>Kamis</option>
                <option>Jum'at</option>
                <option>Sabtu</option>
                <option>Minggu</option>
              </select>
              <label name="tglll">Jam Mulai</label>
              <input type="time" id="jm" name="jm" class="form-control" placeholder="10 - 20 karakter" required/>
              <label name="jkl">Jam Selesai</label>
              <input type="time" id="js" name="js" class="form-control" placeholder="10 - 20 karakter" required/>
              <br>
              <button type="submit" class="btn btn-success btn-sm" id="submit" name="submit" required><span class="fa fa-upload" id="but"></span> Tambah</button>
             </form>
                  </div>
                  </div>
 </div>
 <!-- ==================DATA DOKTER==================== -->
<div id="dt-dokter-jadwal">
 	<table id="datadokter-jadwal" class="table table-stripped">
 	<thead>
 		<tr>
 		<th>No.</th>
 		<th>Kode</th>
 		<th>Poli</th>
 		<th>Nama</th>
 		<th>Alamat</th>
 		<th>Telpon</th>
 		<th>Aksi</th>
 		</tr>
 	</thead>
 	<tbody>
<?php 
$i = 1;
	foreach ($datadokter as $dd)
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$dd['kodedokter']."</td>";
		echo "<td>".$dd['kodepoli']."</td>";
		echo "<td>".$dd['namadokter']."</td>";
		echo "<td>".$dd['almdokter']."</td>";
		echo "<td>".$dd['telpdokter']."</td>";
		echo "<td><button class='btn btn-success btn-sm' type='button' id='ambil' class='ambil'><span class='fa fa-chain'></span></button></td>";
		echo "</tr>";
		$i++;
	}
 ?> 		
 	</tbody>
 </table>
 </div>
 <!-- SCRIPT -->
 <script type="text/javascript">
      $(function(){
        $('#datajadwal').DataTable();
        $('#datadokter-jadwal').DataTable();
        $('#dt-jadwal').dialog({
          dialogClass : "alert",
          title : "Input Jadwal",
          autoOpen : false,
          width : 500,
          height : 405,
          modal : true,
          resizable : false
        });
        $('#dt-dokter-jadwal').dialog({
          dialogClass : "alert",
          title : "Data Dokter",
          autoOpen : false,
          width : 1000,
          modal : true,
          resizable : false
        });
        $('#data').click(function(){
          $('#dt-jadwal').dialog('open');
        });
        $('#cari').click(function(){
          $('#dt-dokter-jadwal').dialog('open');
        });

        $('#datadokter-jadwal').on('click', '#ambil', function(){
          var currentRow = $(this).closest("tr");
          var kodok = currentRow.find("td:eq(1)").text();;
          $('#kodok').val(kodok);
          $('#dt-dokter-jadwal').dialog('close');
        });

        $('#datajadwal').on('click', '#edit', function(){
          var currentRow = $(this).closest("tr");
          var kodok = currentRow.find("td:eq(4)").text();
          var kj = currentRow.find("td:eq(3)").text();
          var hari = currentRow.find("td:eq(5)").text();
          var jm = currentRow.find("td:eq(6)").text();
          var js = currentRow.find("td:eq(7)").text();
          $('#dt-jadwal').dialog('open');
          $('input[type=submit]').attr('id','edit');
          $('input[type=submit]').attr('value','edit');
          $('#tambahform').attr('action',"http://localhost/poliklinik2/Jadwal/edit");
          $('#kodok').val(kodok);
          $('#hari').val(hari);
          $('#jm').val(jm);
          $('#js').val(js);
          $('#kode').val(kj);
        });
      });                                                                   
    </script>
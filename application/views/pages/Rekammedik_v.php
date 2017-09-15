<table id="pasien-rekam" class="table table-hover">
  <thead>
    <tr>
    <th>No.</th>
    <th style="display: none;">No. Pasien</th>
    <th>Nama Pasien</th>
    <th>Tgl Lahir Pasien</th>
    <th>Alamat</th>
    <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php 
$i = 1;
  foreach ($datapasienrekam as $dpr)
  {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td  style='display: none;'>".$dpr['nopasien']."</td>";
    echo "<td>".$dpr['namapass']."</td>";
    echo "<td>".$dpr['tgllahirpass']."</td>";
    echo "<td>".$dpr['almpass']."</td>";
    echo "<td><input type='button' value='View Rekam' id='vr' name='vr' class='btn btn-info btn-sm' /></td>";
    echo "</tr>";
    $i++;
  }
 ?>     
  </tbody>
 </table>
 <script type="text/javascript">
   $(function(){
      $('#pasien-rekam').on('click', '#vr', function(){
          var currentRow = $(this).closest("tr");
          var nama = currentRow.find("td:eq(2)").text();
          var nopasien = currentRow.find("td:eq(1)").text();
          $('#main-title').text("Rekam Medik Pasien > "+ nama);
          $('#main-pages').load("<?php base_url(); ?>Rekammedik/detail/"+nopasien); 
        });
        $('#pasien-rekam').DataTable();
   });
 </script>
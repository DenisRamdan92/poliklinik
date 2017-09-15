<table id="pasien-rekam-detail" class="table table-hover">
  <thead>
    <tr>
    <th>No.</th>
    <th>Tanggal</th>
    <th style="display: none;">nopasien</th>
    <th>Nama Pasien</th>
    <th>Nama Dokter</th>
    <th style="display: none;">nopemeriksaan</th>
    <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php 
$i = 1;
  foreach ($rekamdetail as $rd)
  {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$rd['tglpendaftaran']."</td>";
    echo "<td style='display: none;'>".$rd['nopasien']."</td>";
    echo "<td>".$rd['namapass']."</td>";
    echo "<td>".$rd['namadokter']."</td>";
    echo "<td style='display: none;'>".$rd['nopemeriksaan']."</td>";
    echo "<td><div class='btn-group'><input type='button' value='View Diagnosa' id='vd' name='vd' class='btn btn-info btn-sm' /><input type='button' value='Tambah Rekam Medik' id='trm' name='trm' class='btn btn-success btn-sm' /></div></td>";
    echo "</tr>";
    $i++;
  }
 ?>     
  </tbody>
 </table>
  <!-- ============================= -->
 <div id="rekamtambah">
           <?php echo form_open('Rekammedik/tambah','method="post" id="tambahform" class="col-md-6"');?>
              <input type="hidden" id="nopem" name="nopem" class="form-control"/>
              <label name="kell">Tanggal Rekam Medik</label>
              <input type="date" class="form-control" id="trm" name="trm" autofocus required>
              <label name="kell">Catatan Rekam</label>
              <textarea id="cr" name="cr" class="form-control" style="width: 400px;height: 150px;" required></textarea>
              <br>
              <input type="submit" id="tambah" name="tambah" value="Tambah" class="btn btn-success" required/>
             </form>
 </div>
 <!-- ================================= -->
 <script type="text/javascript">
   $(function(){
    $('#rekamtambah').dialog({
          dialogClass : "alert",
          title : "Tambah Rekam",
          autoOpen : false,
          width : 450,
          height : 380,
          modal : true,
          resizable : false
        });
      $('#pasien-rekam-detail').on('click', '#trm', function(){
          var currentRow = $(this).closest("tr");
          var nama = currentRow.find("td:eq(3)").text();
          var nopemeriksaan = currentRow.find("td:eq(5)").text();
          $('#rekamtambah').dialog('open');
          $('#nopem').val(nopemeriksaan);
        });
      $('#pasien-rekam-detail').on('click', '#vd', function(){
          var currentRow = $(this).closest("tr");
          var nopasien = currentRow.find("td:eq(2)").text();
          var nopemeriksaan = currentRow.find("td:eq(5)").text();
          $('#main-pages').load("<?php base_url(); ?>Rekammedik/diagnosa/"+nopemeriksaan);
        });
      $('#cetak').click(function(){
        var currentRow = $('#pasien-rekam-detail').closest("tr");
        window.open('<?php echo base_url() ?>Rekammedik/Laporan/'+currentRow.find("td:eq(2)").text(),'_blank');
      });
   });
 </script>
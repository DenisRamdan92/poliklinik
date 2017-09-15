  <div class="btn-group">
  <button type="button" class="btn btn-success btn-sm" id="data" name="data"><span class="fa fa-upload" id="but"></span> Tambah</button>
  <button type="button" class="btn btn-info btn-sm" id="cetak" name="cetak" onclick="window.open('<?php echo base_url() ?>Poliklinik/laporan','_blank');"><span class="fa fa-print" id="but"></span> Cetak</button>
  </div>
  <hr>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
      <h2 id="titlepan"><i class="fa fa-list-ol"></i> Daftar <small>Poliklinik</small></h2>
      <div class="clearfix"></div>
     </div>
     <div class="x_content">
                    <table id="datajadwal" class="table table-hover">
  <thead>
    <tr>
    <th>No.</th>
    <th>Kode Poli</th>
    <th>Nama Poli</th>
    <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php 
$i = 1;
  foreach ($datapoli as $dp)
  {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$dp['kodepoli']."</td>";
    echo "<td>".$dp['namapoli']."</td>";
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
<div id="dt-poli">
    <div class="x_panel">
     <div class="x_content">
                    <?php echo form_open('Poliklinik/tambahpoli','method="post" id="tambahform"');?>
              <input type="hidden" id="kopo" name="kopo" class="form-control"/>
              <label name="jkl">Nama Poliklinik</label>
              <input type="text" id="np" name="np" class="form-control" placeholder="10 - 20 karakter" required/>
              <br>
              <button type="submit" class="btn btn-success btn-sm" id="submit" name="submit" required><span class="fa fa-upload" id="but"></span> Tambah</button>
             </form>
                  </div>
                  </div>
 </div>
 <!-- SCRIPT -->
 <script type="text/javascript">
      $(function(){
        $('#datajadwal').DataTable();
        $('#dt-poli').dialog({
          dialogClass : "alert",
          title : "Tambah Poliklinik",
          autoOpen : false,
          width : 250,
          modal : true,
          resizable : false
        });
        $('#data').click(function(){
          $('#dt-poli').dialog('open');
          $('.ui-dialog-title').html("Input Poliklinik");
          $('#np').val("");
          $('input[type=submit]').attr('id','submit');
          $('input[type=submit]').attr('value','Input');
        });
        $('#datajadwal').on('click', '#edit', function(){
          var currentRow = $(this).closest("tr");
          var kp = currentRow.find("td:eq(1)").text();
          var nama = currentRow.find("td:eq(2)").text();
          $('#dt-poli').dialog('open');
          $('input[type=submit]').attr('id','edit');
          $('input[type=submit]').attr('value','Edit');
          $('.ui-dialog-title').html("Edit Poliklinik");
          $('#tambahform').attr('action',"http://localhost/poliklinik2/Poliklinik/edit");
          $('#kopo').val(kp);
          $('#np').val(nama);
        });
      });                                                                   
    </script>
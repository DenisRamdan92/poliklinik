<div class="btn-group">
                      <button type="button" class="btn btn-success btn-xs" id="data" name="data"><span class="fa fa-list-ol"></span> Data Pasien</button>
                      <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#" id="hi">Hari Ini</a>
                        </li>
                        <li><a href="#" id="sd">Bulan Ini</a>
                        </li>
                      </ul>
                    </div>
                    <br><br>
                <!-- COTENT -->    
                <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 id="titlepan"><i class="fa fa-upload"></i> Tambah <small>Pasien</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php echo form_open('Pasien/tambahpasien','method="post" id="tambahform"');?> 
           <input type="hidden" name="nopasien" id="nopasien">
              <label name="namal" >Nama</label>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Pasien" required />
              <label name="alml">Alamat</label>
              <input type="text" id="alm" name="alm" class="form-control" placeholder="Alamat Pasien" required/>
              <label name="telpl">Telpon</label>
              <input type="number" id="telp" name="telp" class="form-control" min="0" placeholder="Nomor telpon pasien" required/>
              <label name="tglll">Tanggal Lahir</label>
              <input type="date" id="tgll" name="tgll" class="form-control" placeholder="10 - 20 karakter" required/>
              <label name="jkl">Jenis Kelamin</label>
              <select class="form-control" name="jk" id="jk" required>
                <option>L</option>
                <option>P</option>
              </select>
              <br>
              <button type="submit" class="btn btn-success btn-sm" id="submit" name="submit" required><span class="fa fa-upload" id="but"></span> Tambah</button>
             </form>
                  </div>

                  </div>
                </div>
              </div>
 <!-- =====================DATA SEMUA PASIEN====================== -->
 <div id="dt-pasien">
   <table id="datapasien" class="table table-hover">
  <thead>
    <th>No.</th>
    <th>No. pasien</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Telpon</th>
    <th>Tanggal Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Tgl Registrasi</th>
    <th width="120">Alat</th>
  </thead>
  <tbody>
    <?php 
    $i = 1;
    foreach ($datapasien as $dp)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$dp['nopasien']."</td>";
    echo "<td>".$dp['namapass']."</td>";
    echo "<td>".$dp['almpass']."</td>";
    echo "<td>".$dp['telppas']."</td>";
    echo "<td>".$dp['tgllahirpass']."</td>";
    echo "<td>".$dp['jeniskelpas']."</td>";
    echo "<td>".$dp['tglregistrasi']."</td>";
    echo "<td><div class='btn-group'><i id='edit' name='edit' class='btn btn-warning btn-sm fa fa-edit' title='Edit'></i><i id='riwayat' name='riwayat' class='btn btn-success btn-sm fa fa-history' title='Riwayat'></i><i id='hapus' name='hapus' class='btn btn-danger btn-sm fa fa-trash-o' title='Hapus'></i></div></td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>
 </table>
 </div>
 <!-- ======================DATA PASIEN HARI INI===================== -->
 <div id="dt-pasien-hariini">
 <h4>PERIODE <?php echo mdate('%d %M %y'); ?></h4>
 <button type="button" class="btn btn-success" id="cetak" name="cetak" onclick="window.open('<?php echo base_url() ?>Pasien/laporanhariini','_blank');"><span class="fa fa-print"></span> Cetak</button>
   <table id="datapasienhariini" class="table table-hover">
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
    foreach ($datapasienhariini as $ds)
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
 </div><!-- ======================Dialog Hapus===================== -->
 <div id="d-hapus">
 <p>Apakah anda yakin ingin menghapus data?</p>
   <table id="datapasienhapus" class="table table-stripped">
  <thead>
    <th>No.Pasien</th>
    <th>Nama</th>
  </thead>
  <tbody>
    <tr>
      <td id="nopas">no</td>
      <td id="nami">Name</td>
    </tr>
  </tbody>
 </table>
 </div>
 <!-- ======================DATA PASIEN BULAN INI===================== -->
 <div id="dt-pasien-sudah">
 <h4>PERIODE <?php echo mdate('%d %M %y'); ?></h4>
<button type="button" class="btn btn-success" id="cetakbulan" name="cetakbulan"><span class="fa fa-print"></span> Cetak</button>
 <br>
    <label name="namal" >Tanggal Awal</label>
    <input type="date" id="tglawal" name="tglawal" class="form-control" autofocus />
    <label name="alml">Tanggal Akhir</label>
    <input type="date" id="tglakhir" name="tglakhir" class="form-control"/>
 </div>
 <script type="text/javascript">
      $(function(){
        $('#datapasien').DataTable();
        $('#dt-pasien').dialog({
          dialogClass : "alert",
          title : "Data Pasien",
          autoOpen : false,
          width : 1200,
          height : 500,
          modal : true,
          resizable : false
        });
        $('#d-hapus').dialog({
          dialogClass : "alert",
          title : "Alert",
          autoOpen : false,
          width : 400,
          height : 235,
          modal : true,
          resizable : false,
          buttons : {
        "OKE" : function(){
          window.location = "http://localhost/poliklinik2/Pasien/hapus/"+$('#nopas').html();
        },
        "CANCEL" : function(){
          $("#d-hapus").dialog("close");
        }
        }
        });
          
        $('#dt-pasien-hariini').dialog({
          dialogClass : "alert",
          title : "Data Pasien Hari Ini",
          autoOpen : false,
          width : 1000,
          height : 500,
          modal : true,
          resizable : false
        });
        $('#dt-pasien-sudah').dialog({
          dialogClass : "alert",
          title : "Data Pasien Per Bulan",
          autoOpen : false,
          width : 250,
          height : 500,
          modal : true,
          resizable : false
        });
        $('#data').click(function(){
          $('#dt-pasien').dialog('open');
        });
        $('#hi').click(function(){
          $('#dt-pasien-hariini').dialog('open');
        });
        $('#sd').click(function(){
          $('#dt-pasien-sudah').dialog('open');
        });
        $('#cetakbulan').click(function(){
          window.open('<?php echo base_url() ?>Pasien/laporanbulan/'+$('#tglawal').val()+'/'+$('#tglakhir').val(),'_blank');
        });
        $('#datapasien').on('click', '#riwayat', function(){
          var currentRow = $(this).closest("tr");
          window.open('<?php echo base_url() ?>Pasien/laporanriwayat/'+currentRow.find("td:eq(1)").text(),'_blank');
        });
        $('#datapasien').on('click', '#hapus', function(){
          var currentRow = $(this).closest("tr");
          var no = currentRow.find("td:eq(1)").text();
          var nm = currentRow.find("td:eq(2)").text();
          $('#nopas').html(no);
          $('#nami').html(nm);
          $('#d-hapus').dialog('open');
        });
        $('#datapasien').on('click', '#edit', function(){
          var currentRow = $(this).closest("tr");
          var no = currentRow.find("td:eq(1)").text();
          var nama = currentRow.find("td:eq(2)").text();
          var alm = currentRow.find("td:eq(3)").text();
          var telp = currentRow.find("td:eq(4)").text();
          var tgl = currentRow.find("td:eq(5)").text();
          var jk = currentRow.find("td:eq(6)").text();
          $('button[type=submit]').attr('id','edit');
          $('button[type=submit]').attr('class','btn btn-warning btn-sm');
          $('button[type=submit]').html(" <span class='fa fa-edit' id='but'></span> Edit");
          $('#titlepan').html("<i class='fa fa-edit'></i> Edit <small>Pasien</small>");
          $('#nip').attr('readonly','readonly');
          $('#tambahform').attr('action',"http://localhost/poliklinik2/Pasien/edit");
          $('#nopasien').val(no);
          $('#nama').val(nama);
          $('#alm').val(alm);
          $('#telp').val(telp);
          $('#tgll').val(tgl);
          $('#jk').val(jk);
          $('#dt-pasien').dialog('close');
        });
      });                                                                   
    </script>
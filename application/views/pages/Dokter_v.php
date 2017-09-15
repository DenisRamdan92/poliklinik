<div>
<button type="button" class="btn btn-success btn-xs" id="data" name="data" required><span class="fa fa-list-ol" id="but"></span> Data Dokter</button>
</div>

  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
      <h2 id="titlepan"><i class="fa fa-upload"></i> Tambah <small>Dokter</small></h2>
      <div class="clearfix"></div>
     </div>
     <div class="x_content">
                    <?php echo form_open('dokter/tambahdokter','method="post" id="tambahform"');?>
           <input type="hidden" id="kode" name="kode" class="form-control"> 
              <label name="namal" >Nama</label>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama dokter" autofocus required/>
              <label name="alml">Kode Poliklinik</label>
              <div class="col-md-6 col-sm-6 col-xs-12 input-group">
              <input type="text" class="form-control" id="kopoli" name="kopoli" readonly required>
               <span class="input-group-btn">
                <button class="btn btn-success" type="button" id='ambilpoli'><span class="fa fa-search"></span></button>
               </span>
              </div>
              <input type="text" class="form-control" id="napoli" name="napoli" readonly required>
              <label name="alml">Alamat</label>
              <input type="text" id="alm" name="alm" class="form-control" placeholder="Alamat dokter" required/>
              <label name="telpl">Telpon</label>
              <input type="number" min="0" id="telp" name="telp" class="form-control" placeholder="Nomor telpon dokter" required/><br>
              <button type="submit" class="btn btn-success btn-sm" id="input" name="input" required><span class="fa fa-upload" id="but"></span> Tambah</button>
             </form>
                  </div>
                  </div>
                </div>

 <div id="dt-dokter">

<button type="button" class="btn btn-success btn-sm" id="cetak" name="cetak" onclick="window.open('<?php echo base_url() ?>Dokter/laporan','_blank');" class="btn btn-success btn-sm"><span class="fa fa-print"></span> Cetak</button>
 	<table id="datadokter" class="table table-hover">
  <thead>
 		<th>No.</th>
 		<th>Kode</th>
    <th>Kode Poli</th>
    <th>Nama Poli</th>
 		<th>Nama</th>
 		<th>Alamat</th>
 		<th>Telpon</th>
 		<th width="150">Aksi</th>
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
    echo "<td>".$dd['namapoli']."</td>";
		echo "<td>".$dd['namadokter']."</td>";
		echo "<td>".$dd['almdokter']."</td>";
		echo "<td>".$dd['telpdokter']."</td>";
		echo "<td><div class='btn-group'>
    <i id='edit' name='edit' class='btn btn-warning btn-sm fa fa-edit' title='Edit'></i><i id='hapus' name='hapus' class='btn btn-danger btn-sm fa fa-trash-o' title='Hapus'></i>
    </div></td>";
		echo "</tr>";
		$i++;
		}
 ?> 
 	</tbody>
 </table>
 </div>
 <!-- =================POLIKLINIK============ -->
 <div id="dt-poli-dokter">
  <table id="datapoli" class="table table-stripped">
  <thead>
    <th>No.</th>
    <th>Kode</th>
    <th>Nama Nama</th>
    <th>Aksi</th>
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
    echo "<td><button class='btn btn-success btn-sm' type='button' id='ambil' class='ambil'><span class='fa fa-chain'></span></button></td>";
    echo "</tr>";
    $i++;
    }
 ?> 
  </tbody>
 </table>
 </div>
 </div><!-- ======================Dialog Hapus===================== -->
 <div id="d-hapus">
 <p>Apakah anda yakin ingin menghapus data?</p>
   <table id="datapasienhapus" class="table table-hover">
  <thead>
    <th>Kode Dokter</th>
    <th>Nama</th>
  </thead>
  <tbody>
    <tr>
      <td id="kd">no</td>
      <td id="nm">Name</td>
    </tr>
  </tbody>
 </table>
 </div>
 <!-- ========================= -->
 <script type="text/javascript">
      $(function(){
        $('#datadokter').DataTable();
        $('#datapoli').DataTable();
        $('#dt-dokter').dialog({
          dialogClass : "alert",
          title : "Data Dokter",
          autoOpen : false,
          width : 800,
          height : 500,
          modal : true,
          resizable : false
        });
        $('#dt-poli-dokter').dialog({
          dialogClass : "alert",
          title : "Data Poliklinik",
          autoOpen : false,
          width : 500,
          height : 500,
          modal : true,
          resizable : false
        });
        $('#data').click(function(){
          $('#dt-dokter').dialog('open');
        });
        $('#ambilpoli').click(function(){
          $('#dt-poli-dokter').dialog('open');
        });

        $('#datadokter').on('click', '#edit', function(){
          var currentRow = $(this).closest("tr");
          var kode = currentRow.find("td:eq(1)").text();
          var poli = currentRow.find("td:eq(2)").text();
          var napoli = currentRow.find("td:eq(3)").text();
          var nama = currentRow.find("td:eq(4)").text();
          var alm = currentRow.find("td:eq(5)").text();
          var telp = currentRow.find("td:eq(6)").text();
          $('button[type=submit]').attr('id','edit');
          $('button[type=submit]').attr('class','btn btn-warning btn-sm');
          $('button[type=submit]').html(" <span class='fa fa-edit' id='but'></span> Edit");
          $('#tambahform').attr('action',"http://localhost/poliklinik2/dokter/edit");
          $('#kode').val(kode);
          $('#kopoli').val(poli);
          $('#napoli').val(napoli);
          $('#nama').val(nama);
          $('#alm').val(alm);
          $('#telp').val(telp);
          $('#dt-dokter').dialog('close');
        });
        $('#datapoli').on('click', '#ambil', function(){
          var currentRow = $(this).closest("tr");
          var poli = currentRow.find("td:eq(1)").text();
          var napoli = currentRow.find("td:eq(2)").text();
          $('#kopoli').val(poli);
          $('#napoli').val(napoli);
          $('#dt-poli-dokter').dialog('close');
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
          window.location = "http://localhost/poliklinik2/Dokter/hapus/"+$('#kd').html();
        },
        "CANCEL" : function(){
          $("#d-hapus").dialog("close");
        }
        }
        });
        $('#datadokter').on('click', '#hapus', function(){
          var currentRow = $(this).closest("tr");
          var no = currentRow.find("td:eq(1)").text();
          var nm = currentRow.find("td:eq(3)").text();
          $('#kd').html(no);
          $('#nm').html(nm);
          $('#d-hapus').dialog('open');
        });
      });                                                                   
    </script>
 
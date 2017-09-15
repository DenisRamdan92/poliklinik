<p><button type="button" class="btn btn-success btn-xs" id="data" name="data" required><span class="fa fa-list-ol" id="but"></span> Data Obat</button>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
      <h2 id="titlepan"><i class="fa fa-upload"></i> Tambah <small>Obat</small></h2>
      <div class="clearfix"></div>
     </div>
     <div class="x_content">
                    <?php echo form_open('obat/tambahobat','method="post" id="tambahform"');?>
              <input type="Hidden" id="kode" name="kode" class="form-control"/>
              <label name="namal">Nama Obat</label>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama obat" autofocus required/>
              <label name="merkl">Merk</label>
              <input type="text" id="merk" name="merk" class="form-control" placeholder="Merk obat" required />
              <label name="satuanl">Satuan</label>
              <input type="text" id="satuan" name="satuan" class="form-control" placeholder="Satuan" required/>
              <label name="satuanl">Stok</label>
              <input type="number" min="0" id="stok" name="stok" class="form-control" placeholder="Stok" required/>
              <label name="hargal">Harga Beli Persatuan</label>
              <div class="input-group">
          <span class="input-group-addon">Rp</span>
            <input type="number" min="0" class="form-control" id="harga" name="harga" required>
          <span class="input-group-addon">,00</span>
        </div>
              <button type="submit" class="btn btn-success btn-sm" id="input" name="input" required><span class="fa fa-upload" id="but"></span> Tambah</button>
             </form>
                  </div>
                  </div>
                </div>
 <!-- =========================== -->
 <div id="dt-obat">
 
<button type="button" class="btn btn-success btn-sm" id="print" name="print" onclick="window.open('<?php echo base_url() ?>Obat/laporan','_blank');"><span class="fa fa-print"></span> Cetak</button>
 	<table id="dataobat" class="table table-hover">
 	<thead>
 		<th>No.</th>
 		<th>Kode</th>
 		<th>Nama Obat</th>
 		<th>Merk</th>
 		<th>Satuan</th>
    <th>Stok</th>
 		<th>Harga</th>
 		<th>Alat</th>
 	</thead>
 	<tbody>
 	<?php 
		$i = 1;
		foreach ($dataobat as $do)
		{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$do['kodeobat']."</td>";
		echo "<td>".$do['namaobat']."</td>";
		echo "<td>".$do['merk']."</td>";
		echo "<td>".$do['satuan']."</td>";
    echo "<td>".$do['stok']."</td>";
		echo "<td>".$do['hargajual']."</td>";
		echo "<td><div class='btn-group'><i id='edit' name='edit' class='btn btn-warning btn-sm fa fa-edit' title='Edit'></i><i id='hapus' name='hapus' class='btn btn-danger btn-sm fa fa-trash-o' title='Hapus'></i></div></td>";
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
   <table id="datapasienhapus" class="table table-stripped">
  <thead>
    <th>No.Obat</th>
    <th>Nama</th>
  </thead>
  <tbody>
    <tr>
      <td id="nobat">no</td>
      <td id="nabat">Name</td>
    </tr>
  </tbody>
 </table>
 </div>
 <!-- SCRIPT -->
 <script type="text/javascript">
      $(function(){
        $('#dataobat').DataTable();
        $('#dt-obat').dialog({
          dialogClass : "alert",
          title : "Data Obat",
          autoOpen : false,
          width : 700,
          height : 500,
          modal : true,
          resizable : false
        });
        $('#data').click(function(){
          $('#dt-obat').dialog('open');
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
          window.location = "http://localhost/poliklinik2/Obat/hapus/"+$('#nobat').html();
        },
        "CANCEL" : function(){
          $("#d-hapus").dialog("close");
        }
        }
        });
        $('#dataobat').on('click', '#hapus', function(){
          var currentRow = $(this).closest("tr");
          var no = currentRow.find("td:eq(1)").text();
          var nm = currentRow.find("td:eq(2)").text();
          $('#nobat').html(no);
          $('#nabat').html(nm);
          $('#d-hapus').dialog('open');
        });
        $('#dataobat').on('click', '#edit', function(){
          var currentRow = $(this).closest("tr");
          var kode = currentRow.find("td:eq(1)").text();
          var nama = currentRow.find("td:eq(2)").text();
          var merk = currentRow.find("td:eq(3)").text();
          var satuan = currentRow.find("td:eq(4)").text();
          var stok = currentRow.find("td:eq(5)").text();
          var harga = currentRow.find("td:eq(6)").text();
          $('button[type=submit]').attr('id','edit');
          $('button[type=submit]').attr('class','btn btn-warning btn-sm');
          $('button[type=submit]').html(" <span class='fa fa-edit' id='but'></span> Edit");
          $('#tambahform').attr('action',"http://localhost/poliklinik2/Obat/edit");
          $('#kode').val(kode);
          $('#nama').val(nama);
          $('#merk').val(merk);
          $('#satuan').val(satuan);
          $('#harga').val(harga);
          $('#stok').val(stok);
          $('#dt-obat').dialog('close');
        });
      });                                                                   
    </script>
<div>
<p><button type="button" class="btn btn-success btn-xs" id="data" name="data" required><span class="fa fa-list-ol" id="but"></span> Data Pemeriksaan</button></p>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
      <h2 id="titlepan"><i class="fa fa-upload"></i> Tambah <small>Pemeriksaan</small></h2>
      <div class="clearfix"></div>
     </div>
     <div class="x_content">
                    <?php echo form_open('Pemeriksaan/tambahdata','method="post" id="tambahform"');?> 
              <label name="nol" >No. Pendaftaran</label>
              <div class="input-group col-md-8">
              <input type="text" class="form-control" id="kode" name="kode" readonly>
               <span class="input-group-btn">
                <button class="btn btn-success" type="button" id="modalb"><span class="fa fa-search"></span></button>
               </span>
              </div>
              <label name="kell">Nama Pasien</label>
              <input type="text" class="form-control" id="namapass" name="namapass" readonly>
              <label name="kell">Keluhan</label>
              <textarea id="kel" name="kel" class="form-control" placeholder="Text"></textarea>
              <label name="diagl">Diagnosa</label>
              <textarea id="diag" name="diag" class="form-control" placeholder="text"></textarea>
              <label name="perl">Perawatan</label>
              <textarea id="per" name="per" class="form-control" placeholder="text"></textarea>
              <label name="tinl">Tindakan</label>
              <textarea id="tin" name="tin" class="form-control" placeholder="Text"></textarea>
              <label name="bbl" >Berat Badan</label>
              <div class="input-group">
              <input type="number" min="0" id="bb" name="bb" class="form-control" placeholder="Berat badan pasien"/>
              <span class="input-group-addon">Kg</span>
              </div>
              <label name="tdl" >Tensi Diastolik</label>
              <div class="input-group">
              <input type="number" min="0" id="td" name="td" class="form-control" placeholder="Tensi diastolik pasien"/>
                <span class="input-group-addon">mmHg</span>
              </div>
              <label name="tsl" >Tensi Sistolik</label>
              <div class="input-group">
              <input type="number" min="0" id="ts" name="ts" class="form-control" placeholder="Tensi sistolik pasien"/>
              <span class="input-group-addon">mmHg</span>
              </div>
                  </div>
                  </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
      <h2 id="titlepan"><i class="fa fa-upload"></i> Tambah <small>Perawatan</small></h2>
      <div class="clearfix"></div>
     </div>
     <div class="x_content">
              <form>
                <div class="login" style="background: white;">
              <label name="idl" >ID Biaya</label>
              <div class="input-group col-md-6">
              <input type="text" class="form-control" id="ib" name="ib" readonly>
               <span class="input-group-btn">
                <button class="btn btn-success" type="button" id="cari"><span class="fa fa-search"></span></button>
               </span>
              </div>
              <input type="text" class="form-control" id="namabiaya" name="namabiaya" readonly>
              <label name="hargal">Tarif</label>
              <div class="input-group">
                <span class="input-group-addon">Rp</span>
              <input type="text" min="0" class="form-control" id="tarif" name="tarif">
                <span class="input-group-addon">,00</span>
              </div>
              <button type="button" class="btn btn-success" id="tambah" name="tambah" required><span class="fa fa-plus"></span></button>
              </div>
              <!-- table dan form detail input -->
              <table id="det" class="table table-stripped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Id Jenis Biaya</th>
              <th>Nama Biaya</th>
              <th>tarif</th>
              <th>Aksi</th>
            </tr>
          </thead>
      <tbody>
    
      </tbody>
        </table>
        <label name="merkl">Jumlah Biaya</label>
        <div class="input-group">
          <span class="input-group-addon">Rp</span>
            <input type="text" min="0" class="form-control" id="jh" name="jh" readonly>
          <span class="input-group-addon">,00</span>
        </div>
        <input type="hidden" id="count" name="count" class="form-control"/>
        <br>
        <button type="submit" class="btn btn-success btn-sm" id="submit" name="submit" required><span class="fa fa-upload" id="but"></span> Tambah</button>
        </form>
                  </div>
                  </div>
                </div>
 <!-- ============================================ -->
 <div  id="dt-pendaftaran-pemeriksaan" style="">
        <table id="nopen" class="table table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>No. Pendaftaran</th>
              <th>No. Pasien</th>
              <th>Nama</th>
              <th>Aksi</th>
            </tr>
          </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach ($lihatno as $ln)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td id='nn'>".$ln['nopendaftaran']."</td>";
    echo "<td>".$ln['nopasien']."</td>";
    echo "<td>".$ln['namapass']."</td>";
    echo "<td><button class='btn btn-success' id='ambil' type='button'><span class='fa fa-chain'></span></button></td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>
        </table>
      </div>
<!-- ========================================= -->
<div id="dt-pemeriksaan" style="">
	<table id="datapem" class="table table-hover">
	<thead>
		<tr>
		<th>No.</th>
		<th>No. Pemeriksaan</th>
		<th>No. Pendaftaran</th>
    <th>No. Pasien</th>
    <th>Nama Pasien</th>
		<th>Keluhan</th>
		<th>Diagnosa</th>
		<th>Perawatan</th>
		<th>Tindakan</th>
		<th>Berat Badan</th>
		<th>Tensi Diastolik</th>
		<th>Tensi Sistolik</th>
		</tr>
	</thead>
	<tbody id="tbod">
		<?php 
 		$i = 1;
		foreach ($datapemeriksaan as $dp)
		{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$dp['nopemeriksaan']."</td>";
		echo "<td>".$dp['nopendaftaran']."</td>";
    echo "<td>".$dp['nopasien']."</td>";
    echo "<td>".$dp['namapass']."</td>";
		echo "<td>".$dp['keluhan']."</td>";
		echo "<td>".$dp['id_diagnosa']."</td>";
		echo "<td>".$dp['perawatan']."</td>";
		echo "<td>".$dp['tindakan']."</td>";
		echo "<td>".$dp['beratbadan']."</td>";
		echo "<td>".$dp['tensidiastolik']."</td>";
		echo "<td>".$dp['tensisistolik']."</td>";
		echo "</tr>";
		$i++;
		}
 		 ?>
	</tbody>
</table>
</div>
<!-- ===============PEMBAYARAN============ -->
<div  id="dt-perawatan" style="">
        <table id="datapembayaran" class="table table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>ID Biaya</th>
              <th>Nama Biaya</th>
              <th>tarif</th>
              <th>Aksi</th>
            </tr>
          </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach ($pembayaran as $ln)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td id='nn'>".$ln['idjenisbiaya']."</td>";
    echo "<td>".$ln['namabiaya']."</td>";
    echo "<td>".$ln['tarif']."</td>";
    echo "<td><button class='btn btn-success' id='ambil' name='ambil' type='button'><span class='fa fa-chain'></span></button></td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>
        </table>
      </div>
<script type="text/javascript">
      $(function(){
        var count = 0;
        var totalharga = 0;
        $('#datapem').DataTable();
        $('#nopen').DataTable();
        $('#dt-pemeriksaan').dialog({
          dialogClass : "alert",
          title : "Data Pemeriksaan",
          autoOpen : false,
          width : 1000,
          height : 600,
          modal : true,
          resizable : false
        });
        $('#dt-pendaftaran-pemeriksaan').dialog({
          dialogClass : "alert",
          title : "Data Pendaftaran",
          autoOpen : false,
          width : 600,
          modal : true,
          resizable : false
        });
        $('#modalb').click(function(){
          $('#dt-pendaftaran-pemeriksaan').dialog('open');
        });
        $('#data').click(function(){
          $('#dt-pemeriksaan').dialog('open');
        });

        $('#nopen').on('click', '#ambil', function(){
          var currentRow = $(this).closest("tr");
          var no = currentRow.find("td:eq(1)").text();
          var namapass = currentRow.find("td:eq(3)").text();
          $('#kode').val(no);
          $('#namapass').val(namapass);
          $('#dt-pendaftaran-pemeriksaan').dialog('close');
        });
        $('#tambah').click(function(){
          adddata();
        });
        function resetform()
        {
          $('#ib').val('');
          $('#tarif').val('');
          $('#namabiaya').val('');
          $('#cari').focus();
        }
        function adddata()
        {
          count++;
          $('#count').val(count);
          var ib = $('#ib').val();
          var namabiaya = $('#namabiaya').val();
          var tarif = parseFloat($('#tarif').val());
          var row = "<tr>";
          row += "<td>"+count+"</td>";
          row += "<td><input type='text' style='border:none;' id='npp"+count+"' name='npp"+count+"' value='"+ib+"'></td>";
          row += "<td><input type='text' style='border:none;' id='nb"+count+"' name='nb"+count+"' value='"+namabiaya+"'></td>";
          row += "<td><input type='text' style='border:none;' id='tariff"+count+"' name='tariff"+count+"' value='"+tarif+"'></td>";
          row += "<td><i id='hapus' name='hapus' class='btn btn-danger btn-sm fa fa-trash-o' title='Hapus'></td>"; 
          row += "</tr>";
          $('#det tbody').append(row);
          totalharga += tarif;
          $('#jh').val(totalharga);
          resetform()
        }
        $('#det').on('click', '#hapus', function(){
          removedata(this);
        });
        function removedata(row)
        {
          count--;
          $('#count').val(count);
          var cRow = $(row).closest('tr');
          var cHarga = cRow.find("td:eq(3) input").val();
          totalharga -= cHarga;
          cRow.remove();
          $('#jh').val(totalharga);
        }
        $('#cari').click(function(){
          $('#dt-perawatan').dialog('open');
        });
        $('#dt-perawatan').dialog({
          dialogClass : "alert",
          title : "Data Jenis Perawatan",
          autoOpen : false,
          width : 600,
          modal : true,
          resizable : false
        });
        $('#datapembayaran').on('click', '#ambil', function(){
          var currentRow = $(this).closest("tr");
          var idbiaya = currentRow.find("td:eq(1)").text();
          var namabiaya = currentRow.find("td:eq(2)").text();
          var tarif = currentRow.find("td:eq(3)").text();
          $('#ib').val(idbiaya);
          $('#tarif').val(tarif);
          $('#namabiaya').val(namabiaya);
          $('#dt-perawatan').dialog('close');
          $('#tambah').focus();
        });
      });                                                                   
    </script>
 
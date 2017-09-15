<div>
<p><input type="submit" value="Data" id="data" name="data" class="btn btn-success btn-sm" /></p>
</div>
<h4>Pemeriksaan</h4>
<div class="login col-md-6" style="background: white;">
           <?php echo form_open('dokter/tambahdokter','method="post" id="tambahform"');?>
              <label name="idl" >No. Pendaftaran</label>
              <div class="input-group">
              <input type="text" class="form-control" id="np" name="np" readonly>
               <span class="input-group-btn">
                <button class="btn btn-success" type="button" id="carip">Cari!</button>
               </span>
              </div>
              <hr>
              <label name="idl" >ID Biaya</label>
              <div class="input-group">
              <input type="text" class="form-control" id="ib" name="ib" readonly>
               <span class="input-group-btn">
                <button class="btn btn-success" type="button" id="cari">Cari!</button>
               </span>
              </div>
              <h4>Perawatan</h4>
              <label name="hargal">Tarif</label>
              <div class="input-group">
                <span class="input-group-addon">Rp</span>
              <input type="number" min="0" class="form-control" id="tarif" name="tarif">
                <span class="input-group-addon">,00</span>
              </div>
              <input type="button" value="Tambah" id="tambah" name="tambah" class="btn btn-success" />
             </form>
 </div>
 <form action="<?php echo site_url() ?>Pembayaran/tambahdata" id="f-detail" method="post">
          <table id="det" class="table table-bordered">
          <thead>
            <tr>
              <th>No.</th>
              <th>Id Jenis Biaya</th>
              <th>tarif</th>
              <th>Alat</th>
            </tr>
          </thead>
      <tbody>
    
      </tbody>
        </table>
        <label name="merkl">Jumlah Harga</label>
        <div class="input-group col-md-6">
          <span class="input-group-addon">Rp</span>
            <input type="number" min="0" class="form-control" id="jh" name="jh">
          <span class="input-group-addon">,00</span>
        </div>
        <input type="submit" name="input" id="input" class="btn btn-success" value="Input">
        <input type="hidden" id="count" name="count" class="form-control" placeholder="1 - 50 karakter" />
        <input type="hidden" class="form-control" id="nppp" name="nppp">
    </form>
 <!-- ======================================== -->
 <div  id="dt-pembayaran" style="">
        <table id="datapembayaran" class="table table-stripped">
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
    echo "<td><button class='btn btn-success btn-xs' id='ambil' name='ambil' type='button'>Ambil</button></td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>
        </table>
      </div>
<!-- ================================ -->
<div  id="dt-pendaftaran" style="">
        <table id="datapendaftaran" class="table table-stripped">
          <thead>
            <tr>
              <th>No.</th>
              <th>No.Pendaftaran</th>
              <th>Kode jadwal</th>
              <th>NIP</th>
              <th>No.Pasien</th>
              <th>Tgl. Pendaftaran</th>
              <th>No. Urut</th>
              <th>Aksi</th>
            </tr>
          </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach ($nopendaftaran as $nf)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td id='nn'>".$nf['nopendaftaran']."</td>";
    echo "<td>".$nf['kodejadwal']."</td>";
    echo "<td>".$nf['nip']."</td>";
    echo "<td>".$nf['nopasien']."</td>";
    echo "<td>".$nf['tglpendaftaran']."</td>";
    echo "<td>".$nf['nourut']."</td>";
    echo "<td><button class='btn btn-success btn-xs' id='ambilp' name='ambilp' type='button'>Ambil</button></td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>
        </table>
      </div>
<!-- ================================ -->
<div  id="dt-detail" style="">
        <table id="datadetail" class="table table-stripped">
          <thead>
            <tr>
              <th>No.</th>
              <th>ID Detail</th>
              <th>ID Jenis Biaya</th>
              <th>No. Pendaftaran</th>
              <th>Tarif</th>
            </tr>
          </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach ($detail as $dt)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td id='nn'>".$dt['iddetailbiaya']."</td>";
    echo "<td>".$dt['idjenisbiaya']."</td>";
    echo "<td>".$dt['nopendaftaran']."</td>";
    echo "<td>".$dt['tarif']."</td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>
        </table>
      </div>
<!-- ================================ -->
<script type="text/javascript">
      $(function(){
        var count = 0;
        var totalharga = 0;
        $('#datapembayaran').DataTable();
        $('#datapendaftaran').DataTable();
        $('#datadetail').DataTable();
        $('#dt-pembayaran').dialog({
          dialogClass : "alert",
          title : "Data Jenis Pembayaran",
          autoOpen : false,
          width : 600,
          modal : true,
          resizable : false
        });
        $('#dt-detail').dialog({
          dialogClass : "alert",
          title : "Data Detail",
          autoOpen : false,
          width : 600,
          modal : true,
          resizable : false
        });
        $('#dt-pendaftaran').dialog({
          dialogClass : "alert",
          title : "Data Pendaftaran",
          autoOpen : false,
          width : 1000,
          modal : true,
          resizable : false
        });
        $('#cari').click(function(){
          $('#dt-pembayaran').dialog('open');
        });
        $('#data').click(function(){
          $('#dt-detail').dialog('open');
        });
        $('#carip').click(function(){
          $('#dt-pendaftaran').dialog('open');
        });

        $('#datapembayaran').on('click', '#ambil', function(){
          var currentRow = $(this).closest("tr");
          var idbiaya = currentRow.find("td:eq(1)").text();
          var tarif = currentRow.find("td:eq(3)").text();
          $('#ib').val(idbiaya);
          $('#tarif').val(tarif);
          $('#dt-pembayaran').dialog('close');
        });
        $('#datapendaftaran').on('click', '#ambilp', function(){
          var currentRow = $(this).closest("tr");
          var nopen = currentRow.find("td:eq(1)").text();
          $('#np').val(nopen);
          $('#dt-pendaftaran').dialog('close');
          var nopens = $('#np').val();
          $('#nppp').val(nopens);
        });
        $('#tambah').click(function(){
          adddata();
        });
        function resetform()
        {
          $('#ib').val('');
          $('#tarif').val('');
          $('#cari').focus();
        }
        function adddata()
        {
          count++;
          $('#count').val(count);
          var ib = $('#ib').val();
          var tarif = parseFloat($('#tarif').val());
          var row = "<tr>";
          row += "<td>"+count+"</td>";
          row += "<td><input type='text' style='border:none;' id='npp"+count+"' name='npp"+count+"' value='"+ib+"'></td>";
          row += "<td><input type='text' style='border:none;' id='tariff"+count+"' name='tariff"+count+"' value='"+tarif+"'></td>";
          row += "<td><input type='button' value='Hapus' id='hapus' name='hapus' class='btn btn-success btn-xs' /></td>"; 
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
          var cHarga = cRow.find("td:eq(2)").text();
          totalharga -= cHarga;
          cRow.remove();
          $('#jh').val(totalharga);
        }
      });                                                                   
    </script>
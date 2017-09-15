<div class="login col-md-3" style="background: white;">
           <?php echo form_open('resep/tambahresep','method="post" id="tambahform"');?>
              <label name="namal">No. Pemeriksaan</label>
              <div class="input-group col-md-9">
            	<input type="text" class="form-control" id="nopem" name="nopem" readonly>
           		 <span class="input-group-btn">
            		<button class="btn btn-success" type="button" id='ambilp'>Ambil</button>
           		 </span>
          	  </div>
              <input type="text" class="form-control" id="napem" name="napem" readonly>
              <hr>
              <label name="kodel" >Kode Obat</label>
              <div class="input-group">
            	<input type="text" class="form-control" id="ko" name="ko" readonly>
           		 <span class="input-group-btn">
            		<button class="btn btn-success" type="button" id='ambilm'>Ambil</button>
           		 </span>
          	  </div>
              <label name="namal">Nama Obat</label>
              <input type="text" id="naob" name="naob" class="form-control" readonly />
              <label name="namal">Merk Obat</label>
              <input type="text" id="merob" name="merob" class="form-control" readonly />
              <label name="namal">Harga Satuan</label>
              <div class="input-group">
                <span class="input-group-addon">Rp</span>
                <input type="number" min="1" class="form-control" id="harga" name="harga" readonly="">
                <span class="input-group-addon">,00</span>
              </div>
              <label name="namal">Jumlah</label>
              <input type="number" min="1" id="jml" name="jml" class="form-control" />
              <label name="merkl">Dosis</label>
              <div class="input-group">
              <input type="number" min="1" class="form-control" id="dosis" name="dosis" required>
              <span class="input-group-addon"> X sehari</span>
              </div>
              <br>
              <button class='btn btn-success btn-xs' id='tambah' type='button'>Tambah</button>
             </form><hr>
             <form action="<?php echo site_url() ?>Resep/tambahresep" id="f-detail" method="post">
             <table id="det" class="table table-stripped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Kode Obat</th>
              <th>Jumlah</th>
              <th>Harga</th>
              <th>Dosis</th>
              <th>Alat</th>
            </tr>
          </thead>
    	<tbody>
    
  		</tbody>
        </table>
        <label name="merkl">Jumlah Harga</label>
              <input type="number" id="jh" name="jh" class="form-control" /><br>
        <input type="submit" name="input" id="input" class="btn btn-success" value="Input">
        <input type="hidden" name="nopem-clon" id="nopem-clon" value="Input">
        <input type="hidden" id="count" name="count" class="form-control" placeholder="1 - 50 karakter" />
    </form>
 </div>
 <!-- =====================Pemeriksaan===================== -->
  <div  id="dt-pemeriksaan-resep" style="">
        <table id="pemeriksaantable" class="table table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>No. pemeriksaan</th>
              <th>No. Pendaftaran</th>
              <th>No. Pasien</th>
              <th>Nama Pasien</th>
              <th>Alat</th>
            </tr>
          </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach ($pemeriksaan as $pr)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$pr['nopemeriksaan']."</td>";
    echo "<td>".$pr['nopendaftaran']."</td>";
    echo "<td>".$pr['nopasien']."</td>";
    echo "<td>".$pr['namapass']."</td>";
    echo "<td><button class='btn btn-success btn-xs' id='ambilp' type='button' autofocus>Ambil</button></td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>
        </table>
</div>
 <!-- =====================Obat===================== -->
 <div  id="dt-obat-resep" style="">
        <table id="odet" class="table table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>Kode Obat</th>
              <th>Nama Obat</th>
              <th>Merk</th>
              <th>Satuan</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Aksi</th>
            </tr>
          </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach ($obat as $o)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$o['kodeobat']."</td>";
    echo "<td>".$o['namaobat']."</td>";
    echo "<td>".$o['merk']."</td>";
    echo "<td>".$o['satuan']."</td>";
    echo "<td>".$o['hargajual']."</td>";
    echo "<td>".$o['stok']."</td>";
    echo "<td><button class='btn btn-success btn-xs' id='ambil' type='button' autofocus>Ambil</button></td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>
        </table>
</div>
<script type="text/javascript">
      $(document).ready(function(){
        var jmlharga = 0;
        var count = 0;
        var totalharga = 0;
        $('#pemeriksaantable').DataTable();
        $('#dataresep').DataTable();
        $('#odet').DataTable();
        $('#dt-detail').dialog({
          dialogClass : "alert",
          title : "Detail",
          autoOpen : false,
          width : 800,
          modal : true,
          resizable : false
        });

        $('#ambilm').click(function(){
          $('#dt-obat-resep').dialog('open');
        });

        $('#dt-obat-resep').dialog({
          dialogClass : "alert",
          title : "Data Obat",
          autoOpen : false,
          width : 800,
          modal : true,
          resizable : false
        });

        $('#ambilp').click(function(){
          $('#dt-pemeriksaan-resep').dialog('open');
        });

        $('#dt-pemeriksaan-resep').dialog({
          dialogClass : "alert",
          title : "Data Pemeriksaan",
          autoOpen : false,
          width : 800,
          modal : true,
          resizable : false
        });

        $('#odet').on('click', '#ambil', function(){
          var currentRow = $(this).closest("tr");
          var no = currentRow.find("td:eq(1)").text();
          var hr = currentRow.find("td:eq(5)").text();
          var naob = currentRow.find("td:eq(2)").text();
          var merob = currentRow.find("td:eq(3)").text();
          $('#ko').val(no);
          $('#harga').val(hr);
          $('#naob').val(naob);
          $('#merob').val(merob);
          $('#dt-obat-resep').dialog('close');
          $('#jml').focus();
        });
       
       $('#pemeriksaantable').on('click', '#ambilp', function(){
          var currentRow = $(this).closest("tr");
          var no = currentRow.find("td:eq(1)").text();
          var nama = currentRow.find("td:eq(4)").text();
          $('#nopem').val(no);
          $('#nopem-clon').val(no);
          $('#napem').val(nama);
          $('#dt-pemeriksaan-resep').dialog('close');
        });

        function resetform()
        {
          $('#ko').val('');
          $('#jml').val('');
          $('#dosis').val('');
          $('#harga').val('');
          $('#ambilm').focus();
        }

        $('#tambah').click(function(){
          adddata();
        });

        function adddata()
        {
          count++;
          $('#count').val(count);
          var kode = $('#ko').val();
          var jml = $('#jml').val();
          var harga = $('#harga').val();
          var dosis = $('#dosis').val();
          var jmlharga = harga * jml;
          var row = "<tr>";
          row += "<td>"+count+"</td>";
          row += "<td><input type='text' style='border:none;' id='kode"+count+"' name='kode"+count+"' value='"+kode+"'></td>";
          row += "<td><input type='text' style='border:none;' id='jml"+count+"' name='jml"+count+"' value='"+jml+"'></td>";
          row += "<td><input type='text' style='border:none;' id='harga"+count+"' name='harga"+count+"' value='"+harga+"'></td>";
          row += "<td><input type='text' style='border:none;' id='ds"+count+"' name='ds"+count+"' value='"+dosis+"'></td>";
          row += "<td><a class='hapus' style='border:none;' id='hapus' style='cursor:pointer'>Hapus</a></td>";
          row += "</tr>";
          
          $('#det tbody').append(row);
          totalharga += jmlharga;
          $('#jh').val(totalharga);
          resetform()
        }
        $('#det').on('click', '.hapus', function(){
          removedata(this);
        });
        function removedata(row)
        {
          count--;
          $('#count').val(count);
          var cRow = $(row).closest('tr');
          var cHarga = cRow.find("td:eq(3) input").val();
          var cJumlah = cRow.find("td:eq(2) input").val();
          totalharga -= cHarga * cJumlah;
          cRow.remove();
          $('#jh').val(totalharga);
        }
        $('#nores').on('keyup', function(){
          var text = $('#nores').val();
          $('#noress').val(text);
        });
      });
    </script>
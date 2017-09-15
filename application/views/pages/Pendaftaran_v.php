<div>
<p><button type="button" class="btn btn-success btn-xs" id="data" name="data" required><span class="fa fa-list-ol" id="but"></span> Data Pendaftaran</button></p>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
      <h2 id="titlepan"><i class="fa fa-upload"></i> Tambah <small>Pendaftaran</small></h2>
      <div class="clearfix"></div>
     </div>
     <div class="x_content">
                    <?php echo form_open('Pendaftaran/tambahdaftar','method="post" id="tambahform"');?>
          <label name="nol" >Kode Jadwal</label>
          <div class="input-group col-md-8">
            <input type="text" class="form-control" id="kode" name="kode" readonly>
           <span class="input-group-btn">
            <button class="btn btn-success" type="button" id="jad"><span class="fa fa-search"></span></button>
           </span>
          </div>
          <label name="nol" >Nama Dokter</label>
          <input type="text" class="form-control" id="namadokter" name="namadokter" readonly>
          <hr>
          <label name="kell">No Pasien</label>
          <div class="input-group col-md-8">
            <input type="text" class="form-control" id="nopas" name="nopas" readonly>
           <span class="input-group-btn">
            <button class="btn btn-success" type="button" id="pas"><span class="fa fa-search"></span></button>
           </span>
          </div>
          <label name="nol" >Nama Pasien</label>
          <input type="text" class="form-control" id="namapasien" name="namapasien" readonly><hr>
            <button type="submit" class="btn btn-success btn-sm" id="submit" name="submit" required><span class="fa fa-upload" id="but"></span> Tambah</button>
        </form>
                  </div>
                  </div>
                </div>

 <!-- ==========================JADWAL==================== -->
 <div  id="dt-jadwal-pendaftaran" style="">
        <table id="kj" class="table table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>Kode Jadwal</th>
              <th>Kode Dokter</th>
              <th>Nama Dokter</th>
              <th>Nama Poli</th>
              <th>Hari</th>
              <th>Jam Mulai</th>
              <th>Jam Selesai</th>
              <th>Aksi</th>
            </tr>
          </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach ($jadwal as $jw)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td id='nn'>".$jw['kodejadwal']."</td>";
    echo "<td>".$jw['kodedokter']."</td>";
    echo "<td>".$jw['namadokter']."</td>";
    echo "<td>".$jw['namapoli']."</td>";
    echo "<td>".$jw['hari']."</td>";
    echo "<td>".$jw['jammulai']."</td>";
    echo "<td>".$jw['jamselesai']."</td>";
    echo "<td><button class='btn btn-success btn-sm' id='ambilj' type='button'><span class='fa fa-chain'></span></button></td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>
        </table>
</div>
<!-- =====================PASIEN================ -->
<div  id="dt-pasien-pendaftaran" style="">
        <table id="np" class="table table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>No.Pasien</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Telpon</th>
              <th>Tgl Lahir</th>
              <th>JK</th>
              <th>Tgl Registrasi</th>
              <th>Aksi</th>
            </tr>
          </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach ($pasien as $ps)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td id='nn'>".$ps['nopasien']."</td>";
    echo "<td>".$ps['namapass']."</td>";
    echo "<td>".$ps['almpass']."</td>";
    echo "<td>".$ps['telppas']."</td>";
    echo "<td>".$ps['tgllahirpass']."</td>";
    echo "<td>".$ps['jeniskelpas']."</td>";
    echo "<td>".$ps['tglregistrasi']."</td>";
    echo "<td><button class='btn btn-success btn-sm' id='ambilp' type='button'><span class='fa fa-chain'></span></button></td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>
        </table>
      </div>
<!-- ======================================================= -->
<div  id="dt-pendaftaran" style="">
    <table id="pn" class="table table-hover">
    <thead>
    <tr>
    <th>No.</th>
    <th>No. Pendaftaran</th>
    <th>Kode Jadwal</th>
    <th>ID Pegawai</th>
    <th>nopasien</th>
    <th>Nama Pasien</th>
    <th>tglpendaftaran</th>
    <th>No. Urut</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 1;
    foreach ($datadaftar as $dp)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$dp['nopendaftaran']."</td>";
    echo "<td>".$dp['kodejadwal']."</td>";
    echo "<td>".$dp['idpegawai']."</td>";
    echo "<td>".$dp['nopasien']."</td>";
    echo "<td>".$dp['namapass']."</td>";
    echo "<td>".$dp['tglpendaftaran']."</td>";
    echo "<td>".$dp['nourut']."</td>";
    echo "</tr>";
    $i++;
    }
     ?>
  </tbody>

      </div>
<!-- ======================================================= -->
      <script type="text/javascript">
  $(function(){

    //PENDAFTARAN
    $('#kj').DataTable();
        $('#np').DataTable();
        $('#pn').DataTable();

       $('#dt-pasien-pendaftaran').dialog({
          dialogClass : "alert",
          title : "Data Pasien",
          autoOpen : false,
          width : 1000,
          modal : true,
          resizable : false
        });
        $('#dt-jadwal-pendaftaran').dialog({
          dialogClass : "alert",
          title : "Data Jadwal",
          autoOpen : false,
          width : 1000,
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
        $('#data').click(function(){
          $('#dt-pendaftaran').dialog('open');
        });
        $('#pas').click(function(){
          $('#dt-pasien-pendaftaran').dialog('open');
        });

        $('#jad').click(function(){
          $('#dt-jadwal-pendaftaran').dialog('open');
        });

        $('#kj').on('click', '#ambilj', function(){
          var currentRow = $(this).closest("tr");
          var no = currentRow.find("td:eq(1)").text();
          var namadokter = currentRow.find("td:eq(3)").text();
          $('#kode').val(no);
          $('#namadokter').val(namadokter);
          $('#dt-jadwal-pendaftaran').dialog('close');
        });
        $('#np').on('click', '#ambilp', function(){
          var currentRow = $(this).closest("tr");
          var no = currentRow.find("td:eq(1)").text();
          var namapasien = currentRow.find("td:eq(2)").text();
          $('#nopas').val(no);
          $('#namapasien').val(namapasien);
          $('#dt-pasien-pendaftaran').dialog('close');
        });
        //END OF PENDAFTARAN
  });
</script>
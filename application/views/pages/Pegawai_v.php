<div>
<p><button type="button" class="btn btn-success btn-xs" id="data" name="data" required><span class="fa fa-list-ol" id="but"></span> Data Pegawai</button></p>
</div>
<?php echo $this->session->flashdata('message'); ?>
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
      <h2 id="titlepan"><i class="fa fa-folder"></i> Data Diri</h2>
      <div class="clearfix"></div>
     </div>
     <div class="x_content">
        <?php echo form_open('pegawai/tambahpeg','method="post" id="tambahform"');?>
              <input type="hidden" id="idpegawai" name="idpegawai" class="form-control" min="0" />
              <label name="namal">Nama</label>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama pegawai" autofocus required/>
              <label name="alml">Alamat</label>
              <input type="text" id="alm" name="alm" class="form-control" placeholder="Alamat pegawai" required/>
              <label name="telpl">telpon</label>
              <input type="number" id="telp" name="telp" class="form-control" min="0" placeholder="Telpon pegawai" required/>
              <label name="tgll">Tanggal</label>
              <input type="date" id="tgl" name="tgl" class="form-control" required>
              <label name="jkl">Jenis Kelamin</label>
              <select class="form-control" id="jk" name="jk" required>
              <option>L</option>
              <option>P</option>
              </select>
                  </div>
                  </div>
                </div>

  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
      <h2 id="titlepanusr"><i class="fa fa-user"></i> Akun</h2>
      <div class="clearfix"></div>
     </div>
     <div class="x_content" id="akunfoto">
              <label name="usernamel">Username</label>
              <input type="text" id="username" name="username" class="form-control" placeholder="Username" required/><br>
              <label name="passwordl">Password</label>
              <div class="input-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
               <span class="input-group-btn">
                <button class="btn btn-default" type="button" id='lihat'><span class="fa fa-eye"></span></button>
               </span>
              </div>
              <label name="tul">Type User</label>
              <select class="form-control" id="tu" name="tu" required>
              <option>Admin</option>
              <option>Operator</option>
              </select><br>
              <button type="submit" class="btn btn-success btn-sm" id="input" name="input" required><span class="fa fa-upload" id="but"></span> Tambah</button>
             </form>
                  </div>
                  </div>
                </div>
 <!-- ======================FOTO============================== -->

 <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel">
     <div class="x_title">
      <h2 id="titlepanusr"><i class="fa fa-camera"></i> Foto</h2>
      <div class="clearfix"></div>
    </div>
     <div class="x_content" id="akunfoto">
        <span style='position: absolute;' class='btn btn-default btn-xs' id='ganti' >Ganti</span>
        <img height='300px' width='200px' id="img-profil" src='#'>
     </div>
    </div>
  </div>

  <!-- ==================================================== -->

<div id="dt-pegawai">  
<button type="button" class="btn btn-success btn-sm" id="print" name="print" onclick="window.open('<?php echo base_url() ?>Pegawai/laporan','_blank');"><span class="fa fa-print"></span> Cetak</button>
 	<table id="datapegawai" class="table table-hover">
 	<thead> 
 		<tr>
 		<th>No.</th>
 		<th>ID Pegawai</th>
 		<th>Nama</th>
 		<th>Alamat</th>
 		<th>Telpon</th>
 		<th>Tanggal Lahir</th>
 		<th>Jenis Kelamin</th>
 		<th width="140">Aksi</th>
 		</tr>
 	</thead>
 	<tbody>
<?php 
$i = 1;
	foreach ($datapegawai as $dt)
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$dt['idpegawai']."</td>";
		echo "<td>".$dt['namapeg']."</td>";
		echo "<td>".$dt['almpeg']."</td>";
		echo "<td>".$dt['telppeg']."</td>";
		echo "<td>".$dt['tgllhrpeg']."</td>";
		echo "<td>".$dt['jnlkelpeg']."</td>";
		echo "<td>
    <div class='btn-group'>
    <i id='edit' name='edit' class='btn btn-warning btn-sm fa fa-edit' title='Edit&lihatt'></i><i id='hapus' name='hapus' class='btn btn-danger btn-sm fa fa-trash-o' title='Hapus'></i>
    </div>
    </td>";
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
    <th>Id Pegawai</th>
    <th>Nama</th>
  </thead>
  <tbody>
    <tr>
      <td id="idpeg">ID Pegawai</td>
      <td id="napeg">Nama</td>
    </tr>
  </tbody>
 </table>
 </div>

 <script type="text/javascript">
    var globID = "";
      $(function(){
        $('#datapegawai').DataTable();
        $('#dt-pegawai').dialog({
          dialogClass : "alert",
          title : "Data Pegawai",
          autoOpen : false,
          width : 1000,
          height : 500,
          modal : true,
          resizable : false
        });
        $('#data').click(function(){
          $('#dt-pegawai').dialog('open');
        });
        $('#lihat').click(function(){
          var pwd = document.getElementById("password");
          if(pwd.getAttribute("type")=="password"){
            pwd.setAttribute("type","text");
        } else {
            pwd.setAttribute("type","password");
        }
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
          window.location = "http://localhost/poliklinik2/Pegawai/hapus/"+$('#idpeg').html();
        },
        "CANCEL" : function(){
          $("#d-hapus").dialog("close");
        }
        }
        });
        $('#datapegawai').on('click', '#hapus', function(){
          var currentRow = $(this).closest("tr");
          var no = currentRow.find("td:eq(1)").text();
          var nm = currentRow.find("td:eq(2)").text();
          $('#idpeg').html(no);
          $('#napeg').html(nm);
          $('#d-hapus').dialog('open');
        });
        $('#datapegawai').on('click', '#edit', function(){
          var currentRow = $(this).closest("tr");
          var idpegawai = currentRow.find("td:eq(1)").text();
          var nama = currentRow.find("td:eq(2)").text();
          var alm = currentRow.find("td:eq(3)").text();
          var telp = currentRow.find("td:eq(4)").text();
          var tgl = currentRow.find("td:eq(5)").text();
          var jk = currentRow.find("td:eq(6)").text();
          $('button[type=submit]').attr('id','edit');
          $('button[type=submit]').attr('class','btn btn-warning btn-sm');
          $('button[type=submit]').html(" <span class='fa fa-edit' id='but'></span> Edit");
          $('#tambahform').attr('action',"http://localhost/poliklinik2/pegawai/edit");
          $('#idpegawai').val(idpegawai);
          $('#nama').val(nama);
          $('#alm').val(alm);
          $('#telp').val(telp);
          $('#tgl').val(tgl);
          $('#jk').val(jk);
          $('#dt-pegawai').dialog('close');
          $('#img-profil').attr('src','<?php echo base_url() ?>assets/img/'+idpegawai+'.PNG');
          globID = idpegawai;
        });
        $('#ganti').on('click' , function(){
          window.open('<?php echo base_url() ?>/Navigation/fotoeditor/'+globID,'_blank');
        });
});                                                               
    </script>
 
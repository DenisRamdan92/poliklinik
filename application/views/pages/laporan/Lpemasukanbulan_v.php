 <div class="login col-md-3" style="background: white;">
 <h4>Pemasukan Dari Pemeriksaan</h4>
           <form> 
              <label name="namal" >Tanggal Awal</label>
              <input type="date" id="tglawal" name="tglawal" class="form-control"/>
              <label name="namal" >Tanggal Akhir</label>
              <input type="date" id="tglakhir" name="tglakhir" class="form-control"/>
              <br>
              <button type="button" class="btn btn-success btn-sm" id="cetak" name="cetak">Cetak</button>
             </form><hr>
<h4>Pemasukan Dari Obat</h4>
<form> 
              <label name="namal" >Tanggal Awal</label>
              <input type="date" id="tglawalo" name="tglawalo" class="form-control"/>
              <label name="namal" >Tanggal Akhir</label>
              <input type="date" id="tglakhiro" name="tglakhiro" class="form-control"/>
              <br>
              <button type="button" class="btn btn-success btn-sm" id="cetako" name="cetak">Cetak</button>
             </form>
 </div>
 <script type="text/javascript">
      $(function(){
        $('#cetak').click(function(){
          window.open('<?php echo base_url() ?>Laporan/perbulan/'+$('#tglawal').val()+'/'+$('#tglakhir').val(),'_blank');
        });
        $('#cetako').click(function(){
          window.open('<?php echo base_url() ?>Laporan/perbulanobat/'+$('#tglawalo').val()+'/'+$('#tglakhiro').val(),'_blank');
        });
      });                                                                   
    </script>
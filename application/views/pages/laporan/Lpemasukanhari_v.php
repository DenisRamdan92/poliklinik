 <div class="login col-md-3" style="background: white;">
           <h4>Pemasukan Dari Pemeriksaan</h4>
           <div>
             <form> 
              <label name="namal" >Tanggal</label>
              <input type="date" id="tgl" name="tgl" class="form-control"/>
              <br>
              <button type="button" class="btn btn-success btn-sm" id="cetak" name="cetak">Cetak</button>
             </form>
           </div>
           <hr>
           <h4>Pemasukan Dari Obat</h4>
           <div>
             <form> 
              <label name="namal" >Tanggal</label>
              <input type="date" id="tglo" name="tglo" class="form-control"/>
              <br>
              <button type="button" class="btn btn-success btn-sm" id="cetako" name="cetako">Cetak</button>
             </form>
           </div>
 </div>
 <script type="text/javascript">
      $(function(){
        $('#cetak').click(function(){
          window.open('<?php echo base_url() ?>Laporan/perhari/'+$('#tgl').val(),'_blank');
        });
        $('#cetako').click(function(){
          window.open('<?php echo base_url() ?>Laporan/perharii/'+$('#tglo').val(),'_blank');
        });
      });                                                                   
    </script>
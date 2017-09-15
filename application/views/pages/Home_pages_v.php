<div class="row tile_count">
            <div class="col-md-3 col-sm-6 col-xs-9 tile_stats_count">
              &nbsp;&nbsp;&nbsp;<span class="count_top"><i class="fa fa-medkit"></i> Pasien Hari Ini</span>
              <div class="count">&nbsp;<?php echo $pasienhariini['jumlahpasien'] ?></div>
              <hr>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-9 tile_stats_count">
              &nbsp;&nbsp;&nbsp;<span class="count_top"><i class="fa fa-user"></i> Pasien Yang sudah Diperiksa Hari ini</span>
              <div class="count">&nbsp;<?php echo $pemeriksaanhariini['pemeriksaanhariini'] ?></div>
              <hr>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-9 tile_stats_count">
              &nbsp;&nbsp;&nbsp;<span class="count_top"><i class="fa fa-clock-o"></i> Pendaftaran Hari Ini</span>
              <div class="count">&nbsp;<?php echo $pendaftaranhariini['pendaftaranhariini'] ?></div>
              <hr>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-9 tile_stats_count">
              &nbsp;&nbsp;&nbsp;<span class="count_top"><i class="fa fa-user"></i> Jadwal Praktek Hari Ini</span>
              <div class="count green">&nbsp;<?php echo $jadwalhari['jadwalhariini'] ?></div>
              <hr>
            </div>
          </div>
<!-- <img src="<?php //echo base_url() ?>assets/img/kesehatan.JPG" width="100%"></td> -->
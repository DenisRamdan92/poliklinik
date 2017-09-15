<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-asterisk"></i> <span>Poliklinik</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <!-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> -->
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('UserName'); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <?php if ($_SESSION['isLogin'] == true) {
                    if ($_SESSION['hakakses'] == "Admin") {
                    
                  ?>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><?php echo anchor("","<i class='fa fa-home'></i> Home ", "id='home'") ?></li>
                  <li><a><i class="fa fa-database"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo anchor("","Data Pasien", "id='pasien'") ?></li>
                      <li><?php echo anchor("","Data Obat", "id='obat'") ?></li>
                      <li><?php echo anchor("","Data Pegawai", "id='pegawai'") ?></li>
                      <li><?php echo anchor("","Dokter", "id='dokter'") ?></li>
                    </ul>
                  </li>
                  <li><?php echo anchor("","<i class='fa fa-calendar'></i> Jadwal Praktek Dokter ", "id='jadwal'") ?></li>
                  <li><?php echo anchor("","<i class='fa fa-table'></i> Daftar Poliklinik ", "id='poliklinik'") ?></li>
                  <li><a><i class="fa fa-edit"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo anchor("","Pendaftaran", "id='pendaftaran'") ?></li>
                      <li><?php echo anchor("","Pemeriksaan", "id='pemeriksaan'") ?></li>
                      <li><?php echo anchor("","Resep", "id='resep'") ?></li> 
                      <li><?php echo anchor("","Rekam Medik Pasien", "id='rekammedik'") ?></li>
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-print"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo anchor("","Pemasukan Per Hari", "id='lpemasukan'") ?></li>
                      <li><?php echo anchor("","Pemasukan Perbulan", "id='lpemasukanbulan'") ?></li>
                    </ul>
                  </li>                
                </ul>
              </div>

            </div>
            <?php 
          }
          else{

            ?>
            <!-- /sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo anchor("","Pendaftaran", "id='pendaftaran'") ?></li>
                      <li><?php echo anchor("","Pemeriksaan", "id='pemeriksaan'") ?></li>
                      <li><?php echo anchor("","Resep", "id='resep'") ?></li>
                      <li><?php echo anchor("","Rekam Medik Pasien", "id='rekammedik'") ?></li>
                    </ul>
                  </li>              
                </ul>
              </div>
            </div>
            <?php 
          }
        }
             ?>
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url() ?>assets/img/medicine.svg" width="120">
                    Untility
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><?php echo anchor("","Ganti Password", "id='ganpass'")?></li>
                    <li><?php echo anchor("Login/logout","<i class='fa fa-sign-out pull-right'></i> Log Out", "id='logout'")?></li>
                    <li>
                    <?php echo anchor("","<i class='fa fa-info pull-right'></i> About", "id='about'")?>
                    </li>
                  </ul>
                </li>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
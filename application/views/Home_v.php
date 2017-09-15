    <?php $this->load->view('parts/Header') ?>
    <?php $this->load->view('parts/Left_navigation') ?>
    <?php $this->load->view('parts/Top_navigation') ?>
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">
                <div class="row x_title">
                  <div class="col-md-6">
                    <h3 id="main-title">Home </h3>
                  </div>
                </div>
                <div id="main-pages">
                  <?php $this->load->view('pages/Home_pages_v') ?>
                </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br />
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Poliklinik - Aplikasi Uji Kompetensi by <a href="https://colorlib.com">Denis Muhamad Ramdan</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
  <?php $this->load->view('parts/Footer') ?>

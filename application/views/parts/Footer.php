    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>assets/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>assets/js/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url() ?>assets/js/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url() ?>assets/js/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>assets/js/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url() ?>assets/js/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url() ?>assets/js/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.flot.time.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url() ?>assets/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url() ?>assets/js/date.js"></script>
    <script src="<?php echo base_url() ?>assets/js/date-id-ID.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url() ?>assets/js/jquery.vmap.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url() ?>assets/js/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/daterangepicker.js"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.ui.dialog.js"></script>
    <script src="<?php echo base_url() ?>assets/data_table/media/js/jquery.dataTables.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
  <script type="text/javascript">
      $(function(){
        $('#home').click(function(x){
            x.preventDefault();
            $('#main-title').text("Home");
            $('#main-pages').load("<?php base_url(); ?>Navigation/home");

        });
        $('#pendaftaran').click(function(x){
            x.preventDefault();
            $('#main-title').text("Pendaftaran");
            $('#main-pages').load("<?php base_url(); ?>Navigation/pendaftaran"); 
        });
        $('#pemeriksaan').click(function(x){
            x.preventDefault();
            $('#main-title').text("Pemeriksaan");
            $('#main-pages').load("<?php base_url(); ?>Navigation/pemeriksaan");
        });
        $('#pembayaran').click(function(x){
            x.preventDefault();
            $('#main-title').text("Pembayaran");
            $('#main-pages').load("<?php base_url(); ?>Navigation/pembayaran");
        });
        $('#resep').click(function(x){
            x.preventDefault();
            $('#main-title').text("Resep");
            $('#main-pages').load("<?php base_url(); ?>Navigation/resep");
        });
        $('#obat').click(function(x){
            x.preventDefault();
            $('#main-title').text("Obat");
            $('#main-pages').load("<?php base_url(); ?>Navigation/obat");
        });
        $('#jadwal').click(function(x){
            x.preventDefault();
            $('#main-title').text("Jadwal");
            $('#main-pages').load("<?php base_url(); ?>Navigation/jadwal");
        });
        $('#pegawai').click(function(x){
            x.preventDefault();
            $('#main-title').text("Pegawai");
            $('#main-pages').load("<?php base_url(); ?>Navigation/pegawai");
        });
        $('#dokter').click(function(x){
            x.preventDefault();
            $('#main-title').text("Dokter");
            $('#main-pages').load("<?php base_url(); ?>Navigation/dokter");
        });
        $('#pasien').click(function(x){
            x.preventDefault();
            $('#main-title').text("Pasien");
            $('#main-pages').load("<?php base_url(); ?>Navigation/pasien");
        });
        $('#lpemasukan').click(function(x){
            x.preventDefault();
            $('#main-title').text("Pemasukan Per Hari");
            $('#main-pages').load("<?php base_url(); ?>Navigation/lpemasukan");
        });
        $('#ldokter').click(function(x){
            x.preventDefault();
            $('#main-title').text("Laporan Dokter");
            $('#main-pages').load("<?php base_url(); ?>Navigation/ldokter");    
        });
        $('#poliklinik').click(function(x){
            x.preventDefault();
            $('#main-title').text("Daftar Poliklinik");
            $('#main-pages').load("<?php base_url(); ?>Navigation/poliklinik");    
        });
        $('#lpemasukanbulan').click(function(x){
            x.preventDefault();
            $('#main-title').text("Laporan Pemasukan Perbulan");
            $('#main-pages').load("<?php base_url(); ?>Navigation/lpemasukanbulan");    
        });
        $('#about').click(function(x){
            x.preventDefault();
            $('#main-title').text("About");
            $('#main-pages').load("<?php base_url(); ?>Navigation/about");    
        });
        $('#ganpass').click(function(x){
            x.preventDefault();
            $('#main-title').text("Ganti Password");
            $('#main-pages').load("<?php base_url(); ?>Navigation/ganpass");    
        });
        $('#rekammedik').click(function(x){
            x.preventDefault();
            $('#main-title').text("Rekam Medik Pasien");
            $('#main-pages').load("<?php base_url(); ?>Navigation/rekammedik");    
        });
      });
  </script>
  </body>
</html>

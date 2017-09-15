<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Poliklinik Beta</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>assets/css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url() ?>assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <?php echo validation_errors(); ?>
            <?php echo form_open('Login/logincek','method="post"');?>
              <h1>Form Login</h1>
              <?php echo $this->session->flashdata('message'); ?>
              <div>
                <input type="text" class="form-control" placeholder="Username" id="username" name="username" autofocus />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" id="pass" name="pass" />
              </div>
              <div>
                <input type="submit" class="btn btn-default" value="Login" id="slogin" />
                <a class="reset_pass" href="#">Lupa pasword?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                  <h1><i class="fa fa-paw"></i> Poliklinik Beta</h1>
                  <p>©2017 All Rights Reserved. Denis Muhamad Ramdan. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

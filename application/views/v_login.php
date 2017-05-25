<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css') ?>">

	<?php if ($this->session->flashdata('category_error')) { ?>
					<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i><?= $this->session->flashdata('category_error') ?></h4>
					</div>
	<?php } ?>
  <style media="screen">
  .login-page-bg {
    background-image: url('https://lh3.googleusercontent.com/cQ7fTDCd6XGxKapHMPN2nhbMnlqW81nV6A2E0CwaBejG6X3NFrL8pr1vmVZKghrETACCj5vpLyVGq36MYnwyuYeLcZ24z4GZgfCJIUfdFu7IQxRzfFETLKv5PypIVdVNs_omcUlJA85uWYCFTnrLKUIQQ6GRs-A8DhvbvgqoLX7SfzmUNi_9wKLZyCIUBivA70JZjWs-ZotUFA3ooffsupCWit0cpImGXGx3t2iGqxFkNe4jKDyyLGRhc86X4L-l0gnJqyld5XT06mGObrNV_bmiIo74cjkLoDU0wD1tTImdfbAn6cQxD_gcAbv3NPdGGG6YPs89Ag5CR68ZCxGxFiXluHihI5WrQLKNRYkAzBGOo6TxkXNbiTI9ckQPc_66f6--InJ95FkVfWkqugkDFjX2zDfd_FSwLw0rWquK68F4-Lptm6tNB8F_NbyQCsZGEePpAx90-kt0ZjzzJVq4UpfbiCJUDgdA667xCBcs4ugdGc3i2c7FowPqULhomdnW90nNq3DfFHYRxgc7jm4nREHjNmopTTD4_iviXtX-NjtJrW9bCbzJHOk_oUsfNdpXsuzW7MR-=w1366-h700');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: fixed;
    top: 0;
    left: 0;
    min-width: 100%;
    min-height: 100%;
  }
  </style>
  </head>
  <body class="hold-transition login-page">
    <div class="login-page-bg">
      <div class="login-box" style="box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2);">
        <div class="login-logo">
        </div>
        <div class="login-box-body">
          <h3 class="login-box-msg">Login</h3>
          <form action="<?php echo base_url('login/aksi_login'); ?>" method="post" class="form-signin">
  		  <div class="form-group has-feedback">
              <input type="text" class="form-control" name="username" placeholder="No. ID (NIK/NIM)" required="">
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" name="password" placeholder="Password" required="">
            </div>
            <div class="row">
              <div class="col-xs-12 pull-left">
        				<code><a href="<?=base_url ()?>regis/registrasi" >Registrasi</a></code>
        			</div>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-12 center">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
    <script src="<?php echo base_url('assets/js/jQuery-2.1.4.min.js') ?> "></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>

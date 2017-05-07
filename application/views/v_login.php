<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css') ?>">
	<?php if ($this->session->flashdata('category_error')) { ?>
					<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i><?= $this->session->flashdata('category_error') ?></h4>
					</div>
	<?php } ?>
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Login</p>
        <form action="<?php echo base_url('login/aksi_login'); ?>" method="post" class="form-signin">      
		  <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" placeholder="No. ID (NIK/NIM)" required="">
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required="">
          </div>		  
          <div class="row">
            
            <div class="col-xs-4 pull-right">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>
		    <div class="col-xs-6 pull-left">
				<code><a href="<?=base_url ()?>regis/registrasi" >Registrasi</a></code>
			</div>			
          </div>
        </form>

      </div>
    </div>

    <script src="<?php echo base_url('assets/js/jQuery-2.1.4.min.js') ?> "></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>
  
  
  
  
  
  
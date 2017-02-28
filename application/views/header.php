<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{title}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{css_bs}">
    <link rel="stylesheet" href="{css_fa}">
    <link rel="stylesheet" href="{css_alt}">
    <link rel="stylesheet" href="{css_skin}">
    <link rel="stylesheet" href="{css_style}">
  </head>
  <body class="skin-blue sidebar-mini layout-boxed">
    <div class="wrapper">
      <header class="main-header">
        <a href="{l_home}" class="logo">
          <span class="logo-lg"><b>K</b>M</span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
				<img src="<?php echo base_url()?>upload/image/<?php echo $this->session->userdata('profile_picture')?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $this->session->userdata('nama_user')?>
					</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="<?php echo base_url()?>upload/image/<?php echo $this->session->userdata('profile_picture')?>" class="img-circle" alt="User Image">
					<p>
					<?php echo $this->session->userdata('nama_user')?>-<?php echo $this->session->userdata('level')?>
                    </p>
					
                  </li>
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url()?>upload/image/<?php echo $this->session->userdata('profile_picture')?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p></p>
              <a><?php echo $this->session->userdata('nama_user')?></a>
            </div>
          </div>

          <ul class="sidebar-menu">
            <li class="header">BAP dan RPS</li>
            <li class="{active_1}"><a href="{l_inputbap}"><span>Input BAP</span></a></li>
            <li class="{active_2}"><a href="{l_verifbap}"><span>Verifikasi BAP</span></a></li>
            <li class="{active_3}"><a href="{l_inputrps}"><span>Input RPS</span></a></li>
			<li class="{active_6}"><a href="<?php echo base_url('baprps/jadwal'); ?>"><span>Input Jadwal Dosen</span></a></li>
            <li class="{active_4}"><a href="{l_lihatrps}"><span>Lihat RPS</span></a></li>
            <li class="{active_5}"><a href="{l_grafik}"><span>Table</span></a></li>
			<li class="{active_7}"><a href="<?php echo base_url('baprps/forum'); ?>">Forum<span></span></a></li>         
          </ul>

        </section>
      </aside>
      <script src="{js_jq}"></script>
      <script src="{js_bs}"></script>
      <script src="{js_app}"></script>
      <script src="{js_slimscroll}"></script>
	  
</html>
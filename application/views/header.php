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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

  </head>
  <body class="skin-blue sidebar-mini layout-boxed">
    <div class="wrapper">
      <header class="main-header">
        <a href="{l_home}" class="logo">
          <span class="logo-lg"></span>
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
			 <li class="treeview">
			  <a href="#">
				<i class="fa fa-folder"></i> <span>BAP dan RPS</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			<ul class="treeview-menu">
            <li class="{active_1}"><a href="{l_inputbap}"><i class="fa fa-circle-o"></i><span>Input BAP</span></a></li>
            <li class="{active_2}"><a href="{l_verifbap}"><i class="fa fa-circle-o"></i><span>Verifikasi BAP</span></a></li>
            <li class="{active_3}"><a href="<?php echo base_url('excel2/input_rps'); ?>"><i class="fa fa-circle-o"></i><span>Input RPS</span></a></li>
			<li class="{active_6}"><a href="<?php echo base_url('baprps/jadwal'); ?>"><i class="fa fa-circle-o"></i><span>Input Jadwal Dosen</span></a></li>
            <li class="{active_5}"><a href="{l_grafik}"><i class="fa fa-circle-o"></i>Table Result<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
			    <ul class="treeview-menu">
                <li><a href="<?php echo base_url('baprps/satuobjek'); ?>"><i class="fa fa-circle-o"></i> 1 Object</a></li>
                <li><a href="<?php echo base_url('baprps/grafik'); ?>"><i class="fa fa-circle-o"></i> 2 Objects</a></li>
				<li><a href="<?php echo base_url('baprps/perpertemuan'); ?>"><i class="fa fa-circle-o"></i> Per Pertemuan</a></li>
                </ul>
			</li>
			<li class="{active_13}"><a href="<?php echo base_url('baprps/chart'); ?>"><i class="fa fa-circle-o"></i><span>Grafik</span></a></li>
			</ul>
			</li>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-folder"></i> <span>Detail Nilai</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			<ul class="treeview-menu">
            <li class="{active_11}"><a href="<?php echo base_url(). 'nilai/input_nilai'; ?>"><i class="fa fa-circle-o"></i><span>Input Nilai Harian</span></a></li>
            <li class="{active_8}"><a href="<?php echo base_url(). 'excel/input_nilai_akhir'; ?>"><i class="fa fa-circle-o"></i><span>Input Nilai Akhir</span></a></li>
            <li class="{active_9}"><a href="<?php echo base_url(). 'nilai/lihat_nilai'; ?>"><i class="fa fa-circle-o"></i><span>Lihat Nilai Harian</span></a></li>
            <li class="{active_10}"><a href="<?php echo base_url(). 'nilai/pre_nilai_akhir'; ?>"><i class="fa fa-circle-o"></i><span>Lihat Nilai Akhir</span></a></li>
            <li class="{active_11}"><a href="<?php echo base_url(). 'nilai/perbandingan_nilai_akhir'; ?>"><i class="fa fa-circle-o"></i><span>Lihat Nilai Perbandingan</span></a></li>
            <?php if(($this->session->userdata('level') == 'Dekan') || ($this->session->userdata('level') == 'Wakil Dekan') || ($this->session->userdata('level') == 'Kaprodi'))
            {
            ?>
              <li class="{active_12}"><a href="<?php echo base_url(). 'nilai/filter_nilai_akhir'; ?>"><i class="fa fa-circle-o"></i><span>Lihat Filter Nilai</span></a></li>
            <?php
            }
            ?>
        </ul>
			</li>
			<li class="{active_7}"><a href="<?php echo base_url('baprps/forum'); ?>"><i class="fa fa-comments"></i><span>Forum</span></a></li>
			<li class="{active_12}"><a href="<?php echo base_url('baprps/edit'); ?>"><i class="fa fa-list"></i><span>User Management</span></a></li>
		  </ul>

        </section>
      </aside>
      <script src="{js_jq}"></script>
      <script src="{js_bs}"></script>
      <script src="{js_app}"></script>
      <script src="{js_slimscroll}"></script>

      <script>
      $(document).ready(function(){
        $("#pilihan").change(function(){
            var pilihan = $("#pilihan").val();
            debugger
            $.ajax({
              type : "POST",
              url  : "<?php echo base_url().'nilai/pilihCombobox'?>",
              data : {pilihan: pilihan},
              success: function(data){
                // console.log(data);
                $('#hasilPilih').append(data);
              }
            });
        });
      });
    </script>


	  </html>

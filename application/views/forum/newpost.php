       <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'baprps/newpost_post'; ?>" method="post" class="box box-primary">
        	<div class="box-header with-border">
        		<a href="<?=base_url ()?>Baprps/forum" >Timeline</a> >
				<a href="<?=base_url ()?>Baprps/newpost" >Create New Post</a>
        	</div>
        	<div class="box-body">
				<form  class="form-horizontal">
				  <div class="form-group">
					<label for="nama" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
					  <input type="hidden" class="form-control" name="nama_user" id="nama_user" value="<?php echo $this->session->userdata('nama_user')?>" readonly>
					  <input type="hidden" class="form-control" name="profile_picture" id="profile_picture" value="<?php echo $this->session->userdata('profile_picture')?>" readonly>		
					</div>
				  </div>
				  <div class="form-group">
					<label for="judul" class="col-sm-2 control-label">Judul</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" name="judul" id="judul">
					</div>
				  </div>
				<br>
				<br>

				  <div class="form-group">
					<label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>
					<div class="col-sm-10">
					  <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" rows="5"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <div class="checkbox">
					  </div>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="pull-right info btn btn-warning">Post</button>
					</div>
				  </div>
				</form>
		</form>
        </div>
        </section>
      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form class="box box-primary">
        	<div class="box-header with-border">
        		<a href="<?=base_url ()?>Baprps/forum" >Timeline</a>
        	</div>
        	<div class="box-body">
            <div class="col-md-12 form-group">
			<div class="box-header with-border">
			<a class="btn btn-warning" href="<?php echo base_url('baprps/newpost'); ?>" role="button">+New Post</a>
			</div>
			<br>
			<?php
			foreach($data as $u){
			?> 
			<a href="<?=base_url ()?>Baprps/comment/<?php echo $u->id_post ?>" class="list-group-item list-group-item-action"><span class="glyphicon glyphicon-file"></span>  <strong><?php echo $u->judul?></strong>
			<span class="pull-right info"><small class="text-muted"><?php echo $u->tanggal?></small> at <small class="text-muted"><?php echo $u->waktu?></small></span>
			<span class="pull-right info glyphicon glyphicon-time col-md-1"></span>
			<span class="pull-right info col-md-4"><?php echo $u->nama_user?></span>
			</a>
			<?php } ?>
			</div>
        	</div>
        </form>
        </div>
        </section>
     
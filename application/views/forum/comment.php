 <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'baprps/comment_post'; ?>" method="post" class="box box-primary">
        	<div class="box-header with-border">
			<?php
			foreach($data as $i){
			?>        	
			<a href="<?=base_url ()?>Baprps/forum" >Timeline</a> >
			<a href="<?=base_url ()?>Baprps/comment/<?php echo $i->id_post ?>" ><?php echo $i->judul ?></a>
			</div>
        	<div class="box-body">
            <div class="col-md-12 form-group">
			<h4><strong><?php echo $i->judul ?></strong></h4>
			<?php } ?>
        	<table class="table">
			<tr>
			<?php
			foreach($data as $i){
			?>
				<td><img src="<?php echo base_url()?>upload/image/<?php echo $i->profile_picture ?>" class="img-thumbnail" alt="User Image" width="60" height="60"></td>	
				<td class="col-md-2"><?php echo $i->nama_user ?></td>
				<td class="col-md-6"><?php echo $i->deskripsi ?></td>
				<td class="col-md-2 text-right"><small class="text-muted"><?php echo $i->tanggal ?></small></td>
			<?php } ?>
			</tr>
			<tr>
				<td class="col-md-2"></td>
				<td class="col-md-2"></td>
				<td class="col-md-6">
				<div class="form-group">
				<?php
				foreach($data as $i){
				?> 
				<input type="hidden" class="form-control" name="profile_picture" id="profile_picture" value="<?php echo $this->session->userdata('profile_picture')?>" readonly>
				<input type="hidden" class="form-control" name="id_post" id="id_post" value="<?php echo $i->id_post ?>" readonly>
				<input type="hidden" class="form-control" name="nama_user" id="nama_user" value="<?php echo $this->session->userdata('nama_user')?>" readonly>
				<textarea type="text" class="form-control" name="comment" id="comment" rows="3"></textarea>
				<button class="btn btn-primary pull-right btn-flat" type="submit">Add Comment</button>
				<?php } ?>
				</div>
				</td>
				<td class="col-md-2"></td>
			</tr>
			<tr>
			<?php
			foreach($comment as $u){
			?>
				<td><img src="<?php echo base_url()?>upload/image/<?php echo $u->profile_picture ?>" class="img-thumbnail" alt="User Image" width="60" height="60"></td>
				<td><?php echo $u->nama_user ?></td>
				<td><?php echo $u->comment ?></td>
				<td class="col-md-2 text-right"><small class="text-muted"><?php echo $u->tanggal ?></small></td>
			</tr>
			<?php } ?>
			</table>
            </div>

        	</div>
        </form>
        </div>
        </section>
		</div>

         <div class="content-wrapper">
		 </div>
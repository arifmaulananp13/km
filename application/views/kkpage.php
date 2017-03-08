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
        	Daftar User	
        	</div>
        	<div class="box-body">
            <div class="col-md-12 form-group">
			<table class="table table-bordered">
			<tr>
				<th>No</th>
				<th>Nama User</th>
				<th>Username</th>
				<th>Level</th>
				<th>Aksi</th>
			</tr>
			<?php
			$no = 1;
			foreach($data as $u){
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $u->nama_user ?></td>
				<td><?php echo $u->username ?></td>
				<td><?php echo $u->level ?></td>
				<td><?php echo anchor('baprps/edit2/'.$u->id_user,'Update Level')?></td>
			</tr>
			<?php } ?>
			</table>
            </div>

        	</div>
        </form>
        </div>
        </section>
     
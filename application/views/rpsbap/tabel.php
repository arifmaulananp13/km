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
			Compare
			</div>

			<div class="box-body">
            <div class="col-md-6 form-group">
        	<table class ="table table-bordered" >
			<tr>
			<?php
			$no = 1;
			foreach(array_slice($data,0,1) as $u){
			?>
				<td class="col-md-2"><?php echo $u->dosen ?></td>
				<td class="col-md-2"><?php echo $u->matkul ?></td>
				<td class="col-md-2"></td>
			<?php } ?>
			</tr>
			<tr>
				<th>Pertemuan</th>
				<th>Kelas</th>
				<th>Status</th>
			</tr>
			<?php
			$no = 1;
			foreach($data as $u){
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $u->kelas ?></td>
				<td><?php echo $u->status ?></td>
			<?php } ?>
			</tr>
			</table>
            </div>

			<div class="col-md-6 form-group">
        	<table class ="table table-bordered" >
			<tr>
			<?php
			$no = 1;
			foreach(array_slice($data1,0,1) as $i){
			?>
				<td class="col-md-2"><?php echo $i->dosen ?></td>
				<td class="col-md-2"><?php echo $i->matkul ?></td>
				<td class="col-md-2"></td>
			<?php } ?>
			</tr>
			<tr>
				<th>Pertemuan</th>
				<th>Kelas</th>
				<th>Status</th>
			</tr>
			<?php
			$no = 1;
			foreach($data1 as $i){
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $i->kelas ?></td>
				<td><?php echo $i->status ?></td>
			<?php } ?>
			</tr>
			</table>
            </div>

        	</div>
        </form>
        </div>
        </section>

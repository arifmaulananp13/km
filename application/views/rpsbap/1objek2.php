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
            <div class="col-md-12 form-group">
        	<table class ="table table-bordered" >
			<tr>
			<?php
			$no = 1;
			foreach(array_slice($data,0,1) as $u){
			?>
				<td><p>Dosen : <?php echo $u->dosen ?></p>
					<p>Mata Kuliah : <?php echo $u->matkul ?></p>
					<p>Kelas : <?php echo $u->kelas ?></p>
				
				</td>


			<?php } ?>
			</tr>
			</table>

			
        	<table class ="table table-bordered" >
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
            </div>

        	</div>
        </form>
        </div>
        </section>

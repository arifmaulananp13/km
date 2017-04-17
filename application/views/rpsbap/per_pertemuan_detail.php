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
			Result Per Pertemuan
			</div>

			<div class="box-body">
            <div class="col-md-12 form-group">	

					<?php
					$no = 1;
					foreach($data as $u){
					?>
					<p>Pertemuan : <?php echo $u->pertemuan ?> </p>
					<p>Tanggal : <?php echo $u->no_tanggal ?> </p>
					<p>Dosen : <?php echo $u->dosen ?> </p>
					<p>Mata Kuliah : <?php echo $u->matkul ?> </p>
					<p>Kelas : <?php echo $u->kelas ?> </p>
					<p>Shift : <?php echo $u->shift ?> </p>
					<p>Ruangan : <?php echo $u->ruangan ?> </p>
					<?php } ?>	
					
        	<table class ="table table-bordered" >
			<tr>
				<th class="col-md-4">Materi</th>
				<th class="col-md-4">Keterangan</th>
				<th class="col-md-2">Status</th>
				<th class="col-md-2">Validator</th>
			</tr>

			<?php
			$no = 1;
			foreach($data as $u){
			?>
			<tr>
				<td><?php echo $u->materiajar ?></td>
				<td><?php echo $u->ket ?></td>
				<td><?php echo $u->status ?></td>
				<td><?php echo $u->namauser ?></td>
			<?php } ?>
			</tr>
			</table>
            </div>
            </div>

        	</div>
        
        </div>
        </section>

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
			Detail BAP
			</div>

			<div class="box-body">
            <div class="col-md-12 form-group">	
			<div class="col-md-6 form-group"> 
			<table class="table no-border">
					<?php
					$no = 1;
					foreach($data as $u){
					?>
					<tr>
					<td class="col-md-3">Pertemuan </td>
						<td>: <?php echo $u->pertemuan ?></td>
					</tr>
					<tr>
						<td>Tanggal</td>
						<td>: <?php echo $u->no_tanggal ?></td>
					</tr>
					<tr>
						<td>Dosen</td>
						<td>: <?php echo $u->dosen ?></td>
					</tr>
					<tr>
						<td>Mata Kuliah</td>
						<td>: <?php echo $u->matkul ?></td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>: <?php echo $u->kelas ?></td>
					</tr>
					<tr>
						<td>Shift</td>
						<td>: <?php echo $u->shift ?></td>
					</tr>
					<tr>
						<td>Ruangan</td>
						<td>: <?php echo $u->ruangan ?></td>
					</tr>
					<?php } ?>
			</table>
	        	</div>
					
        	<table class ="table table-bordered" >
			<tr>
				<th class="col-md-4">Materi</th>
				<th class="col-md-4">Materi Tambahan</th>
				<th class="col-md-2">Status</th>
				<th class="col-md-2">Validator</th>
			</tr>

			<?php
			$no = 1;
			foreach($data as $u){
			?>
			<tr>
				<td><?php echo $u->materi ?></td>
				<td><?php echo $u->materitambahan ?></td>
				<td>				<?php  if($u->totalmateri_d == $u->totalrps) { 
							if($u->totalmateri_d == $u->totalmateri){ ?>
				<p>Sesuai</p>
				<?php  }else{ ?>
				<p>Tidak Sesuai</p>
				<?php } ?>
				<?php  }else{ ?>
				<p>Tidak Sesuai</p>
				<?php } ?></td>
				<td><?php echo $u->namauser ?></td>
			<?php } ?>
			</tr>
			</table>
            </div>
            </div>

        	</div>
        
        </div>
        </section>

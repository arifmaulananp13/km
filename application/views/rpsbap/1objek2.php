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
				<th class="col-md-1">Pertemuan</th>
				<th class="col-md-4">Materi</th>
				<th class="col-md-2">Status</th>
				<th class="col-md-2">Validator</th>
				<th class="col-md-3">Materi Tambahan</th>
			</tr>
			<?php
			foreach($data as $u){
			?>
			<tr>
				<td class="text-center"><?php echo $u->pertemuan ?></td>
				<td><?php echo $u->materi ?></td>
				<td>
				<?php  if($u->totalmateri_d == $u->totalrps) { 
							if($u->totalmateri_d == $u->totalmateri){ ?>
				<p>Sesuai</p>
				<?php  }else{ ?>
				<p>Tidak Sesuai</p>
				<?php } ?>
				<?php  }else{ ?>
				<p>Tidak Sesuai</p>
				<?php } ?>
				
				</td>
				<td><?php echo $u->namauser ?></td>
				<td><?php echo $u->materitambahan ?></td>
			<?php } ?>
			</tr>
			</table>
            </div>
            </div>

        	</div>
        </form>
        </div>
        </section>

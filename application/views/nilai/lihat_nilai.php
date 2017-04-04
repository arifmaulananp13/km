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
        		Lihat Nilai Harian
        	</div>
        	<div class="box-body">
            <div class="col-md-12 form-group">
        	<table class="table table-bordered">
			<tr>
				<th>No</th>
				<th class="col-md-1">Dosen</th>
				<th class="col-md-1">Mata Kuliah</th>
				<th class="col-md-1">Kelas</th>
				<th class="col-md-1">Tanggal</th>
				<th class="col-md-1">File</th>
        <th class="col-md-7">Deskripsi</th>
			</tr>
			<?php
			$no = 1;
			foreach($data as $u){
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $u->dosen ?></td>
				<td><?php echo $u->matkul ?></td>
				<td><?php echo $u->kelas ?></td>
				<td><?php echo $u->no_tanggal ?></td>
				<td><?php echo $u->nilai ?></td>
        <td><?php echo $u->deskripsi ?></td>
				<td><code><a href="<?=base_url ()?>nilai/download/<?php echo $u->nilai ?>" >Download</a></code></td>
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

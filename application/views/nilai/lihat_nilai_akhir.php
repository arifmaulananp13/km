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
        		Lihat Nilai Akhir
        	</div>
        	<div class="box-body">
            <div class="col-md-12 form-group">
        	<table class="table table-bordered">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>UTS</th>
				<th>UAS</th>
				<th>QUIZ</th>
				<th>FILE</th>
			</tr>
			<?php
			$no = 1;
			foreach($data as $u){
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $u->nama ?></td>
				<td><?php echo $u->nim ?></td>
				<td><?php echo $u->uts ?></td>
				<td><?php echo $u->uas ?></td>
				<td><?php echo $u->quiz ?></td>
				<td><code><a href="<?=base_url ()?>nilai/download/<?php echo $u->file ?>" >Download</a></code></td>
			</tr>
			<?php } ?>
			</table>
            </div>

        	</div>
        </form>
        </div>
        </section>
	</div>

 	<div class="content-wrapper"></div>
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
            <?php
            $no = 1;
            foreach(array_slice($data,0,1) as $u){
            ?>
              <p>Dosen : <?php echo $u->dosen ?></p>
              <p>Matakuliah : <?php echo $u->matkul ?></p>
              <p>Kelas : <?php echo $u->kelas ?></p>

            <?php } ?>
          </div>

          <div class="col-md-12 form-group">
        	<table class="table table-bordered">
			<tr>
        <th>No</th>
        <th>NAMA</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>TUGAS</th>
        <th>TOTAL</th>
        <th>GRADE</th>



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
				<td><?php echo $u->tugas ?></td>
        <td><?php echo $u->total ?></td>
        <td><?php echo $u->grade ?></td>



			</tr>
			<?php } ?>
			</table>
            </div>

            <div class="col-md-12 form-group">
            <?php
            $no = 1;
            foreach(array_slice($data,0,1) as $u){
            ?>
              <p>Deskripsi : <?php echo $u->deskripsi ?></p>
            <?php } ?>
          </div>
        	</div>
        </form>
        </div>
        </section>
	</div>

 	<div class="content-wrapper"></div>

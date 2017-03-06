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
        		Pilih Jadwal Perkuliahan
        	</div>
        	<div class="box-body">
            <div class="col-md-12" form-group>
        	<table class="table table-bordered">
			<tr>
				<th>No</th>
				<th>Dosen</th>
				<th>Mata Kuliah</th>
				<th>Kelas</th>
				<th>Status</th>
				<th>Ket</th>
			</tr>
			<?php
			$no = 1;
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $this->session->userdata('dosen')?></td>
				<td><?php echo $this->session->userdata('matkul')?></td>
				<td><?php echo $this->session->userdata('kelas')?></td>
				<td><?php echo $this->session->userdata('status')?></td>
				<td><?php echo $this->session->userdata('ket')?></td>
			</tr>
			</table>
            </div>

        	</div>
        </form>
        </div>
        </section>
     
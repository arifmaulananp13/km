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
				<?php if ($this->session->flashdata('category_success')) { ?>
					<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i><?= $this->session->flashdata('category_success') ?></h4>
					</div>
			<?php } ?>
        	</div>
        	<div class="box-body">
            <div class="col-md-12 form-group">
				<div class="col-md-2 form-group">

				</div>
			<div class="col-md-12 form-group">
        	<table class="table table-bordered">
			<tr>
				<th>No</th>
				<th>Mata Kuliah</th>
				<th>Kelas</th>
				<th>Hari</th>
				<th>Shift</th>
				<th>Ruangan</th>
			</tr>
			<?php
			$no = 1;
			foreach($data as $u){
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $u->matkul ?></td>
				<td><?php echo $u->kelas ?></td>
				<td><?php echo $u->hari ?></td>
				<td><?php echo $u->shift ?></td>
				<td><?php echo $u->ruangan ?></td>
				<td>
				<select name="pertemuan" id="pertemuan" class="form-control" required="">
                  <option disabled="" selected="">Pertemuan</option>
				  <?php foreach($pertemuan as $p){ ?>
				  <option value="<?php echo $p['pertemuan']; ?>"><?php echo $p['pertemuan']; ?></option>
				  <?php } ?>
                </select>				
				</td>
				<td><a href="<?php echo base_url('baprps/input_bap2/'.$u->id_jadwal.'/'.$u->kode_matkul); ?>" method="post" type="submit" class="btn btn-default btn-flat">Input BAP</a></td>	
			</tr>
				<?php } ?>			
			</table>
            </div>
        	</div>
        </form>
        </div>
        </section>
     
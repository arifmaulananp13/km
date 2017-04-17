      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'baprps/filter'; ?>" method="post" class="box box-primary">
			<div class="box-header with-border">
			Result Per Pertemuan
			</div>

			<div class="box-body">
            <div class="col-md-12 form-group">		
				
			<?php
			$no = 1;
			foreach(array_slice($data,0,1) as $u){
			?>
			<input class="form-control" type="hidden" value="<?php echo $u->pertemuan ?>" id="pertemuan" name="pertemuan" readonly>
			<?php } ?>	
			
				<div class="col-md-6 form-group">	
		        	<select name="matkul" id="matkul" class="form-control" required="">
		            <option disabled="" selected="">Mata Kuliah</option>
					<?php foreach($matkul as $m) {?>
					<option value="<?php echo $m['nama_matkul']; ?>"><?php echo $m['nama_matkul']; ?></option>
					<?php } ?> 					
		            </select>
	        	</div>

				  <div class="form-group">
				  <button class="btn btn-primary pull-left btn-flat btn-sm" type="submit">Filter</button>
				  </form>
					<div class="col-sm-2">
					<form action="<?php echo base_url(). 'baprps/aksi_perpertemuan'; ?>" method="post" >
			<?php
			$no = 1;
			foreach(array_slice($data,0,1) as $u){
			?>
			<input class="form-control" type="hidden" value="<?php echo $u->pertemuan ?>" id="pertemuan" name="pertemuan" readonly>
			<?php } ?>						

					 <button class="btn btn-default pull-left btn-flat btn-sm" type="submit">Remove Filter</button>
					</form>
					</div>
				  </div>				
				
			<div class="col-md-12 form-group">				
        	<table class ="table table-bordered" >
			<tr>
				<th>Pertemuan</th>
				<th>Matkul</th>
				<th>Kelas</th>
				<th>Dosen</th>
				<th>Status</th>
				<th></th>
			</tr>

			<?php
			$no = 1;
			foreach($data as $u){
			?>
			<tr>
				<td><?php echo $u->pertemuan ?></td>
				<td><?php echo $u->matkul ?></td>
				<td><?php echo $u->kelas ?></td>
				<td><?php echo $u->dosen ?></td>
				<td><?php echo $u->status ?></td>
				<td><a href="<?php echo base_url('baprps/detailperpertemuan/'.$u->id_verif); ?>" action="post" target="_blank" type="submit">Detail</a></td>
			<?php } ?>
			</tr>
			</table>
            </div>
            </div>

        	</div>
        
        </div>
        </section>

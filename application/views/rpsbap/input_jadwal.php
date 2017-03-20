      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'baprps/input_jadwal_post'; ?>" method="post" class="box box-primary">
        	<div class="box-header with-border">
        		Input Jadwal Dosen
        	</div>
        	<div class="box-body">
			<div class="col-md-6 form-group">
            <div class="col-md-12 form-group">
              <select name="dosen" id="dosen" class="form-control" required="">
                  <option disabled="" selected="">Dosen</option>
				  <?php foreach($dosen as $d){ ?>
				  <option value="<?php echo $d['nama_dosen']; ?>"><?php echo $d['nama_dosen']; ?></option>
				  <?php } ?>
                </select>
            </div>
	        	<div class="col-md-12 form-group">
		        	<select name="matkul" id="matkul" class="form-control" required="">
		            <option disabled="" selected="">Mata Kuliah</option>
					<?php foreach($matkul as $m) {?>
					<option value="<?php echo $m['nama_matkul']; ?>"><?php echo $m['nama_matkul']; ?></option>
					<?php } ?> 					
		            </select>
	        	</div>
	        	<div class="col-md-12 form-group">
		        	<select name="kelas" id="kelas" class="form-control" required="">
		            <option disabled="" selected="">Kelas</option> 	
					<?php foreach($kelas as $k) {?>
					<option value="<?php echo $k['nama_kelas']; ?>"><?php echo $k['nama_kelas']; ?></option>
					<?php } ?> 					
		            </select>
	        	</div>
	        	<div class="col-md-12 form-group">
		        	<select name="hari" id="hari" class="form-control" required="">
		            <option disabled="" selected="">Hari</option> 	
					<?php foreach($hari as $h) {?>
					<option value="<?php echo $h['hari']; ?>"><?php echo $h['hari']; ?></option>
					<?php } ?> 					
		            </select>
	        	</div>
	        	<div class="col-md-12 form-group">
		        	<select name="shift" id="shift" class="form-control" required="">
		            <option disabled="" selected="">Shift</option> 	
					<?php foreach($shift as $s) {?>
					<option value="<?php echo $s['shift']; ?>"><?php echo $s['shift']; ?></option>
					<?php } ?> 					
		            </select>
	        	</div>
				<div class="col-md-12 form-group">
		        	<select name="ruangan" id="ruangan" class="form-control" required="">
		            <option disabled="" selected="">Ruangan</option> 	
					<?php foreach($ruangan as $r) {?>
					<option value="<?php echo $r['ruangan']; ?>"><?php echo $r['ruangan']; ?></option>
					<?php } ?> 					
		            </select>
	        	</div>
				
				
        		<div class="col-md-12 form-group">
        			<button name="mysubmit" class="btn btn-primary pull-right btn-flat" type="submit">Submit</button>
        		</div>
        	</div>
			</div>
        </form>
        </div>
        </section>
 
	
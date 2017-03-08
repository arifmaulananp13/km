      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'baprps/aksi_grafik'; ?>" method="post" class="box box-primary">
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
			<label for="dosen1" class="form-label">Compare dengan :</label>	
			<div class="col-md-12 form-group">
              <select name="dosen1" id="dosen1" class="form-control" required="">
                  <option disabled="" selected="">Dosen</option>
				  <?php foreach($dosen as $d){ ?>
				  <option value="<?php echo $d['nama_dosen']; ?>"><?php echo $d['nama_dosen']; ?></option>
				  <?php } ?>
                </select>
            </div>
	        	<div class="col-md-12 form-group">
		        	<select name="matkul1" id="matkul1" class="form-control" required="">
		            <option disabled="" selected="">Mata Kuliah</option>
					<?php foreach($matkul as $m) {?>
					<option value="<?php echo $m['nama_matkul']; ?>"><?php echo $m['nama_matkul']; ?></option>
					<?php } ?> 					
		            </select>
	        	</div>
	        	<div class="col-md-12 form-group">
		        	<select name="kelas1" id="kelas1" class="form-control" required="">
		            <option disabled="" selected="">Kelas</option> 	
					<?php foreach($kelas as $k) {?>
					<option value="<?php echo $k['nama_kelas']; ?>"><?php echo $k['nama_kelas']; ?></option>
					<?php } ?> 					
		            </select>
	        	</div>
				
				
        		<div class="col-md-12 form-group">
        			<button name="mysubmit" class="btn btn-primary pull-left btn-flat" type="submit">Show Record</button>
        		</div>
        	</div>
			</div>
        </form>
        </div>
        </section>
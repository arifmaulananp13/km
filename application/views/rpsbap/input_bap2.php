      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'baprps/input_bap_post'; ?>" method="post" class="box box-primary">
        	<div class="box-header with-border">
        		Input BAP
        	</div>
        	<div class="box-body">
             <div class="col-md-6 form-group">                 
				 	<label for="dosen" class="form-label">Dosen :</label>
					<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input class="form-control" type="text" value="<?php echo $u->dosen ?>" id="dosen" name="dosen" readonly>
				  <?php } ?>
            </div>
             <div class="col-md-6 form-group">   
				 	<label for="matkul" class="form-label">Mata Kuliah :</label>
				 	<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input class="form-control" type="text" value="<?php echo $u->matkul ?>" id="matkul" name="matkul" readonly>
				  <?php } ?>
            </div>
              <div class="col-md-6 form-group">  
				 	<label  for="kelas" class="form-label">Kelas :</label>			  
				 	<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input class="form-control" type="text" value="<?php echo $u->kelas ?>" id="kelas" name="kelas" readonly>
				  <?php } ?>
            </div>		
	        	<div class="col-md-6 form-group">
					<label for="tanggal" class="form-label">Tanggal :</label>	
	        		<div class="input-group">
		        		<span class="input-group-addon">
		        			<i class="fa fa-calendar"></i>
		        		</span>
		            	<input name="tanggal" class="form-control" type="date">					
					</div>
	        	</div>
              <div class="col-md-6 form-group">  
				 	<label  for="shift" class="form-label">Shift :</label>			  
				 	<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input class="form-control" type="text" value="<?php echo $u->shift ?>" id="shift" name="shift" readonly>
				  <?php } ?>
            </div>
        		<div class="col-md-12 form-group">
	        		<textarea name="materi" class="form-control" rows="10" placeholder="Materi Perkuliahan" ></textarea>
        		</div>
        		<div class="col-md-12 form-group">
        			<button name="mysubmit" class="btn btn-primary pull-right btn-flat" type="submit">Submit</button>
        		</div>
        	</div>
        </form>
        </div>
        </section>
 
	
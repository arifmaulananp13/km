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
        		Input BAP
        	</div>
        	<div class="box-body">
			<div class="col-md-6 form-group"> 
					<?php
					$no = 1;
					foreach($data as $u){
					?>
					<p>Dosen : <?php echo $u->dosen ?> </p>
					<p>Mata Kuliah : <?php echo $u->matkul ?> </p>
					<p>Kelas : <?php echo $u->kelas ?> </p>
					<p>Shift : <?php echo $u->shift ?> </p>
					<?php } ?>
					<p>Tanggal :
        <form action="<?php echo base_url(). 'baprps/input_bap_post'; ?>" method="post">						
	        		<div class="input-group">
		        		<span class="input-group-addon">
		        			<i class="fa fa-calendar"></i>
		        		</span>
		            	<input name="tanggal" class="form-control" type="date">					
					</div>
	        	</div>
			
			 <div class="col-md-6 form-group">                 
					<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input type="hidden" class="form-control" type="text" value="<?php echo $u->dosen ?>" id="dosen" name="dosen" readonly>
				  <?php } ?>
            </div>
             <div class="col-md-6 form-group">   
				 	<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input type="hidden" class="form-control" type="text" value="<?php echo $u->matkul ?>" id="matkul" name="matkul" readonly>
				  <?php } ?>
            </div>
              <div class="col-md-6 form-group">  			  
				 	<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input type="hidden" class="form-control" type="text" value="<?php echo $u->kelas ?>" id="kelas" name="kelas" readonly>
				  <?php } ?>
            </div>		
              <div class="col-md-6 form-group">  			  
				 	<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input type="hidden" class="form-control" type="text" value="<?php echo $u->shift ?>" id="shift" name="shift" readonly>
				  <?php } ?>
            </div>
              <div class="col-md-12 form-group">
					<a href="<?php echo base_url('baprps/input_bap2'); ?>" type="submit" class="btn btn-default btn-flat">Input Materi</a>
			  </div>
			  <div class="col-md-6 form-group"> 
					<?php
					$no = 1;
					foreach($rps as $i){
					?>
					<?php echo $i->matkul ?>
					<?php } ?>
				</div>
				<div class="col-md-12 form-group">
	        		<textarea name="materi" class="form-control" rows="4" placeholder="Materi Tambahan" ></textarea>
        		</div>
        		<div class="col-md-12 form-group">
        			<button name="mysubmit" class="btn btn-primary pull-right btn-flat" type="submit">Submit</button>
        		</div>
        	</div>
        </form>
		</form>
        </div>
        </section>
		<div class="content-wrapper">
		</div>
 
	
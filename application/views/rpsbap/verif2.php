      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'baprps/verif_bap_post'; ?>" method="post" class="box box-primary">
        	<div class="box-header with-border">
        		Verifikasi BAP
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
					<p>Ruangan : <?php echo $u->ruangan ?> </p>
					<?php } ?>
					<p>Tanggal :					
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
				  <input class="form-control" type="hidden" value="<?php echo $u->dosen ?>" id="dosen" name="dosen" readonly>
				  <input class="form-control" type="hidden" value="<?php echo $u->shift ?>" id="shift" name="shift" readonly>
				  <input class="form-control" type="hidden" value="<?php echo $u->ruangan ?>" id="ruangan" name="ruangan" readonly>
				  <?php } ?>
            </div>
             <div class="col-md-6 form-group">   
				 	<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input class="form-control" type="hidden" value="<?php echo $u->matkul ?>" id="matkul" name="matkul" readonly>
				  <?php } ?>
            </div>
              <div class="col-md-6 form-group">  		  
				 	<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input class="form-control" type="hidden" value="<?php echo $u->kelas ?>" id="kelas" name="kelas" readonly>
				  <?php } ?>
            </div>
             <div class="col-md-6 form-group"> 		 
				 	<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input class="form-control" type="hidden" value="<?php echo $u->no_tanggal ?>" id="tanggal" name="tanggal" readonly>
				  <?php } ?>
            </div>
			<div class="col-md-12 form-group">
		
				<?php
					$no = 1;
					foreach($data as $u){
				?>
					<textarea name="materi" id="materi" type="text" class="form-control" rows="5" placeholder="<?php echo $u->materi ?>"readonly></textarea>
				<?php } ?>
        	</div>
			 <div class="col-md-6 form-group">
			<label class="radio-inline"><input type="radio"  value="sesuai" name="status">Sesuai</label>
			<label class="radio-inline"><input type="radio"  value="tidak sesuai" name="status">Tidak Sesuai</label>
			</div>
			<div class="col-md-12 form-group">
	        		<textarea name="ket" id="ket" type="text" class="form-control" rows="5" placeholder="Keterangan"></textarea>
        	</div>
        	<div class="col-md-12 form-group">
        			<button class="btn btn-primary pull-right btn-flat" type="submit">Submit</button>
        	</div>
        	</div>
        </form>
        </div>
        </section>
		</div>
		<div class="content-wrapper">
		</div>



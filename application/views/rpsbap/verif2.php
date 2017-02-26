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
				 	<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input class="form-control" type="text" value="<?php echo $u->no_tanggal ?>" id="tanggal" name="tanggal" readonly>
				  <?php } ?>
            </div>
			<div class="col-md-12 form-group">
				 	<label for="materi" class="form-label">Materi Perkuliahan :</label>			
				<?php
					$no = 1;
					foreach($data as $u){
				?>
	        		<textarea name="materi" class="form-control" type="text" rows="5" placeholder="<?php echo $u->materi ?>" value="<?php echo $u->materi ?>"  readonly></textarea>
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



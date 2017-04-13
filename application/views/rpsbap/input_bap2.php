      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form <form action="<?php echo base_url(). 'baprps/input_bap_post'; ?>" method="post" class="box box-primary">
        	<div class="box-header with-border">
        		Input BAP
	<?php if ($this->session->flashdata('category_error')) { ?>
					<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i><?= $this->session->flashdata('category_error') ?></h4>
					</div>
	<?php } ?>
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
					<p>Pertemuan :
				<select name="pertemuan" id="pertemuan" class="form-control" required="">
                  <option disabled="" selected="">Pertemuan</option>
				  <?php foreach($pertemuan as $p){ ?>
				  <option value="<?php echo $p['pertemuan']; ?>"><?php echo $p['pertemuan']; ?></option>
				  <?php } ?>
                </select>
					<p>Tanggal :					
	        		<div class="input-group">
		        		<span class="input-group-addon">
		        			<i class="fa fa-calendar"></i>
		        		</span>
		            	<input name="tanggal" class="form-control" type="date" required="">					
					</div>
	        	</div>
			
			 <div class="col-md-6 form-group">                 
					<?php
					$no = 1;
					foreach($data as $u){
					?>
				  <input type="hidden" type="text" value="<?php echo $u->dosen ?>" id="dosen" name="dosen" readonly>
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
				  <input type="hidden" class="form-control" type="text" value="<?php echo $u->ruangan ?>" id="ruangan" name="ruangan" readonly>
				  <?php } ?>
            </div>
			<div class="col-md-12 form-group">
        	<table class="table table-bordered">
			<tr>
				<th class="col-md-1 form-group">Pertemuan</th>
				<th>Materi</th>
			</tr>
			<?php
			$no = 1;
			foreach($matkul as $i){
			?>
			<tr>
				<td>
				<input type="checkbox" name="materi" id="materi" value="<?php echo $i->materi ?>" readonly>
				<?php echo $i->pertemuan ?></td>
				<td><?php echo $i->materi ?></td>	
			</tr>
			<?php } ?>
			</table>
			</div>
				<div class="col-md-12 form-group">
	        		<textarea name="materitambahan" class="form-control" rows="4" placeholder="Materi Tambahan" ></textarea>
        		</div>
        		<div class="col-md-12 form-group">
        			<button class="btn btn-primary pull-right btn-flat" type="submit">Submit</button>
        		</div>
        	
        </form>
		</form>
        </div>
        </section>
		<div class="content-wrapper">
		</div>
 
	
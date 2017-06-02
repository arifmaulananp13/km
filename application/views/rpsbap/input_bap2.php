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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
			<table class="table no-border">
					<?php
					$no = 1;
					foreach($data as $u){
					?>
					<tr>
						<td class="col-md-3">Dosen</td>
						<td>: <?php echo $u->dosen ?></td>
					</tr>
					<tr>
						<td>Mata Kuliah</td>
						<td>: <?php echo $u->matkul ?></td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>: <?php echo $u->kelas ?></td>
					</tr>
					<tr>
						<td>Shift</td>
						<td>: <?php echo $u->shift ?></td>
					</tr>
					<tr>
						<td>Ruangan</td>
						<td>: <?php echo $u->ruangan ?></td>
					</tr>
					<?php } ?>
			</table>	
					<br>
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
				  <input type="hidden" class="form-control" type="text" value="<?php echo $u->kode_matkul ?>" id="kode_matkul" name="kode_matkul" readonly>
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
			foreach($kode_matkul as $i){
			?>
			<tr>
				<td>
				<input type="checkbox" name="materi[]" class="silabus" value="<?php echo $i->materi ?>">
				<?php echo $i->pertemuan ?>	</td>
				<td><?php echo $i->materi ?></td>	
			</tr>
			<?php } ?>
			<tr>
				<td><input type="checkbox" name="materi[]" id="dll" value="Dan lain-lain"></td>
				<td>Dan lain-lain</td>
			</tr>
			</table>
			</div>
				<div class="col-md-12 form-group">
	        		<textarea name="materitambahan" class="form-control" rows="4" placeholder="Materi Tambahan" ></textarea>
        		</div>
        		<div class="col-md-12 form-group">
        			<button class="btn btn-primary pull-right btn-flat" type="submit">Submit</button>
        		</div>
        	
        </form>
		</div>
        </section>
		</div>
		<div class="content-wrapper">
		</div>

<script>		
$(function(){
  $('#dll').on('click',function(){
    if($(this).is(':checked') === true){
       $('.silabus').prop('disabled','disabled');
    }else{      
      $('.silabus').prop("disabled", false);
    }
  });
});
</script>
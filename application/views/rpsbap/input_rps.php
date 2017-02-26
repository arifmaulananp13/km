      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'baprps/input_rps_post'; ?>" method="post" enctype="multipart/form-data" class="box box-primary">
        	<div class="box-header with-border">
        		Input RPS
        	</div>
        	<div class="box-body">
            <div class="col-md-6">
              <select name="dosen" id="dosen" class="form-control" required="">
                  <option disabled="" selected="">Dosen</option>
				  <?php foreach($dosen as $d){ ?>
				  <option value="<?php echo $d['nama_dosen']; ?>"><?php echo $d['nama_dosen']; ?></option>
				  <?php } ?>
                </select>
            </div>
	        	<div class="col-md-6 form-group">
		        	<select  name="matkul" id="matkul" class="form-control" required="">
		            <option disabled="" selected="">Matkul</option> 
					<?php foreach($matkul as $m) {?>
					<option value="<?php echo $m['nama_matkul']; ?>"><?php echo $m['nama_matkul']; ?></option>
					<?php } ?> 					
		            </select>
	        	</div>
			<div class="col-md-12 form-group ">
              <input name="picture" class="form-control" type="file">
            </div>
        		<div class="col-md-12 form-group">
        			<button class="btn btn-primary pull-right btn-flat" type="submit" name="fileSubmit" value="add">Submit</button>
        		</div>
        	</div>
        </form>
        </div>
        </section>
		</div>
		

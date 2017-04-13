      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'baprps/aksi_perpertemuan'; ?>" method="post" class="box box-primary">
        	<div class="box-header with-border">
        		Pilih Objek Perbandingan
        	</div>
        	<div class="box-body">
			<div class="col-md-6 form-group">
            <div class="col-md-12 form-group">
              <select name="pertemuan" id="pertemuan" class="form-control" required="">
                  <option disabled="" selected="">Pertemuan</option>
				  <?php foreach($pertemuan as $p){ ?>
				  <option value="<?php echo $p['pertemuan']; ?>"><?php echo $p['pertemuan']; ?></option>
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
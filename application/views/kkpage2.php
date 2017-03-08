      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'baprps/update'; ?>" method="post" class="box box-primary">
        	<div class="box-header with-border">
        	Update Level User	
        	</div>
        	<div class="box-body">
            <div class="col-md-12 form-group">
			<?php
			$no = 1;
			foreach($data as $u){
			?>
			<strong><p>Username</strong> : <?php echo $u->username ?></p>
			<strong><p>Nama User</strong> : <?php echo $u->nama_user ?></p>
			<input type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
			<?php } ?>
            </div>
            <div class="col-md-4 form-group">
              <select name="level" id="level" class="form-control" required="">
                  <option disabled="" selected="">Level</option>
				  <?php foreach($level as $d){ ?>
				  <option value="<?php echo $d['level']; ?>"><?php echo $d['level']; ?></option>
				  <?php } ?>
                </select>
            </div>
        	<div class="col-md-12 form-group">
        		<button name="mysubmit" class="btn btn-default pull-left btn-flat" type="submit">Submit</button>
        	</div>			

        	</div>
        </form>
        </div>
        </section>
     
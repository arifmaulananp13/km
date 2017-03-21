              <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>

        <section class="content">
		  <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'nilai/input_nilai_post'; ?>" method="post" enctype="multipart/form-data" class="box box-primary">

          <div class="box-header with-border">
        		Input Nilai
        	</div>
        	<div class="box-body">
            <div class="col-md-12 form-group">
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

               <?php
               $no = 1;
               foreach($data as $u){
               ?>
               <input type="hidden" class="form-control" type="text" value="<?php echo $u->matkul ?>" id="matkul" name="matkul" readonly>
               <?php } ?>

               <?php
               $no = 1;
               foreach($data as $u){
               ?>
               <input type="hidden" class="form-control" type="text" value="<?php echo $u->kelas ?>" id="kelas" name="kelas" readonly>
               <?php } ?>

               <?php
               $no = 1;
               foreach($data as $u){
               ?>
               <input type="hidden" class="form-control" type="text" value="<?php echo $u->shift ?>" id="shift" name="shift" readonly>
               <?php } ?>
                 </div>

      			<div class="col-md-12 form-group ">
              <input name="picture" class="form-control" type="file">
            </div>

            <div class="col-md-12 form-group">
              <textarea name="deskripsi" class="form-control" rows="10" placeholder="deskripsi" ></textarea>
            </div>

        		<div class="col-md-12 form-group">
        			<button class="btn btn-primary pull-right btn-flat" type="submit" name="fileSubmit" value="add">Submit</button>
        		</div>

        	</div>
        </form>
        </div>
        </section>

        <div class="content-wrapper"></div>

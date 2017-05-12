      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
		  <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'baprps/aksi_satuobjek'; ?>" method="post" class="box box-primary">
        	<div class="box-header with-border">
        		Pilih Objek
        	</div>
        	<div class="box-body">
			<div class="col-md-12 form-group">
            <div class="col-md-12 form-group">
              <select name="dosen" id="dosen" class="form-control" required="">
                  <option disabled="" selected="">Dosen</option>
				  <?php foreach($dosen as $d){ ?>
				  <option value="<?php echo $d['dosen']; ?>"><?php echo $d['dosen']; ?></option>
				  <?php } ?>
                </select>
            </div>
	        	<div class="col-md-12 form-group">
		        	<select name="matkul" id="matkul" class="form-control" required="">
		            <option disabled="" selected="">Mata Kuliah</option>
					<?php foreach($matkul as $m) {?>
					<option value="<?php echo $m['id_matkul']; ?>"><?php echo $m['nama_matkul']; ?></option>
					<?php } ?> 					
		            </select>
	        	</div>
	        	<div class="col-md-12 form-group">
		        	<select name="kelas" id="kelas" class="form-control" required="">
		            <option disabled="" selected="">Kelas</option> 	
					<?php foreach($kelas as $k) {?>
					<option value="<?php echo $k['id_kelas']; ?>"><?php echo $k['nama_kelas']; ?></option>
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

<script type="text/javascript">
 
<?php 
$this->load->model('combobox_model');
foreach($dosen as $dm) { ?>
	var <?php echo str_replace(' ','',$dm['dosen'].$dm['dosen']); ?> = [
		<?php $resultM = $this->combobox_model->getMatkul($dm['dosen']); ?>
		<?php foreach ($resultM as $rm) { ?>
        {display: "<?php echo $rm['matkul']; ?>", value: "<?php echo $rm['kode_matkul']; ?>" },
		<?php } ?>];
<?php } ?> 

      
$("#dosen").change(function() {
             var parent = $(this).val();
            switch(parent){
				<?php foreach($dosen as $dd){ ?>
              case '<?php echo $dd['dosen']; ?>':
                 lista(<?php echo str_replace(' ','',$dd['dosen'].$dd['dosen']); ?>);
                break;
				<?php } ?> 
              default: //default child option is blank
                $("#matkul").html('');  
                break;
                 }
        });
        function lista(array_list)
        {
          $("#matkul").html(""); //reset child options
          $(array_list).each(function (i) { //populate child options
          $("#matkul").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
          });
        }
		
</script>	
<script type="text/javascript">
<?php 
$this->load->model('combobox_model');
foreach($matkul as $mk) { ?>
	var <?php echo str_replace(' ','',$mk['matkul'].$mk['kode_matkul']); ?> = [
		<?php $resultK = $this->combobox_model->getKelas($mk['kode_matkul']); ?>
		<?php foreach ($resultK as $rk) { ?>
        {display: "<?php echo $rk['kelas']; ?>", value: "<?php echo $rk['kelas']; ?>" },
		<?php } ?>];
<?php } ?> 

      
$("#matkul").change(function() {
             var parent = $(this).val();
            switch(parent){
				<?php foreach($matkul as $tt){ ?>
              case '<?php echo $tt['kode_matkul']; ?>':
                 listb(<?php echo str_replace(' ','',$tt['matkul'].$tt['kode_matkul']); ?>);
                break;
				<?php } ?> 
              default: //default child option is blank
                $("#kelas").html('');  
                break;
                 }
        });
        function listb(array_list)
        {
          $("#kelas").html(""); //reset child options
          $(array_list).each(function (i) { //populate child options
          $("#kelas").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
          });
        }
</script>	
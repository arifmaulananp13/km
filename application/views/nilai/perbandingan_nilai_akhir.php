  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        {title}
      </h1>
    </section>
    <section class="content">
  <div class="col-md-12 with-padding">
    <form action="<?php echo base_url(). 'nilai/lihat_perbandingan_nilai_akhir'; ?>" method="post" class="box box-primary">
      <div class="box-header with-border">
        Pilih Objek Perbandingan
      </div>
      <div class="box-body">
  <div class="col-md-6 form-group">
        <div class="col-md-12 form-group">
          <input type="text" class="form-control" name="dosen2" id="dosen2" value="<?php echo $this->session->userdata('nama_user')?>" readonly>
          <select name="matkul" id="matkul" class="form-control" required="">
            <option disabled="" selected="">Mata Kuliah</option>
            <?php foreach($matkul as $m) {?>
            <option value="<?php echo $m['matkul']; ?>"><?php echo $m['matkul']; ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="col-md-12 form-group">
          <select name="dosen" id="dosen" class="form-control" required="">
            <option disabled="" selected="">Dosen Lainnya</option>
            <?php foreach($dosen as $d) {?>
            <option value="<?php echo $d['dosen']; ?>"><?php echo $d['dosen']; ?></option>
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
    foreach($matkul as $dm) { ?>
    	var <?php echo str_replace(' ','',$dm['matkul'].$dm['matkul']); ?> = [
    		<?php $resultM = $this->combobox_model->getDosenper($dm['matkul']); ?>
    		<?php foreach ($resultM as $rm) { ?>
            {display: "<?php echo $rm['dosen']; ?>", value: "<?php echo $rm['dosen']; ?>" },
    		<?php } ?>];
    <?php } ?>


    $("#matkul").change(function() {
                 var parent = $(this).val();
                switch(parent){
    				<?php foreach($matkul as $dd){ ?>
                  case '<?php echo $dd['matkul']; ?>':
                     list(<?php echo str_replace(' ','',$dd['matkul'].$dd['matkul']); ?>);
                    break;
    				<?php } ?>
                  default: //default child option is blank
                    $("#dosen").html('');
                    break;
                     }
            });
            function list(array_list)
            {
              $("#dosen").html(""); //reset child options
              $(array_list).each(function (i) { //populate child options
              $("#dosen").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
              });
            }
    </script>

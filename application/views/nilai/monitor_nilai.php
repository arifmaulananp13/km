<div class="content-wrapper">
  <section class="content-header">
    <h1>
      {title}
    </h1>
  </section>
  <section class="content">
<div class="col-md-12 with-padding">
  <form action="<?php echo base_url(). 'nilai/aksi_monitor'; ?>" method="post" class="box box-primary">
    <div class="box-header with-border">
      Pilih Objek Perbandingan
    </div>
    <div class="box-body">
<div class="col-md-6 form-group">
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
        </select>
      </div>
      <div class="col-md-12 form-group">
       <select name="kelas" id="kelas" class="form-control" required="">
        <option disabled="" selected="">Kelas</option>
      </select>
    </div>
<label for="dosen1" class="form-label">Compare dengan :</label>
        <div class="col-md-12 form-group">
          <select name="dosen1" id="dosen1" class="form-control" required="">
            <option disabled="" selected="">Dosen</option>
            <?php foreach($dosen as $d){ ?>
            <option value="<?php echo $d['dosen']; ?>"><?php echo $d['dosen']; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="col-md-12 form-group">
         <select name="matkul1" id="matkul1" class="form-control" required="">
           <option disabled="" selected="">Mata Kuliah</option>
        </select>
      </div>
      <div class="col-md-12 form-group">
       <select name="kelas1" id="kelas1" class="form-control" required="">
        <option disabled="" selected="">Kelas</option>
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

<script>
$(document).ready(function(){
$("#dosen").on('change', function(){
$.ajax({
  url: "/km/api/list_matkul",
  type: "get",
  data: {
    dosen: $("#dosen").val()
  },
  success: function(response) {
    $('#matkul').html('<option disabled="" selected="">Mata Kuliah</option>');
    if(response.length > 0){
      response.forEach(function(value){
         $('#matkul').append('<option value="'+value.matkul+'">'+value.matkul+'</option>');
      })
    }
  },
  error: function(xhr) {
  }
});
});

$("#matkul").on('change', function(){
$.ajax({
  url: "/km/api/list_kelas",
  type: "get",
  data: {
    dosen: $("#dosen").val(),
    matkul: $("#matkul").val()
  },
  success: function(response) {
    $('#kelas').html('<option disabled="" selected="">Kelas</option>');
    if(response.length > 0){
      response.forEach(function(value){
         $('#kelas').append('<option value="'+value.kelas+'">'+value.kelas+'</option>');
      })
    }
  },
  error: function(xhr) {
  }
});
});
});
</script>

<script>
$(document).ready(function(){
$("#dosen1").on('change', function(){
$.ajax({
  url: "/km/api/list_matkul",
  type: "get",
  data: {
    dosen: $("#dosen1").val()
  },
  success: function(response) {
    $('#matkul1').html('<option disabled="" selected="">Mata Kuliah</option>');
    if(response.length > 0){
      response.forEach(function(value){
         $('#matkul1').append('<option value="'+value.matkul+'">'+value.matkul+'</option>');
      })
    }
  },
  error: function(xhr) {
  }
});
});

$("#matkul1").on('change', function(){
$.ajax({
  url: "/km/api/list_kelas",
  type: "get",
  data: {
    dosen: $("#dosen1").val(),
    matkul: $("#matkul1").val()
  },
  success: function(response) {
    $('#kelas1').html('<option disabled="" selected="">Kelas</option>');
    if(response.length > 0){
      response.forEach(function(value){
         $('#kelas1').append('<option value="'+value.kelas+'">'+value.kelas+'</option>');
      })
    }
  },
  error: function(xhr) {
  }
});
});
});
</script>

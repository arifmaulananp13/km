<div class="content-wrapper">
  <section class="content-header">
    <h1>
      {title}
    </h1>
  </section>
  <section class="content">
<div class="col-md-12 with-padding">
  <form class="box box-primary">

<div class="box-header with-border">
Compare
</div>

<div class="box-body">
      <div class="col-md-6 form-group">
    <table class ="table table-bordered" >
<tr>
<?php
$no = 1;
foreach(array_slice($data,0,1) as $u){
?>
  <td><p>Dosen : <?php echo $u->dosen ?></p>
    <p>Mata Kuliah : <?php echo $u->matkul ?></p>
    <p>Kelas : <?php echo $u->kelas ?></p>

  </td>


<?php } ?>
</tr>
</table>


    <table class ="table table-bordered" >
<tr>
  <th>Grade</th>
  <th>Jumlah</th>
</tr>



<tr><td><p> A</p></td></tr>
<tr><td><p> AB</p></td></tr>
<tr><td><p> B</p></td></tr>
<tr><td><p> BC</p></td></tr>
<tr><td><p> C</p></td></tr>
<tr><td><p> D</p></td></tr>
<tr><td><p> E</p></td></tr>

</table>
      </div>

<div class="col-md-6 form-group">
    <table class ="table table-bordered" >
<tr>
<?php
$no = 1;
foreach(array_slice($data1,0,1) as $i){
?>
  <td><p>Dosen : <?php echo $i->dosen ?></p>
    <p>Mata Kuliah : <?php echo $i->matkul ?></p>
    <p>Kelas : <?php echo $i->kelas ?></p>
  </td>


<?php } ?>
</tr>
</table>

<table class ="table table-bordered" >
<tr>
<th>Grade</th>
</tr>


<?php

foreach($data1 as $i){
?>
<tr>
<td>
  <?php
  $array[] = $i->grade;
  print_r(array_count_values($array));
  ?>
</td>
<?php } ?>
</tr>
</table>
      </div>

    </div>
  </form>
  </div>
  </section>

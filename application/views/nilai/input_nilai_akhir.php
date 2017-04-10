<div class="content-wrapper">
      <input>
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
      <div class="col-md-12 with-padding">
        <form class="box box-primary">
          <div class="box-header with-border">
            Pilih Matakuliah
          </div>
          <div class="box-body">
            <div class="col-md-12" form-group>
          <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>NAMA</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>TUGAS</th>
        <th>TOTAL</th>
        <th>GRADE</th>
        <th>DOSEN</th>
     </tr>
      <?php
      $no = 1;
      foreach($data as $u){
      ?>
      <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $u->nama ?></td>
        <td><?php echo $u->nim ?></td>
        <td><?php echo $u->uts ?></td>
        <td><?php echo $u->uas ?></td>
        <td><?php echo $u->tugas ?></td>
        <td><?php echo $u->total ?></td>
        <td><?php echo $u->grade ?></td>
        <td><?php echo $u->dosen ?></td>
        <td><?php echo anchor('excel/input_nilai_akhir2/'.$u->id_jadwal,'Input Nilai')?></td>
      </tr>
      <?php } ?>
      </table>
            </div>
          </div>
        </form>
        </div>
        </section>

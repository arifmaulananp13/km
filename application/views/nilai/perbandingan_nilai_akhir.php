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
          <input type="hidden" class="form-control" name="dosen" id="dosen" value="<?php echo $this->session->userdata('nama_user')?>" readonly>
          <select name="matkul" id="matkul" class="form-control" required="">
            <option disabled="" selected="">Mata Kuliah</option>
            <?php foreach($matkul as $m) {?>
            <option value="<?php echo $m['nama_matkul']; ?>"><?php echo $m['nama_matkul']; ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="col-md-12 form-group">
          <input type="hidden" class="form-control" name="dosen" id="dosen" value="<?php echo $this->session->userdata('nama_user')?>" readonly>
          <select name="dosen2" id="matkul" class="form-control" required="">
            <option disabled="" selected="">Dosen Lainnya</option>
            <?php foreach($dosen as $d) {?>
            <option value="<?php echo $d['nama_dosen']; ?>"><?php echo $d['nama_dosen']; ?></option>
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

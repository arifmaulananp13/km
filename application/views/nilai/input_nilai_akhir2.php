    <div class="content-wrapper">
        <section class="content-header">
          <h1>
            {title}
          </h1>
        </section>
        <section class="content">
      <div class="col-md-12 with-padding">
        <form action="<?php echo base_url(). 'excel/upload/'; ?>" method="post" enctype="multipart/form-data" class="box box-primary">
          <div class="box-header with-border">
            Input Nilai Akhir
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
                    <select name="kelas" id="kelas" class="form-control" required="">
                      <option disabled="" selected="">Kelas</option>
                <?php foreach($kelas as $k) {?>
                <option value="<?php echo $k['nama_kelas']; ?>"><?php echo $k['nama_kelas']; ?></option>
                <?php } ?>
                      </select>
                  </div>
                </div>

          <div class="col-md-12 form-group ">
              <input name="file" class="form-control" type="file">
            </div>
            <div class="col-md-12 form-group">
              <textarea name="deskripsi" class="form-control" rows="10" placeholder="Deskripsi perkuliahan" ></textarea>
            </div>
            <div class="col-md-12 form-group">
              <button class="btn btn-primary pull-right btn-flat" type="submit" name="fileSubmit" value="add">Submit</button>
            </div>
            </div>
        </form>
        </div>
        </section>
    </div>

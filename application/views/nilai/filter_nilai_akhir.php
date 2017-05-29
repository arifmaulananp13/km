<div class="content-wrapper">
    <section class="content-header">
        <h1>
      {title}
    </h1>
    </section>
    <section class="content">
        <div class="col-md-12 with-padding">
            <form action="<?php echo base_url(). 'nilai/lihat_filter_nilai_akhir'; ?>" method="post" class="box box-primary">
                <div class="box-header with-border">
                    Pilih Objek Filter
                </div>
                <div class="box-body">
                    <div class="col-md-6 form-group">
                        <div class="col-md-12 form-group">
                            <select name="dosen" id="pilihan" class="form-control" required="">
                              <option disabled="" selected="">Dosen</option>
                              <?php foreach($dosen as $d) {?>
                              <option value="<?php echo $d['nama_dosen']; ?>"><?php echo $d['nama_dosen']; ?></option>
                              <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-12 form-group">
                            <select id="hasilPilih" class="form-control" required="" name="matkul">
                              <option disabled="" selected="">Pilih</option>
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

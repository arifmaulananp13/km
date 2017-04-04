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
            <?php if ($this->session->flashdata('category_success')) { ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i><?= $this->session->flashdata('category_success') ?></h4>
              </div>
              <?php } ?>
          </div>
          <div class="box-body">



          <div class="col-md-12 form-group ">
              <input name="file" class="form-control" type="file">
            </div>
            <div class="col-md-12 form-group">
              <button class="btn btn-primary pull-right btn-flat" type="submit" name="fileSubmit" value="add">Submit</button>
            </div>
            </div>
        </form>
        </div>
        </section>
    </div>

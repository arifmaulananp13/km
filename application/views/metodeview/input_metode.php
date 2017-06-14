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
              Input Metode Ajar
            </div>
            <div class="box-body">
             <div class="col-md-12 form-group">
                <table class ="table table-bordered" >
					<tr>
						<th class="col-md-1">Pertemuan</th>
						<th class="col-md-4">Tujuan</th>
						<th class="col-md-2">Metode</th>
					</tr>
			<?php
			$no = 1;
			foreach($data as $u){
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $data->metode?></td>				
			</tr>
			<?php } ?>	
				</table>
       </div>
     </div>
   </form>
 </div>
</section>

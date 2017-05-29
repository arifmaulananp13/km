<div class="content-wrapper">
        <section class="content-header">
          <h1>
              Hasil Filter
          </h1>
        </section>
        <section class="content">
      <?php for ($i=0; $i < sizeof($data) ; $i++) {
      ?>
		  <div class="col-md-12 with-padding">
        <form class="box box-primary">
        	<div class="box-header with-border">
        		Lihat Nilai Akhir
        	</div>

          <div class="box-body">

            <div class="col-md-12 form-group">
            <?php
            $no = 1;
            foreach(array_slice($data[$i],0,1) as $u){
            ?>
              <p>Dosen : <?php echo $u->dosen ?></p>
              <p>Matakuliah : <?php echo $u->matkul ?></p>
              <p>Kelas : <?php echo $u->kelas ?></p>

            <?php } ?>
          </div>

          <div class="col-md-12 form-group">
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
			</tr>
			<?php
			$no = 1;
			foreach($data[$i] as $u){
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
			</tr>
			<?php } ?>
			</table>
            </div>

            <div class="col-md-12 form-group">
            <?php
            $no = 1;
            foreach(array_slice($data[$i],0,1) as $u){
            ?>
              <p>Deskripsi : <?php echo $u->deskripsi ?></p>
            <?php } ?>
          </div>
        	</div>
        </form>
        </div>
        <?php
        } ?>
        </section>
	</div>


  <?php for ($i=0; $i < sizeof($data) ; $i++) {
    foreach($data[$i] as $u){
        $nama[] = $u->nama;
        $uts[] = (float)$u->uts;
        $uas[] = (float)$u->uas;
    }
  ?>

 	<div class="content-wrapper">
          <canvas id="myChart<?php echo $i?>" width="400" height="200"></canvas>
  </div>

  <script>
     var ctx = document.getElementById("myChart<?php echo $i?>");
     var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
             labels: <?php echo json_encode($nama); ?>,
             datasets: [{
                     label: 'Grafik Nilai Mahasiswa UTS',
                     data: <?php echo json_encode($uts); ?>,
                     backgroundColor: [
                         'rgba(255, 99, 132, 0.2)',
                         'rgba(54, 162, 235, 0.2)',
                         'rgba(255, 206, 86, 0.2)',
                         'rgba(75, 192, 192, 0.2)',
                         'rgba(153, 102, 255, 0.2)',
                         'rgba(255, 159, 64, 0.2)',
                         'rgba(255, 99, 132, 0.2)',
                         'rgba(54, 162, 235, 0.2)',
                         'rgba(255, 206, 86, 0.2)',
                         'rgba(75, 192, 192, 0.2)',
                         'rgba(153, 102, 255, 0.2)',
                         'rgba(255, 159, 64, 0.2)'
                     ],
                     borderColor: [
                         'rgba(255,99,132,1)',
                         'rgba(54, 162, 235, 1)',
                         'rgba(255, 206, 86, 1)',
                         'rgba(75, 192, 192, 1)',
                         'rgba(153, 102, 255, 1)',
                         'rgba(255, 159, 64, 1)',
                         'rgba(255, 99, 132, 0.2)',
                         'rgba(54, 162, 235, 0.2)',
                         'rgba(255, 206, 86, 0.2)',
                         'rgba(75, 192, 192, 0.2)',
                         'rgba(153, 102, 255, 0.2)',
                         'rgba(255, 159, 64, 0.2)'
                     ],
                     borderWidth: 1
                 },
                {
                    label: "Grafik Nilai Mahasiswa UAS",
                    backgroundColor: "rgba(255,99,132,0.2)",
                    borderColor: "rgba(255,99,132,1)",
                    pointBackgroundColor: "rgba(255,99,132,1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(255,99,132,1)",
                    data: <?php echo json_encode($uas); ?>
                }]
         },
         options: {
             scales: {
                 yAxes: [{
                         ticks: {
                             beginAtZero: true
                         }
                     }]
             }
         }
     });
 </script>
 <?php
 } ?>

<!-- dashboard inner -->
<div class="midde_cont">
	<div class="container-fluid">
		<div class="row column_title">
			<div class="col-md-12">
				<div class="page_title">
					<h2>Dashboard</h2>
				</div>
			</div>
		</div>
		<div class="row column1">
			<div class="col-md-6 col-lg-3">
				<div class="full counter_section margin_bottom_30">
					<div class="couter_icon">
						<div>
							<i class="fa fa-user yellow_color"></i>
						</div>
					</div>
					<div class="counter_no">
						<div>
							<p class="total_no"><?= $total_kelas ?></p>
							<p class="head_couter">Total Kelas</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="full counter_section margin_bottom_30">
					<div class="couter_icon">
						<div>
							<i class="fa fa-clock-o blue1_color"></i>
						</div>
					</div>
					<div class="counter_no">
						<div>
							<p class="total_no"><?= $total_warga ?></p>
							<p class="head_couter">Total Warga</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="full counter_section margin_bottom_30">
					<div class="couter_icon">
						<div>
							<i class="fa fa-cloud-download green_color"></i>
						</div>
					</div>
					<div class="counter_no">
						<div>
							<p class="total_no"><?= $total_pendaftar ?></p>
							<p class="head_couter">Total Warga Daftar</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="full counter_section margin_bottom_30">
					<div class="couter_icon">
						<div>
							<i class="fa fa-comments-o red_color"></i>
						</div>
					</div>
					<div class="counter_no">
						<div>
							<p class="total_no"><?= $total_program ?></p>
							<p class="head_couter">Total Kegiatan PKBM</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card-body">
			<?php
			echo form_open('admin/lulus_tahunan_yayasan') ?>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label>Data Kelulusan Per Tahun</label>
						<select name="tahun" class="form-control">
							<?php
							$mulai = date('Y') - 1;
							for ($i = $mulai; $i < $mulai + 10; $i++) {
								$sel = $i == date('Y') ? 'selected="selected"' : '';
								echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Data Kelulusan</button>
					</div>
				</div>
			</div>
			<?php
			echo form_close() ?>
		</div>
		<div class="row column1">
			<div class="col-lg-6">
				<div class="white_shd full margin_bottom_30">
					<div class="full graph_head">
						<div class="heading1 margin_0">
							<h2>Grafik Analisis Kecamatan</h2>
						</div>
					</div>
					<div class="map_section padding_infor_info">
						<?php
						foreach ($grafik as $key => $value) {
							$kecamatan[] = $value->kecamatan;
							$total[] = $value->total;
						}
						?>
						<canvas id="myChart"></canvas>
						<script>
							var ctx = document.getElementById('myChart');
							var myChart = new Chart(ctx, {
								type: 'pie',
								data: {
									labels: <?= json_encode($kecamatan) ?>,
									datasets: [{
										label: 'Grafik Analisis Sesuai Alamat',
										data: <?= json_encode($total) ?>,
										backgroundColor: [
											'rgba(255, 99, 132, 0.80)',
											'rgba(54, 162, 235, 0.80)',
											'rgba(255, 206, 86, 0.80)',
											'rgba(75, 192, 192, 0.80)',
											'rgba(153, 102, 255, 0.80)',
											'rgba(255, 159, 64, 0.80)',
											'rgba(201, 76, 76, 0.3)',
											'rgba(201, 77, 77, 1)',
											'rgba(0, 140, 162, 1)',
											'rgba(158, 109, 8, 1)',
											'rgba(201, 76, 76, 0.8)',
											'rgba(0, 129, 212, 1)',
											'rgba(201, 77, 201, 1)',
											'rgba(255, 207, 207, 1)',
											'rgba(201, 77, 77, 1)',
											'rgba(128, 98, 98, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(128, 128, 128, 1)',
											'rgba(255, 99, 132, 0.80)',
											'rgba(54, 162, 235, 0.80)',
											'rgba(255, 206, 86, 0.80)',
											'rgba(75, 192, 192, 0.80)',
											'rgba(153, 102, 255, 0.80)',
											'rgba(255, 159, 64, 0.80)',
											'rgba(201, 76, 76, 0.3)',
											'rgba(201, 77, 77, 1)',
											'rgba(0, 140, 162, 1)',
											'rgba(158, 109, 8, 1)',
											'rgba(201, 76, 76, 0.8)',
											'rgba(0, 129, 212, 1)',
											'rgba(201, 77, 201, 1)',
											'rgba(255, 207, 207, 1)',
											'rgba(201, 77, 77, 1)',
											'rgba(128, 98, 98, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(128, 128, 128, 1)'
										],
										borderColor: [
											'rgba(255, 99, 132, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(255, 159, 64, 1)',
											'rgba(201, 76, 76, 0.3)',
											'rgba(201, 77, 77, 1)',
											'rgba(0, 140, 162, 1)',
											'rgba(158, 109, 8, 1)',
											'rgba(201, 76, 76, 0.8)',
											'rgba(0, 129, 212, 1)',
											'rgba(201, 77, 201, 1)',
											'rgba(255, 207, 207, 1)',
											'rgba(201, 77, 77, 1)',
											'rgba(128, 98, 98, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(128, 128, 128, 1)',
											'rgba(255, 99, 132, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(255, 159, 64, 1)',
											'rgba(201, 76, 76, 0.3)',
											'rgba(201, 77, 77, 1)',
											'rgba(0, 140, 162, 1)',
											'rgba(158, 109, 8, 1)',
											'rgba(201, 76, 76, 0.8)',
											'rgba(0, 129, 212, 1)',
											'rgba(201, 77, 201, 1)',
											'rgba(255, 207, 207, 1)',
											'rgba(201, 77, 77, 1)',
											'rgba(128, 98, 98, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(128, 128, 128, 1)'
										],
										fill: false,
										borderWidth: 1
									}]
								},
								options: {
									scales: {
										// yAxes: [{
										// 	ticks: {
										// 		beginAtZero: true
										// 	}
										// }]
									}
								}
							});
						</script>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="white_shd full margin_bottom_30">
					<div class="full graph_head">
						<div class="heading1 margin_0">
							<h2>Grafik Analisis Usia</h2>
						</div>
					</div>
					<div class="map_section padding_infor_info">
						<?php
						foreach ($grafik_usia as $key => $value) {
							$range_umur[] = $value->range_umur;
							$jumlah[] = $value->jumlah;
						}
						?>
						<canvas id="myChart1"></canvas>
						<script>
							var ctx = document.getElementById('myChart1');
							var myChart1 = new Chart(ctx, {
								type: 'bar',
								data: {
									labels: <?= json_encode($range_umur) ?>,
									datasets: [{
										label: 'Grafik Analisis Sesuai Usia',
										data: <?= json_encode($jumlah) ?>,
										backgroundColor: [
											'rgba(255, 99, 132, 0.80)',
											'rgba(54, 162, 235, 0.80)',
											'rgba(255, 206, 86, 0.80)',
											'rgba(75, 192, 192, 0.80)',
											'rgba(153, 102, 255, 0.80)',
											'rgba(255, 159, 64, 0.80)',
											'rgba(201, 76, 76, 0.3)',
											'rgba(201, 77, 77, 1)',
											'rgba(0, 140, 162, 1)',
											'rgba(158, 109, 8, 1)',
											'rgba(201, 76, 76, 0.8)',
											'rgba(0, 129, 212, 1)',
											'rgba(201, 77, 201, 1)',
											'rgba(255, 207, 207, 1)',
											'rgba(201, 77, 77, 1)',
											'rgba(128, 98, 98, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(128, 128, 128, 1)',
											'rgba(255, 99, 132, 0.80)',
											'rgba(54, 162, 235, 0.80)',
											'rgba(255, 206, 86, 0.80)',
											'rgba(75, 192, 192, 0.80)',
											'rgba(153, 102, 255, 0.80)',
											'rgba(255, 159, 64, 0.80)',
											'rgba(201, 76, 76, 0.3)',
											'rgba(201, 77, 77, 1)',
											'rgba(0, 140, 162, 1)',
											'rgba(158, 109, 8, 1)',
											'rgba(201, 76, 76, 0.8)',
											'rgba(0, 129, 212, 1)',
											'rgba(201, 77, 201, 1)',
											'rgba(255, 207, 207, 1)',
											'rgba(201, 77, 77, 1)',
											'rgba(128, 98, 98, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(128, 128, 128, 1)'
										],
										borderColor: [
											'rgba(255, 99, 132, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(255, 159, 64, 1)',
											'rgba(201, 76, 76, 0.3)',
											'rgba(201, 77, 77, 1)',
											'rgba(0, 140, 162, 1)',
											'rgba(158, 109, 8, 1)',
											'rgba(201, 76, 76, 0.8)',
											'rgba(0, 129, 212, 1)',
											'rgba(201, 77, 201, 1)',
											'rgba(255, 207, 207, 1)',
											'rgba(201, 77, 77, 1)',
											'rgba(128, 98, 98, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(128, 128, 128, 1)',
											'rgba(255, 99, 132, 1)',
											'rgba(54, 162, 235, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(255, 159, 64, 1)',
											'rgba(201, 76, 76, 0.3)',
											'rgba(201, 77, 77, 1)',
											'rgba(0, 140, 162, 1)',
											'rgba(158, 109, 8, 1)',
											'rgba(201, 76, 76, 0.8)',
											'rgba(0, 129, 212, 1)',
											'rgba(201, 77, 201, 1)',
											'rgba(255, 207, 207, 1)',
											'rgba(201, 77, 77, 1)',
											'rgba(128, 98, 98, 1)',
											'rgba(0, 0, 0, 1)',
											'rgba(128, 128, 128, 1)'
										],
										fill: false,
										borderWidth: 1
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
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="white_shd full margin_bottom_30">
					<div class="full graph_head">
						<div class="heading1 margin_0">
							<h2>Grafik Analisis Semster Genap</h2>
						</div>
					</div>
					<div class="map_section padding_infor_info">
						<?php
						foreach ($gafik_genap as $key => $value) {
							$semester_genap[] = $value->semester_genap;
							$total_genap[] = $value->total_genap;
						}
						?>
						<div class="area_chart">
							<canvas id="myLine"></canvas>
							<script>
								var ctx = document.getElementById('myLine');
								var myChart1 = new Chart(ctx, {
									type: 'bar',
									data: {
										labels: <?= json_encode($semester_genap) ?>,
										datasets: [{
											label: 'Grafik Analisis Semster Genap',
											data: <?= json_encode($total_genap) ?>,
											backgroundColor: [
												'rgba(255, 99, 132, 0.80)',
												'rgba(54, 162, 235, 0.80)',
												'rgba(255, 206, 86, 0.80)',
												'rgba(75, 192, 192, 0.80)',
												'rgba(153, 102, 255, 0.80)',
												'rgba(255, 159, 64, 0.80)',
												'rgba(201, 76, 76, 0.3)',
												'rgba(201, 77, 77, 1)',
												'rgba(0, 140, 162, 1)',
												'rgba(158, 109, 8, 1)',
												'rgba(201, 76, 76, 0.8)',
												'rgba(0, 129, 212, 1)',
												'rgba(201, 77, 201, 1)',
												'rgba(255, 207, 207, 1)',
												'rgba(201, 77, 77, 1)',
												'rgba(128, 98, 98, 1)',
												'rgba(0, 0, 0, 1)',
												'rgba(128, 128, 128, 1)',
												'rgba(255, 99, 132, 0.80)',
												'rgba(54, 162, 235, 0.80)',
												'rgba(255, 206, 86, 0.80)',
												'rgba(75, 192, 192, 0.80)',
												'rgba(153, 102, 255, 0.80)',
												'rgba(255, 159, 64, 0.80)',
												'rgba(201, 76, 76, 0.3)',
												'rgba(201, 77, 77, 1)',
												'rgba(0, 140, 162, 1)',
												'rgba(158, 109, 8, 1)',
												'rgba(201, 76, 76, 0.8)',
												'rgba(0, 129, 212, 1)',
												'rgba(201, 77, 201, 1)',
												'rgba(255, 207, 207, 1)',
												'rgba(201, 77, 77, 1)',
												'rgba(128, 98, 98, 1)',
												'rgba(0, 0, 0, 1)',
												'rgba(128, 128, 128, 1)'
											],
											borderColor: [
												'rgba(255, 99, 132, 1)',
												'rgba(54, 162, 235, 1)',
												'rgba(255, 206, 86, 1)',
												'rgba(75, 192, 192, 1)',
												'rgba(153, 102, 255, 1)',
												'rgba(255, 159, 64, 1)',
												'rgba(201, 76, 76, 0.3)',
												'rgba(201, 77, 77, 1)',
												'rgba(0, 140, 162, 1)',
												'rgba(158, 109, 8, 1)',
												'rgba(201, 76, 76, 0.8)',
												'rgba(0, 129, 212, 1)',
												'rgba(201, 77, 201, 1)',
												'rgba(255, 207, 207, 1)',
												'rgba(201, 77, 77, 1)',
												'rgba(128, 98, 98, 1)',
												'rgba(0, 0, 0, 1)',
												'rgba(128, 128, 128, 1)',
												'rgba(255, 99, 132, 1)',
												'rgba(54, 162, 235, 1)',
												'rgba(255, 206, 86, 1)',
												'rgba(75, 192, 192, 1)',
												'rgba(153, 102, 255, 1)',
												'rgba(255, 159, 64, 1)',
												'rgba(201, 76, 76, 0.3)',
												'rgba(201, 77, 77, 1)',
												'rgba(0, 140, 162, 1)',
												'rgba(158, 109, 8, 1)',
												'rgba(201, 76, 76, 0.8)',
												'rgba(0, 129, 212, 1)',
												'rgba(201, 77, 201, 1)',
												'rgba(255, 207, 207, 1)',
												'rgba(201, 77, 77, 1)',
												'rgba(128, 98, 98, 1)',
												'rgba(0, 0, 0, 1)',
												'rgba(128, 128, 128, 1)'
											],
											fill: false,
											borderWidth: 1
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
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="white_shd full margin_bottom_30">
					<div class="full graph_head">
						<div class="heading1 margin_0">
							<h2>Grafik Analisis Semster Ganjil</h2>
						</div>
					</div>
					<div class="map_section padding_infor_info">
						<?php
						foreach ($gafik_ganjil as $key => $value) {
							$semester_ganjil[] = $value->semester_ganjil;
							$total_ganjil[] = $value->total_ganjil;
						}
						?>
						<div class="area_chart">
							<canvas id="Cart"></canvas>
							<script>
								var ctx = document.getElementById('Cart');
								var Chart = new Chart(ctx, {
									type: 'bar',
									data: {
										labels: <?= json_encode($semester_ganjil) ?>,
										datasets: [{
											label: 'Grafik Analisis Semster Ganjil',
											data: <?= json_encode($total_ganjil) ?>,
											backgroundColor: [
												'rgba(255, 99, 132, 0.80)',
												'rgba(54, 162, 235, 0.80)',
												'rgba(255, 206, 86, 0.80)',
												'rgba(75, 192, 192, 0.80)',
												'rgba(153, 102, 255, 0.80)',
												'rgba(255, 159, 64, 0.80)',
												'rgba(201, 76, 76, 0.3)',
												'rgba(201, 77, 77, 1)',
												'rgba(0, 140, 162, 1)',
												'rgba(158, 109, 8, 1)',
												'rgba(201, 76, 76, 0.8)',
												'rgba(0, 129, 212, 1)',
												'rgba(201, 77, 201, 1)',
												'rgba(255, 207, 207, 1)',
												'rgba(201, 77, 77, 1)',
												'rgba(128, 98, 98, 1)',
												'rgba(0, 0, 0, 1)',
												'rgba(128, 128, 128, 1)',
												'rgba(255, 99, 132, 0.80)',
												'rgba(54, 162, 235, 0.80)',
												'rgba(255, 206, 86, 0.80)',
												'rgba(75, 192, 192, 0.80)',
												'rgba(153, 102, 255, 0.80)',
												'rgba(255, 159, 64, 0.80)',
												'rgba(201, 76, 76, 0.3)',
												'rgba(201, 77, 77, 1)',
												'rgba(0, 140, 162, 1)',
												'rgba(158, 109, 8, 1)',
												'rgba(201, 76, 76, 0.8)',
												'rgba(0, 129, 212, 1)',
												'rgba(201, 77, 201, 1)',
												'rgba(255, 207, 207, 1)',
												'rgba(201, 77, 77, 1)',
												'rgba(128, 98, 98, 1)',
												'rgba(0, 0, 0, 1)',
												'rgba(128, 128, 128, 1)'
											],
											borderColor: [
												'rgba(255, 99, 132, 1)',
												'rgba(54, 162, 235, 1)',
												'rgba(255, 206, 86, 1)',
												'rgba(75, 192, 192, 1)',
												'rgba(153, 102, 255, 1)',
												'rgba(255, 159, 64, 1)',
												'rgba(201, 76, 76, 0.3)',
												'rgba(201, 77, 77, 1)',
												'rgba(0, 140, 162, 1)',
												'rgba(158, 109, 8, 1)',
												'rgba(201, 76, 76, 0.8)',
												'rgba(0, 129, 212, 1)',
												'rgba(201, 77, 201, 1)',
												'rgba(255, 207, 207, 1)',
												'rgba(201, 77, 77, 1)',
												'rgba(128, 98, 98, 1)',
												'rgba(0, 0, 0, 1)',
												'rgba(128, 128, 128, 1)',
												'rgba(255, 99, 132, 1)',
												'rgba(54, 162, 235, 1)',
												'rgba(255, 206, 86, 1)',
												'rgba(75, 192, 192, 1)',
												'rgba(153, 102, 255, 1)',
												'rgba(255, 159, 64, 1)',
												'rgba(201, 76, 76, 0.3)',
												'rgba(201, 77, 77, 1)',
												'rgba(0, 140, 162, 1)',
												'rgba(158, 109, 8, 1)',
												'rgba(201, 76, 76, 0.8)',
												'rgba(0, 129, 212, 1)',
												'rgba(201, 77, 201, 1)',
												'rgba(255, 207, 207, 1)',
												'rgba(201, 77, 77, 1)',
												'rgba(128, 98, 98, 1)',
												'rgba(0, 0, 0, 1)',
												'rgba(128, 128, 128, 1)'
											],
											fill: false,
											borderWidth: 1
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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
							<p class="total_no">2500</p>
							<p class="head_couter">Welcome</p>
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
							<p class="total_no">123.50</p>
							<p class="head_couter">Average Time</p>
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
							<p class="total_no">1,805</p>
							<p class="head_couter">Collections</p>
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
							<p class="total_no">54</p>
							<p class="head_couter">Comments</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- graph -->
		<div class="row column2 graph margin_bottom_30">
			<div class="col-md-l2 col-lg-12">
				<div class="white_shd full">
					<div class="full graph_head">
						<div class="heading1 margin_0">
							<h2>Grafik Analisis Sesuai Alamat</h2>
						</div>
					</div>
					<div class="full graph_revenue">
						<div class="row">
							<div class="col-md-12">
								<div class="content">
									<div class="area_chart">
										<?php
										foreach ($grafik as $key => $value) {
											$alamat[] = $value->alamat;
											$alamat[] = $value->alamat;
										}
										?>


										<canvas id="myChart" height="100"></canvas>
										<script>
											var ctx = document.getElementById('myChart');
											var myChart = new Chart(ctx, {
												type: 'bar',
												data: {
													labels: <?= json_encode($alamat) ?>,
													datasets: [{
														label: 'Grafik Penjualan',
														data: <?= json_encode($alamat) ?>,
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
		</div>
	</div>

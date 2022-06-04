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
            <div class="col-lg-6">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Grafik Analisis Semster Genap Per Alamat</h2>
                        </div>
                    </div>
                    <div class="map_section padding_infor_info">
                        <?php
                        foreach ($gafik_genap as $key => $value) {
                            $tempat_lahir[] = $value->tempat_lahir;
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
                                        labels: <?= json_encode($tempat_lahir) ?>,
                                        datasets: [{
                                            label: 'Grafik Analisis Semster Genap Per Alamat',
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
                            <h2>Grafik Analisis Semster Genap Per Usia</h2>
                        </div>
                    </div>
                    <div class="map_section padding_infor_info">
                        <?php
                        foreach ($gafik_genap_usia as $key => $value) {
                            $umur[] = $value->umur;
                            $umur[] = $value->umur;
                        }
                        ?>
                        <div class="area_chart">
                            <canvas id="myne"></canvas>
                            <script>
                                var ctx = document.getElementById('myne');
                                var myChart1 = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: <?= json_encode($umur) ?>,
                                        datasets: [{
                                            label: 'Grafik Analisis Semster Genap Per Usia',
                                            data: <?= json_encode($umur) ?>,
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
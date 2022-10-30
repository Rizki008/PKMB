<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Chart</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-lg-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2><?= $title ?></h2>
                        </div>
                    </div>
                    <div class="map_section padding_infor_info">
                        <canvas id="speedChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <?php
        // foreach ($analisis_alamat as $key => $value) {
        //     $alamat[] = $value->alamat;
        //     $total_alamat[] = $value->total_alamat;
        // }
        ?> -->
<script>
    var speedCanvas = document.getElementById("speedChart");

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;

    var dataFirst = {
        label: "Kuningan",
        data: [20, 15, 60, 60, 10],
        lineTension: 0,
        fill: false,
        borderColor: 'red',
        backgroundColor: 'rgba(0, 99, 132, 0.6)',
    };

    var dataSecond = {
        label: "Luragung",
        data: [0, 59, 75, 20, 21],
        lineTension: 0,
        fill: false,
        borderColor: 'blue',
        backgroundColor: 'rgba(0, 255, 0, 0.3)',
    };
    var dataTime = {
        label: "Bandorasa",
        data: [40, 59, 10, 20, 30],
        lineTension: 0,
        fill: false,
        borderColor: 'green',
        backgroundColor: 'rgba(99, 132, 0, 0.6)'
    };
    var dataDate = {
        label: "Cilimus",
        data: [10, 30, 80, 20, 10],
        lineTension: 0,
        fill: false,
        borderColor: 'yellow',
        backgroundColor: 'rgba(255,0,0,0.3)'
    };
    var dataRInc = {
        label: "Ciawigebang",
        data: [19, 70, 40, 50, 19],
        lineTension: 0,
        fill: false,
        borderColor: 'jingga',
        backgroundColor: 'rgba(255,0,255,0.3)'
    };

    var speedData = {
        labels: [2018, 2019, 2020, 2021, 2022],
        datasets: [dataFirst, dataSecond, dataTime, dataDate, dataRInc]
    };

    var chartOptions = {
        legend: {
            display: true,
            position: 'top',
            labels: {
                boxWidth: 80,
                fontColor: 'black'
            }
        }
    };

    var lineChart = new Chart(speedCanvas, {
        type: 'bar',
        data: speedData,
        options: chartOptions
    });
</script>

<script>

</script>
<!-- <?php
        // foreach ($analisis_alamat as $key => $value) {
        //     $alamat[] = $value->alamat;
        //     $total_alamat[] = $value->total_alamat;
        // }
        ?> -->
<!-- <script>
    var ctx = document.getElementById('myChart1');
    var myChart1 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= json_encode($alamat) ?>,
            datasets: [{
                label: 'Grafik Analisis Sesuai Alamat',
                data: <?= json_encode($total_alamat) ?>,
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
</script> -->
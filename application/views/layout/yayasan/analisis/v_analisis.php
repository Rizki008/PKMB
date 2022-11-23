<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Analisis Data Semester genap dan ganjil</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-lg-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Analisis Data Semester genap dan ganjil</h2>
                        </div>
                    </div>
                    <div class="map_section padding_infor_info">
                        <canvas id="myChart1"></canvas>
                        <!-- <div id="graph"></div> -->
                        <!-- <canvas id="speedChart"></canvas> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
foreach ($analisis_semester as $key => $value) {
    $ganjil[] = $value->ganjil;
    $genap[] = $value->genap;
    $tgl_lulus[] = $value->tgl_lulus;
}
?>
<!-- <script>
    var speedCanvas = document.getElementById("speedChart");

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;

    var dataFirst = {
        label: "Ganjil",
        data: <?= json_encode($ganjil) ?>,
        lineTension: 0,
        fill: false,
        borderColor: 'red'
    };

    var dataSecond = {
        label: "Genap",
        data: <?= json_encode($genap) ?>,
        lineTension: 0,
        fill: false,
        borderColor: 'blue'
    };

    var speedData = {
        labels: <?= json_encode($tgl_lulus) ?>,
        datasets: [dataFirst, dataSecond]
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
        type: 'line',
        data: speedData,
        options: chartOptions
    });
</script> -->


<!-- <script>
    Morris.Line({
        element: 'graph',
        data: <?php echo $data; ?>,
        xkey: 'tgl_lulus',
        ykeys: ['semester_ganjil', 'semester_genap', 'semester'],
        labels: ['semester_ganjil', 'semester_genap', 'semester']
    });
</script> -->

<!-- <script>
    Morris.Bar({
        element: 'graph',
        barGap: 4,
        barSizeRatio: 0.30,
        preUnits: "%",
        data: <?php echo $data; ?>,
        xkey: 'year',
        ykeys: ['total_paket_ganjil', 'total_paket_genap', 'semester'],
        labels: ['total_paket_ganjil', 'total_paket_genap', 'semester'],
        barColors: ['#f00', '#efff00', '#009aff'],
        stacked: true
    });
</script> -->
<!-- <?php
        // foreach ($genap as $key => $value) {
        // $semester[] = $value->semester;
        // $total_semester_genap[] = $value->total_semester_genap;
        // }
        ?> -->
<script>
    const ctx = document.getElementById('myChart1').getContext('2d');
    const myChart1 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?= json_encode($tgl_lulus) ?>,
            datasets: [{
                label: 'Grafik Analisis semester Genap',
                data: <?= json_encode($genap) ?>,
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
                ],
                fill: false,
                borderWidth: 1
            }, {
                label: 'Grafik Analisis semester Ganjil',
                data: <?= json_encode($ganjil) ?>,
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
                ],
                fill: false,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Grafik Analisis Semester'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Grafik Analisis Semester'
                    },
                    min: 0,
                    max: 200,
                    ticks: {
                        // forces step size to be 50 units
                        stepSize: 1
                    }
                }
            }
        }
    });
</script>
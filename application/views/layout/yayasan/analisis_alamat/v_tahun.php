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

<?php
foreach ($analisis_alamat as $key => $value) {
    // $alamat[] = $value->alamat;
    $kuningan[] = $value->kuningan;
    $ciawilor[] = $value->ciawilor;
    $jalaksana[] = $value->jalaksana;
    $sindang_barang[] = $value->sindang_barang;
    $bandung[] = $value->bandung;
    $majalengka[] = $value->majalengka;
    $cicaheum[] = $value->cicaheum;
    $subang[] = $value->subang;
    $tgl_daftar[] = $value->tgl_daftar;
}
?>
<!-- <script>
    var speedCanvas = document.getElementById("speedChart");

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;

    var dataFirst = {
        label: 'Kuningan',
        data: <?= json_encode($kuningan) ?>,
        lineTension: 0,
        fill: false,
        borderColor: 'red',
        backgroundColor: 'rgba(0, 99, 132, 0.6)',
    };

    var dataSecond = {
        label: 'Ciawilor',
        data: <?= json_encode($ciawilor) ?>,
        lineTension: 0,
        fill: false,
        borderColor: 'blue',
        backgroundColor: 'rgba(0, 255, 0, 0.3)',
    };
    var dataTime = {
        label: 'Jalaksana',
        data: <?= json_encode($jalaksana) ?>,
        lineTension: 0,
        fill: false,
        borderColor: 'green',
        backgroundColor: 'rgba(99, 132, 0, 0.6)'
    };
    var dataDate = {
        label: 'Sindang Barang',
        data: <?= json_encode($sindang_barang) ?>,
        lineTension: 0,
        fill: false,
        borderColor: 'yellow',
        backgroundColor: 'rgba(255,0,0,0.3)'
    };
    var dataRInc = {
        label: 'Bandung',
        data: <?= json_encode($bandung) ?>,
        lineTension: 0,
        fill: false,
        borderColor: 'jingga',
        backgroundColor: 'rgba(255,0,255,0.3)'
    };
    var dataRInca = {
        label: 'Cicaheum',
        data: <?= json_encode($cicaheum) ?>,
        lineTension: 0,
        fill: false,
        borderColor: 'Crimson',
        backgroundColor: 'rgba(220,20,60)'
    };
    var dataRIncu = {
        label: 'Majalengka',
        data: <?= json_encode($majalengka) ?>,
        lineTension: 0,
        fill: false,
        borderColor: 'Dark Blue',
        backgroundColor: 'rgba(0,0,139)'
    };
    var dataRInci = {
        label: 'Subang',
        data: <?= json_encode($subang) ?>,
        lineTension: 0,
        fill: false,
        borderColor: 'Chartreuse',
        backgroundColor: 'rgba(127,255,1)'
    };


    var speedData = {
        labels: <?= json_encode($tgl_daftar) ?>,
        datasets: [dataFirst, dataSecond, dataTime, dataDate, dataRInc, dataRInca, dataRIncu, dataRInci]
    };

    var chartOptions = {
        legend: {
            display: true,
            position: 'right',
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
</script> -->

<script>
    const ctx = document.getElementById('speedChart').getContext('2d');
    const speedChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= json_encode($tgl_daftar) ?>,
            datasets: [{
                label: 'Kuningan',
                data: <?= json_encode($kuningan) ?>,
                backgroundColor: [
                    // 'rgba(255, 99, 132, 0.80)',
                    // 'rgba(54, 162, 235, 0.80)',
                    // 'rgba(255, 206, 86, 0.80)',
                    // 'rgba(75, 192, 192, 0.80)',
                    // 'rgba(153, 102, 255, 0.80)',
                    // 'rgba(255, 159, 64, 0.80)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    'rgba(158, 109, 8, 1)',
                ],
                borderColor: [
                    // 'rgba(255, 99, 132, 1)',
                    // 'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    'rgba(158, 109, 8, 1)',
                ],
                fill: false,
                borderWidth: 1
            }, {
                label: 'Ciawilor',
                data: <?= json_encode($ciawilor) ?>,
                backgroundColor: [
                    // 'rgba(255, 99, 132, 0.80)',
                    // 'rgba(54, 162, 235, 0.80)',
                    // 'rgba(255, 206, 86, 0.80)',
                    // 'rgba(75, 192, 192, 0.80)',
                    // 'rgba(153, 102, 255, 0.80)',
                    // 'rgba(255, 159, 64, 0.80)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                borderColor: [
                    // 'rgba(255, 99, 132, 1)',
                    // 'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                fill: false,
                borderWidth: 1
            }, {
                label: 'Jalaksana',
                data: <?= json_encode($jalaksana) ?>,
                backgroundColor: [
                    // 'rgba(255, 99, 132, 0.80)',
                    // 'rgba(54, 162, 235, 0.80)',
                    // 'rgba(255, 206, 86, 0.80)',
                    // 'rgba(75, 192, 192, 0.80)',
                    // 'rgba(153, 102, 255, 0.80)',
                    // 'rgba(255, 159, 64, 0.80)',
                    // 'rgba(201, 76, 76, 0.3)',
                    'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                borderColor: [
                    // 'rgba(255, 99, 132, 1)',
                    // 'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)',
                    // 'rgba(201, 76, 76, 0.3)',
                    'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                fill: false,
                borderWidth: 1
            }, {
                label: 'Sindang Barang',
                data: <?= json_encode($sindang_barang) ?>,
                backgroundColor: [
                    // 'rgba(255, 99, 132, 0.80)',
                    // 'rgba(54, 162, 235, 0.80)',
                    // 'rgba(255, 206, 86, 0.80)',
                    // 'rgba(75, 192, 192, 0.80)',
                    // 'rgba(153, 102, 255, 0.80)',
                    // 'rgba(255, 159, 64, 0.80)',
                    'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                borderColor: [
                    // 'rgba(255, 99, 132, 1)',
                    // 'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                fill: false,
                borderWidth: 1
            }, {
                label: 'Bandung',
                data: <?= json_encode($bandung) ?>,
                backgroundColor: [
                    // 'rgba(255, 99, 132, 0.80)',
                    // 'rgba(54, 162, 235, 0.80)',
                    // 'rgba(255, 206, 86, 0.80)',
                    // 'rgba(75, 192, 192, 0.80)',
                    'rgba(153, 102, 255, 0.80)',
                    // 'rgba(255, 159, 64, 0.80)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                borderColor: [
                    // 'rgba(255, 99, 132, 1)',
                    // 'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                fill: false,
                borderWidth: 1
            }, {
                label: 'Majalengka',
                data: <?= json_encode($majalengka) ?>,
                backgroundColor: [
                    // 'rgba(255, 99, 132, 0.80)',
                    // 'rgba(54, 162, 235, 0.80)',
                    // 'rgba(255, 206, 86, 0.80)',
                    'rgba(75, 192, 192, 0.80)',
                    // 'rgba(153, 102, 255, 0.80)',
                    // 'rgba(255, 159, 64, 0.80)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                borderColor: [
                    // 'rgba(255, 99, 132, 1)',
                    // 'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                fill: false,
                borderWidth: 1
            }, {
                label: 'Cicaheum',
                data: <?= json_encode($cicaheum) ?>,
                backgroundColor: [
                    // 'rgba(255, 99, 132, 0.80)',
                    // 'rgba(54, 162, 235, 0.80)',
                    'rgba(255, 206, 86, 0.80)',
                    // 'rgba(75, 192, 192, 0.80)',
                    // 'rgba(153, 102, 255, 0.80)',
                    // 'rgba(255, 159, 64, 0.80)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                borderColor: [
                    // 'rgba(255, 99, 132, 1)',
                    // 'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                fill: false,
                borderWidth: 1
            }, {
                label: 'Subang',
                data: <?= json_encode($subang) ?>,
                backgroundColor: [
                    // 'rgba(255, 99, 132, 0.80)',
                    'rgba(54, 162, 235, 0.80)',
                    // 'rgba(255, 206, 86, 0.80)',
                    // 'rgba(75, 192, 192, 0.80)',
                    // 'rgba(153, 102, 255, 0.80)',
                    // 'rgba(255, 159, 64, 0.80)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
                ],
                borderColor: [
                    // 'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)',
                    // 'rgba(201, 76, 76, 0.3)',
                    // 'rgba(201, 77, 77, 1)',
                    // 'rgba(0, 140, 162, 1)',
                    // 'rgba(158, 109, 8, 1)',
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
                        text: 'Data Alamat'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Data Alamat'
                    },
                    min: 0,
                    max: 10,
                    ticks: {
                        // forces step size to be 50 units
                        stepSize: 1
                    }
                }
            }
        }
    });
</script>
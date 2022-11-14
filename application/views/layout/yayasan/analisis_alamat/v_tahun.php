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
                        <!-- <canvas id="densityChart"></canvas> -->
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
<script>
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

<!-- <?php
        // foreach ($analisis_alamat as $key => $value) {
        //     $alamat[] = $value->alamat;
        //     $total_alamat[] = $value->total_alamat;
        //     $tgl_daftar[] = $value->tgl_daftar;
        // }
        ?> -->
<!-- <script>
    var densityCanvas = document.getElementById("densityChart");

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;

    var densityData = {
        label: <?= json_encode($alamat) ?>,
        data: <?= json_encode($total_alamat) ?>,
        backgroundColor: 'rgba(0, 99, 132, 0.6)',
        borderColor: 'rgba(0, 99, 132, 1)',
        yAxisID: "y-axis-density"
    };

    var gravityData = {
        label: <?= json_encode($alamat) ?>,
        data: <?= json_encode($total_alamat) ?>,
        backgroundColor: 'rgba(99, 132, 0, 0.6)',
        borderColor: 'rgba(99, 132, 0, 1)',
        yAxisID: "y-axis-gravity"
    };

    var planetData = {
        labels: <?= json_encode($tgl_daftar) ?>,
        datasets: [densityData, gravityData]
    };

    var chartOptions = {
        scales: {
            xAxes: [{
                barPercentage: 1,
                categoryPercentage: 0.6
            }],
            yAxes: [{
                id: "y-axis-density"
            }, {
                id: "y-axis-gravity"
            }]
        }
    };

    var barChart = new Chart(densityCanvas, {
        type: 'bar',
        data: planetData,
        options: chartOptions
    });
</script> -->
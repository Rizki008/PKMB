<div class="col-12">
    <!-- Main content -->
    <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h4>
                    <i class="fa fa-graduation-cap"></i> <?= $title ?>
                    <small class="float-right">Tahun: <?= $tahun ?></small>
                </h4>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Kelulusan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        // $grand_total = 0;
                        foreach ($kelulusan as $key => $value) {
                            // $total_lulus = $value->qty * $value->harga;
                            // $grand_total = $grand_total + $value->grand_total;
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value->nama ?></td>
                                <td><?= $value->jenis_kl ?></td>
                                <td><?= $value->tgl_lulus ?></td>
                                <td><?= $value->kelulusan ?></td>
                                <!-- <td>Rp.<?= number_format($value->grand_total, 0) ?></td> -->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- <h3>Grand Total : Rp. <?= number_format($grand_total, 0) ?> </h3> -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-12">
                <!-- <button class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i> Print</button> -->
            </div>
        </div>
    </div>
    <!-- /.invoice -->
</div><!-- /.col -->
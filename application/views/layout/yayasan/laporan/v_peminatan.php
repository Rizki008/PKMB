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
                            <th>Paket</th>
                            <!-- <th>Kelas</th> -->
                            <th>Peminatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($peminatan as $key => $value) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value->nama_lengkap ?></td>
                                <td><?= $value->jenis_kel ?></td>
                                <td><?= $value->paket ?></td>
                                <!-- <td><?= $value->kelas ?></td> -->
                                <td><?= $value->nama_peminatan ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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
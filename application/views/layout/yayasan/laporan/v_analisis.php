<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2><?= $title ?></h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2><?= $title ?></h2>
                        </div>
                    </div>
                    <div class="full price_table padding_infor_info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4 class="card-title">Analisis Detail Paket Semester Genap</h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <?php
                                        echo form_open('laporan/analisis_paket_genap') ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Tahun</label>
                                                    <select name="tahun" class="form-control">
                                                        <?php
                                                        $mulai = date('Y') - 5;
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
                                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cek Hasil Analisis</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        echo form_close() ?>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div><br><br>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4 class="card-title">Analisis Detail Paket Semester Ganjil</h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <?php
                                        echo form_open('laporan/analisis_paket_ganjil') ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Tahun</label>
                                                    <select name="tahun" class="form-control">
                                                        <?php
                                                        $mulai = date('Y') - 5;
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
                                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cek Hasil Analisis</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        echo form_close() ?>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div><br><br>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4 class="card-title">Analisis Detail Alamat</h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <?php
                                        echo form_open('laporan/alamat_tahun') ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Tahun</label>
                                                    <select name="tahun" class="form-control">
                                                        <?php
                                                        $mulai = date('Y') - 5;
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
                                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cek Hasil Analisis</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        echo form_close() ?>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div><br><br>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4 class="card-title">Analisis Detail Peminatan</h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <?php
                                        echo form_open('laporan/peminatan_tahun') ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Tahun</label>
                                                    <select name="tahun" class="form-control">
                                                        <?php
                                                        $mulai = date('Y') - 5;
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
                                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cek Hasil Analisis</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        echo form_close() ?>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4 class="card-title">Analisis Detail Usia</h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <?php
                                        echo form_open('laporan/analisis_usia') ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Tahun</label>
                                                    <select name="tahun" class="form-control">
                                                        <?php
                                                        $mulai = date('Y') - 5;
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
                                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cek Hasil Analisis</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        echo form_close() ?>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4 class="card-title">Analisis Detail Kelulusan</h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <?php
                                        echo form_open('laporan/analisis_lulusan') ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Tahun</label>
                                                    <select name="tahun" class="form-control">
                                                        <?php
                                                        $mulai = date('Y') - 5;
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
                                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cek Hasil Analisis</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        echo form_close() ?>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4 class="card-title">Analisis Detail Kejar Paket</h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <?php
                                        echo form_open('laporan/analisis_paket') ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Tahun</label>
                                                    <select name="tahun" class="form-control">
                                                        <?php
                                                        $mulai = date('Y') - 5;
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
                                                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cek Hasil Analisis</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        echo form_close() ?>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
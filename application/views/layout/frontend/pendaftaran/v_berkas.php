<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('<?= base_url('frontend/images/breadcrumb-bg.jpg') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <h2><?= $title ?></h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="bread-list">
                    <li><a href="<?= base_url() ?>">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="<?= base_url('pendaftaran/pendaftaran') ?>"><?= $title ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<!-- Contact Us -->
<section id="contact" class="contact section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2>Pendaftaran Warga Baru</h2>
                    <p>Materi program didesain secara mandiri 30% kurikulum nasional 70 % mengutamakan keterampilan produktif dan penopang kewirausahaan (sesuai minat bakat dan usia warga belajar diatas usia sekolah)</p>
                    <div class="icon"><i class="fa fa-paper-plane"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="form-head">
                    <!-- Contact Form -->
                    <?php
                    //notifikasi form kosong
                    echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fa fa-exclamation-triangle"></i>', '</h5></div>');

                    //notifikasi gagal upload gambar
                    if (isset($error_upload)) {
                        echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fa fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
                    }
                    echo form_open_multipart('pendaftaran/save')
                    ?>
                    <form class="form">
                        <br>
                        <h4>-UPLOAD BERKAS PERSYARATAN</h4>
                        <br>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="">IJAZAH</label>
                                <div class="form-group">
                                    <i class="fa fa-envelope"></i>
                                    <input name="ijazah" type="file" placeholder="Ijazah" value="<?= set_value('ijazah') ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="">AKTA KELAHIRAN</label>
                                <div class="form-group">
                                    <i class="fa fa-envelope"></i>
                                    <input name="akteu" type="file" placeholder="Asal Sekolah" value="<?= set_value('akteu') ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="">NILAI RAPOT</label>
                                <div class="form-group">
                                    <i class="fa fa-envelope"></i>
                                    <input name="nilai_raport" type="file" placeholder="Asal Sekolah" value="<?= set_value('nilai_raport') ?>">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <input type="text" value="<?= $this->session->userdata('id_warga') ?>" hidden>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn primary">Daftar PKBM</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php echo form_close() ?>
                    <!--/ End Contact Form -->
                    <p>Catatan : *Kosongkan Yang Tidak Perlu</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="contact-right">
                    <!-- Contact-Info -->
                    <div class="contact-info">
                        <div class="icon"><i class="fa fa-map"></i></div>
                        <h3>Penyelenggaraan Program Pendidikan Kesetaraan</h3>
                        <p>
                            Paket A setara SD/MI <br>
                            Paket B setara SMP/MTS <br>
                            Paket C setara SMA/MA <br>
                        </p>
                    </div>
                    <!-- Contact-Info -->
                    <div class="contact-info">
                        <div class="icon"><i class="fa fa-envelope"></i></div>
                        <h3>kontak informasi</h3>
                        <p>JL. Pasar Baru, RT.01 RW.01 Dusun Wage <br>
                            Desa Sadamantra <br>
                            Kec. Jalaksana <br>
                            Kab. Kuningan – Jawa Barat <br>
                            Kode Pos : 45554 <br>
                            Telp. 082240627360
                        </p>
                    </div>
                    <!-- Contact-Info -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact Us -->

<!-- Clients CSS -->
<div class="clients overlay">
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>
<!--/ End Clients CSS -->
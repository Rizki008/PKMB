<!-- dashboard inner -->
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
        <div class="row">
            <!-- table section -->
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <a href="<?= base_url('siswa/addb') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Add</a>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Siswa</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Tanggal Lahir</th>
                                        <th>Kelas</th>
                                        <th>Paket</th>
                                        <th>Semester</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($siswa as $key => $value) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nama ?></td>
                                            <td><?= $value->jenis_kl ?></td>
                                            <td><?= $value->tempat_lahir ?> | <?= $value->tgl_lahir ?></td>
                                            <td><?= $value->kelas ?> </td>
                                            <td><?= $value->paket ?> </td>
                                            <td><?= $value->semester ?> </td>
                                            <td>
                                                <a href="<?= base_url('siswa/updateb/' . $value->id_siswa) ?>" class="btn btn-warning"><i class="fa fa-pencil"></i>Update</a>
                                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_siswa ?>"><i class="fa fa-trash"></i>Delete</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php foreach ($siswa as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value->id_siswa ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete <?= $value->nama ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('siswa/deleteb/' . $value->id_siswa) ?> " class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
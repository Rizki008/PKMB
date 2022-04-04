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
							<h2>Data Warga</h2>
						</div>
					</div>
					<div class="table_section padding_infor_info">
						<div class="table-responsive-sm">
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama Warga</th>
										<th>Jenis Kelamin</th>
										<th>Tempat,Tanggal Lahir</th>
										<th>Warga Negara</th>
										<th>No HP</th>
										<th>Desa</th>
										<th>Masuk Sekolah Ini</th>
										<th>Tanggal Masuk Sekolah</th>
										<th>Kelas</th>
										<th>Alasan Diterima/Tidak</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($pendaftaran as $key => $value) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_lengkap ?></td>
											<td><?= $value->jenis_kel ?></td>
											<td><?= $value->tempat_lahir ?>, <?= $value->tgl_lahir ?></td>
											<td><?= $value->warganegara ?></td>
											<td><?= $value->no_tlpn ?></td>
											<td><?= $value->desa ?></td>
											<td><?= $value->msk_sklh ?></td>
											<td><?= $value->tgl_terima ?></td>
											<td><?= $value->kelas_terima ?></td>
											<td><?= $value->alasan ?></td>
											<td>
												<?php if ($value->status == 0) { ?>
													<a href="<?= base_url('pendaftaran/detail_pendaftaran/' . $value->id_pendaftaran) ?>" class="btn cur-p btn-primary">Detail</a>
													<button data-toggle="modal" data-target="#diterima<?= $value->id_pendaftaran ?>" class="btn cur-p btn-warning">Diterima</button>
													<button data-toggle="modal" data-target="#ditolak<?= $value->id_pendaftaran ?>" class="btn cur-p btn-danger">Tidak Di terima</button>
												<?php } elseif ($value->status == 1) { ?>
													<span class="badge badge-success"> Telah diterima</span>
												<?php } elseif ($value->status == 2) { ?>
													<span class="badge badge-danger">Tidak Diterima</span>
												<?php } ?>
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


<?php foreach ($pendaftaran as $key => $value) { ?>
	<div class="modal fade" id="diterima<?= $value->id_pendaftaran ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Alasan Diterima</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('pendaftaran/diterima/' . $value->id_pendaftaran);
					?>

					<div class="form-group">
						<label>Tanggal Diterima</label>
						<input type="date" name="tgl_terima" value="<?= $value->tgl_terima ?>" class="form-control" placeholder="Tanggal Diterima" required>
					</div>
					<div class="form-group">
						<label>Kelas Di Terima</label>
						<input type="text" name="kelas_terima" value="<?= $value->kelas_terima ?>" class="form-control" placeholder="Kelas Di Terima" required>
					</div>
					<div class="form-group">
						<label>Alasan Diterima</label>
						<textarea name="alasan" class="form-control" cols="30" rows="10" placeholder="Alasan Diterima"><?= $value->alasan ?></textarea>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>
<?php } ?>

<?php foreach ($pendaftaran as $key => $value) { ?>
	<div class="modal fade" id="ditolak<?= $value->id_pendaftaran ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Alasan ditolak</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('pendaftaran/ditolak/' . $value->id_pendaftaran);
					?>

					<div class="form-group">
						<label>Alasan Tidak Diterima</label>
						<textarea name="alasan" class="form-control" cols="30" rows="10" placeholder="Alasan Diterima"><?= $value->alasan ?></textarea>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>
<?php } ?>

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
										<th>No HP</th>
										<th>Alamat</th>
										<th>Tanggal Diterima</th>
										<th>Kelas</th>
										<th>Alasan Diterima/Tidak</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($dataterima as $key => $value) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_lengkap ?></td>
											<td><?= $value->no_tlpn ?></td>
											<td><?= $value->desa ?></td>
											<td><?= $value->tgl_terima ?></td>
											<td><?= $value->kelas ?></td>
											<td><?= $value->alasan_diterima ?></td>
											<td>
												<?php if ($value->status == 1) { ?>
													<span class="badge badge-success"> Telah diterima</span>
													<button data-toggle="modal" data-target="#diterima<?= $value->id_kelas ?>" class="btn cur-p btn-warning">Diterima</button>
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

<?php foreach ($dataterima as $key => $value) { ?>
	<div class="modal fade" id="diterima<?= $value->id_kelas ?>">
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
					echo form_open('pendaftaran/kelas/' . $value->id_kelas);
					?>

					<div class="form-group">
						<label>Kelas Diterima</label>
						<input type="text" name="kelas" value="<?= $value->kelas ?>" class="form-control" placeholder="Kelas Masuk" required>
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
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
										<th>No HP</th>
										<th>Desa</th>
										<th>Tanggal Diterima</th>
										<th>Kelas</th>
										<th>Alasan Diterima/Tidak</th>
										<td></td>
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
											<td><?= $value->no_tlpn ?></td>
											<td><?= $value->desa ?></td>
											<td><?= $value->tgl_terima ?></td>
											<td><?= $value->kelas ?></td>
											<td><?= $value->alasan_diterima ?></td>
											<td>
												<?php if ($value->status == 1) { ?>
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
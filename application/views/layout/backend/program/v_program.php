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
							<a href="<?= base_url('program/add') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Add</a>
						</div>
					</div>
					<div class="table_section padding_infor_info">
						<div class="table-responsive-sm">
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama Program</th>
										<th>Deskripsi</th>
										<th>Gambar</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($program as $key => $value) { ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_program ?></td>
											<td><?= $value->deskripsi ?></td>
											<td><img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="" width="150px"></td>
											<td>
												<a href="<?= base_url('program/update/' . $value->id_program) ?>" class="btn btn-warning"><i class="fa fa-pencil"></i>Update</a>
												<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_program ?>"><i class="fa fa-trash"></i>Delete</button>
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


<?php foreach ($program as $key => $value) { ?>
	<div class="modal fade" id="delete<?= $value->id_program ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Delete <?= $value->nama_program ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<a href="<?= base_url('program/delete/' . $value->id_program) ?> " class="btn btn-primary">Delete</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

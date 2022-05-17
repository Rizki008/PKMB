<!-- right column -->
<div class="col-md-12">
	<!-- general form elements disabled -->
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title"><?= $title ?></h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			//notifikasi form kosong
			echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

			//notifikasi gagal upload gambar
			if (isset($error_upload)) {
				echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
			}
			echo form_open_multipart('pendaftaran/detail_pendaftaran/' . $pendaftaran->id_pendaftaran) ?>
			<!-- text input -->

			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input name="nama_lengkap" type="text" class="form-control" value="<?= $pendaftaran->nama_lengkap ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<input name="jenis_kel" type="text" class="form-control" value="<?= $pendaftaran->jenis_kel ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input name="tempat_lahir" type="text" class="form-control" value="<?= $pendaftaran->tempat_lahir ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Tanggal Lahir </label>
						<input name="tgl_lahir" type="text" class="form-control" value="<?= $pendaftaran->tgl_lahir ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Alamat</label>
						<input name="alamat" type="text" class="form-control" value="<?= $pendaftaran->alamat ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Desa</label>
						<input name="desa" type="text" class="form-control" value="<?= $pendaftaran->desa ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Kecamatan</label>
						<input name="kecamatan" type="text" class="form-control" value="<?= $pendaftaran->kecamatan ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Kabupaten</label>
						<input name="kabupaten" type="text" class="form-control" value="<?= $pendaftaran->kabupaten ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>No Tlpn/HP</label>
						<input name="no_tlpn" type="text" class="form-control" value="<?= $pendaftaran->no_tlpn ?>" disabled>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Tahun Lulus (ijazah)</label>
						<input name="thn_lulus" type="text" class="form-control" disabled value="<?= $pendaftaran->thn_lulus ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Pindahan Dari Sekolah </label>
						<input name="pindahan" type="text" class="form-control" disabled value="<?= $pendaftaran->pindahan ?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<a href="<?= base_url('pendaftaran') ?>" class="btn btn-primary btn-sm">Kembali</a>
			</div>

			<?php echo form_close() ?>
		</div>
	</div>
</div>
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
			echo form_open_multipart('peminatan/update/' . $peminatan->id_peminatan) ?>
			<!-- text input -->

			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label>Nama peminatan</label>
						<input name="nama_peminatan" type="text" class="form-control" placeholder="Nama peminatan" value="<?= $peminatan->nama_peminatan ?>">
					</div>
				</div>
			</div>

			<div class="form-group">
				<a href="<?= base_url('peminatan') ?>" class="btn btn-primary btn-sm">Kembali</a>
				<button type="submit" class="btn btn-success btn-sm">Simpan</button>
			</div>

			<?php echo form_close() ?>
		</div>
	</div>
</div>
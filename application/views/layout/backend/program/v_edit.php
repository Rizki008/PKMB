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
			echo form_open_multipart('program/update/' . $program->id_program) ?>
			<!-- text input -->

			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label>Nama Program</label>
						<input name="nama_program" type="text" class="form-control" placeholder="Nama Program" value="<?= $program->nama_program ?>">
					</div>
				</div>
			</div>
			<!-- text input -->
			<div class="form-group">
				<label>Deskripsi</label>
				<textarea name="deskripsi" class="form-control" cols="30" rows="10" placeholder="deskripsi"><?= $program->deskripsi ?></textarea>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>Gambar Produk</label>
						<input type="file" name="gambar" class="form-control" id="preview_gambar">
					</div>
				</div>

				<div class="col-sm-6">
					<div class="form-group">
						<img src="<?= base_url('assets/gambar/' . $program->gambar) ?>" id="gambar_load" width="400px">
					</div>
				</div>
			</div>

			<div class="form-group">
				<a href="<?= base_url('program') ?>" class="btn btn-primary btn-sm">Kembali</a>
				<button type="submit" class="btn btn-success btn-sm">Simpan</button>
			</div>

			<?php echo form_close() ?>
		</div>
	</div>
</div>

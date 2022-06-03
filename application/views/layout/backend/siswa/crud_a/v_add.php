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


			echo form_open_multipart('siswa/adda') ?>
			<!-- text input -->

			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label>Nama Siswa</label>
						<input name="nama" type="text" class="form-control" placeholder="Nama Siswa" value="<?= set_value('nama') ?>">
					</div>
				</div>
			</div>
			<!-- text input -->
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<select name="jenis_kl" id="jenis_kl" class="form-control">
					<option>---Pilih Jenis Kelamin---</option>
					<option value="L">Laki-Laki</option>
					<option value="P">Perempaun</option>
				</select>
			</div>
			<div class="form-group">
				<label>Tempat Lahit</label>
				<input name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir" value="<?= set_value('tempat_lahir') ?>">
			</div>
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir" value="<?= set_value('tgl_lahir') ?>">
			</div>
			<div class="form-group">
				<label>Kelas</label>
				<input name="kelas" type="text" class="form-control" placeholder="Kelas" value="<?= set_value('kelas') ?>">
			</div>
			<div class="form-group">
				<label>Paket</label>
				<select name="paket" id="paket" class="form-control">
					<option>---Pilih Kelas Siswa---</option>
					<option value="A">Paket A</option>
					<option value="B">Paket B</option>
					<option value="C">Paket C</option>
				</select>
			</div>
			<div class="form-group">
				<label>Semester Genap</label>
				<input name="semester_genap" type="text" class="form-control" placeholder="Semester Genap" value="<?= set_value('semester_genap') ?>">
			</div>
			<div class="form-group">
				<label>Semester Ganjil</label>
				<input name="semester_ganjil" type="text" class="form-control" placeholder="Semester Ganjil" value="<?= set_value('semester_ganjil') ?>">
			</div>


			<div class="form-group">
				<a href="<?= base_url('siswa/paketa') ?>" class="btn btn-primary btn-sm">Kembali</a>
				<button type="submit" class="btn btn-success btn-sm">Simpan</button>
			</div>

			<?php echo form_close() ?>
		</div>
	</div>
</div>
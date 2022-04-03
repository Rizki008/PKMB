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
			echo form_open_multipart('pendaftaran/detail/' . $pendaftaran->id_pendaftaran) ?>
			<!-- text input -->

			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" value="<?= $pendaftaran->nama_lengkap ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Nama Panggilan</label>
						<input name="nama_pang" type="text" class="form-control" placeholder="Nama Panggilan" value="<?= $pendaftaran->nama_pang ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<input name="jenis_kel" type="text" class="form-control" placeholder="Jenis Kelamin" value="<?= $pendaftaran->jenis_kel ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input name="tempat_lahir" type="text" class="form-control" placeholder="tempat_lahir" value="<?= $pendaftaran->tempat_lahir ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Tanggal Lahir </label>
						<input name="tgl_lahir" type="text" class="form-control" placeholder="Berat" value="<?= $pendaftaran->tgl_lahir ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Kewarganegaraan</label>
						<input name="warganegara" type="text" class="form-control" placeholder="Kewarganegaraan" value="<?= $pendaftaran->warganegara ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Anak Ke</label>
						<input name="anak_ke" type="text" class="form-control" placeholder="Anak Ke" value="<?= $pendaftaran->anak_ke ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Jumlah Saudara Kandung</label>
						<input name="jml_sdr" type="text" class="form-control" placeholder="Jumlah Saudara Kandung" value="<?= $pendaftaran->jml_sdr ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Jumlah Saudara Tiri</label>
						<input name="jml_sdr_tiri" type="text" class="form-control" placeholder="Jumlah Saudara Tiri" value="<?= $pendaftaran->jml_sdr_tiri ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Jumlah Saudara Angkat</label>
						<input name="jml_sdr_angkat" type="text" class="form-control" placeholder="Jumlah Saudara Angkat" value="<?= $pendaftaran->jml_sdr_angkat ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Bahasa Sehari-hari</label>
						<input name="bahasa" type="text" class="form-control" placeholder="Bahasa Sehari-hari" value="<?= $pendaftaran->bahasa ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Berat Badan</label>
						<input name="berat_bd" type="text" class="form-control" placeholder="Berat Badan" value="<?= $pendaftaran->berat_bd ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Tinggi Badan</label>
						<input name="tinggi_bd" type="text" class="form-control" placeholder="Tinggi Badan" value="<?= $pendaftaran->tinggi_bd ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Golongan Darah</label>
						<input name="gol_darah" type="text" class="form-control" placeholder="Golongan Darah" value="<?= $pendaftaran->gol_darah ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Penyakit Berat Yang Pernah Diderita</label>
						<input name="penyakit" type="text" class="form-control" placeholder="Penyakit Berat Yang Pernah Diderita" value="<?= $pendaftaran->penyakit ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>No Tlpn/HP</label>
						<input name="no_tlpn" type="text" class="form-control" placeholder="No Tlpn/HP" value="<?= $pendaftaran->no_tlpn ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Tempat Tinggal</label>
						<input name="tempat_tinggal" type="text" class="form-control" placeholder="Tempat Tinggal" value="<?= $pendaftaran->tempat_tinggal ?>" disabled>
					</div>
				</div>
			</div>
			<!-- text input -->
			<div class="form-group">
				<label>Alamat</label>
				<textarea name="alamat" class="form-control" cols="30" rows="10" placeholder="alamat" disabled><?= $pendaftaran->alamat ?></textarea>
			</div>

			<h4>ORANG TUA / WALI</h4>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Nama Ayah</label>
						<input name="ayah" type="text" class="form-control" placeholder="Nama Ayah" value="<?= $pendaftaran->ayah ?>" disabled>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Nama Ibu</label>
						<input name="ibu" type="text" class="form-control" placeholder="Nama Ibu" disabled value="<?= $pendaftaran->ibu ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Sekolah Tertinggi Ayah</label>
						<input name="sklh_ayah" type="text" class="form-control" placeholder="Sekolah Tertinggi Ayah" disabled value="<?= $pendaftaran->sklh_ayah ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Sekolah Tertinggi Ibu </label>
						<input name="sklh_ibu" type="text" class="form-control" placeholder="Sekolah Tertinggi Ibu" disabled value="<?= $pendaftaran->sklh_ibu ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Pekerjaan Ayah</label>
						<input name="pkrj_ayah" type="text" class="form-control" placeholder="Pekerjaan Ayah" disabled value="<?= $pendaftaran->pkrj_ayah ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Pekerjaan Ibu</label>
						<input name="pkrj_ibu" type="text" class="form-control" placeholder="Pekerjaan Ibu" disabled value="<?= $pendaftaran->pkrj_ibu ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Nama Wali</label>
						<input name="wali" type="text" class="form-control" placeholder="Nama Wali" disabled value="<?= $pendaftaran->wali ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Sekolah Tertinggi Wali</label>
						<input name="sklh_tinggi" type="text" class="form-control" placeholder="Sekolah Tertinggi Wali" disabled value="<?= $pendaftaran->sklh_tinggi ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Hubungan wali dengan peserta</label>
						<input name="hub_peserta" type="text" class="form-control" placeholder="Hubungan wali dengan peserta" disabled value="<?= $pendaftaran->hub_peserta ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Pekerjaan Wali</label>
						<input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan Wali" disabled value="<?= $pendaftaran->pekerjaan ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>No Telpon Orang Tua / Wali</label>
						<input name="tlpn" type="text" class="form-control" placeholder="No Telpon Orang Tua / Wali" disabled value="<?= $pendaftaran->tlpn ?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Alamat Orang Tua / Wali</label>
				<textarea name="alamat_ortu" class="form-control" cols="30" rows="10" disabled placeholder="Alamat" disabled><?= $pendaftaran->alamat_ortu ?></textarea>
			</div>

			<h4>ASAL MULA PESERTA DIDIK</h4>
			<h4>ORANG TUA / WALI</h4>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>Masuk Sekulah Ini Sebagai </label>
						<input name="msk_sklh" type="text" class="form-control" placeholder="Masuk Sekulah Ini Sebagai" disabled value="<?= $pendaftaran->msk_sklh ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Nama Sekolah Asal</label>
						<input name="nama_sklh" type="text" class="form-control" placeholder="Nama Sekolah Asal" disabled value="<?= $pendaftaran->nama_sklh ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Tahun Lulus (ijazah)</label>
						<input name="thn_lulus" type="text" class="form-control" placeholder="Tahun Lulus" disabled value="<?= $pendaftaran->thn_lulus ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Pindahan Dari Sekolah </label>
						<input name="sklh_asal" type="text" class="form-control" placeholder="Pindahan Dari Sekolah " disabled value="<?= $pendaftaran->sklh_asal ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Tanggal Pindah Sekolah</label>
						<input name="tgl_pindah" type="text" class="form-control" placeholder="Tanggal Pindah Sekolah" disabled value="<?= $pendaftaran->tgl_pindah ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<!-- text input -->
					<div class="form-group">
						<label>Pindahan Dari Kelas</label>
						<input name="kelas_pindah" type="text" class="form-control" placeholder="Pindahan Dari Kelas" disabled value="<?= $pendaftaran->kelas_pindah ?>">
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

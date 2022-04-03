<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('<?= base_url('frontend/images/breadcrumb-bg.jpg') ?>')">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2><?= $title ?></h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="<?= base_url() ?>">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="<?= base_url('pendaftaran/pendaftaran') ?>"><?= $title ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Contact Us -->
<section id="contact" class="contact section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-12">
				<div class="section-title bg">
					<h2>Pendaftaran Warga Baru</h2>
					<p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy</p>
					<div class="icon"><i class="fa fa-paper-plane"></i></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-12">
				<div class="form-head">
					<!-- Contact Form -->
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
					} ?>
					<form class="form" action="<?= base_url('pendaftaran/pendaftaran') ?>" method="POST">
						<h3>-KETERANGAN WARGA BELAJAR</h3>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-user"></i>
									<input name="nama_lengkap" type="text" placeholder="Nama Lengkap" value="<?= set_value('nama_lengkap') ?>" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="nama_pang" type="text" placeholder="Nama Panggilan" value="<?= set_value('nama_pang') ?>" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<select name="jenis_kel" id="jenis_kel" aria-placeholder="Jenis Kelamin">
										<option>---Jenis Kelamin---</option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="tempat_lahir" type="text" placeholder="Tempat Lahir" value="<?= set_value('tempat_lahir') ?>" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="tgl_lahir" type="date" placeholder="Tanggal Lahir" value="<?= set_value('tgl_lahir') ?>" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<select name="warganegara" id="warganegara" aria-placeholder="Kewarganegaraan">
										<option>---Kewarganegaraan---</option>
										<option value="WNI">WNI</option>
										<option value="WNA">WNA</option>
										<option value="Keturunan">Keturunan</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="anak_ke" type="number" placeholder="Anak Ke" value="<?= set_value('anak_ke') ?>" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="jml_sdr" type="number" placeholder="Jumlah Saudara Kandung" value="<?= set_value('jml_sdr') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="jml_sdr_tiri" type="number" placeholder="Jumlah Saudara Tiri" value="<?= set_value('jml_sdr_tiri') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="jml_sdr_angkat" type="number" placeholder="Jumlah Saudara angkat" value="<?= set_value('jml_sdr_angkat') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="bahasa" type="text" placeholder="Bahasa Sehari-hari" value="<?= set_value('bahasa') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="berat_bd" type="number" placeholder="Berat Badan" value="<?= set_value('berat_bd') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="tinggi_bd" type="nummber" placeholder="Tinggi Badan" value="<?= set_value('tinggi_bd') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<select name="gol_darah" id="gol_darah" aria-placeholder="Golongan Darah">
										<option>---Golongan Darah---</option>
										<option value="A">A</option>
										<option value="AB">AB</option>
										<option value="B">B</option>
										<option value="O">O</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="penyakit" type="text" placeholder="Penyakit berat yang pernah diderita">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="no_tlpn" type="text" value="<?= set_value('no_tlpn') ?>" placeholder="No Telphone/HP">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<select name="tempat_tinggal" id="tempat_tinggal" aria-placeholder="Bertempat Tinggal Pada">
										<option>---Bertempat Tinggal Pada---</option>
										<option value="Orangtua">Orang Tua</option>
										<option value="Wali">Wali</option>
										<option value="Menumpang">Menumpang</option>
										<option value="Asrama">Asrama</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="alamat" placeholder="Alamat Lengkap, Rt/Rw, Des, Kec, Kab, Prov." value="<?= set_value('alamat') ?>">
								</div>
							</div>
						</div>
						<br>
						<br>
						<h3>-ORANG TUA / WALI</h3>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="ayah" type="text" placeholder="Nama Ayah Kandung" value="<?= set_value('ayah') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="ibu" type="text" placeholder="Nama Ibu Kandung" value="<?= set_value('ayah') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="sklh_ayah" type="text" placeholder="Pendidikan Tertinggi Ayah" value="<?= set_value('sklh_ayah') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="sklh_ibu" type="text" placeholder="Pendidikan Tertinggi Ibu" value="<?= set_value('sklh_ibu') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="pkrj_ayah" type="text" placeholder="Pekrjaan Ayah" value="<?= set_value('pkrj_ayah') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="pkrj_ibu" type="text" placeholder="Pekerjaan Ibu" value="<?= set_value('pkrj_ibu') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="wali" type="text" placeholder="Nama Wali Peserta Didik" value="<?= set_value('wali') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="sklh_tinggi" type="text" placeholder="Pendidikan Tertinggi" value="<?= set_value('sklh_tinggi') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="hub_peserta" type="text" placeholder="Hubungan Terhadap Peserta Didik" value="<?= set_value('hub_peserta') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="pekerjaan" type="text" placeholder="Pekerjaan Wali" value="<?= set_value('pekerjaan') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="alamat_ortu" type="text" placeholder="Alamat Orang Tua/ Wali" value="<?= set_value('alamat_ortu') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="tlpn" type="text" placeholder="No telephon" value="<?= set_value('tlpn') ?>">
								</div>
							</div>
						</div>
						<br>
						<br>
						<h4>-ASAL MULA PERSERTA DIDIK</h4>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<select name="msk_sklh" id="msk_sklh" aria-placeholder="Masuk Sekolah ini Sebbagai">
										<option>---Masuk Sekolah ini Sebbagai---</option>
										<option value="Peserta Didik Baru">Peserta Didik Baru</option>
										<option value="Pindahan">Pindahan</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="nama_sklh" type="text" placeholder="Nama Sekolah Terakhir" value="<?= set_value('nama_sklh') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="thn_lulus" type="date" placeholder="Tahun Lulus (Ijazah)" value="<?= set_value('thn_lulus') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="sklh_asal" type="text" placeholder="Pindahan Dari Nama Sekolah Asal" value="<?= set_value('sklh_asal') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="tgl_pindah" type="d" placeholder="Tanggal Pindah" value="<?= set_value('tgl_pindah') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="kelas_pindah" type="text" placeholder="Dari Kelas Pindah" value="<?= set_value('kelas_pindah') ?>">
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<div class="button">
									<button type="submit" class="btn primary">Daftar PKMB</button>
								</div>
							</div>
						</div>
					</form>
					<?php echo form_close() ?>
					<!--/ End Contact Form -->
					<p>Catatan : *Kosongkan Yang Tidak Perlu</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="contact-right">
					<!-- Contact-Info -->
					<div class="contact-info">
						<div class="icon"><i class="fa fa-map"></i></div>
						<h3>Lokasi Sekolah Kami</h3>
						<p>jl.siliwangi 06 kuningan </p>
					</div>
					<!-- Contact-Info -->
					<div class="contact-info">
						<div class="icon"><i class="fa fa-envelope"></i></div>
						<h3>kontak informasi</h3>
						<p>+123 456-7890</p>
					</div>
					<!-- Contact-Info -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Contact Us -->

<!-- Clients CSS -->
<div class="clients overlay">
	<div class="container">
		<div class="row">
		</div>
	</div>
</div>
<!--/ End Clients CSS -->

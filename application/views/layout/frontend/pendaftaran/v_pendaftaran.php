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
					<p>Materi program didesain secara mandiri 30% kurikulum nasional 70 % mengutamakan keterampilan produktif dan penopang kewirausahaan (sesuai minat bakat dan usia warga belajar diatas usia sekolah)</p>
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
            <h5><i class="icon fa fa-exclamation-triangle"></i>', '</h5></div>');

					//notifikasi gagal upload gambar
					if (isset($error_upload)) {
						echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fa fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
					}
					echo form_open_multipart('pendaftaran/pendaftaran') ?>
					<form class="form">
						<h3>-KETERANGAN WARGA BELAJAR</h3>
						<br>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Nama Lengkap</label>
								<div class="form-group">
									<i class="fa fa-user"></i>
									<input name="nama_lengkap" type="type" value="<?= $this->session->userdata('nama_lengkap'); ?>" disabled>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Jenis Kelamin</label>
								<div class="form-group">
									<input name="jenis_kel" type="type" value="<?= $this->session->userdata('jenis_kel'); ?>" disabled>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Tempat Lahir</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="tempat_lahir" type="text" placeholder="Tempat Lahir" value="<?= set_value('tempat_lahir') ?>" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Tanggal Lahir</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="tgl_lahir" type="date" placeholder="Tanggal Lahir" value="<?= set_value('tgl_lahir') ?>" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Agama</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="agama" type="text" placeholder="Agama" value="<?= set_value('agama') ?>" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">No Telphone/HP</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="no_tlpn" type="type" value="<?= $this->session->userdata('no_tlpn'); ?>" disabled>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Alamat</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="alamat" type="type" value="<?= $this->session->userdata('alamat') ?>" disabled>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Desa</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="desa" placeholder="Desa" value="<?= set_value('desa') ?>" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Kecamatan</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="kecamatan" placeholder="Kecamatan" value="<?= set_value('kecamatan') ?>" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Kabupaten</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="kabupaten" placeholder="Kabupaten" value="<?= set_value('kabupaten') ?>" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Upload Ijazah</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input type="file" name="ijazah" id="preview_gambar">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Upload Akte</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input type="file" name="akteu" id="preview_gambar">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Upload KK (Kartu Keluarga)</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input type="file" name="nilai_raport" id="preview_gambar">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Kejar Paket</label>
								<div class="form-group">
									<!-- <i class="fa fa-user"></i> -->
									<select name="paket" id="paket">
										<option>---Pilih Kejar Paket----</option>
										<option value="A">Paket A</option>
										<option value="B">Paket B</option>
										<option value="C">Paket C</option>
									</select>
								</div>
							</div>
						</div>
						<br>
						<br>
						<br>
						<h4>-ASAL MULA PESERTA DIDIK</h4>
						<br>
						<div class="row">

							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Pendidikan Sebelum-nya</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<select name="pendidikan" id="pendidikan">
										<option>---Pilih endidikan Sebelum-nya----</option>
										<option value="Belum Sekolah">Belum Sekolah</option>
										<option value="SD">SD</option>
										<option value="SMP">SMP</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Tahun Lulus (Ijazah)</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="thn_lulus" type="date" placeholder="Tahun Lulus (Ijazah)" value="<?= set_value('thn_lulus') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Asal Sekolah</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="pindahan" type="text" placeholder="Asal Sekolah" value="<?= set_value('pindahan') ?>">
								</div>
							</div>
						</div>
						<br>
						<br>
						<h4>-PEMINATAN SISWA</h4>
						<br>
						<div class="row">

							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Peminatan Siswa</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<select name="id_peminatan" id="pendidikan">
										<option>---Pilih Peminatan Siswa---</option>
										<?php foreach ($peminatan as $key => $value) { ?>
											<option value="<?= $value->id_peminatan ?>"><?= $value->nama_peminatan ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<br>
						<br>
						<input type="text" value="<?= $this->session->userdata('id_warga') ?>" hidden>
						<div class="col-12">
							<div class="form-group">
								<div class="button">
									<button type="submit" class="btn btn-success swalDefaultSuccess">Daftar PKBM</button>
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
						<h3>Penyelenggaraan Program Pendidikan Kesetaraan</h3>
						<p>
							Paket A setara SD/MI <br>
							Paket B setara SMP/MTS <br>
							Paket C setara SMA/MA <br>
						</p>
					</div>
					<!-- Contact-Info -->
					<div class="contact-info">
						<div class="icon"><i class="fa fa-envelope"></i></div>
						<h3>kontak informasi</h3>
						<p>JL. Pasar Baru, RT.01 RW.01 Dusun Wage <br>
							Desa Sadamantra <br>
							Kec. Jalaksana <br>
							Kab. Kuningan – Jawa Barat <br>
							Kode Pos : 45554 <br>
							Telp. 082240627360
						</p>
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

<script src="<?= base_url() ?>frontend/sweetalert2/sweetalert2.min.js"></script>

<script type="text/javascript">
	$(function() {
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});

		$('.swalDefaultSuccess').click(function() {
			Toast.fire({
				icon: 'success',
				title: 'Pendaftaran Berhasil.'
			})
		});
	});
</script>
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
						</div>
						<br>
						<br>
						<h4>-ASAL MULA PERSERTA DIDIK</h4>
						<br>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Tahun Lulus (Ijazah)</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="thn_lulus" type="date" placeholder="Tahun Lulus (Ijazah)" value="<?= set_value('thn_lulus') ?>">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<label for="">Pindahan Dari Nama Sekolah Asal</label>
								<div class="form-group">
									<i class="fa fa-envelope"></i>
									<input name="pindahan" type="text" placeholder="Pindahan Dari Nama Sekolah Asal" value="<?= set_value('pindahan') ?>">
								</div>
							</div>
						</div>
						<input type="text" value="<?= $this->session->userdata('id_warga') ?>" hidden>
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
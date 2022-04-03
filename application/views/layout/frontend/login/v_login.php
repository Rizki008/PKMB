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
						<li class="active"><a href="<?= base_url('warga/login') ?>"><?= $title ?></a></li>
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
						<h2><?= $title ?></h2>
						<p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy</p>
						<div class="icon"><i class="fa fa-paper-plane"></i></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12">
					<div class="form-head">
						<!-- Contact Form -->
						<?php
						echo validation_errors('<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

						if ($this->session->flashdata('pesan')) {
							echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-check"></i> Sukses</h5>';
							echo $this->session->flashdata('pesan');
							echo '</div>';
						} ?>
						<form class="form" action="<?= base_url('warga/login') ?>" method="POST">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<i class="fa fa-user"></i>
										<input name="username" type="text" value="<?= set_value('username') ?>" placeholder="Username" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<i class="fa fa-envelope"></i>
										<input name="password" type="password" value="<?= set_value('password') ?>" placeholder="Password" required>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn primary">Login</button>
											<a href="<?= base_url('warga/register') ?>" class="btn primary">Registrasi</a>
										</div>
									</div>
								</div>
							</div>
						</form>
						<!--/ End Contact Form -->
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

<!-- Header -->
<header class="header">
	<!-- Header Inner -->
	<div class="header-inner overlay">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-12">
					<!-- Logo -->
					<div class="logo">
						<a href="<?= base_url() ?>"><img src="<?= base_url() ?>frontend/images/logo.png" alt="#"></a>
					</div>
					<!--/ End Logo -->
					<div class="mobile-menu"></div>
				</div>
				<div class="col-lg-9 col-md-9 col-12">
					<div class="menu-bar">
						<nav class="navbar navbar-default">
							<div class="navbar-collapse">
								<!-- Main Menu -->
								<ul id="nav" class="nav menu navbar-nav">
									<li class="active"><a href="<?= base_url() ?>"><i class="fa fa-home"></i>Home</a></li>
									<li><?php

										if ($this->session->userdata('username') == "") { ?>
											<a href="#"><i class="fa fa-address-book"></i>Buat Akun</a>
											<ul class="dropdown">
												<li><a href="<?= base_url('warga/register') ?>">Register</a></li>
											</ul>
										<?php } else { ?>
											<a href="#"><i class="fa fa-address-book"></i><?= $this->session->userdata('username') ?></a>
											<ul class="dropdown">
												<li><a href="<?= base_url('warga/logout') ?>">Logout</a></li>
											</ul>
										<?php } ?>
									</li>
									<li><a href="<?= base_url('pendaftaran/pendaftaran') ?>"><i class="fa fa-clone"></i>Pendaftaran PKMB</a></li>
									<li><a href="events.html"><i class="fa fa-bullhorn"></i>Program PKMB</a></li>
								</ul>
								<!-- End Main Menu -->
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Header Inner -->
</header>
<!--/ End Header -->

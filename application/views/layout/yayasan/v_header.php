<body class="dashboard dashboard_1">
	<div class="full_container">
		<div class="inner_container">
			<!-- Sidebar  -->
			<nav id="sidebar">
				<div class="sidebar_blog_1">
					<div class="sidebar-header">
						<div class="logo_section">
							<!-- <a href="index.html"><img class="logo_icon img-responsive" src="<?= base_url() ?>backend/images/logo/logo_icon.png" alt="#" /></a> -->
						</div>
					</div>
					<div class="sidebar_user_info">
						<div class="icon_setting"></div>
						<div class="user_profle_side">
							<div class="user_img"><img class="img-responsive" src="<?= base_url() ?>backend/images/layout_img/user_img.jpg" alt="#" /></div>
							<div class="user_info">
								<h6><?= $this->session->userdata('username') ?></h6>
								<p><span class="online_animation"></span> Online</p>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar_blog_2">
					<h4>Data Master</h4>
					<ul class="list-unstyled components">
						<li class="active">
							<a href="<?= base_url('admin/yayasan') ?>"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
						</li>
						<li><a href="<?= base_url('pendaftaran/yayasan') ?>"><i class="fa fa-clock-o orange_color"></i> <span>Pendaftaran Warga</span></a></li>
						<li>
							<a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Data Warga</span></a>
							<ul class="collapse list-unstyled" id="element">
								<li><a href="<?= base_url('pendaftaran/dataterima_yayasan') ?>">> <span>Data Diterima</span></a></li>
								<li><a href="<?= base_url('pendaftaran/datatolak_yayasan') ?>">> <span>Data Ditolak</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- end sidebar -->
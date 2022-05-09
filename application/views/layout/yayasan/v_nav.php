<!-- right content -->
<div id="content">
	<!-- topbar -->
	<div class="topbar">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="full">
				<button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
				<div class="logo_section">
					<!-- <a href="<?= base_url('admin/yayasan') ?>"><img class="img-responsive" src="<?= base_url() ?>backend/images/logo/logo.png" alt="#" /></a> -->
				</div>
				<div class="right_topbar">
					<div class="icon_info">
						<ul>
							<!-- <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li> -->
						</ul>
						<ul class="user_profile_dd">
							<li>
								<a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="<?= base_url('backend/images/layout_img/user_img.jpg') ?>" alt="#" /><span class="name_user"><?= $this->session->userdata('username') ?></span></a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<!-- end topbar -->
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- site icon -->
	<link rel="icon" href="<?= base_url() ?>backend/images/fevicon.png" type="image/png" />
	<!-- bootstrap css -->
	<link rel="stylesheet" href="<?= base_url() ?>backend/css/bootstrap.min.css" />
	<!-- site css -->
	<link rel="stylesheet" href="<?= base_url() ?>backend/style.css" />
	<!-- responsive css -->
	<link rel="stylesheet" href="<?= base_url() ?>backend/css/responsive.css" />
	<!-- color css -->
	<link rel="stylesheet" href="<?= base_url() ?>backend/css/colors.css" />
	<!-- select bootstrap -->
	<link rel="stylesheet" href="<?= base_url() ?>backend/css/bootstrap-select.css" />
	<!-- scrollbar css -->
	<link rel="stylesheet" href="<?= base_url() ?>backend/css/perfect-scrollbar.css" />
	<!-- custom css -->
	<link rel="stylesheet" href="<?= base_url() ?>backend/css/custom.css" />
	<!-- calendar file css -->
	<link rel="stylesheet" href="<?= base_url() ?>backend/js/semantic.min.css" />
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="inner_page login">
	<div class="full_container">
		<div class="container">
			<div class="center verticle_center full_height">
				<div class="login_section">
					<div class="logo_login">
						<div class="center">
							<img width="210" src="<?= base_url() ?>backend/images/logo/logo.png" alt="#" />
						</div>
					</div>
					<div class="login_form">
						<?php echo form_open('auth/user_login') ?>
						<fieldset>
							<div class="field">
								<label class="label_field">Username</label>
								<input type="username" name="username" placeholder="Username" value="<?= set_value('username') ?>" required />
							</div>
							<div class="field">
								<label class="label_field">Password</label>
								<input type="password" name="password" placeholder="Password" value="<?= set_value('password') ?>" required />
							</div>
							<div class="field margin_0">
								<label class="label_field hidden">hidden label</label>
								<button type="submit" class="main_bt">Sing In</button>
							</div>
						</fieldset>
						<?php echo form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- jQuery -->
	<script src="<?= base_url() ?>backend/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>backend/js/popper.min.js"></script>
	<script src="<?= base_url() ?>backend/js/bootstrap.min.js"></script>
	<!-- wow animation -->
	<script src="<?= base_url() ?>backend/js/animate.js"></script>
	<!-- select country -->
	<script src="<?= base_url() ?>backend/js/bootstrap-select.js"></script>
	<!-- nice scrollbar -->
	<script src="<?= base_url() ?>backend/js/perfect-scrollbar.min.js"></script>
	<script>
		var ps = new PerfectScrollbar('#sidebar');
	</script>
	<!-- custom js -->
	<script src="<?= base_url() ?>backend/js/custom.js"></script>
</body>

</html>
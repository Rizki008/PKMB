<!-- Breadcrumb -->
<div class="breadcrumbs overlay" style="background-image:url('<?= base_url('frontend/images/breadcrumb-bg.jpg') ?>')">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2>Upcoming Events</h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="<?= base_url() ?>">Home<i class="fa fa-angle-right"></i></a></li>
					<li><a href="#">Events<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="<?= base_url('pendaftaran/notifstatus') ?>">Events</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/ End Breadcrumb -->

<!-- Events -->
<section class="events archive section">
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
		<?php
		foreach ($pendaftaran as $key => $value) { ?>
			<?php if ($value->status == 1) { ?>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<!-- Single Event -->
						<?php foreach ($notifterima as $key => $value) { ?>
							<div class="single-event">
								<div class="event-image">
									<img src="<?= base_url('frontend/images/events/event3.jpg') ?>" alt="#">
									<div class="event-date">
										<p>Kelas <span><?= $value->kelas_terima ?></span></p>
									</div>
								</div>
								<div class="event-content">
									<h3 class="event-title"><a href="event-single.html">Selamat Anda Dinyatakan Lolos Dan Diterima Di sekolah Kami</a></h3>
									<p>Alasan Diterima: <?= $value->alasan ?></p>
								</div>
							</div>
						<?php } ?>
						<!-- End Single Event -->
					</div>
				</div>
			<?php } elseif ($value->status == 2) { ?>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<!-- Single Event -->
						<div class="single-event">
							<div class="event-image">
								<div class="event-date">
								</div>
							</div>
							<?php foreach ($notiftolak as $key => $value) { ?>
								<div class="event-content">
									<h3 class="event-title"><a href="event-single.html">Mohon Maaf Anda Tidak Diterima</a></h3>
									<p><?= $value->alasan ?></p>
								</div>
							<?php } ?>
						</div>
						<!-- End Single Event -->
					</div>
				</div>
			<?php } ?>
		<?php } ?>
	</div>
</section>
<!--/ End Events -->

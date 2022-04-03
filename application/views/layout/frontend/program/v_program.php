<div class="breadcrumbs overlay" style="background-image:url('<?= base_url('frontend/images/breadcrumb-bg.jpg') ?>')">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2><?= $title ?></h2>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<ul class="bread-list">
					<li><a href="<?= base_url() ?>">Home<i class="fa fa-angle-right"></i></a></li>
					<li class="active"><a href="#"><?= $title ?><i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<section class="courses archive section">
	<div class="container">
		<div class="row">
			<?php foreach ($program as $key => $value) { ?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-course">
						<div class="course-head overlay">
							<img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="#">
						</div>
						<div class="course-body">
							<div class="name-price">
								<div class="teacher-info">
									<img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="#">
									<h4 class="title"><?= $value->nama_program ?></h4>
								</div>
							</div>
							<h4 class="c-title"><a href="course-single.html"><?= $value->nama_program ?></a></h4>
							<p><?= $value->deskripsi ?></p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

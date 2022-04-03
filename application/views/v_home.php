<!-- Slider Area -->
<section class="home-slider">
	<div class="slider-active">
		<!-- Single Slider -->
		<div class="single-slider overlay">
			<div class="slider-image" style="background-image:url('<?= base_url('frontend/images/slider/slider-bg1.jpg') ?>')"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-10 col-12">
						<!-- Slider Content -->
						<div class="slider-content">
							<h1 class="slider-title">PKMB</h1>
							<p class="slider-text">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula There are many variations of passages of Lorem Ipsum available, but the majority</p>
							<!-- Button -->
							<div class="button">
								<a href="<?= base_url('pendaftaran/pendaftaran') ?>" class="btn white">Daftar PKMB</a>
							</div>
							<!--/ End Button -->
						</div>
						<!--/ End Slider Content -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</div>
</section>
<!--/ End Slider Area -->

<!-- Courses -->
<section class="courses section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-12">
				<div class="section-title bg">
					<h2>Program PKMB</h2>
					<p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy</p>
					<div class="icon"><i class="fa fa-clone"></i></div>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($program as $key => $value) { ?>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Single Course -->
					<div class="single-course">
						<!-- Course Head -->
						<div class="course-head overlay">
							<img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="#">
						</div>
						<!-- Course Body -->
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
						<!--/ End Course Meta -->
					</div>
					<!--/ End Single Course -->
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!--/ End Courses -->

<!-- Features -->
<div class="features overlay section" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Single Feature -->
				<div class="single-feature">
					<div class="icon-img">
						<img src="<?= base_url('frontend/images/feature1.jpg') ?>" alt="#">
						<i class="fa fa-clone"></i>
					</div>
					<div class="feature-content">
						<h4 class="f-title">Trending Course</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam suscipit fugiat sint totam soluta assumenda</p>
					</div>
				</div>
				<!--/ End Single Feature -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Single Feature -->
				<div class="single-feature">
					<div class="icon-img">
						<img src="<?= base_url('frontend/images/feature2.jpg') ?>" alt="#">
						<i class="fa fa-book"></i>
					</div>
					<div class="feature-content">
						<h4 class="f-title">Books & Library</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam suscipit fugiat sint totam soluta assumenda</p>
					</div>
				</div>
				<!--/ End Single Feature -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Single Feature -->
				<div class="single-feature">
					<div class="icon-img">
						<img src="<?= base_url('frontend/images/feature1.jpg') ?>" alt="#">
						<i class="fa fa-institution"></i>
					</div>
					<div class="feature-content">
						<h4 class="f-title">Best Facility</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam suscipit fugiat sint totam soluta assumenda</p>
					</div>
				</div>
				<!--/ End Single Feature -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Single Feature -->
				<div class="single-feature">
					<div class="icon-img">
						<img src="<?= base_url('frontend/images/feature3.jpg') ?>" alt="#">
						<i class="fa fa-users"></i>
					</div>
					<div class="feature-content">
						<h4 class="f-title">Certified Teachers</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam suscipit fugiat sint totam soluta assumenda</p>
					</div>
				</div>
				<!--/ End Single Feature -->
			</div>
		</div>
	</div>
</div>
<!--/ End Features -->

<!-- Faqs -->
<section class="faqs section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-12">
				<div class="section-title bg">
					<h2>Visi Misi</h2>
					<p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy</p>
					<div class="icon"><i class="fa fa-question"></i></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-12">
				<div class="faq-image">
					<img src="<?= base_url('frontend/images/faq.png') ?>" alt="#">
				</div>
			</div>
			<div class="col-lg-7 col-12">
				<div class="faq-main">
					<div class="faq-content">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<!-- Single Faq -->
							<div class="panel panel-default">
								<div class="faq-heading" id="FaqTitle1">
									<h4 class="faq-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq1"><i class="fa fa-question"></i>We have launches a new software house!</a>
									</h4>
								</div>
								<div id="faq1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle1">
									<div class="faq-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat</div>
								</div>
							</div>
							<!--/ End Single Faq -->
							<!-- Single Faq -->
							<div class="panel panel-default active">
								<div class="faq-heading" id="FaqTitle2">
									<h4 class="faq-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq2"><i class="fa fa-question"></i>Curabitur rhoncus commodo rutrum. Pellentesque</a>
									</h4>
								</div>
								<div id="faq2" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="FaqTitle2">
									<div class="faq-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat</div>
								</div>
							</div>
							<!--/ End Single Faq -->
							<!-- Single Faq -->
							<div class="panel panel-default">
								<div class="faq-heading" id="FaqTitle3">
									<h4 class="faq-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq3"><i class="fa fa-question"></i>Suspendisse facilisis ultricies tortor, nec sollicitudin</a>
									</h4>
								</div>
								<div id="faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle3">
									<div class="faq-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat</div>
								</div>
							</div>
							<!--/ End Single Faq -->
							<!-- Single Faq -->
							<div class="panel panel-default">
								<div class="faq-heading" id="FaqTitle4">
									<h4 class="faq-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq4"><i class="fa fa-question"></i>Tristique senectus et netus et malesuada fames ac turpis </a>
									</h4>
								</div>
								<div id="faq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle4">
									<div class="faq-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat</div>
								</div>
							</div>
							<!--/ End Single Faq -->
							<!-- Single Faq -->
							<div class="panel panel-default">
								<div class="faq-heading" id="FaqTitle5">
									<h4 class="faq-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq5"><i class="fa fa-question"></i>Cras nulla orci, pharetra at dictum consequat</a>
									</h4>
								</div>
								<div id="faq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle5">
									<div class="faq-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat</div>
								</div>
							</div>
							<!--/ End Single Faq -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Blogs -->

<!-- Clients CSS -->
<div class="clients">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="text-content">
					<h4>Our Awesome Clients!</h4>
					<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem</p>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-12">
				<div class="client-slider">
					<div class="single-slider">
						<a href="#"><img src="images/client1.png" alt="#"></a>
					</div>
					<div class="single-slider">
						<a href="#"><img src="images/client2.png" alt="#"></a>
					</div>
					<div class="single-slider">
						<a href="#"><img src="images/client3.png" alt="#"></a>
					</div>
					<div class="single-slider">
						<a href="#"><img src="images/client4.png" alt="#"></a>
					</div>
					<div class="single-slider">
						<a href="#"><img src="images/client5.png" alt="#"></a>
					</div>
					<div class="single-slider">
						<a href="#"><img src="images/client1.png" alt="#"></a>
					</div>
					<div class="single-slider">
						<a href="#"><img src="images/client2.png" alt="#"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/ End Clients CSS -->

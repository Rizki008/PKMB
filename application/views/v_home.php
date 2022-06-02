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
							<h1 class="slider-title">PKBM</h1>
							<p class="slider-text">PUSAT KEGIATAN BELAJAR MASYARAKAT <br>
								“PKBM TARUNA MANDIRI “
								<br>
								YAYASAN TARUNA MANDIRI
								KABUPATEN KUNINGAN - JAWA BARAT
							</p>
							<!-- Button -->
							<div class="button">
								<a href="<?= base_url('pendaftaran/pendaftaran') ?>" class="btn white">Daftar PKBM</a>
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
					<h2>Kegiatan PKBM</h2>
					<p>Pusat Kegiatan Belajar Mengajar (PKBM) Taruna Mandiri sebagai lembaga penyelenggara pendidikan non formal berkomitmen membantu meningkatkan partisipasi masyarakat dalam pelaksanaan pemerataan Pendidikan Nonformal dan terus berupaya menyelenggarakan dan meningkatkan mutu layanan dalam menunjang kemandirian warga belajar berbasis keterampilan produktif</p>
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
						<h4 class="f-title">PENDIDIKAN</h4>
						<p>Kejar Paket A,
							Kejar Paket B
							kejar Paket C
						</p>
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
						<h4 class="f-title">PELATIHAN KETERAMPILAN / VOKASIONAL</h4>
						<p>Pelatihan merupakan program pembekalan keterampilan vokasional yang terintegrasi pada proses pembelajaran kejar paket sesuai dengan kebutuhan dan potensi warga belajara</p>
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
						<h4 class="f-title">TEMPAT PEMBELAJARAN</h4>
						<p>Tempat pelaksanaan kegiatan belajar diselenggarakan sesuai dengan lokasi terdekat warga belajar, menggunakan sistem kelas jauh, melalui pemberdayaan organisasi karang taruna terdekat</p>
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
						<h4 class="f-title">PROSES PEMBELAJARAN</h4>
						<p>Kegiatan belajar mengajar pada PKBM Taruna Mandiri diselenggarakan sebagaiman standar pelayanan pendidikan keaksaraan dengan ditunjang oleh pelatihan keterampilan produktif</p>
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
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq1"><i class="fa fa-question"></i>VISI</a>
									</h4>
								</div>
								<div id="faq1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle1">
									<div class="faq-body">"MEWUJUDKAN GERASI CERDAS, MAJU DAN BERKARAKTER"</div>
								</div>
							</div>
							<!--/ End Single Faq -->
							<!-- Single Faq -->
							<div class="panel panel-default active">
								<div class="faq-heading" id="FaqTitle2">
									<h4 class="faq-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq2"><i class="fa fa-question"></i>MISI</a>
									</h4>
								</div>
								<div id="faq2" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="FaqTitle2">
									<div class="faq-body">1. Berperan aktif dalam menuntaskan program pemerintah wajib belajar dua belas tahun <br>
										2. Meningkatkan kualitas pengelolaan PKBM Taruna Mandiri yang akutabel <br>
										3. Peningkatan Sumber Daya Manusia yang profesional <br>
										4. Mengembangkan, memfasilitasi, memobilisasi kegiatan pembelajaran dan pemberdayaan masyarakat secara dinamis <br>
										5. Menjalin hubungan lintas sektoral untuk kemajuan bersama <br>
										6. Pengembangan pendidikan kecakapan hidup berkualitas yang memandirikan masyarakat <br>
										7. Mewujudkan warga belajar yang berkepribadian baik dan berahlak mulia <br>
										8. Menyiapkan mutu lulusan yang siap kerja dan menciptakan lapangan kerja <br>
									</div>
								</div>
							</div>
							<!--/ End Single Faq -->
							<!-- Single Faq -->
							<div class="panel panel-default">
								<div class="faq-heading" id="FaqTitle3">
									<h4 class="faq-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq3"><i class="fa fa-question"></i>TUJUAN</a>
									</h4>
								</div>
								<div id="faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FaqTitle3">
									<div class="faq-body">1. Mampu berperan aktif dalam menuntaskan program pemerintah wajib belajar dua belas tahun <br>
										2. Tercapainya manajemen kelembagaan yang mandiri dan akuntabel <br>
										3. Tercapainya sumber daya manusia yang profesional <br>
										4. Mampu mengembangkan, memfasilitasi, memobilisasi kegiatan pembelajaran dan pemberdayaan masyarakat secara dinamis <br>
										5. Tercapainya janilan hubungan lintas sektoral untuk kemajuan bersama <br>
										6. Tercapainya pengembangan pendidikan kecakapan hidup berkualitas yang memandirikan masyarakat <br>
										7. Terwujudnya warga belajar yang berkepribadian baik dan berahlak mulia <br>
									</div>
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
					<h4>PUSAT KEGIATAN BELAJAR MENGAJAR </h4>
					<p>Jalan Baru Desa Sadamantra Kecamatan Jalaksana Kab. Kuningan – Prov. Jabar</p>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-12">
				<!-- <div class="client-slider">
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
				</div> -->
			</div>
		</div>
	</div>
</div>
<!--/ End Clients CSS -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Cosmetics Safety and Halal Check</title>
	
	<meta content="" name="description">

	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url() ?>assets/assets_home/img/logoo.png" rel="icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url() ?>assets/assets_home/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/assets_home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/assets_home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/assets_home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/assets_home/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/assets_home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url() ?>assets/assets_home/css/style.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/assets_home/css/search.css" rel="stylesheet">
	
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

		<a href="home" class="logo d-flex align-items-center">
			<img src="<?= base_url() ?>assets/assets_home/img/logoo.png" alt="">
			<span>CosmeticsSafety</span>
		</a>

		<nav id="navbar" class="navbar">
			<ul>
				<li><a class="nav-link scrollto active" href="#hero">Home</a></li>
				<li><a class="nav-link scrollto" href="#about">About</a></li>
				<li><a class="nav-link scrollto" href="#portfolio">Product</a></li>
				<li><a class="nav-link scrollto" href="#recent-blog-posts">Blog</a></li>
				<li><a class="nav-link scrollto" href="#contact">Contact</a></li>
				<li><a class="getstarted scrollto" href="<?= site_url('Auth') ?>">Login</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="hero d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center">
					<h1 data-aos="fade-up">Sistem Informasi Pengecekan Keamanan dan Kehalalan Produk Kosmetik</h1>
					<h2 data-aos="fade-up" data-aos-delay="400">Pastikan Keamanan dan Kehalalan Produk Kosmetikmu Disini</h2>
					<div data-aos="fade-up" data-aos-delay="600">
						<div class="text-center text-lg-start">
							<a href="<?= site_url('Auth') ?>" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
								<span>Login</span>
								<i class="bi bi-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
					<img src="<?= base_url() ?>assets/assets_home/img/one.png" class="img-fluid" alt="">
				</div>
			</div>
		</div>

	</section><!-- End Hero -->

	<main id="main">
		<!-- ======= About Section ======= -->
		<section id="about" class="about">

			<div class="container" data-aos="fade-up">
				<div class="row gx-0">

					<div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
						<div class="content">
							<h3>Who We Are</h3>
							<h2>Sistem Informasi Pengecekan Keamanan dan Kehalalan Produk Kosmetik</h2>
							<p>
								Sistem Informasi berbasis web yang memudahkan konsumen dalam mengecek status keamanan dan kehalalan produk kosmetik. 
								Dengan fitur pencarian produk, informasi detail tentang sertifikasi BPOM dan MUI, 
								serta rincian komposisi bahan, pengguna dapat memastikan produk yang dipilih aman dan halal.
							</p>
							
						</div>
					</div>

					<div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
						<img src="<?= base_url() ?>assets/assets_home/img/two.gif" class="img-fluid" alt="">
					</div>

				</div>
			</div>
			
		</section><!-- End About Section -->

		<!-- ======= Counts Section ======= -->
		<section id="counts" class="counts">
			<div class="container" data-aos="fade-up">

				<div class="row gy-4">

					<div class="col-lg-4 col-md-6">
						<div class="count-box">
							<i class="bi bi-emoji-smile"></i>
							<div>
								<span data-purecounter-start="0" data-purecounter-end="<?= $jmlhjenis ;?>" data-purecounter-duration="1" class="purecounter"></span>
								<p>Jenis Produk</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="count-box">
							<i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
							<div>
								<span data-purecounter-start="0" data-purecounter-end="<?= $jmlhproduk ;?>" data-purecounter-duration="1" class="purecounter"></span>
								<p>Produk</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="count-box">
							<i class="bi bi-headset" style="color: #15be56;"></i>
							<div>
								<span data-purecounter-start="0" data-purecounter-end="<?= $jmlhprodusen ;?>" data-purecounter-duration="1" class="purecounter"></span>
								<p>Produsen</p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Counts Section -->


		<!-- ======= Product Section ======= -->
		<section id="portfolio" class="portfolio">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>PRODUCT</h2>
					<p>Check Cosmetics Here</p>
				</header>

				<div class="row" data-aos="fade-up" data-aos-delay="100">
					<div class="col-lg-12 d-flex justify-content-center">
						<form action="<?php echo site_url('home/search'); ?>" method="post" class="search-form">
							<input type="text" name="keyword" placeholder="Cari produk..." class="search-input">
							<button type="submit" class="search-button">Search</button>
						</form>
					</div>
				</div>
					<?php if (isset($error)): ?>
						<p style="color: red;"><?php echo $error; ?></p>
					<?php endif; ?>

					<?php if (isset($message)): ?>
						<p><?php echo $message; ?></p>
					<?php endif; ?>

					<?php if (isset($products) && !empty($products)): ?>
						<!-- HASIL -->
						<div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
							<?php foreach ($products as $product): ?>
								<div class="col-lg-4 col-md-6 portfolio-item filter-app">
									<div class="portfolio-wrap">
										<img src="<?php echo base_url('gambar/' . $product['gambar']); ?>" alt="<?php echo $product['nama_produk']; ?>" class="img-fluid">
										<div class="portfolio-info">
											<h4><?php echo $product['nama_produk']; ?></h4>
											<p><?php echo $product['gender']; ?></p>
											<div class="portfolio-links">
												<a href="<?php echo base_url('gambar/' . $product['gambar']); ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?php echo $product['nama_produk']; ?>"><i class="bi bi-plus"></i></a>
												<a href="<?php echo base_url(); ?>home/product_detail/<?= $product['id_produk'];?>" title="More Details"><i class="bi bi-link"></i></a>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
			</div>

		</section><!-- End Portfolio Section -->

		<!-- ======= Recent Blog Posts Section ======= -->
		<section id="recent-blog-posts" class="recent-blog-posts">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Blog</h2>
					<p>Blog related to halal and product safety</p>
				</header>

				<div class="row">

					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="<?= base_url() ?>assets/assets_home/img/webinar1.png" class="img-fluid" alt=""></div>
							<span class="post-date">Fri, December 3</span>
							<h3 class="post-title">Webinar LPPOM MUI Bahas Implementasi Regulasi Produk Kosmetik di Indonesia</h3>
							<a href="https://www.halalmui.org/mui14/main/detail/webinar-lppom-mui-bahas-implementasi-regulasi-produk-kosmetik-di-indonesia" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="<?= base_url() ?>assets/assets_home/img/blog-two.jpg" class="img-fluid" alt=""></div>
							<span class="post-date">Fri, December 3</span>
							<h3 class="post-title">Alasan Mengapa Kosmetik Mesti Kantongi Sertifikat Halal?</h3>
							<a href="https://mui.or.id/berita/32653/alasan-mengapa-kosmetik-mesti-kantongi-sertifikat-halal/" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="post-box">
							<div class="post-img"><img src="<?= base_url() ?>assets/assets_home/img/blog-one.jpg" class="img-fluid" alt=""></div>
							<span class="post-date">Wen, December 1</span>
							<h3 class="post-title">Pemerintah Integrasikan Sistem Informasi Pencatatan Produk Halal</h3>
							<a href="https://kemenag.go.id/read/pemerintah-integrasikan-sistem-informasi-pencatatan-produk-halal-kvn76" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
						</div>
					</div>

				</div>

			</div>

		</section><!-- End Recent Blog Posts Section -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<h2>Contact</h2>
					<p>Contact Us</p>
				</header>

				<div class="row gy-4">

					<div class="col-lg-6">

						<div class="row gy-4">
							<div class="col-md-6">
								<div class="info-box" style="border: 1px solid #012970; width: 225px; height: 250px;">
									<i class="bi bi-geo-alt"></i>
									<h3>Address</h3>
									<p>Jl. Gajayana No.50,<br> Dinoyo, Kec. Lowokwaru,<br> Kota Malang, Jawa Timur 65144</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box" style="border: 1px solid #012970; width: 225px; height: 250px;">
									<i class="bi bi-telephone"></i>
									<h3>Call Us</h3>
									<p>(0341) 551354</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box" style="border: 1px solid #012970; width: 225px; height: 250px;">
									<i class="bi bi-envelope"></i>
									<h3>Email Us</h3>
									<p>19650013@student.uin-malang.ac.id<br>19650005@student.uin-malang.ac.id</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="info-box" style="border: 1px solid #012970; width: 225px; height: 250px;">
									<i class="bi bi-clock"></i>
									<h3>Open Hours</h3>
									<p>Monday - Friday<br>9:00AM - 05:00PM</p>
								</div>
							</div>
						</div>

					</div>


				<div class="col-lg-6">
					<div class="container-fluid p-0">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252828.91981030122!2d112.3089898236704!3d-8.055303789055857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78839e1cf761dd%3A0x7ea6983d7cae9da7!2sJurusan%20Teknik%20Informatika%20UIN%20Malang!5e0!3m2!1sid!2sid!4v1652929976897!5m2!1sid!2sid" width="600" height="525" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>


			</div>

		</section><!-- End Contact Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">

		<div class="footer-top">
			<div class="container">
				<div class="row gy-4">
					<div class="col-lg-5 col-md-12 footer-info">
						<a href="home" class="logo d-flex align-items-center">
							<img src="<?= base_url() ?>assets/assets_home/img/logoo.png" alt="">
							<span>CosmeticsSafety</span>
						</a>
						<p>Sistem informasi ini digunaan untuk mengecek keamanan <br> dan kehalalan segala jenis produk kosmetik anda.</p>
						<div class="social-links mt-3">
							<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
							<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
							<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
							<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
						</div>
					</div>

					<div class="col-lg-2 col-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#">About</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#">Product</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#">Blog</a></li>
							<li><i class="bi bi-chevron-right"></i> <a href="#">Login</a></li>
						</ul>
					</div>


					<div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
						<h4>Contact Us</h4>
						Jl. Gajayana No.50,<br> 
						Dinoyo, Kec. Lowokwaru,<br> 
						Kota Malang, Jawa Timur 65144 <br>
						<strong>Phone:</strong> (0341) 551354<br>
						<strong>Email:</strong>info@uin-malang.ac.id<br>
						</p>

					</div>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>2022 Cosmetics Safety</span></strong>. All Rights Reserved
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url() ?>assets/assets_home/vendor/purecounter/purecounter.js"></script>
	<script src="<?= base_url() ?>assets/assets_home/vendor/aos/aos.js"></script>
	<script src="<?= base_url() ?>assets/assets_home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/assets_home/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?= base_url() ?>assets/assets_home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url() ?>assets/assets_home/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/assets_home/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url() ?>assets/assets_home/js/main.js"></script>

	<script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (isset($scrollTo) && $scrollTo): ?>
                var element = document.querySelector("#portfolio");
                if (element) {
                    element.scrollIntoView({ behavior: "smooth" });
                }
            <?php endif; ?>
        });
    </script>

</body>

</html>
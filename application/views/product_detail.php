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

    <!-- Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

    <body>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="<?php echo base_url(''); ?>">Home</a></li>
                    <li>Product Details</li>
                </ol>
                <h2>Product Details</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="<?= base_url() . '/gambar/' . $detail['gambar']; ?>" alt="" style="width: 450px">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
            

                    <div class="col-lg-6">
                        <div class="portfolio-info">
                            <h3>Product Information</h3>
                            <ul>
                                <li><strong>Nama Produk</strong>: <?= $detail['nama_produk']; ?></li>
                                <li><strong>Jenis Produk</strong>: <?= $detail['nama_jenisproduk']; ?></li>
                                <li><strong>Produsen</strong>: <?= $detail['nama_produsen']; ?></li>
                                <li><strong>Gender</strong>: <?= $detail['gender']; ?></li>
                                <li><strong>Sertifikat BPOM</strong>: 
                                    <?php if ($detail['sertifikasi_BPOM'] == NULL) {
                                            echo '<span class="material-icons" style="color: red;">report_gmailerrorred</span>';
                                        } else {
                                            echo '<img src="' . base_url() . 'assets/assets_home/img/bpom.png" alt="Sertifikasi BPOM" style="width: 50px; height: 50px;">';
                                        } ?>
                                </li>
                                <li><strong>Sertifikat MUI</strong>: 
                                    <?php if ($detail['sertifikasi_MUI'] == NULL) {
                                            echo '<span class="material-icons" style="color: red;">report_gmailerrorred</span>';
                                        } else {
                                            echo '<img src="' . base_url() . 'assets/assets_home/img/mui.png" alt="Sertifikasi MUI" style="width: 50px; height: 50px;">';
                                        } ?>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->

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
                        <strong>Email:</strong> info@uin-malang.ac.id<br>
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

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a><!-- End Footer -->

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

</body>

</html>
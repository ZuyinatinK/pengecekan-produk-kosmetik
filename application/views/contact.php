<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact - Cosmetics Safety and Halal Check</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/assets_dashboard/img/logoo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/assets_dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets_dashboard/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets_dashboard/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets_dashboard/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets_dashboard/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets_dashboard/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/assets_dashboard/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/assets_dashboard/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
        <a href="<?php echo base_url('/admin') ?>" class="logo d-flex align-items-center">
            <img src="<?= base_url() ?>assets/assets_dashboard/img/logo.png" alt="">
            <span class="d-none d-lg-block">CosmeticsSafety</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
            </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
                <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                <h6>Hello</h6>
                <span>Admin</span>
                </li>
                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <hr class="dropdown-divider">
                </li>

                <li>
                <a class="dropdown-item d-flex align-items-center" href="<?= base_url('auth/logout');?>">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
                </li>

            </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('/admin') ?>">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="<?php echo base_url('/tabeljenis/tambahjenis') ?>">
                <i class="bi bi-circle"></i><span>Form Jenis Produk</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('/tabelprodusen/tambahprodusen') ?>">
                <i class="bi bi-circle"></i><span>Form Produsen</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('/tabelproduk/tambahproduk') ?>">
                <i class="bi bi-circle"></i><span>Form Produk</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('/tabelkomposisi/tambahkomposisi') ?>">
                <i class="bi bi-circle"></i><span>Form Komposisi</span>
                </a>
            </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="<?php echo base_url('/tabeljenis') ?>">
                <i class="bi bi-circle"></i><span>Tabel Jenis Produk</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('/tabelprodusen') ?>">
                <i class="bi bi-circle"></i><span>Tabel Produsen</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('/tabelproduk') ?>">
                <i class="bi bi-circle"></i><span>Tabel Produk</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('/tabelkomposisi') ?>">
                <i class="bi bi-circle"></i><span>Tabel Komposisi</span>
                </a>
            </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url('/contact') ?>">
            <i class="bi bi-envelope"></i>
            <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('auth/logout');?>">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
            </a>
        </li><!-- End SignOut Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
        <h1>Contact</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('/admin') ?>">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Contact</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

        <section class="section contact">

        <div class="row gy-4">

            <div class="col-xl-6">

            <div class="row">
                <div class="col-lg-6">
                <div class="info-box card" style="border: 1px solid #012970; width: 225px; height: 250px;">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>Jl. Gajayana No.50,<br> Dinoyo, Kec. Lowokwaru,<br> Kota Malang, Jawa Timur 65144</p>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="info-box card" style="border: 1px solid #012970; width: 225px; height: 250px;">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>(0341) 551354</p>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="info-box card" style="border: 1px solid #012970; width: 225px; height: 250px;">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>19650013@student.uin-malang.ac.id<br>19650005@student.uin-malang.ac.id</p>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="info-box card" style="border: 1px solid #012970; width: 225px; height: 250px;">
                    <i class="bi bi-clock"></i>
                    <h3>Open Hours</h3>
                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
                </div>
            </div>

            </div>

            <div class="col-xl-6">
            <div class="card p-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252828.91981030122!2d112.3089898236704!3d-8.055303789055857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78839e1cf761dd%3A0x7ea6983d7cae9da7!2sJurusan%20Teknik%20Informatika%20UIN%20Malang!5e0!3m2!1sid!2sid!4v1652929976897!5m2!1sid!2sid" width="450" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            </div>

        </div>

        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
        &copy; Copyright <strong><span>2022 Cosmetics Safety</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/assets_dashboard/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>assets/assets_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/assets_dashboard/vendor/chart.js/chart.min.js"></script>
    <script src="<?= base_url() ?>assets/assets_dashboard/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url() ?>assets/assets_dashboard/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url() ?>assets/assets_dashboard/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url() ?>assets/assets_dashboard/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url() ?>assets/assets_dashboard/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/assets_dashboard/js/main.js"></script>

</body>

</html>
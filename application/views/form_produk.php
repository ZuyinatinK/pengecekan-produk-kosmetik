<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Forms Produk - Cosmetics Safety and Halal Check</title>
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
            <img src="<?= base_url() ?>assets/assets_dashboard/img/logoo.png" alt="">
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
            <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
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
                <a href="<?php echo base_url('/tabelproduk/tambahproduk') ?>" class="active">
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
            <a class="nav-link collapsed" href="<?php echo base_url('/contact') ?>">
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
        <h1>Form Produk</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('/admin') ?>">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Form Produk</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->
        <section class="section">
        <div class="row">
            <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Inputkan Data Produk</h5>
                <!-- Floating Labels Form -->
                <form class="row g-3" method="POST" action="<?= base_url('tabelproduk/tambah')?>">
                    <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk">
                        <label for="floatingName">Nama Produk</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender">
                        <label for="floatingName">Gender</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <label for="inputNumber" class="col-12 col-form-label">Upload Gambar Produk</label>
                    <div class="col-12">
                        <input class="form-control" type="file" id="gambar" name="gambar">
                    </div>
                    </div>

                    <div class="col-12">
                    <label class="col-12 col-form-label">Sertifikasi</label>
                    <div class="form-check" class="col-6">
                        <input class="form-check-input" type="checkbox" id="sertifikasi_BPOM" value = "Sertifikasi BPOM" name="sertifikasi_BPOM">
                        <label class="form-check-label" for="gridCheck1">
                            Sertifikasi BPOM
                        </label>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sertifikasi_MUI" value = "Sertifikasi MUI" name="sertifikasi_MUI" >
                        <label class="form-check-label" for="gridCheck1">
                            Sertifikasi MUI
                        </label>
                        </div>
                    </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-select" id="id_jenisproduk" name="id_jenisproduk" aria-label="Jenis Produk">
                                <option selected>Open this select menu</option>
                                <?php foreach ($jenis as $je) : ?>
                                <option value="<?php echo $je['id_jenisproduk']; ?>">
                                <?php echo $je['nama_jenisproduk']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <label for="floatingSelect">Jenis Produk</label>
                        </div>
                    </div>
                    <div class="col-12">
                    <div class="form-floating">
                        <select class="form-select" id="id_produsen" name ="id_produsen" aria-label="Produsen">
                        <option selected>Open this select menu</option>
                        <?php foreach ($produsen as $pro) : ?>
                            <option value="<?php echo $pro['id_produsen']; ?>">
                            <?php echo $pro['nama_produsen']; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                        <label for="floatingSelect">Produsen</label>
                    </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- End floating Labels Form -->

                </div>
            </div>

            </div>

            <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Keterangan</h5>

                <!-- Default Accordion -->
                <div class="accordion" id="accordionExample" style="text-align: justify;">
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ID Produk
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>ID Produk merupakan <code>Primary Key</code>.</strong> <b>Bersifat AUTO_INCREMENT</b>. Sehingga anda tidak perku menginputkan.
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Nama Produk
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Pastikan anda menginputkan nama produk dengan benar. Nama produk ini akan digunakan untuk menyimpan nama produk kosmetik.
                        Sebagai contoh: <strong>Wardah Intense Matte Lipstick</strong>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Gender
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Pastikan anda menginputkan gander produk dengan benar. Gander produk ini akan digunakan untuk membedakan jenis gender produk kosmetik.
                        Pilih salah satu antara <strong>Male atau Female atau Unisex</strong>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Gambar
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Pastikan anda menginputkan gambar produk dengan benar. Gambar produk ini akan digunakan untuk mempermudah pengunjung dalam pengecekan produk kosmetik. <b>Mohon untuk menginputkan gambar dengan resolusi yang jelas.</b>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Sertifikasi
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Pastikan anda menginputkan sertifikasi BPOM produk dengan benar. Sertifikasi BPOM produk ini akan digunakan untuk verifikasi produk kosmetik. <b style="color: red;">Mohon untuk centang sertifikasi BPOM dan MUI apabila memang produk kosmetik sudah berBPOM dan disetujui oleh MUI.</b>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Jenis Produk
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Pastikan anda menginputkan jenis produk kosmetik dengan benar. <b>Mohon untuk memilih salah satu dari jenis produk kosmetik yang telah disediakan. <b style="color: red;">Apabila jenis produk belum tersedia, silahkan inputkan terlebih dahulu jenis produk kosmetik yang anda inginkan di form jenis produk.</b></b>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Produsen
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Pastikan anda menginputkan nama produsen kosmetik dengan benar. <b>Mohon untuk memilih salah satu dari nama produsen kosmetik yang telah disediakan. <b style="color: red;">Apabila nama produsen belum tersedia, silahkan inputkan terlebih dahulu data produsen kosmetik yang anda inginkan di form produsen.</b></b>
                        </div>
                    </div>
                    </div>
                </div><!-- End Default Accordion Example -->

                </div>
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
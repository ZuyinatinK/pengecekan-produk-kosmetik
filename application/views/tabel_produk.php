<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tabel Produk - Cosmetics Safety and Halal Check</title>
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

    <!-- Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
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
                <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Dataset</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?php echo base_url('/tabeljenis') ?>">
                            <i class="bi bi-circle"></i><span>Data Jenis Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/tabelprodusen') ?>">
                            <i class="bi bi-circle"></i><span>Data Produsen</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/tabelproduk') ?>" class="active">
                            <i class="bi bi-circle"></i><span>Data Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/tabelkomposisi') ?>">
                            <i class="bi bi-circle"></i><span>Data Komposisi</span>
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
            <h1>Data Produk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('/admin') ?>">Home</a></li>
                    <li class="breadcrumb-item">Dataset</li>
                    <li class="breadcrumb-item active">Data Produk</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
        <div class="row">
            <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel Produk</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
                        <i class="bi bi-plus-circle"></i> Tambah Data
                    </button>
                    <!-- Modal Dialog Scrollable -->
                    <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambahkan Data Produk</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Vertical Form -->
                                        <form class="row g-3" method="post" action="<?php echo base_url('/tabelproduk/tambah')?>" enctype="multipart/form-data">

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
                                                    <input class="form-control" type="file" name="userfile" size="20">
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
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                        </form><!-- Vertical Form -->
                                    </div>
                                    <div class="modal-footer text-center">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Modal Dialog Scrollable-->
                        <br>
                        <br>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Sertifikasi BPOM</th>
                            <th scope="col">Sertifikasi MUI</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $count = 0;
                            foreach ($produk as $row) : 
                                $count = $count + 1;
                            ?>
                            <tr>
                                <td> <?php echo $count ?> </td>
                                <td><?php echo $row['nama_produk']; ?></td>
                                <td><img src="<?= base_url() . '/gambar/' . $row['gambar']; ?>" width="200"></td>
                                <td style="text-align: center;">
                                <?php if ($row['sertifikasi_BPOM'] == NULL) {
                                    echo '<span class="material-icons" style="color: red; font-size: 35px;">report_gmailerrorred</span>';
                                } else {
                                    echo '<img src="' . base_url() . 'assets/assets_dashboard/img/bpom.png" alt="Sertifikasi BPOM" style="width: 50px; height: 50px;">';
                                } ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php if ($row['sertifikasi_MUI'] == NULL) {
                                        echo '<span class="material-icons" style="color: red; font-size: 35px;">report_gmailerrorred</span>';
                                    } else {
                                        echo '<img src="' . base_url() . 'assets/assets_dashboard/img/mui.png" alt="Sertifikasi MUI" style="width: 50px; height: 50px;">';
                                    } ?>
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <a href="<?= base_url();?>tabelproduk/detail/<?= $row['id_produk'];?>"
                                            class="btn btn-warning"><span class="material-icons md-24">chat</span></a>
                                        <a href="<?= base_url();?>tabelproduk/hapus/<?= $row['id_produk'];?>"
                                            class="btn btn-danger"><span class="material-icons md-24">delete_outline</span></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

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
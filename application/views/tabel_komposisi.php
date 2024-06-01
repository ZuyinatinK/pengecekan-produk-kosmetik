<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tabel Komposisi - Cosmetics Safety and Halal Check</title>
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
                        <a href="<?php echo base_url('/tabelproduk') ?>">
                            <i class="bi bi-circle"></i><span>Data Produk</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/tabelkomposisi') ?>" class="active">
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
            <h1>Data Komposisi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('/admin') ?>">Home</a></li>
                    <li class="breadcrumb-item">Dataset</li>
                    <li class="breadcrumb-item active">Data Komposisi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabel Komposisi</h5>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
                                <i class="bi bi-plus-circle"></i> Tambah Data
                            </button>
                            <!-- Modal Dialog Scrollable -->
                            <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambahkan Data Komposisi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Vertical Form -->
                                            <form class="row g-3" method="post" action="<?php echo base_url('/tabelkomposisi/tambah')?>">

                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="nama_komposisi" name="nama_komposisi" placeholder="Nama Komposisi">
                                                        <label for="floatingName">Nama Komposisi</label>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <select class="form-select" id="id_produk" name="id_produk" aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <?php foreach ($produk as $prod) : ?>
                                                                <option value="<?php echo $prod['id_produk']; ?>">
                                                                    <?php echo $prod['nama_produk']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <label for="floatingSelect">Nama Produk</label>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                                                        <label for="floatingName">Deskripsi</label>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="fungsi" name="fungsi" placeholder="Fungsi">
                                                        <label for="floatingName">Fungsi</label>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="efek" name="efek" placeholder="Efek">
                                                        <label for="floatingName">Efek</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                                                        <label for="floatingName">Keterangan</label>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label class="col-12 col-form-label">Status Aman</label>
                                                    <div class="form-check" class="col-6">
                                                        <input class="form-check-input" type="checkbox" id="status_aman" name="status_aman" value = "Aman">
                                                        <label class="form-check-label" for="gridCheck1">
                                                            Aman
                                                        </label>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="status_aman" name="status_aman" value = "Tidak Aman">
                                                            <label class="form-check-label" for="gridCheck1">
                                                                Tidak Aman
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label class="col-12 col-form-label">Status Halal</label>
                                                    <div class="form-check" class="col-6">
                                                        <input class="form-check-input" type="checkbox" id="status_halal" name="status_halal" value = "Halal">
                                                        <label class="form-check-label" for="gridCheck1">
                                                            Halal
                                                        </label>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="status_halal" name="status_halal" value = "Tidak Halal">
                                                            <label class="form-check-label" for="gridCheck1">
                                                                Tidak Halal
                                                            </label>
                                                        </div>
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
                                        <th scope="col">Nama Komposisi</th>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Status Aman</th>
                                        <th scope="col">Status Halal</th>
                                        <th scope="col">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $count = 0;
                                        foreach ($komposisi as $row) : 
                                            $count = $count + 1;
                                        ?>
                                        <tr>
                                            <td> <?php echo $count ?> </td>
                                            <td><?php echo $row['nama_komposisi']; ?></td>
                                            <td><?php echo $row['nama_produk']; ?></td>

                                            <td style="text-align: center;">
                                                <?php if ($row['status_aman'] == 'Aman') {
                                                    echo '<span class="material-icons" style="color: green;">task_alt</span>';
                                                } else {
                                                    echo '<span class="material-icons" style="color: red;">report_gmailerrorred</span>';
                                                }?>
                                            </td>
                                            <td style="text-align: center;"><?php if ($row['status_halal'] == 'Halal') {
                                                    echo '<img src="' . base_url() . 'assets/assets_dashboard/img/halal.png" alt="Status Halal" style="height: 50px;">';
                                                } else {
                                                    echo '<span class="material-icons" style="color: red;">
                                                    highlight_off
                                                    </span>';
                                                } ?></td>

                                            <td>
                                                <div class="d-flex">
                                                    <a href="<?= base_url();?>tabelkomposisi/detail/<?= $row['id_komposisi'];?>"
                                                        class="btn btn-warning"><span class="material-icons md-24">chat</span></a>
                                                    
                                                    <a href="<?= base_url();?>tabelkomposisi/edit/<?= $row['id_komposisi'];?>"
                                                        class="btn btn-primary"><span class="material-icons">create</span></a>
                                                    
                                                    <a href="<?= base_url();?>tabelkomposisi/hapus/<?= $row['id_komposisi'];?>"
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
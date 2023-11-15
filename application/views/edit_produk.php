<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Edit Produk - Cosmetics Safety and Halal Check</title>
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
        <div class="container" style="padding-left: 150px; padding-right: 150px; padding-bottom: 50px;">
            <img src="<?= base_url() ?>assets/assets_dashboard/img/edit.png" class="img-fluid" style="width: 1000px;" alt="">
            <a type="button" class="btn btn-Light" href="<?php echo base_url('tabelproduk') ?>" ><span class="material-icons">arrow_circle_left</span></a>
                <div class="row">
                <form method="post" action="" >
                    <div class="form-group" style="padding-right: 25px; padding-left: 25px;">
                        <label for="id">ID Produk</label>
                        <input type="text" class="form-control" name="id_produk" value="<?= $row['id_produk']; ?>" readonly>
                    </div>
                    <div class="form-group" style="padding-right: 25px; padding-left: 25px; padding-top: 10px;">
                        <label for="nama">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" value = "<?= $row['nama_produk']; ?>" >
                    </div>
                    <div class="form-group" style="padding-right: 25px; padding-left: 25px; padding-top: 10px;">
                        <label for="gander">Gander</label>
                        <input type="text" class="form-control" name="gender" value = "<?= $row['gender']; ?>" >
                    </div>
                    <div class="form-group" style="padding-right: 25px; padding-left: 25px; padding-top: 10px;">
                        <label for="bpom">Sertifikasi BPOM</label>
                        <input type="text" class="form-control" name="sertifikasi_BPOM" value = "<?= $row['sertifikasi_BPOM']; ?>" readonly>
                    </div>
                    <div class="form-group" style="padding-right: 25px; padding-left: 25px; padding-top: 10px;">
                        <label for="mui">Sertifikasi MUI</label>
                        <input type="text" class="form-control" name="sertifikasi_MUI" value = "<?= $row['sertifikasi_MUI']; ?>" readonly>
                    </div>
                    <div class="form-group" style="padding-right: 25px; padding-left: 25px; padding-top: 10px;">
                        <label for="jp">Jenis Produk</label>
                        <input type="text" class="form-control" name="id_jenisproduk" value = "<?= $row['id_jenisproduk']; ?>" readonly>
                    </div>
                    <div class="form-group" style="padding-right: 25px; padding-left: 25px; padding-top: 10px;">
                        <label for="pr">Produsen</label>
                        <input type="text" class="form-control" name="id_produsen" value = "<?= $row['id_produsen']; ?>" readonly>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Edit Data</button>
                    </div>
                    
                </form>
                </div>
        </div>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
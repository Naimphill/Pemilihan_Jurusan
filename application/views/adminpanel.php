<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMK MA'ARIF 2 PIYUNGAN BANTUL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/img/logo.png') ?>" rel="icon">
    <link href="<?php echo base_url('assets/img/logo.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.min.css'); ?>">
    <!-- end seet allert -->
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">


    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

    <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
    <!--==========================
  Header
  ============================-->
    <header id="header">

        <div id="topbar">
            <!-- <div class="container">
                <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div> -->
        </div>

        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1 class="text-light"><a href="<?php echo site_url('Adminpanel') ?>"
                        class="scrollto"><span>Adminpanel</span></a></h1>
                <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#riwayat">Home</a></li>
                    <?php if ($this->session->userdata('id_admin') == null) { ?>
                        <li><a href="<?php echo site_url('Login') ?>">Login</a></li>
                    <?php } else { ?>
                        <li><a class="btn btn-outline-dark" href="<?php echo site_url('Login/logout') ?>">Logout</a></li>
                    <?php } ?>
                    <!-- <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li class="drop-down"><a href="">Drop Down</a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="drop-down"><a href="#">Drop Down 2</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#footer">Contact Us</a></li> -->
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <?php if ($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>

    <main id="main">
        <!-- #riwayat -->
        <br><br><br><br><br><br>
        <section id="riwayat">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Data Perhitungan</h2>
                    </div>
                    <div class="card-body">
                        <table id="datatabel" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Rekomendasi Jurusan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($seleksi as $val) {
                                    $idk = $val->id_seleksi;
                                    if ($val->tot_tb > $val->tot_tkj) {
                                        $rekomendasi = 'TB';
                                    } else {
                                        $rekomendasi = 'TKJ';
                                    } ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $no++; ?>
                                        </th>
                                        <td>
                                            <?php echo $val->nisn; ?>
                                        </td>
                                        <td>
                                            <?php echo $val->nama; ?>
                                        </td>
                                        <td>
                                            <?php echo $rekomendasi; ?>
                                        </td>
                                        <td><a type="button" data-toggle="modal" data-target=".dt_<?php echo $idk; ?>"
                                                href="" class="btn btn-outline-dark">Detail</a>
                                            <!-- <a href="" class="btn btn-outline-dark">Edit</a>
                                            <a href="" class="btn btn-outline-dark">Hapus</a> -->
                                        </td>
                                    </tr>
                                    <!-- Modal Edit-->
                                    <div class="modal fade dt_<?php echo $idk; ?>" id="dt_<?php echo $idk; ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Perhitungan
                                                        <?php echo '"' . $val->nama . '"'; ?>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">NISN</label>
                                                            <input type="text" class="form-control" name="nama_kategori"
                                                                value="<?php echo $val->nisn; ?>"
                                                                id="exampleFormControlInput1" readonly>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Nama</label>
                                                            <input type="text" class="form-control" name="nama_kategori"
                                                                value="<?php echo $val->nama; ?>"
                                                                id="exampleFormControlInput1" readonly>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Bahasa
                                                                        Indonesia (C1)</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nama_kategori" value="<?php echo $val->C1; ?>"
                                                                        id="exampleFormControlInput1" readonly>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">IPA (C4)</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nama_kategori" value="<?php echo $val->C4; ?>"
                                                                        id="exampleFormControlInput1" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Bahasa
                                                                        Inggris (C2)</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nama_kategori" value="<?php echo $val->C2; ?>"
                                                                        id="exampleFormControlInput1" readonly>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">IPS (C5)</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nama_kategori" value="<?php echo $val->C5; ?>"
                                                                        id="exampleFormControlInput1" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Matematika (C3)</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nama_kategori" value="<?php echo $val->C3; ?>"
                                                                        id="exampleFormControlInput1" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Total
                                                                        Alternatif (TKJ)</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nama_kategori"
                                                                        value="<?php echo $val->tot_tkj; ?>"
                                                                        id="exampleFormControlInput1" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Total
                                                                        Alternatif (TB)</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nama_kategori"
                                                                        value="<?php echo $val->tot_tb; ?>"
                                                                        id="exampleFormControlInput1" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Jurusan
                                                                Rekomendasi</label>
                                                            <input type="text" class="form-control" name="nama_kategori"
                                                                value="<?php echo $rekomendasi; ?>"
                                                                id="exampleFormControlInput1" readonly>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Detail -->
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- #riwayat -->
        <!-- #Admin -->
        <section id="about">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h2 class="card-title">Data Admin</h2>
                            </div>
                            <div class="col-md-2">
                                <a href="" type="button" data-toggle="modal" data-target=".add_admin"
                                    class="btn btn-primary">Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatabel2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($admin as $val) {
                                    ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $no++; ?>
                                        </th>
                                        <td>
                                            <?php echo $val->nama_lengkap; ?>
                                        </td>
                                        <td>
                                            <?php echo $val->username; ?>
                                        </td>
                                        <td>
                                            <?php echo $val->level; ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-dark tombolhapus"
                                                href="<?php echo site_url('Adminpanel/hapus_admin/' . $val->id_admin) ?>">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal Tambah Admin-->
        <div class="modal fade add_admin" id="add_admin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo site_url('Adminpanel/add_admin') ?>">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap"
                                    id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password"
                                    id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Level</label>
                                <select class="form-control" name="level">
                                    <option class="form-control" value="user">User</option>
                                    <option class="form-control" value="admin">Admin</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Tambah Admin -->
        <!-- #Admin -->
        <!-- #Jurusan -->
        <section id="about">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Data Jurusan</h2>
                    </div>
                    <div class="card-body">
                        <table id="datatabel3" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">ID Jurusan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($jurusan as $val) {
                                    ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $no++; ?>
                                        </th>
                                        <td>
                                            <?php echo $val->nm_jurusan; ?>
                                        </td>
                                        <td>
                                            <?php echo $val->id_jurusan; ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- #Jurusan -->
        <!--==========================
    Footer
  ============================-->
        <footer id="footer" class="section-bg">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- Uncomment below i you want to use a preloader -->
        <!-- <div id="preloader"></div> -->

        <!-- JavaScript Libraries -->
        <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/lib/jquery/jquery-migrate.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/lib/easing/easing.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/lib/mobile-nav/mobile-nav.js') ?>"></script>
        <script src="<?php echo base_url('assets/lib/wow/wow.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/lib/counterup/counterup.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/lib/isotope/isotope.pkgd.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/lib/lightbox/js/lightbox.min.js') ?>"></script>
        <!-- Contact Form JavaScript File -->
        <script src="<?php echo base_url('assets/contactform/contactform.js') ?>"></script>
        <!-- Template Main Javascript File -->
        <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
        <!-- Sweet Alert Script -->
        <script src="<?php echo base_url('assets/allert/package/dist/sweetalert2.all.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/allert/package/dist/myalert.js'); ?>"></script>
        <script>
            const flashData = $('.flash-data').data('flashdata');
            if (flashData) {
                Swal.fire({
                    title: 'Data',
                    text: 'Berhasil ' + flashData,
                    icon: 'success'
                });
            }
            // Tombol Hapus
            $('.tombolhapus').on('click', function (e) {
                e.preventDefault();
                const href = $(this).attr('href');

                Swal.fire({
                    title: 'Kamu Yakin?',
                    text: "Akan Menghapus Data ini ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hapus !',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location.href = href;
                    }
                })
            });
        </script>
        <!-- End sweet allert -->
        <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#datatabel').DataTable();
            });
            $(document).ready(function () {
                $('#datatabel2').DataTable();
            });
            $(document).ready(function () {
                $('#datatabel3').DataTable();
            });
            $(document).ready(function () {
                $('#datatabel4').DataTable();
            });
        </script>
        <!-- End DataTables -->
</body>

</html>
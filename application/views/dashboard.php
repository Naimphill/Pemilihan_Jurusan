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
                <h1 class="text-light"><a href="<?php echo site_url('Dashboard') ?>" class="scrollto"><span>SMK MA'ARIF
                            2</span></a></h1>
                <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="<?php echo site_url('Dashboard') ?>">Home</a></li>
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

    <!--==========================
    Intro Section
  ============================-->
    <?php if ($this->session->userdata('id_admin') == null) { ?>
        <?php if ($flashData = $this->session->flashdata('flash')): ?>
            <div class="flash-data" data-flashdata="<?= $flashData; ?>"></div>
            <?php unset($_SESSION['flash']); ?>
        <?php endif;
    } ?>
    <?php if ($flashSave = $this->session->flashdata('flash')): ?>
        <div class="flash-save" data-flashdata="<?= $flashSave; ?>"></div>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    <section id="intro" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-md-6 intro-info order-md-first order-last">
                    <h2>SMK 2 Ma Arif<br><span>Pemilihan Jurusan!</span></h2>
                    <div>
                        <?php if ($this->session->userdata('id_admin') == null) { ?>
                            <a href="<?php echo site_url('Dashboard/seleksi') ?>" class="btn-get-started scrollto">Mulai
                                Perhitungan</a>
                        <?php } else { ?>
                            <a href="#about" class="btn-get-started scrollto">Mulai Perhitungan</a>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-md-6 intro-img order-md-last order-first">
                    <img src="<?php echo base_url('assets/img/intro-img.svg') ?>" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section><!-- #intro -->

    <main id="main">

        <!--==========================
      About Us Section
    ============================-->
        <?php if ($this->session->userdata('id_admin') == null) { ?>

        <?php } else { ?>
            <section id="about">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Form Perhitungan</h2>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo site_url('Dashboard/aksi_perhitungan') ?>" method="POST">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">NISN<span>*</span></label>
                                    <div class="col-sm-8">
                                        <input type="number" maxlength="10" class="form-control" name="nisn" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama Lengkap<span>*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama" required="">
                                    </div>
                                </div>
                                <hr>
                                <?php foreach ($kriteria as $key) { ?>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">
                                            <?php echo $key->nm_kriteria; ?><span>*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" name="<?php echo $key->id_kriteria; ?>"
                                                required="">
                                        </div>
                                    </div>
                                <?php } ?>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- #riwayat -->
            <section id="about">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Riwayat Perhitungan
                                <?php echo '"' . $this->session->userdata('nama_lengkap') . '"'; ?>
                            </h2>
                        </div>
                        <div class="card-body">
                            <table id="datatabel" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NISN</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Rekomendasi Jurusan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    $id_admin = $this->session->userdata('id_admin');
                                    foreach ($seleksi as $val) {
                                        if ($val->id_admin == $id_admin) {
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
                                            </tr>
                                        <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- #riwayat -->
        <?php } ?>

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
                    title: 'Maaf',
                    text: flashData,
                    icon: 'warning'
                });
            }
            const flashSave = $('.flash-save').data('flashdata');
            if (flashSave) {
                Swal.fire({
                    title: 'Data',
                    text: flashSave + ' Di Simpan',
                    icon: 'success'
                });
            }
        </script>
        <!-- End sweet allert -->
        <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#datatabel').DataTable();
            });
        </script>
        <!-- End DataTables -->
</body>

</html>
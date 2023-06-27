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

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.min.css'); ?>">
    <!-- end seet allert -->
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
            <div class="container">
                <!-- <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                </div> -->
            </div>
        </div>

        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1 class="text-light"><a href="<?php echo site_url('Dashboard') ?>"
                        class="scrollto tombolkembali"><span>SMK MA'ARIF
                            2</span></a></h1>
                <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active tombolkembali"><a href="<?php echo site_url('Dashboard') ?>">Home</a></li>
                    <!-- 
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
    <br> <br>
    <?php if ($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    <!--==========================
      About Us Section
    ============================-->
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
                                <input type="number" maxlength="10" class="form-control" name="nisn" readonly=""
                                    value="<?php echo $nisn; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama Lengkap<span>*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" readonly=""
                                    value="<?php echo $nama; ?>">
                            </div>
                        </div>
                        <hr>
                        <?php $no = 1;
                        foreach ($kriteria as $key) { ?>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">
                                    <?php echo $key->nm_kriteria; ?><span>*</span>
                                </label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="<?php echo $key->id_kriteria; ?>"
                                        readonly="" value="<?php echo $value_c1 = $skor['C' . $no++]; ?>">
                                </div>
                            </div>

                        <?php } ?>
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    </form>
                </div>
            </div><br><br>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Hasil Perhitungan</h2>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">NISN<span>*</span></label>
                            <div class="col-sm-8">
                                <input type="number" maxlength="10" class="form-control" name="nisn" readonly=""
                                    value="<?php echo $nisn; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama Lengkap<span>*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" readonly=""
                                    value="<?php echo $nama; ?>">
                            </div>
                        </div>
                        <hr>
                        <?php
                        $C1 = $skor['C1'];
                        $C2 = $skor['C2'];
                        $C3 = $skor['C3'];
                        $C4 = $skor['C4'];
                        $C5 = $skor['C5'];
                        if ($C4 > $C5) {
                            $rec = 'TKJ'; ?>
                        <?php } elseif ($C5 > $C4) {
                            $rec = 'TB'; ?>
                        <?php }
                        ?>

                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    </form>

                    <?php
                    // Simpan Nilai Kriteria Diunggulkan
                    for ($i = 3; $i <= 5; $i++) {
                        $nilaiC = 'C' . $i;
                        $nilaiDC = 'DC' . $i;

                        if ($$nilaiC > 90) {
                            $$nilaiDC = '5';
                        } elseif ($$nilaiC > 80 && $$nilaiC < 91) {
                            $$nilaiDC = '4';
                        } elseif ($$nilaiC > 70 && $$nilaiC < 81) {
                            $$nilaiDC = '3';
                        } elseif ($$nilaiC > 50 && $$nilaiC < 71) {
                            $$nilaiDC = '2';
                        } elseif ($$nilaiC < 51) {
                            $$nilaiDC = '1';
                        }

                    }
                    // Simpan Nilai Kriteria Biasa
                    for ($i = 1; $i <= 5; $i++) {
                        $nilaiC = 'C' . $i;
                        $nilaiBC = 'BC' . $i;

                        if ($$nilaiC > 80) {
                            $$nilaiBC = '5';
                        } elseif ($$nilaiC > 60 && $$nilaiC < 81) {
                            $$nilaiBC = '4';
                        } elseif ($$nilaiC > 40 && $$nilaiC < 61) {
                            $$nilaiBC = '3';
                        } elseif ($$nilaiC > 20 && $$nilaiC < 41) {
                            $$nilaiBC = '2';
                        } elseif ($$nilaiC < 21) {
                            $$nilaiBC = '1';
                        }

                    }
                    // echo 'Diunggulkan : ' . $DC1 . '/';
                    // echo $DC2 . '/';
                    // echo $DC3 . '/';
                    // echo $DC4 . '/';
                    // echo $DC5;
                    // echo '<br>biasa : ' . $BC1 . '/';
                    // echo $BC2 . '/';
                    // echo $BC3 . '/';
                    // echo $BC4 . '/';
                    // echo $BC5;
                    ?>

                    <h3>Detail Perhitungan</h3>
                    <!-- Detail Bobot -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Kriteria</th>
                                <th scope="col">Bobot Kriteria</th>
                                <th scope="col">Kode Kriteria</th>
                                <th scope="col">Bobot Referensi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kriteria as $val) { ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $val->nm_kriteria; ?>
                                    </th>
                                    <td>20%</td>
                                    <td>
                                        <?php echo $val->id_kriteria; ?>
                                    </td>
                                    <td>0.2</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <br>
                    <!-- Konversi Nilai ke Angka Kriteria -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Alternatif</th>
                                <th scope="col">C1</th>
                                <th scope="col">C2</th>
                                <th scope="col">C3</th>
                                <th scope="col">C4</th>
                                <th scope="col">C5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jurusan as $val) {
                                if ($val->id_jurusan == 'TKJ') { ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $val->id_jurusan; ?>
                                        </th>
                                        <td>
                                            <?php echo $BC1 ?>
                                        </td>
                                        <td>
                                            <?php echo $BC2 ?>
                                        </td>
                                        <td>
                                            <?php echo $DC3 ?>
                                        </td>
                                        <td>
                                            <?php echo $DC4 ?>
                                        </td>
                                        <td>
                                            <?php echo $BC5 ?>
                                        </td>
                                    </tr>
                                <?php }
                            }
                            foreach ($jurusan as $val) {
                                if ($val->id_jurusan == 'TKJ') { ?>

                                <?php } else { ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $val->id_jurusan; ?>
                                        </th>
                                        <td>
                                            <?php echo $BC1 ?>
                                        </td>
                                        <td>
                                            <?php echo $BC2 ?>
                                        </td>
                                        <td>
                                            <?php echo $DC3 ?>
                                        </td>
                                        <td>
                                            <?php echo $BC4 ?>
                                        </td>
                                        <td>
                                            <?php echo $DC5 ?>
                                        </td>
                                    </tr>
                                <?php }
                            } ?>
                        </tbody>
                    </table>
                    <br>
                    <!-- Detail Perhitungan Alternatif -->
                    <div class="row">

                        <div class="col-md-6">
                            <p><b>Alternatif 1 (TKJ)</b></p>
                            <table class="table">
                                <tr>
                                    <td>R11</td>
                                    <td>=</td>
                                    <td>
                                        <?php echo $BC1 . '/' . $BC1 . ' *0.2'; ?>
                                    </td>
                                    <td>=</td>
                                    <td>
                                        <?php $TC1 = $BC1 / $BC1;
                                        $TC1 = $TC1 * 0.2;
                                        echo $TC1;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>R12</td>
                                    <td>=</td>
                                    <td>
                                        <?php echo $BC2 . '/' . $BC2 . ' *0.2'; ?>
                                    </td>
                                    <td>=</td>
                                    <td>
                                        <?php $TC2 = $BC2 / $BC2;
                                        $TC2 = $TC2 * 0.2;
                                        echo $TC2;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>R13</td>
                                    <td>=</td>
                                    <td>
                                        <?php echo $DC3 . '/' . $DC3 . ' *0.2'; ?>
                                    </td>
                                    <td>=</td>
                                    <td>
                                        <?php $TC3 = $DC3 / $DC3;
                                        $TC3 = $TC3 * 0.2;
                                        echo $TC3;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>R14</td>
                                    <td>=</td>
                                    <td>
                                        <?php echo $DC4 . '/' . $BC4 . ' *0.2'; ?>
                                    </td>
                                    <td>=</td>
                                    <td>
                                        <?php $TC4 = $DC4 / $BC4;
                                        $TC4 = $TC4 * 0.2;
                                        echo $TC4;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>R15</td>
                                    <td>=</td>
                                    <td>
                                        <?php echo $BC5 . '/' . $BC5 . ' *0.2'; ?>
                                    </td>
                                    <td>=</td>
                                    <td>
                                        <?php $TC5 = $BC5 / $BC5;
                                        $TC5 = $TC5 * 0.2;
                                        echo $TC5;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">Total
                                        <?php //echo $TC1 . '/' . $TC2 . '/' . $TC3 . '/' . $TC4 . '/' . $TC5; ?>
                                    </td>
                                    <td>=</td>
                                    <td class="bg-warning">
                                        <?php $tot_tkj = $TC1 + $TC2 + $TC3 + $TC4 + $TC5;
                                        echo $tot_tkj; ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <p><b>Alternatif 2 (TB)</b></p>
                            <table class="table">
                                <tr>
                                    <td>R11</td>
                                    <td>=</td>
                                    <td>
                                        <?php echo $BC1 . '/' . $BC1 . ' *0.2'; ?>
                                    </td>
                                    <td>=</td>
                                    <td>
                                        <?php $TC1 = $BC1 / $BC1;
                                        $TC1 = $TC1 * 0.2;
                                        echo $TC1;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>R12</td>
                                    <td>=</td>
                                    <td>
                                        <?php echo $BC2 . '/' . $BC2 . ' *0.2'; ?>
                                    </td>
                                    <td>=</td>
                                    <td>
                                        <?php $TC2 = $BC2 / $BC2;
                                        $TC2 = $TC2 * 0.2;
                                        echo $TC2;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>R13</td>
                                    <td>=</td>
                                    <td>
                                        <?php echo $DC3 . '/' . $DC3 . ' *0.2'; ?>
                                    </td>
                                    <td>=</td>
                                    <td>
                                        <?php $TC3 = $DC3 / $DC3;
                                        $TC3 = $TC3 * 0.2;
                                        echo $TC3;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>R14</td>
                                    <td>=</td>
                                    <td>
                                        <?php echo $BC4 . '/' . $BC4 . ' *0.2'; ?>
                                    </td>
                                    <td>=</td>
                                    <td>
                                        <?php $TC4 = $BC4 / $BC4;
                                        $TC4 = $TC4 * 0.2;
                                        echo $TC4;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>R15</td>
                                    <td>=</td>
                                    <td>
                                        <?php echo $DC5 . '/' . $BC5 . ' *0.2'; ?>
                                    </td>
                                    <td>=</td>
                                    <td>
                                        <?php $TC5 = $DC5 / $BC5;
                                        $TC5 = $TC5 * 0.2;
                                        echo $TC5;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">Total
                                        <?php //echo $TC1 . '/' . $TC2 . '/' . $TC3 . '/' . $TC4 . '/' . $TC5; ?>
                                    </td>
                                    <td>=</td>
                                    <td class="bg-warning">
                                        <?php $tot_tb = $TC1 + $TC2 + $TC3 + $TC4 + $TC5;
                                        echo $tot_tb; ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div><br>
            <?php if ($tot_tkj > $tot_tb) {
                $rekomendasi = 'TKJ';
            } else {
                $rekomendasi = 'TB';
            } ?>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Kesimpulan</h2>
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('Dashboard/save_seleksi') ?>" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">NISN<span>*</span></label>
                            <div class="col-sm-8">
                                <input type="number" maxlength="10" class="form-control" name="nisn" readonly=""
                                    value="<?php echo $nisn; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama Lengkap<span>*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" readonly=""
                                    value="<?php echo $nama; ?>">
                            </div>
                        </div>
                        <hr>
                        <?php $no = 1;
                        foreach ($kriteria as $key) { ?>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">
                                    <?php echo $key->nm_kriteria; ?><span>*</span>
                                </label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="<?php echo $key->id_kriteria; ?>"
                                        readonly="" value="<?php echo $value_c1 = $skor['C' . $no++]; ?>">
                                </div>
                            </div>

                        <?php } ?>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Rekomendasi Jurusan<span>*</span></label>
                            <div class="col-sm-8">
                                <a class="btn btn-block btn-success">
                                    <span style="color: #fff;">
                                        <?php echo $rekomendasi; ?>
                                    </span>
                                </a>
                            </div>
                        </div><br>
                        <input type="hidden" class="form-control" name="tot_tb" value="<?php echo $tot_tb; ?>">
                        <input type="hidden" class="form-control" name="tot_tkj" value="<?php echo $tot_tkj; ?>">
                        <input type="hidden" class="form-control" name="id_admin"
                            value="<?php echo $this->session->userdata('id_admin'); ?>">
                        <span><b>*Data Belum Disimpan, <br>Klik Simpan Untuk Menyimpan.</b></span>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col">
                                <a href="<?php echo site_url('Dashboard') ?>"
                                    class="btn btn-lg btn-warning tombolkembali">Kembali</a>
                                <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section><!-- #about -->


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
    <!-- End sweet allert -->
    <script>
        const flashData = $('.flash-data').data('flashdata');
        if (flashData) {
            Swal.fire({
                title: 'Data',
                text: flashData + 'Diolah',
                icon: 'success'
            });
        }
        // Tombol Kembali
        $('.tombolkembali').on('click', function (e) {
            e.preventDefault();
            const href = $(this).attr('href');

            Swal.fire({
                title: 'Kamu Yakin Akan Keluar ?',
                text: "Data Belum Disimpan !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Keluar !',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = href;
                }
            })
        });
    </script>
</body>

</html>
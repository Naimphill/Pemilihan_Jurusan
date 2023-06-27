<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!-- Favicons -->
    <link href="<?php echo base_url('assets/img/logo.png') ?>" rel="icon">
    <link href="<?php echo base_url('assets/img/logo.png') ?>" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.min.css'); ?>">
    <!-- end seet allert -->
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php if ($this->session->flashdata('flash')): ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php unset($_SESSION['flash']); ?>
        <?php endif; ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="logo">
                            <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="Logo" width="150">
                        </div>
                        <h4 class="text-center">Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url('Login/aksi_login') ?>" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control"
                                    placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Enter your password">
                            </div>
                            <span>Belum Punya Akun ?</span><a href="<?php echo site_url('Login/register') ?>">Daftar</a>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    </script>
    <!-- End sweet allert -->
</body>

</html>
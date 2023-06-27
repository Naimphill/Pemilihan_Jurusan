<!DOCTYPE html>
<html>

<head>
    <title>Register Page</title>
    <!-- Favicons -->
    <link href="<?php echo base_url('assets/img/logo.png') ?>" rel="icon">
    <link href="<?php echo base_url('assets/img/logo.png') ?>" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="logo">
                            <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="Logo" width="150">
                        </div>
                        <h4 class="text-center">Daftar</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url('Login/save_register') ?>" method="POST">
                            <div class="form-group">
                                <label for="username">Nama Lengkap</label>
                                <input type="text" id="username" name="nama_lengkap" class="form-control"
                                    placeholder="Enter your Name">
                            </div>
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
                            <span>Sudah Punya Akun ?</span><a href="<?php echo site_url('Login') ?>">Login</a>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
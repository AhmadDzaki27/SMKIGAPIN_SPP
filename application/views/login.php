<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= base_url('assets/dist/img/Logo_SMKIP.png') ?>">
    <title>SI PEMBAYARAN SPP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <img src="<?= base_url() ?>assets/dist/img/Logo_SPP.png" alt="AdminLTE Logo" class="brand-image" style="opacity: 1" width="15%">
    <div class="login-box">
        <div class="login-logo">



            <a href="<?= base_url('assets/') ?>index2.html"><b>SMKS IGASAR PINDAD</b></a>
            <p style="font-size: smaller;"><b>SI Pembayaran SPP</b></p>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Login terlebih dahulu</p>

                <form action="<?= base_url('Login/validation') ?>" method="post">
                    <div class="input-group mb-3">
                        <input name="username" type="text" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <br>
                    <div class="col-12 float-right">
                            <a href="<?= site_url('landing') ?>" class="btn btn-primary btn-block mb-3">Kembali </a>
                        </div>
                </form>
            </div>
            <br><center><p>By <a href='https://www.linkedin.com/in/ahmad-dzaki-9394bb261' title='Ahmad Dzaki' target='_blank'>Ahmad Dzaki</a></p></center>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>

</body>

</html>

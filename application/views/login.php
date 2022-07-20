<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <style>
        .login-page {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>

<body class="login-page">
    <div class="card" style="width:300px">
        <div class="card-header text-center">Login</div>
        <div class="card-body">
            <form action="<?php echo site_url('home/login'); ?>" method="post">
                <label class="label">Username</label>
                <input type="text" class="form-control" name="username" required>
                <label class="label">Password</label>
                <input type="password" class="form-control" name="password" required>
                <br>
                <?php echo $this->session->userdata("error"); ?>
                <br>
                <input type="submit" class="btn btn-primary float-right" value="Login">
        </div>
        <div class="card-footer text-center">
            Tidak Punya Akun?
            <br><a href="<?php echo site_url('home/register') ?>">Register</a>
        </div>
    </div>
</body>

</html>
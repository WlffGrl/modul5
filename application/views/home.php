<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
</head>

<body>
    <div class="navbar navbar-expand bg-dark navbar-dark">
        <a class="navbar-brand" href="<?php echo site_url('home'); ?>">UNJANI</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('home'); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('city'); ?>">City</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('country'); ?>">Country</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('calc'); ?>">Kalkulator</a>
            </li>
            <li>
                <a class="nav-link" href="<?php echo site_url('Home/logout'); ?>">Log Out</a>
            </li>
        </ul>
    </div>
    <br>
    <div class="container-fluid">
        <div class="jumbotron text-center">
            Welcome <?php echo $this->session->userdata('username'); ?>!
            <br>
            <img src="<?php echo $this->session->userdata('url'); ?>" class="rounded-circle w-25">
        </div>
    </div>
</body>

</html>
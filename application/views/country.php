<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Negara</title>

    <!-- CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
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
    <h1>Daftar Negara</h1>
    <?php
    $template = array(
        'table_open' => '<table id="myTable" class="table table-striped table-bordered" style="width:100%" border="1" align="center">'
    );
    $this->table->set_template($template);
    $this->table->set_heading("Code", "Name", "Aksi");
    foreach ($country->result() as $r) {
        $edit = '<a href="' . site_url("country/update/" . $r->Code) . '">edit</a>';
        $hapus = '<a href="' . site_url("country/hapus/" . $r->Code) . '">hapus</a>';
        $this->table->add_row($r->Code, $r->Name, $edit . " " . $hapus);
    }
    echo $this->table->generate();
    ?>
    <footer>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Kota</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>Tambah Kota</h1>
    <form action="<?php echo site_url('City/prosesTambah'); ?>" method="post">
        <label>Nama</label><input type="text" name="name"><br>
        <label>Code Negara</label><Select name="code">
            <?php
            foreach ($country->result() as $ctr) {
                echo '<option value="' . $ctr->Code . '">' . $ctr->Code . '</option>';
            }
            ?></Select><br>
        <label>District</label><input type="text" name="area"><br>
        <label>Populasi</label><input type="text" name="populasi"><br>
        <input type="submit" value="Tambah">
    </form>
</body>

</html>
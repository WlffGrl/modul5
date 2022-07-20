<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Negara</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>Tambah Negara</h1>
    <form action="<?php echo site_url('country/prosestambah'); ?>" method="post">
        <label>Code</label><input type="text" name="code"><br>
        <label>Name</label><input type="text" name="name"><br>
        <input type="submit" value="Tambah">
    </form>
</body>

</html>
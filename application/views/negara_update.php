<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Negara</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>Update Negara</h1>
    <form action="<?php echo site_url('Country/prosesupdate/' . $country->Code); ?>" method="post">
        <label>Nama</label><input type="text" name="name" value="<?php echo $country->Name; ?>"><br>
        <label>Code Negara</label><input type="text" name="code" value="<?php echo $country->Code; ?>"><br>

        <input type="submit" value="Update">
    </form>
</body>
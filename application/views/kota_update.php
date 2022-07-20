<!DOCTYPE html>
<html lang="en">

<head>
	<title>Update Kota</title>
	<style>
		label {
			display: inline-block;
			width: 100px;
		}
	</style>
</head>

<body>
	<h1>Update Kota</h1>
	<form action="<?php echo site_url('City/prosesupdate/'.$city->ID);?>" method="post">
		<label>Nama</label><input type="text" name="name" value="<?php echo $city->Name; ?>"><br>
		<label>Code Negara</label><Select name="code" value="<?php echo $city->CountryCode; ?>">
			<?php 
            foreach ($country->result() as $ctr){ 
                $selected = "";
                if($city->CountryCode == $ctr->Code){ 
                    $selected = "selected"; 
                } 
                echo '<option value="'.$ctr->Code.'" '.$selected.'>'.$ctr->Code.'
                </option>';
            } 
            ?>
            
        </Select>
        <br>
		<label>District</label><input type="text" name="area" value=" <?php echo $city->District; ?>"><br>
		<label>Populasi</label><input type="text" name="populasi" value=" <?php echo $city->Population; ?>"><br>
		<input type="submit" value="Update">
	</form>
</body>
<html>

<head>
	<title>Daftar Kota</title>
	<link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css ">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
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
	<h1>Daftar Kota</h1>


	<?php 
	$template = array('table_open' => '<table border="1" align="center" id="myTable">'); 
	$this->table->set_template($template); 
	$this->table->set_heading("Nama","Negara","Populasi","Aksi"); 
	
	foreach($city->result() as $r){ 
		$edit = '<a href="'.site_url("City/update/".$r->ID).'">edit</a>'; 
		$hapus = '<a href="'.site_url("City/hapus/".$r->ID).'">hapus</a>';
		$this->table->add_row($r->Name,$r->CountryCode,$r->Population, $edit." ".$hapus); 
 } 
 echo $this->table->generate(); 
 ?>
	<script>
		$(document).ready(function () {
			$('#myTable').DataTable();
		});
	</script>
</body>

</html>
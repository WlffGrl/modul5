<html>

<head>
	<title>Daftar Bahasa</title>
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css ">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>

<body>
	<h1>Daftar Bahasa</h1>
	<?php 
	$template = array('table_open' => '<table border="1" align="center" id="myTable">'); 
	$this->table->set_template($template); 
	$this->table->set_heading("Bahasa","Negara","persentase"); 
	foreach($countrylanguage->result() as $r){ 
		$this->table->add_row($r->Language,$r->CountryCode,$r->Percentage);} 
		echo $this->table->generate(); 
 ?>
 <script>
		$(document).ready(function () {
			$('#myTable').DataTable();
		});
	</script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">UNJANI</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
				aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="<?php echo site_url('test/dashboard'); ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('test/profil'); ?>">Profil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="#">Kalkulator</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<form action="<?php echo site_url('calc/hitung'); ?>" method="POST">
		<div class="form-floating mb-3">
			<input type="text" name="bil1" class="form-control" id="floatingInput" placeholder="Bil1">
			<label for="floatingInput">Bil1</label>
		</div>
		<div class="form-floating">
			<input type="text" name="bil2" class="form-control" id="floatingPassword" placeholder="Bil2">
			<label for="floatingPassword">bil2</label>
		</div>
		<button type="submit" class="btn btn-primary">Tambah</button>
		<h2>Hasil Tambah</h2>
		<?php 
        if(isset($hasil)){ 
            echo $hasil; 
        } 
        ?>
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
</body>

</html>

<!DOCTYPE html>
<html>
	<head>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
		<!-- JQuery and Popper.js -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<!-- Bootstrap JavaScript -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">

		<title><?php echo $titulo; ?></title>
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3 px-5">
			<a class="navbar-brand" href="#">
				<img src="<?php echo base_url(); ?>assets/img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
				My Blog
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Posts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Categorias</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="<?php echo base_url(); ?>assets/img/user.png" width="30" height="30" class="d-inline-block align-top" alt="">
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Meu perfil</a>
							<a class="dropdown-item" href="#">Sair</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>Vinateria</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="col-sm-4">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo $this->pagina.'home' ?>">Vinatería</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<form>
						<input style="width: 100%;" class="form-control" id="ex1" type="text" placeholder="Buscar">
					</form>
				</div>
			</div>
			<div class="col-sm-4">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Cuenta</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
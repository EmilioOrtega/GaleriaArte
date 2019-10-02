<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vinatería Cocos en la Playa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
		<a class="navbar-brand" href="<?php echo $this->pagina ?>home">
			<img src="vista/logo.png" alt="Logo" style="width:20px;">
		</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link disabled" href="">Vinatería Cocos en la Playa</a>
			</li>
		</ul>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navb">
			<ul class="navbar-nav mr-auto">
			</ul>
			<a class="navbar-brand" href="">
				<img src="vista/carshop.png" alt="Logo" style="width:30px;">
			</a>
			<form class="form-inline my-2 my-lg-0" action="<?php echo $this->pagina ?>producto">
				<input class="form-control mr-sm-2" type="text" placeholder="Buscar">
				<button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
			</form>
			<ul class="navbar-nav mr-sm-3">
			</ul>
			<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Modal_login">
				Iniciar sesión
			</button>
		</div>
	</nav>

	<div class="modal fade" id="Modal_login">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Inicio de sesión</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="container">
						<h2>Vinatería Cocos en la Playa</h2>
						<p>Favor de rellenar los siguientes campos con la información requerida para iniciar sesión</p>
						<form action="" class="was-validated">
							<div class="form-group">
								<label for="uname">Usuario:</label>
								<input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<div class="form-group">
								<label for="pwd">Contraseña:</label>
								<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<div class="form-group form-check">

							</div>
							<button type="submit" class="btn btn-secondary btn-block">Continuar</button>

							<button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#Modal_Signup">
								Registrarse
							</button>
						</form>
					</div>
				</div>        
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>

			</div>
		</div>
	</div>  

	<div class="modal fade" id="Modal_Signup">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Registro</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="container">
						<h2>Vinatería Cocos en la Playa</h2>
						<p>Favor de rellenar los siguientes campos con la información requerida para realizar el registro de usuario</p>
						<form action="" class="was-validated">
							<div class="form-group">
								<label for="name">Nombre:</label>
								<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<div class="form-group">
								<label for="last_name">Apellidos:</label>
								<input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<label for="femenino">Sexo:</label>
							<div class="form-group">
								<div class="form-check-inline">
									<label class="form-check-label" for="femenino">
										<input type="radio" class="form-check-input" id="femenino" name="optradio" value="Femenino" checked>Femenino
									</label>
								</div>
								<div class="form-check-inline">
									<label class="form-check-label" for="masculino">
										<input type="radio" class="form-check-input" id="masculino" name="optradio" value="Masculino">Masculino
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">Fecha de nacimiento</span>
									</div>
									<input type="number" class="form-control" id="month" placeholder="mm" name="month" required>
									<input type="number" class="form-control" id="day" placeholder="dd" name="day" required>
									<input type="number" class="form-control" id="year" placeholder="aaaa" name="year" required>
								</div>
							</div>
							<div class="form-group">
								<label for="number">Número telefónico:</label>
								<input type="number" class="form-control" id="number" placeholder="Enter number" name="number" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<div class="form-group">
								<label for="pwd">Contraseña:</label>
								<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<div class="form-group form-check">    	
							</div>
							<button type="submit" class="btn btn-secondary btn-block">Registrarse</button>

						</form>
					</div>
				</div>        
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Regresar</button>
				</div>

			</div>
		</div>
	</div>
	
	<div class="container">

<!-- 
Falta cerrar esto!
Para continuar
</body>
</html>
 -->

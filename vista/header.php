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
	<script src="https://kit.fontawesome.com/180eab578a.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
		<a class="navbar-brand" href="<?php echo $this->pagina ?>home">
			<img src="<?php echo $this->pagina ?>vista/logo.png" alt="Logo" style="width:20px;">
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
			<form method="post" class="form-inline my-2 my-lg-0" action="<?php echo $this->pagina ?>home/buscar">
				<div class="input-group">
					<div class="input-group-prepend">
						<button type="submit" class="btn btn-secondary input-group-text"><i class="fas fa-search"></i></button>
					</div>
						<input type="text" class="form-control" placeholder="Buscar Producto" name="buscar">
				</div>
			</form>
			<ul class="navbar-nav mr-sm-3">
			</ul>
			<?php if (!isset($_SESSION['user'])) { ?>
				<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Modal_login">
					Iniciar sesión
				</button>
			<?php }else { ?>
				<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="btn btn-secondary" id="navbardrop" data-toggle="dropdown">
						<?php echo $_SESSION['user'] ?>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" data-toggle="modal" data-target="#Modal_user">Mis Datos</a>
						<?php if ($_SESSION['tipo_usuario'] == 'a') { ?>
							<a class="dropdown-item" href="<?php echo $this->pagina ?>users/index ?>">Usuarios</a>
							<a class="dropdown-item" href="<?php echo $this->pagina ?>productos/index ?>">Productos</a>
						<?php }else if ($_SESSION['tipo_usuario'] == 'i') { ?>
							<a class="dropdown-item" href="<?php echo $this->pagina ?>productos/index ?>">Productos</a>
						<?php } ?>
						<a class="dropdown-item" href="<?php echo $this->pagina ?>user/logout ?>">Cerrar Sesion</a>
					</div>
				</li>
			</ul>
			<?php } ?>

			<ul class="navbar-nav mr-sm-3">
			</ul>
			<ul class="navbar-nav mr-sm-3">
			</ul>
			<a class="navbar-brand" href="">
				<img src="<?php echo $this->pagina ?>vista/carshop.png" alt="Logo" style="width:30px;">
			</a>
		</div>
	</nav>

	<div class="modal fade" id="Modal_user">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Bienvenido <?php echo $_SESSION['user']; ?></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="container">
						<form method="post" action="<?php echo $this->pagina ?>user/update" class="was-validated">
							<div class="form-group">
								<label for="name">Nombre:</label>
								<input type="text" class="form-control" id="name" placeholder="Enter name" name="nombre" value="<?php echo $_SESSION['nombre'] ?>" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<div class="form-group">
								<label for="apellidos">Apellidos:</label>
								<input type="text" class="form-control" id="apellidos" placeholder="Enter last names" name="apellidos" value="<?php echo $_SESSION['apellidos'] ?>" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<div class="form-group">
								<label for="telefono">Telefono:</label>
								<input type="text" class="form-control" id="telefono" placeholder="Enter phone number" name="telefono" value="<?php echo $_SESSION['telefono'] ?>" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<?php if (isset($_SESSION['tarjeta'])) { ?>
								<div class="form-group">
									<label for="tarjeta">Tarjeta:</label>
									<input type="text" class="form-control" id="tarjeta" placeholder="Enter card number" name="tarjeta" value="<?php echo $_SESSION['tarjeta'] ?>" required>
									<div class="valid-feedback">Ingresado</div>
									<div class="invalid-feedback">Favor de llenar este campo</div>
								</div>
							<?php } ?>
							<button type="submit" class="btn btn-secondary btn-block">Actualizar datos</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

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
						<form method="post" action="<?php echo $this->pagina ?>user/login" class="was-validated">
							<div class="form-group">
								<label for="uname">Usuario:</label>
								<input type="text" class="form-control" id="uname" placeholder="Enter username" name="user" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<div class="form-group">
								<label for="pwd">Contraseña:</label>
								<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
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
								<label for="name">Usuario:</label>
								<input type="text" class="form-control" id="user" placeholder="Enter user" name="user" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
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

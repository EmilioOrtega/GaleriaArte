<!DOCTYPE html>


<html lang="en">
<head>
  <title>Galería Brothers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
  <!-- Icons -->
  <script src="https://kit.fontawesome.com/180eab578a.js"></script>
  <!-- Alertify -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.min.css"/>
  <!-- Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.min.css"/>
  <!-- JS general -->
  <script src='public/JS/general.js'></script>
  <!-- icono -->
  <link rel="icon" type="image/png" href="<?php echo URL ?>vista/logo_sm.png" sizes="32x32">
  <script src="http://localhost/galeriaArte/La chida/general.js"></script>

  <style>
  
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }

  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }

 
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }

  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>



</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="height:1500px">

	<div id = "container">
		<img src="\GaleriaArte\La chida\Banner.png" class="img-fluid" alt="Responsive image">
	
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="\GaleriaArte\La%20chida\#">Inicio</a>

  <!-- Links -->
  <ul class="navbar-nav">

    <!-- Dropdown -->
    <li>
      <a class="nav-link" href="\GaleriaArte\La%20chida\#Cont">
        Datos de la Galeria
      </a>
    </li>
      <a class="nav-link" href="/GaleriaArte/La%20chida/Vista/Artistas.php">
        Artistas y sus obras
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Visitas
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="\GaleriaArte\La%20chida\#Vng">Nuestras Galerías</a>
        <a class="dropdown-item" href="\GaleriaArte\La%20chida\#Vve">Visitas de escuelas</a>
        <a class="dropdown-item" href="\GaleriaArte\La%20chida\#VGv">Grupo de visitas</a>
        <a class="dropdown-item" href="\GaleriaArte\La%20chida\#Vf">Familias</a>
        <a class="dropdown-item" href="\GaleriaArte\La%20chida\#Vfi">Facilidades de investigación</a>
      </div>
    </li>
   <li class="nav-item">
      <a class="nav-link" href="\GaleriaArte\La%20chida\#QhdN">
        Que hay de nuevo?
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="\GaleriaArte\La%20chida\#UyS">
        Unete y Soporte
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/GaleriaArte/La%20chida/Vista/Tienda.php">
        Tienda
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="\GaleriaArte\La%20chida\#AP">
        Politicas de Privacidad
      </a>
    </li>

    </li>
    <div class="justify-content-end" style="justify-content: flex-end;">    
      <button type="button" class="btn btn-outline-primary justify-content-end" data-toggle="modal" data-target="#Modal_Signup">Registrarse</button>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal_login">Iniciar Sesión</button>
</div>

  </ul>

</nav>
</div>

<div id="QhdN" class="container-fluid" style="margin-top:10px">
<h1> Tienda</h1>

<!-- FOOTER -->
<style>
/* Add a dark background color to the footer */
footer {
  background-color: #2d2d30;
  color: #f5f5f5;
  padding: 32px;
}

footer a {
  color: #f5f5f5;
}

footer a:hover {
  color: #777;
  text-decoration: none;
}
</style>


<h3>Posters</h3>
<img src="Poster.jpg" class="img-circle person" alt="Random Name">
<style>
/* Add a dark gray background color to the modal header and center text */
.modal-header, h4, .close {
  background-color: #333;
  color: #fff !important;
  text-align: center;
  font-size: 30px;
}

.modal-header, .modal-body {
  padding: 40px 50px;
}
</style>

<!-- Used to open the Modal -->
<button class="btn" data-toggle="modal" data-target="#myModal">Posters</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> </h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> $250 por poster</label>
            <input type="number" class="form-control" id="psw" placeholder="">
          </div>
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Enviar a:</label>
            <input type="text" class="form-control" id="usrname" placeholder="">
          </div>
          <button type="submit" class="btn btn-block">Pagar
            <span class="glyphicon glyphicon-ok"></span>
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancelar
        </button>
        <p>Necesita <a href="#">ayuda?</a></p>
      </div>
    </div>
  </div>
</div>
<h3>Moda y Joyeria</h3>
<img src="Joya.jpg" class="img-circle person" alt="Random Name">
<style>
/* Add a dark gray background color to the modal header and center text */
.modal-header, h4, .close {
  background-color: #333;
  color: #fff !important;
  text-align: center;
  font-size: 30px;
}

.modal-header, .modal-body {
  padding: 40px 50px;
}
</style>

<!-- Used to open the Modal -->
<button class="btn" data-toggle="modal" data-target="#myModal">Joya</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Joyas</h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> $2000 por Joya</label>
            <input type="number" class="form-control" id="psw" placeholder="">
          </div>
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Enviar a </label>
            <input type="text" class="form-control" id="usrname" placeholder="">
          </div>
          <button type="submit" class="btn btn-block">Comprar
            <span class="glyphicon glyphicon-ok"></span>
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancelar
        </button>
        <p>Necesita <a href="#">ayuda?</a></p>
      </div>
    </div>
  </div>
</div>
<h3>Libros</h3>
<img src="Libro.jpg" class="img-circle person" alt="Random Name">
<style>
/* Add a dark gray background color to the modal header and center text */
.modal-header, h4, .close {
  background-color: #333;
  color: #fff !important;
  text-align: center;
  font-size: 30px;
}

.modal-header, .modal-body {
  padding: 40px 50px;
}
</style>

<!-- Used to open the Modal -->
<button class="btn" data-toggle="modal" data-target="#myModal">Libro</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Libros</h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Libro, $200 </label>
            <input type="number" class="form-control" id="psw" placeholder="">
          </div>
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Enviar</label>
            <input type="text" class="form-control" id="usrname" placeholder="">
          </div>
          <button type="submit" class="btn btn-block">Comprar
            <span class="glyphicon glyphicon-ok"></span>
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancelar
        </button>
        <p>Necesita Ayuda <a href="#">help?</a></p>
      </div>
    </div>
  </div>
</div>

<h3>Regalos y Navidad</h3>
<img src="NAvidad.jpg" class="img-circle person" alt="Random Name">
<style>
/* Add a dark gray background color to the modal header and center text */
.modal-header, h4, .close {
  background-color: #333;
  color: #fff !important;
  text-align: center;
  font-size: 30px;
}

.modal-header, .modal-body {
  padding: 40px 50px;
}
</style>

<!-- Used to open the Modal -->
<button class="btn" data-toggle="modal" data-target="#myModal">Regalos</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Navidad </h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> $200 por arbol</label>
            <input type="number" class="form-control" id="psw" placeholder="">
          </div>
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Enviar a:</label>
            <input type="text" class="form-control" id="usrname" placeholder="">
          </div>
          <button type="submit" class="btn btn-block">Comprar
            <span class="glyphicon glyphicon-ok"></span>
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancelar
        </button>
        <p>Necesita <a href="#">ayuda?</a></p>
      </div>
    </div>
  </div>
</div>


<!-- Modal del Login -->

	<div class="modal fade" id="Modal_login">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Iniciar sesión</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<h2>Galería Brothers</h2>
						<p>Favor de rellenar los siguientes campos con la información requerida para iniciar sesión</p>
						<form method="post" id="log_form" action="<?php echo URL ?>usuario/log" class="was-validated">
							<div class="form-group">
								<label for="log_user">Usuario:</label>
								<input type="text" class="form-control" id="log_user" placeholder="Enter username" name="user" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<div class="form-group">
								<label for="log_pass">Contraseña:</label>
								<input type="password" id="log_pass" class="form-control" placeholder="Contraseña" name="password" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<button type="button" id="log" class="btn btn-secondary btn-block">Iniciar Sesión</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal del Registro -->



	<div class="modal fade" id="Modal_Signup">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Registrate!</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<h2>Galería Brothers</h2>
						<p>Favor de rellenar los siguientes campos con la información requerida para realizar el registro de usuario</p>
						<form method="post" id="sign_form" action="<?php echo URL ?>usuario/registrar" class="was-validated">
							<div class="form-group">
								<label for="sign_name">Nombre de Usuario:</label>
								<input type="text" class="form-control" id="sign_name" placeholder="Enter username" name="nombre" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<div class="form-group">
								<label for="sign_pass">Contraseña:</label>
								<input type="password" class="form-control" id="sign_pass" placeholder="Enter password" maxlength="16" name="password" required>
								<div class="valid-feedback">Ingresado</div>
								<div class="invalid-feedback">Favor de llenar este campo</div>
							</div>
							<div class="form-group form-check">    	
							</div>
							<button type="button" id="sign" class="btn btn-secondary btn-block">Registrarse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Galeria Brothers es un espacio para presentar y promover artístas en el medio informático, todas las obras expuestas aquí son propiedad de los autores, así como todos sus derechos.</p> 
  <p>Pagina Hecha por Tito Orozco</p>
  <p> Emilio Alejandro</p> 
  <p>Gabriel Alejandro</a></p> 
</footer>


</body>
</html>
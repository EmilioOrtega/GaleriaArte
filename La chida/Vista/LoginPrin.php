
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
		<img src="Banner.png" class="img-fluid" alt="Responsive image">
	
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Inicio</a>

  <!-- Links -->
  <ul class="navbar-nav">

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Datos de la Galería
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Obras y Artistas
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Visitas
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#Vng">Nuestras Galerías</a>
        <a class="dropdown-item" href="#Vve">Visitas de escuelas</a>
        <a class="dropdown-item" href="#VGv">Grupo de visitas</a>
        <a class="dropdown-item" href="#Vf">Familias</a>
        <a class="dropdown-item" href="#Vfi">Facilidades de investigación</a>
      </div>
    </li>
   <li class="nav-item">
      <a class="nav-link" href="#QhdN">
        Que hay de nuevo?
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#UyS">
        Unete y Soporte
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Tienda
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Políticas de privacidad
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>

    </li>
    <div class="justify-content-end" style="justify-content: flex-end;">    
    	<button type="button" class="btn btn-outline-primary justify-content-end" data-toggle="modal" data-target="#Modal_Signup">Registrarse</button>
    	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal_login">Iniciar Sesión</button>
</div>

  </ul>

</nav>
</div>

<div id="QhdN" class="container-fluid" style="margin-top:10px">
  <h1>Que hay de nuevo?</h1>
  <h3>Exhibiciones</h3>
  <p>
  	
  </p>
  <h3>Eventos</h3>
  <p>
  	
  </p>
  <h3>Grupo de visitas</h3>

  

<div class="container-fluid" style="margin-top:80px">
<h1>Visitas</h1>
</div>
<div id="Vng">
	<h3>Nuestras Galerías</h3>
  <p>

  </p>
</div>

<div id="Vve">
<h3>Visitas de escuelas</h3>
  <p>
  <div class="row text-center">
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="C:\Users\Tito\Documents\GitHub\GaleriaArte\La chida\Imagenes\CTonala.jpg" alt="CTonala" style="width: 50%; height: 100%;">
      <p><strong>Ceti Tonala</strong></p>
      <p>Visita del 27 Noviembre 2019</p>
     <!-- <button class="btn">Buy Tickets</button>-->
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="C:\Users\Tito\Documents\GitHub\GaleriaArte\La chida\Imagenes\CColomos.jpg" alt="CColomos" style="width: 50%; height: 70%;">
      <p><strong>Ceti Colomos</strong></p>
      <p>Visita del 30 Febrero 2019</p>
      <!--<button class="btn">Buy Tickets</button>-->
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="C:\Users\Tito\Documents\GitHub\GaleriaArte\La chida\Imagenes\TEC.jpg" alt="TEC" style="width: 50%; height: 100%;">
      <p><strong>TEC de Monterrey</strong></p>
      <p>Visita del 30 Mayo 2019</p>
      <!--<button class="btn">Buy Tickets</button>-->
    </div>
  </div>

</div>
  </p>	
</div>
  
 <div id="VGv">
<h3>Grupo de visitas</h3>
  <p>
 
  </p>	
</div>

<div id="Vf">
 <h3>Familias</h3>
  <p>
  	
  </p>	
</div>
  
<div id="Vfi">
<h3>Facilidades de investigación</h3>
  <p>
  	
  </p>	
</div>
 

<div id = "UyS" class="container-fluid" style="margin-top:80px">
  <h1>Únete y soporte </h1>
  <h3>Se un amigo de la galería</h3>
  <p>
  	
  </p>
  <h3>Voluntarios y donaciones</h3>
  <p>
  	
  </p>
  <h3>Soporte</h3>
  <p>
  	
  </p>
</div>

<div class="container">
  <h3 class="text-center">¡Contactanos!</h3>
  <p class="text-center"><em>¿Tienes algina sugerencia?</em></p>
  <div class="row test">
    <div class="col-md-4">
      <p>¡Deja un Comentario!</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Tonalá, Mexico</p>
      <p><span class="glyphicon glyphicon-phone"></span>Teléfono: +55 33 1213 1813</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: GaleriaBrothers@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>

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
						<form method="post" id="log_form" action="<?php echo URL ?>user/login" class="was-validated">
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
  <p>Footer</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
})
</script>



</body>
</html>
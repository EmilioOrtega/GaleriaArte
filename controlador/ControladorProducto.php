<?php
class Producto extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Producto");
		$this->setHeader();
		$this->setFooter();
	}

	function index() {
		$producto = $this->modelo->getProducto($_POST['id']);
		echo '
		<br>
		<br>
		<br>
		<div class="card">
			<div class="card-body">
				<div class="media">
					<img src="public/imagenes/'.$producto['imagen'].'"  width="225" height="300">
					<div class="media-body">
						<h1 class="display-2">'.$producto['nombre'].' '.$producto['contenido'].'ml</h1>
						<p class="card-text">'.$producto['descripcion'].'</p>
						<a href="#" class="btn btn-outline-success">$'.$producto['precio'].'</a>
					</div>
				</div>
			</div>
		</div>';
	}
}
?>


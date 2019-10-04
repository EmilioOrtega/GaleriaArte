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
						<h1 class="display-2">'.htmlentities($producto['nombre'], ENT_COMPAT, 'ISO-8859-1', true).' '.$producto['contenido'].'ml</h1>
						<p class="card-text">'.htmlentities($producto['descripcion'], ENT_COMPAT, 'ISO-8859-1', true).'</p>
						<p class="card-text">$'.$producto['precio'].' MXN</p>
					</div>
				</div>
			</div>
			<div class="card-footer">
					<a href="#" class="btn btn-outline-success">Comprar</a>
					<a href="#" class="btn btn-primary"><img src="'.$this->pagina.'vista/carshop.png" alt="Logo" style="width:20px;"> Agregar al carrito</a>
			</div>
		</div>';
	}
}
?>


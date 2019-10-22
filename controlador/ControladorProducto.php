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
					<form method="post" action="'.URL.'carrito/insertarCarrito" style="margin-bottom: 5px">
						<input type="hidden" name="user" value="'.$_SESSION['user'].'">
						<input type="hidden" name="producto" value="'.$producto['id'].'">
						<input type="hidden" name="precio" value="'.$producto['precio'].'">
						<button type="submit" class="btn btn-primary"><img src="'.URL.'vista/carshop.png" alt="Logo" style="width:20px;">Añadir al Carrito</button>
					</form>
			</div>
		</div>';
	}
}
?>


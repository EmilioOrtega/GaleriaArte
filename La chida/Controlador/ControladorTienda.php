<?php
class Producto extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Producto");
		$this->setHeader();
		$this->setFooter();
		$this->setJs("home");
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
					<div class="media-body">
						<h3 class="display-">'.htmlentities($producto['nombre'], ENT_COMPAT, 'ISO-8859-1', true).' '.$producto['nombre'].'ml</h3>
						<p class="card-text">'.htmlentities($producto['descripcion'], ENT_COMPAT, 'ISO-8859-1', true).'</p>
						<p class="card-text">$'.$producto['tipo'].' MXN</p>
						<p class="card-text">'.$producto['precio'].' Disponibles</p>
					</div>
				</div>
			</div>
			<div class="card-footer">
					<form method="post" action="'.URL.'carrito/insertarCarrito" style="margin-bottom: 5px">
						<input type="hidden" id="producto_'.$producto['id'].'" value="'.$producto['id'].'">
						<button type="button" id="carrito" class="btn btn-primary" value="'.$producto['id'].'"><img src="'.URL.'vista/carshop.png" alt="Logo" style="width:20px;">Añadir al Carrito</button>
					</form>
			</div>
		</div>';
	}
}
?>
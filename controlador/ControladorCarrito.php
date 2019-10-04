<?php
class Carrito extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Carrito");
	}

	function index() {
		$producto = $this->modelo->getProducto();
		echo '
		<form method="post" action="'.$this->pagina.'producto" style="margin-bottom: 5px">
			<input type="hidden" name="id" value="'.$producto[$i]['id'].'">
			<button class="btn btn-secondary" type="submit">Ver Producto</button>
		</form>
		';
	}
}
?>
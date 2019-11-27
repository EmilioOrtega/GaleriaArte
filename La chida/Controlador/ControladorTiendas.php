<?php
class Productos extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Producto");
		$this->setHeader();
		$this->setFooter();
	}

	function index() {
		$productos = $this->modelo->getProductos();
		echo '
		<br>
		<br>
		<br>
		<table class="table table-bordered table-dark">
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Tipo</td>
				<td>Precio</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>';
			for ($i=0; $i < count($productos); $i++) {
				echo "
				<tr>
					<td>".$productos[$i]["id"]."</td>
					<td>".htmlentities($productos[$i]['nombre'], ENT_COMPAT, 'ISO-8859-1', true)."</td>
					<td>".htmlentities($productos[$i]['tipo'], ENT_COMPAT, 'ISO-8859-1', true)."</td>
					<td>".$productos[$i]["precio"]." ml</td>
					<td><button class='btn btn-outline-warning' data-toggle=modal>Editar</button></td>
					<td><button class='btn btn-outline-danger' data-toggle=modal  >Eliminar</button></td>
				</tr>";
			}
		echo "</table>";
	}

	function agregar() {
		$this->setVista("Producto/inventario");
	}
}
?>
<?php
class Compra extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Compra");
	}

	function historial(){
		$this->carrito = $this->modelo->getCompras($_SESSION['id']);
		$total = 0;
		echo "
		<br>
		<br>
		<br>";

		$this->setHeader();
		$this->setFooter();

		$this->setVista("Compras/Historial");
	}

	function comprar(){
		$this->modelo->addCompra($_POST['total'],$_POST['id_producto'], $_SESSION['id_usuario']);
		header("Location: ".URL."home");
	}
}
?>
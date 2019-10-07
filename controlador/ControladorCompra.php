<?php
class Compra extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Compra");
	}


function comprar(){
	if(isset($_POST['usuario']) && isset($_POST['producto'])){
$idUsuario=$_POST['usuario'];
$idProducto=$_POST['producto'];
$carrito = $this->modelo->getCarrito($idUser);
 
$this->modelo->addCompra($carrito);
	



}

?>
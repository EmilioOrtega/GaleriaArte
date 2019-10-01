<?php
class ModeloHome extends Modelo {
	function __construct() {
		parent::__construct();
	}

	public function getProducto() {
		$productos = array();
		for ($i=0; $i <7 ; $i++) { 
			$producto = array('nombre' => 'hola'.$i);
			array_push(	$productos, $producto);
		}
		return $productos;
	}
}
?>
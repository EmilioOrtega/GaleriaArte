<?php
class ModeloHome extends Modelo {
	function __construct() {
		parent::__construct();
	}

	function getProducto() {
		$productos = array();
		$sql = "SELECT id, nombre, descripcion, precio, contenido, imagen FROM producto";
		if($result = mysqli_query($this->conexion,$sql)){
			while ($obj = mysqli_fetch_array($result)){
				array_push(	$productos, $obj);
			}
			mysqli_free_result($result);
		}
		$this->conexion->close();
		return $productos;
	}


}
?>
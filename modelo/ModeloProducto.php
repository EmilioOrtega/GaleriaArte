<?php
 class ModeloProducto extends Modelo
 {
	public function __construct()
	{
		parent::__construct();
	}


	function getProducto($id) {
		$sql = "SELECT nombre, descripcion, precio, contenido, imagen FROM producto where id= '".$id."' ";
		$result = $this->conexion->query($sql)->fetch_assoc();
		$this->conexion->close();
		return $result;
	}

	function getProductos() {
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
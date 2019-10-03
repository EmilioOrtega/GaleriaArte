<?php
 class ModeloProducto extends Modelo
 {
	public function __construct()
	{
		parent::__construct();
	}


	public function getProducto($id)
	{
		$sql = "SELECT nombre, descripcion, precio, contenido, imagen FROM producto where id= '".$id."' ";
		$result = $this->conexion->query($sql)->fetch_assoc();
		$this->conexion->close();
		return $result;
	}
}
?>
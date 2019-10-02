<?php
include '../libs/Modelo.php';

 class ModeloProducto extends Modelo
 {
	public function __construct()
	{
		parent::__construct();
	}


	public function getProducto($id)
	{
		$sqsl = "SELECT * FROM productos where id=".$id."";
		$result = $this->conexion->query($sql);
		$this->conexion->close();
		return $result;
	}
}
?>
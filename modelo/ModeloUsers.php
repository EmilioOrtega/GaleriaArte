<?php
 class ModeloUsers extends Modelo
 {
	public function __construct()
	{
		parent::__construct();
	}


	public function getUsers()
	{
		$usuario = array();
		$sql = "SELECT * FROM usuario";
		if($result = mysqli_query($this->conexion,$sql)){
			while ($obj = mysqli_fetch_array($result)){
				array_push(	$usuario, $obj);
			}
			mysqli_free_result($result);
		}
		$this->conexion->close();
		return $usuario;
	}
}
?>
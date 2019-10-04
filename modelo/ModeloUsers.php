<?php
 class ModeloUsers extends Modelo
 {
	public function __construct()
	{
		parent::__construct();
	}


	public function getUsers()
	{
		$sql = "SELECT * FROM usuario";
		$result[] = $this->conexion->query($sql)->fetch_assoc();
		$this->conexion->close();
		return $result;
	}
}
?>
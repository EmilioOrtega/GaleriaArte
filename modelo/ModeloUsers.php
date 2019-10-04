<?php
 class ModeloUsers extends Modelo
 {
	public function __construct()
	{
		parent::__construct();
	}


	public function getUsers()
	{
		$sql = "SELECT usuario,nombre,apellidos,sexo,telefono,fecha_nacimiento,tipo_usuario,tarjeta FROM usuario";
		$result = $this->conexion->query($sql)->fetch_assoc();
		$this->conexion->close();
		return $result;
	}
}
?>
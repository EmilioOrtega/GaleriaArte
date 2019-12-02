<?php
class ModeloUsuario extends Modelo {
	function __construct() {
		parent::__construct();
	}

	function getUsuarios() {
		$usuario = array();
		$sql = "SELECT id, nombre, contra FROM usuario";
		if($result = mysqli_query($this->conexion,$sql)){
			while ($obj = mysqli_fetch_array($result)){
				array_push(	$usuario, $obj);
			}
			mysqli_free_result($result);
		}
		$this->conexion->close();
		return $usuario;
	}

	function addUsuario($nombre, $password){
		$sql = "INSERT INTO usuario (nombre, contra) 
		VALUES ('{$nombre}', '{$password}')";
		echo $sql;
		mysqli_query($this->conexion,$sql);
		$this->conexion->close();

	}

	function login($usuario,$contrasena){
		$productos = array();
		$sql = "SELECT id FROM usuario WHERE usuario ='{$usuario}' and contra = '{$contrasena}'";
		if($result = $this->conexion->query($sql)) {
			while ($obj = mysqli_fetch_array($result)){
				array_push(	$productos, $obj);
				var_dump($result);
			}
			mysqli_free_result($result);
			return $productos;
		}else{
			return null;
		}
	}
}
?>
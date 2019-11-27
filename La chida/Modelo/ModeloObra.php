<?php
class ModeloObra extends Modelo {
	function __construct() {
		parent::__construct();
	}


	function getObra($obra) {
		$obra = array();
		$sql = "SELECT nombre, id_artista FROM obra WHERE id={'$obra'}";
		if($result = mysqli_query($this->conexion,$sql)){
			mysqli_free_result($result);
		}
		$this->conexion->close();
		return $obra;
	}

	function addObra($nombre, $autor, $galeria){
		$sql = "INSERT INTO obra (nombre, id_artista, id_galeria) VALUES ('{$nombre}', '{$autor}', '{$galeria}')";
		mysqli_query($this->conexion,$sql);
		$this->conexion->close();

	}

	function delteObra($idObra){
		$sql = "DELETE FROM obra WHERE  id = '{$idObra}'"
		mysqli_query($this->conexion,$sql);
		$this->conexion->close();
	}
}
?>
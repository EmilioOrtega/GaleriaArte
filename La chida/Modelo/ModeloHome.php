<?php
class ModeloHome extends Modelo {
	function __construct() {
		parent::__construct();
	}

	function getObras() {
		$obras = array();
		$sql = "SELECT id, nombre, id_artista, id_galeria FROM obra";
		if($result = mysqli_query($this->conexion,$sql)){
			while ($obj = mysqli_fetch_array($result)){
				array_push(	$obras, $obj);
			}
			mysqli_free_result($result);
		}
		$this->conexion->close();
		return $obras;
	}
}
?>
<?php
class ModeloArtista extends Modelo {
	function __construct() {
		parent::__construct();
	}


	function getArtista($obra) {
		$artistas = array();
		$sql = "SELECT nombre, descripcion FROM artista ";
		if($result = mysqli_query($this->conexion,$sql)){
			mysqli_free_result($result);
		}
		$this->conexion->close();
		return $artistas;
	}
}
?>
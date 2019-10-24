<?php
class Controlador {
	public function __construct() {
		session_start();
		$this->pagina = "http://localhost/VinateriaWeb/";
		if (empty($_SESSION['user'])) {
			$_SESSION['user'] = uniqid();
			$_SESSION['tipo_usuario'] = "t";
		}
	}

	function setFooter() {
		require 'vista/header.php';
	}

	function setHeader() {
		require 'vista/footer.php';
	}

	function setVista($vista) {
		require 'vista/'.$vista.'.php';
	}

	function setModelo($modelo) {
		$url = 'modelo/Modelo'.$modelo.'.php';
		if(file_exists($url)){
			require $url;
			$nombre = 'Modelo'.$modelo;
			$this->modelo = new $nombre();
		}
	}

	function setJs($JS) {
		echo "<script src='".URL."public/JS/$JS.js'></script>";
	}
}
?>
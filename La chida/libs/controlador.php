<?php
class Controlador {
	public $session;
	public function __construct() {
		session_start();
		if (empty($_SESSION['user'])) {
			$_SESSION['user'] = uniqid();
		}
	}

	public $modelo;

	function setPrincipal(){
		require 'LoginPrin.php';
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
}
?>
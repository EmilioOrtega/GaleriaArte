<?php
class Controlador {
	function __construct() {
	}

	public $pagina = "http://localhost/VinateriaWeb/";

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
		require 'modelo/'.$modelo.'.php';
	}
}
?>
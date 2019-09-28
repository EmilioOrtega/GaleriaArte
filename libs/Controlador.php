<?php
class Controlador {
	function __construct() {
	}

	function setVista($vista) {
		require 'vista/'.$vista.'.php';
	}

	function setModelo($modelo) {
		require 'modelo/'.$modelo.'.php';
	}
}
?>
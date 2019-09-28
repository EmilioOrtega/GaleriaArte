<?php
class Controlador {
	function __construct() {
	}

	function setVista($vista) {
		require 'vista/'.$vista.'.php';
	}
}
?>
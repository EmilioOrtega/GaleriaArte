<?php
class Obra extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Home");
	}
	
	function index() {
		$this->obras = $this->modelo->getObras();
		$this->setHeader();
		$this->setFooter();
		$this->setVista('obra/Obra');	
	}

	function agregar() {
		$this->setHeader();
		$this->setFooter();
		$this->setVista('obra/agregar');	
	}

	function eliminar() {
		$this->setHeader();
		$this->setFooter();
		$this->setVista('obra/eliminar');	
	}
}
?>
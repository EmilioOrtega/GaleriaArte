<?php
class Home extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Home");
	}
	
	function index() {
		$this->cuadros = $this->modelo->getObras();
		$this->setHeader();
		$this->setFooter();
		$this->setVista('home/galeriaArte');	
	}
}
?>
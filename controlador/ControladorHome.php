<?php
class Home extends Controlador{
	function __construct() {
		parent::__construct();
		//$this->setModelo("ModeloHome");
		$this->setHeader();
		$this->setFooter();
		$this->setVista("Home/index");
	}
}
?>
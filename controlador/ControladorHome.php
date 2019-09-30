<?php
class Home extends Controlador{
	function __construct() {
		parent::__construct();
		//$this->setModelo("ModeloHome");
		$this->setHeader();
		$this->setVista("Home/index");
		for ($i=0; $i < 10; $i++) { 
			echo "<p>algo</p>";
		}
		$this->setFooter();
	}
}
?>
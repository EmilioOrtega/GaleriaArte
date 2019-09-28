<?php
class Home extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setVista("Home/index");
	}
}
?>
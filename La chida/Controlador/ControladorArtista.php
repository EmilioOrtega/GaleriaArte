<?php
class Artista extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Home");
	}
	
	function index() {
		$this->obras = $this->modelo->getArtista();
		$this->setHeader();
		$this->setFooter();
		$this->setVista('artista/artista');	
	}
}
?>
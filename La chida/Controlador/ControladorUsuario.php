<?php
class Usuario extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Usuario");
	}
	
	function index() {
		$this->setHeader();
		$this->setFooter();
		$this->setVista('forms/login');	
	}

	function registrar() {
		$this->setHeader();
		$this->setFooter();
		$this->setVista('forms/registrar');	
	}

	function reg() {
		$this->libros = $this->modelo->addUsuario($_POST['User'], $_POST['Nombre'], $_POST['Passr']);
	}

	function login() {
		$this->setHeader();
		$this->setFooter();
		$this->setVista('forms/login');	
	}

	function log() {
		$this->user = $this->modelo->login($_POST['User'], $_POST['Passr']);
		var_dump($this->user);
		if (!empty($this->user)) {
			echo "Hola".$this->user[0]['id'];
		}
	}
}
?>
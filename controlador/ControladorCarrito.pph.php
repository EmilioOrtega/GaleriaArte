<?php
class Carrito extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Usuario");
	}

	function login() {
		echo "";
	}

	function logout() {
		session_destroy();
		unset($_SESSION);
		header('Location: '.$this->pagina.'home');
	}

	function registrar() {
		$fecha = trim($_POST['año']).'-'.trim($_POST['mes']).'-'.trim($_POST['dia']);
		$this->modelo->registrarUsuario(trim($_POST['user']),trim($_POST['password']),trim($_POST['nombre']),trim($_POST['apellidos']),trim($_POST['sexo']),trim($_POST['telefono']),$fecha,"u");
		header('Location: '.$this->pagina.'user/login');
	}
}
?>
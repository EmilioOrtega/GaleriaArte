<?php
class User extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Usuario");
	}

	function login() {
		$producto = $this->modelo->login(trim($_POST['user']),trim($_POST['password']));
		if (!empty($producto)) {
			$_SESSION['user'] = trim($_POST['user']);
			$_SESSION['nombre'] = trim($producto[0]['nombre']);
			$_SESSION['apellidos'] = trim($producto[0]['apellidos']);
			$_SESSION['telefono'] = trim($producto[0]['telefono']);
			$_SESSION['tipo_usuario'] = trim($producto[0]['tipo_usuario']);
			$_SESSION['tarjeta'] = trim($producto[0]['tarjeta']);
			header('Location: '.$this->pagina.'home');
		}else {
			header('Location: '.$this->pagina.'home');
		}
	}

	function logout() {
		session_destroy();
		unset($_SESSION);
		header('Location: '.$this->pagina.'home');
	}

	function registrar() {
		$this->modelo->registrarUsuario(trim($_POST['user']),trim($_POST['password']));
		header('Location: '.$this->pagina.'user/login');
	}
}

?>
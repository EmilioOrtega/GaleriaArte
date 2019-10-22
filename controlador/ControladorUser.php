<?php
class User extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Usuario");
	}

	function index() {
		$this->setHeader();
		$this->setFooter();
		$users = $this->modelo->getUsers();
		echo '
		<br>
		<br>
		<br>
		<table class="table table-bordered table-dark">
			<tr>
				<td>Usuario</td>
				<td>Nombres</td>
				<td>Apellidos </td>
				<td>Sexo</td>
				<td>Telefono</td>
				<td>Fecha de nacimiento</td>
				<td>Tipo de usuario</td>
				<td>Tarjeta</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>';
			for ($i=0; $i < count($users); $i++) {
				echo "
				<tr>
					<form method='post' action='".URL."user/actualizar'>
						<td>".$users[$i]["usuario"]."</td>
						<td>
							<input style='width:100%; background-color: transparent; color:fff' type='text' name='nombre' value='{$users[$i]['nombre']}'>
						</td>
						<td>
							<textarea style='width:100%; background-color: transparent; color:fff' name='apellidos'>{$users[$i]['apellidos']}</textarea>
						</td>
						<td>
							<select style='width:110%; background-color: transparent; color:fff' name='sexo'>";
							if ($users[$i]['sexo']=='M') {
								echo "
								<option value='M' selected>M</option>
								<option value='F'>F</option>";
							}else {
								echo "
								<option value='M'>M</option>
								<option value='F' selected>F</option>";
							}
							echo "
							</select>
						</td>
						<td>
							<input style='width:100%; background-color: transparent; color:fff' type='text' name='telefono' value='{$users[$i]['telefono']}'>
						</td>
						<td>
							<input style='width:100%; background-color: transparent; color:fff' type='date' name='fecha' value='{$users[$i]['fecha_nacimiento']}'>
						</td>
						<td>
							<select style='width:60%; background-color: transparent; color:fff' name='tipo_usuario'>";
								if ($users[$i]['tipo_usuario']=='u') {
									echo "
									<option value='u' selected>u</option>
									<option value='i'>i</option>
									<option value='a'>a</option>";
								}else if ($users[$i]['tipo_usuario']=='i') {
									echo "
									<option value='u'>u</option>
									<option value='i' selected>i</option>
									<option value='a'>a</option>";
								}else {
									echo "
									<option value='u'>u</option>
									<option value='i'>i</option>
									<option value='a' selected>a</option>";
								}
								echo "
							</select>
						</td>
						<td>
							<input style='width:100%; background-color: transparent; color:fff' type='text' name='tarjeta' value='{$users[$i]['tarjeta']}'>
						</td>
					</form>
					<td><button class='btn btn-outline-warning'>Actualizar</button></td>
					<form method='post' action='".URL."user/delete'>
						<input type='hidden' name='user' value='{$users[$i]['usuario']}'>
						<td><button class='btn btn-outline-danger' type='submit'>Eliminar</button></td>
					</form>
				</tr>";
			}
		echo "</table>";
	}

	function login() {
		$usuario = $this->modelo->login($_POST['user'],$_POST['password']);
		if (!empty($usuario)) {
			$_SESSION['user'] = $_POST['user'];
			$_SESSION['nombre'] = $usuario[0]['nombre'];
			$_SESSION['apellidos'] = $usuario[0]['apellidos'];
			$_SESSION['telefono'] = $usuario[0]['telefono'];
			$_SESSION['tipo_usuario'] = $usuario[0]['tipo_usuario'];
			$_SESSION['tarjeta'] = $usuario[0]['tarjeta'];
			header('Location: '.URL.'home');
		}else {
			header('Location: '.URL.'home');
		}
	}

	function logout() {
		session_destroy();
		unset($_SESSION);
		header('Location: '.URL.'home');
	}

	function registrar() {
		$fecha = $_POST['año'].'-'.$_POST['mes'].'-'.$_POST['dia'];
		$this->modelo->registrarUsuario($_POST['user'],$_POST['password'],$_POST['nombre'],$_POST['apellidos'],$_POST['sexo'],$_POST['telefono'],$fecha,"u");
		header('Location: '.URL.'user/login');
	}

	function update() {
		if (!isset($_POST['tarjeta'])) {
			$_POST['tarjeta'] = $_SESSION['tarjeta'];
		}
		$this->modelo->updateUser($_SESSION['user'],$_POST['nombre'],$_POST['apellidos'],$_POST['telefono'],$_POST['tarjeta']);
		$_SESSION['nombre'] = $_POST['nombre'];
		$_SESSION['apellidos'] = $_POST['apellidos'];
		$_SESSION['telefono'] = $_POST['telefono'];
		$_SESSION['tarjeta'] = $_POST['tarjeta'];
		header('Location: '.URL.'home');
	}

	function delete() {
		$this->modelo->deleteUser($_POST['user']);
		header('Location: '.URL.'user');
	}
}
?>
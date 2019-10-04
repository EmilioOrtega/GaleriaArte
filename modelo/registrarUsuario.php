 <?php
	include 'ModeloUsuario.php';
	$usuario = new Usuario();
	$usuario->registrarUsuario("usuario","contra","nombre","apellido","sexo","123456789123","1990-10-10",'a',1);
?> 
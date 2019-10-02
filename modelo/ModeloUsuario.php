 <?php
 class Usuario extends Modelo{
	public function __construct(){

	}
     //registro
     //login
     //conxionbanco

	public function registroUsuario($usuario, $contrasena,$nombre,$apellidos,$sexo,$telefono,$fecha_nacimiento,$tipo_usuario,$tarjeta){
		$sql = "insert into usuario(usuario,contrasena,nombre,apellidos,sexo,telefono,fecha_nacimiento,tipo_usuario,tarjeta) values({$usuario},{$contrasena},{$nombre},{$apellidos},{$sexo},{$telefono},{$fecha_nacimiento},{$tipo_usuario},{$tarjeta})";
		if($result=$conexion->query($sql)){
            echo 'Se registró al usuario correctamente';
        }else{
            echo 'error';
        }
		$conexion->close();
		return $result;
	}
}

?> 
 <?php
 include '../libs/Modelo.php';
 class Usuario extends Modelo{
	public function __construct(){
		parent::__construct();
	}
     //registro
     //login
     //conxionbanco

	public function registrarUsuario($usuario, $contrasena,$nombre,$apellidos,$sexo,$telefono,$fecha_nacimiento,$tipo_usuario,$tarjeta){
		$sql = "insert into usuario(usuario,contrasena,nombre,apellidos,sexo,telefono,fecha_nacimiento,tipo_usuario,tarjeta) values('{$usuario}','{$contrasena}','{$nombre}','{$apellidos}','{$sexo}','{$telefono}','{$fecha_nacimiento}','{$tipo_usuario}',{$tarjeta})";
		if($result=$this->conexion->query($sql)){
            echo 'Se registró al usuario correctamente';
        }else{
        	$sql = "select *from usuario where usuario= '{$usuario}'";
        	if($this->conexion->query($sql)){
        		echo 'Usuario ya registrado';
        	}else{
            echo 'error';
        	}
        }
		$this->conexion->close();
		return $result;
	}

	public function login($usuario,$contrasena){
		$sql = "select *from usuario where usuario='{$usuario}' and contrasena = '{$contrasena}'";
		$result = $this->conexion->query($sql);
		if ($result->num_rows > 0) {
			echo "login exitoso";
			return $result;
		}else{
			echo "Contraseña o usuario incorrectos";
			return null;
		}
	}
}

?> 
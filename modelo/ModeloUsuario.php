 <?php
 class ModeloUsuario extends Modelo{
	public function __construct(){
		parent::__construct();
	}
     //registro
     //login
     //conxionbanco

	public function registrarUsuario($usuario,$contrasena,$nombre,$apellidos,$sexo,$telefono,$fecha_nacimiento,$tipo_usuario){
		$sql = "insert into usuario(usuario,contrasena,nombre,apellidos,sexo,telefono,fecha_nacimiento,tipo_usuario) values('{$usuario}','{$contrasena}','{$nombre}','{$apellidos}','{$sexo}','{$telefono}','{$fecha_nacimiento}','{$tipo_usuario}')";

		echo $sql;
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
		$productos = array();
		$sql = "select nombre, apellidos, telefono, tarjeta, tipo_usuario from usuario where usuario='{$usuario}' and contrasena = '{$contrasena}'";
		if ($result = mysqli_query($this->conexion,$sql)) {
			while ($obj = mysqli_fetch_array($result)){
				array_push(	$productos, $obj);
			}
			mysqli_free_result($result);
			return $productos;
		}else{
			return null;
		}
	}
}

?> 
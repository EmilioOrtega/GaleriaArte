 <?php
 class ModeloCompra extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	
	function addCompra($usuario,$total){
		$sql = "insert into compra(usuario,fecha,total) values('$usuario',NOW(),$total)";

		echo $sql;
		if($result=$this->conexion->query($sql)){
			echo 'Se agregó el producto al carrito correctamente';
		}else{
			echo 'error';
		}
		$this->conexion->close();
	}

	function getCompras($usuario,$total){
		$compra = array();
		$sql = "SELECT producto.imagen, producto.nombre as producto, producto.precio, historial.producto as clave_producto,  count(*) as cantidad FROM carrito inner join producto on historial.producto = producto.id where usuario = '{$usuario}' group by ticket";
		
		$productos = array();
		$sql = "select nombre, apellidos, telefono, tarjeta, tipo_usuario, sesion from usuario where usuario='{$usuario}' and contrasena = '{$contrasena}'";
		if ($result = $this->conexion->query($sql)) {
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
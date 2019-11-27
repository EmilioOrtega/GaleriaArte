<?php
 class ModeloCompra extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	
	function addCompra($usuario,$total){
		$sql = "insert into compra(total, id_producto, id_usuario) values('$usuario',NOW(),$total)";

		echo $sql;
		if($result=$this->conexion->query($sql)){
			echo 'Se agregó el producto al carrito correctamente';
		}else{
			echo 'error';
		}
		$this->conexion->close();
	}

	function getCompras($usuario){
		$compra = array();
		$sql = "SELECT tienda.nombre as producto, tienda.precio FROM tienda RIGHT join compra on compra.id = historial.ticket inner join producto on historial.producto = producto.id where usuario = '{$usuario}'";
		if ($result = $this->conexion->query($sql)) {
			while ($obj = mysqli_fetch_array($result)){
				array_push(	$compra, $obj);
			}
			mysqli_free_result($result);
			return $compra;
		}else{
			return null;
		}
	}
}

?> 
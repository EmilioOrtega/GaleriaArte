<?php
 class ModeloCompra extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	
	function addCompra($total, $id_producto, $id_usuario){
		$sql = "insert into compra(total, id_producto, id_usuario) values(, $total, '$id_producto', $id_usuario)";

		echo $sql;
		if($result=$this->conexion->query($sql)){
			echo 'Se ha comprado el producto';
		}else{
			echo 'error';
		}
		$this->conexion->close();
	}
}

?> 
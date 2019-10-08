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
}

?> 
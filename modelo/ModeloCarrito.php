 <?php
 class ModeloCarrito extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	 
	function addCarrito($usuario,$producto,$total){
		$sql = "insert into carrito(usuario,producto,fecha,cantidad,total) values('{$usuario}','{$producto}',NOW(),1,{$total})";

		if($result=$this->conexion->query($sql)){
			echo 'Se agregó el producto al carrito correctamente';
		}else{
			$sql = "select *from carrito where producto= '{producto}'";
			if($this->conexion->query($sql)){
				echo 'El producto ya está en el carrito';
			}else{
			echo 'error';
			}
		}
		$this->conexion->close();
	}

	function deleteCarrito($id,$producto){
		$sql = "delete from carrito where id='{$id}' and producto={$producto}";	
		$this->conexion->query($sql);
		$this->conexion->close();   
	 }

	function getCarrito($usuario){
		$carrito = array();
		$sql = "SELECT * FROM carrito inner join producto on carrito.producto = producto.id where usuario = '{$usuario}'";
		if($result = mysqli_query($this->conexion,$sql)){
			while ($obj = mysqli_fetch_array($result)){
				array_push(	$carrito, $obj);
			}
			mysqli_free_result($result);
		}
		$this->conexion->close();
		return $carrito;
	 }
}

?> 
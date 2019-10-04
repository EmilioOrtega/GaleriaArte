 <?php
 class ModeloCarrito extends Modelo{
	public function __construct(){
		parent::__construct();
	}
     
    function addCarrito($usuario,$producto,$total){
        $sql = "insert into carrito(usuario,producto,fecha,cantidad,total,subtotal) values('{$usuario}','{$producto}',NOW(),1,{$total},{$total})";

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

    function deleteCarrito($id){
      $sql = "delete from carrito where id={$id}";

		echo $sql;
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

    function getCarrito($usuario){
		$usuario = array();
		$sql = "SELECT * FROM carrito inner join producto on carrito.producto = producto.id";
		if($result = mysqli_query($this->conexion,$sql)){
			while ($obj = mysqli_fetch_array($result)){
				array_push(	$usuario, $obj);
			}
			mysqli_free_result($result);
		}
		$this->conexion->close();
		return $usuario;
     }
}

?> 
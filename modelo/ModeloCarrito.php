 <?php
 include '../libs/Modelo.php';
 class Carrito extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	public function mostrarCategorias(){
		$result=$this->getCategorias();
		if ($result->num_rows > 0) {
			echo "Categorias:"."<br>";
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo $row["nombre"]. "<br>";
		    }
		} else {
		    echo "No hay categorias registradas";
		}
	}
	public function getCategorias(){
		$sql = "SELECT nombre FROM categoria";
		$result = $this->conexion->query($sql);
		$this->conexion->close();
		return $result;
	}
     
    addCarrito($usuario,$producto,$fecha,$total,$subtotal){
        $fecha=now();
        $sql = "insert into carrito(usuario,producto,fecha,cantidad,total,subtotal) values('{$usuario}','{$producto}',NOW(),1,{$total},{$total})";

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
     deleteCarrito($id){
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
     getCarrito($usuario){
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
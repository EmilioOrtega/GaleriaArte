 <?php
 include '../libs/Modelo.php';
 class Compra extends Modelo{
	public function __construct(){
		parent::__construct();
	}
	
     
    addCompra($usuario,$producto){
        $fecha=now();
        include 'ModeloProducto.php';
        $productos= new ModeloProducto();
        $producto = $producto-> getProducto($producto);    
        $sql = "insert into carrito(usuario,producto,fecha,cantidad,total,subtotal) values('{$usuario}','{$producto}',NOW(),1,{$producto['precio']},{$producto['precio']})";

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
     
}

?> 
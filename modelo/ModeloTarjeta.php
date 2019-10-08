 <?php
 class ModeloTarjeta extends Modelo{
	public function __construct(){
		parent::__construct();
	}

	function getSaldo($tarjeta){
		$sql = "select saldo from tarjeta where tarjeta={$tarjeta}";
		$result = $this->conexionBanco->query($sql);
		if ($result->num_rows > 0) {
			$obj = mysqli_fetch_array($result);
			echo "Tarjeta válida.";
			return $obj;
		}else{
			echo "Tarjeta no existente.";
			return null;
		}
	}

	function updateSaldo($tarjeta, $total){
		$sql = "update tarjeta set saldo=saldo-$total from tarjeta where tarjeta={$tarjeta}";

		echo $sql;
		if($result=$this->conexion->query($sql)){
			echo 'Se agregó el producto al carrito correctamente';
		}else{
			echo 'error';
		}
		$this->conexion->close();
	}
}
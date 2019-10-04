 <?php
 include '../libs/Modelo.php';
 class Tarjeta extends Modelo{
	public function __construct(){
		parent::__construct();
	}

	public function verificarTarjeta($tarjeta,$cvc){
		$sql = "select *from tarjeta where tarjeta={$tarjeta} and CVC = {$cvc}";
		$result = $this->conexionBanco->query($sql);
		if ($result->num_rows > 0) {
			echo "Tarjeta válida.";
			return $result;
		}else{
			echo "Tarjeta no existente.";
			return null;
		}
	}
}
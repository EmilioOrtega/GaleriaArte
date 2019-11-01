<?php
class Compra extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Compra");
	}

	function historial(){
		$carrito = $this->modelo->getCompras($_SESSION['user']);
		$total = 0;
		echo "
		<br>
		<br>
		<br>";
		for ($i=0; $i < count($carrito); $i++) {
			$subtotal = $carrito[$i]['cantidad']*$carrito[$i]['precio'];
			$total = $total + $subtotal;
			$carrito[$i]['producto'] = htmlentities($carrito[$i]['producto'], ENT_COMPAT, 'ISO-8859-1', true);
			echo "
			<div class='card mb-2'>
				<div class='card-body'>
					<div class='row align-items-center'>
						<div class='col-12 col-sm-6 col-md-2'>
							<img src='".URL."public/imagenes/{$carrito[$i]['imagen']}' class='rounded mx-auto d-block' alt='Img' height='100px'>
						</div>
						<div class='col-12 col-sm-6 col-md-8'>
							<div class='row'>
								<div class='col-12 col-sm-6 col-md-4'>
									<label for='name' class='card-title'>Producto: {$carrito[$i]['producto']}.</label>
								</div>
								<div class='col-0 col-sm-0 col-md-4'></div>
								<div class='col-6 col-sm-6 col-md-4'>
									<label for='precio' class='card-text'>Precio: $ {$carrito[$i]['precio']}</label>
								</div>
							</div>
							<div class='row'>
								<div class='col-5 col-sm-5 col-md-4'>Cantidad: {$carrito[$i]['cantidad']}</div>
								<div class='col-1 col-sm-1 col-md-4'></div>
								<div class='col-5 col-sm-5 col-md-4'>Subtotal:   $$subtotal</div>
							</div>
						</div>
						<div class='col-12 col-sm-12 col-md-2 mt-2'>
							<form method='post' action='".URL."carrito/eliminarCarrito'>
								<button class='btn btn-danger' type='submit'>Eliminar</button>
								<input type='hidden' name='producto' value='{$carrito[$i]['clave_producto']}'>
								<input type='hidden' name='usuario' value='{$_SESSION['user']}'>
							</form>
						</div>
					</div>
				</div>
			</div>";
		}
	}

	function comprar(){
		$this->setModelo("Tarjeta");
		$saldo = $this->modelo->getSaldo($_SESSION['tarjeta']);
		if (($saldo['saldo']-$total)>0) {
			$this->modelo->updateSaldo($_SESSION['tarjeta'],$_POST['total']);
			$this->setModelo("Compra");
			$this->modelo->addCompra($_SESSION['user'],$_POST['total']);
			$this->setModelo("Carrito");
			$this->modelo->deleteAllCarrito($_SESSION['user']);
		}
		header("Location: ".URL."home");
	}
}
?>
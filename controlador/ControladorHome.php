<?php
class Home extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Home");
		$this->setHeader();
		$this->setFooter();
		$this->setJs("home");
	}

	function index() {
		$this->setVista("Home/index");
		$producto = $this->modelo->getProducto();
		echo '<div class="row">';
		if(empty($producto)){
			echo "<h1 class='ml-5'>No hay productos disponibles</h1>";
		}
		for ($i=0; $i < count($producto); $i++) { 
			echo '
			<div class="col-12 col-sm-6 col-md-4" style="margin-top:10px">
				<div class="card" style="height: 100%">
					<img class="card-img-top" src="'.URL.'public/imagenes/'.$producto[$i]['imagen'].'" alt="Card image" style="height: 400px">
					<div class="card-body">
						<h4 class="card-title">'.htmlentities($producto[$i]['nombre'], ENT_COMPAT, 'ISO-8859-1', true).'</h4>
						<p class="card-text">$'.$producto[$i]['precio'].'</p>
						<p class="card-text">'.$producto[$i]['cantidad'].' Articulos disponibles</p>
					</div>
					<div class="card-footer">
						<form method="post" action="'.URL.'producto" style="margin-bottom: 5px">
							<input type="hidden" name="id" value="'.$producto[$i]['id'].'">
							<button class="btn btn-secondary" type="submit">Ver Producto</button>
						</form>
						<input type="hidden" id="producto_'.$producto[$i]['id'].'" value="'.$producto[$i]['id'].'">
						<input type="hidden" id="precio_'.$producto[$i]['id'].'" value="'.$producto[$i]['precio'].'">
						<button id="carrito" value="'.$producto[$i]['id'].'" type="button" class="btn btn-primary"><img src="'.URL.'vista/carshop.png" alt="Logo" style="width:20px;">Añadir al Carrito</button>
					</div>
				</div>
			</div>';
		}
		echo '</div>';
	}

	function buscar() {
		$producto = $this->modelo->searchProducto($_POST['buscar']);
		echo '
		<br>
		<br>
		<br>
		<div class="row">';
		if (!empty($producto)) {
			for ($i=0; $i < count($producto); $i++) { 
				echo '
				<div class="col-4" style="margin-top:10px">
					<div class="card" style="height: 100%">
						<img class="card-img-top" src="'.URL.'public/imagenes/'.$producto[$i]['imagen'].'" alt="Card image" style="height: 400px">
						<div class="card-body">
							<h4 class="card-title">'.htmlentities($producto[$i]['nombre'], ENT_COMPAT, 'ISO-8859-1', true).'</h4>
							<p class="card-text">$'.$producto[$i]['precio'].'</p>
							<p class="card-text">'.$producto[$i]['cantidad'].' Articulos disponibles</p>
						</div>
						<div class="card-footer">
							<form method="post" action="'.URL.'producto" style="margin-bottom: 5px">
								<input type="hidden" name="id" value="'.$producto[$i]['id'].'">
								<button class="btn btn-secondary" type="submit">Ver Producto</button>
							</form>
							<input type="hidden" id="producto_'.$producto[$i]['id'].'" value="'.$producto[$i]['id'].'">
							<input type="hidden" id="precio_'.$producto[$i]['id'].'" value="'.$producto[$i]['precio'].'">
							<button id="carrito" value="'.$producto[$i]['id'].'" type="button" class="btn btn-primary"><img src="'.URL.'vista/carshop.png" alt="Logo" style="width:20px;">Añadir al Carrito</button>
						</div>
					</div>
				</div>';
			}
		}else {
			echo '<h4>No hay resultados para "'.$_POST['buscar'].'"</h4>';
		}
		echo '</div>';
	}

	function ejemplo() {
		echo "<br><br><br>";
		include_once('libs/librerias/tbs_class.php');
		$tbs = new clsTinyButStrong;
		$tbs->LoadTemplate('vista/home/algo.html');
		$message = 'alo';
		$list = array('hello');
		$tbs->MergeBlock('blk', $list);
		$tbs->Show();
	}
}
?>
<?php
class Home extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Home");
		$this->setHeader();
		$this->setFooter();
		$this->setVista("Home/index");
		$producto = $this->modelo->getProducto();
		for ($i=0; $i < count($producto); $i++) { 
			echo '
			<div class=card>
			    <img src=tequila.jpg class=center alt=Alps>
			    <div class=w3-container w3-center>
			      <p>'.$producto[$i]['nombre'].'</p>
			    </div>
			  </div>
			';
		}
	}
}
?>
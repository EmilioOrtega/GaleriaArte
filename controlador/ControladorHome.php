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
			<div class="caja">
			<div class=card>
			    <img src=tequila.jpg class=center alt=Alps>
			    <div class=w3-container w3-center>
			      <p>'.$producto[$i]['nombre'].'</p>
			    </div>
			  </div>
			  </div>
			 
			';
			 
		}
	}
}

?>
<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

<!-- .center Sirve para centrar las imagenes de cada Card
     .caja sirve para darle formato a cada una de las Cards
-->
<style type="text/css">

    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%; }

  .caja
{
  border: 1px solid #999;
  box-sizing: border-box;
  color: #444;
  display: inline-block;
  margin:0.5%;
  padding:  1mm;
  vertical-align: top;
  width:  31.9%;

}
  </style>
 
</body>
</html>

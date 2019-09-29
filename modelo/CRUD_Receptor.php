<?php

$T = $_POST['t'];

if ($T == 'Leer') {

	$sql = unserialize($_POST['sql']);

	$row=$sql;

	foreach ($sql as $clave=>$valor)
   		{
   		if (is_numeric($clave)) {
   			}	
   			else{
   				echo $clave.": ".$valor;
   				echo "<br>";
   			}
   		
   		}
			

}
else{

	$stat = $_POST['s'];
	echo $stat;
}





?>
<?php

include 'conexion_Banco.php';

mysqli_query($conexion,"SET NAMES 'utf8'");

$T = $_POST['T'];

$Tj = $_POST['Tj'];
$Sl = $_POST['Sl'];
$Vn = $_POST['Vn'];
$CV = $_POST['Cv'];
$Tl = $_POST['Tl'];

if ($T == 'Crear') {
	
	$sql = "insert into tarjeta (`tarjeta`, `saldo`, `vencimiento`, `CVC`, `titular`) values ($Tj, $Sl, '$Vn', $CV, '$Tl')";

	if (mysqli_query($conexion,$sql)) {
        $stat="Tarjeta creada";
        ob_start(); 
                header("refresh:2; url=/Distribuidos/VinateriaWeb/vista/BancoCrud.html");
        ob_end_flush();
    } else {
        $stat = mysqli_error($conexion);
    }
    echo $stat;
}

elseif ($T == 'Leer') {

	$sql = "select * from tarjeta where tarjeta = $Tj";

	$sql = mysqli_query($conexion,$sql);

	if(!$sql){
			echo mysqli_error($conexion);
		}

		elseif(mysqli_num_rows($sql)==0){

			echo "No se encontro la tarjeta";
			
			ob_start(); 
			header("refresh:2; url=/Distribuidos/VinateriaWeb/vista/BancoCrud.html");
			ob_end_flush();
		}
		else{
			
			while ($row=mysqli_fetch_array($sql)) {

				echo "No. Tarjeta: ".$row[0];
				echo "<br>";

				echo "Saldo: ".$row[1];
				echo "<br>";

				echo "Vencimiento: ".$row[2];
				echo "<br>";

				echo "CVC: ".$row[3];
				echo "<br>";

				echo "Titular: ".$row[4];
				echo "<br>";
			}
		}

}

elseif ($T == 'Actualizar') {

	$ID = $Tj;

	$sql = "update tarjeta set tarjeta = $Tj, saldo = $Sl, vencimiento = '$Vn', CVC = $CV, titular = '$Tl' where tarjeta = $ID";

	if (mysqli_query($conexion,$sql)) {
        $stat="Tarjeta Actualizada";
        ob_start(); 
                header("refresh:2; url=/Distribuidos/VinateriaWeb/vista/BancoCrud.html");
        ob_end_flush();
    } else {
        $stat = mysqli_error($conexion);
    }
    echo $stat;
}

elseif ($T == 'Borrar') {

	$sql = "delete from tarjeta where tarjeta = $Tj";
	
	if (mysqli_query($conexion,$sql)) {
        $stat="Tarjeta Borrada";
        ob_start(); 
                header("refresh:2; url=/Distribuidos/VinateriaWeb/vista/BancoCrud.html");
        ob_end_flush();
    } else {
        $stat = mysqli_error($conexion);
    }
    echo $stat;
}

else{
	echo "error";
}




?>
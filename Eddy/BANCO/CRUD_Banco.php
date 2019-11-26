<?php
require_once '../libs/config.php';

$servername = SERVER;
$username = USER;
$password = PASS;
$dbname = "banco";

$conexion = new mysqli($servername, $username, $password, $dbname);
if ($conexion->connect_error) {
	die("Connection failed: " . $conexion->connect_error);
}

mysqli_query($conexion,"SET NAMES 'utf8'");

$T = $_POST['T'];

if ($T == 'CREAR') {

	$Tj = $_POST['Tj'];
	$Sl = $_POST['Sl'];
	$Vn = $_POST['Vn'];
	$CV = $_POST['Cv'];
	$Tl = $_POST['Tl'];

	//$Tl = htmlentities($Tl, ENT_COMPAT,'ISO-8859-1', true);
	$Tj = str_replace(" ", '', $Tj);
	
	$sql = "insert into tarjeta (`tarjeta`, `saldo`, `vencimiento`, `CVC`, `titular`) values ($Tj, $Sl, '$Vn', $CV, '$Tl')";

	if (mysqli_query($conexion,$sql)) {

        $stat="Tarjeta creada";

    } else {

        $stat = mysqli_error($conexion);

    }

    echo "<form name=form action=CRUD_Receptor_Banco.php method=post>";
	echo "<input type='hidden' name='s' value= '".$stat."'' >";
	echo "<input type='hidden' name='t' value= '".$T."'' >";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";

}

elseif ($T == 'LEER') {

	$Tj = $_POST['Tj'];
	$Tj = str_replace(" ", '', $Tj);

	$sql = "select * from tarjeta where tarjeta = $Tj";

	$sql = mysqli_query($conexion,$sql);

	if(!$sql){
			$stat = mysqli_error($conexion);
			$T = 'error';
			echo "<form name=form action=CRUD_Receptor_Banco.php method=post>";
			echo "string"; "<input type='hidden' name='s' value= '".$stat."'' >";
			echo "<input type='hidden' name='t' value= '".$T."'' >";
			echo "</form>";
			echo "<script language=javascript>document.form.submit();</script>";
		}
	elseif(mysqli_num_rows($sql)==0){

			$stat = "Sin Registros";
			$T = 'error';
			echo "<form name=form action=CRUD_Receptor_Banco.php method=post>";
			echo "<input type='hidden' name='s' value= '".$stat."'' >";
			echo "<input type='hidden' name='t' value= '".$T."'' >";
			echo "</form>";
			echo "<script language=javascript>document.form.submit();</script>";
		}

	else{

 
	$row = mysqli_fetch_array($sql);

 	echo "<form name=form action=CRUD_Receptor_Banco.php method=post>";
	echo "<input type='hidden' name='t' value= '".$T."'' >";
	echo "<input type='hidden' name='sql' value= '".serialize($row). "'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";

	}



}

elseif ($T == 'ACTUALIZAR') {

	$Tj = $_POST['Tj'];
	$Sl = $_POST['Sl'];
	$Vn = $_POST['Vn'];
	$CV = $_POST['Cv'];
	$Tl = $_POST['Tl'];

	//$Tl = htmlentities($Tl, ENT_COMPAT,'ISO-8859-1', true);
	$Tj = str_replace(" ", '', $Tj);

	$ID = $Tj;

	$sql = "update tarjeta set tarjeta = $Tj, saldo = $Sl, vencimiento = '$Vn', CVC = $CV, titular = '$Tl' where tarjeta = $ID";

	if (mysqli_query($conexion,$sql)) {
        $stat="Tarjeta Actualizada";
       echo "<form name=form action=CRUD_Receptor_Banco.php method=post>";
       echo "<input type='hidden' name='s' value= '".$stat."'' >";
       echo "<input type='hidden' name='t' value= '".$T."'' >";
       echo "</form>";
       echo "<script language=javascript>document.form.submit();</script>";
    } else {
        $stat = mysqli_error($conexion);
    }
    echo $stat;
}

elseif ($T == 'BORRAR') {

	$Tj = $_POST['Tj'];
	$Tj = str_replace(" ", '', $Tj);

	$sql = "delete from tarjeta where tarjeta = $Tj";
	
	if (mysqli_query($conexion,$sql)) {
        $stat="Tarjeta Borrada";
        echo "<form name=form action=CRUD_Receptor_Banco.php method=post>";
		echo "<input type='hidden' name='s' value= '".$stat."'' >";
		echo "<input type='hidden' name='t' value= '".$T."'' >";
		echo "</form>";
		echo "<script language=javascript>document.form.submit();</script>";
    } else {
        $stat = mysqli_error($conexion);
    }
    echo $stat;
}

else{
	echo "<form name=form action=CRUD_Receptor_Banco.php method=post>";
       echo "<input type='hidden' name='s' value= 'Error en la opereación'' >";
       echo "<input type='hidden' name='t' value= 'ERROR'' >";
       echo "</form>";
       echo "<script language=javascript>document.form.submit();</script>";
}


?>
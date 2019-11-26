<?php

include 'conexion_Banco.php';

mysqli_query($conexion,"SET NAMES 'utf8'");

$T = $_POST['T'];


if ($T == 'Crear') {

	$Id = $_POST['Id'];
	$Us = $_POST['Us'];
	$Pd = $_POST['Pd'];
	$Fc = $_POST['Fc'];
	$Ct = $_POST['Ct'];
	$Tt = $_POST['Tt'];
	$St = $_POST['St'];
	
	$sql = "insert into compra (`id`, `usuario`, `producto`, `fecha`,`cantidad`, `total`,`subtotal` ) values ($Id, '$Us', $Pd, '$Fc', $Ct, $Tt, $St)";

	if (mysqli_query($conexion,$sql)) {

        $stat="Compra creada";

    } else {

        $stat = mysqli_error($conexion);

    }
    echo "<form name=form action=CRUD_Receptor.php method=post>";
	echo "<input type='hidden' name='s' value= '".$stat."'' >";
	echo "<input type='hidden' name='t' value= '".$T."'' >";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";

}

elseif ($T == 'Leer') {

	$Id = $_POST['Id'];

 	$sql = "select * from compra where id = $Id";

	$sql = mysqli_query($conexion,$sql);

	if(!$sql){
			$stat = mysqli_error($conexion);
			$T = 'error';
			echo "<form name=form action=CRUD_Receptor.php method=post>";
			echo "string"; "<input type='hidden' name='s' value= '".$stat."'' >";
			echo "<input type='hidden' name='t' value= '".$T."'' >";
			echo "</form>";
			echo "<script language=javascript>document.form.submit();</script>";
		}
	elseif(mysqli_num_rows($sql)==0){

			$stat = "Sin Registros";
			$T = 'error';
			echo "<form name=form action=CRUD_Receptor.php method=post>";
			echo "<input type='hidden' name='s' value= '".$stat."'' >";
			echo "<input type='hidden' name='t' value= '".$T."'' >";
			echo "</form>";
			echo "<script language=javascript>document.form.submit();</script>";
		}

	else{

 
	$row = mysqli_fetch_array($sql);

 	echo "<form name=form action=CRUD_Receptor.php method=post>";
	echo "<input type='hidden' name='t' value= '".$T."'' >";
	echo "<input type='hidden' name='sql' value= '".serialize($row). "'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";

	}



}

elseif ($T == 'Actualizar') {

	$Id = $_POST['Id'];
	$Us = $_POST['Us'];
	$Pd = $_POST['Pd'];
	$Fc = $_POST['Fc'];
	$Ct = $_POST['Ct'];
	$Tt = $_POST['Tt'];
	$St = $_POST['St'];

	$IDe = $Id;

	$sql = "update compra set id = $Id, usuario = '$Us', producto = $Pd, fecha = '$Fc', cantidad = $Ct, total = $Tt, subtotal = $St where id = $IDe";

	if (mysqli_query($conexion,$sql)) {
        $stat="Compra Actualizada";
       echo "<form name=form action=CRUD_Receptor.php method=post>";
       echo "<input type='hidden' name='s' value= '".$stat."'' >";
       echo "<input type='hidden' name='t' value= '".$T."'' >";
       echo "</form>";
       echo "<script language=javascript>document.form.submit();</script>";
    } else {
        $stat = mysqli_error($conexion);
    }
    echo $stat;
}

elseif ($T == 'Borrar') {

	$Id = $_POST['Id'];

 	$sql = "delete from compra where id = $Id";
	
	if (mysqli_query($conexion,$sql)) {
        $stat="Compra Borrada";
        echo "<form name=form action=CRUD_Receptor.php method=post>";
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
	echo "error";
}




?>
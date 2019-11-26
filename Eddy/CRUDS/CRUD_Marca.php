<?php

include 'conexion_Banco.php';

mysqli_query($conexion,"SET NAMES 'utf8'");

$T = $_POST['T'];


if ($T == 'Crear') {

	$Id = $_POST['Id'];
	$Nm = $_POST['Nm'];
	$Og = $_POST['Og'];

	
	$sql = "insert into marca (`id`, `nombre`, `origen`) values ($Id, '$Nm', '$Og')";

	if (mysqli_query($conexion,$sql)) {

        $stat="Marca creada";

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

  	$sql = "select * from marca where id = $Id";

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
	$Nm = $_POST['Nm'];
	$Og = $_POST['Og'];

	$IDe = $Id;

	$sql = "update marca set id = $Id, nombre = '$Nm', origen = '$Og' where id = $IDe";

	if (mysqli_query($conexion,$sql)) {
        $stat="Marca Actualizada";
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

 	$sql = "delete from marca where id = $Id";
	
	if (mysqli_query($conexion,$sql)) {
        $stat="Marca Borrada";
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
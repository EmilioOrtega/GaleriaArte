<?php

include 'conexion_Banco.php';

mysqli_query($conexion,"SET NAMES 'utf8'");

$T = $_POST['T'];


if ($T == 'Crear') {

	$Id = $_POST['Id'];
	$Nm = $_POST['Nm'];
	$Cd = $_POST['Cd'];
	$Cg = $_POST['Cg'];
	$Pc = $_POST['Pc'];
	$Dp = $_POST['Dp'];
	$Ct = $_POST['Ct'];
	$Ig = $_POST['Ig'];
	$Dc = $_POST['Dc'];
	$Mc = $_POST['Mc'];
	
	$sql = "insert into producto (`id`, `nombre`, `contenido`, `categoria`,`precio`, `descripcion`, `cantidad`, `imagen`, `descuento`, `marca`) values ($Id, '$Nm', $Cd, $Cg, $Pc, '$Dp', $Ct, '$Ig', $Dc, $Mc)";

	if (mysqli_query($conexion,$sql)) {

        $stat="Producto creado";

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

    $sql = "select * from producto where id = $Id";

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
	$Cd = $_POST['Cd'];
	$Cg = $_POST['Cg'];
	$Pc = $_POST['Pc'];
	$Dp = $_POST['Dp'];
	$Ct = $_POST['Ct'];
	$Ig = $_POST['Ig'];
	$Dc = $_POST['Dc'];
	$Mc = $_POST['Mc'];

	$IDe = $Id;

	$sql = "update producto set id = $Id, nombre = '$Nm', contenido = $Cd, categoria = $Cg, precio = $Pc, descripcion = '$Dp', cantidad = $Ct, imagen = '$Ig', descuento = $Dc, marca = $Mc where id = $IDe";

	if (mysqli_query($conexion,$sql)) {
        $stat="Producto Actualizado";
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

  $sql = "delete from producto where id = $Id";
	
	if (mysqli_query($conexion,$sql)) {
        $stat="Producto Borrado";
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
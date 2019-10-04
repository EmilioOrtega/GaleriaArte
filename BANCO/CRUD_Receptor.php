<html>
<head>
    <title>Informaci&oacute;n del banco</title>
</head>

<link rel="stylesheet" href="general.css">
<body style="background-image: linear-gradient(90deg, #395dba, #39b4e3);">

    <!-- This audio track is the background music and it shouldn't be moved or modified -->
    <audio autoplay loop>
        <source src="res/menu_loop.ogg" type="audio/mpeg" />
    </audio>    
        
        <h1  align=center style="font-size: 60px; font-family: BurBigConBlack; font-weight: normal; color: white"> BANCO </h1>

    <table bgcolor="black" align="center" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <th style="font-family: BurBigConBold; font-size: 50px; text-align: center; background-image: linear-gradient(to right, #1d243f, #363c53); padding: 25px">

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
                     if($T == "ERROR"){
                        echo "
                        <img src='res/cancel.svg' alt='Credit card icon.'' width='50px' height='50px'>";
                        echo $stat;
                        echo "
                        <audio autoplay>
                        <source src='res/error_alert.mp3' type='audio/mpeg'/>
                        </audio>  
                        ";
                     }
                     else
                     {
                        echo "
                        <img src='res/info-button.svg' alt='Credit card icon.'' width='50px' height='50px'>";
                        echo $stat;
                        echo "
                        <audio autoplay>
                        <source src='res/updated_alert.mp3' type='audio/mpeg'/>
                        </audio>  
                        ";
                     }
                  }
                  ?>
                </th>
            </tr>
        </tbody>
    </table>
</body>
</html>
<html>
<head>
    <title>Bancoco - Informaci&oacute;n</title>

    <script type="text/javascript">
    
    // Mouseover/ Click sound effect- by JavaScript Kit (www.javascriptkit.com)
// Visit JavaScript Kit at http://www.javascriptkit.com/ for full source code

//** Usage: Instantiate script by calling: var uniquevar=createsoundbite("soundfile1", "fallbackfile2", "fallebacksound3", etc)
//** Call: uniquevar.playclip() to play sound

var html5_audiotypes={ //define list of audio file extensions and their associated audio types. Add to it if your specified audio file isn't on this list:
    "mp3": "audio/mpeg",
    "mp4": "audio/mp4",
    "ogg": "audio/ogg",
    "wav": "audio/wav"
}

function createsoundbite(sound){
    var html5audio=document.createElement('audio')
    if (html5audio.canPlayType){ //check support for HTML5 audio
        for (var i=0; i<arguments.length; i++){
            var sourceel=document.createElement('source')
            sourceel.setAttribute('src', arguments[i])
            if (arguments[i].match(/\.(\w+)$/i))
                sourceel.setAttribute('type', html5_audiotypes[RegExp.$1])
            html5audio.appendChild(sourceel)
        }
        html5audio.load()
        html5audio.playclip=function(){
            html5audio.pause()
            html5audio.currentTime=0
            html5audio.play()
        }
        return html5audio
    }
    else{
        return {playclip:function(){throw new Error("Your browser doesn't support HTML5 audio unfortunately")}}
    }
}

//Initialize two sound clips with 1 fallback file each:

var mouseoversound=createsoundbite("res/hover_button.mp3")
var clicksound=createsoundbite("click.ogg", "click.mp3")

</script>

</head>

<link rel="stylesheet" href="general.css">
<body style="background-image: linear-gradient(90deg, #395dba, #39b4e3);">

    <!-- This audio track is the background music and it shouldn't be moved or modified -->
    <audio autoplay loop>
        <source src="res/menu_loop.ogg" type="audio/mpeg" />
    </audio>    
        
        <h1  align=center style="font-size: 60px; font-family: BurBigConBlack; font-weight: normal; color: white"> BANCOCO </h1>

    <table bgcolor="black" align="center" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <th style="font-family: BurBigConBold; font-size: 50px; text-align: center; background-image: linear-gradient(to right, #1d243f, #363c53); padding: 25px">

                    <?php
                    $T = $_POST['t'];
                    if ($T == 'LEER') {
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

            <tr>
               <td style="background: #2b3755" align="center">
                  <form name=form action=index.html method=post>
                     <input onmouseover="mouseoversound.playclip()" type="submit" name="goBack" value="REGRESAR">
                  </form>
               </td>
            </tr>
        </tbody>
    </table>

</body>
</html>
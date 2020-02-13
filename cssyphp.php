
 <!DOCTYPE>
    <html>
      <head>
      <title>Buenos días</title>
     <link ref ='stylesheet' type = 'text/css' href = 'estilos.css'>
      </head>
      <body>
      </body>
    </html>
    <?php
    $hora = date("H");
    $minutos = date("i");
function saluda($nombre, $hora, $minutos){
    $segundos = date("s");
    $mes = date("n");
    $dia = date("j");
    $año = date("Y");
    if ($hora >= 7 && $hora<= 11) 
    {
        # code...
        $timelapse = "Buenos días";
    }
        elseif ($hora == 12 && $minutos <30)
        {
            $timelapse = "Buenos dias";
        }
            elseif ($hora >= 13 && $hora <= 19)
            {
                $timelapse= "Buenas tardes";
            } 
                elseif ($hora == 12 && $minutos >= 30) 
                {
                    $timelapse = "Buenas tardes";
                }
                    else
                    {
                    $timelapse = "buenas noches" ;
                    }
    if ($mes ==1) {
        $mes = "Enero";
        echo $mes;
        }elseif ($mes ==2) {
         $mes = "Febrero";
            }elseif ($mes ==3) {
            $mes = "Marzo";
                }elseif ($mes ==4) {
                $mes = "Abril";
                    }elseif ($mes ==5) {
        $mes = "Mayo";
    }elseif ($mes == 6) {
        $mes = "Junio";
    }elseif ($mes == 7) {
        $mes = "Julio";
    }elseif ($mes == 8) {
        $mes = "Agosto";
    }elseif ($mes == 9) {
        $mes = "Septiembre";
    }elseif ($mes ==10) {
        $mes = "Octubre";
    }elseif ($mes == 11) {
        $mes = "Noviembre";
    }else {
        $mes = "Diciembre";
    }
    echo "<p>$timelapse, $nombre son las $hora:$minutos:$segundos  horas del $dia de $mes del $año</p>";

}
$nombre = "Luis";
$hora = "12";
$minutos ="40";
saluda("Luis",$hora,$minutos);
?>
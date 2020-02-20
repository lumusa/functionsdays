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
        $fondo = "BGD";
    }
        elseif ($hora == 12 && $minutos <30)
        {
            $timelapse = "Buenos dias";
            $fondo = "BGD";
        }
            elseif ($hora >= 13 && $hora <= 19)
            {
                $timelapse= "Buenas tardes";
                $fondo = "BGT";
            } 
                elseif ($hora == 12 && $minutos >= 30) 
                {
                    $timelapse = "Buenas tardes";
                    $fondo = "BGT";
                }
                    else
                    {
                    $timelapse = "buenas noches" ;
                    $fondo = "BGN";
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
function DameColor($hora, $minutos){
    if ($hora >= 7 && $hora<= 11) 
    {
        $fondo = "BGD";
    }
        elseif ($hora == 12 && $minutos <30)
        {
            $fondo = "BGD";
        }
            elseif ($hora >= 13 && $hora <= 19)
            {
                $fondo = "BGT";
            } 
                elseif ($hora == 12 && $minutos >= 30) 
                {
                    $fondo = "BGT";
                }
                    else
                    {
                    $fondo = "BGN";
                    }
    echo $fondo;
}
echo saluda('Luis', $hora, $minutos)
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel = "stylesheet" href="css/estilosdias.css">

    <title>Hello, world!</title>
  </head>
  <body class= <?php DameColor($hora, $minutos)?>>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
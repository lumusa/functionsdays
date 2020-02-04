<?php
function dimeEstacion(){
    $dia = date('z');
    if ($dia < 79) {
       $estacion = 'invierno';
        # code...
    }elseif ($dia <171) {
        # code...
        $estacion = 'primavera';
    }elseif ($dia < 263) {
        # code...
        $estacion = 'verano';
    }elseif ($dia < 267) {
        $estacion = 'otoño';
        # code...
    }else {
        $estacion = 'invierno';
        # code...
    }
    return $estacion;
}
dimeEstacion();
?>
<?php
function dimeEstacion(){
    $dia = date('z');
    if ($dia < 79) {
        echo "Estamos en invierno";
        # code...
    }elseif ($dia <171) {
        # code...
        echo "Estamos en primavera";
    }elseif ($dia < 263) {
        # code...
        echo "Estamos en verano";
    }elseif ($dia < 267) {
        echo "Estamos en otoño";
        # code...
    }else {
        echo "Estamos en invierno";
        # code...
    }
}
dimeEstacion();
?>
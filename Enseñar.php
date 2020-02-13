<?php
function buscaCaracter(){
    $caracter = "comida";
    $cadena = "No hay ninguna cadena como la que se busca";
    $posición = strpos($cadena,$caracter);
    if ($posición ==false) {
        echo "No hay ninguna cadena como la que se busca";
    }else{
        echo "La palabra  $caracter existe y esta en la posición $posición";
    }
}
buscaCaracter( );
?>
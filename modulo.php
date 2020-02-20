<?php
function DameModulo($x, $y,$z){
    $vector = array ($x,$y,$z);
    $potenciax = pow($vector[0],2);
    $potenciay = pow($vector[1],2);
    $potenciaz=pow($vector[2],2);
    $suma = $potenciax + $potenciay + $potenciaz;
    $raiz = sqrt($suma);
    echo "El vector de coordenadas de X = $vector[0], Y = $vector[1], Z = $vector[2] es $raiz";

}
DameModulo('3','1','1');
?>
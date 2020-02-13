<?php
function DameModulo($x, $y, $z){
        $vector = array ($x,$y,$z);
        $potencia = sqrt(pow($vector[0],2) + pow($vector[1],2) + pow($vector[2],2));
        echo "El vector de coordenadas de X = $vector[0], Y = $vector[1], Z = $vector[2] es $potencia";
}
DameModulo('3', '2', '5');
?>
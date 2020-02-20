<?php
function calculaUnitario($x, $y,$z){
$vector = array($x,$y,$z);
$modulo = sqrt(pow($vector[0],2)+ pow($vector[1],2)+ pow($vector[2],2));
$unitario = array($x/$modulo, $y/$modulo, $z/$modulo);
$unitario1 = sqrt(pow($unitario[0],2) + pow($unitario[1],2)+ pow($unitario[2],2));
echo "<p>El vector unitario de $x, $y, $z es $unitario[0] , $unitario[1], $unitario[2]</p>";
echo "Ya que si se comprueba el resultado es:  ";
echo $unitario1;
}
calculaUnitario('14','300','2');
?>
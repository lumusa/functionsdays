<?php
/* Hay que tener en cuenta que la distancia se puede calcular de 2 formas, una desde una perspectiva vectorial y otra modular
La vectorial es dando la diferencia de 3 puntos i, j, k (2 ,2, 2)  y la modular dando el vector que es la suma de los cuadrados
dividida entre dos */
function CalculaDistancia($x, $y, $z, $i, $j, $k){
    $vector = array ($x,$y,$z);
    $potencia = sqrt(pow($vector[0],2) + pow($vector[1],2) + pow($vector[2],2));
    $vector2 = array ($i,$j,$k);
    $potencia2 = sqrt(pow($vector2[0],2) + pow($vector2[1],2) + pow($vector2[2],2));
    $distanciamod =abs($potencia - $potencia2);
    $pruebavec = array ($x - $i, $y-$j, $z - $k);
    $potenciaf = sqrt(pow($pruebavec[0],2) + pow($pruebavec[1],2) + pow($pruebavec[2],2));
    echo "<h1> Distancia</h1>";
    echo  "<h2> Distancia modular</h2>
    <p>La distancia modular, siempre es positiva y en este caso es $potenciaf</p>";
    echo "<h2> Distancia Vectorial</h2>
    <p>La distancia vectorial, tiene 3 puntos, que si pueden ser negativos, X, Y, Z: $pruebavec[0], $pruebavec[1], $pruebavec[2]</p>";
}
CalculaDistancia('4','2','2', '1','1','1');
?>
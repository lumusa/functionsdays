<?php
echo date("j/n/Y");
echo "<br/>";
echo date("z");

function dimeEstacion(){
    $day = date("j");
    $month =date("n");
if ($day >=21 && $month ==3) {
    # code...
    echo "Ya es primavera";
}elseif ($day >= 1 && $month == 4) {
    # code...
    echo "Ya es primavera";
}elseif ($day >= 1 && $month == 5) {
    # code...
    echo "Ya es primavera";
}elseif ($day <=20 && $month ==6) {
    # code...
    echo "Ya es primavera";
}elseif ($day >=21 && $month == 6) {
    # code...
    echo "Ya es verano";
}elseif ($day >=1 && $month == 7) {
    # code...
    echo "Ya es verano";
}elseif($day >=1 && $month ==8){
    echo "Ya es verano";
}elseif ($day <=20 && $month == 9) {
    # code...
    echo "Ya es verano";
}elseif ($day >=21 && $month == 9) {
    # code...
    echo "Ya es otoño";
}elseif ($day >= 1 &&  $month ==10) {
    echo "Ya es otoño";
    # code...
}elseif ($day >= 1 && $month == 11) {
    # code...
    echo "Ya es otoño";
}elseif ($day <=20 && $month ==12) {
    # code...
    echo "Ya es otoño";
}else {
    # code...
    echo "Ya es invierno";
}
}
echo "<br/>";
dimeEstacion();
?>
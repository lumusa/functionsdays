<?php
function fibo($valor){
$inverso = 0;
for ($i=$valor; $i = $inverso; $i--) { 
    $receptor = $valor-1;
    $receptor2 = $valor -2;
   $total = $receptor + $receptor2 ;
}
    echo "el valor de fibonnacci para $valor es $total";
}
fibo('20');
?>
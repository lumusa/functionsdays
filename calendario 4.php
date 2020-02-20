<?php
$dia = date("j");
$mes = date("n");
echo date("j/n/y");
$dia = date("j");
$mes = date("n");
function dimeEstacion4($dia, $mes){
    $dia = date("j");
    $mes = date("n");
    echo "</br>";
switch ($dia) {
    case '$dia >= 21 && $mes ==3 ':
        # code...
        echo "Es primavera";
        break;
    case'$dia >= 1 && $mes == 4 ':
        echo " Es primavera";
    break;
    case '$dia >= 1 && $mes == 5':
        # code...
        echo "Es primavera";
    break;
    case '$dia <=20 && $mes == 6':
        echo "Es primavera";
    break;
    case '$dia >= 21 && $mes ==6 ':
        echo "Es verano";
        break;
    case'$dia >= 1 && $mes == 7 ':
        echo " Es verano";
    break;
        case '$dia >= 1 && $mes == 8':
            echo "Es verano";
        break;
        case '$dia <=20 && $mes == 9':
            echo "Es verano";
            break;
        case '$dia >= 21 && $mes ==9 ':
            echo "Es Otoño";
                break;
            case'$dia >= 1 && $mes == 10 ':
                echo " Es Otoño";
            break;
            case '$dia >= 1 && $mes == 11':
                # code...
                echo "Es Otoño";
            break;
            case '$dia <=20 && $mes == 12':
                # code...
                echo "Es Otoño";
                break;
    default:
        echo "Es invierno";
}
}
dimeEstacion4(5,7);
?>
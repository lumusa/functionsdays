<?php
$detector = $_SERVER['HTTP_USER_AGENT'];
function dimeNavegador($detector){
    if (strpos($detector, 'MSIE')==true) {
        echo "El navegador usado es Internet Explorer, puede que la pagina tarde unas horas en cargarse";
    }elseif (strpos($detector,'Edge')==true) {
        echo "El navegador que usas es el Microsoft Edge, ¿sabías que con el puedes tomar apuntes? ";
    }elseif (strpos($detector, 'Firefox')==true) {
        echo "El navegador que usa es Firefox, Como dato curioso, este navegador usa lagartos para moverse ";
    }elseif (strpos($detector,'Chrome' )==true) {
        echo "El navegador que usas es Google Chrome, si tu navegador no funciona siempre puedes usar el dinosaurio";
    }elseif (strpos($detector,'Opera')||(strpos($detector,'OPR'))==TRUE) {
        echo "Usas Opera, existe una versión mini de Opera que este programa en teoría no debería detectar";
    }elseif (strpos($detector,'Safari')==true) {
        echo "Usas el navegador exclusivo para los dispositivos distribuidos por apple, hay una versión exclusiva de esta página por 500$";
    }elseif (strpos($detector,'Trident')==true) {
        echo "El navegador usado es Internet Explorer, puede que la pagina tarde unas horas en cargarse";
    }
    else {
        echo "Tu navegador no esta en nuestra lista de datos, lo sentimos llame al servicio técnico";
    }
}
echo dimeNavegador($detector);
?>
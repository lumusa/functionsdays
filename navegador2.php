<?php
$detector = $_SERVER['HTTP_USER_AGENT'];
function dimeNavegador($detector){
    if (strpos($detector, 'MSIE')==true) {
        $array = array("El navegador usado es Internet Explorer, puede que la pagina tarde unas horas en cargarse", "Esta página no existía aún en el 98", "¡últimas noticias, el hombre acaba de llegar a la luna!", "Cargando...", "Redireccionando a Mozilla <a href = 'https://www.mozilla.org/es-ES/firefox/'> Pinche aquí </a>");
        $numero = rand(0,4);
        echo "$array[$numero]";
    }elseif (strpos($detector,'Edge')==true) {
        $array = array("El navegador que usas es el Microsoft Edge, ¿sabías que con el puedes tomar apuntes? ", "El navegador que usas es altamente personalizable, hablamos de Microsoft Edge", "Si tienes a Cortana, puedes incorporarla como tu asistente personal de navegador", "Su navegador es microsoft Edge Importa sus favoritos desde otro navegador", "¿Has prubado a usar las redes sociales que tienes a la izquierda?");
        $numero = rand(0,4);
        echo "$array[$numero]";
    }elseif (strpos($detector, 'Firefox')==true) {
        $array = array("El navegador que usa es Firefox, Como dato curioso, este navegador usa lagartos para moverse ","Su navegador, Firefox, es código abierto", "El navegador de firefox ha sido traducido por volutarios a un total de 90 idiomas", "Firefox creo el primer navegador diseñado para desarrolladores");
        $numero = rand(0,3);
        echo "$array[$numero]";
    }elseif (strpos($detector,'Chrome' )==true) {
        $array = array("El navegador que usas es Google Chrome, si tu navegador no funciona siempre puedes usar el dinosaurio", "Google casi se llama  Backrub", "El primer empleado de Google fue Craig Silverstein", "Te reto a buscar 'ElgooG.im' seguro te diviertes o mejor dicho setreivid et oruges 'mi.google' racsub a oter eT.N ?alom euq alom emorhc¿");
        $numero = rand(0,2);
        echo "$array[$numero]";
    }elseif (strpos($detector,'Opera')||(strpos($detector,'OPR'))==TRUE) {
        $array = array("Usas Opera, existe una versión mini de Opera que este programa en teoría no debería detectar", "Opera usa una cámara para saber la posicion de la cabeza y te permite jugar a algunos minijuegos con esta función", "Despues de muchos años tu navegador Opera ya tiene temas");
        $numero = rand(0,2);
        echo "$array[$numero]";
    }elseif (strpos($detector,'Safari')==true) {
        $array = array("Usas el navegador exclusivo para los dispositivos distribuidos por apple, hay una versión exclusiva de esta página por 500$", "Me sienta mal que me mires mientras cagas en un retrete de oro", "Ya me ha quedado claro, tienes mas nivel adquisitivo que yo, ahora comprate un windows", "Los pobres tambien tienen derecho a programar", "Sabes que todas las mujeres que usan algo de apple, suelen ser las mas flacas ¿crees que es casualidad o un ajuste presupuestario?");
        $numero = rand(0,4);
        echo "$array[$numero]";
    }elseif (strpos($detector,'Trident')==true) {
       $array = array("El navegador usado es Internet Explorer, puede que la pagina tarde unas horas en cargarse", "Esta página no existía aún en el 98", "¡últimas noticias, el hombre acaba de llegar a la luna!", "Cargando...", "Redireccionando a Mozilla <a href = 'https://www.mozilla.org/es-ES/firefox/'> Pinche aquí </a>");
       $numero = rand(0,4);
       echo "$array[$numero]";
    }
    else {
        echo "Tu navegador no esta en nuestra lista de datos, lo sentimos llame al servicio técnico";
    }
}
echo dimeNavegador($detector);
?>
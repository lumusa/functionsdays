<?php
date_default_timezone_set('GMT'); 
$hoy = getdate();
$hora = $hoy['hours'];
$minuro = $hoy['minuts'];
echo "$hora";
if ($hora) {
    # code...
}
?>

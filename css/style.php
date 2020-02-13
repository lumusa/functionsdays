<?php
header("Content-Type: text/css; charset: UTF-8");
if ($timelapse == "Buenos dias") {
    $background = "#f6ff83";
    # code...
}elseif ($timelapse == "Buenas tardes") {
    $background = "#8ff1fe";
}else {
    $background="#000000";
}
?>

body {
    background: <?php echo $background;?>
}
<?php
$fechahoy = date('y/m/d H:i:s');
$siguienteSemana = time() + (7 * 24 * 60 * 60);
$fechaExpira = date('y/m/d H:i:s', $siguienteSemana). "<br>";

echo '<b>Fecha de creacion de cookie: </b>'.$fechahoy. '<br>';
echo '<b>Fecha de vencimiento de cookie: </b>'.$fechaExpira. '<br>';

setcookie("ultimavista", $fechahoy,time() + (7 * 24 * 60 * 60));

?>
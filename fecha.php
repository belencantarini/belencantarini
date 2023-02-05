<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$dias = array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo');
$fecha_actual = $dias[date('N')-1] . ', ' . date('d') . ' de ' . $meses[date('n')-1] . ' de ' . date('o') . '.'; 
$hora_actual = date('H:i:s') . ' hs.';
?>
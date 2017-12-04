<?php
//Conexion a la base de datos
$conexion = mysql_connect("localhost","root","")
or die("No se pudo connectar con el servidor MySQL");

//Seleccionar la base de datos
$db = mysql_select_db("bd_proyecto",$conexion);
?>
<?php
require("..\conexionBD\abrirConexion.php");//conectar a la base de datos
session_start();
$consulta = "SELECT * FROM casos WHERE casos.ID = ".$_GET['IDcaso']." LIMIT 1";//Consulta SQL
$resultado = mysql_query($consulta) or die("No se pudo seleccionar la base de datos");//Ejecución de la consulta

while ($fila = mysql_fetch_array($resultado)){//Para recoger los datos de resultado

	$_SESSION['ID']=$fila['ID'];
	$_SESSION['descripcion']=$fila['descripcion'];
	$_SESSION['contenido']=$fila['contenido'];
	require("..\conexionBD\cerrarConexion.php");//cerrar conexion a la base de datos
	 echo '<meta http-equiv="Refresh" content="0;url=..\..\html\caso.php">';
   }

 ?>
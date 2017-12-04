

<?php
require("carpinteria_php\conexionBD\abrirConexion.php");//conectar a la base de datos

$consulta = "SELECT monto FROM donaciones WHERE ID_caso=".$_SESSION['ID']."";//Consulta SQL
$resultado = mysql_query($consulta) or die("No se pudo seleccionar la base de datos");//Ejecución de la consulta
$montoD=0;
while ($fila = mysql_fetch_array($resultado)){

	$montoD += $fila['monto'];
    }

$consulta = "SELECT monto FROM pagos WHERE ID_caso=".$_SESSION['ID']."";//Consulta SQL
$resultado = mysql_query($consulta) or die("No se pudo seleccionar la base de datos");//Ejecución de la consulta
$montoP=0;
while ($fila = mysql_fetch_array($resultado)){

	$montoP += $fila['monto'];
    }

require("carpinteria_php\conexionBD\cerrarConexion.php");//cerrar conexion a la base de datos
 //CARGAR LOS RESULTADOS EN PANTALLA
	echo '<strong>Dinero donado por los aportantes a este caso: </strong> <p>$'.$montoD.'</p>';
	echo'<br>';
	echo '<strong>Dinero pagado en alimentos a este caso: </strong> <p>$'.$montoP.'</p>';
 ?>
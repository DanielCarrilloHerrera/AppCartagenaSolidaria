<?php 
session_start();

require("..\conexionBD\abrirConexion.php"); //Conectar con la base de datos

$consulta = "INSERT INTO donaciones VALUES (".$_SESSION['ID'].",
                                           '".$_SESSION['IDU']."',
                                           '".$_POST['numeroCuenta']."',
                                           '".$_POST['banco']."',
                                           '".$_POST['monto']."');";//Consulta SQL
if($resultado = mysql_query($consulta)){
	require("..\conexionBD\cerrarConexion.php");
  echo '<meta http-equiv="Refresh" content="0;url=..\..\caso.php">';
} 
else {
echo 'No se pudo realizar la inserción';
require("..\conexionBD\cerrarConexion.php");
echo '<meta http-equiv="Refresh" content="0;url=..\..\caso.php">';
}//Ejecución de la consulta




?>
<?php 
session_start();
require("..\conexionBD\abrirConexion.php"); //Conectar con la base de datos


$consulta = "SELECT ID, nombres ,e_mail, password, superusuario FROM usuarios  WHERE e_mail = '".$_POST['email']."' AND password = '".$_POST['password']."';";//Consulta SQL
$resultado = mysql_query($consulta) or die("No se pudo realizar la consulta");//Ejecución de la consulta

$nfilas = mysql_num_rows($resultado);

if (($nfilas > 0)&&($nfilas<2)){
	while($fila = mysql_fetch_array($resultado, MYSQL_ASSOC))
	{ 
      $_SESSION['IDU']= $fila['ID'];
      $_SESSION['nombres'] = $fila['nombres'];
	  $_SESSION['superusuario'] = $fila['superusuario'];
      require("..\conexionBD\cerrarConexion.php"); //Cerrar la conexion con la base de datos
      echo '<meta http-equiv="Refresh" content="0;url=../../html/home.php">';//Redirigir a home
    }
   
}
 else{
    	$_SESSION['login'] = false;
    	require("..\conexionBD\cerrarConexion.php"); //Cerrar la conexion con la base de datos
    	 echo '<meta http-equiv="Refresh" content="0;url=../../html/login.php">';//Redirigir a home
}
?>
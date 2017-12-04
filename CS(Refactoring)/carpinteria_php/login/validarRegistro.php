<?php 
session_start();

if (strcmp($_POST['password'], $_POST['password2']) != 0)//Si las contraseñas no coinciden{
{
	$_SESSION['badPass']=true;
	//echo '<meta http-equiv="Refresh" content="0;url=../loginForm.php">';
}
else{
  $_SESSION['badPass']=NULL;  
}

require("..\conexionBD\abrirConexion.php"); //Conectar con la base de datos

$consulta = "SELECT e_mail FROM usuarios"; //Consulta SQL
$resultado = mysql_query($consulta) or die("Error validando email");
  while($fila = mysql_fetch_array($resultado, MYSQL_ASSOC))
  { 
      if ($_POST['email'] == $fila['e_mail'])
      {
        require("..\conexionBD\cerrarConexion.php"); //Cerrar la conexion con la base de datos
        $_SESSION['emailExits'] =true;
        echo '<meta http-equiv="Refresh" content="0;url=..\..\html\loginForm.php">';//Redirigir a formulario de login
      }
      
    }

 //-------------------------------------------------------------------------

$consulta = "INSERT INTO usuarios VALUES (NULL, '".$_POST['nombres']."',
                                                '".$_POST['apellidos']."',
                                                '".$_POST['email']."', 
                                                '".$_POST['password']."', 
                                                 0);";//Consulta SQL
if($resultado = mysql_query($consulta)){
	require("..\conexionBD\cerrarConexion.php");
  $_SESSION['nombres'] =$_POST['nombres'];
  $_SESSION['superusuario'] = 0;

  echo '<meta http-equiv="Refresh" content="0;url=..\..\html\home.php">';
} 
else {
echo 'No se pudo realizar la inserción';
require("cerrarConexion.php");
echo '<meta http-equiv="Refresh" content="0;url=..\..\html\loginForm.php">';
}//Ejecución de la consulta


?>
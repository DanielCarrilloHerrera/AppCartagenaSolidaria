<?php 
session_start();

require("..\conexionBD\abrirConexion.php"); //Conectar con la base de datos

$consulta = "SELECT COUNT(*) FROM casos";
$numero_Casos=mysql_fetch_array(mysql_query($consulta));

$consulta = "INSERT INTO casos VALUES (".$numero_Casos['COUNT(*)'].", '".
	                                  $_POST['descripcion']."', '".
                                      $_POST['contenido']."', '".
                                      basename($_FILES['imagen']['name'])."');";//Consulta SQL
if($resultado = mysql_query($consulta)){
	
echo '<meta http-equiv="Refresh" content="0;url=..\..\home.php">';
} 
else {
echo 'No se pudo realizar la inserción';

//require("..\conexionBD\cerrarConexion.php");//Cerrar conexion con base de datos

//echo '<meta http-equiv="Refresh" content="0;url=..\..\home.php">';
}//Ejecución de la consulta





//Guardar la imagen en el servidor

$carpeta = "..\..\img-casos\\";

$carpeta += $_FILES['imagen']['name'];

if ($_FILES['imagen']['size']>200000)//Tamaño muy grande
{
	$_SESSION['imgTooBig'] = "El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo";
  //  require("..\conexionBD\cerrarConexion.php");
    //echo '<meta http-equiv="Refresh" content="0;url=..\..\casoForm.php">';

}

if (!($_FILES['imagen']['type'] =="image/pjpeg" OR $_FILES['imagen']['type'] =="imag0e/png"))//Formato incorrecto de archivo
{	
	$_SESSION['imgBadType'] = " Tu archivo tiene que ser JPG o PNG. Otros archivos no son permitidos.";
//	 require("..\conexionBD\cerrarConexion.php");
      //echo '<meta http-equiv="Refresh" content="0;url=..\..\casoForm.php">';
	
}

copy ($_FILES['imagen']['tmp_name'], $carpeta);
//echo '<meta http-equiv="Refresh" content="0;url=..\..\casoForm.php">';

//require("..\conexionBD\cerrarConexion.php");

?>
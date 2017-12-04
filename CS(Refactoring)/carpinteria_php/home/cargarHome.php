

<?php
require("..\carpinteria_php\conexionBD\abrirConexion.php");//conectar a la base de datos

$consulta = "SELECT ID,descripcion,imagen FROM casos ORDER BY ID DESC";//Consulta SQL
$resultado = mysql_query($consulta) or die("No se pudo seleccionar la base de datos");//Ejecución de la consulta

while ($fila = mysql_fetch_array($resultado)){

    //CARGAR LOS RESULTADOS EN PANTALLA
    $_SESSION['caso'.$fila['ID'].''] = $fila['ID'];
	echo ' <div class="jumbotron">
				<div class="media">
					
                    <div class="media-left">
						<a href="#"><img src="img-casos/'.$fila['imagen'].'" width=64, height=64></a>
					</div>

					<div class="media-body">
					<p>Caso #'.$fila['ID'].'</p>
					'.
						$fila['descripcion'].
						'<br>

						<form action="..\carpinteria_php\caso\redirigirCaso.php" method="get">
                           <input type="hidden" value="'.$fila['ID'].'" name="IDcaso">
                          <input type="submit" class="btn btn-lg btn-link" value="Ir al caso">
                       </form>
					</div>
	    	</div>
	    </div>

	   <br>
	   <br>
	   <br>
	   <br>
	   <br>';}

require("..\carpinteria_php\conexionBD\cerrarConexion.php");//cerrar conexion a la base de datos
 ?>
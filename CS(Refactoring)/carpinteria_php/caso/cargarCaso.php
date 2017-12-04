<?php
require("abrirConexion.php");//conectar a la base de datos

$consulta = "SELECT ID,descripcion,conternido FROM casos WHERE ID="$_['']"";//Consulta SQL
$resultado = mysql_query($consulta) or die("No se pudo seleccionar la base de datos");//Ejecución de la consulta

while ($fila = mysql_fetch_array($resultado)){

    //CARGAR LOS RESULTADOS EN PANTALLA
	/*echo ' <div class="jumbotron">
				<div class="media">
					
                    <div class="media-left">
						<a href="#"><img src="img/64x64.jpg"></a>
					</div>

					<div class="media-body">
					<p>Caso #'.$fila['ID'].'</p>
					'.
						$fila['descripcion'].
						'<br>
						<a class="btn btn-lg btn_primary" href="'.$fila['enlace'].'">Ir al caso</a>
					</div>
	    	</div>
	    </div>

	   <br>
	   <br>
	   <br>
	   <br>
	   <br>';*/}

require("cerrarConexion.php");//cerrar conexion a la base de datos
 ?>
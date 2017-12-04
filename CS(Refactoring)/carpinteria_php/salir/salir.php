<?php 
	session_start();
	session_destroy();

	echo '<meta http-equiv="Refresh" content="0;url=../../html/login.php">';//Redirigir a login
?>
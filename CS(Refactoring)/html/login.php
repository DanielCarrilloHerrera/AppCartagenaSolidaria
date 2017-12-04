<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head>
  <meta charset="UTF-8">
  <title>Cartagena Solidaria</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  </head>

  <body>

    <div class="container">
		
		
      <form class="form-signin" method="post" action="../carpinteria_php/login/validarLogin.php">
        <h1 class="text-center">Cartagena Solidaria</h1>
		<br>
		<br>
		<br>
		<br>
        <label for="email" class="sr-only">Email</label>
        <input type="email" id="Email" class="form-control" name="email" placeholder="Email" required="" autofocus="">
        <label for="password" class="sr-only">Contraseña</label>
        <input type="password" id="password" class="form-control" name="password"placeholder="Contraseña" required="">
		
		<?php 
						  session_start();

						  if ( isset($_SESSION['login'] ) ) {//Si se ha registrado un mal login anterior
							echo"<p>La direccion de correo electrónico o la contraseña que ha digitado es erronea</p>";
						  }
		?>
		
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
      </form>
      <br>
      <br>
      <a href="../loginForm.php">Crear cuenta nueva</a>
    </div> <!-- /container -->

			          



   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--JavaScript-->
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>

</body></html>
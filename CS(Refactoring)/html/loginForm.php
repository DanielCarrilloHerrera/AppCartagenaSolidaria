<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en">

<head>
    <meta charset="UTF-8">
  <title>Login Cartagena Solidaria</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  </head>

  <body>

    <?php
    session_start();
    
    
   echo'  <div class="container-fluid">
      <div class="page-header">
        <h1>Cartagena Solidaria</h1>
    </div>
      <form class="form-horizontal" role="form" action="..\carpinteria_php\login\validarRegistro.php" method="post">
  
    <div class="form-group">
      <label for="nombres" class="col-lg-2 control-label">Nombres</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="nombres" name="nombres"
               placeholder="Nombres">
      </div>
    </div>

    <div class="form-group">
    <label for="apellidos" class="col-lg-2 control-label">Apellidos</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="apellidos" name="apellidos"
             placeholder="Apellidos">
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-10">
      <input type="email" class="form-control" id="email" name="email"
             placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="password" class="col-lg-2 control-label">Contraseña</label>
    <div class="col-lg-10">
      <input type="password" class="form-control" id="password" name="password"
             placeholder="Contraseña">
    </div>
  </div>

  <div class="form-group">
    <label for="password2" class="col-lg-2 control-label">Repetir Contraseña</label>
    <div class="col-lg-10">
      <input type="password" class="form-control" id="password2" name="password2" 
             placeholder="Contraseña">
    </div>
  </div>';

   
if(isset($_SESSION['badPass'])){
      echo '<p>Las contraseñas no coinciden. Por favor, reviselas.</p>';
    }

if(isset($_SESSION['emailExits'])){
      echo '<p>Ya existe una cuenta asociada a ese email.</p>';
    }
  echo'<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
    </div>
  </div>

</form>';
 
?>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Signin Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

</body>
</html>
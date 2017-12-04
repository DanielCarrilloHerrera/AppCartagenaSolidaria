<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en">

<head>
    <meta charset="UTF-8">
  <title>Cartagena Solidaria</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  </head>

  <body>

        <div class="container">
           <?php 
            include("../carpinteria_php/barraNav.php");
          ?>

<?php
  echo'  <div class="container-fluid">
          <form class="form-horizontal" role="form" action="..\carpinteria_php\caso\anadirDonacion.php" method="post"> 
            <br>
            <br>
            <h1>Donacion para el caso #'.$_SESSION['ID'].'</h1>
       

      <div class="radio">
        <img src="../img/BP.jpg" width=64, height=64>
        <label>
            <input type="radio" id="Banco_Popular" value="Banco Popular" active="active" name="banco"> Banco Popular
        </label>
      </div>

      <div class="radio">
        <img src="../img/AVAL.jpg" width=64, height=64>
        <label>
            <input type="radio" id="AVAL" value="AVAL" name="banco"> Grupo AVAL
        </label>
      </div>

      <div class="radio">
        <img src="../img/BBVA.jpg" width=64, height=64>
        <label>
            <input type="radio" id="BBVA" value="BBVA" name="banco"> BBVA
        </label>
      </div>

      <br>
      <div class="form-group">
          <label for="numeroCuenta" class="col-lg-2 control-label"># de cuenta</label>
          <div class="col-lg-10">
            <input type="number" class="form-control" id="numeroCuenta" rows="9" name="numeroCuenta" 
            placeholder="Numero de cuenta"></input>
          </div>
        </div>

        <div class="form-group">
          <label for="monto" class="col-lg-2 control-label">Monto</label>
          <div class="col-lg-10">
            <input type="number" class="form-control" id="monto" rows="9" name="monto" 
            placeholder="Monto"></input>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-primary btn-block">Enviar datos</button>
          </div>
        </div>
      </form>
    </div>
     <!-- /container -->';
  ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="..js/bootstrap.min.js"></script>

</body>
</html>
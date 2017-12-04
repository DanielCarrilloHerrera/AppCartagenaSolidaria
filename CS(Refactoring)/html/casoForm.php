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

    <div class="container-fluid">
          <form class="form-horizontal" enctype="multipart/form-data" role="form" action="..\carpinteria_php\caso\anadirCaso.php" method="post"> 
            <br>
            <br>
            <h1>Ingresar Nuevo Caso</h1>
       
        <div class="form-group">
          <label for="descripcion" class="col-lg-2 control-label">Breve descripcion</label>
          <div class="col-lg-10">
            <textarea class="form-control" id="descripcion" rows="3" name="descripcion"
             placeholder="Breve Descripcion..." required></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="contenido" class="col-lg-2 control-label">Explicacion del caso</label>
          <div class="col-lg-10">
            <textarea class="form-control" id="contenido" rows="9" name="contenido" 
            placeholder="Explicacion del caso..." required></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="imagen" class="col-lg-2 control-label">Imagen</label>
          <div class="col-lg-10">
            <input name="imagen" id="imagen" type="file" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-primary btn-block">Enviar datos</button>
          </div>
        </div>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

</body>
</html>
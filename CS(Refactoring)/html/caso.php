<DOCTYPE HTML>
<html>
	<head>
    	<meta charset="UTF-8">
    	<title>Cartagena Solidaria</title>
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
    	</head>
        <style type="text/css">
            img{
                margin:auto;
                display:inline;
            }
        </style>
	<body>
<!-- Fixed navbar -->
<div class="container">
          <?php 
            include("../carpinteria_php/barraNav.php");
          ?>
    
 
      <!-- Main component for a primary marketing message or call to action -->
      <?php
      echo '<br>
            <br>
            <h1>CASO #'.$_SESSION['ID'].'</h1>
            <br>
            <br>
            <br>
            <br>
            <div>
                <img src="../img/'.$_SESSION['ID'].'.jpg" class="img-responsive">
            </div>
            <br>';
            require("..\carpinteria_php\caso\montosCaso.php");
            echo'<br>
            <h3>'.$_SESSION['descripcion'].'</h3>
            <br>
            <br>
            <br>
            <p class="text-justify">'.$_SESSION['contenido'].'</p>
            <br>
            <br>
            <a href="donar.php" class="btn btn-primary btn-block">Donar</a>
            <br>
            <br>
            ';

      ?>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		<!--JavaScript-->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>		
	</body>
	</html>	
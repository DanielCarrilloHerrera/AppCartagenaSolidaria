<?php 
echo'<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://getbootstrap.com/examples/navbar/#">CS</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">';
              
                session_start();
                echo '<li><a href="#">'.$_SESSION['nombres'].'</a></li>';

                if ($_SESSION['superusuario']==1)//Si es un superusuario
                {
                    echo '<li><a href="casoForm.php">Añadir Caso</a></li>'; 
                    echo'<li><a href="suForm.php">Añadir Intermediario</a></li>';                 
                }
              
             echo '             
              <li><a href="home.php">Principal</a></li>
              <li><a href="..\carpinteria_php\salir\salir.php">Salir</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>';
?>
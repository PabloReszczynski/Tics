<html lang="es">
  <head>
    <title>welcome</title>
    <meta charset="utf-8">
  </head>
  <body>
  	<?php
session_start();
if (!isset($_SESSION['user'])){
	header("Location: index.php");
	}
?>
  	<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar tutorias!">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
    <div>
    	<ul class="nav nav-pills nav-stacked">
  <li role="presentation" class="active"><a href="welcome2.php">Inicio</a></li>
  <li role="presentation"><a href="#">Perfil de Usuario</a></li>
  <li role="presentation"><a href="#">¿Quienes somos?</a></li>
  <li role="presentation"><a href="#">Contacto</a></li>
	</ul>	
	</div>
    <div class="container">
      <?php
        echo "<h1> Bienvenido user!</h1>";
      ?>
      
    </div>

  </body>
</html>

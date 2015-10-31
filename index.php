<?php
  session_start();
  if (isset($_SESSION["user"])){
    header("location:./welcome2.php");
  }
?>
<html lang="es">
  <head>
    <title>Bienvenido</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style>
        body{
            font-family: "Open Sans", sans-serif;
            text-align: center;
        }
    </style>
  </head>
  <body>
    <div class="login-container">
      <h1>Bienvenido a Tutomax</h1>
      <div class="container">
    <div class="row">
		<div class="span12">
			<form class="form-horizontal" action="./welcome2.php" method="post">
			  <fieldset>
			    <div id="legend">
			      <legend class="">Login</legend>
			    </div>
			    <div class="control-group">
			      <!-- Username -->
			      <label class="control-label"  for="username">Usuario</label>
			      <div class="controls">
			        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Password-->
			      <label class="control-label" for="password">Contraseña</label>
			      <div class="controls">
			        <input type="password" id="password" name="pass" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Button -->
			      <div class="controls">
			        <button class="btn btn-default">Iniciar Sesión</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		</div>
	</div>
    <a href="registro.php">Regístrate</a>
</div>
      <?php
        $error = '<span>Fallo en el inicio de sesión.</span>';

        if (isset($_SESSION["error"]) && $_SESSION["error"]==="error"){
          echo $error;
          session_destroy();
        }
      ?>
    </div>
  </body>
</html>

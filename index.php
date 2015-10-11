<?php
  session_start();
  if (isset($_SESSION["user"]) && $_SESSION["user"] === "user"){
    header("location:"."/~pablore/Tics/Tics"."/welcome2.php");
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
        }
    </style>
  </head>
  <body>
    <div class="login-container">
      <h1>Bienvenido a Tutomax</h1>
      <div class="container">
    <div class="row">
		<div class="span12">
			<form class="form-horizontal" action='' method="post">
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
			        <button class="btn btn-success">Iniciar Sesión</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
      <?php
        $error = '<span>Fallo en el inicio de sesión.</span>';

        if (isset($_POST["username"]) && isset($_POST["pass"])){
            if ($_POST["username"] === "user" && $_POST["pass"] === "pass"){
                $_SESSION["user"] = $_POST["username"];
                $_SESSION["pass"] = $_POST["pass"];
            }
            else{
                echo $error;
            }
        }
      ?>
    </div>
  </body>
</html>

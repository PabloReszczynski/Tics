<?php
require("functions.php");
session_start();
if(!isset($_SESSION["user"])){
  if(checkLogIn($_POST)){
    $_SESSION["user"] = $_POST["username"];
    $_SESSION["pass"] = $_POST["pass"];
    $_SESSION["error"] = "no";
  }
  else{
    $_SESSION["error"] = "error";
    header("Location: index.php");
  }
}
?>
<html lang="es">
  <head>
    <title>Bienvenido</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  </head>
  <style type="text/css">
    body{
        font-family: 'Open Sans', sans-serif;
    }
  </style>
  <body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-default">
      <div class="navbar-header">
          <a class="navbar-brand" href="welcome2.php">Inicio</a>
      </div>
      <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li><a href="profile.php">Perfil</a></li>
              <li><a href="listaTutorias.php">Tutorías</a></li>
              <li><a href="quienesSomos.php">Quienes somos</a></li>
              <li><a href="#">Contacto</a></li>
          </ul>
          <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Buscar Tutorías">
              </div>
              <button type="submit" class="btn btn-default">Buscar</button>
          </form>
          <ul class="nav navbar-right">
            <li><a href="./closeSession.php">Cerrar sesión</a></li>
          </ul>
      </div>
  </nav>
  <!-- -->
  <div class="row-fluid">
      <div class="col-lg-3">
          <?php
            echo "<h1> Bienvenido user!</h1>";
            //session_destroy(); //Para poder cerrar la sesión y testear el inicio de sesión
          ?>
      </div>
      <div class="col-lg-6" style="border: 1px solid #ccc; height: 100%;">

      </div>
    </div>
  </body>
</html>

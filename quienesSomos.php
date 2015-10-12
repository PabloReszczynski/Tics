<?php
    require("functions.php");
    session_start();
    redirectError();
?>
<html lang="es">
  <head>
    <title>Quienes somos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style type="text/css">
        body{
            font-family: 'Open Sans', sans-serif;
        }
        img{
            position: relative;
            margin: auto;
            width: 100%;
            max-width: 600px;
            max-height: 400px;
        }
    </style>
  </head>
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
                  <li class="active"><a href="quienesSomos.php">Quienes somos</a></li>
                  <li><a href="#">Contacto</a></li>
              </ul>
              <form class="navbar-form navbar-right" role="search">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Buscar Tutorías">
                  </div>
                  <button type="submit" class="btn btn-default">Buscar</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="./closeSession.php">Cerrar sesión</a></li>
              </ul>
          </div>
      </nav>
      <!-- -->
        <div class="container">
            <h1 style="text-align: center;">Quienes Somos</h1>
            <br>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div class="row">
                <div class="col-lg-4"><img class="img-thumbnail"src="resources/cdcdcd.png" alt="team"/></div>
                <div class="col-lg-4"><img class="img-thumbnail"src="resources/cdcdcd.png" alt="team"/></div>
                <div class="col-lg-4"><img class="img-thumbnail"src="resources/cdcdcd.png" alt="team"/></div>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
  </body>
</html>

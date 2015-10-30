<?php
    require("functions.php");
    session_start();
    redirectError();
?>
<html lang="es">
  <head>
    <title>Lista de tutorías</title>
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
              <a class="navbar-brand" href="welcome2.php">
                  <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
          </div>
          <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  <li><a href="profile.php">Perfil</a></li>
                  <li class="active"><a href="listaTutorias.php">Tutorías</a></li>
                  <li><a href="quienesSomos.php">Quienes somos</a></li>
                  <li><a href="contacto.php">Contacto</a></li>
              </ul>
              <form class="navbar-form navbar-right" role="search">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Buscar Tutorías">
                  </div>
                  <button type="submit" class="btn btn-default">
                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  </button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="./closeSession.php">Cerrar sesión</a></li>
              </ul>
          </div>
      </nav>
      <!-- -->
        <div class="container">
            <h1 style="text-align: center;">Lista de tutorías</h1>
            <br>
            <table class="table">
              <thead>
                <tr class="" margin="10">
                  <th class="col-md-3">Tutoría</th>
                  <th class="col-md-3">Autor</th>
                  <th class="col-md-6">Descripción</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Test 1</th>
                  <td>Juan Pérez</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                </tr>
                <tr>
                  <th scope="row">Test 2</th>
                  <td>Juan Pérez</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                </tr>
                <tr>
                  <th scope="row">Test 3</th>
                  <td>Juan Pérez</td>
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                </tr>
              </tbody>
            </table>
        </div>
  </body>
</html>

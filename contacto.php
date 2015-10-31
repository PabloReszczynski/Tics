<?php
    require("connect.php");
    session_start();
    redirectError();
?>
<html lang="es">
  <head>
    <title>Contacto</title>
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
                  <li><a href="listaTutorias.php">Tutorías</a></li>
                  <li><a href="quienesSomos.php">Quienes somos</a></li>
                  <li class="active"><a href="contacto.php">Contacto</a></li>
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
            <div class="row">
                <div class="col-lg-6">
                    <h1>Contáctanos</h1>
                    <p>
                        Nos gustaría saber lo que piensas de nuestro sitio.
                        Haznos una pregunta, una crítica o lo que quieras.
                    </p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="lastname" placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="phone" placeholder="Teléfono">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="E-Mail">
                        </div>
                        <div class="form-group">
                            <label>Mensaje</label>
                            <textarea class="form-control" cols="10" rows="10" name="message"></textarea>
                        </div>
                        <p>
                            Los siguientes tipos de inputs son irrelevantes en la página, pero son requeridos por la tarea.
                        </p>
                        <div class="checkbox">
                            <label><input type="checkbox">Opción 1</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox">Opción 2</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox">Opción 3</label>
                        </div>
                        <div class="form-group">
                            <select name="list" class="form-control">
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                                <option value="4">D</option>
                                <option value="5">E</option>
                            </select>
                        </div>
                        <button class="btn btn-default" type="submit">Enviar</button>
                    </form>
                </div>
            </div>

        </div>
  </body>
</html>

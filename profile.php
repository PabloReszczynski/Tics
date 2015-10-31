<?php
    require("connect.php");
    session_start();
    redirectError();
    $conn=database_connect();
?>
<html lang="es">
  <head>
    <title>Mi Perfil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  </head>
  <style type="text/css">
    body{
        font-family: 'Open Sans', sans-serif;
    }
    img{
        max-width: 400px;
        max-height: 400px;
    }
  </style>
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
              <li class="active"><a href="profile.php">Perfil</a></li>
              <li><a href="listaTutorias.php">Tutorías</a></li>
              <li><a href="quienesSomos.php">Quienes somos</a></li>
              <li><a href="#">Contacto</a></li>
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
  <div class="row-fluid">
      <?php
        $select = "SELECT * FROM Users WHERE username = '".$_SESSION['user']."';";
        $result = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($result);

        echo "<div class='col-lg-3'>
            <img src='resources/cat.jpg' alt='profile pic' class='img-thumbnail img-responsive'/>
        </div>
        <div class='col-lg-6'>
            <h2>".$row['nombre']." ".$row['apellido']."<br>
            <small>".$row['username']."</small></h2>
            <span>".$row['email']."</span><br>
        </div>

        <div class='col-lg-3' style=''>
            <a href='editarUsuario.php'><button class='btn btn-default' style='float: right;'>Editar perfil</button></a>
        </div>";
      ?>
  </div>
  </body>
</html>
<?php
if(isset($_REQUEST['submit'])!='')
{
    $sql = "UPDATE Users SET lastname='Doe' WHERE id=2";
}
mysqli_close($conn);
?>

<?php
    require("connect.php");
    session_start();
    redirectError();
    $conn=database_connect();
    if(isset($_POST['change'])){
      Update($_POST);
    }
?>
<html lang="es">
  <head>
    <title>Editar datos usuario</title>
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
          <a class="navbar-brand" href="welcome2.php">
              <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
          </a>
      </div>
      <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li><a href="profile.php">Perfil</a></li>
              <li><a href="listaTutorias.php">Tutorías</a></li>
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
  <?php
  $select = "SELECT * FROM Users WHERE username = '".$_SESSION['user']."';";
  $result = mysqli_query($conn, $select);
  $row = mysqli_fetch_assoc($result);

  echo "<div class='col-lg-4'>
    <form method='post' action='editarUsuario.php'>
      <h1>Editar datos usuario</h1>
      <br>
      <table class='table'>
      <tr>
      <td>  <div class='form-group'>
       <label for='Nombre'>Nombre:</label></td>
      <td> <input type='text' name='nombre' class='form-control' value='".$row['nombre']."'/>
       </div></td>
      <td></td>
      </tr>

      <tr>
      <td>  <div class='form-group'>
        <label for='Apellido'>Apellido:</label></td>
      <td> <input type='text' name='apellido' class='form-control' value='".$row['apellido']."'/>
       </div></td>
      <td></td>
      </tr>

      <tr>
      <td>  <div class='form-group'>
        <label for='email'>Email:</label></td>
      <td> <input type='text' name='email' class='form-control' value='".$row['email']."'/>
       </div></td>
      <td></td>
      </tr>

      <tr>
      <td>  <div class='form-group'>
        <label for='avatar'>Avatar:</label></td>
      <td> <input type='file' name='avatar'/>
       </div></td>
      <td></td>
      </tr>

      <tr>
      <td>  <div class='form-group'>
        <label for='username'>Username:</label></td>
      <td> <input type='text' name='username' value='".$row['username']."'/>
       </div></td>
      <td></td>
      </tr>

      <tr>
      <td>  <div class='form-group'>
        <label for='pwd'>Password:</label></td>
      <td> <input type='password' name='pwd' value='".$row['password']."'/>
       </div></td>
      <td></td>
      </tr>

      <tr>
      <td></td>
      <td></td>
      <td><div class='form-group'>
                          <button class='btn btn-default' type='submit'>Enviar</button>
                      </div></td>
      </tr>
      </table>
      <input type='hidden' name='change' value='yes'/>
    </form>
  </div>
  </body>
</html>";

function Update($post){
  if(isset($post['nombre'])){
    $query = "UPDATE Users SET nombre='".$post['nombre']."' WHERE username='".$_SESSION['user']."';";
    }
  if(isset($post['apellido'])){
    $query = $query."UPDATE Users SET apellido='".$post['apellido']."' WHERE username='".$_SESSION['user']."';";
    }
  if(isset($post['avatar'])){
    $query = $query."UPDATE Users SET avatar='".$post['avatar']."' WHERE username='".$_SESSION['user']."';";
    }
  if(isset($post['email'])){
    $query = $query."UPDATE Users SET email='".$post['email']."' WHERE username='".$_SESSION['user']."';";
    }
  if(isset($post['username'])){
    $query = $query."UPDATE Users SET username='".$post['username']."' WHERE username='".$_SESSION['user']."';";
    }
  if(isset($post['pwd'])){
    $query = $query."UPDATE Users SET password='".$post['pwd']."' WHERE username='".$_SESSION['user']."';";
    }

  if ($mysqli_query($conn, $query)!=false) {
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }
}
mysqli_close($conn);
?>

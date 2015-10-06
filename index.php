<?php
  session_start();
  if (isset($_SESSION["user"])){
    header("location: welcome.php");
  }
?>
<html lang="es">
  <head>
    <title>index</title>
    <meta charset="utf-8">
  </head>
  <body>
    <div class="container" style="text-align:center;">
      <h1>Bienvenido</h1>
      <form action="" method="post">
        <div class="form-group">
          <input type="text" name="username" placeholder="Nombre de usuario">
        </div>
        <div class="form-group">
          <input type="password" name="pass" placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
      <?php
        $error = '<span>Fallo en el inicio de sesión.</span>';
        if (isset($_POST["username"] && isset($_POST["pass"])){
          if ($_POST["username"] == "user" && $_POST["pass"] == "pass"){
            $_SESSION["username"] = $_POST["username"];
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

<html lang="es">
    <head>
        <title>Registro</title>
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
        <h1 style="text-align: center;">Formulario de registro</h1>
        <div class="col-lg-4">
            <form>
                <div class="form-group">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" id="nombre" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="Apellido">Apellido:</label>
                    <input type="text" id="Apellido" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="Sexo">Sexo: </label>
                    <input type="text" id="Sexo" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" id="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar: </label>
                    <input type="text" id="avatar" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="username">Username: </label>
                    <input type="text" id="username" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="pwd">Password: </label>
                    <input type="password" id="pwd" class="form-control"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-default" type="submit">Registrarse</button>
                </div>
            </form>
        </div>
    </body>
</html>

<?php
include ("connect.php");
if(mysql_num_rows(mysql_query("SELECT * from users WHERE username='" . $_POST['username'] . "'")) == 1){
   echo "Nombre de usuario ya ocupado!";
}

else{
   mysql_query("INSERT into users VALUES ('".$_POST['username']."', '".$_POST['password']."')") or die(mysql_error());
   header('Location: index.html');
}
?>

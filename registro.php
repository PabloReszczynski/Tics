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
            <form method='post' action="registro.php">
                <div class="form-group">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" name="nombre" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="Apellido">Apellido:</label>
                    <input type="text" name="apellido" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar: </label>
                    <input type="file" name="avatar"/>
                </div>
                <div class="form-group">
                    <label for="username">Username: </label>
                    <input type="text" name="username" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="pwd">Password: </label>
                    <input type="password" name="pwd" class="form-control"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-default" type="submit">Registrarse</button>
                </div>
            </form>
        </div>
    </body>
</html>

<?php
require('connect.php');
require('hash.php');

if (isset($_POST['nombre'])){
    
    $col = array(
        0 => $_POST['nombre'],
        1 => $_POST['apellido'],
        2 => $_POST['email'],
        3 => $_POST['avatar'],
        4 => $_POST['username'],
        5 => create_hash($_POST['password']),
        6 => 0,
        7 => date('m/d/Y h:i:s a', time())
    );
    
    insert_users($col);
    
    mysqli_close($conn);
}
?>

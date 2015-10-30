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

$name = $_POST['nombre'];
$lastname = $_POST['apellido'];
$email = $_POST['email'];
$avatar = $_POST['avatar'];
$username = $_POST['username'];
$password = create_hash($_POST['password']);
$timestamp = date('m/d/Y h:i:s a', time());

$col = [$name, $lastname, $email, $avatar, $username, $password, $timestamp];
insert_users($col);
?>

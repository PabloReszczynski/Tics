<?php
    $servername = "theawesometool.koding.io";
    $username = "root";
    $password = "chingo";
    $dbname = "pablore";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error){
        die("Connection failed: ". $conn -> connect_error);
    }

    function insert_users($columns){

        if (mysqli_query($conn,
            "select * from Users where username = $columns[4]"
        ) == 1){
            echo "Nombre de usuario ya está ocupado.";
        }
        else {
            $insert = "insert into Users(nombre, apellido, avatar, email, username, password, status, timestamp)
                    values ('$colums[0]', '$colums[1]', '$colums[2]', '$colums[3]', '$colums[4]', '$colums[5]', '$colums[6]', '$colums[7]');";
            if (mysqli_query($conn, $insert)){
                echo "Datos guardados exitosamente.";
            }
            else{
                echo "Error guardando los datos";
            }
        }
    }
?>

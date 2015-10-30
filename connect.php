<?php
    $servername = "localhost";
    $username = "root";
    $password = "chingo";
    $dbname = "pablore";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error){
        die("Connection failed: ". $conn -> connect_error);
    }

    function insert_users($columns){
        
        $select = "select * from Users where username = $columns[0]";
        if (mysqli_query($conn, $select) != 1){
            $insert = "insert into Users (nombre, apellido, avatar, email, username, password, status, timestamp)
            values ('$colums[0]', '$colums[1]', '$colums[2]', '$colums[3]', '$colums[4]', '$colums[5]', $colums[6], $colums[7]);";
            if (mysqli_query($conn, $insert)){
                echo "<span style='color: green;'>Datos guardados exitosamente.</span>";
            }
            else{
                echo "<span style='color: red;'>Error guardando los datos</span>";
            }
        }
        else {
            echo "Nombre de usuario ya está ocupado.";
        }
    }
?>

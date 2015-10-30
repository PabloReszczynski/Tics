<?php
    $servername = "localhost";
    $username = "root";
    $password = "chingo";
    $dbname = "pablore";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    function insert_users($columns){
        
        $select = "select * from Users where username = $columns['name']";
        if (mysqli_query($conn, $select) != 1){
            $insert = "insert into Users (nombre, apellido, avatar, email, username, password, status, timestamp)
            values ('$columns['name]', '$columns['lastname']', '$columns['avatar']', '$columns['email']', '$columns['username']', '$columns['password']', $columns['status'], $columns['timestamp']);";
            if (mysqli_query($conn, $insert)){
                echo "<span style='color: green;'>Datos guardados exitosamente.</span>";
            }
            else{
                echo "<span style='color: red;'>Error guardando los datos</span>";
                echo "<br>".$insert;
                mysqli_error($conn);
            }
        }
        else {
            echo "Nombre de usuario ya está ocupado.";
        }
    }
?>

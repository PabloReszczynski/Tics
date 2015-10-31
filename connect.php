<?php
    function database_connect(){
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "ticsdb";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      if (!$conn){
          die("Connection failed: ". mysqli_connect_error());
      }
      return $conn;
    }

    function insert_users($columns, $conn){
        $select = "SELECT * FROM Users WHERE username = '".$columns['nombre']."';";
        if (mysqli_fetch_array(mysqli_query($conn, $select)) == NULL){
            $insert = "INSERT INTO Users (nombre, apellido, avatar, email, username, password, status, registro, ultima_sesion)" .
            "VALUES ('".$columns['nombre']."', '".$columns['apellido']."', '".$columns['avatar']."', '".$columns['email']."', '".$columns['username']."', '".$columns['password']."', ".$columns['status'].", NOW(), NOW());";
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

    function checkLogIn($post, $conn){
    		if(isset($post["username"]) and isset($post["pass"])){
          $select = "SELECT * FROM Users WHERE username = '".$post['username']."' AND password = '".$post['pass']."';";
          return mysqli_fetch_array(mysqli_query($conn, $select)) != NULL;
        }
    }

    function redirectError(){
      if (!isset($_SESSION['user'])){
          header("Location: error.php");
      }
    }
?>

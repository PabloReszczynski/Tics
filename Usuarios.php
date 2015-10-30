<html>
<body>
<form>
<table>

<tr>
<td>  <div class="form-group">
 <label for="Nombre">Nombre:</label></td>
<td> Pauli</td>
<td> <input type="text" name="nombreact" class="form-control"/>
 </div></td>
<td></td>
</tr>

<tr>
<td>  <div class="form-group">
  <label for="Apellido">Apellido:</label></td>
<td> Escobar</td>
<td> <input type="text" name="apellidoact" class="form-control"/>
 </div></td>
<td></td>
</tr>

<tr>
<td>  <div class="form-group">
  <label for="email">Email:</label></td>
<td> pe@yahoo.cl</td>
<td> <input type="text" name="emailact" class="form-control"/>
 </div></td>
<td></td>
</tr>

<tr>
<td>  <div class="form-group">
  <label for="avatar">Avatar:</label></td>
<td> foto</td>
<td> <input type="file" name="avataract"/>
 </div></td>
<td></td>
</tr>

<tr>
<td>  <div class="form-group">
  <label for="username">Username:</label></td>
<td> paulie</td>
<td> <input type="text" name="usernameact"/>
 </div></td>
<td></td>
</tr>

<tr>
<td>  <div class="form-group">
  <label for="pwd">Password:</label></td>
<td> eeee</td>
<td> <input type="password" name="pwdact"/>
 </div></td>
<td></td>
</tr>

<tr>
<td></td>
<td></td>
<td><div class="form-group">
                    <button class="btn btn-default" type="submit">Enviar</button>
                </div></td>
</tr>
</table>

</form>
</body>
</html>

<?php

session_start();

$servername = "root";
$username = "username";
$password = "password";
$dbname = "pablore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
function Update(a, b, c, d, e, f){
if(a!='' || a!='$_SESSION['username']'){
  $sql = "UPDATE Users SET nombre='a' WHERE username=$_SESSION['username']";
  }
if(b!=''){
  $sql = "UPDATE Users SET apellido='b' WHERE username=$_SESSION['username']";
  }
if(c!=''){
  $sql = "UPDATE Users SET avatar='c' WHERE username=$_SESSION['username']";
  }
if(d!=''){
  $sql = "UPDATE Users SET email='d' WHERE username=$_SESSION['username']";
  }
if(e!=''){
  $sql = "UPDATE Users SET username='e' WHERE username=$_SESSION['username']";
  }
if(f!=''){
  $sql = "UPDATE Users SET password='f' WHERE username=$_SESSION['username']";
  }

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
$conn->close();
?>

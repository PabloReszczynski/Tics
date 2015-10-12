<?php
function checkLogIn($post){
		return isset($post["username"]) and isset($post["pass"]) and $post["username"]==="user" and $post["pass"]==="pass";
}

function redirectError(){
  if (!isset($_SESSION['user'])){
      header("Location: error.php");
  }
}
?>

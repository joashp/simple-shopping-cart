<?php 
$past = time() - 3600; 
setcookie("username", gone, $past); 
setcookie("password", gone, $past); 
header("Location: index.php"); 
?>
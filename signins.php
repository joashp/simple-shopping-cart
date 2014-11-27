<?php 
$db_name="stshop";

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("$db_name") or die(mysql_error());
 
$username=$_POST['username'];
$pass=$_POST['password'];
$password=md5($pass);
 
$query = mysql_query("SELECT * FROM login where username='$username' AND password='$pass' "); 
 
$count = mysql_num_rows($query);
/* $count checks if username and password are in same row */
if ($count==1) { 
 	echo "Login Successful";
 	include 'pay.php';
 	$hour = time() + 3600;  
 	setcookie("username", $username, $hour); 
 	//header("location: pay.php");
} else { 
	echo "Username or password is incorrect";
	echo '<br><a href="signin.php">Return</a>';
}
?>


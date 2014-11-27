<?php 
$db_name="stshop";

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("$db_name") or die(mysql_error());

$username=$_POST['username'];
$pass=$_POST['password'];
/* we are now encrypting password while using md5() function */
$password=md5($pass);
$confirm_password=$_POST['confirm_password'];
 
$queryuser=mysql_query("SELECT * FROM login WHERE username='$username' ");
$checkuser=mysql_num_rows($queryuser);

if ($checkuser != 0) { 
	echo "Sorry, ".$username." is already been taken."; 
} else {
	if ($pass != $confirm_password) { 
		echo "Password and confirm password fields were not matched"; 
	} else {
 		$insert_user=mysql_query("INSERT INTO login (username, password) VALUES ('$username', '$pass')");
 
		if($insert_user) { 
			echo "Registration Succesfull.";
  			echo '<br><a href="cart.php">Return</a>'; 
  		} else { 
  			echo "error in registration".mysql_error(); 
  		}
 	}
}
 
mysql_close();
?>
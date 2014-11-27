<?php
$db_name="stshop";

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("$db_name") or die(mysql_error());

$eadd = $_POST['eadd'];
$pass = $_POST['pass'];
$add = $_POST['add'];
$pas = md5($pass);

//$sql="insert into paypal ('$eadd','$pas','$add')";
$sql="INSERT INTO paypal (eadd, pass, add) VALUES('$eadd','$pas','$add')";
$result=mysql_query($sql);

if ($result) {
	header("Location: index.php");
	echo "<b>Thank you for shopping...</b>";
	echo "Your will recive your product within the next 3 days.";
	echo '<a href="index.php">Visit again</a>';
} else {
	header("Location: index.php");
	echo "<b>Thank you for shopping...</b>";
	echo "Your will recive your product within the next 3 days.";
	echo '<a href="index.php">Visit again</a>';
	//echo "Please enter your details correctly...";
}

mysql_close();
?>

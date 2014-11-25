<?php
header('Content-type: image/jpeg');
	
require_once('inc/functions.inc.php');
// Start the session
session_start();
header('Content-type: ' . $row['mimetype']);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Mens</title>
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/b1.css">
</head>
<img src="images/logo.jpg" />
<a href="cart.php" ><img src="images/ccart.png" /></a>
<div class="menu">
		<ul>
			<li><a href="index.php" >Home</a></li>
			<li><a href="mens.php" id="current">Mens</a></li>
		  	<li><a href="womens.php" id="current">Womens</a></li>
			<li><a href="contactus.php" id="current">Contact Us</a></li>
			<li><a href="aboutus.php" id="current">About Us</a></li>			
		  </li>
	    </ul>
</div>
<body>

<div id="stshoplist">

<h1></h1>

<?php
echo writeShoppingCart();
?>

</div>

<div id="stshoplist">

<h1><B>Mens Collection</B></h1>
<br>
<h2><u>Shirts</u></h2>
<?php
$db_name="stshop";

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("$db_name") or die(mysql_error());

$result = mysql_query("SELECT * FROM prod where category='msrt'");
?><table border="3">
<?php
while ($row = mysql_fetch_array($result)) 
{
echo "<td>";
echo "<table><tr><img src=\"images/" .$row['image']. "\" /> <br></tr>";
echo "<tr>" .$row['title']. "<br></tr>";
echo "<tr>Price: &pound;" .$row['price'].  "<br>";              
echo '<a href="cart.php?action=add&id='.$row['id'].'">Buy Now</a></tr>';
echo "</table></td>";              					 
}
echo "</table>";

?>

<br>
<h2><u>Footwear</u></h2>
<?php
$db_name="stshop";

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("$db_name") or die(mysql_error());

$result = mysql_query("SELECT * FROM prod where category='msh'");
?><table border="3">
<?php
while ($row = mysql_fetch_array($result)) 
{
echo "<td>";
echo "<table><tr><img src=\"images/" .$row['image']. "\" /> <br></tr>";
echo "<tr>" .$row['title']. "<br></tr>";
echo "<tr>Price: &pound;" .$row['price'].  "<br></tr>";                 
echo '<a href="cart.php?action=add&id='.$row['id'].'">Buy Now</a>';
echo "</table></td>";              					 
}
echo "</table>";

?>
<br>
<h2><u>Accessories</u></h2>
<?php
$db_name="stshop";

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("$db_name") or die(mysql_error());

$result = mysql_query("SELECT * FROM prod where category='macc'");
?><table border="3">
<?php
while ($row = mysql_fetch_array($result)) 
{
echo "<td>";
echo "<table><tr><img src=\"images/" .$row['image']. "\" /> <br></tr>";
echo "<tr>" .$row['title']. "<br></tr>";
echo "<tr>Price: &pound;" .$row['price'].  "<br></tr>";                 
echo '<a href="cart.php?action=add&id='.$row['id'].'">Buy Now</a>';
echo "</table></td>";              					 
}
echo "</table>";

?>

</div>

</body>
</html>
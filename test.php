<?php
require_once('inc/functions.inc.php');
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Shoppers Stop</title>
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/b1.css">
</head>
<img src="images/logo.jpg" /> <a href="cart.php" >View Cart</a>
<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="mens.php" id="current">Mens</a></li>
		  	<li><a href="womens.php" id="current">Womens</a></li>
			<li><a href="#" >Contact Us</a></li>
			<li><a href="#" >About Us</a></li>			
		  </li>
	    </ul>
</div>
<body>
<?php
echo "<b>Thank you for shopping...</b><br>";
echo "Your will recive your product within the next 3 days.<br>";
echo '<a href="index.php">Visit again</a>';
?>
</body>
</html>
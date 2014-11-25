<?php
header('Content-type: image/jpeg');
	
require_once('inc/functions.inc.php');
// Start the session
session_start();
header('Content-type: ' . $row['mimetype']);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>About Us</title>
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

<p>
Shoppers Stop has brought in a new level of professionalism and technology enablement to the ecommerce space. 
For consumers this translates to superior experience, broader product selection and unmatched efficiency thus adding to a better purchasing decision.
</p>
<br>
<br>
<p>
Placing Your First Order Online
<br>
Place your order at Shoppers Stop quick and easy steps:
<br>
1) Find the Items You Want 
<br>
2) Add the Items to Your Shopping Cart 
<br>
3) Sign In/Create a New Account/Choose guest checkout
<br>
4) Choose a Payment method and Enter Shipping Address 
</p>



</body>
</html>
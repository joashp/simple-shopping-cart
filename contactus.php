<?php
header('Content-type: image/jpeg');
	
require_once('inc/functions.inc.php');
// Start the session
session_start();
header('Content-type: ' . $row['mimetype']);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Contact US</title>
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
<h1>Customer Care</h1>
<br>
<b>Phone Numbers :</b>

+91-12345678<br>
<br><br>
<b>Timings :</b>

24 Hours 7 Days a Week
<br><br>
<b>Email id :</b>

contact@shop.com<br>

<br>
<br><br><br>
For order-related enquiries, email us with your contact details in the Subject Line and we will respond within 3 working days.
<br>
If you have already done so and are not satisfied with the response from Customer Connect, please email us at ccnotice@shopperstop.com with your Ticket Number/
</p>


</body>
</html>
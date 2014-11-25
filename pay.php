<?php
// Include MySQL class
//require_once('inc/mysql.class.php');
// Include database connection
//require_once('inc/global.inc.php');
// Include functions
require_once('inc/functions.inc.php');
// Start the session
//session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Shoppers Stop</title>
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
<br>
<br>
<br>
<span style="color: rgb(51, 104, 155); font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: bold; letter-spacing: normal; line-height: 21px; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-decorations-in-effect: none; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">
    Choose a way to pay</span><br />
	<br>
	<br>
	<a href="cc.php"><img alt="" title="" src="images/cc.gif" width="253" height="35" border="0" /><br><b>Credit Card</b></a> 
	<br>
	<i>---------------------<u>OR</u>----------------------</i>
	<br>
	<a href="paypal.php"><img alt="" title="" src="images/pp.gif" width="253" height="80" border="0" /><br><b>Pay Pal</b></a>
	
	

</body>
</html>
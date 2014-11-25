<?php
// Include MySQL class
//require_once('inc/mysql.class.php');
// Include database connection
//require_once('inc/global.inc.php');
// Include functions
require_once('inc/functions.inc.php');
// Start the session
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Shoppers Stop</title>
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/b1.css">
<script type="text/javascript">	
	function changeImage()
{
    var img = document.getElementById("img");
    img.src = images[x];
    x++;

    if(x >= images.length){
        x = 0;
    } 

    fadeImg(img, 100, true);
    setTimeout("changeImage()", 1500);
}

function fadeImg(el, val, fade){
    if(fade === true){
        val--;
    }else{
        val ++;
    }

    if(val > 0 && val < 100){
        el.style.opacity = val / 100;
        setTimeout(function(){fadeImg(el, val, fade);}, 10);
    }
}

var images = new Array(),
x = 0;

images[0] = "images/26.jpg";
images[1] = "images/27.jpg";
images[2] = "images/28.jpg";
images[3] = "images/25.jpg";
setTimeout("changeImage()", 2500);	
</script>
	
</head>
<img src="images/logo.jpg" />
<a href="cart.php" ><img src="images/ccart.png" /></a>&nbsp;<a href="signin.php" id="current">Sign In</a> &nbsp; <a href="signout.php" id="current">Sign Out</a>
&nbsp;<a href="signup.php" id="current">Sign Up</a>

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
<body background="images/ba.jpg">

<img src="images/25.jpg" id="img"/>
<br>
<br>
<br>
<br>
<img src="images/main.jpg" />
</div>

</body>
</html>
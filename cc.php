<?php	
require_once('inc/functions.inc.php');
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Pay with Credit Card</title>
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/b1.css">

<script type="text/javascript">
function validateForm()
{
var x=document.forms["my"]["cc_number"].value
  if (x==null || !(parseInt(x))) 
  {
  alert("Please enter your credit card number: only numeric allowed");
  return false;
  } 

var x=document.forms["my"]["csc"].value
  if (x==null || !(parseInt(x))) 
  {
  alert("Please enter your csc code : only numeric allowed");
  return false;
  }   

var x=document.forms["my"]["fname"].value
if (x==null || x=="")
  {
  alert("Please enter your name");
  return false;
  }

var x=document.forms["my"]["add"].value
if (x==null || x=="")
  {
  alert("Please enter your address");
  return false;
  }

var x=document.forms["my"]["tele"].value
  if (x==null || !(parseInt(x))) 
  {
  alert("Please enter your telephone number : only numeric allowed");
  return false;
  }   
}
</script>	
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
<br>
<br>
<span style="color: rgb(51, 104, 155); font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: bold; letter-spacing: normal; line-height: 21px; orphans: 2; text-align: -webkit-auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-decorations-in-effect: none; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); ">
    Pay with a debit or credit card</span><br />

	<img src="images/credit.jpg" width="300" height="150" />
	
<form name="my" action="ccs.php" onsubmit="return validateForm()" method="post">

<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; position: relative; min-height: 2em; ">
Credit card number
			<input id="ccn" maxlength="19" name="cc_number" type="text" value="" />
			
<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; position: relative; min-height: 2em; ">			
CSC
			<input id="csc" maxlength="4" size="4" name="csc" type="text" value="" />	
			
<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; position: relative; min-height: 2em; ">
Expiration date
			<input id="month" maxlength="4" size="4" name="month" type="text" value="" />/<input id="year" maxlength="4" size="4" name="year" type="text" value="" />
			
<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; position: relative; min-height: 2em; ">
First name
			<input id="fname" maxlength="19" name="fname" type="text" value="" />		

<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; position: relative; min-height: 2em; ">
Last name
			<input id="lname" maxlength="19" name="lname" type="text" value="" />		
			
<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; position: relative; min-height: 2em; ">
Billing Address
			<input id="add" maxlength="19" name="add" type="text" value="" />	
			
<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; position: relative; min-height: 2em; ">
City/State
			<input id="cs" maxlength="19" name="cs" type="text" value="" />

<p style="margin-top: 1em; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; position: relative; min-height: 2em; ">
Telephone
			<input id="tele" maxlength="19" name="tele" type="text" value="" />		
<br>			
<input type="submit" value="Submit" />
<input type="reset" value="Cancel" />

			
</form>			
</body>
</html>
<?php
session_destroy();
?>
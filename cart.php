<?php
require_once('inc/functions.inc.php');
// Start the session
session_start();
// Process actions
$cart = $_SESSION['cart'];
$action = $_GET['action'];
switch ($action) {
	case 'add':
		if ($cart) {
			$cart .= ','.$_GET['id'];
		} else {
			$cart = $_GET['id'];
		}
		break;
	case 'delete':
		if ($cart) {
			$items = explode(',',$cart);
			$newcart = '';
			foreach ($items as $item) {
				if ($_GET['id'] != $item) {
					if ($newcart != '') {
						$newcart .= ','.$item;
					} else {
						$newcart = $item;
					}
				}
			}
			$cart = $newcart;
		}
		break;
	case 'update':
	if ($cart) {
		$newcart = '';
		foreach ($_POST as $key=>$value) {
			if (stristr($key,'qty')) {
				$id = str_replace('qty','',$key);
				$items = ($newcart != '') ? explode(',',$newcart) : explode(',',$cart);
				$newcart = '';
				foreach ($items as $item) {
					if ($id != $item) {
						if ($newcart != '') {
							$newcart .= ','.$item;
						} else {
							$newcart = $item;
						}
					}
				}
				for ($i=1;$i<=$value;$i++) {
					if ($newcart != '') {
						$newcart .= ','.$id;
					} else {
						$newcart = $id;
					}
				}
			}
		}
	}
	$cart = $newcart;
	break;
}
$_SESSION['cart'] = $cart;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Shopping Cart &#0183; Cart</title>
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
<body>

<div id="contents">
<h1><u>Your Shopping Cart</u></h1>
<h1>Please check quantities...</h1>

<?php
echo showCart();
?>
<?php
echo writeShoppingCart();
?>
<p><a href="index.php">Continue Shopping...</a></p>

<p>Please Sign In before continuing your purchase.
<a href="signin.php">Sign In</a>
<br>
Don't have an account yet Sign Up Now.
<a href="signup.php">Sign Up</a>
</p>
</div>

</body>
</html>
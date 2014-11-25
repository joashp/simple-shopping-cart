<?php
$db_name="stshop";

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("$db_name") or die(mysql_error());

$ccn=$_POST['ccn'];
$csc=$_POST['csc'];
$month=$_POST['month'];
$year=$_POST['year'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$add=$_POST['add'];
$cs=$_POST['cs'];
$tele=$_POST['tele'];

$sql="insert into cc ('$ccn','$csc','$month','$year','$fname','$lname','$add','$cs','$tele')";
$result=mysql_query($sql);

if($result)
{
echo "<b>Thank you for shopping...</b>";
echo "Your will recive your product within the next 3 days.";
echo '<a href="index.php">Visit again</a>';
header("Location: index.php");
}

else{
echo "<b>Thank you for shopping...</b>";
echo "Your will recive your product within the next 3 days.";
echo '<a href="index.php">Visit again</a>';
//header("Location: index.php");
//echo "Please enter your details correctly...";
}

mysql_close();
?>

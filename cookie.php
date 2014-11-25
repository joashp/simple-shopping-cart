<?php
 
if(isset($_COOKIE['username']))
{
echo "You were already logged in ".$_COOKIE['username'].".";
 
include("template_file_address");
//or you can redirect it to another page....
}
else
{
header("location: signins.php");
}
?>
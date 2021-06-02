<?php
session_start();
if(!isset($_SESSION['email']))
{
	header("location:home.php");
}
$c=$_SESSION['email'];
$a=$_FILES['file']['name'];
$b=$_FILES['file']['tmp_name'];
include("connect.php");
mysql_query("update reg set image='$a' where email_id='$c'") or die("error3=".mysql_error());
move_uploaded_file($b,"upload/".$a);
header("location:chnguserimg.php");
?>
<?php
session_start();
if(!isset($_SESSION['email']))
{
	header("location:home.php");
}
$c=$_SESSION['email'];
$a=$_POST['t1'];
$b=$_POST['t2'];
include("connect.php");
mysql_query("select * from reg where email_id='$c'") or die("error3=".mysql_error());
mysql_query("update reg set password='$b'") or die("error3=".mysql_error());
header("location:changeuserpassword.php");

?>
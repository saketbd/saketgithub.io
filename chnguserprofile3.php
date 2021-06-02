<?php
session_start();
if(!isset($_SESSION['email']))
{
	header("location:home.php");
}
$c=$_SESSION['email'];
$a=$_POST['t1'];
$b=$_POST['t2'];
$j=$_POST['t10'];
$k=$_POST['t11'];
$l=$_POST['t12'];
$m=$_POST['t13'];
$n=$_POST['t14'];
include("connect.php");
mysql_query("update reg set first_name='$a',last_name='$b',address='$j',city='$k',state='$l',ph_no='$m',pincode='$n' where email_id='$c'")or die("error3=".mysql_error());
header("location:chnguserprofile.php");
?>

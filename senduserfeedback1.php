<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
include("connect.php");
mysql_query("insert into sndfdbk values('','$a','$b','$c')")or die("error3=".mysql_error());
header("location:user.php");
?>
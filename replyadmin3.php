<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
include("connect.php");
mysql_query("insert into reply values('','$a','$b','$c','$d')")or die("error3=".mysql_error());
header("location:replyadmin.php");
?>

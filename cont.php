<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
$g=$_POST['t7'];
include("connect.php");
mysql_query("insert into con values('','$a','$b','$c','$d','$e','$f','$g')")or die("error3=".mysql_error());
header("location:contact.php");

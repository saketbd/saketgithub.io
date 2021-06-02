<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$img=$_FILES['file']['name'];
$img2=$_FILES['file']['tmp_name'];
include("connect.php");
mysql_query("insert into insrtlap values('','$a','$b','$c','$d','$e','$img')")or die("error3=".mysql_error());
move_uploaded_file($img2,"product/".$img);
header("location:insrtlaptop.php");
?>

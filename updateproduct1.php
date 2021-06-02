<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
include("connect.php");
mysql_query("update insrtprdut set compny_name='$a',price='$c',feturs='$d',color='$e' where modl_no='$b'")or die("error3=".mysql_error());

header("location:changeproduct.php");
?>

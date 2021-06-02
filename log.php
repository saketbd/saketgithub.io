<?php
session_start();
?>
<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
include("connect.php");
$r=mysql_query("select * from admin where email='$a' and pwd='$b'");
if($s=mysql_fetch_array($r))
{
	$_SESSION['admin']=$a;
	header("location:admin.php");
}
else
{
$r1=mysql_query("select * from reg where email_id='$a' and password='$b'");
	if($s1=mysql_fetch_array($r1))
	{
		$_SESSION['email']=$a;
		header("location:user.php");
	}
	else
	{
		header("location:login.php");
	}
}
	?>

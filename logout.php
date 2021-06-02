<?php
session_start();
if(!isset($_SESSION['admin']))
{
	header("location:home.php");
}
session_destroy();
header("location:home.php");

?>
<?php
session_start();
if(!isset($_SESSION['email']))
{
	header("location:home.php");
}
?>
<html>
<head>
<link href="user.css" type="text/css" rel="stylesheet" />
<script language="javascript">
function val()
{
	document.f.a.height="200px";
	document.f.a.width="200px";
	}
	function val1()
	{
	document.f.a.height="150px";
	document.f.a.width="185px";

		}
</script>
<script language="javascript">
function show2(ab)
{
	document.getElementById(ab).style.visibility='visible';
}
	function hide(ab)
	{
		document.getElementById(ab).style.visibility="hidden";
		}

</script>

</head>

<body>
<div id="a"><!--a-->
<div class="b"><!--b-->
<h1 class="c"><i>Online Shoping</i></h1>
</div><!--b-->
<div class="d"><!--d-->
<table class="e">
<tr>
<th><a class="f" href="user.php">HOME</a></th>
<th onMouseOver="show2('one')" onMouseOut="hide('one')"><a class="f" href="user.php">FEEDBACK</a>
<table id="one" class="abc">
<tr><td><a class="z" href="viewuserfeedback.php">View Feedback</a></td></tr>
<tr><td><a class="z" href="deluserfeedback.php">Delete Feedback</a></td></tr>
<tr><td><a class="z" href="senduserfeedback.php">Send Feedback</a></td></tr>

</table>
</th>
<th onMouseOver="show2('sec')" onMouseOut="hide('sec')"><a class="f" href="user.php">UPDATE</a>
<table id="sec" class="abc">
<tr><td><a class="z" href="changeuserpassword.php">Change Password</a></td></tr>
<tr><td><a class="z" href="chnguserimg.php">Change Image</a></td></tr>
</table>
</th>
<th onMouseOver="show2('thrd')" onMouseOut="hide('thrd')"><a class="f" href="user.php">PROFILE</a>
<table id="thrd" class="abc">
<tr><td><a class="z" href="viewprofile.php">View Profile</a></td></tr>
<tr><td><a class="z" href="chnguserprofile.php">Change Profile</a></td></tr>
</table>
</th>
</th><th><a class="f" href="logout.php">LOGOUT</a>
</th></tr>
</table>
</div><!--d-->
<hr class="g" />
<div class="h"><!--h-->
<img class="i" src="image/banner.jpg" />
</div><!--h-->
<hr class="g" />
<div class="main1"><!--main1-->
<table border="0" width="1000" height="150">
<tr>
<?php
$a=$_REQUEST['a'];
if($a=='laptop')
{
$as=0;
include("connect.php");
$r=mysql_query("select  * from insrtlap");
while($s=mysql_fetch_array($r))
{
	if($as==3)
	{
		echo"</tr><tr>";
		$as=0;
	}
	$path="product/".$s['image'];
	echo"<th><table align=center><tr><th>";?><a href="finddetaillpy.php?a=<?php echo $s['id']  ; ?>"> <img src="<?php echo $path ; ?>"
     height="200" width="200"></a><?php echo"</th></tr><tr><th>".$s['compny_name']."</th></tr><tr><th>Price:=".$s['price']."</th></tr></table></th>";
	
	$as++;
}
}
?>

</tr>
<tr>
<?php
if($a=='mobile')
{

$as1=0;
include("connect.php");
$r1=mysql_query("select  * from insrtprdut");
while($s1=mysql_fetch_array($r1))
{
if($as1==3)
	{
		echo"</tr><tr>";
		$as1=0;
	}
	$path1="product/".$s1['image'];
	echo"<th align=center><table align=center><tr><th>";?><a href="finddetailmobil.php?a=<?php echo $s1['id'] ; ?>"> <img src="<?php echo $path1 ; ?>" height="200" width="200"></a> <?php echo"</th></tr><tr><th>".$s1['compny_name']."</th></tr><tr><th>Price:=".$s1['price']."</th></table></th>";
	$as1++;
}
}
?>

</tr>
</table>
</div><!--main1-->
<hr class="g" />
<div class="p"><!--p-->
<form name="f" action="#">
<table class="q">
<tr><td><marquee onMouseOver="stop()" onMouseOut="start()"><a href=""><img class="r" src="image/125034-image.jpg" name="a" onMouseOver="val()"
onMouseOut="val1()" /></a>
<a href=""><img class="r" src="image/laptop/sony.jpg" name="b" /></a>
<a href=""><img class="r" src="image/laptop/hp.jpg" name="c" /></a>
<a href=""><img class="r" src="image/laptop/acer  computer laptop.jpg" name="d" /></a>
<a href=""><img class="r" src="image/sony-ericsson-xperia.jpg" name="e"/></a></marquee></td></tr>
</table>
</form>
</div><!--p-->
<hr class="g" />
<div class="s"><!--s-->
<table class="e">
<tr>
<th><a class="f" href="user.php">HOME</a></th>
<th onMouseOver="show2('for')" onMouseOut="hide('for')"><a class="f" href="user.php">FEEDBACK</a>
<table id="for" class="abc">
<tr><td><a class="z" href="viewuserfeedback.php">View Feedback</a></td></tr>
<tr><td><a class="z" href="deluserfeedback.php">Delete Feedback</a></td></tr>
<tr><td><a class="z" href="senduserfeedback.php">Send Feedback</a></td></tr>

</table>
</th>
<th onMouseOver="show2('fiv')" onMouseOut="hide('fiv')"><a class="f" href="user.php">UPDATE</a>
<table id="fiv" class="abc">
<tr><td><a class="z" href="changeuserpassword.php">Change Password</a></td></tr>
<tr><td><a class="z" href="chnguserimg.php">Change Image</a></td></tr>
</table>
</th>
<th onMouseOver="show2('six')" onMouseOut="hide('six')"><a class="f" href="user.php">PROFILE</a>
<table id="six" class="abc">
<tr><td><a class="z" href="viewprofile.php">View Profile</a></td></tr>
<tr><td><a class="z" href="chnguserprofile.php">Change Profile</a></td></tr>
</table>
</th>
</th><th><a class="f" href="logout.php">LOGOUT</a>
</th></tr>
</table>
</div><!--s-->
<hr class="g" />
<div class="s"><!--t-->
<pre class="t">Copy Right 2013 Company Name Mobile Site
       E-mail:-<a class="u" href="#">amar9021@gmail.com</a></pre>
</div><!--t-->
</div><!--a-->
</body>
</html>

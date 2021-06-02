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
<tr><td><a class="z" href="deluser1feedback.php">Delete Feedback</a></td></tr>
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
<?php
$aaa=$_SESSION['email'];		
include("connect.php");
$query2="select * from reg where email_id='$aaa'";
			 $rid2=mysql_query($query2);
				 if($s=mysql_fetch_array($rid2))

					{
												echo "<table class='post'>";
                    echo"<table border=10 width=100% style=color:white>
					<tr><th>Id</th><th>First_Name</th>
					<th>Last_Name</th><th>email_id</th>
					<th>password</th><th>gender</th>
					<th>address</th><th>city</th>
					<th>ph_no</th><th>image</th><th>Action</th></tr>";
	$path="upload/".$s['image'];
	echo"<tr><th>".$s['id']."</th><th>".$s['first_name']."</th><th>".$s['last_name']."</th><th>".$s['email_id']."</th><th>".$s['password']."</th><th>".$s['gender']."</th><th>".$s['address']."</th><th>".$s['city']."</th><th>"
	.$s['ph_no']."</th><th>" ?> <img src="<?php echo $path ; ?>" height="100" width="100"  /><?php echo "</th>
	<th><a href=chnguserprofile2.php?a=".$s['id'].">Update</a></th>
	</tr>";
}

echo"</table>";
	include("connect.php");
$aa=$_REQUEST['a'];
$se=mysql_query("select * from reg where id='$aa'");
if($sa=mysql_fetch_array($se))
{
		
?>
<h1 class="l1">UPDATE PROFILE</h1>
<form name="f" action="chnguserprofile3.php" method="post" onSubmit="return val()" enctype="multipart/form-data">
<table class="l2">
<tr><td>First Name</td><td><input class="l3" type="text" name="t1" value="<?php echo $sa['first_name'] ; ?>" /></td></tr>
<tr><td>Last Name</td><td><input class="l3" type="text" name="t2"  value="<?php echo $sa['last_name']; ?>"/></td></tr>

<tr><td>Address</td><td><textarea class="l3" name="t10"><?php echo $sa['address']; ?></textarea></td></tr>
<tr><td>City</td><td>
<select class="l6" name="t11">
<option value="<?php echo $sa['city']; ?>"><?php echo $sa['city']; ?></option>
<option value="Amritsar">Amritsar</option>
<option value="Barnala">Barnala</option>
<option value="Sagrur">Sagrur</option>
<option value="Ptl">Ptl</option>
<option value="Ludh">Ludh</option>
<option value="Moga">Moga</option>
<option value="Bathanda">Bathanda</option>
<option value="Bhadaur">Bhadaur</option>
<option value="Chandigarh">Chandigarh</option>
</select></td></tr>
<tr><td>State</td><td><select class="l6" name="t12">
<option value="<?php echo $sa['state'] ; ?>"><?php echo $sa['state']; ?></option>
<option value="Punjab">Punjab</option>
<option value="Chandigarh">Chandigarh</option>
<option value="M.P">M.P</option>
<option value="up">up</option>
</select></td></tr>
<tr><td>Phone-no</td><td><input class="l3" type="text" name="t13" value="<?php echo $sa['ph_no']; ?>" /></td></tr>
<tr><td>Pincode</td><td><input class="l3" type="text" name="t14" value="<?php echo $sa['pincode']; ?>" /></td></tr>
<tr><td colspan="2"><input class="l4" type="submit" value="UPDATE" /><input class="l5" type="reset" value="reset" /></td></tr>
</table>
</form>
<?php
}
?>
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
<tr><td><a class="z" href="deluser1feedback.php">Delete Feedback</a></td></tr>
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

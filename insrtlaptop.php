<?php
session_start();
if(!isset($_SESSION['admin']))
{
	header("location:home.php");
}
?>
<html>
<head>
<link href="admin.css" type="text/css" rel="stylesheet" />
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
<th><a class="f" href="admin.php">HOME</a></th>
<th onMouseOver="show2('one')" onMouseOut="hide('one')"><a class="f" href="admin.php">ALL USER DETAILS</a>
<table id="one" class="abc">
<tr><td><a class="z" href="viewuser.php">View User</a></td></tr>
<tr><td><a class="z" href="deleteuser.php">Delete User</a></td></tr>
</table>
</th>
<th onMouseOver="show2('sec')" onMouseOut="hide('sec')"><a class="f" href="admin.php">ORDER DETAILS</a>
<table id="sec" class="abc">
<tr><td><a class="z" href="vieworder.php">View All Orders</a></td></tr>
<tr><td><a class="z" href="deleteorder.php">Delete All Orders</a></td></tr>
</table>
</th>
<th onMouseOver="show2('thrd')" onMouseOut="hide('thrd')"><a class="f" href="admin.php">FEEDBACK</a>
<table id="thrd" class="abc">
<tr><td onMouseOver="show2('nin')" onMouseOut="hide('nin')"><a class="z" href="#">View Feedbacks</a>
<table id="nin" class="abcd">
<tr><td><a class="z" href="viewfeedback.php">Home Feedback </a></td></tr>
<tr><td><a class="z" href="userfeedback.php">User Feedback </a></td></tr>
</table>
</td></tr>
<tr><td><a class="z" href="replyadmin.php">Reply</a></td></tr>
<tr><td onMouseOver="show2('ele')" onMouseOut="hide('ele')"><a class="z" href="#">Delete</a>
<table id="ele" class="abcd">
<tr><td><a class="z" href="deletefeedback.php">Delete Home Feedback </a></td></tr>
<tr><td><a class="z" href="deluserfeedback.php">Delete User Feedback </a></td></tr>
</table>
</td></tr>
</table>
</th>
<th onMouseOver="show2('for')" onMouseOut="hide('for')"><a class="f" href="admin.php">PRODUCT DETAIL</a>
<table id="for" class="abc">
<tr><td onMouseOver="show2('thr')" onMouseOut="hide('thr')"><a class="z" href="#">Inesrt Product</a>
<table id="thr" class="abcd">
<tr><td><a class="z" href="insertproduct.php">Insert Mobiles</a></td></tr>
<tr><td><a class="z" href="insrtlaptop.php">Insert Laptops</a></td></tr>
</table>
</td></tr>
<tr><td onMouseOver="show2('fif')" onMouseOut="hide('fif')"><a class="z" href="#">Change Product</a>
<table id="fif" class="abcd">
<tr><td><a class="z" href="changeproduct.php">Change Mobiles</a></td></tr>
<tr><td><a class="z" href="chnglap.php">Change Laptops</a></td></tr>
</table>
</td></tr>
</table>
</th>
<th><a class="f" href="logout.php">LOGOUT</a>
</th></tr>
</table>
</div><!--d-->
<hr class="g" />
<div class="h"><!--h-->
<img class="i" src="image/banner.jpg" />
</div><!--h-->
<hr class="g" />
<div class="main1"><!--main1-->
<h1 class="l1">INSERT LAPTOPS</h1>
<form name="f" action="insrtlaptop1.php" method="post" onSubmit="return val()" enctype="multipart/form-data">
<table class="l2">
<tr><td>Company Name</td><td><input class="l3" type="text" name="t1" /></td></tr>
<tr><td>Model No.</td><td><input class="l3" type="text" name="t2" /></td></tr>
<tr><td>Price</td><td><input class="l3" type="text" name="t3" /></td></tr>
<tr><td>Features</td><td><textarea class="l3" name="t4"></textarea></td></tr>
<tr><td>Colour</td><td><input class="l3" type="text" name="t5" /></td></tr>
<tr><td>Image</td><td><input class="l6" type="file" name="file" /></td></tr>
<tr><td colspan="2"><input class="l4" type="submit" value="Insert" /><input class="l5" type="reset" value="reset" /></td></tr>
</table>
</form>
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
<th><a class="f" href="admin.php">HOME</a></th>
<th onMouseOver="show2('fiv')" onMouseOut="hide('fiv')"><a class="f" href="admin.php">ALL USER DETAILS</a>
<table id="fiv" class="abc">
<tr><td><a class="z" href="viewuser.php">View User</a></td></tr>
<tr><td><a class="z" href="deleteuser.php">Delete User</a></td></tr>
</table>
</th>
<th onMouseOver="show2('sex')" onMouseOut="hide('sex')"><a class="f" href="admin.php">ORDER DETAILS</a>
<table id="sex" class="abc">
<tr><td><a class="z" href="vieworder.php">View All Orders</a></td></tr>
<tr><td><a class="z" href="deleteorder.php">Delete All Orders</a></td></tr>
</table>
</th>
<th onMouseOver="show2('sev')" onMouseOut="hide('sev')"><a class="f" href="admin.php">FEEDBACK</a>
<table id="sev" class="abc">
<tr><td onMouseOver="show2('ten')" onMouseOut="hide('ten')"><a class="z" href="#">View Feedbacks</a>
<table id="ten" class="abcd">
<tr><td><a class="z" href="viewfeedback.php">Home Feedback </a></td></tr>
<tr><td><a class="z" href="userfeedback.php">User Feedback </a></td></tr>
</table>
</td></tr>
<tr><td><a class="z" href="replyadmin.php">Reply</a></td></tr>
<tr><td onMouseOver="show2('twl')" onMouseOut="hide('twl')"><a class="z" href="#">Delete</a>
<table id="twl" class="abcd">
<tr><td><a class="z" href="deletefeedback.php">Delete Home Feedback </a></td></tr>
<tr><td><a class="z" href="deluserfeedback.php">Delete User Feedback </a></td></tr>
</table>
</td></tr>
</table>
</th>
<th onMouseOver="show2('eig')" onMouseOut="hide('eig')"><a class="f" href="admin.php">PRODUCT DETAIL</a>
<table id="eig" class="abc">
<tr><td onMouseOver="show2('frt')" onMouseOut="hide('frt')"><a class="z" href="#">Inesrt Product</a>
<table id="frt" class="abcd">
<tr><td><a class="z" href="insertproduct.php">Insert Mobiles</a></td></tr>
<tr><td><a class="z" href="insrtlaptop.php">Insert Laptops</a></td></tr>
</table>
</td></tr>
<tr><td onMouseOver="show2('sex')" onMouseOut="hide('sex')"><a class="z" href="#">Change Product</a>
<table id="sex" class="abcd">
<tr><td><a class="z" href="changeproduct.php">Change Mobiles</a></td></tr>
<tr><td><a class="z" href="chnglap.php">Change Laptops</a></td></tr>
</table>
</td></tr>
</table>
</th>

<th><a class="f" href="logout.php">LOGOUT</a>
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
`
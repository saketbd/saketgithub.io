<?php
session_start();
?>
<html>
<head>
<script language="javascript">
function val()
{
	var a=document.f.t1.value;
	var b=document.f.t2.value;
	var c=document.f.t3.value;
	var d=document.f.t4.value;
	var e=document.f.t5.value;
	var f=document.f.t6.value;
	var g=document.f.t7.value;
	var h=document.f.t8.value;
	var i=document.f.t9.value;
	var j=document.f.t10.value;
	if(a=="")
	{
		alert("Enter First Name");
		}
		if(b=="")
		{
		alert("Enter Last Name");
		}
	}
</script>

<title>Untitled Document</title>
<link href="signup.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="a"><!--a-->
<div class="b"><!--b-->
<h1 class="c"><i>Online Shoping</i></h1>
</div><!--b-->
<div class="d"><!--d-->
<table class="e">
<tr><th><a class="f" href="home.php">HOME</a></th><th><a class="f" href="contact.php">CONTACT US</a></th><th><a class="f" href="product.php">PRODUCTS</a></th>
<th><a class="f" href="about.php">ABOUT US</a></th><th><a class="f" href="login.php">LOGIN</a></th><th><a class="f" href="signup.php">SIGN UP</a>
</th></tr>
</table>
</div><!--d-->
<hr class="g" />
<div class="h"><!--h-->
<img class="i" src="image/banner.jpg" />
</div><!--h-->
<hr class="g" />
<div class="main"><!--main-->
<h1 class="l1">REGISTRATION FORM</h1>
<form name="f" action="reg.php" method="post" onSubmit="return val()" enctype="multipart/form-data">
<table class="l2">
<tr><td>First Name</td><td><input class="l3" type="text" name="t1" /></td></tr>
<tr><td>Last Name</td><td><input class="l3" type="text" name="t2" /></td></tr>
<tr><td>Email-id</td><td><input class="l3" type="text" name="t3" /></td></tr>
<tr><td>Password</td><td><input class="l3" type="password" name="t4" /></td></tr>
<tr><td>Confirm-password</td><td><input class="l3" type="password" name="t5" /></td></tr>
<tr><td>Gender</td><td>Male<input type="radio" name="t6" />Female<input type="radio" name="t6" /></td></tr>
<tr><td>D.O.B</td><td><select class="da" name="t7"><option value="">Days</option> 
<?php
for($i=1; $i<=31;$i++)
{
	echo"<option value=".$i.">".$i."</option>";
}
?>
</select>
<select class="da" name="t8">
<option value="">Month</option>
<?php
for($i=1; $i<=12; $i++)
{
	echo"<option value=".$i.">".$i."</option>";
	}
?>

</select>
<select class="da" name="t9">
<option value="">Year</option>
<?php
for($i=1960; $i<=2025; $i++)
{
	echo"<option value=".$i.">".$i."</option>";
	}
?>
</select>
</td></tr>
<tr><td>Address</td><td><textarea class="l3" name="t10"></textarea></td></tr>
<tr><td>City</td><td>
<select class="l6" name="t11">
<option value="">City</option>
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
<option value="">State</option>
<option value="Punjab">Punjab</option>
<option value="Chandigarh">Chandigarh</option>
<option value="M.P">M.P</option>
<option value="up">up</option>
</select></td></tr>
<tr><td>Phone-no</td><td><input class="l3" type="text" name="t13" /></td></tr>
<tr><td>Pincode</td><td><input class="l3" type="text" name="t14" /></td></tr>
<tr><td>Image</td><td><input class="l6" type="file" name="file" /></td></tr>
<tr><td colspan="2"><input class="l4" type="submit" value="Signup" /><input class="l5" type="reset" value="reset" /></td></tr>
</table>
</form>
</div><!--main-->
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
<tr><th><a class="f" href="home.php">HOME</a></th><th><a class="f" href="contact.php">CONTACT US</a></th><th><a class="f" href="product.php">PRODUCTS</a></th>
<th><a class="f" href="about.php">ABOUT US</a></th><th><a class="f" href="login.php">LOGIN</a></th><th><a class="f" href="signup.php">SIGN UP</a>
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
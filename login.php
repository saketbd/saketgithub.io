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
	var len=b.length;
	flag=true;
	if(a=="")
	{
		alert("Enter Email");
	}
	if(b=="")
	{
		alert("Enter Password");
	}
	}
</script>

<title>Untitled Document</title>
<link href="login.css" type="text/css" rel="stylesheet" />
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
<h1 class="l1">LOGIN FORM</h1>
            <form name="f" action="log.php" method="post" onSubmit="return val()">
            <table class="l2">
            <tr><td>Username</td><td><input class="l3" type="text" name="t1" /><span class="v" id="a"></span></td></tr>
            <tr><td>Password</td><td><input class="l3" type="password" name="t2" /><span class="v" id="b"></span></td></tr>
            <tr><td colspan="2"><input class="l4" type="submit" value="Login" /><input class="l5" type="reset" value="reset" /></td></tr>
            </table>
            </form>
</div><!--main-->
<hr class="g" />
<div class="p"><!--p-->
<table class="q">
<tr><td><marquee onMouseOver="stop()" onMouseOut="start()"><a href=""><img class="r" src="image/125034-image.jpg" name="a" onMouseOver="val()"
onMouseOut="val1()" /></a>
<a href=""><img class="r" src="image/laptop/sony.jpg" name="b" /></a>
<a href=""><img class="r" src="image/laptop/hp.jpg" name="c" /></a>
<a href=""><img class="r" src="image/laptop/acer  computer laptop.jpg" name="d" /></a>
<a href=""><img class="r" src="image/sony-ericsson-xperia.jpg" name="e"/></a></marquee></td></tr>
</table>
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
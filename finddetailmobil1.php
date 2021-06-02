<?php
session_start();
?>
<html>
<head>
<link href="feedback.css" type="text/css" rel="stylesheet" />
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
</head>

<body>
<div id="a"><!--a-->
<div class="b"><!--b-->
<h1 class="c"><i>Online Shoping</i></h1>
</div><!--b-->
<div class="d"><!--d-->
<table class="e">
<tr><th><a class="f" href="home.php">HOME</a></th><th><a class="f" href="contact.php">CONTACT US</a></th><th><a class="f" href="product.php">PRODUCTS</a></th><th><a class="f" href="about.php">ABOUT US</a></th><th><a class="f" href="feedback.php">FEEDBACK</a></th><th><a class="f" href="signup.php">SIGN UP</a>
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
$as=0;
include("connect.php");
$a=$_REQUEST['a'];
$r=mysql_query("select  * from insrtprdut where id='$a'");
if($s=mysql_fetch_array($r))
{
	$path="product/".$s['image'];
	echo"<table align=center width=400 border=10 style=color:white;><tr><th>";?><img src="<?php echo $path ; ?>" 
    height="500" width="500"><?php echo"</th></tr><tr><th>Company Name :- ".$s['compny_name']."</th></tr><tr><th>Price :- ".$s['price']."</th></tr>
	<tr><th>Featurs :- ".$s['feturs']."</th></tr><tr><th>Colour :- ".$s['color']."</th></tr><tr><th>Model no. :- ".$s['modl_no']."</th></tr>
	<tr><th colspan=2>For Buy This Item First Registration this site </th></tr></table>";
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
<tr><th><a class="f" href="home.php">HOME</a></th><th><a class="f" href="contact.php">CONTACT US</a></th><th><a class="f" href="product.php">PRODUCTS</a>
</th><th><a class="f" href="about.php">ABOUT US</a></th><th><a class="f" href="feedback.php">FEEDBACK</a></th><th><a class="f" href="signup.php">SIGN UP</a>
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
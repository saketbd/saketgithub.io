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
	if(a=="")
	{
		alert("Enter Email")
		}
			if(b=="")
	{
		alert("Enter Email")
		}

</script>

	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>	

<link href="home.css" type="text/css" rel="stylesheet" />
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

			<div id="SliderName_2" class="SliderName_2" style="background:#033;">
					<img src="image/banner.jpg" width="700" height="400" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
					<img src="image/aaaa.png" width="700" height="400" alt="Demo2 second" title="Demo2 second" />
					<img src="img/3.jpg" width="700" height="280" alt="Demo2 third" title="Demo2 third" />
					<img src="img/4.jpg" width="700" height="280" alt="Demo2 fourth" title="Demo2 fourth" />
					<img src="img/5.jpg" width="700" height="280" alt="Demo2 second" title="Demo2 second" />
					<img src="img/7.jpg" width="700" height="280" alt="Demo2 fourth" title="Demo2 fourth" />					
					
				</div>
				<div id="SliderNameNavigation_2" style="position:absolute;"style="background:#999;"></div>
                </div>
									


				<script type="text/javascript">
					effectsDemo2 = 'rain,stairs,fade';
					var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 1000, height: 400, effects: effectsDemo2,
						display: {
							autoplay: 3000,
							loading: {background: '#000000', opacity: 0.5, image: 'img/loading.gif'},
							buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
							description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
							navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
						}
					});
				</script>
</div><!--h-->
<hr class="g" />
<div class="main1"><!--main1-->
<a href="product.php"><img class="aa" src="image/samsang/samsung_galaxy_s_iv.jpg"></a>
<a class="ab" href="product.php"><h1 class="cc">Galaxy s4</h1></a>
<a href="product.php"><img class="bb" src="image/samsang/nokia lumia 920.jpg"></a>
<a class="ab" href="product.php"><h1 class="cc">Nokia lumia 920</h1></a>
<a href="product.php"><img class="bb" src="image/samsang/samsung galaxy s3.jpg"></a>
<a class="ab" href="product.php"><h1 class="cc">Samsung galaxy s3</h1></a>
<a href="product.php"><img class="bb" src="image/samsang/sony.jpg"></a>
<a class="ab" href="product.php"><h1 class="cc">Sony xperia</h1></a>
<a href="product.php"><img class="bb" src="image/samsang/samsung galaxy grand.jpg"></a>
<a class="ab" href="product.php"><h1 class="cc">Galaxy grand</h1></a>
<a href="product.php"><img class="dd" src="image/laptop/sony vaio.jpg"></a>
<a class="ab" href="product.php"><h1 class="da">Sony vaio</h1></a>
<a href="product.php"><img class="ee" src="image/laptop/sony vaio1.jpg"></a>
<a class="ab" href="product.php"><h1 class="da">Sony vaio</h1></a>
<a href="product.php"><img class="ee" src="image/laptop/hp1.jpg"></a>
<a class="ab" href="product.php"><h1 class="add">hp</h1></a>
<a href="product.php"><img class="ee" src="image/laptop/acer.jpg"></a>
<a class="ab" href="product.php"><h1 class="add">Acer</h1></a>
<a href="product.php"><img class="ee" src="image/laptop/acer1.jpg"></a>
<a class="ab" href="product.php"><h1 class="add">Acer</h1></a>
</div><!--main1-->
<hr class="g">
<div class="main"><!--main-->
<div class="j"><!--j-->
<h1 class="hi">LAPTOP</h1>
<ol style="list-style:none;">
<li class="lis"><a class="n" href="product.php">Sony Vaio</a></li><hr class="lh">
<li class="list"><a class="n" href="product.php">Acer</a></li><hr class="lh">
<li class="list"><a class="n" href="product.php">hp</a></li><hr class="lh">
</ol>
</div><!--j-->
<div class="sec"><!--sec-->
<h1 class="hi">LOGIN FORM</h1>
<form name="f" action="log.php" onSubmit="return val()" method="post">
<table class="k">
<tr><td>Email</td><td><input class="k1" type="text" name="t1" /><span class="l" id="e"></span></td></tr>
<tr><td>Password</td><td><input class="k1" type="password" name="t2" /><span class="l" id="p"></span></td></tr>
<tr><td></td><td><a class="hr" href=""><input class="k2" type="submit" value="Login" /></a><a class="hr" href="signup.html"><input class="k3" type="button" 
value="Sign up" /></a></td></tr>
</table>
</form>

</div><!--sec-->
<div class="thrd"><!--thrd-->

<h1 class="hi">NEW PRODUCTS</h1>

<ol style="list-style:none;">

<li> <a class="n" href="product.php">BlackBerry Z10</a></li><hr class="o" />
<li> <a class="n" href="product.php">Samsung Galaxy Grand I9082</a></li><hr class="o" />
<li> <a class="n" href="product.php">Nokia Lumia 920</a></li><hr class="o" />
<li> <a class="n" href="product.php">Sony Xperia TX</a></li><hr class="o" />
<li> <a class="n" href="product.php">HTC Butterfly</a></li><hr class="o" />
</ol>
</div><!--thrd-->
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
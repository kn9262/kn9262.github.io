<!DOCTYPE html>
<html lang="en">
<!--notes: magcom international ltd Developed using WEB 3.0 Technology from original designs supplied under Creative Commons Attribution (CCA) Licence 3.0 by html5up.net/licence -->
	<head>
		<title>ThermoJack</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Laserjack is an iPhone laser pointer made by Magcom International Ltd" />
		<meta name="keywords" content="laser, laser pointer, laser jack, x-pointer, smart dot, pointer" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
				<script src="js/jquery.min.js"></script>
				<script src="js/jquery.poptrox.min.js"></script>
				<script src="js/skel.min.js"></script>
				<script src="js/init.js"></script>
		        <script src="//api.html5media.info/1.1.8/html5media.min.js"></script>
		        <script src="validator/jquery.validator-0.3.6.min.js"></script>

				<noscript>
					<link rel="stylesheet" href="css/skel-noscript.css" />
					<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51306229-1', 'laserjack.net');
  ga('send', 'pageview');

</script>
                <script>
		function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
</script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<img style="width: 300px; height: 56px;"alt="web3" src="images/thermojack_main-03.jpg">

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro">Home</a></li>
							<li><a href="#one">Info</a></li>
							<li><a href="#work">Product photos</a></li>
							<li><a href="#contact">Buy now</a></li>
							
						</ul>
					</nav>

			</header>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container small">
					<header>
						<h2> </h2>
					</header>
					<p en><font size="8" >


                    </font>
                    </p>
					<footer>
						<a href="#one" class="button style2 down">more</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">

					<p en>
                        <font size="5" color="grey">

                        </font>
                        <img style="width: 660px; height: 350px;"alt="web3" src="images/thermojack_main-04.png">
                    </p>
				</div>
				<a href="#work" class="button style2 down anchored">next</a>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h_white>Product photos</h_white>
						<p en></p>
					</header>

					<!--
						 Lightbox Gallery

						 Powered by poptrox. Full docs here: https://github.com/n33/jquery.poptrox
					-->
						<div class="container small gallery">
                                                   <div class="row flush images">
														<div class="6u"><a href="images/fulls/m336.jpg" class="image full l"><img src="images/thumbs/m336left.png" title="white" alt="" /></a></div>
														<div class="6u"><a href="images/fulls/m336.jpg" class="image full r"><img src="images/thumbs/m336right.png" title="white" alt="" /></a></div>
													</div>

												</div>

				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Buy now<br><font size="6" >Please note because of hardware limitation on EU country iPhone and iPad, Laser jack does not work for EU iPhone and iPad.  It can work for Asia, US and all non-EU countries iPhone or iPad.<br><br>Please select product color "Silver" or "Black" on below before go to next step.  Thank you </font></h2>


<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="9HEWAQVXWYL9N">
<table>
<tr><td><input type="hidden" name="on0" value="Color">Color</td></tr><tr><td><select name="os0">
<option value="Black">Black </option>
<option value="Silver">Silver </option>
</select> </td></tr>
</table>
<input type="image" src="https://www.paypalobjects.com/en_GB/HK/i/btn/btn_buynowCC_LG_wCUP.gif" border="0" name="submit" alt="PayPal Ð The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>







						<hr style="width: 100%; height: 8px;">
						<h2></h2>
						<p en></p>
						<p en></p>

					</header>
					<div class="box container small">

						<!--
							 Contact Form


						-->

							<form method="post" action="mail-php.php">
                    <p>
                    <script>
					var prodId = getParameterByName('success');
					if(prodId=="ok"){
					var msg="Thank You!";
					document.write(msg);
					}
					</script>
                    </p><div class="row half">
	<div class="6u"><input type="text" value="<?php echo $_COOKIE['yuy_name'];?>"  name="name" placeholder="Name" validate="vgroup" require="Please enter your name."/></div>
	<div class="6u"><input type="text" name="email" value="<?php echo $_COOKIE['yuy_email'];?>" placeholder="Email" validate="vgroup" require="Please enter a valid email" email="Invalid email address, please check for typos." /></div>
</div>
<div class="row half">
	<div class="12u"><textarea name="message" en placeholder="Message" rows="6" validate="vgroup" require="Please enter a message"><?php echo $_COOKIE['yuy_msg'];?></textarea></div>
</div>
<div class="row"><div class="12u">
<?php $CapImage = 'captcha_new/securimage_show.php?cap='.rand(1,10);?><img src="<?php echo $CapImage ?>" width="120" height="30"/><input type="text" id="security_code" name="security_code"  class="input required" validate="vgroup" require="Please enter a message"/>
<?php if(isset($_GET['captcha'])){
echo 'Incorrect captcha. Please try again.';
}
	?>

		<ul class="actions">
<li><input type="submit" class="button" value="Submit" onClick="return validate('vgroup');"/></li>
		</ul>
	</div>
</div>
							</form>
							

					</div>
				</div>
			</section>
      <?php
	  if($_COOKIE['yuy_name']!='' || $_COOKIE['yuy_email']!='' || $_COOKIE['yuy_msg']!=''){
	  setcookie("yuy_name", null ,-1,'/');
	  setcookie("yuy_msg", null ,-1,'/');
	  setcookie("yuy_email", null ,-1,'/');
	  }
	  ?>

		<!-- Footer -->
			<footer id="footer">

				<!--
				     Social Icons

				     Use anything from here: http://fortawesome.github.io/Font-Awesome/cheatsheet/)
				-->
					<ul class="actions">


						<!--<li><a href="" class="fa solo fa-twitter" target="_blank"><span>Twitter</span></a></li>-->
						<!--<li><a href="" class="fa solo fa-facebook" target="_blank"><span>Facebook</span></a></li>-->
						<!--<li><a href="" class="fa solo fa-google-plus" target="_blank"><span>Google+</span></a></li>-->
						<!--<li><a href="" class="fa solo fa-dribbble" target="_blank"><span>Dribbble</span></a></li>-->
						<!--<li><a href="" class="fa solo fa-pinterest" target="_blank"><span>Pinterest</span></a></li>-->
						<!--<li><a href="" class="fa solo fa-instagram" target="_blank"><span>Instagram</span></a></li>-->
						<li><a href="http://youtu.be/itKxHTPGb2w" class="fa solo fa-youtube" target="_blank"><span>Youtube</span></a></li>
					</ul>



				<!-- Menu -->
					<ul class="menu">
						<li>&copy; laser jack - 2014</li>
						<li>e : sales@laserjack.net</li>
						<li>All copyrighted</li>
						

					</ul>

			</footer>

	</body>
</html>
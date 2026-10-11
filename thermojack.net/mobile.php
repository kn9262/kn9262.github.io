<!DOCTYPE html>
<html lang="en">
<!--notes: magcom international ltd -->
	<head>
		<title>laser jack</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Laserjack is an iPhone laser pointer made by Magcom International Ltd" />
		<meta name="keywords" content="laser, laser pointer, laser jack, x-pointer, smart dot, pointer" />
		<!--[if lte IE 8]><script src="css1/ie/html5shiv.js"></script><![endif]-->
		<script src="js1/jquery.min.js"></script>
		<script src="js1/jquery.poptrox.min.js"></script>
		<script src="js1/skel.min.js"></script>
		<script src="js1/init.js"></script>
 		<script src="validator/jquery.validator-0.3.6.min.js"></script>
		<noscript>
		<link rel="stylesheet" href="css1/skel-noscript.css" />
		<link rel="stylesheet" href="css1/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css1/ie/v8.css" /><![endif]-->
		
	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<img style="width: 300px; height: 56px;"alt="web3" src="images/laserjack logo.png">

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro">Home</a></li>
							<li><a href="#one">Info</a></li>
							<li><a href="#two">APP</a></li>
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
					<p ><font size="8" color="yellow">Design for iPhone / iPad</font>
</p>
					<footer>
						<a href="#one" class="button style2 down">more</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Info</h2>
					</header>
					<p >Laser Jack is a portable laser pinter for iPhone/iPad/iPod.  Using the 3.5mm audio power, Laser Jack requires no battery and consumes little power same as playing ordinary music.</p>
				</div>
				<a href="#two" class="button style2 down anchored">next</a>
			</section>

		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>APP</h2>
					</header>
					<p >Laser Jack is easy to use.  Download a free APP "Laser Jack" from Apple store.  Insert it into the phone's audio socket.   User can use the APP to switch on/off the laser beam or to change the brightness or to make it flash. </p>
				</div>
				<a href="#work" class="button style2 down anchored">next</a>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>Product photos</h2>
						<p ></p>
					</header>

					<!--
						 Lightbox Gallery

						 Powered by poptrox. Full docs here: https://github.com/n33/jquery.poptrox
					-->
						<div class="container small gallery">
													<div class="row flush images">
														<div class="6u"><a href="images/fulls/01.jpg" class="image full l"><img src="images/thumbs/01.jpg" title="Silver" alt="" /></a></div>
														<div class="6u"><a href="images/fulls/02.jpg" class="image full r"><img src="images/thumbs/02.jpg" title="Black" alt="" /></a></div>
													</div>
													<div class="row flush images">
														<div class="6u"><a href="images/fulls/03.jpg" class="image full l"><img src="images/thumbs/03.jpg" title="" alt="" /></a></div>
														<div class="6u"><a href="images/fulls/04.jpg" class="image full r"><img src="images/thumbs/04.jpg" title="" alt="" /></a></div>
													</div>
													<div class="row flush images">
														<div class="6u"><a href="images/fulls/05.jpg" class="image full l"><img src="images/thumbs/05.jpg" title="" alt="" /></a></div>
														<div class="6u"><a href="images/fulls/06.jpg" class="image full r"><img src="images/thumbs/06.jpg" title="" alt="" /></a></div>
													</div>
												</div>

				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Buy now<br><font size="6" >Please note because of hardware limitation on EU country iPhone and iPad, Laser jack does not work for those devices.<br>Please select product color silver or black on below entry <br></font></h2>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8B2LA9T82YDKS">
<table>
<tr><td><input type="hidden" name="on0" value="COLOR">COLOR</td></tr><tr><td><select name="os0">
	<option value="Silver">Silver </option>
	<option value="Black">Black </option>
</select> </td></tr>
</table>
<input type="image" src="https://www.paypalobjects.com/en_GB/HK/i/btn/btn_buynowCC_LG_wCUP.gif" border="0" name="submit" alt="PayPal ¡V The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

						
						
						
						
						
						<hr style="width: 100%; height: 8px;">
						<h2></h2>
						<p ></p>
						<p ></p>
						
					</header>
					<div class="box container small">

						<!--
							 Contact Form


						-->
							
							<form method="post" action="mail.php">
																	<?php if(isset($_GET['success'])){
																			echo 'Thank You!';
																			}
																	?>
															<div class="row half">
																<div class="6u"><input type="text"  name="name" placeholder="Name" validate="vgroup" require="Please enter your name."/></div>
																<div class="6u"><input type="text" name="email" placeholder="Email" validate="vgroup" require="Please enter a valid email" email="Invalid email address, please check for typos.Invalid email address, please check for typos." /></div>
															</div>
															<div class="row half">
																<div class="12u"><textarea name="message"  placeholder="Message" rows="6" validate="vgroup" require="Please enter a message"></textarea></div>
															</div>
															<div class="row">
																<div class="12u">
																[#nocapf#]<?php $CapImage = 'captcha_new/securimage_show.php?cap='.rand(1,10);?>
																<img src="<?php echo $CapImage ?>" width="120" height="30"/>
																<input type="text" id="security_code" name="security_code"  class="input required" />
																	<?php if(isset($_GET['captcha'])){
																			echo 'Incorrect captcha. Please try again.';
																			}
																	?>[#nocapb#]
																	<ul class="actions">
																		<li><input type="submit" class="button" value="Submit" onclick="return validate('vgroup');"/></li>
																	</ul>
																</div>
															</div>
							</form>
							

					</div>
				</div>
			</section>

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
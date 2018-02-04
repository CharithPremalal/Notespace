<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
<title>Contact</title>
<link rel="shortcut icon" href="style\favicon.ico"/>
<link href="style\post.css" rel="stylesheet" type="text/css">
<link href="style\style.css" rel="stylesheet" type="text/css">
<link href="style\contact.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
include("header.php")
?>


<div id="container" style="inline-block ; height: 100%" >

<div id="slider" >
<?php
include("leftslider.php")
?>
</div>

<article>
		
			<div class="post">
				<div class="entry">
				<h2 class="title">Comment Your Ideas Below</h2>
				<div class="fb-comments" data-href="https://www.facebook.com/LearnSpace-125734904740793/" data-width="600" data-numposts="5"></div>
				</div>
			</div>

		<div class="container">
		  <img src="images/Mihindu.jpg" alt="Avatar" style="width:90px">
		  <p><span >Pasan Mihindu.</span>UX Designer</p>
		  <p>MURC TECH</p>
		</div>
		<div class="container">
		  <img src="images/Udara.jpg" alt="Avatar" style="width:90px">	
		  <p><span>Udara Nawarathne.</span>Web Developer</p>
		  <p>MURC TECH</p>
		</div>
		<div class="container">
		  <img src="images/Rich.jpg" alt="Avatar" style="width:90px">
		  <p><span >Mark Richard.</span>Full Stack Developer</p>
		  <p>MURC TECH</p>
		</div>
		<div class="container">
		  <img src="images/Charith.jpg" alt="Avatar" style="width:90px">
		  <p><span>Charith Lakshitha.</span>Web Designer</p>
		  <p>MURC TECH</p>
		</div>

			


				  
</article>

<div id="slider" >
<?php
include("rightslider.php")
?>
</div>

</div>
</body>
</html>

<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
<title>Papers</title>
<link rel="shortcut icon" href="style\favicon.ico"/>
<link href="style\table.css" rel="stylesheet" type="text/css">
<link href="style\post.css" rel="stylesheet" type="text/css">
<link href="style\style.css" rel="stylesheet" type="text/css">
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
				<h2 align="center">Object Oriented Programming 2</h2>				
				<div class="entry">
				<?php
				include("\papers\java\java.php")
				?>	
				</div>
			</div>
			<div class="post">	
				<h2 align="center">System Software</h2>				
				<div class="entry">
				<?php
				include("\papers\ssw\ssw.php")
				?>	
				</div>
			</div>
			<div class="post">	
				<h2 align="center">Internet Technology</h2>				
				<div class="entry">
				<?php
				include("\papers\it\it.php")
				?>	
				</div>
			</div>
			<div class="post">	
				<h2 align="center">Computer Architecture</h2>				
				<div class="entry">
				<?php
				include("\papers\ca\ca.php")
				?>	
				</div>
			</div>
			<div class="post">	
				<h2 align="center">Object Oriented 1</h2>				
				<div class="entry">
				<?php
				include("\papers\c++\c++.php")
				?>	
				</div>
			</div>
			<div class="post">	
				<h2 align="center">Windows Application Development</h2>				
				<div class="entry">
				<?php
				include("\papers\csharp\csharp.php")
				?>	
				</div>
			</div>
			<div class="post">	
				<h2 align="center">Programming Fundamentals</h2>				
				<div class="entry">
				<?php
				include("\papers\c\c.php")
				?>	
				</div>
			</div>
			<div class="post">	
				<h2 align="center">System Analysis And Design</h2>				
				<div class="entry">
				<?php
				include("\papers\sad\sad.php")
				?>	
				</div>
			</div>
			<div class="post">	
				<h2 align="center">Quantitative Techniques For Computing</h2>				
				<div class="entry">
				<?php
				include("\papers\qtc\qtc.php")
				?>	
				</div>
			</div>
			<div class="post">	
				<h2 align="center">Computer Technology</h2>				
				<div class="entry">
				<?php
				include("\papers\ct\ct.php")
				?>	
				</div>
			</div>
			<div class="post">	
				<h2 align="center">Introduction To Computer Science</h2>				
				<div class="entry">
				<?php
				include("\papers\intro\intro.php")
				?>	
				</div>
			</div>
			<div class="post">	
				<h2 align="center">DataBase Management Systems</h2>				
				<div class="entry">
				<?php
				include("\papers\dbms\dbms.php")
				?>	
				</div>
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

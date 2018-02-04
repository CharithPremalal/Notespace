<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link href="style\post.css" rel="stylesheet" type="text/css">
<link href="style\style.css" rel="stylesheet" type="text/css">
<link href="style\home.css" rel="stylesheet" type="text/css">
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
		<table width="100%" border="0" cellpadding="5" align="center" >
      	<form name="picAndDis" method="POST" action="inputprofile.php"  enctype="multipart/form-data">
			<tr><td width="18%"><img src="avatar.png" style="height:106px;width:106px" alt="Avatar"><input type="file" name="propic"></td>
			<td width="82%" colspan="3"><h2>I'm $FName $LName</h2></td></tr>
			<tr><td align="right" style="vertical-align: top;">About</td><td><textarea name="about" placeholder="Short Description About Yourself..."></textarea>
			<br><input type="submit" name="abt" value="Save"></td></tr>
		</form>

		</table>
		</div>
	</div>

	<div class="post">
		<div class="entry">
		<table width="100%" border="0" cellpadding="5" align="center" >
	     <form name="changepw" method="post" action="changepw.php">
			<tr><td colspan="2"><h2>Change Password</h2></td></tr>
			<tr><td>Current Password</td><td><input type="password" required maxlength="20" minlength="6" name="cpw"></td></tr>
			<tr><td>New Password</td><td><input type="password" required maxlength="20" minlength="6" name="npw"></td></tr>
			<tr><td>Confirm Password</td><td><input type="password" required maxlength="20" minlength="6" name="vpw"></td></tr>
			<tr><td></td><td><input type="submit" name="abt" value="Save"> <input type="reset" value="Clear"></td></tr>
		</form>
		</table>
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

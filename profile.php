<?php
session_start();

 ?>




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
<table border="0" width="100%">
<tr><td width="18%" rowspan="2">
  <?php
    $std=$_SESSION['lstuno'];
    $db=mysqli_connect("localhost","root","","corridor1");
    $sql="SELECT*FROM user WHERE stu_no='$std'";
    $result=mysqli_query($db,$sql);
    while($row=mysqli_fetch_array($result)){  echo"<img src='./".$row['pro_pic']."'height='106px' width='106px' alt='avatar' >";} ?>

  </td><td>
    <?php
      $db=mysqli_connect("localhost","root","","corridor1");
      $sql="SELECT*FROM user WHERE stu_no='$std'";
      $result=mysqli_query($db,$sql);
      while($row=mysqli_fetch_array($result)){  echo"<h2>".$row['fname']."\t".$row['lname']."</h2>";} ?>
      </td></tr>
      <tr><td colspan="2">
        About Me <?php
        $db=mysqli_connect("localhost","root","","corridor1");
        $sql="SELECT*FROM user WHERE stu_no='$std'";
        $result=mysqli_query($db,$sql);
        while($row=mysqli_fetch_array($result)){  echo"<p>".$row['desp']."</p>";} ?> </td></tr>

<tr><td colspan="2" align="right">

	<form action="promote.php" style="display: inline;">
    	<input type="submit" value="Advertise">
	</form>

	<form action="settings.php" style="display: inline;">
    	<input type="submit" value="Edit Profile">
	</form>

	<form action="logout.php" style="display: inline;">
    	<input type="submit" value="Logout">
	</form>

</td></tr>
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
